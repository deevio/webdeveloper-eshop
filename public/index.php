<?php
/*
$match = preg_match('/(\w+) (\w+)/', 'Meno Priezvisko', $vysledok); 
var_dump($vysledok);

die;
*/
//header('Content-type: text/json');

require_once '../config/db.php';
require_once '../classes/Router.php';
require_once '../functions/content.php';
require_once '../functions/slug.php';
require_once '../functions/html.php';
require_once '../functions/thumbnail.php';
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

Router::route('GET', '/error', function($url){
  include '../pages/404.php';
});


Router::route('GET', '/admin/books', function($url){
  include '../pages/admin/books.php';
});

Router::execute();




?>
    
