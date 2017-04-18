<?php
require_once '/db.config.php';
require_once '../classes/Router.php';
require_once '../functions/content.php';
//require_once '../functions/html.php';

include_once '../templates/header.php';

Router::route('GET', '/', function($url){
  include '../pages/home.php';
});
 

Router::route('GET', '/kontakt', function($url){
  include '../pages/kontakt.php';
});

Router::route('GET', '/error', function($url){
  include '../pages/404.php';
});


Router::execute();


include_once '../templates/footer.php';


?>
    
