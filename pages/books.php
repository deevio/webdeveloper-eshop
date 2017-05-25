<?php 
use Classes\Kniha;
$idPage = null;

$getOrd = $_GET['ord'];

if(isset($_GET['ord'])) {

	$orderingMap = [
		'nazov' => 'title',
		'cena' => 'price',

	];

	$orderBy = (
		array_key_exists($getOrd , $orderingMap) ? 
		$orderingMap[$getOrd] : 
		'RAND()'
	);

} else {

	$orderBy = 'RAND()';

};

$start = 0; 
$limit = 12;


$listOfBooks = new Kniha;

$data = [
	'books' => $listOfBooks->getBooks($start, $limit, $orderBy) ,
	'idPage'=> $idPage,
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>