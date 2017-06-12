<?php

use Classes\Router;

Router::route('GET', '/', function($url){
  include '../pages/home.php';
});
 

Router::route('GET', '/contact', function($url){
  include '../pages/contact.php';
});


Router::route('GET', '/books/(\d+).*', function($url, $idPage){
  include '../pages/books.php';
});


Router::route('GET', '/books(.*)', function($url){
  include '../pages/books.php';
});





Router::route('GET', '/book/(.*)/(\d+)', function($url, $slug, $idBook){
  include '../pages/book.php';
});

Router::route('GET', '/cart', function($url){ 
  include '../pages/cart.php';
});

Router::route('POST', '/cart', function($url){
  include '../pages/cart.php';
});


Router::route('GET', '/orders', function($url){
  include '../pages/orders.php';
});

Router::route('POST', '/orders', function($url){
  include '../pages/orders.php';
});



Router::route('GET', '/order/(\d+).*', function($url, $idOrder){
  include '../pages/order.php';
});
Router::route('POST', '/order/(\d+).*', function($url, $idOrder){
  include '../pages/order.php';
});



Router::route('GET', '/registration', function($url){
  include '../pages/registration.php';
});

Router::route('POST', '/registration', function($url){
  include '../pages/registration.php';
});


Router::route('POST', '/login', function($url){
  include '../pages/login.php';
});
Router::route('GET', '/login', function($url){
  include '../pages/login.php';
});

Router::route('GET', '/logout', function($url){
  include '../pages/logout.php';
});



Router::route('POST', '/user', function($url){
  include '../pages/user.php';
});
Router::route('GET', '/user', function($url){
  include '../pages/user.php';
});







Router::route('GET', '/error', function($url){
  include '../pages/404.php';
});


// ADMIN

Router::route('GET', '/admin/books', function($url){
  include '../pages/admin/books.php';
});

//data
Router::route('GET', '/data/books', function($url){
  include '../pages/data/books.php';
});

Router::route('GET', '/data/book/(\d+)', function($url, $idBook){
  include '../pages/data/book.php';
});

Router::execute();


?>