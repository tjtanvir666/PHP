
<?php 
	session_start();

	if (isset($_POST['name']) && isset($_POST['password'])){
			$db = mysqli_connect('localhost','root','','saif');
			$sql = sprintf("SELECT * FROM user WHERE name='%s'",
				mysqli_real_escape_string($db, $_POST['name'])
			);
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_assoc($result);  //reading /retriving data from the database using fetch, featch returns an array
			if($row){
			    $hash = $row['password'];
				$isADmin = $row['isAdmin'];
			    if($_POST['password'] === $hash){   //chechking the hash to verify the password
			       echo 'login successful'; //
			       
			       $_SESSION['user'] = $row['name']; //storing info in the session as to who is logged in
                   $_SESSION['isAdmin'] = $isAdmin; 
			    }else{
		            echo 'loging in failed'; //incorrect password the hash did not match
			    }		
			}else{
	            echo 'loging in failed'; //user does not exist 9should not give to much info to the user why failed
			}
	        mysqli_close($db);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	 



	<form method="post" action="">
		User Name: <input type="text" name="name"><br>
		Password:  <input type="password" name="password"><br>
	<input type="submit" name="login">

	</form>

</body>
</html>