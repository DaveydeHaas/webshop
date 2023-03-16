# intsalls all the packages used
composer install

# Migrates all the migrations to the database
php artisan migrate

# If you do not have an APP_KEY in the .env
php artisan key:generate 

# Creates encryption keys 
php artisan passport:install

# seeds the needed data for a test uses (DO NOT USE THIS WHEN DATABASE IS ALREADY SEEDED WITH DatabaseSeeder)
php artisan db:seed TestDatabaseSeeder

# seeds the needed data for a live uses (DO NOT USE THIS WHEN DATABASE IS ALREADY SEEDED WITH TestDatabaseSeeder)
php artisan db:seed DatabaseSeeder

# Clears the events, views cache routes config and compiles 
php artisan optimize:clear


# TO DO 
2fa
sales
reviews
payment method
front-end
admin-page
login-page
registration-page
webhop
basket
user-profile
orders
