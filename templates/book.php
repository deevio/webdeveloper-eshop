<?php
echo $slug;
echo '<br>';
//echo $idBook;

setcookie('lastViewedBooks['. $idBook .']', 'true');

$lastBooks = $_COOKIE['lastViewedBooks'];


foreach($lastBooks as  $key =>  $book){
    echo $key .' - '. $book; 
    echo '<br>';
}

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>
