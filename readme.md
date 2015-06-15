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
This part is about setting up a notification table to running the restapi phpunit test.
  Notification Table has fields like message_from, message_to, message, message_type, and message_status.
  message_type 0 for warning, 1 for info and 2 for error.
  message_status 0 for unread, 1 for opened.
  
Here are rest api for:
  * save notification               POST   /v1/notification
  * retrieve unread notifications   GET    /v1/notification/unread
  * delete notification             DELETE /vi/notification/{id}
And its respective unit tests.

Here's instruction to run and test the codechallege code. 

0. You must have PHP installed, with pdo_mysql setup in php.ini
  0.1 You must have MySQL installed.
  0.2 You must have a php composer.
  0.3 Then run inside codechallenge php artisan serve
        http://localhost:8000/v1/notification/unread for example
  
1. Set the .env for the database, username and password, then apply this command to the console.
2. php artisan migrate:refresh
3. php artisan migrate
4. php artisan db:seed
5. phpunit



