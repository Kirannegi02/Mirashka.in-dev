# Mirashka

Mirashka is a Laravel-based web application that powers a public-facing website with multiple content pages, user-facing forms, and backend/admin flows.  
The project uses Blade views with custom frontend assets and Laravel routing/controllers for dynamic features.

## Tech Stack (with versions)

- PHP: `8.2.x`
- Laravel: `10.x`
- Composer: `2.x`
- Database: `MySQL 8.x` (or compatible MariaDB)
- Frontend: `Blade`, `Bootstrap 5`, `jQuery`, custom CSS/JS

## Local Setup

### 1) Prerequisites

- PHP `8.2+`
- Composer `2.x`    
- MySQL server running

### 2) Install dependencies

```bash
composer install
```

### 3) Configure environment

Copy `.env.example` to `.env`, then update:
- `APP_URL`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

Generate application key:

```bash
php artisan key:generate
```

### 4) Prepare database

Run migrations (if required):

```bash
php artisan migrate
```

### 5) Run the project

```bash
php artisan serve
```

Open:

- `http://127.0.0.1:8000`

Hot Relaod:

```bash
npx browser-sync start --proxy "http://localhost:8001" --files "resources/views/**/*.blade.php,public/assets/frontend/css/**/*.css,public/assets/frontend/js/**/*.js
```

## Deployment Check

This line is added to trigger and verify GitHub Actions deployment to cPanel.
testing