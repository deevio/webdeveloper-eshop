<?php
include_once '../templates/header.php';
?>

<div id="content"><?= $content; ?></div>

<?php

if( isset($_COOKIE['lastViewedBooks']) ){

    $count = count($_COOKIE['lastViewedBooks']);

    $viewedBooks = [];

    for( $i = $count - 1;
         $i >= $count - min($count, 5) ; 
         $i-- ){

        $value = $_COOKIE['lastViewedBooks'][$i];


        $viewedBooks[] = getBook( $value );

    };

    foreach( $_COOKIE['lastViewedBooks'] as $idBook => $value ){
       
     //$viewedBooks[] = getBook( $value );

    };

 
};

?>

<?php
include_once '../templates/footer.php';
?>