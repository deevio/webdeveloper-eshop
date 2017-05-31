<?php 
use Classes\Kniha;


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

	//order by title asc/desc
	$orderBy .= (isset($_GET['sort' ]) && $_GET['sort' ] === 'dole') ? ' DESC ' : ' ASC ';

} else {

	$orderBy = 'RAND()';

};

$start = 0; 
$limit = 12;


$listOfBooks = new Kniha;

$data = [
	'books' => $listOfBooks->getBooks($start, $limit, $orderBy) ,
	'idPage'=>  (isset($idPage)) ? $idPage : 1,
	'pocetKnih'=> $listOfBooks->getCount(),
	
	
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>