<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Moving walls</title>

    <!-- Bootstrap -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css"> --> <!-- map style sheet -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>



<h1 id="heading"> </h1>



<?php include("../inc/nav.php"); ?>

<div class="panel panel-default mw_panel">
  <div class="panel-body">
  	<div class="mw_content">
	    <div class="container">
        <div class="row">
             <div class="col-sm-12">
                  <div id="board-map" style="height:400px; width:400px"></div>
             </div> <!-- end of map -->
             <div class="col-sm-12">
                  <input type="text" name="" id="keyWord" placeholder="keyword">
                
                  <div id="myCard">
                    <?php 
                      require('../inc/getBillboarddata.php');
                    ?>    
                  </div>  <!-- end of cards -->
                   <div id="not">
                    <h1 id="not-found" ></h1>
                  </div>
             </div>
         </div>
	    	
          <div id="modal-container" class="col-sm-12">
             <div class="modal fade" id="card-modal" role="dialog">
              <div class="modal-dialog">  
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="title"></h4>
                  </div>
                  <div class="modal-body" style="height: 800px; width:800px">
                    <p id="ref-id"></p>
                    <div id="modal-map" class="col-sm-6" style="height:400px; width:400px;"></div>
                    <!-- <div class="col-sm-6" style="display:inline-block;">
                      <img src="https://maps.googleapis.com/maps/api/streetview?size=100x100&location=53.466095,-2.349045
                        &fov=90&heading=235&pitch=10
                        &key=AIzaSyB4itRiOd4RF2TVOaSFVA_X5v6c5QHsPsE">
                    </div> -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>    
            </div>  
          </div>
      
            

       
	    	
	    </div>
  	</div>
  </div>
<?php include("../inc/footer.php"); ?>
</div>
    <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-VjOsKtHjyoCRJkUgZa6meOzgvaPn3hE"> //google map
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/site.js"></script>
  </body>
</html>