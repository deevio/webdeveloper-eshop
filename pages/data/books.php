<?php 

header('Content-type: text/json');
header('Access-Control-Allow-Origin: *') ;
//cors


$listOfBooks = [];

for($i = 1; $i <= 40; $i++){
	$listOfBooks[] = 
	(object) [
		'id' => $i,
		'title' => 'Pohyblivy sviatok',
		'cena' => rand(10, 100),
		//'url' => buildBookUrl('Pohyblivy sviatok', $i), 
	];
};

echo json_encode($listOfBooks);


?>