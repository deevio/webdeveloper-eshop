<?php
use Classes\Kniha;

/**
 * Get all books
 * @return array $listOfBooks
 */


function getAllBooks() {
	
	$listOfBooks = [];
	for ($i=1; $i < 101; $i++) {
		$knihaObject = new Kniha(
			$i,
			'knizka moja',
			rand(1, 100)
		);

		$listOfBooks[$i] = $knihaObject;
	}

	return $listOfBooks;	
}

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