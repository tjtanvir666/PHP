<?php
	function add($conn, $query_req){
		if($conn != null){
			try{
				$query = $conn->prepare($query_req);
				$query->execute();
			}
			catch(PDOException $e){
				echo $e-getMessage();
			}
		}
		else{
			echo 'Connection not established';
		}
	}
?>