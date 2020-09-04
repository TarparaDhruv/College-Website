<?php
	
	require_once('connection.php');
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="bootstrap/jquery-1.11.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--Custome JavaScript-->
<script src="script/script.js"></script>
<!--Custome Styleshet-->
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<link href="bootstrap/css/style.css" rel="stylesheet">

</head>

<body>

	<div id="admin_form" ></div>	
    
    <div class="container-fluid">
		<div class="row">
            <div class="col-md-1">
            </div>
            
            <div class="col-md-10" style="background:white;">
          
            <header>
                <?php require_once('header.php'); ?>
            </header>
            
            
            <section>
                <article>
            		<div class="row">	
                    
                    <center><h2>Contact Us</h2></center>
                	
                    <div class="col-md-5 col-md-offset-1" style="padding:15px;">
                    <center>
                    <div id="map"><img src="images/location.PNG" class="img-responsive"></div> <!--loads google map here using script -->			
                    </center>
                    </div>
                    
                    <div class="col-md-5">
                    
                    <p><h3>Dr. S. & S.S. Ghandhy College of Engineering & Technology</h3></p>
                    
                    <p><h4>Address:-</h4></p>
                    Majura Gate, Surat, India. PIN - 395001
                    
                    <p><h4>Contact No:-</h4></p>
                    0261-2655799
                    
                    <p><h4>Fax No:-</h4></p>
                    0261-2656077
                    
                    <p><h4>Email:-</h4></p>
                    <a href="mailto:gecsrt612@gmail.com">gecsrt612@gmail.com</a>
                    
                    </div>
                    
                    </div>
                </article>
            </section>
            
               
              <footer>
                    <?php require_once('footer.php'); ?>
               </footer>
               </div>
               
               <div class="col-md-1">
               </div>
	               
	</div>   	
    </div>
    </div>

</body>
</html>