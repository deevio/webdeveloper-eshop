<?php 
use Classes\Kniha;
$idPage = null;

$listOfBooks = new Kniha;

$data = [
	'books' => $listOfBooks->getBooks() ,
	'idPage'=> $idPage,
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>