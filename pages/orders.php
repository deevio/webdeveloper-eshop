<?php 
use Classes\Objednavky;


$idUser = (isLoggedIn()) ? loggedUserId()  : header('Location: /') ;


$objednavky = new Objednavky();
$orders = $objednavky->getAll($idUser );


$data = [
	'orders' => $orders,
	 'stav' => (isset($stav)) ? $stav : '' ,
];

$content = getContent(
	'../templates/orders.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';

?>