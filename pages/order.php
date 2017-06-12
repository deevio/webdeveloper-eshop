<?php
use Classes\Objednavky;

$idUser = (isset($_SESSION['user'])) ? $_SESSION['user'] : header('Location: /') ;
$idOrder =  (isset($idOrder)) ? $idOrder : '' ;

$objednavky = new Objednavky();
$order = $objednavky->getOrder($idOrder, $idUser );
$order = unserialize($order);




if (isset($_POST['storno']) && is_numeric($idOrder)) {

	
	if(
		$objednavky->cancel($idOrder, $idUser)		
	) {

		$stav = 'Storno was successful.';

	} else {

		$stav = 'Storno was not successful.';

	}

}


$data = [
	'idOrder' => $idOrder,
	'order' => $order,
	'stav' => (isset($stav)) ? $stav : '' ,
];

$content = getContent(
	'../templates/order.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';


?>