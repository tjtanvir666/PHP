<?php 

	#open database
	require("../config/connect.php");
	

	 $db = connect();
	 
	 #create a prepared statement for it
	 $query_statement = "SELECT * FROM screenset,screen,panel 
	 	WHERE screenset.ref_id = screen.ref_id AND screen.id = panel.id;"; //queery for the database

	
    #printing the result out
	 	
	try{ 
		

		#fetching the data
		require("../config/fetch.php");
		$dataArray = fetch($db, $query_statement);

        #sort the array alphabetically
        sort($dataArray);
     


		foreach ( $dataArray as $key=>$var ) {
			echo '<div class="card" data-board=\''. json_encode($var).'\'>'.
                      '<h2 class="card-name">'. 
                        $var['name'].
                      '</h2>'.
                      '<p>'.
                         $var['ref_id'].
                      '</p>'.
                   '</div>';	 
                   
        }            
         

              
			#closing the connection
		$query_statement = null;
		$db = null;

	}catch(PDOException $e){
		printf("we had a problem: %s", $e -> getMessage());
	}


	 

?>



