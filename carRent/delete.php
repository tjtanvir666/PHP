<?php 
    require 'auth.php';

	if (isset($_GET['id']) && ctype_digit($_GET['id'])){
		$id = $_GET['id'];
		echo 'waaall';
	}else{
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php 
		

		$db = mysqli_connect('localhost', 'root', '', 'saif');
		$sql = "DELETE FROM user WHERE id=$id";
		mysqli_query($db,$sql);
		echo '<p> User deleted </p>';
		mysqli_close($db);
	?>

</body>
</html>