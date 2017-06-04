<?php 
use Classes\Kniha;




if(isset($_GET['ord'])) {

$getOrd = $_GET['ord'];

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


$cena_od = (isset($_GET['cena_od' ]) && !empty($_GET['cena_od' ])) ? $_GET['cena_od' ] : 0;
$cena_do = (isset($_GET['cena_do' ]) && !empty($_GET['cena_do' ])) ? $_GET['cena_do' ] : NULL;
$hladaj = (isset($_GET['hladaj' ]) && !empty($_GET['hladaj' ])) ? $_GET['hladaj' ] : NULL;

$listOfBooks = new Kniha;

$data = [
	'books' => $listOfBooks->getBooks($start, $limit, $orderBy, $cena_od, $cena_do, $hladaj) ,
	'idPage'=>  (isset($idPage)) ? $idPage : 1,
	'pocetKnih'=> $listOfBooks->count,
	'limit' => $limit,
	
	
];


$content = getContent(
	'../templates/books.php',
	$data
);

include '../templates/layout.php';

?>