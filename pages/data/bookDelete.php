<?php

header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');

$id = $_POST['id'];


// validacia vstupu
if (!is_numeric($id)) {
	header("HTTP/1.1 400 Bad Request");
	$data = [
	  'errorCode' => 350,
	  'errorMessage' => 'nevyplnene id'
    ];
} else {
	
	$kniha = new Classes\Kniha;

	$delete  = $kniha->delete( $id );

	if($delete){
		$data = (object) [
			'id' => $id,			
		];
	} else {
		header("HTTP/1.1 400 Bad Request");
		$data = [
		'errorCode' => 350,
		'errorMessage' => 'produkt sa nezmazal'
		];
	}

}

echo json_encode($data);