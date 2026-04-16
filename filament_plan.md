# Filament CMS Plan — HereNowHelp

## Overview

Install and configure Filament v3 as the admin CMS for HereNowHelp. Admins log into `/admin` and get a dashboard where they can manage page content (with per-section show/hide controls), team members, helpful links, and contact form submissions — without touching code.

The core challenge is that all current page content is hardcoded in Blade templates. This plan migrates that content into the database and wires the frontend to pull from it dynamically.

## Decisions

| Question | Answer |
|----------|--------|
| Body editor | WYSIWYG (Filament RichEditor) |
| Section visibility | Admins can show/hide each named section via boolean toggles |
| Hero images | Stay static for existing pages; new uploads (team photos) stored in `/storage` |
| Admin roles | All admins are equal — simple `is_admin` boolean, no role system needed |
| Contact form | Store in DB + email notification to `support@herenowhelp.com` via SendGrid |
| Admin URL | `/admin` (Filament default) |
| News page | Curated links page — managed via RichEditor body field, no separate blog model |
| Helpful links | `/helpful-links` and `/support` stay as separate pages, filtered by category from shared table |
| New pages | Admins can create new static pages; handled via catch-all route + generic template |
| Admin management | All admins can create/edit/delete other admin accounts within the panel |

---

## Phase 1 — Install Filament

### 1.1 Install the package

```bash
composer require filament/filament:"^3.0"
php artisan filament:install --panels
```

This scaffolds:
- `app/Providers/Filament/AdminPanelProvider.php` — panel config
- Admin panel accessible at `/admin`

### 1.2 Create the first admin user

```bash
php artisan make:filament-user
```

### 1.3 Restrict admin access

In `AdminPanelProvider.php`, gate access to users with `is_admin = true`:

```php
->authMiddleware([
    Authenticate::class,
])
->authorization(fn (User $user) => $user->is_admin)
```

Add `is_admin` boolean to the `users` table via a new migration.

---

## Phase 2 — Data Models & Migrations

### 2.1 `pages` table

Each page gets one row. Sections are controlled by text fields (editable content) paired with boolean toggles (show/hide). This lets admins turn sections on and off without deleting the content.

Admins can also create entirely new pages by adding a new row — these are served via a catch-all route and a generic template (see Phase 5.3).

```
id
slug               — unique, matches the route (e.g. 'veterans'). Read-only for seeded pages.
title              — browser tab title
meta_description

-- Hero section --
show_hero          boolean, default true
hero_title         string
hero_subtitle      string

-- Body / main content section --
show_body          boolean, default true
body               longText (WYSIWYG HTML output)

-- CTA section --
show_cta           boolean, default true
cta_text           string  (button label)
cta_subtext        string  (optional line above/below button)

is_published       boolean, default true
timestamps
```

Pages to seed (one row per existing route):
`home`, `veterans`, `students`, `employees`, `rehab`, `government`, `peernow`,
`about-story`, `about-vision`, `team`, `news`, `peer-counseling`, `helpful-links`, `support`

> The `/mental-health-news` page is managed entirely through the `body` WYSIWYG field — admins paste or write HTML with links to relevant news articles monthly. No separate blog model needed.

### 2.2 `team_members` table

```
id
name
role               — job title/position
bio                — text
photo              — file path (stored in /storage via FileUpload)
display_order      — integer for manual ordering
is_active          — boolean
timestamps
```

### 2.3 `helpful_links` table

Used by both `/helpful-links` and `/support`. Each page filters by category.

```
id
label              — display name
url
description        — short text
category           — enum: 'crisis', 'counseling', 'resources', 'government', 'other'
display_order
is_active
timestamps
```

The `/helpful-links` page will show categories: `resources`, `counseling`, `other`
The `/support` page will show categories: `crisis`, `government`

(Adjust category assignments once we review the current content.)

### 2.4 `contact_submissions` table

```
id
name
email
subject
message            — text
read_at            — nullable timestamp (null = unread)
timestamps
```

---

## Phase 3 — Filament Resources

### 3.1 Page Resource

```bash
php artisan make:filament-resource Page --generate
```

