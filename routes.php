<?php


// $routes = [
//     '/workopia1/public/' => '/controllers/home.php',
//     '/workopia1/public/listings' => '/controllers/listings/index.php',
//     '/workopia1/public/create' => '/controllers/listings/create.php',

//     // '404' => '/controllers/error/404.php'
// ];


$router->get('/workopia1/public/', '/controllers/home.php');
$router->get('/workopia1/public/listings', '/controllers/listings/index.php');
$router->get('/workopia1/public/create', '/controllers/listings/create.php');
$router->get('/workopia1/public/listing', '/controllers/listings/show.php');
