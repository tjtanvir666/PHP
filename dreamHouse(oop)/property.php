
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"><!--// bootstrap css-->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!--// custom css-->
	<title>Dream Home</title>
</head>
<body class="back">
	<section>
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
					<div class="navigation">
						<nav class="navbar navbar-inverse col-md-12 navbar-fixed-top">
					    	<div class="navbar-brand navbar-headers">
					      		<a href="#">Dream Home</a>
					    	</div>
					    	<ul class="nav navbar-nav pull-right">
							    <li><a href="index.php">Home</a></li>
							    <li><a href="reg.php">SignUp</a></li>
							    <li class="active"><a href="property.php">Property</a></li>
							    <li><a href="propertyReport.php">Property Report</a></li>
					    	</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="login-form">
						<div class="main-body">
							<h1 class="text-center">Property Entry</h1>
							<div>
								<form method="POST" action="helper/propertyhelper.php">
									<div class="form-group">
										<label for="name">Property Name</label>
										<input  name="name" type="text" class="form-control" id="name" placeholder="Name of Your Property" required>
									</div>
									<div class="form-group">
										<label for="adress">Property Address</label>
										<input  name="address" type="text" class="form-control" id="address" placeholder="Address" required>
									</div>
									<div class="form-group">
										<label for="type">Property Type</label>
										<input  name="type" type="text" class="form-control" id="type" placeholder="Property Type" required>
									</div>
									<div class="form-group">
										<label for="room-no">Number of Rooms</label>
										<input  name="room-no" type="number" class="form-control" id="room-no" placeholder="Number of Rooms" required>
									</div>
									<div class="form-group">
										<label for="rent">Rent</label>
										<input  name="rent" type="number" class="form-control" id="rent" placeholder="Rent" required>
									</div>
									<div class="form-group">
										<label for="stuff">Managed By</label>
										<input  name="staff" type="number" class="form-control" id="stuff" placeholder="Staff ID" required>
									</div>
									<div class="form-group">
										<label for="owner">Owner</label>
										<input  name="owner" type="number" class="form-control" id="owner" placeholder="Owner ID" required>
									</div>
									<div class="form-group">
										<label for="branch">Branch ID</label>
										<input  name="branch" type="number" class="form-control" id="branch" placeholder="Branch ID" required>
									</div>
									<div class="form-group">
										<label for="client">Client ID</label>
										<input  name="client" type="number" class="form-control" id="client" placeholder="Client ID" required>
									</div>
									<button name="submit" type="submit" class="btn btn-success">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<script type="text/javascript" src="bootsratp/jquery.js"></script><!--// jquery-->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script><!--// bootstrap js-->
</body>
</html>