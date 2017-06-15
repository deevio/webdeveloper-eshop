<?php
use Classes\Author;

$autori = new Author();
$authors = $autori->getAll();


$data = [
	'authors' => $authors,
];


$content = getContent(
	'../templates/authors.php',
	$data
);

include '../templates/layout.php';

?>