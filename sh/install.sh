#!/bin/sh

php artisan optimize:clear

composer install --optimize-autoloader
php artisan migrate:fresh --force --seed

php artisan key:generate

npm install
npm run build

php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
php artisan l5-swagger:generate


