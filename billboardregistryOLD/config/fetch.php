<?php

function fetch($conn, $sql){
	if(is_null($conn)){
		throw new Exception("Error Processing Request, connection not established");
		return array();
	}
			 $sth = $conn->query($sql);
	         $return_result = array();
	         while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
				  $return_result[] = $row; // appends each row to the array
				}
        return $return_result;
}

?>