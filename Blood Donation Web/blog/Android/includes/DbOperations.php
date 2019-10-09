<?php

class DbOperations{

	private $con;

	function __construct(){

		require_once dirname(__FILE__).'/DbConnect.php';

		$db = new DbConnect();

		$this->con = $db->connect();
	}

	/* CRUD  -> C -> CREATE */

	public function createRequest($name, $age, $location, $bloodGroup, $contact){
			
			$stmt = $this->con->prepare("INSERT INTO `requests` (`name`, `age`, `location`, `bloodGroup`, `contact`) VALUES (?, ?, ?,?,?);");
			$stmt->bind_param("sssss",$name, $age, $location, $bloodGroup, $contact);

			if($stmt->execute()){
				return 1;
			}else {
				return 2;
			}
		}
	}
	


// change the table name into donors and username into name when connecting to amazon
