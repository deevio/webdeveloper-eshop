<?php 
use Classes\Kniha;
use Classes\Author;



if(isset($_GET['ord'])) {

$getOrd = $_GET['ord'];

	$orderingMap = [
		'nazov' => 'title',
		'cena' => 'price',

	];

	$orderBy = (
		array_key_exists($getOrd , $orderingMap) ? 
		$orderingMap[$getOrd] : 
		'id' //RAND()
	);

	//order by title asc/desc
	$orderBy .= (isset($_GET['sort' ]) && $_GET['sort' ] === 'dole') ? ' DESC ' : ' ASC ';

} else {

	$orderBy = 'id'; //RAND()

};


$limit = 12;
$start = (!isset($idPage)) ? 0 : ($idPage * $limit - $limit); 


$cena_od = (isset($_GET['cena_od' ]) && !empty($_GET['cena_od' ])) ? $_GET['cena_od' ] : 0;
$cena_do = (isset($_GET['cena_do' ]) && !empty($_GET['cena_do' ])) ? $_GET['cena_do' ] : NULL;
$hladaj = (isset($_GET['hladaj' ]) && !empty($_GET['hladaj' ])) ? $_GET['hladaj' ] : NULL;
$autor = (isset($_GET['autor' ]) && !empty($_GET['autor' ])) ? $_GET['autor' ] : NULL;

$listOfBooks = new Kniha;

$autori = new Author();
$authors = $autori->getAll();


$data = [
	'books' => $listOfBooks->getBooks($start, $limit, $orderBy, $cena_od, $cena_do, $hladaj, $autor) ,
	'idPage'=>  (isset($idPage)) ? $idPage : 1,
	'pocetKnih'=> $listOfBooks->count,
	'authors' => $authors,
	'limit' => $limit,
	'path' => '/library/',	
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>