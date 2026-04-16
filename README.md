# HereNowHelp Frontend

Laravel 12 application for the HereNowHelp frontend.

## Requirements

- PHP 8.2+
- Composer
- Node.js & npm
- A database (SQLite, MySQL, or PostgreSQL)

## Setup

**1. Clone the repo and install dependencies:**

```bash
git clone <repo-url>
cd hnh-frontend
```

**2. One-command setup (installs deps, copies `.env`, generates key, runs migrations, builds assets):**

```bash
composer run setup
```

Or do it step by step:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

**3. Configure your environment:**

Open `.env` and update the database connection and any other settings for your environment.

## Development

Start all dev processes (server, queue, log watcher, and Vite HMR) concurrently:

```bash
composer run dev
```

This runs:
- `php artisan serve` — local dev server at `http://localhost:8000`
- `php artisan queue:listen` — queue worker
- `php artisan pail` — log viewer
- `npm run dev` — Vite with hot module replacement

## Testing

```bash
composer run test
```

Or directly:

```bash
php artisan test
```

## Building Assets

```bash
npm run build
```

## Key Technologies

- **Laravel 12** — PHP framework
- **Tailwind CSS 4** — utility-first CSS
- **Vite** — frontend build tool
- **Laravel Tinker** — REPL for interacting with the app

## Useful Artisan Commands

```bash
php artisan migrate          # Run database migrations
php artisan migrate:fresh    # Drop all tables and re-run migrations
php artisan db:seed          # Seed the database
php artisan route:list       # List all registered routes
php artisan tinker           # Interactive REPL
php artisan cache:clear      # Clear application cache
php artisan config:clear     # Clear config cache
```
