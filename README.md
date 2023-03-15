composer install
php artisan migrate
php artisan passport:install
php artisan db:seed TestDatabaseSeeder
php artisan optimize:clear