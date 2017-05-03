<?php 
   session_start();

   if(!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']){ //!isset admin is if the variable does not exist and the second one is bit field to check
     header('location: login.php');
   }  //jsut checking if the user is admin to give privilages, this auth file will be on all the pages that the admin can access
?>