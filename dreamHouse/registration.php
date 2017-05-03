<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dream House</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><!--// bootstrap css-->
	<link rel="stylesheet" href="styles/css/style.css"><!--// style.css-->
</head>
<body class="background-secondary ">

	


     <!-- frontend -->
     <!-- ================== -->
	<section id="top" class="top background-primary">
		<div class="container">
			<div class="row">
				<div class="col col-md-12">
					<div id="top-1" class="mod-position top-1">
						<?php require 'comons/navbar.php'?><!--// navbar-->
					</div><!--// end position top 1-->
				</div> <!--// end of column-->
			</div>
		</div>
	</section><!--// end top-->
	<section id="main" class="main">
		<div class="container">
			<div class="row">
				<div class="col col-md-4 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-update-property">
							<h3 class="mod-title">Owner/Client Registration</h3>
							<div class="mod-content">
								<div>
									<form method="POST">
										<div class="form-group">
											<input class="radio-inline" id="choice-1" type="radio" name="radio" value="owner" checked required><label class="radio-btn" for="choice-1">Owner</label>
											<input class="radio-inline" id="choice-2" type="radio" name="radio" value="client" required><label class="radio-btn" for="choice-2">Client</label>
										</div>
										<div class="form-group">
											<label for="owner-client-Id">ID for Owner or Client</label>
												<input name="o-c-id" type="text" class="form-control" id="owner-client-Id" placeholder="Owner/Client ID" required>
										</div>
										<div class="form-group">
											<label for="name">Name</label>
											<input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
										</div>
										<div class="form-group">
											<label for="address">Address</label>
											<input name="address" type="textarea" class="form-control" id="address" placeholder="Address" required>
										</div>
										<div class="form-group">
											<label for="tel">Telephone</label>
											<input name="tel" type="number" class="form-control" id="tel" placeholder="Telephone" required>
										</div>
										<div class="form-group">
											<label for="branch-id">Branch ID</label>
											<input name="branch-id" type="text" class="form-control" id="branch-id" placeholder="Branch ID" required>
										</div>
										<div class="form-group">
											<label for="email">Email address</label>
											<input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
										<!-- <div class="form-group">
											<label for="password">Password</label>
											<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
										</div> -->
										<button name="submit" type="submit" class="btn btn-success">Create an account</button>
									</form>
								</div>
							</div><!--// end of content-->
						</div><!--// end module-1-->
					</div>
				</div><!--// end column-->
			</div><!--// row-->
		</div><!--// end container-->
	</section><!--// end main-->


	<!-- backend -->
    <!-- ================== -->	
	<?php

		$radio = '';
		$_id   ='';
		$branch_id ='';
		$name ='';
		$address ='';
		$tel ='';
		$email ='';

		if(isset($_POST['submit'])){
			$ok = true;
			 //form validation
			 if (!isset($_POST['radio']) || $_POST['radio'] === ''){ //owner client choice
			 	$ok = false;
			 	echo "Owner or Client not chosen"; 
			 } else{
			 	$radio = $_POST['radio']; // prefilling the form
			 }
			 if (!isset($_POST['o-c-id']) || $_POST['o-c-id'] === ''){ //form validation
			 	$ok = false;
			 	echo "not written"; 
			 } else{
			 	$_id = $_POST['o-c-id']; // prefilling the form
			 }
			  if (!isset($_POST['name']) || $_POST['name'] === ''){ //name of owner client
			 	$ok = false;
			 	echo " name not written"; 
			 } else{
			 	$name = $_POST['name']; // prefilling the form
			 }
			  if (!isset($_POST['address']) || $_POST['address'] === ''){ //address
			 	$ok = false;
			 	echo " address not written"; 
			 } else{
			 	$address = $_POST['address']; // prefilling the form
			 }
			 if (!isset($_POST['tel']) || $_POST['tel'] === ''){ //tellephone
			 	$ok = false;
			 	echo " Telephone not written"; 
			 } else{
			 	$tel = $_POST['tel']; // prefilling the form
			 }
			 if (!isset($_POST['branch-id']) || $_POST['branch-id'] === ''){ //branch they registering to
			 	$ok = false;
			 	echo " Branch ID not written"; 
			 } else{
			 	$branch_id = $_POST['branch-id']; // prefilling the form
			 }
			 if (!isset($_POST['email']) || $_POST['email'] === ''){ //email
			 	$ok = false;
			 	echo " Email not written"; 
			 } else{
			 	$email = $_POST['email']; // prefilling the form
			 }

			 if($ok){
			 	#connecting the databse 
			 	require("config/connect.php");

			 	$con = connect();

			 	if($con){
			 		if($radio === 'owner'){

			 			#check if records exists
				 		$stmt = $con->prepare("SELECT o_id from owner where o_id = ?");
				 		$stmt -> execute(array("$_id"));

				 		if($stmt->rowCount() > 0){
				 			printf('<br><h3 class="text-center text-primary">Owner Exists</h3>');
			 			}else{
			 				$stmt = $con->prepare("INSERT INTO owner VALUES (?, ?, ?, ?, ?, ?)");
					    	$stmt->execute(array("$_id","$branch_id", "$name", "$address", "$tel", "$email"));
					   	    printf('<br><h3 class="text-center text-primary">Owner added</h3>');
			 			}
	
			 		}else if($radio === 'client'){
			 			#check if records exists
				 		$stmt = $con->prepare("SELECT c_id from client where c_id = ?");
				 		$stmt -> execute(array("$_id"));

				 		if($stmt->rowCount() > 0){
				 			printf('<br><h3 class="text-center text-primary">Client Exists</h3>');
			 			}else{
			 				$stmt = $con->prepare("INSERT INTO client VALUES (?, ?, ?, ?, ?, ?)");
					    	$stmt->execute(array("$_id","$branch_id", "$name", "$address", "$tel", "$email"));
					   	    printf('<br><h3 class="text-center text-primary">Client added</h3>');
				 		}
			 		}
			 	} //end of con
			 } //end of OK

		}//end of isset
	?>

</body>

	<!--all the scripts-->
	<script src="assets/jquery.js"></script><!--// jquery-->
	<script src="assets/bootstrap/js/bootstrap.js"></script><!--// bootstrap js-->
	<script src="js/script.js"></script><!--// script js-->
</html>