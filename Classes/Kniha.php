<?php namespace Classes;

class Kniha extends Product {

	const TABLE_NAME = 'products';
	const TABLE_NAME_2 = 'authors';

	protected $pocetStran;
	protected $excerpt;
	public $count;
	//public $maxPrice;


	public function __construct(
		$id = 0, $title = '', $price = 0
	) {
	  
		$title = 'Kniha ' . $title;

	  parent::__construct($id, $title, $price);


	}

	public function setPocetStran($pocetStran) {
		$this->pocetStran = $pocetStran;
	}

	public function getFirstWordOfTitle() {
		
		$firstWord = explode(' ', $this->title)[0];

		return $firstWord;
	}

	public function getById( $idKnihy ) {
	 
	  //$allBooks = getAllBooks();
	  //$oneBook = $allBooks[  $idKnihy  ];

		$this->db;
		$sth = $this->db->prepare(' SELECT * FROM  ' . self::TABLE_NAME .  '  WHERE id = :id LIMIT 1 ');
		$sth->execute(['id' => $idKnihy]);
		$oneBook = $sth->fetchObject(__CLASS__);

	  	return $oneBook;

	}

	public function getBooks(
		$from = 0, $limit = 12, $orderBy = 'id',
		$cena_od = 0,	$cena_do = NULL, $hladaj = NULL, $autor = NULL
		) {


		//$this->maxPrice = $this->getMaxPrice( self::TABLE_NAME, 'price' );
		$whereSql = ' price >= :cena_od AND price <= :cena_do ';		
		$whereHodnoty = [				
				'cena_od' => $cena_od,
				'cena_do' => ($cena_do === NULL) ?  '99999' : $cena_do, 
			];
			// 99999 get max price

			if($hladaj != NULL) {
				$whereSql .= '  AND  MATCH (title, description, excerpt) AGAINST (:hladaj) ';
				$whereHodnoty['hladaj'] = $hladaj;
			}

			if($autor != NULL) {
				$whereSql .= '  AND  author = :autor ';
				$whereHodnoty['autor'] = $autor;
			}
/*
 			if($hladaj != NULL) {
 				$whereSql .=  ' OR  authors.name LIKE :hladaj_autora  ' ;	
 				$whereHodnoty['hladaj_autora'] = '%'.$hladaj.'%';
 							
 			}
*/


		$this->db;		
		$sth = $this->db->prepare(' SELECT *  FROM  ' . self::TABLE_NAME .  ' 
 
		WHERE  '.$whereSql.'

		ORDER BY ' . $orderBy . '

		LIMIT ' . $from . ', '. $limit . ' ' 

		);


		$sth->execute( $whereHodnoty );
		


    $books = [];
		while($book = $sth->fetchObject(__CLASS__)) {

		  $books[] =  $book;	
		
	  }

		$this->count = $this->getCount($whereSql , $whereHodnoty);

		return $books;

		//var_dump($books);
		
  }



	public function getByIds(array $ids) {
		$this->db;		
		$sth = $this->db->prepare(' SELECT * FROM  ' . self::TABLE_NAME .  ' 
		WHERE id IN ( ' . implode(',', $ids) . ' )' 		);

		$sth->execute();

    $books = [];
		while($book = $sth->fetchObject(__CLASS__)) {

		  $books[] =  $book;	
		
	  }



		return $books;

		//var_dump($books);
		
  }



	public function getCount($whereSql , $whereHodnoty) {

		$this->db;		
		$sth = $this->db->prepare(' SELECT COUNT(*) AS pocet FROM  ' . self::TABLE_NAME  . '
		
		
		 WHERE  ' . $whereSql


		 	);		

		$sth->execute( $whereHodnoty );

		$result = $sth->fetchAll();

		return $result[0]['pocet'];


	}

	public function edit( $id, $nazov, $cena, $popis, $author  ) {
        
        $sql = 'UPDATE ' . self::TABLE_NAME .  '  SET title = :title,
                description = :description,
                price = :price,
                author = :author
                WHERE id = :id
        ';

		$this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

        $query = $this->db->prepare($sql);
        if (!$query) {
			print_r($this->db->errorInfo());
			return false;
		}
        $query->execute(array(
            ':id' => $id,
            ':title' => $nazov,
            ':description' => $popis,
            ':price' => $cena,
            ':author' => $author
        ));
       

        return true;
    }


	public function add( $nazov, $cena, $author = 1, $description ) {
        
        $sql = ' INSERT INTO  ' . self::TABLE_NAME .  '

				(title, price, author, description)

				VALUES
				
				(:title, :price, :author, :description)                   
        ';  

		$this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

        $query = $this->db->prepare($sql);
        if (!$query) {
			print_r($this->db->errorInfo());
			return false;
		}

        $query->execute(array(            
            ':title' => $nazov,          
            ':price' => $cena,
			':author' => $author,
			':description' => $descripton,
        ));
       
		return $this->db->lastInsertId();
       
    }

	public function delete( $id ) {
        
		if(is_numeric($id)) {
			$sql = 'DELETE FROM  ' . self::TABLE_NAME .  '
					WHERE id = :id  LIMIT 1
			';

			$this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

			$query = $this->db->prepare($sql);
			if (!$query) {
				print_r($this->db->errorInfo());
				return false;
			}
			$query->execute(array(
				':id' => $id
			));			

			return true;

		} else {

			return false;

		}
        
    }

/*
public function getMaxPrice( $tableName, $columnName ) {
	
		$this->db;		
		$sth = $this->db->prepare(' SELECT ' . $columnName . ' AS maxPrice  FROM  ' . $tableName . '		
		
		ORDER BY ' . $columnName . ' DESC LIMIT 1 '

		 	);		

		$sth->execute();

		$result = $sth->fetchAll();

		$maxPrice =  $result[0]['maxPrice'];

		return $maxPrice;

}	
*/



	public function __sleep() {

		return ['id', 'title', 'price', 'description', 'excerpt', 'pocetStran' ];

	}




}