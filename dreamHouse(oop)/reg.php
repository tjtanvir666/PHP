
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
							    <li class="active"><a href="reg.php">SignUp</a></li>
							    <li><a href="property.php">Property</a></li>
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
							<h1 class="text-center">Sign Up</h1>
							<div>
								<form method="POST" action="helper/regHelper.php">
									<div class="form-group">
											<label for="credential">User Type</label>
											<input id="credential" list="credential-list" name="credential" class="form-control" placeholder="Owner or Client" />
										    <datalist id="credential-list">
										        <option value="1">Owner</option>
										        <option value="2">Client</option>
										        <option value="3">Admin</option>
										        <option value="4">Manager</option>
										        <option value="5">Supervisor</option>
										        <option value="6">Assistant</option>
										    </datalist>
										</div>
									<div class="form-group">
										<label for="name">Name</label>
										<input  name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
									</div>
									<div class="form-group">
										<label for="username">Username</label>
										<input  name="username" type="text" class="form-control" id="username" placeholder="User Name" required>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input  name="email" type="email" class="form-control" id="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
									</div>
									<div class="form-group">
										<label for="branch">Branch ID</label>
										<input name="branch" type="number" class="form-control" id="branch" placeholder="Branch" required>
									</div>
									<button name="register" type="submit" class="btn btn-success">Sign Up</button>
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