# LaraBlog

Laravel blog with posts, categories, comments, an admin panel, and Mailchimp newsletter integration. Study project from the [Laravel 8 From Scratch](https://laracasts.com/series/laravel-8-from-scratch) course by Laracasts.

## Features

- Browse posts filtered by category or search keyword
- Read posts with author info and reader comments
- Register, log in, and log out (session auth)
- Admin panel to create, edit, and publish posts
- Subscribe to a Mailchimp newsletter
- Database seeder with sample posts, categories, and users

## Tech stack

- **Runtime:** PHP 8, Laravel 9
- **Views:** Blade components, Tailwind CSS (CDN), Alpine.js
- **Database:** MySQL via Eloquent
- **Newsletter:** Mailchimp Marketing API
- **Dev tools:** Laravel Pint, Clockwork, Sail

See [composer.json](./composer.json) and [package.json](./package.json) for full dependency lists.

## Requirements

- [PHP](https://www.php.net/) >= 8.0.2 with required extensions
- [Composer](https://getcomposer.org/)
- [Git](https://git-scm.com/)
- [MySQL](https://www.mysql.com/) (or change the driver in `config/database.php`)
- A [Mailchimp](https://mailchimp.com/) API key and audience list ID (for the newsletter feature)

## Environment variables

Copy `.env.example` to `.env` and fill in the values below.

| Variable | Required | Default |
| --- | --- | --- |
| `DB_DATABASE` | Yes | `laravel_blog` |
| `DB_USERNAME` | Yes | `root` |
| `DB_PASSWORD` | Yes | — |
| `MAILCHIMP_KEY` | Yes (newsletter) | — |
| `MAILCHIMP_SERVER` | Yes (newsletter) | — |
| `MAILCHIMP_LIST_SUBSCRIBERS` | Yes (newsletter) | — |

All other variables use sensible Laravel defaults for local development.

## Getting started

```bash
git clone https://github.com/brunopas/laravel-blog.git
cd laravel-blog

composer install
cp .env.example .env
php artisan key:generate
```

Create a MySQL database called `laravel_blog` (or whatever you set in `DB_DATABASE`), then run migrations and seed:

```bash
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000).

The seeder creates an admin user (`admin@larablog.com` / `password`) and sample posts with comments.

## Scripts

| Command | What it does |
| --- | --- |
| `php artisan serve` | Start the development server |
| `php artisan migrate --seed` | Run migrations and seed the database |
| `php artisan storage:link` | Symlink `storage/app/public` to `public/storage` |
| `composer test` | Run PHPUnit tests |

## Project structure

```text
laravel-blog/
├── app/
│   ├── Http/Controllers/   # Post, comment, auth, admin, newsletter
│   ├── Models/              # User, Post, Category, Comment
│   ├── Services/            # Mailchimp and newsletter abstractions
│   └── View/Components/     # Blade components (CategoryDropdown)
├── config/                  # Laravel config files
├── database/
│   ├── factories/           # Model factories for seeding
│   ├── migrations/          # Schema migrations
│   └── seeders/             # DatabaseSeeder
├── lang/en/                 # English validation and auth messages
├── public/                  # Static assets, images, favicon
├── resources/views/         # Blade templates
├── routes/                  # web.php, api.php
└── tests/                   # PHPUnit feature and unit tests
```

## License

MIT. See [LICENSE](./LICENSE).
