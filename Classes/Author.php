<?php
namespace Classes;

class Author {


   const TABLE_NAME = 'authors';
  

    public function __construct(){
          global $db;
          $this->db = $db;
    }
  

    public function getAll() {

        $sql = ' SELECT id, name, about   FROM  ' .  self::TABLE_NAME . '       
        
        ORDER BY name ASC  ';

        $query = $this->db->prepare($sql);

        $query->execute();	

    
        $authors = [];
        while($author = $query->fetchObject(__CLASS__)) {
            $authors[] =  $author;	            
        }		

		return $authors;      

    }




}


?>