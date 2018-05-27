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
$router->options('/{any:.*}', function () {
    return response(['status' => 'success'])
        ->header('Access-Control-Allow-Methods','OPTIONS, GET, POST, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Authorization, Content-Type, Origin');
});

$router->post(
    'auth/login',
    [
        'uses' => 'AuthController@authenticate'
    ]
);

$router->get(
    'mail',
    [
        'uses' => 'SendMailController@sendTestMail'
    ]
);


$router->group(['prefix'=>'api/v1','middleware' => 'jwt.auth'], function() use($router){
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

    $router->post('/cart','CartController@create');
    $router->delete('/cart/{id}','CartController@delete');
    $router->put('/cart/{id}','CartController@update');
    $router->get('/cart/{hash}','CartController@show');
});

$router->group(['prefix'=>'api/v1'], function() use($router) {
    $router->get('/purchase/full/{id}', 'PurchaseController@showFullPurchase');
});