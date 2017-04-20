<?php


$listOfBooks = [];

for($i = 1; $i < 100; $i++){
	$listOfBooks[] = 
	(object) [
		'id' => $i,
		'title' => 'Pohyblivy sviatok',
		'cena' => rand(1, 100),
		'url' => buildBookUrl('Pohyblivy sviatok', $i), 
	];
};


$data = [
	'books' => $listOfBooks,
];



$content = getContent(
	'../templates/book.php',
	$data
);

include '../templates/layout.php';

?>