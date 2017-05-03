<?PHP
require_once('session.php');
require_once('database.php');




$name= $_POST['name'];
$address= $_POST['address'];
$type= $_POST['type'];
$roomNo= $_POST['room-no'];
$rent= $_POST['rent'];
$staff= $_POST['staff'];
$owner= $_POST['owner'];
$branch= $_POST['branch'];
$client= $_POST['client'];


$connector -> insertProp( $name,$address,$type,$roomNo,$rent,$staff,$owner,$branch,$client);
header("Location: ../index.php");
?>