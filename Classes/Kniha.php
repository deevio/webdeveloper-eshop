<?php namespace Classes;

class Kniha extends Product {

	const TABLE_NAME = 'products';

	protected $pocetStran;
	protected $excerpt;


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
		$from = 0, $limit = 12, $orderBy = 'id'
		) {
		$this->db;		
		$sth = $this->db->prepare(' SELECT * FROM  ' . self::TABLE_NAME .  ' 
		ORDER BY ' . $orderBy . '
		LIMIT ' . $from . ', '. $limit . ' ' 

		);


//echo  		' ORDER BY ' . $orderBy . '		LIMIT ' . $from . ', '. $limit . ' ' ;




		$sth->execute();

    $books = [];
		while($book = $sth->fetchObject(__CLASS__)) {

		  $books[] =  $book;	
		
	  }

		

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



	public function getCount() {

		$this->db;		
		$sth = $this->db->prepare(' SELECT COUNT(*) AS pocet FROM  ' . self::TABLE_NAME 	);		

		$sth->execute();

		$result = $sth->fetchAll();

		return $result[0]['pocet'];


	}

	

	public function __sleep() {

		return ['id', 'title', 'price', 'description', 'excerpt', 'pocetStran' ];

	}




}