## Installaltion

- ``$ git clone https://github.com/detola/ecommerce-api.git``
- ``cd ecommerce-api``
- ``composer install``
- ``cp .env.example .env``
- ``php artisan key:generate``

Run the database migrations (Set the database connection in .env before migrating)
- ``php artisan migrate``
- ``php artisan db:seed``
- ``php artisan serve``

The api can now be accessed at
- ``http://localhost:8000/api``

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
