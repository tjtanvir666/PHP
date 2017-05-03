<?php

	$data = json_decode(file_get_contents('php://input'), true);  #getting data from post in javascript
	print_r($data);
	//echo $data["name"];
	
	$cat_id = $data["id"];
	$cat_name = $data["name"];
	$cat_image = $data["image"];
	$cat_count = $data["count"];

	try{
		$conn = new PDO("mysql:host=localhost;dbname=catclicker", "root", "");

		// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "UPDATE catdata SET name='$cat_name', image='$cat_image', count=$cat_count Where id= $cat_id";  #name and image are string hence inside the quote    

    	// Prepare statement
    	$stmt = $conn->prepare($sql);  

    	// execute the query
    	$stmt->execute();    

    	// echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully"; 
	
	}catch(PDOException $e)
    {
       echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
	
?>