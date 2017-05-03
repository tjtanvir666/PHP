<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<?php 
		

		$name = '';        //getting the inputs
		$gender   = '';
		$password = '';
		$contact ='';
		$address ='';
		

		if (isset($_POST['submit'])){  //if 
			    
             //form validation
			 $ok = true;
			 if (!isset($_POST['name']) || $_POST['name'] === ''){ 
			 	$ok = false;
			 	echo "error 1"; 
			 } else{
			 	$name = $_POST['name']; 
			 }
			  
			  
			  if (!isset($_POST['gender']) || $_POST['gender'] === ''){
			 	$ok = false;
			 	echo "error 3";
			 } else{
			 	$gender = $_POST['gender'];
			 }

			  
			  if (!isset($_POST['password']) || $_POST['password'] === ''){  
			 	$ok = false;
			 	echo "error 6";
			 }  else{
			 	$password= $_POST['password'];
			 }


			 if (!isset($_POST['contact']) || $_POST['contact'] === ''){  
			 	$ok = false;
			 	echo "error 7";
			 }  else{
			 	$contact= $_POST['contact'];
			 }

			 if (!isset($_POST['address']) || $_POST['address'] === ''){  
			 	$ok = false;
			 	echo "error 8";
			 }  else{
			 	$address= $_POST['address'];
			 }

			  

			  //database connection
			 if($ok){
				  $db = mysqli_connect('localhost', 'root', '', 'saif');
				  
                if($db){
                	//query to pass to database
				  $sql = sprintf("INSERT INTO user (name, gender, password, contact, address) VALUES ('%s','%s','%s',
				  	'%s','%s')",
				  	mysqli_real_escape_string($db, $name),
				  	mysqli_real_escape_string($db, $gender),
				  	mysqli_real_escape_string($db, $password),
				  	mysqli_real_escape_string($db, $contact),
				  	mysqli_real_escape_string($db, $address));
				  
				  $success = mysqli_query($db, $sql);
				  if ($success) {echo 'success';}
				  else {echo 'some problem';}
				  
			 }else{echo "no db connect";}	

			 mysqli_close($db);
			 echo '<p><h3>Registration SuccessFul<h3><p>';  
          } 
      
		}
	?>

	<form method="post" action="login.php">
		User Name: <input type="text" name="name" value="<?php 
              echo htmlspecialchars($name);  //pre filling form with php values
		?>"><br>
		
		Gender :    
			   <input type="radio" name="gender" value="f" <?php 
              if ($gender === 'f'){
              	echo 'checked';
              }
		 ?>> female
			   <input type="radio" name="gender" value="m" <?php 
              if ($gender === 'm'){
              	echo 'checked';
              }
		 ?>> male <br>

		Password :<input type="password" name="password" value="<?php 
		      echo htmlentities($password);
		      ?>">
        
        Contact : <input type="number" name="contact" value="<?php 
		      echo htmlentities($contact);
		      ?>">

		Address : <textarea name="address" value="<?php 
              echo "htmlspecialchars($comments)";
		      ?>"></textarea>  


	
		    </select><br>
		   	   
              <input type="submit" name="submit" value="Submit">	  
	</form>
	
</body>
</html>