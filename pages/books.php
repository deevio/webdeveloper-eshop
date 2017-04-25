<?php 


$listOfBooks = [];

for($i = 1; $i <= 40; $i++){
	$listOfBooks[] = 
	(object) [
		'id' => $i,
		'title' => 'Pohyblivy sviatok',
		'cena' => rand(10, 100),
		'url' => buildBookUrl('Pohyblivy sviatok', $i), 
	];
};


$data = [
	'books' => $listOfBooks,
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>