Form layout uses Filament Sections to group fields. Each content section has a Toggle at the top — when off, that section is hidden on the live page without losing the content.

```
Section: "Page Settings"
  slug (TextInput — disabled for seeded pages, editable for new ones)
  title (TextInput)
  meta_description (Textarea)
  is_published (Toggle)

Section: "Hero" — collapsible, with show_hero Toggle at top
  hero_title (TextInput)
  hero_subtitle (TextInput)

Section: "Body Content" — collapsible, with show_body Toggle at top
  body (RichEditor)
    toolbarButtons: bold, italic, underline, link, bulletList, orderedList, h2, h3

Section: "Call to Action" — collapsible, with show_cta Toggle at top
  cta_text (TextInput)
  cta_subtext (TextInput)
```

**Table columns:** slug, title, is_published, updated_at

**Note on new pages:** When an admin creates a new page row and sets a slug (e.g. `partnerships`), it becomes accessible at `/partnerships` automatically via the catch-all route. No code changes needed.

### 3.2 Team Member Resource

```bash
php artisan make:filament-resource TeamMember --generate
```

**Form fields:** name, role (TextInput), bio (Textarea), photo (FileUpload → `team-photos/`), display_order (numeric), is_active (Toggle)

**Table:** name, role, is_active, display_order (sortable)

### 3.3 Helpful Link Resource

```bash
php artisan make:filament-resource HelpfulLink --generate
```

**Form fields:** label, url, description (Textarea), category (Select with enum values), display_order, is_active (Toggle)

**Table:** label, category, is_active, display_order (sortable)

### 3.4 Contact Submission Resource (view-only)

```bash
php artisan make:filament-resource ContactSubmission --generate
```

- Disable create and edit — admins view only
- Custom **"Mark as Read"** table row action that sets `read_at = now()`
- **"Unread"** filter tab on the table (where `read_at` is null)
- **Table columns:** name, email, subject, created_at, read status badge

### 3.5 Admin User Resource

```bash
php artisan make:filament-resource User --generate
```

All admins can create, edit, and deactivate other admin accounts from within the panel.

**Form fields:** name, email, password (hashed), is_admin (Toggle)

**Table columns:** name, email, is_admin, created_at

> Scope this resource to only show users where `is_admin = true`, so it doesn't expose regular site users.

---

## Phase 4 — Admin Dashboard

```bash
php artisan make:filament-widget StatsOverview --stats-overview
php artisan make:filament-widget RecentSubmissions --table
```

**StatsOverview widget:**
- Total published pages
- Pages currently unpublished or with hidden sections
- Unread contact submissions
- Total active team members

**RecentSubmissions widget:**
- Last 10 contact submissions
- Columns: name, subject, created_at, read/unread badge
- Inline "Mark as Read" action

---

## Phase 5 — Wire Frontend to Database

### 5.1 Update PagesController

Replace all 13 static methods with DB queries:

```php
public function veterans()
{
    $page = Page::where('slug', 'veterans')->where('is_published', true)->firstOrFail();
    return view('pages.veterans', compact('page'));
}
```

Apply to all named page methods. Existing named routes and views are preserved — no routing changes needed for the current pages.

### 5.2 Update Blade templates

Wrap each section in `@if($page->show_*)` and replace hardcoded strings:

```blade
@if($page->show_hero)
<section class="hero">
    <h1>{{ $page->hero_title }}</h1>
    <p>{{ $page->hero_subtitle }}</p>
</section>
@endif

@if($page->show_body)
<section class="body-content">
    {!! $page->body !!}
</section>
@endif

@if($page->show_cta)
<section class="cta">
    @if($page->cta_subtext)
        <p>{{ $page->cta_subtext }}</p>
    @endif
    <a href="{{ route('contact') }}" class="btn">{{ $page->cta_text }}</a>
</section>
@endif
```

> `{!! !!}` is used for `body` because it contains WYSIWYG HTML. All other fields use `{{ }}` (escaped).

### 5.3 New static pages — catch-all route + generic template

To support admin-created pages without code changes, add a catch-all route **at the bottom** of `routes/web.php`:

