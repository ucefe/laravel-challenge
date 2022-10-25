
## Installation

run the commands

```
composer install
cp .env.example .env
```

Then create the necessary mysql database (check .env) name it laravel_test.

```
php artisan db
create database laravel_test
```

And run the initial migrations and seeders.

```
php artisan migrate --seed
```

## Routes for the tasks

http://127.0.0.1:8000/ (fetch contacts)
http://127.0.0.1:8000/create (add contact)

http://127.0.0.1:8000/api/addresses
http://127.0.0.1:8000/api/addresses?city=
http://127.0.0.1:8000/api/addresses?state=