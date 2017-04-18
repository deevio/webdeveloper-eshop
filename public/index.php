<?php

 require_once '../classes/Router.php';

require_once '../db.config.php';

require_once '../functions/html.php';

include_once '../templates/header.php';

//include_once '../pages/home.php';

  // routes
  Router::route('GET', '/', function($url){
    include '../pages/home.php';
  });

  Router::route('GET', '/kontakt', function($url){
    include '../pages/kontakt.php';
  });

  Router::execute();



include_once '../templates/footer.php';




//file_get_contents("http://www.domenaaaa.sk/index.php");


//echo preVar($_SERVER);
/*
require_once '../classes/Router.php';
//routes
Router::route('GET', '/', function($url){
    include '../pages/home.php';
});
*/
//phpinfo();
?>
    
