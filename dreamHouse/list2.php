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
						<nav class="navbar no-margin">
		    	<div class="navbar-brand navbar-header no-padding-left">
		      		<a href="#">Dream House</a>
		    	</div>
		    	<ul class="nav navbar-nav pull-right">
				    <li class="active"><a href="index.php">Home</a></li>
				    <!-- <li><a href="registration.php">Register</a></li>
				    <li><a href="branch.php">Branch Reg</a></li>
				    <li><a href="propertyReg.php">Register your property</a></li>
				    <li><a href="staffReg.php">Staff Reg</a></li> -->
				    <!-- <li><a href="list2.php">Property List</a></li> -->
				     <!-- <li><a href="update.php">Update</a></li> -->
		    	</ul>
			</nav>
					</div><!--// end position top 1-->
				</div> <!--// end of column-->
			</div>
		</div>
	</section><!--// end top-->
	<section id="main" class="main">
		<div class="container">
			<div class="row">
				<div class="col col-md-8 no-float">
					<div id="main-1" class="mod-position main-1">
						<div class="mod mod-prop-list">
							<h2 class="mod-title text-center">Property List</h2>
							<div class="mod-content">
								<div>
									
										<?php require("config/card.php"); ?>
									
								</div>
							</div>
						</div>
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