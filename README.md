## Laravel10-orchid for practice purposes

## Installation using docker

1. Clone the project using git
2. Run `make install-backend`
3. Adjust `DB_*` parameters in the `.env` file.
4. Run `composer install` inside `php` container.
5. Run inside `php` container.
    ```bash
    php artisan key:generate --ansi
    php artisan migrate
    php artisan orchid:admin admin admin@admin.com password
    php artisan db:seed --class=ClientSeeder
    php artisan db:seed --class=ServiceSeeder
    ```
6. Open in browser http://localhost

