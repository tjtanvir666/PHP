<?php 
require_once('database.php');
session_start();
if(!isset($_SESSION['user']) ){
	$_SESSION['user']=NULL; //==we will always have to initialize the session
}

$connector = new dbWorker;
$connector -> setConnection('localhost', 'root', '', 'dreamhome');
//$connector -> checkUser('user','abdulla@ymail.com', '123'); //checking user table

$pass ="";
$email="";
$table="user";
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$connector -> checkUser($table, $email, $pass);
}
