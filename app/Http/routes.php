<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'Controller@getIndex');

$app->group(['prefix'=>'admin/', 'middleware' => 'BasicAuth', 'namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('/', 'AdminController@index');
    $app->get('/manage', 'AdminController@index');

    $app->get('/configuration', 'Admin\ConfigurationController@show');
    $app->post('/configuration', 'Admin\ConfigurationController@update');



});
