<?php
/**
 * This is an example of User Class using PDO
 *
 */
namespace models;
use lib\Core;
use PDO;
class User {
	protected $core;
	function __construct() {
		$this->core = Core::getInstance();
	}
	
	// Get all users
	public function getUsers() {
		
	}
	// Get user by the Id
	public function getUserById($id) {
		
	}
	// Get user by the Login
	public function getUserByLogin($email, $pass) {
		
	}
	// Insert a new user
	public function insertUser($data) {
		
		
	}
	// Update the data of an user
	public function updateUser($data) {
		
	}
	// Delete user
	public function deleteUser($id) {
		
	}
}