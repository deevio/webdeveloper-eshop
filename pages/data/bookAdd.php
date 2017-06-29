<?php 


header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');


$price = $_POST['price'];
$title = $_POST['title'];
$description = $_POST['description'];
$author = ( isset($_POST['author']) ) ? $_POST['author'] : 1 ;

// validacia vstupu
if (empty($title)) {
	header("HTTP/1.1 400 Bad Request");
	$data = [
	  'errorCode' => 350,
	  'errorMessage' => 'nevyplneny nazov'
    ];
} else {

	$kniha = new Classes\Kniha;

	$add  = $kniha->add( $title, $price, $description );

        if($add){
            $data = (object) [	
                'insertedId' => $add,		
                'title' => $title,
                'price' => $price,
                'description' => $description,	
                'author' => $author,	
            ];


        } else {
            header("HTTP/1.1 400 Bad Request");
            $data = [
            'errorCode' => 350,
            'errorMessage' => 'produkt sa nepodarilo pridat',
            'lId' => $add
            ];
        }

}


// upload pictures
// tu este osetrovacky ci je to vobec obrazok a velkost a pod....

if (!empty($_FILES['photo']['tmp_name'][0])) {
    
    $adresar = __DIR__ . '/../../public/library/' . $add;
    mkdir($adresar, 0744);


	foreach ($_FILES['photo']['tmp_name'] as $tmpName) {
		if (
			!move_uploaded_file(
				$tmpName,
				sprintf('%s/%s', $adresar, sha1_file($tmpName))
			)
		) {
		    throw new RuntimeException('Failed to move uploaded file.');
		}
	}
}

echo json_encode($_POST['title']);
?>