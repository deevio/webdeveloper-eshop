<?php

use Classes\Cart;
use Classes\Kniha;
use Classes\Objednavky;
use Classes\User;

    $valid = true;


if (isset($_POST['objednat'])) {

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



// vkladanie do kosika
if (isset($_POST['vlozKnihy']) || isset($_POST['kupit'])) {

  	 $kniha = new Kniha;
  	 $knihyKtoreChceDatDoKosika = $kniha->getByIds($_POST['doKosika']);	

  foreach ($knihyKtoreChceDatDoKosika as $vlozenaKniha) {

		//add try catch
		try {

			Cart::addToCart($vlozenaKniha);

		} catch (\Exception $exception) {

			var_dump($exception->getMessage());
			die;

		}

  }
  
}

//odstranenie kosika
if (isset($_POST['zmazat'])) {
  
  foreach ($_POST['zKosika'] as $idKnihy) {
  	Cart::removeFromCart($idKnihy);
  }
  
}





$meno = (isset($_POST['meno'])) ? $_POST['meno'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$adresa = (isset($_POST['adresa'])) ? $_POST['adresa'] : ''; 


$uzivatel = new User();
$meno = (!isset($_POST['meno']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'name') : $meno; 
$email = (!isset($_POST['email']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'email') : $email; 
$adresa = (!isset($_POST['adresa']) && isset($_SESSION['user'])) ?  $uzivatel->getUserInfo($_SESSION['user'], 'address') : $adresa; 


$kosik = Cart::getItems(); 	




if (isset($_POST['objednat'])) {
	

	if($valid){
		//insert				

		$objednavka = new Objednavky();

		if(
		$objednavka->add(
			htmlentities($meno),
			htmlentities($email),
			htmlentities($adresa),
			$kosik)
		) {

			Cart::clearCart();
			header('Location: /kupil');
			die;

		} else {

			$stav = 'Order failed!';

		}


	}

  
}

// vytiahne z kosika a posle do template

$data = [

  	'knihyVKosiku' => Cart::getItems(),
	'suma' => Cart::getSum(),
	'mnozstvo' => count(Cart::getItems()),
    'meno'=> (isset($meno)) ? $meno : '' ,
    'email' => (isset($email)) ? $email : '' ,
    'adresa' => (isset($adresa)) ? $adresa : '' ,    
    'stav' => (isset($stav)) ? $stav : '' ,

];

$content = getContent(
	'../templates/cart.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';