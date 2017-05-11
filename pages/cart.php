<?php
use Classes\Cart;

//preVar($_POST);

$data = [
	'items' => Cart::getItems(),
];


$content = getContent(
	'../templates/cart.php',
	$data
);

include '../templates/layout.php';

?>