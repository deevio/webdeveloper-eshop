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


$limit = 12;
$start = (!isset($idPage)) ? 0 : ($idPage * $limit - $limit); 


$listOfBooks = new Kniha;

$data = [
	'books' => $listOfBooks->getBooks($start, $limit, $orderBy) ,
	'idPage'=>  (isset($idPage)) ? $idPage : 1,
	'pocetKnih'=> $listOfBooks->getCount(),
	'limit' => $limit,
	
	
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>