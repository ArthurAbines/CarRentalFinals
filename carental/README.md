JWTAuth Installation:
install the tymon/jwt-auth package:
composer require tymon/jwt-auth
publish the JWTAuth configuration file:
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

JWTAuth secret key:
php artisan jwt:secret

Fruitcake/Cors Installation:
composer require fruitcake/laravel-cors

edited
config/auth