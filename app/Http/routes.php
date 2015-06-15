<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * @author Melvin R. Zamora
 */

$app->get('/', function() use ($app) {
    return $app->welcome();
});


$app->get(    '/v1/notification',             'App\Http\Controllers\NotificationController@index');
$app->get(    '/v1/notification/unread',      'App\Http\Controllers\NotificationController@retriveUnreadNotifications');
$app->delete( '/v1/notification/{id}',        'App\Http\Controllers\NotificationController@deleteNotification');
$app->post(   '/v1/notification',             'App\Http\Controllers\NotificationController@saveNotification');