<?php

global $db;

try {
    
    $db = new PDO(
        'mysql:host=localhost;dbname=eshop;charsset=utf8',
        'divio',
        'Ixlg23q8xPmIPx0j'
    );


} catch (Exception $e) {
    echo 'Nepodarilo sa pripojit k DB' .
    $e->getMessage();
    die();
}



?>