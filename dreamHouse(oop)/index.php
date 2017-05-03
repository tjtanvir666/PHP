
<?php 
require_once('/helper/session.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"><!--// bootstrap css-->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!--// custom css-->
	<title>Dream home</title>
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
							    <?php if($_SESSION['user']!=NULL):?>
								    <li><a href="reg.php">SignUp</a></li>
								    <li><a href="property.php">Property</a></li>
								    <li><a href="propertyReport.php">Property Report</a></li>
								<?php endif;?>
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
							<?php if($_SESSION['user']==NULL):?>
							<h1 class="text-center">Log In</h1>
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
								<?php else:?>
									<h1 class="text-primary text-center">
										Welcome to Dream Home
									</h1>
									<form method="POST" action="logout.php">
										<button name="logout" type="submit" class="btn btn-success" 
										>Logout</button>
									</form>
								
								<!-- <?php echo $_SESSION['user'];?> -->
								<?php endif;?>
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