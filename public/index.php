<?php

require '../vendor/autoload.php';

//die;

session_start();
/*
setcookie('ok', '1');
setcookie('okk', '11');
setcookie('menoooo', 'j', 1493942400, '/'); ///time must be to the future
//setcookie('ok', null, -1,  '/');
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';



echo session_save_path();
$_SESSION['imja'] = 'oneeee';
$_SESSION['uuj'] = 'dvaaa';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

die;
*/

/*
$match = preg_match('/(\w+) (\w+)/', 'Meno Priezvisko', $vysledok); 
var_dump($vysledok);

die;
*/
//header('Content-type: text/json');

use Classes\Router;
use Classes\Cart;

Cart::init();



require_once '../config/db.php';
//require_once '../Classes/Router.php';
require_once '../functions/content.php';
require_once '../functions/slug.php';
require_once '../functions/html.php';
require_once '../functions/thumbnail.php';
require_once '../functions/books.php';
//require_once '../data/data.php';



//preVar($listOfBooks);

//json_decode();
//echo json_encode($listOfBooks); //from php to json
//echo '<br>';
//echo json_decode($listOfBooks); // from json to php
//die;



Router::route('GET', '/', function($url){
  include '../pages/home.php';
});
 

Router::route('GET', '/contact', function($url){
  include '../pages/contact.php';
});

Router::route('GET', '/books', function($url){
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



Router::route('GET', '/error', function($url){
  include '../pages/404.php';
});


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
    
