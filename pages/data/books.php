<?php 
use Classes\Kniha;

$listOfBooks = new Kniha;
$books = $listOfBooks->getBooks(0, 12, ' id DESC');


header('Content-type: text/json');
header('Access-Control-Allow-Origin: *') ;
//cors


$data = [];
// transformacia na data
foreach ($books as $book) {
	//var_dump($book);
	
	$data[] = (object) [
		'id' => $book->getId(),
		'title' => $book->getTitle(),
		'cena' => $book->getPrice(),
		'description' => $book->getDescription(),
	];
	
}

echo json_encode($data);


?>




