<?php
use Classes\User;


$odhlasit = new User();
$odhlasit->logout();


header('Location: ' . $_SERVER['HTTP_REFERER']);
die;



//transfer variables to template
$data = [];


$content = getContent(
	'../templates/logout.php',
	$data
);

include '../templates/layout.php';
 

?>