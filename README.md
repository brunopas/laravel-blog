<h1 align="center">
  <strong>LaraBlog</strong>
</h1>

<p align="center">
 <a href="#about">About</a> |
 <a href="#usage">Usage</a> |
 <a href="#technologies">Technologies</a> |
 <a href="#license">License</a>
</p>

---

## About

An amazing blog to share Laravel news and its ecosystem. LaraBlog is a web application developed in PHP Language and Laravel Framework.<br>
This is a non-profit project. All prototypes, software code, design and illustrations are created for educational purposes only.<br>
Project developed during <a href="https://laracasts.com/series/laravel-8-from-scratch">"Laravel 8 From Scratch"</a> course by <a href="https://laracasts.com/">Laracasts</a>.

<img alt="LaraBlog" title="#LaraBlog" src="public/github/readme-1.png" />

---

## Usage

Before you begin, you will need to have the following tools installed on your machine:
<strong><a href="https://www.php.net/">PHP</a></strong>, <strong><a href="https://getcomposer.org/">Composer</a></strong>, <strong><a href="https://git-scm.com/">Git</a></strong>, and <strong><a href="https://nodejs.org/">Node</a></strong>.<br>
In addition, it is good to have an editor to work with the code like <strong><a href="https://code.visualstudio.com/">VSCode</a></strong> or <strong><a href="https://www.jetbrains.com/phpstorm/">PHP Storm</a></strong>.

### Installation
First, clone this repository, install the dependencies, and setup your <code>.env</code> file.
```
git clone https://github.com/brunopas/laravel-blog.git
composer install
cp .env.example .env
```
This app uses <strong><a href="https://www.mysql.com/">MySQL</a></strong>. To use something different, open up <code>config/Database.php</code> and change the default driver.<br>
To use MySQL, make sure you install it, setup a database and then add your DB credentials (database, username and password) to the <code>.env</code> file.

### Database Setup
Then, create the necessary database.
```
php artisan db
create database laravel_blog
```

### Migrations
Finally, run the initial migrations and seeders.
```
php artisan migrate --seed

```

### File Uploading
When uploading files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running
To serve the application on the PHP development server, run the following command:
```
php artisan serve
```

---

## Technologies

The following tools were used to build the project:
-   **[PHP](https://www.php.net/)** >= 8.0.2
-   **[Laravel Framework](https://laravel.com/)** >= 9.19
-   **[Laravel Blade](https://laravel.com/)**
-   **[Laravel Sanctum](https://laravel.com/)** >= 3.0
-   **[Redis](https://redis.io/)**
-   **[Tailwind CSS](https://tailwindcss.com/)**
-   **[MySQL](https://www.mysql.com/)**
-   **[Mailchimp](https://mailchimp.com/)**

For more information, see the files [composer.json](./composer.json) and [package.json](./package.json).

---

## License

This project is under the license [MIT](./LICENSE).

Made with ❤️ love by Bruno Pasquarelli Macedo 👋🏻 [Get in Touch!](https://www.linkedin.com/in/brunopasmacedo)
