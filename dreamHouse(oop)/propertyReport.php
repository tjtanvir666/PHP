<?php 
require_once('helper/session.php');
require_once('helper/database.php');
// $connector=new dbWorker();
?>

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
							    <li><a href="property.php">Property</a></li>
							    <li class="active"><a href="propertyReport.php">Property Report</a></li>
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
				<div class="col-md-12 ">
					<div class="login-form">
						<div class="main-body">
							<h1 class="text-center">Property View</h1>
							<form class="row" method="POST">
								<div class="form-group col-md-2">
									<label for="branch">Brnach ID</label>
									<input  name="branch" type="number" class="form-control" id="branch" placeholder="ID" required>
								</div>
								<div class="form-group col-md-2">
									<label for="rent">Rent</label>
									<input  name="rent" type="number" class="form-control" id="rent" placeholder="Rent" required>
								</div>
								<div class="form-group col-md-2">
									<label for="room">Number of rooms</label>
									<input  name="room-no" type="number" class="form-control" id="room" placeholder="number" required>
								</div>
								<div class="form-group col-md-3">
									<label for="type">Property Type</label>
									<input  name="type" type="text" class="form-control" id="type" placeholder="type" required>
								</div>
								<div id="go">
									<button type="submit" name="go" class="btn btn-success">Go</button> 
								</div>
							</form>
							<?php 
								if(isset($_POST['go'])){  //==VIEWING THE TABLES
									$branch= $_POST['branch'];
									$rent= $_POST['rent'];
									$room_no= $_POST['room-no'];
									$type= $_POST['type'];

									$connector->searchProperty($branch,$rent,$room_no,$type);
								}else{
									$connector->checkProperty();
								}
							?>	
							
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