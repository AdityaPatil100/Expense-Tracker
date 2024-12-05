# Expense Tracker


## Features

- Income
- Expenses
- Category
- Dashboard
- Profile
- StatOverview Widget
- Recent Activity Widget
- Register (Livewire Component)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/AdityaPatil100/Expense-Tracker.git
cd expense_tracker
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Edit .env and set your database connection details.

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Expense Tracker in your browser, and login with:

- **Username:** admin@admin.com
- **Password:** password

```sh
https://localhost/admin
```


The Expense Tracker is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
