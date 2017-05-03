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
				<div class="col col-md-5 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-branch">
							<h3 class="mod-title">Branch Registration</h3>
							<div class="mod-content">
								<div>
									<form method="POST">
										<h3 class="text-primary">Branch Information</h3>
										<div class="form-group">
											<label for="name-label">Branch name</label>
											<input id="name-label" list="branch-name" name="branch-name" class="form-control" />
										    <datalist id="branch-name">
										        <option value="Cyberjaya"></option>
										        <option value="Kualalumpur"></option>
										        <option value="Penang"></option> 
										        <option value="Johor"></option> 
										    </datalist>
										</div>
										<div class="form-group">
											<label for="branch-id">Branch ID</label>
											<input name="branch-id" type="text" class="form-control" id="branch-id" placeholder="Branch ID" required>
										</div>
										<!-- <div class="form-group">
											<label for="branch-name">Branch Name</label>
											<input name="branch-name" type="text" class="form-control" id="branch-name" placeholder="Name of Branch" required>
										</div> -->
										<div class="form-group">
											<label for="branch-address">Branch Address</label>
											<input name="branch-address" type="textarea" class="form-control" id="branch-address" placeholder="Adress of the Branch" required>
										</div>
										<div class="form-group">
											<label for="branch-tel">Branch Telephone</label>
											<input name="branch-tel" type="number" class="form-control" id="branch-tel" placeholder="Telephone number of the branch" required>
										</div>
										<button name="submit" type="submit" class="btn btn-success">Create a branch</button>
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

		$brName = '';
		$brId = '';
		$brAdd ='';
		$brTel ='';

		if(isset($_POST['submit'])){
			$ok = true;
			 
			 if (!isset($_POST['branch-name']) || $_POST['branch-name'] === ''){ //form validation
			 	$ok = false;
			 	echo "branch name not written"; 
			 } else{
			 	$brName = $_POST['branch-name']; // prefilling the form
			 }
			 if (!isset($_POST['branch-id']) || $_POST['branch-id'] === ''){ //form validation
			 	$ok = false;
			 	echo "branch Id not written"; 
			 } else{
			 	$brId = $_POST['branch-id']; // prefilling the form
			 }

			 if (!isset($_POST['branch-address']) || $_POST['branch-address'] === ''){ //form validation
			 	$ok = false;
			 	echo "branch address is empty"; 
			 } else{
			 	$brAdd = $_POST['branch-address']; // prefilling the form
			 }

			 if (!isset($_POST['branch-tel']) || $_POST['branch-tel'] === ''){ //form validation
			 	$ok = false;
			 	echo "branch Telephone is empty"; 
			 } else{
			 	$brTel = $_POST['branch-tel']; // prefilling the form
			 }

			 if($ok){
			 	#connecting the databse 
			 	require("config/connect.php");

			 	$con = connect();

			 	if($con){ //check connection
			 		#check if records exists
			 		$stmt = $con->prepare("SELECT b_id from branch where b_id = ?");
			 		$stmt -> execute(array("$brId"));

			 		if($stmt->rowCount() > 0){
			 			printf('<br><h3 class="text-center text-primary">Branch Exists</h3>');
			 		}else{
			 			$stmt = $con->prepare("INSERT INTO branch VALUES (?, ?, ?, ?)");
				    	$stmt->execute(array("$brId", "$brName", "$brAdd", "$brTel"));
				    	printf('<br><h3 class="text-center text-primary">branch added</h3>');
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