
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<h3>Admin Privilages</h3>

	
	<ul>
		 <?php 
           
            require 'auth.php'; 

           $db = mysqli_connect('localhost', 'root', '', 'saif');
           $sql = 'SELECT * FROM USER';
           $result = mysqli_query($db, $sql);

           foreach($result as $row){
           	printf('User Name: %s (%s)
           		<a href="delete.php?id=%s">delete</a></li>',  //sending the id from this page to the updatingdata page
           		htmlspecialchars($row['name']),
           		htmlspecialchars($row['gender']),       
           		htmlspecialchars($row['id']));
           }
           mysqli_close($db);
		 ?>
		

	</ul>

</body>
</html>