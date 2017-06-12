<?php
use Classes\User;

$idUser = (isset($_SESSION['user'])) ? header('Location: /')  : '';

//objednava sa
if (isset($_POST['registrovat'])) {



    $valid = true;
    $stav = NULL;

    if ($_POST['meno'] == "") {

        $valid = false;
        $stav = 'Fill your name, please.';

    } 

    if ($_POST['email'] == "") {

        $valid = false;
        $stav = 'Fill your email, please.';

    } 



    if ($_POST['pass2'] == "") {

        $valid = false;
        $stav = 'Fill your password again, please.';

    } 
    
    if ($_POST['pass1'] == "") {

        $valid = false;
        $stav = 'Fill your password, please.';

    } 

    if ($_POST['pass1'] !== $_POST['pass2']) {

        $valid = false;
        $stav = 'Paswords don\'t match.';

    } 

	
	//validation

	if($valid){

		//insert	
		$meno = htmlentities($_POST['meno']);
		$email = htmlentities($_POST['email']);
		$adresa = htmlentities($_POST['adresa']);
		$pass = htmlentities($_POST['pass1']);

		
		$registracia = new User();

		if(
		$registracia->register(
			$meno  ,
			$email ,
			$adresa ,
			$pass )
		) {
			
			header('Location: /registroval');
			die;

		} else {

			$stav = 'Registration failed!';
            
		}

	}
  
}


$data = [

    'meno'=> (isset($_POST['meno'])) ? $_POST['meno'] : '' , 
    'email' => (isset($_POST['email'])) ? $_POST['email'] : '' ,
    'adresa' => (isset($_POST['adresa'])) ? $_POST['adresa'] : '' ,
    'pass1' => (isset($_POST['pass1'])) ? $_POST['pass1'] : '' ,
    'pass2' => (isset($_POST['pass1'])) ? $_POST['pass2'] : '' ,
    'stav' => (isset($stav)) ? $stav : '' ,
    
];


$content = getContent(
	'../templates/registration.php',
	$data
);

include '../templates/layout.php';

?>