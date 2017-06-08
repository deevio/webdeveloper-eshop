<?php  namespace Classes;

class Objednavky {
   
   const TABLE_NAME = 'orders';
  

    public function __construct(){
          global $db;
          $this->db = $db;
    }
  

    public function add($meno, $email, $adresa, $kosik) {

        $sql = 'INSERT INTO ' .  self::TABLE_NAME . '  ( user_id, customer, email, items, address, date ) 

        VALUES ( :user_id, :customer, :email, :items, :address, :date )'  ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':user_id' => (isset($_SESSION['user'])) ? $_SESSION['user'] : NULL ,
            ':customer' => $meno,
            ':email' => $email,
            ':items' => serialize($kosik),
            ':address' => $adresa,
            ':date' => time(),
        ));


    }


     public function remove($id) {

        $sql = 'DELETE  FROM  ' .  self::TABLE_NAME . ' WHERE  id = :id '   ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id,
        ));         
     }



    public function change($id, $meno, $email, $adresa, $kosik) {

        $sql = 'UPDATE ' .  self::TABLE_NAME . '  SET 

        customer = :customer, email = :email, items = :items, address = :address 

         WHERE id = :id'  ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id ,
            ':customer' => $meno,
            ':email' => $email,
            ':items' => serialize($kosik),
            ':address' => $adresa,          
        ));


    }

}

?>