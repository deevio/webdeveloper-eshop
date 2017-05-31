<?php
//global $a;


/**
 * preformatted view of array
 *
 *
 * @param array $post view preformatted structure of array
 *
 * @return void
 */

 //more info https://www.phpdoc.org/docs/latest/index.html

function preVar($post) {

    echo '<pre>';
    echo  var_dump($post);
    echo '</pre>';

};


/**
 * replaces key value in url
 *
 *
 * @param string $key  - key
 * @param string $value  - value
 *
 * @return string $query 
 */


    function queryBuild($key, $value){
        
        //var_dump($_GET);

        $poleHodnot = & $_GET;
        $poleHodnot[$key] = $value;

        return '?' . http_build_query($poleHodnot);

    }; 





/**
 * 
 *
 *
 * @param string $podlaCoho - podla coho sa zoraduje - napriklad
 *
 * @return 
 */


    function zoradQueryString($podlaCoho){
       
        //nastavit ?ord na to podla coho zoradujem
        queryBuild('ord', $podlaCoho);

        if($podlaCoho === $_GET['ord'] ) {

            $sort = (isset($_GET['sort']) &&  $_GET['sort']  === 'dole') ? 'hore' : 'dole';

            queryBuild('sort', $sort );
        }      

    }; 
  




/**
 * replace . from prrice to ,
 *
 *
 * @param decimal $price  - price
 *
 * @return string price
 */


    function priceFormat($price){
       
        //sprintf(); %i %s - see
        //setlocale(LC_MONETARY, 'sk_SK');
        //return money_format("%i", $price); //doesn't work in windows
        return number_format($price, 2, ',', ' ');


      

    }; 
  

?>