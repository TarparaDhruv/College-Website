<?php
	
	require_once('connection.php');
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dr. S. & S. S. Ghandhy College of Engineering & Technology</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="bootstrap/jquery-1.11.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--Custome JavaScript-->
<script src="script/script.js"></script>
<!--Custome Styleshet-->
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
                <article class="row">
                <div class="text-center" style=" font-size:32px; padding-bottom:2%;">
                    	Infrastructure
                    </div>
                    <div class="col-md-offset-2 col-md-8 text-center">
                    	<img src="images/infras.png" class="img-responsive" style="padding-bottom:2%; ">
                     	<div class="text-justify" style="margin-bottom:3%;">
                        <p><b>LOCATION</b></p><br> 	 
This institute is situated at the center of Surat city on ring road, Majura gate about 4 Km from railway station and bus station.<br><br>
<p><b>LAND</b></p>
The total land area of the institute is 14.97 Hectors of which the scattered area is between the building and the surrounding is about 25%. The area of playground is about 2.3 Hectors. Rest is acquired by various buildings, hostels, departments etc; of the institute.
                    </div>
                    <center>
                    <table class="table table-hover table-responsive table-striped">
                    	<thead>
                        	<th>Sr No.</th>
                            <th>Building</th>
                            <th>Area m<sup>2</sup></th>
                        </thead>
                        <tr>
                        	<td>1</td>
                            <td>Main Building</td>
                            <td>12477</td>
                        </tr>
                        <tr>
                        	<td>2</td>
                            <td>Workshop</td>
                            <td>900</td>
                        </tr>
                        <tr>
                        	<td>3</td>
                            <td>Library & L.R.U.C</td>
                            <td>800</td>
                        </tr>
                        <tr>
                        	<td>4</td>
                            <td>Canteen, Bank, Post-Office, Dipensary</td>
                            <td>1920</td>
                        </tr>
                        <tr>
                        	<td>5</td>
                            <td>Hostel & Staff quarters</td>
                            <td>13200</td>
                        </tr>
                        <tr>
                        	<td>6</td>
                            <td>Water Tank, compound wall & other amenities </td>
                            <td>-</td>
                        </tr>
                        <tr>
                        	<td>7</td>
                            <td>Internal Ward & land Scrapping, play ground</td>
                            <td>-</td>
                        </tr>
                    </table>
                    
        			</center> 
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