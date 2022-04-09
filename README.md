INSTALLATION
Prerequisites Required

PHP 8.0.2 or greater
MySQL 5.7 and above
Clone the repository and run the following command

composer install

Run the migrations
Please update your .env file to point to an empty database before running the following command

php artisan migrate

Run the Seeders
php artisan db:seed ProductsSeeder

Update the APP_URL in the .env file as http://127.0.0.1:8000

Run the application using the following command

php artisan serve

If you face any issues, feel free to reach out to me.
