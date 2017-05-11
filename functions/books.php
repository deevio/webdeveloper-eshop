<?php

/**
 * Get all books
 * @return array $listOfBooks
 */


function getAllBooks() {

    for($i = 1; $i <= 40; $i++){
        $listOfBooks[$i] = 
        (object) [
            'id' => $i,
            'title' => 'Pohyblivy sviatok',
            'cena' => rand(10, 100),
            'url' => buildBookUrl('Pohyblivy sviatok', $i), 
        ];
    };

    return $listOfBooks;

};


/**
 * Get book
 * @param integer $idBook  - id book
 * @return object $oneBook - book
 */

 function getBook($idBook){

    // vytiahni z db 1 knihu
    // Select ...
    $allBooks =  getAllBooks();
    $oneBook = $allBooks[$idBook];

    return $oneBook;      
 }




?>