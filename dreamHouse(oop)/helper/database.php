<?php

// echo "Connected successfully";
// classes
//======================== 
class dbWorker{
	public $servername;
	public $username;
	public $password;
	public $dbName;
	public $conn;// elakar tanvir

	public function setConnection($a, $b, $c, $d){
		$this -> servername = $a; 
		$this -> username = $b; 
		$this -> password = $c; 
		$this -> dbName = $d; 
		$conn = new mysqli($a, $b, $c, $d);// bashar tanvir
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$this -> conn = $conn;
		return $conn;
	}

	public function checkUser($table,$email,$password){
		$sql = "SELECT id, name, user_type FROM $table WHERE email='$email'AND password='$password'";
		$conn = $this -> conn;
		$result = $conn->query($sql);
		$rows=$result->num_rows;
		if ($rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	$user=$row;
		    }
		    $_SESSION['user']=$user['name'];
		    return($user);
		} else {
		    echo "sorry, the information entered is not available!";
		}
	}

	public function checkProperty(){
		$sql = "SELECT * FROM properties";
		$conn = $this -> conn;
		$result = $conn->query($sql);
		$rows=$result->num_rows;
		if ($rows > 0) {
		    $x=0;
		    echo "<table border=\"1\" width=\"100%\">
		    		<tr>
		    			<th>Nameof Property</th>
		    			<th>Property Address</th>
		    			<th>Property Type</th>
		    			<th>Number Of Rooms</th>
		    			<th>Rent</th>
		    			<th>Owner</th>
		    			<th>Status</th>
		    			<th>Client ID</th>
		    			<th>Branch ID</th>
		    		</tr>";	
		    while($row = $result->fetch_assoc()) {
		    	$rowFetch[$x]=$row;
		    	echo "<tr>".
		    			"<td>".$rowFetch[$x]['name']."</td>".
		    			"<td>".$rowFetch[$x]['address']."</td>".
		    			"<td>".$rowFetch[$x]['type']."</td>".
		    			"<td>".$rowFetch[$x]['no_rooms']."</td>".
		    			"<td>".$rowFetch[$x]['rent']."</td>".
		    			"<td>".$rowFetch[$x]['owner']."</td>";
		    			if($rowFetch[$x]['status']==0){
		    				$rowFetch[$x]['status']="FREE";
		    			}else{
		    				$rowFetch[$x]['status']="Booked";
		    			}
		    	echo	"<td>".$rowFetch[$x]['status']."</td>".
		    			"<td>".$rowFetch[$x]['client']."</td>".
		    			"<td>".$rowFetch[$x]['branch_id']."</td>".
		    		  "</tr>";
		    		 
		    		 $x++;
		    	
		    }	
		    echo "</table>";
		} else {
		    echo "Sorry, the information does not match!";
		}
	}

	public function searchProperty($branch,$rent,$room_no,$type){
		$sql = "SELECT * FROM properties WHERE branch_id='$branch' AND rent<='$rent' 
		AND no_rooms<='$room_no'AND type='$type'";
		$conn = $this -> conn;
		$result = $conn->query($sql);
		$rows=$result->num_rows;
		if ($rows > 0) {
		    $x=0;
		    echo "<table border=\"1\" width=\"100%\">
		    		<tr>
		    			<th>Nameof Property</th>
		    			<th>Property Address</th>
		    			<th>Property Type</th>
		    			<th>Number Of Rooms</th>
		    			<th>Rent</th>
		    			<th>Owner</th>
		    			<th>Status</th>
		    			<th>Client ID</th>
		    			<th>Branch ID</th>
		    		</tr>";	
		    while($row = $result->fetch_assoc()) {
		    	$rowFetch[$x]=$row;
		    	echo "<tr>".
		    			"<td>".$rowFetch[$x]['name']."</td>".
		    			"<td>".$rowFetch[$x]['address']."</td>".
		    			"<td>".$rowFetch[$x]['type']."</td>".
		    			"<td>".$rowFetch[$x]['no_rooms']."</td>".
		    			"<td>".$rowFetch[$x]['rent']."</td>".
		    			"<td>".$rowFetch[$x]['owner']."</td>";
		    			if($rowFetch[$x]['status']==0){
		    				$rowFetch[$x]['status']="FREE";
		    			}else{
		    				$rowFetch[$x]['status']="Booked";
		    			}
		    	echo	"<td>".$rowFetch[$x]['status']."</td>".
		    			"<td>".$rowFetch[$x]['client']."</td>".
		    			"<td>".$rowFetch[$x]['branch_id']."</td>".
		    		  "</tr>";
		    		 
		    		 $x++;
		    	
		    }	
		    echo "</table>";
		} else {
		    echo "Wrong info";
		}
	}

	public function insertReg($user_type, $name, $username, $email, $password, $branch_id){
		$sql = "INSERT INTO user(user_type, name, username, email, password, branch_id)
				VALUES ('$user_type', '$name', '$username', '$email', '$password', '$branch_id')";
		$conn = $this -> conn;
		$result = $conn->query($sql);		
	}

	public function insertProp($name,$address,$type,$roomNo,$rent,$staff,$owner,$branch,$client){
		$sql = "INSERT INTO properties(name,address,type,no_rooms,rent,managed_by,owner,branch_id,client)
				VALUES ('$name','$address','$type','$roomNo','$rent','$staff','$owner','$branch','$client')";
		$conn = $this -> conn;
		$result = $conn->query($sql);	

		if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
	}

}//--End of class