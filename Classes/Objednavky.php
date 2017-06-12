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

        return true;
    }


    public function getAll($idUser) {

        $sql = ' SELECT * FROM  ' .  self::TABLE_NAME . '  

        WHERE user_id = :user_id   
        
        ORDER BY id DESC LIMIT  100  ';

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':user_id' => $idUser 
        ));	

    
        $orders = [];
        while($order = $query->fetchObject(__CLASS__)) {
            $orders[] =  $order;	            
        }		

		return $orders;      

    }

    public  function getOrder($idOrder, $idUser) {

        $sql = ' SELECT items  FROM ' .  self::TABLE_NAME . '  WHERE 

        ( id = :id  AND user_id = :user_id )

        LIMIT 1 ';

        $query = $this->db->prepare($sql);


        $query->execute(array( 

            ':id' => $idOrder,
             ':user_id' => $idUser,
            
        ));

        $result = $query->fetchAll();
   
        $resultOrder =  $result[0]['items'];

        return  $resultOrder;

    }



    public function cancel($idOrder, $idUser) {

        $sql = ' UPDATE ' .  self::TABLE_NAME . '  SET status = :status 

        WHERE  ( id = :id  AND user_id = :user_id )   LIMIT  1 '   ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $idOrder,
            ':user_id' => $idUser,
            ':status' => 5,
        ));  

        return true;   

    
     }

/*
     public function remove($id) {

        $sql = 'DELETE  FROM  ' .  self::TABLE_NAME . ' WHERE  id = :id  LIMIT 1 '   ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id,
        ));         
     }



    public function change($id, $meno, $email, $adresa, $kosik) {

        $sql = 'UPDATE ' .  self::TABLE_NAME . '  SET 

        customer = :customer, email = :email, items = :items, address = :address 

         WHERE id = :id   LIMIT 1 ' ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id ,
            ':customer' => $meno,
            ':email' => $email,
            ':items' => serialize($kosik),
            ':address' => $adresa,          
        ));


    }
*/

}

?>