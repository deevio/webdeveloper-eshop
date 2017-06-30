<?php

parse_str(file_get_contents('php://input'), $put);

foreach($put as $key => $value){

	unset($put[$key]);
	$put[str_replace('amp;', '', $key)]  = $value;
}



header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');

$id = htmlentities($idBook);
$price =  htmlentities($put['price']);
$title =  htmlentities($put['title']);
$description =  htmlentities($put['description']);

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