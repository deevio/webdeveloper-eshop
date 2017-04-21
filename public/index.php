<?php
/*
$match = preg_match('/(\w+) (\w+)/', 'Meno Priezvisko', $vysledok); 
var_dump($vysledok);

die;
*/

require_once '../config/db.php';
require_once '../classes/Router.php';
require_once '../functions/content.php';
require_once '../functions/slug.php';
//require_once '../functions/html.php';
//require_once '../data/data.php';



Router::route('GET', '/', function($url){
  include '../pages/home.php';
});
 

Router::route('GET', '/kontakt', function($url){
  include '../pages/kontakt.php';
});

Router::route('GET', '/books', function($url){
  include '../pages/books.php';
});

Router::route('GET', '/book/(.*)/(\d+)', function($url, $slug, $idBook){
  include '../pages/book.php';
});

Router::route('GET', '/error', function($url){
  include '../pages/404.php';
});


Router::execute();




?>
    
