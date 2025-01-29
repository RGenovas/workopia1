<?php


// $routes = [
//     '/workopia1/public/' => '/controllers/home.php',
//     '/workopia1/public/listings' => '/controllers/listings/index.php',
//     '/workopia1/public/create' => '/controllers/listings/create.php',

//     // '404' => '/controllers/error/404.php'
// ];

$router->get('/workopia1/public/', 'HomeController@index');
$router->get('/workopia1/public/listings', 'ListingController@index');

$router->get('/workopia1/public/create', 'ListingController@create');
// EDIT
$router->get('/workopia1/public/listings/edit/{id}', 'ListingController@edit');


$router->get('/workopia1/public/listings/{id}', 'ListingController@show');

// POST

$router->post('/workopia1/public/listings', 'ListingController@store');


// PUT
$router->put('/workopia1/public/listings/{id}', 'ListingController@update');

// DELETE

$router->delete('/workopia1/public/listings/{id}', 'ListingController@destroy');

// $router->get('/workopia1/public/', '/controllers/home.php');
// $router->get('/workopia1/public/listings', '/controllers/listings/index.php');
// $router->get('/workopia1/public/create', '/controllers/listings/create.php');
// $router->get('/workopia1/public/listing', '/controllers/listings/show.php');

$router->get('workopia1/public/auth/register', 'UserController@create');
$router->get('workopia1/public/auth/login', 'UserController@login');


// Registering user

$router->post('workopia1/public/auth/register', 'UserController@store');
