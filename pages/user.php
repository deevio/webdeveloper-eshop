<?php 
use Classes\User;

$valid = true;
$idUser = (isLoggedIn()) ? loggedUserId()  : header('Location: /') ;


if (isset($_POST['zmenit'])) {

    if ($_POST['meno'] == "") {

        $valid = false;
        $stav = 'Fill your name, please.';

    } 

    if ($_POST['email'] == "") {

        $valid = false;
        $stav = 'Fill your email, please.';

    } 


    if ($_POST['adresa'] == "") {

        $valid = false;
        $stav = 'Fill your address, please.';

    } 
}


if (isset($_POST['zmenit_heslo'])) {

 

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
}


$meno = (isset($_POST['meno'])) ? $_POST['meno'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$adresa = (isset($_POST['adresa'])) ? $_POST['adresa'] : ''; 
$pass = (isset($_POST['pass1'])) ? $_POST['pass1'] : ''; 


$uzivatel = new User();
$meno = (!isset($_POST['meno']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'name') : $meno; 
$email = (!isset($_POST['email']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'email') : $email; 
$adresa = (!isset($_POST['adresa']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'address') : $adresa; 


if (isset($_POST['zmenit'])) {
	

	if($valid){
		

		if(
		$uzivatel->change(
			$idUser,
			htmlentities($meno),
			htmlentities($email),
			htmlentities($adresa)			
			)
		) {
			
			//header('Location: /user');
			//die;
			$stav = 'Data was changed.' ;

		} else {

			$stav = 'Change failed!';

		}


	}

  
}

if (isset($_POST['zmenit_heslo'])) {	
	

	if($valid){		

		if(
		$uzivatel->changePass(
			$idUser,
			$pass
			)
		) {
			
			//header('Location: /user');
			//die;
			$stav = 'Password was changed.';

		} else {

			$stav = 'Change of password failed!';

		}


	}

  
}




$data = [

    'meno'=> (isset($meno)) ? $meno : '' ,
    'email' => (isset($email)) ? $email : '' ,
    'adresa' => (isset($meno)) ? $adresa: '' ,
    'pass1' => (isset($pass1)) ? '' : '' ,
    'pass2' => (isset($pass2)) ? '' : '' ,
    'stav' => (isset($stav)) ? $stav : '' ,

];

$content = getContent(
	'../templates/user.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';

?>