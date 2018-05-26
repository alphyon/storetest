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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function() use($router){
    $router->post('/user', 'UserController@create');
    $router->put('/user/{id}', 'UserController@update');
    $router->get('/users', 'UserController@index');
    $router->delete('/user/{id}', 'UserController@deactivate');
    $router->get('/users/bloc', 'UserController@blocUser');
    $router->get('/products', 'ProductsController@index');
    $router->post('/product', 'ProductsController@create');
    $router->get('/product/{id}', 'ProductsController@show');
    $router->get('/product/quantity/{id}', 'ProductsController@getQuantity');
    $router->put('/product/{id}', 'ProductsController@update');
    $router->delete('/product/{id}', 'ProductsController@destroy');
    $router->post('/purchase', 'PurchaseController@create');
    $router->get('/purchase/{id}', 'PurchaseController@show');
    $router->get('/purchase/detail/{id}', 'PurchaseController@showDetails');
    $router->get('/purchase/full/{id}', 'PurchaseController@showFullPurchase');
});