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

?>