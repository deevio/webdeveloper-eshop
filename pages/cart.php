<?php

use Classes\Cart;
use Classes\Kniha;
use Classes\Objednavky;

// vkladanie do kosika
if (isset($_POST['vlozKnihy'])) {

  	 $kniha = new Kniha;
  	 $knihyKtoreChceDatDoKosika = $kniha->getByIds($_POST['doKosika']);	
  // var_dump($_POST);

  foreach ($knihyKtoreChceDatDoKosika as $vlozenaKniha) {

  	 //$kniha = new Kniha;
  	 //$vlozenaKniha = $kniha->getById($idKnihy);

  	//Cart::addToCart($vlozenaKniha);

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
  // var_dump($_POST);

  foreach ($_POST['zKosika'] as $idKnihy) {
  	Cart::removeFromCart($idKnihy);
  }
  
}


//objednava sa
if (isset($_POST['objednat'])) {
  // var_dump($_POST);
	//zapise objednavku do db
	//mail zakaznikovi

	$valid = true;
	if($valid){
		//insert
		$kosik = Cart::getItems();
		$meno = $_POST['meno'];
		$email = $_POST['email'];
		$adresa = $_POST['adresa'];
		$kosik = $kosik;

		$objednavka = new Objednavky();
		$objednavka->add(
			$meno  ,
			$email ,
			$adresa ,
			$kosik 
		);


	}

 
  
}

// vytiahne z kosika a posli do template
$data = [
  'knihyVKosiku' => Cart::getItems(),
	'suma' => Cart::getSum(),
	'mnozstvo' => count(Cart::getItems()),
];

$content = getContent(
	'../templates/cart.php',
	$data
);

// html vystup - layout (view)
include '../templates/layout.php';