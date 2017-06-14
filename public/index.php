<?php

require '../vendor/autoload.php';

session_start();

use Classes\Cart;

Cart::init();


require_once '../helpers/login.php';
require_once '../config/routes.php';


?>
    
