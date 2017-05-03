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