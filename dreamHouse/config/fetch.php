  <?php
		#fetching the data
			function fetch($conn, $sql){
		if(is_null($conn)){
			throw new Exception("Error Processing Request, connection not established");
			return array();
		}
				 $sth = $conn->query($sql);
		         $return_result = array();
		         
		         while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {  //we have put in the while becaus it is a continuous process it will keep queryig the statement we can use fetch all also see the diffrence
					  $return_result[] = $row; // appends each row to the array
					}
	        return $return_result;
	}
?>