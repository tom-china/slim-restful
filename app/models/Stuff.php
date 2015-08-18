<?php
namespace models;
use lib\Core;

/**
 * @SWG\Definition(definition="stuff", required={})
 */
class Stuff {
	protected $core;
	function __construct() {
		$this->core = \lib\Core::getInstance();
	}
	
	/**
	 * @SWG\Get(
	 *     path="/stuffs",
	 *     tags={"stuff"},
	 *     summary="拿到所有員工",
	 *     description="返回所有員工",
	 *     operationId="getAllStuff",
	 *     produces={"application/json"},
	 *     @SWG\Response(
	 *         response=200,
	 *         description="pet response",
	 *         @SWG\Schema(
	 *             type="array",
	 *             @SWG\Items(ref="#/definitions/stuff")
	 *         )
	 *     )
	 * )
	 */
	public function getAllStuff() {
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