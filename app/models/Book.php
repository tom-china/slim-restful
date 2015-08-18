<?php
namespace models;
use lib\core;
class Book{
	protected $core;
	function __construct() {
		$this->core = \lib\Core::getInstance();
	}

		public function getAllBooks() {
		 $books = array();
	    foreach ($this->core->db->books() as $book) {
	        $books[]  = array(
	            "id" => $book["id"],
	            "title" => $book["title"],
	            "author" => $book["author"],
	            "summary" => $book["summary"]
	        );
	    }

	    return $books;
	}
}