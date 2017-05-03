<?php
	function connect(){
		$db_h = "localhost";
		$db_n = "screendb";
		$db_u = "root";
		$db_p = "";
		$conn = null;
		try{
			$conn = new PDO("mysql:host={$db_h}; name={$db_n}", $db_u, $db_p);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	                $conn->query("use screendb");
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	    return $conn;
	}
	
?>