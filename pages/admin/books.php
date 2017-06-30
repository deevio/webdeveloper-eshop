<?php 

$idUser = ( !isAdmin() ) ? header('Location: /') : '' ; 


$data = [];
$content = getContent(
	'../templates/admin/books.php',
	$data
);

include '../templates/admin/layout.php';



?>