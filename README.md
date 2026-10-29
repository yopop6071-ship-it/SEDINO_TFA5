# TFA1 POS Application

This Laravel project contains:

- Landing page: `/`
- About page: `/about`
- Customer Accounts page: `/customers`
- User Accounts page: `/users`

The customer and user records are temporary static PHP arrays inside their controllers.

## Run in VS Code

1. Install PHP 8.2+, Composer, and VS Code.
2. Open this project folder in VS Code.
3. Open **Terminal > New Terminal**.
4. Run:

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

On macOS/Linux, use `cp .env.example .env` instead of `copy .env.example .env`.

5. Open `http://127.0.0.1:8000` in your browser.
6. Test `/about`, `/customers`, and `/users`.

If the project was created from a fresh Laravel installer instead, copy the `app`, `resources`, and `routes` files from this ZIP into that project and run the same commands.
