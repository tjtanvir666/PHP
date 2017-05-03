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
				<div class="col col-md-5 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-staff-reg">
							<h3 class="mod-title">Staff  Registration</h3>
							<div class="mod-content">
								<div>
									<form>
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name" required>
										</div>
										<div class="form-group">
											<label for="address">Address</label>
											<input type="textarea" class="form-control" id="address" placeholder="Address" required>
										</div>
										<div class="form-group">
											<label for="tel">Telephone</label>
											<input type="number" class="form-control" id="tel" placeholder="Telephone" required>
										</div>
										<div class="form-group">
											<label for="designation"> Designation </label>
											<input type="text" class="form-control" id="designation" placeholder="Designation" required>
										</div>
										<div class="form-group">
											<label for="branch">Which Branch </label>
											<input type="text" class="form-control" id="branch" placeholder="Branch Name" required>
										</div>
										<div class="form-group">
											<label for="email">Email address</label>
											<input type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" placeholder="Password" required>
										</div>
										<button type="submit" class="btn btn-success">Create Staff</button>
									</form>
								</div>
							</div><!--// end of content-->
						</div><!--// end module-1-->
					</div>
				</div><!--// end column-->
			</div><!--// row-->
		</div><!--// end container-->
	</section><!--// end main-->

</body>

	<!--all the scripts-->
	<script src="assets/jquery.js"></script><!--// jquery-->
	<script src="assets/bootstrap/js/bootstrap.js"></script><!--// bootstrap js-->
	<script src="js/script.js"></script><!--// script js-->
</html>