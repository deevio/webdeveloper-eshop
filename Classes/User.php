<?php  namespace Classes;

class User {
   
   const TABLE_NAME = 'users';
  

    public function __construct(){
          global $db;
          $this->db = $db;
    }



    public function hash($pass) {
        
        $hash = password_hash($pass, PASSWORD_BCRYPT );

        return $hash;

    }
  

    public function register($meno, $email, $adresa, $pass) {

        $sql = 'INSERT INTO ' .  self::TABLE_NAME . '  ( name, email, pass, address, date ) 

        VALUES ( :name,  :email, :pass, :address, :date )'  ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':name' => $meno ,
            ':email' => $email,
            ':pass' => $this->hash($pass),           
            ':address' => $adresa,
            ':date' => time(),
        ));

        return true;

    }
    
}


?>

