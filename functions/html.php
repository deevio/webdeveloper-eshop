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
 * @param array $params - key, value 
 *
 * @return string $query 
 */


    function queryBuild($params){
        
        
        $poleHodnot =  $_GET;

        foreach($params as $key => $value){
            $poleHodnot[$key] = $value;
        }
        

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
     

        if(isset($_GET['ord']) && $podlaCoho === $_GET['ord'] ) {

            $sort = (isset($_GET['sort']) &&  $_GET['sort']  === 'dole') ? 'hore' : 'dole';
        } else {

            $sort = 'dole';
        }

              return      queryBuild(
                [
                  'sort' => $sort,
                  'ord' => $podlaCoho,       
                ]
            ); 

     



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
        return number_format($price, 2, ',', ' ') . ' EUR';      

    }; 


/**
 * back button
 *
 * @return string back button
 */


    function backButton(){
       
         $backButton = '<a href="' . $_SERVER['HTTP_REFERER'] . '" title="back" class="btn btn-info pull-left"/> Back </a>';   
         return $backButton;
    }; 
    

?>