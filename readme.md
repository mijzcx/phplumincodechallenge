## Using Lumen PHP Framework for REST API example.

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### THE CODING CHALLENGE CODE.
This part is about setting up a notification rest api.
  Notification Table has fields like 
  * message_from, 
  * message_to, 
  * message, 
  * message_type, -- 0 for warning, 1 for info and 2 for error.
  * message_status -- 0 for unread, 1 for read
    
  
Here are the rest api for:
  * save notification               POST   /v1/notification
  * retrieve unread notifications   GET    /v1/notifications/unread
  * delete notification             DELETE /vi/notification/{id}
And its respective unit tests.

You can view php code:
  * routes  /app/Http/routes
  * NotificationController /app/Http/Controllers
  * Notification /app/Models
  * generated eloquent mapping /database/migrations
  * seeding NotificationTableSeeder
  * NotificationTest /tests

Here's instruction to run and test the codechallege code. 

0. You must have PHP installed, with pdo_mysql or pdo_pgsql setup in php.ini
    * You must have MySQL/POSTGRESql installed.
    * You must have a php composer.
    * Then run inside codechallenge php artisan serve
    * for example: http://localhost:8000/v1/notifications/unread 
    * database.php - located at /config/
  
1. Set the .env for the database, username and password, then apply this command to the console.
2. php artisan migrate:refresh
3. php artisan migrate
4. php artisan db:seed
5. phpunit

For heroku setup.
heruko login
heruko create
heroku addons:create heroku-postgresql:hobby-dev   // for free. Just change database.php just incase.

git push heroku master
heroku ps:scale web=1

heroku run php artisan migrate
heroku run php db:seed

heroku open

here's my heroku example: http://mijzcx-codechallenge-php.herokuapp.com/v1/notifications/unread


-- no cors, no session_token and authentication yet.

acknowlegement to Ali and Kiran of KyePot's coding challenge.


