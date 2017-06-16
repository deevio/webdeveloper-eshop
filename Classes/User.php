<?php  namespace Classes;

class User {
   
   const TABLE_NAME = 'users';
   const __USER__ = 'user';
   const __CART__ = 'cart';
  

    public function __construct(){
          global $db;
          $this->db = $db;
    }



    public function hash($pass) {       
        $hash = password_hash($pass, PASSWORD_BCRYPT );
        return $hash;
    }
  

    public function register($meno, $email, $adresa, $pass) {
       
        if(!$this->getUserByEmail($email)) {

            $sql = 'INSERT INTO ' .  self::TABLE_NAME . '  ( name, email, pass, address, date ) 

            VALUES ( :name,  :email, :pass, :address, :date )'  ;

            $query = $this->db->prepare($sql);

            $query->execute(array(
                ':name' => $meno,
                ':email' => $email,
                ':pass' => $this->hash($pass),           
                ':address' => $adresa,
                ':date' => time(),
            ));

            return true;

        } else {

            return false;
        }

    }


    
    public function login($email, $pass) {

        $sql = 'SELECT id, pass FROM ' .  self::TABLE_NAME . '  WHERE 

        email =  :email  LIMIT 1 ' ;

        $query = $this->db->prepare($sql);

        $query->execute(array(           
            ':email' => $email,
        ));
        $result = $query->fetchAll();
        
        if($result){
            $id =  $result[0]['id'];
            $hash = $result[0]['pass'];
            $verify =  password_verify($pass, $hash);
        }
//opravit 
        if($verify) {
            $_SESSION[self::__USER__] = $id;
        }

        return $verify;   
          
    }


    public  function getUserInfo($id, $userInfo) {

        $sql = ' SELECT ' . $userInfo . ' FROM ' .  self::TABLE_NAME . '  WHERE 

        id =  :id  LIMIT 1 ';

        $query = $this->db->prepare($sql);


        $query->execute(array( 

            ':id' => $id,
            
        ));

        $result = $query->fetchAll();
   
        $resultUserInfo =  $result[0][$userInfo];

        return  $resultUserInfo;

    }

    public function getUserByEmail($email) {

        $sql = ' SELECT id FROM ' .  self::TABLE_NAME . '  WHERE 

        email =  :email  LIMIT 1 ';

        $query = $this->db->prepare($sql);


        $query->execute(array( 

            ':email' => $email,
            
        ));

        $emailExists = $query->fetchAll();


        return  $emailExists ;      

    }

    
    public function change($id, $meno, $email, $adresa) {

        $sql = ' UPDATE ' .  self::TABLE_NAME . '  SET  name = :name, email = :email, address = :address   
        
        WHERE id = :id 
        
        LIMIT 1   '  ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id, 
            ':name' => $meno,
            ':email' => $email,                       
            ':address' => $adresa,         
        ));

        return true;
    }


    public function changePass($id, $pass) {

        $sql = ' UPDATE ' .  self::TABLE_NAME . ' 

        SET pass = :pass 

        WHERE id = :id 
       
        LIMIT 1 '  ;

        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':id' => $id,            
            ':pass' => $this->hash($pass),                   
        ));

        return true;
    } 


    public function logout() {
         unset($_SESSION[self::__USER__] );
         unset($_SESSION[self::__CART__]);
    }
    
}


?>

