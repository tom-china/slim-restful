<?php
namespace models;
use lib\core;
/**
 * @SWG\Definition(definition="book", required={})
 */
class Book{
	protected $core;
	function __construct() {
		$this->core = \lib\Core::getInstance();
	}

	/**
	 * @SWG\Get(
	 *     path="/books",
	 *     tags={"book"},
	 *     summary="获取所有图书列表",
	 *     description="返回所有图书",
	 *     operationId="getAllBooks",
	 *     produces={"application/json"},
	 *     @SWG\Response(
	 *         response=200,
	 *         description="pet response",
	 *         @SWG\Schema(
	 *             type="array",
	 *             @SWG\Items(ref="#/definitions/book")
	 *         )
	 *     )
	 * )
	 */
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

