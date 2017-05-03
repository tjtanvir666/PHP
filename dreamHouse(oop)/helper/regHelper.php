<?PHP
require_once('session.php');
require_once('database.php');



$user_type = $_POST['credential'];
$name= $_POST['name'];
$username= $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password'];
$branch_id= $_POST['branch'];


$connector -> insertReg($user_type, $name, $username, $email, $pass, $branch_id);
header("Location: ../index.php");
?>