<?php

	

	#open database
	
	try{
		$db = new PDO("mysql:host=localhost;dbname=catClicker","root","");
		$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		printf("Unable to opne the database: %s\n", $e -> getMessage());
	}

	$query_statement = "select * from catdata"; //queery for the database

	
    #printing the result out

	try{ 
		$result = $db -> query($query_statement);
		$catArray = array(); //php array declaration

        //echo "this is the database file: <br>"; // this echo needs to be commented out for the json to work
		while($row = $result -> fetch(PDO::FETCH_ASSOC)){
			
			// printf("<br> %s + %s + %s + %s + %s + %s + %s + %s + %s + %s + %s <br>", 
			// 	htmlentities($row['CLOUD']),       htmlentities($row['DEVICEID']),  htmlentities($row['ENTRY']),
			// 	htmlentities($row['EntryOffset']), htmlentities($row['EntryTime']), htmlentities($row['EXIT']), 
			// 	htmlentities($row['ExitOffset']),  htmlentities($row['ExitTime']),  htmlentities($row['ID']), 
			// 	htmlentities($row['MACID']),  htmlentities($row['RSSI']));

			$catArray[] = $row; // loop through the mysql result set  and convert it to php array

		} 
		print_r($catArray);die;

		$jason_format = json_encode($catArray);
		echo $jason_format;

			#closing the connection
		$query_statement = null;
		$db = null;

	}catch(PDOException $e){
		printf("we had a problem: %s", $e -> getMessage());
	}


?>
