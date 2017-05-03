<?php
require_once('helper/session.php');
// if(isset($_POST['logOut'])){
	$_SESSION['user'] = NULL;
// }
?>

<h1 style="text-align: center; margin-top: 40px">Thanks for using!</h1>
<a style="text-align: center; display: table; margin: auto;" href="index.php">Go back to home</a>