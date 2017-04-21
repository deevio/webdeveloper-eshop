<?php

/**
 * valid URL
 * @param string $bookTitle - title
 * @return string $slug - valid URL
 */

function slug($bookTitle) {

  $trans = array("Á"=>"a", "Ä"=> "a", "Č"=>"c", "Ç"=>"c", "Ď"=>"d", "É"=>"e","Ě"=>"e","Ë"=>"e","Í"=>"i","Ň"=>"n","Ó"=>"o","Ö"=>"o","Ř"=>"r","Š"=>"s","Ť"=>"t","Ú"=>"u","Ů"=>"u","Ü"=>"u","Ý"=>"y","Ž"=>"z","á"=>"a","ä"=>"a","č"=>"c","ç"=>"c","ď"=>"d","é"=>"e","ě"=>"e","ë"=>"e","í"=>"i","ň"=>"n","ó"=>"o","ö"=>"o","ř"=>"r","š"=>"s","ť"=>"t","ú"=>"u","ů"=>"u","ü"=>"u","ý"=>"y","ž"=>"z","ľ"=>"l","ĺ"=>"l"," "=>"-");
  $slug = strtr($bookTitle, $trans);
  $slug  = preg_replace('/[^\w]/', '-', $slug);
  $slug  = strtolower(preg_replace('/(-+)/', '-', $slug));  

  return $slug;

};

/**
 * url of books
 * @param string $bookTitle - title
 * @param int $bookId - id
 * @return string $url -  url of book
 */

function buildBookUrl($bookTitle, $bookId){

    $url = '/book/' . slug($bookTitle) . '/' . $bookId;
    return $url;

};



?>