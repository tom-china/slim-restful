<?php
namespace models;
use lib\Core;
class Stuff {
	protected $core;
	function __construct() {
		$this->core = \lib\Core::getInstance();
	}
	
	// Get all stuff
	public function getAllStuff() {
		 return "Hello stuff";
	}
}