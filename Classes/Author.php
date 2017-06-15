<?php
namespace Classes;

class Author {
    

   const TABLE_NAME = 'authors';
  

    public function __construct(){
          global $db;
          $this->db = $db;
    }
  



}


?>