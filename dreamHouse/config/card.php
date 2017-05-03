
	<?php
		require("connect.php");


	 $db = connect();
	 
	 #create a prepared statement for it
	 $query_statement = "SELECT * FROM branch,owner,client,staff,property WHERE property.b_id=branch.b_id AND property.o_id=owner.o_id AND property.c_id=client.c_id AND property.s_id=staff.s_id;"; //queery for the database
	 $query_statement2 = "SELECT * FROM branch,owner,staff,property WHERE property.b_id=branch.b_id AND property.o_id=owner.o_id AND property.c_id='No' AND property.s_id=staff.s_id;";

	
    #printing the result out
	 	
	try{ 

		require("fetch.php");

		$rented = fetch($db, $query_statement);
		$notRented = fetch($db, $query_statement2);
		//$noRented = fetch($db, $query_statement);
        #sort the array alphabetically
        sort($rented);
        sort($notRented);
     
        echo '<h3 class="text-primary text-center">Not Rented Property list</h3>';
		foreach ( $notRented as $key=>$var ) {
			echo '<section class="sub-title">'.
							'<div class="prop-card" data-property=\''. json_encode($var).'\'>'.
					            '<div class="card-content" align="center">'.
					                '<h2 class="card-name">'. 
					                        $var['p_name'].
					                '</h2>'.
					                '<span class="card-h4">Owner: '.
					                    $var['o_name'].
					                '</span>'.
					                '<span class="card-h4">Branch: '.
					                    $var['b_name'].
					                '</span>'.
					                '<span class="card-h4">Staff Incharge: '.
					                    $var['s_name'].
					                '</span>'. '<br>'.
					                '<span class="card-h4">Street: '.
					                    $var['street'].
					                '</span>'.
					                '<span class="card-h4">Area: '.
					                    $var['area'].
					                '</span>'.
					                '<span class="card-h4">City: '.
					                    $var['city'].
					                '</span>'. '<br>'.
					                '<span class="card-h4">Room Type: '.
					                    $var['room_type'].
					                '</span>'.
					                '<span class="card-h4">Nuber of Rooms: '.
					                    $var['no_rooms'].
					                '</span>'.
					                '<span class="card-h4">Rent: '.
					                    $var['rent'].
					                '</span>'. '<br>'.
					            '</div>'.    
			                '</div>'.
			     '</section>';                 	 
                   
        }     

        echo '<h3 class="text-primary text-center">Rented Property list</h3>';
		foreach ( $rented as $key=>$var ) {
			echo '<section class="sub-title">'.
							'<div class="prop-card" data-property=\''. json_encode($var).'\'>'.
					            '<div class="card-content" align="center">'.
					                '<h2 class="card-name">'. 
					                        $var['p_name'].
					                '</h2>'.
					                '<span class="card-h4">Owner: '.
					                    $var['o_name'].
					                '</span>'.
					                '<span class="card-h4">Branch: '.
					                    $var['b_name'].
					                '</span>'.
					                '<span class="card-h4">Rented By: '.
					                    $var['c_name'].
					                '</span>'.'<br>'.
					                '<span class="card-h4">Staff Incharge: '.
					                    $var['s_name'].
					                '</span>'. '<br>'.
					                '<span class="card-h4">Street: '.
					                    $var['street'].
					                '</span>'.
					                '<span class="card-h4">Area: '.
					                    $var['area'].
					                '</span>'.
					                '<span class="card-h4">City: '.
					                    $var['city'].
					                '</span>'. '<br>'.
					                '<span class="card-h4">Room Type: '.
					                    $var['room_type'].
					                '</span>'.
					                '<span class="card-h4">Nuber of Rooms: '.
					                    $var['no_rooms'].
					                '</span>'.
					                '<span class="card-h4">Rent: '.
					                    $var['rent'].
					                '</span>'. '<br>'.
					            '</div>'.    
			                '</div>'.
			     '</section>';                     	 	 
                   
        }            
         

              
		#closing the connection
		$query_statement = null;
		$query_statement2 = null;
		$db = null;

	}catch(PDOException $e){
		printf("we had a problem: %s", $e -> getMessage());
	}




	
?>
