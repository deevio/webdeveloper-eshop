<?php

header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');

$id = $_POST['id'];
$price = $_POST['price'];
$title = $_POST['title'];
$description = $_POST['description'];

// validacia vstupu
if (!is_numeric($id)) {
	header("HTTP/1.1 400 Bad Request");
	$data = [
	  'errorCode' => 350,
	  'errorMessage' => 'nevyplnene id'
    ];
} else {
	// tu sa bude ukladat do DB zmena
	$kniha = new Classes\Kniha;

	$edit  = $kniha->edit( $id, $title, $price, $description, 1  );

	if($edit){
		$data = (object) [
			'id' => $id,
			'title' => $title,
			'price' => $price,
			'description' => $description,
			'url' => buildBookUrl(
				$title,
				$id
			)
		];
	} else {
		header("HTTP/1.1 400 Bad Request");
		$data = [
		'errorCode' => 350,
		'errorMessage' => 'produkt nezmeneny'
		];
	}

}

echo json_encode($data);