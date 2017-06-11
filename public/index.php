<?php

require '../vendor/autoload.php';




/*


try {
    
    $db = new PDO(
        'mysql:host=localhost;dbname=eshop;charset=utf8',
        'divio',
        'Ixlg23q8xPmIPx0j'
    );


} catch (Exception $e) {
    echo 'Nepodarilo sa pripojit k DB - ' .
    $e->getMessage();
    die();
}


$query_values = [];
$query = '';

$query_keys = 'INSERT INTO `products` (title, price, description, excerpt) VALUES ';
for($i = 1; $i <= 100; $i++){  
  
  $query_values[] .= ' ("Kniha ' . $i .'" , "' . rand(11, 77) .'", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "Lorem ipsum dolor sit amet...") ';
  
}
$query .= $query_keys;
$query .= implode(',', $query_values );
$db->query( $query );

echo $query;

echo 'pripojene';
echo $db->lastInsertId;

$db->prepare('SELECT title FROM products WHERE title = :title LIMIT 1'); //:title
$db->execute(array(
  'title' => '', 
));

$db->bindValue();

$db->fetchAll(); //array from result


die;
*/



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

use Classes\Cart;

Cart::init();


//moved to comoser autoload
/*
require_once '../config/db.php';
//require_once '../Classes/Router.php';
require_once '../functions/content.php';
require_once '../functions/slug.php';
require_once '../functions/html.php';
require_once '../functions/thumbnail.php';
require_once '../functions/books.php';
//require_once '../data/data.php';
*/


//preVar($listOfBooks);

//json_decode();
//echo json_encode($listOfBooks); //from php to json
//echo '<br>';
//echo json_decode($listOfBooks); // from json to php
//die;



require_once '../config/routes.php';


?>
    
