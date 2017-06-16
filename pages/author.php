<?php
use Classes\Author;


$autor = new Author();
$author = $autor->getByIds([$idAuthor]);


$data = [

	'author' => $author,
	
];


$content = getContent(
	'../templates/author.php',
	$data
);

include '../templates/layout.php';

?>