<?php 

	#open database
	require("../config/connect.php");
	

	 $db = connect();
	 
	 #create a prepared statement for it
	 $query_statement = "SELECT * FROM screenset,screen,panel 
	 	WHERE screenset.ref_id = screen.ref_id AND screen.id = panel.id limit 1;";
  //queery for the database

	
    #printing the result out
	try{ 
		
		#fetching the data
		require("../config/fetch.php");
		$dataArray = fetch($db, $query_statement);

		$size = sizeof($dataArray );

		
		#here will be an array with all the data inside it like the mov stuff
              
              echo $size;
              print_r($dataArray);

		     
              
			#closing the connection
		$query_statement = null;
		$db = null;

	}catch(PDOException $e){
		printf("we had a problem: %s", $e -> getMessage());
	}


	 

?>

<?php 

<?php

$doc = new DomDocument;

// We need to validate our document before refering to the id
$doc->validateOnParse = true;
$doc->Load('book.xml');

echo "The element whose id is 'php-basics' is: " . $doc->getElementById('php-basics')->tagName . "\n";

?>zzzz
?>



<!-- foreach ( $dataArray as $key=>$var ) {
			echo '<div class="card" data-toggle="modal" data-target="#modal'.$key.'">'.
                      '<h2>'. 
                        $var['name'].
                      '</h2>'.
                      '<p>'.
                         $var['ref_id'].
                      '</p>'.
                   '</div>'.
               
        

       
			
             '<div class="modal fade" id="modal'.$key.'" role="dialog">'.
			'<div class="modal-dialog">'.
				'<div class="modal-content">'.
					'<div class="modal-header">'.
						'<button type="button" class="close" data-dismiss="modal">&times;</button>'.
						'<h4 class="modal-title" id="title">'.
							 $var['name'].
						'</h4>'.
					'</div>'.
					'<div class="modal-body">'.
						'<p class="username">'.
						$var['ref_id'].
						'</p>'.
					'</div>'.
					'<div class="modal-footer">'.
						'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'.
					'</div>'.
				'</div>'.
			'</div>'.	
		'</div>';	       
        }
		 -->



<!-- $result = $db -> query($query_statement);
		$wifiArray = array(); //php array declaration

        //echo "this is the database file: <br>"; // this echo needs to be commented out for the json to work
		while($row = $result -> fetch(PDO::FETCH_ASSOC)){
			
			// printf("<br> %s + %s + %s + %s + %s + %s + %s + %s + %s + %s + %s <br>", 
			// 	htmlentities($row['CLOUD']),       htmlentities($row['DEVICEID']),  htmlentities($row['ENTRY']),
			// 	htmlentities($row['EntryOffset']), htmlentities($row['EntryTime']), htmlentities($row['EXIT']), 
			// 	htmlentities($row['ExitOffset']),  htmlentities($row['ExitTime']),  htmlentities($row['ID']), 
			// 	htmlentities($row['MACID']),  htmlentities($row['RSSI']));

			$wifiArray[] = $row; // loop through the mysql result set  and convert it to php array
		}  -->


<!-- 
		$jason_format = json_encode($wifiArray);
		echo $jason_format;
 -->