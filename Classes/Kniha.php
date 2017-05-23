<?php namespace Classes;

class Kniha extends Product {

	const TABLE_NAME = 'products';

	protected $pocetStran;

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
	  // vytiahni z DB 1 knihu
	  // SELECT ....

	  $allBooks = getAllBooks();
	  $oneBook = $allBooks[  $idKnihy  ];

	  return $oneBook;
	}

	public function getBooks($limit = 10) {
		global $db;
		//$this->db
		$sth = $db->prepare(' SELECT title, price FROM  ' . self::TABLE_NAME .  ' 
		LIMIT ' . $limit . ' ' 
		);

		$sth->execute();

    $books = [];
		while($book = $sth->fetchObject('Classes\Kniha')) {

		  $books = $book;	
		
	  }

		

		//return $books;

		var_dump($books);
		
  }





}