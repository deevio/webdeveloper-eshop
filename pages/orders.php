<?php 
$data = [];

$content = getContent(
	'../templates/orders.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';

?>