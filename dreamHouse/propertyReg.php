<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dream House</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><!--// bootstrap css-->
	<link rel="stylesheet" href="styles/css/style.css"><!--// style.css-->
</head>
<body class="background-secondary ">
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
				<div class="col col-md-6 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-prop-reg">
							<h3 class="mod-title">Property Registration</h3>
							<div class="mod-content">
								<div>
									<form method="POST">
										<h3 class="text-primary">Property Information</h3>
										<section id="prop-form" class="prop-form">
											<div class="form-group">
												<label for="prop-id">Property ID</label>
													<input name="p-id" type="text" class="form-control" id="prop-id" placeholder="Property ID" required>
											</div>
											<div class="form-group">
												<label for="prop-name">Property Name</label>
												<input name="prop-name" type="text" class="form-control" id="prop-name" placeholder="Property Name" required>
											</div>
											<div class="form-group col-md-6 no-padding-left">
												<label for="street ">Street</label>
												<input name="street" type="text" class="form-control" id="street" placeholder="Street" required>
											</div>
											<div class="form-group col-md-6 no-padding-right">
												<label for="area">Area</label>
												<input name="area" type="text" class="form-control" id="area" placeholder="Area" required>
											</div>
											<div class="form-group col-md-6 no-padding-left">
												<label for="city">City</label>
												<input name="city" type="text" class="form-control" id="city" placeholder="City" required>
											</div>
											<div class="form-group col-md-6 no-padding-right">
												<label for="post-code">Postal Code</label>
												<input name="post-code" type="number" class="form-control" id="post-code" placeholder="Postal Code" required>
											</div>
											<div class="form-group col-md-6 no-padding-left">
												<label for="type">Room type</label>
												<input name="type" type="text" class="form-control" id="type" placeholder="Type" required>
											</div>
											<div class="form-group col-md-6 no-padding-right">
												<label for="numb-rooms">Number of Rooms</label>
												<input name="numb-rooms" type="number" class="form-control" id="numb-rooms" placeholder="Number of rooms" required>
											</div>
											<div class="form-group">
												<label for="rent">Monthly Rent</label>
												<input name="rent" type="number" class="form-control" id="rent" placeholder="Monthly Rent" required>
											</div>
										</section><!--// end prop-form-->
										<section id="branch-form" class="branch-form">
											<h3 class="text-primary">Branch Information</h3>
											<div class="form-group">
												<label for="branch-id">Registered Under Branch</label>
												<input name="branch-id" type="text" class="form-control" id="branch-id" placeholder="Branch ID" required>
											</div>
											<div class="form-group">
												<label for="owner-id">Owner of the Property</label>
												<input name="owner-id" type="text" class="form-control" id="owner-id" placeholder="Owner ID" required>
											</div>
											<div class="form-group">
												<label for="staff-id">Managed BY</label>
												<input name="staff-id" type="text" class="form-control" id="staff-id" placeholder="Staff ID" required>
											</div>
											<div class="form-group">
												<label for="client-id">Rented BY</label>
												<input name="client-id" type="text" class="form-control" id="client-id" placeholder="Client ID">
											</div>
										</section><!--// end branch-form-->
										<button name="submit" type="submit" class="btn btn-success">Register</button>
									</form>
								</div>	
							</div> <!--// end of content-->
						</div>
					</div>
				</div><!--// end column-->                     	
			</div><!--// row-->
		</div><!--// end container-->
	</section><!--// end main-->

	<!-- backend -->
    <!-- ================== -->	
	<?php

		$p_id ='';
		$branch_id ='';
		$owner_id ='';
		$client_id ='';
		$staff_id ='';
		$name ='';
		$street ='';
		$area ='';
		$city='';
		$post_code ='';
		$room_type ='';
		$no_room ='';
		$rent ='';
		$status='';

		if(isset($_POST['submit'])){
			$ok = true;
			 //form validation
			if (!isset($_POST['p-id']) || $_POST['p-id'] === ''){ //form validation
			 	$ok = false;
			 	echo "Peoperty ID not written"; 
			 } else{
			 	$p_id = $_POST['p-id']; // prefilling the form
			 }
			 if (!isset($_POST['branch-id']) || $_POST['branch-id'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo " Branch Id not chosen"; 
			 } else{
			 	$branch_id = $_POST['branch-id']; // prefilling the form
			 }
			 if (!isset($_POST['owner-id']) || $_POST['owner-id'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo " Owner Id not chosen"; 
			 } else{
			 	$owner_id = $_POST['owner-id']; // prefilling the form
			 }
			 if (!isset($_POST['client-id']) || $_POST['client-id'] === ''){ //branch employeed to
			 	// $ok = false;
			 	echo "Client Id not chosen"; 
			 } else{
			 	$client_id = $_POST['client-id']; // prefilling the form
			 }
			 if (!isset($_POST['staff-id']) || $_POST['staff-id'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Staff  Id not chosen"; 
			 } else{
			 	$staff_id = $_POST['staff-id']; // prefilling the form
			 }
			 if (!isset($_POST['prop-name']) || $_POST['prop-name'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Name not chosen"; 
			 } else{
			 	$name = $_POST['prop-name']; // prefilling the form
			 }
			 if (!isset($_POST['street']) || $_POST['street'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo " Street Id not chosen"; 
			 } else{
			 	$street = $_POST['street']; // prefilling the form
			 }
			 if (!isset($_POST['area']) || $_POST['area'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Area  Id not chosen"; 
			 } else{
			 	$area = $_POST['area']; // prefilling the form
			 }
			 if (!isset($_POST['city']) || $_POST['city'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "City  not chosen"; 
			 } else{
			 	$city = $_POST['city']; // prefilling the form
			 }
			 if (!isset($_POST['post-code']) || $_POST['post-code'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Post Code not chosen"; 
			 } else{
			 	$post_code = $_POST['post-code']; // prefilling the form
			 }
			 if (!isset($_POST['type']) || $_POST['type'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Room Type  Id not chosen"; 
			 } else{
			 	$room_type = $_POST['type']; // prefilling the form
			 }
			 if (!isset($_POST['numb-rooms']) || $_POST['numb-rooms'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Number of rooms  not chosen"; 
			 } else{
			 	$no_room = $_POST['numb-rooms']; // prefilling the form
			 }
			 if (!isset($_POST['rent']) || $_POST['rent'] === ''){ //branch employeed to
			 	$ok = false;
			 	echo "Rent not chosen"; 
			 } else{
			 	$rent = $_POST['rent']; // prefilling the form
			 }
			 // if (!isset($_POST['']) || $_POST[''] === ''){ //branch employeed to
			 // 	$ok = false;
			 // 	echo "  Id not chosen"; 
			 // } else{
			 // 	$ = $_POST['']; // prefilling the form
			 // }
			 
			 
			 

			 if($ok){
			 	#connecting the databse 
			 	require("config/connect.php");

			 	$con = connect();

			 	if($con){
			 		if($client_id === '' ){
			 			$status = 'Not Rented';
			 			$client_id = 'NO';

			 			#check if records exists
						$stmt = $con->prepare("SELECT p_id from property where p_id = ?");
						$stmt -> execute(array("$p_id"));

						if($stmt->rowCount() > 0){
							printf('<br><h3 class="text-center text-primary">Property Exists</h3>');
						}else{
				 			$stmt = $con->prepare("INSERT INTO property VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
					    	$stmt->execute(array("$p_id", "$branch_id", "$owner_id", "$client_id", "$staff_id", "$name", "$street", "$area", "$city", "$post_code", "$room_type", "$no_room", "$rent", "$status"));
					   	    printf('<br><h3 class="text-center text-primary">Property added</h3>');
						}

			 		}else if(!empty($client_id)){
			 			$status = 'Rented';

			 			#check if records exists
						$stmt = $con->prepare("SELECT p_id from property where p_id = ?");
						$stmt -> execute(array("$p_id"));

						if($stmt->rowCount() > 0){
							printf('<br><h3 class="text-center text-primary">Property Exists</h3>');
						}

			 			$stmt = $con->prepare("INSERT INTO property VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				    	$stmt->execute(array("$p_id", "$branch_id", "$owner_id", "$client_id", "$staff_id", "$name", "$street", "$area", "$city", "$post_code", "$room_type", "$no_room", "$rent", "$status"));
				   	    printf('<br><h3 class="text-center text-primary">Property added</h3>');
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