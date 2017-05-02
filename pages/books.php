<?php 


$listOfBooks = [];

$data = [
	'books' => getAllBooks(),
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>