<?php

/**
 * pagination of pages
 *
 * @param string $page  - page
 * @param string $products - products
 * @param integer $idActivePage - id active page 
 *
 * @return string $pagination - unordered list  
 *
 */

 function pagination($page, $products, $idActivePage){

    $pagination = '

        <ul class="pagination">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        </ul>

    ';

 }



?>