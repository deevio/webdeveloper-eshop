<?php

/**
 * valid URL
 * @param string $bookTitle - title
 * @return string $slug - valid URL
 */

function slug($bookTitle) {
  
  $slug  = preg_replace('/[^\w]/', '-', $bookTitle);
  $slug  = strtolower(preg_replace('/(-+)/', '-', $slug));  

  return $slug;

};

/**
 * valid 
 * @param string $bookTitle - title
 * @param int $bookId - id
 * @return string $url -  url of book
 */

function buildBookUrl($bookTitle, $bookId){

    $url = '/book/' . slug($bookTitle) . '/' . $bookId;
    return $url;

};



?>