```php
// Must be last — catches any slug not matched above
Route::get('/{slug}', [PagesController::class, 'catchAll'])
     ->where('slug', '[a-z0-9\-]+');
```

Add the `catchAll` method to `PagesController`:

```php
public function catchAll(string $slug)
{
    $page = Page::where('slug', $slug)->where('is_published', true)->firstOrFail();
    return view('pages.generic', compact('page'));
}
```

Create `resources/views/pages/generic.blade.php` — a plain template that renders hero, body, and CTA using the same `@if(show_*)` pattern as the other pages. New pages won't have custom layouts, but they'll have the full site chrome and all three standard sections.

### 5.4 Seed initial content

Write a `PageSeeder` that copies all current hardcoded Blade content into the DB. This is the most manual step but critical — the site must look identical immediately after switching over.

```bash
php artisan make:seeder PageSeeder
php artisan db:seed --class=PageSeeder
```

All rows seed with `show_hero = true`, `show_body = true`, `show_cta = true`, `is_published = true`.

### 5.5 Team page

```php
public function team()
{
    $page    = Page::where('slug', 'team')->where('is_published', true)->firstOrFail();
    $members = TeamMember::where('is_active', true)->orderBy('display_order')->get();
    return view('pages.team', compact('page', 'members'));
}
```

### 5.6 Helpful links pages

```php
public function helpfulLinks()
{
    $page  = Page::where('slug', 'helpful-links')->firstOrFail();
    $links = HelpfulLink::where('is_active', true)
                        ->whereIn('category', ['resources', 'counseling', 'other'])
                        ->orderBy('display_order')
                        ->get();
    return view('pages.helpful-links', compact('page', 'links'));
}

public function support()
{
    $page  = Page::where('slug', 'support')->firstOrFail();
    $links = HelpfulLink::where('is_active', true)
                        ->whereIn('category', ['crisis', 'government'])
                        ->orderBy('display_order')
                        ->get();
    return view('pages.support', compact('page', 'links'));
}
```

---

## Phase 6 — Contact Form: DB Storage + SendGrid Email

`.env` is already configured with SendGrid credentials.

```bash
php artisan make:mail ContactSubmissionReceived
```

Update `HomeController@contact` to store the submission and send notification:

```php
$submission = ContactSubmission::create($validated);
Mail::to('support@herenowhelp.com')->send(new ContactSubmissionReceived($submission));
```

Confirm `.env` mail driver settings:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your_sendgrid_api_key
MAIL_FROM_ADDRESS=noreply@herenowhelp.com
MAIL_FROM_NAME="HereNowHelp"
```

---

## Phase 7 — Media & File Storage

New uploads (team photos) use Laravel's public disk.

**`.env`:**
```
FILESYSTEM_DISK=public
```

```bash
php artisan storage:link
```

Files land in `storage/app/public/` and are served from `/storage/`.

Filament FileUpload field uses subdirectory:
- Team photos → `team-photos/`

Existing hero background images in `public/` are left as-is.

---

## Implementation Order

| # | Task | Notes |
|---|------|-------|
| 1 | Install Filament, create first admin user | |
| 2 | Migration: add `is_admin` to `users` table | |
| 3 | Migrations: create `pages`, `team_members`, `helpful_links`, `contact_submissions` | One file per table |
| 4 | Create all 4 Eloquent models | `$fillable`, casts |
| 5 | Write `PageSeeder` — copy all hardcoded Blade content into DB rows | Critical — do not skip |
| 6 | Build Filament Resources: Page, TeamMember, HelpfulLink, ContactSubmission, User | |
| 7 | Build dashboard widgets: StatsOverview, RecentSubmissions | After resources work |
| 8 | Update all named controller methods to query DB | |
| 9 | Update all Blade templates with `@if(show_*)` guards and `$page->*` vars | Per template |
| 10 | Add catch-all route + `generic.blade.php` for new admin-created pages | |
| 11 | Visually verify all frontend pages match pre-migration | Regression check |
| 12 | Wire contact form → `ContactSubmission::create()` + SendGrid email | |
| 13 | Configure storage disk, run `php artisan storage:link` | |
