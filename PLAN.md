# HNH Frontend — Project Plan & Handoff Document

## Overview

This document captures the full context of the `hnh-frontend` Laravel project so that any developer or AI assistant (e.g. GitHub Copilot) can pick it up and continue without gaps.

---

## What Has Been Built

### Project
- **Repo:** https://github.com/wesleyhnh/hnh-frontend
- **Stack:** Laravel (PHP), Blade templates, custom CSS
- **Local dev:** `php artisan serve` → http://localhost:8000

### Purpose
A Laravel-based replica of [herenowhelp.com](https://herenowhelp.com) with the exact same look and feel. All pages are self-contained within the Laravel app (no external redirects).

### Pages & Routes Built

| Route | URL | View |
|---|---|---|
| Home | `/` | `home.blade.php` |
| Veterans | `/veterans` | `veterans.blade.php` |
| Students | `/students` | `students.blade.php` |
| Employees | `/employees` | `employees.blade.php` |
| Healthcare | `/healthcare` | `healthcare.blade.php` (or rehab) |
| Rehab | `/rehab` | `rehab.blade.php` |
| Government | `/government` | `government.blade.php` |
| PeerNOW | `/peernow` | `peernow.blade.php` |
| About — Our Story | `/about/our-story` | `about/story.blade.php` |
| About — Our Vision | `/about/our-vision` | `about/vision.blade.php` |
| Team | `/team` | `team.blade.php` |
| News | `/mental-health-news` | `news.blade.php` |
| Peer Counseling | `/peer-counseling` | `peer-counseling.blade.php` |
| Helpful Links | `/helpful-links` | `helpful-links.blade.php` |
| Support | `/support` | `support.blade.php` |

### Homepage Sections
The homepage (`/`) replicates herenowhelp.com exactly, including:
- **Hero** — teal gradient + banner image, white headline, device mockup, compliance badge
- **Testimonials** — dark `#1e2d38` background, light-blue quotes, gold stars (5.0 / 4.9)
- **Services** — dark banner overlay, 6 cards with icons: HEALTHCARE, VETERANS, STUDENTS, EMPLOYERS, PEER SUPPORT, ADMIN DASHBOARD
- **Custom Design** — white bg, teal heading, two phone mockups, feature lists
- **Video** — "How It Works" section with YouTube embed
- **Features** — dark graph-image background, 6 features in 3 columns, gold icon boxes
- **Contact** — "Schedule A Demo" form with map texture background

### Known Bugs Fixed
- `/support` page had a Blade syntax error — apostrophe in `We're` was breaking the single-quoted `@section()` string. Fixed by switching outer quotes to double-quotes.
- All internal links originally pointed to `herenowhelp.com` — all replaced with Laravel `route()` helpers pointing to local routes.
- Only intentionally external link: **Customer Portal** → `production.herenowhelp.com/login`

---

## Next Phase — Filament Admin Dashboard

### Goal
Install and configure [Filament](https://filamentphp.com) (v3) to give the admin team a backend dashboard where they can:

1. **Edit major text content** on existing pages (headlines, body copy, CTAs, etc.) without touching code
2. **Create new pages** and add/edit content on those pages
3. **Manage navigation** — optionally add new pages to the nav menu

---

### Implementation Plan

#### Step 1 — Install Filament v3

```bash
composer require filament/filament:"^3.0" -W
php artisan filament:install --panels
```

- Panel ID: `admin`
- URL prefix: `/admin`
- Create first admin user: `php artisan make:filament-user`

#### Step 2 — Database Setup for Content Management

Create the following migrations and models:

**`pages` table** — stores all editable pages
```
id
slug          (unique, e.g. "home", "veterans", "support")
title         (string)
meta_description (text, nullable)
is_published  (boolean, default true)
timestamps
```

**`page_sections` table** — stores editable content blocks within each page
```
id
page_id       (foreign key → pages)
section_key   (string, e.g. "hero_headline", "hero_subheadline", "cta_button_text")
section_label (string — human-readable label for the admin UI)
content       (longText — the actual editable content)
content_type  (enum: "text", "html", "image_url" — default "text")
sort_order    (integer)
timestamps
```

Run migrations:
```bash
php artisan migrate
```

Seed the existing pages and their editable sections:
- Create a seeder (`PageSeeder`) that inserts all 14 existing pages with their key editable sections pre-populated (pulling from the current Blade template content).

#### Step 3 — Filament Resources

Create two Filament resources:

**1. PageResource** (`app/Filament/Resources/PageResource.php`)
- List all pages (title, slug, published status)
- Allow creating new pages (title, slug, meta description, published toggle)
- Inline `HasMany` relationship to `PageSectionResource` so admins can edit sections within a page

**2. PageSectionResource** (nested within PageResource)
- Fields: section label, content (RichEditor for HTML, TextInput for plain text)
- Sort order drag-and-drop

#### Step 4 — Wire Blade Templates to Database

Update each Blade view to pull content from the database instead of hardcoded strings.

Example pattern:
```blade
{{-- Before --}}
<h1>Transforming Behavioral Health</h1>

{{-- After --}}
<h1>{{ $page->section('hero_headline') }}</h1>
```

Create a helper or Blade directive `@pageSection($page, 'key', 'fallback')` that:
1. Looks up the section by `section_key` for the current page
2. Falls back to the hardcoded string if no DB record exists
3. Renders raw HTML if `content_type = "html"`, else escapes

Create a `PageController` that:
- Queries the DB for the page by slug
- Passes `$page` and its sections to the Blade view
- Falls back gracefully if the page isn't found in the DB

#### Step 5 — New Page Creation Flow

When an admin creates a new page in Filament:
1. They specify: title, slug, meta description
2. They add content sections (each section has a label + content type + content)
3. The page is published (or saved as draft)

Laravel routing: add a catch-all route at the bottom of `routes/web.php`:
```php
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('dynamic');
```

`DynamicPageController::show($slug)` queries the `pages` table by slug, renders a generic `dynamic-page.blade.php` template that loops through sections and renders them in order.

#### Step 6 — Navigation Management (Optional / Phase 2)

Add a `nav_items` table:
```
id, label, url (or route name), sort_order, is_visible, parent_id (nullable, for dropdowns)
```

Create a `NavItemResource` in Filament.

Update the shared layout (`layouts/app.blade.php`) to pull nav items from DB (with a cache layer to avoid N+1 on every request).

---

### File Structure After Implementation

```
app/
  Filament/
    Resources/
      PageResource.php
      PageResource/
        Pages/
          ListPages.php
          CreatePage.php
          EditPage.php
  Http/
    Controllers/
      DynamicPageController.php
      PageController.php         (updated)
  Models/
    Page.php
    PageSection.php
database/
  migrations/
    xxxx_create_pages_table.php
    xxxx_create_page_sections_table.php
  seeders/
    PageSeeder.php
resources/
  views/
    dynamic-page.blade.php       (new — for CMS-created pages)
    layouts/
      app.blade.php              (updated to read nav from DB or config)
PLAN.md                          (this file)
```

---

### Copilot Instructions

When picking this up, start here:

1. `cd ~/Desktop/hnh-frontend`
2. Run `composer require filament/filament:"^3.0" -W`
3. Run `php artisan filament:install --panels` and follow prompts (panel: `admin`)
4. Create migrations for `pages` and `page_sections` as specified above
5. Create `PageSeeder` to pre-populate all 14 existing routes with their editable sections
6. Create `PageResource` and `PageSectionResource` in Filament
7. Update Blade views to read from DB (use fallback pattern)
8. Add catch-all route + `DynamicPageController` for new CMS pages
9. Test: `php artisan serve`, visit `/admin`, log in, edit a headline, verify it updates on the frontend

**Tip:** Use `php artisan make:filament-resource Page --generate` to scaffold the resource from the model automatically.

---

### Admin Credentials

Run `php artisan make:filament-user` to create the first admin user after installation.

---

## Summary

| Item | Status |
|---|---|
| Laravel project created | ✅ Done |
| GitHub repo created | ✅ https://github.com/wesleyhnh/hnh-frontend |
| All 14 pages replicated | ✅ Done |
| All links localised (no external redirects) | ✅ Done |
| Support page Blade bug fixed | ✅ Done |
| Filament CMS installed | ⏳ Next |
| Pages/sections DB + seeder | ⏳ Next |
| Blade views wired to DB | ⏳ Next |
| New page creation (catch-all route) | ⏳ Next |
| Nav management | ⏳ Phase 2 |

---

*Document generated from the original Cowork session. Last updated: April 15, 2026.*
