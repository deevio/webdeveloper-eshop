<?php

$data = [];


$content = getContent(
	'../templates/authors.php',
	$data
);

include '../templates/layout.php';

?>