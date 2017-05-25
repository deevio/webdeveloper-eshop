<?php

if(!in_array( $idBook, $_COOKIE['lastViewedBooks'] ) || !isset($_COOKIE['lastViewedBooks'])){

	$platiDo = time() + 7 * 24 * 3600;

	$cookieIndex = 0;
	
	$cookieIndex = count($_COOKIE['lastViewedBooks']);
	

	setcookie('lastViewedBooks[' . $cookieIndex . ']', $idBook, $platiDo, '/');
};


$lastBooks = $_COOKIE['lastViewedBooks'];


$listOfBooks = [];


$book = new Classes\Kniha;
$book = $book->getById($idBook);


$data = [
	'books' => getAllBooks(),
	'idBook' => $idBook,
	'book'=> $book, 
	'slug' => $slug,
];



$content = getContent(
	'../templates/book.php',
	$data
);

include '../templates/layout.php';

?>