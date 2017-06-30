<?php
use Classes\User;


$idUser = (isLoggedIn()) ? header('Location: /admin/books') : '' ;

$stav = NULL;


if (isset($_POST['prihlasit'])) {

    $valid = true;

    if ($_POST['email'] == "") {

        $valid = false;
        $stav = 'Fill your email, please.';

    } 

    if ($_POST['pass'] == "") {

        $valid = false;
        $stav = 'Fill your password, please.';

    } 


 	if($valid){
	
		$email = htmlentities($_POST['email']);
		$pass = $_POST['pass'];
		
		$prihlasenie = new User();	    

		if($prihlasenie->login($email ,$pass)) {             	
			
            header('Location: ' . $_POST['ref']);
			die;          

		} else {
			$stav = 'Login failed!';
		}

	}   

}



//transfer variables to template
$data = [
    'email' => (isset($_POST['email'])) ? $_POST['email'] : '' , 
    'pass' => (isset($_POST['pass'])) ? $_POST['pass'] : '' , 
    'stav' => $stav,    
    'ref' => $_SERVER['HTTP_REFERER'],
];


$content = getContent(
	'../templates/admin/login.php',
	$data
);

include '../templates/admin/layout.php';

?>