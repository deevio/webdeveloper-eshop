<?php 
$idPage = null;

$listOfBooks = [];

$data = [
	'books' => getAllBooks(),
	'idPage'=> $idPage,
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>