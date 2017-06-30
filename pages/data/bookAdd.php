<?php 


header('Content-Type: text/json');
header('Access-Control-Allow-Origin: *');


$price =  htmlentities($_POST['priceAdd']);
$title =  htmlentities($_POST['nameAdd']);
$description = ( isset($_POST['descriptionAdd']) ) ?  htmlentities($_POST['descriptionAdd']) : '' ;
$author = ( isset($_POST['authorAdd']) ) ?  htmlentities($_POST['authorAdd']) : 1 ;

// validacia vstupu
if (empty($title)) {
	header("HTTP/1.1 400 Bad Request");
	$data = [
	  'errorCode' => 350,
	  'errorMessage' => 'nevyplneny nazov'
    ];
} else {

	$kniha = new Classes\Kniha;

	$add  = $kniha->add( $title, $price, $author, $description );

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
            'insertedId' => $add
            ];
        }

}


// upload pictures
// tu este osetrovacky ci je to vobec obrazok a velkost a pod....

if (!empty($_FILES['photo']['tmp_name'][0])) {
    
    $adresar = __DIR__ . '/../../public/library/' . $add;
    mkdir($adresar, 0744);


    $count = count($_FILES['photo']['tmp_name']);
    for($i = 0; $i < $count; $i++) {

        $file_tmp = $_FILES['photo']['tmp_name'][$i];
        $file_name = $_FILES['photo']['name'][$i];

    
		if (
			!move_uploaded_file(
				$file_tmp,
				sprintf('%s/%s', $adresar, sha1_file($file_tmp ).'-'.$file_name)
			)
		) {
		    throw new RuntimeException('Failed to move uploaded file.');
		}

    }

}

echo json_encode($data);
?>