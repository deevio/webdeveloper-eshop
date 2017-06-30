<?php


parse_str(file_get_contents('php://input'), $delete);

foreach($delete as $key => $value){

	unset($delete[$key]);
	$delete[str_replace('amp;', '', $key)]  = $value;
}



header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');

$id = $delete['id'];


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