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
						<div class="mod mod-navbar">
		<!-- <h3 class="mod-title">Hello this is title</h3> -->
		<div class="mod-content">
			<nav class="navbar no-margin">
		    	<div class="navbar-brand navbar-header no-padding-left">
		      		<a href="#">Dream House</a>
		    	</div>
		    	<ul class="nav navbar-nav pull-right">
				    <!-- <li class="active"><a href="index.php">Home</a></li> -->
				    <!-- <li><a href="registration.php">Register</a></li>
				    <li><a href="branch.php">Branch Reg</a></li>
				    <li><a href="propertyReg.php">Register your property</a></li>
				    <li><a href="staffReg.php">Staff Reg</a></li> -->
				    <li><a href="list2.php">Property List</a></li>
				     <!-- <li><a href="update.php">Update</a></li> -->
		    	</ul>
			</nav>
		</div>
	</div><!--// end module nav bar-->
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
						<div class="mod mod-login">
							<h3 class="mod-title">Log In</h3>
							<div class="mod-content"
								<div>
									<form method="POST">
										<div class="form-group">
											<label for="email">Email address</label>
											<input  name="email" type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
										</div>
										<button name="submit" type="submit" class="btn btn-success">Log In</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div><!--// end column-->
			</div><!--// row-->
		</div><!--// end container-->
	</section><!--// end main-->
	

	<?php
		
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$pass  =  $_POST['password'];
			if($email=== "admin@ymail.com" && $pass==="admin"){
				header("Location: registration.php");
			}else{
				echo '<h2 class="text-danger text-center">Wrong Email or Password</h2>';
			}
		}

	?>
</body>



	<!--all the scripts-->
	<script src="assets/jquery.js"></script><!--// jquery-->
	<script src="assets/bootstrap/js/bootstrap.js"></script><!--// bootstrap js-->
	<script src="js/script.js"></script><!--// script js-->
</html>