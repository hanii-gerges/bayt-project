# Bayt Students Hub

This project is an assignment for Bayt.com recruitment team,
This is a small project that contains students management functionality (CRUD) with roles and permissions

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Packages Used](#packages-used)
- [Seeded Admin User](#seeded-admin-user)

## Prerequisites

Before you begin, ensure you have met the following requirements:

- [PHP](https://www.php.net/) (^8.1)
- [Composer](https://getcomposer.org/) (^2.0)
- [Node.js](https://nodejs.org/) (^21.0)
- [npm](https://www.npmjs.com/) (^10.0)
- [MySQL](https://www.mysql.com/) (^8.0)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/your-laravel-project.git
    ```

2. Change into the project's directory:

    ```bash
    cd your-laravel-project
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install Node.js dependencies:

    ```bash
    npm install
    ```

5. Copy the `.env.example` file to a new file named `.env`:

    ```bash
    cp .env.example .env
    ```

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

## Configuration

1. Open the `.env` file in your preferred text editor.

2. Configure your database settings:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

    Replace the placeholders with your actual database details.

3. Configure other settings as needed, such as mail and cache settings.

## Usage

1. Migrate the database:

    ```bash
    php artisan migrate
    ```

2. Seed the database (if applicable):

    ```bash
    php artisan db:seed
    ```

3. Run the development server:

    ```bash
    npm run dev
    ```
    
4. Run the development server:

    ```bash
    php artisan serve
    ```

5. Visit `http://localhost:8000` in your browser.

## Packages Used

This project uses the following packages:

- **Laravel Debugbar (Development Package):** A package to integrate the PHP Debug Bar with Laravel. [laravel-debugbar on GitHub](https://github.com/barryvdh/laravel-debugbar)

- **Larastarter Theme Package:** A package for theming your Laravel application. [larastarter on GitHub](https://github.com/your-username/larastarter)

- **Spatie Permissions:** A package for handling roles and permissions in Laravel. [spatie/laravel-permission on GitHub](https://github.com/spatie/laravel-permission)

## Seeded Admin User

An admin user has been seeded with the following credentials:

- **Email:** admin@bayt.com
- **Password:** 12345678

Use these credentials to log in as an administrator in your application.
