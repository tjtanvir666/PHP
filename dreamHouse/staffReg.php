<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dream House</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><!--// bootstrap css-->
	<link rel="stylesheet" href="styles/css/style.css"><!--// style.css-->
</head>
<body class="background-secondary ">
	<!-- front-end -->
	<!-- =================== -->
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
				<div class="col col-md-5 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-staff-reg">
							<h3 class="mod-title">Staff  Registration</h3>
							<div class="mod-content">
								<div>
									<h3 class="text-primary">Staff Information</h3>
									<form method="POST">
										<div class="form-group">
											<label for="staff-id">Staff ID</label>
												<input name="staff-id" type="text" class="form-control" id="staff-id" placeholder="Staff ID" required>
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
											<label for="desig-label">Designation</label>
											<input id="desig-label" list="desig-name" name="designation" class="form-control" />
										    <datalist id="desig-name">
										        <option value="Manager"></option>
										        <option value="Supervisor"></option>
										        <option value="Assistant"></option> 
										    </datalist>
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
										<button name="submit" type="submit" class="btn btn-success">Create Staff</button>
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
		$staff_id ='';
		$branch_id ='';
		$name ='';
		$address ='';
		$tel ='';
		$designation='';
		$email ='';

		if(isset($_POST['submit'])){
			$ok = true;
			 //form validation
			if (!isset($_POST['staff-id']) || $_POST['staff-id'] === ''){ //form validation
			 	$ok = false;
			 	echo "Staff ID not written"; 
			 } else{
			 	$staff_id = $_POST['staff-id']; // prefilling the form
			 }
			 if (!isset($_POST['branch-id']) || $_POST['branch-id'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo " Branch Id not chosen"; 
			 } else{
			 	$branch_id = $_POST['branch-id']; // prefilling the form
			 }
			 if (!isset($_POST['name']) || $_POST['name'] === ''){ //owner client choice
			 	$ok = false;
			 	echo " name not written"; 
			 } else{
			 	$name = $_POST['name']; // prefilling the form
			 }
			 if (!isset($_POST['address']) || $_POST['address'] === ''){ //owner client choice
			 	$ok = false;
			 	echo "address empty"; 
			 } else{
			 	$address= $_POST['address']; // prefilling the form
			 }
			 if (!isset($_POST['tel']) || $_POST['tel'] === ''){ //owner client choice
			 	$ok = false;
			 	echo "Tel empty"; 
			 } else{
			 	$tel = $_POST['tel']; // prefilling the form
			 }
			 if (!isset($_POST['designation']) || $_POST['designation'] === ''){ //owner client choice
			 	$ok = false;
			 	echo " designation empty"; 
			 } else{
			 	$designation = $_POST['designation']; // prefilling the form
			 }
			 if (!isset($_POST['email']) || $_POST['email'] === ''){ //owner client choice
			 	$ok = false;
			 	echo " email empty"; 
			 } else{
			 	$email = $_POST['email']; // prefilling the form
			 }

			  

			 if($ok){
			 	#connecting the databse 
			 	require("config/connect.php");

			 	$con = connect();

			 	if($con){

		 			#check if records exists
					$stmt = $con->prepare("SELECT s_id from staff where s_id = ?");
					$stmt -> execute(array("$staff_id"));

					if($stmt->rowCount() > 0){
						printf('<br><h3 class="text-center text-primary">Staff Exists</h3>');
					}else{
						$stmt = $con->prepare("INSERT INTO staff VALUES (?, ?, ?, ?, ?, ?, ?)");
				    	$stmt->execute(array("$staff_id", "$branch_id", "$name", "$address", "$tel", "$designation", "$email"));
				   	    printf('<br><h3 class="text-center text-primary">Staff added</h3>');
					}		
			 	}
			 }

		}//end of isset
	?>

</body>

	<!--all the scripts-->
	<script src="assets/jquery.js"></script><!--// jquery-->
	<script src="assets/bootstrap/js/bootstrap.js"></script><!--// bootstrap js-->
	<script src="js/script.js"></script><!--// script js-->
</html>