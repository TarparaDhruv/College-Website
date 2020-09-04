<?php
	
	require_once('connection.php');
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Course Details</title>

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
        	<article>
				<div class="row">
                	<div class="col-md-offset-2 col-md-8 text-justify">
                    	<div  style="text-align:center;">
							<p><h2> Course Details<h2></p>
                        </div>
                        <p>
                        	<span class="tabspace">Dr.</span> S. & S.S. Ghandhy College Of Engg. & Tech., Surat contain following Diploma Courses. It has maximum of 7 semesters for 10+ Students. <p>The detailed information about the each Diploma Courses are given below:</p>
                        </p>
                        <br>
                        <table class="table table-responsive table-striped text-center">
                     		<thead>
                            	<tr style="font-weight:bold;">
                                	<td>Sr. No.</td>
                                    <td>Department</td>
                                    <td>Program</td>
                                    <td>Year of Starting Course</td>
                                    <td>Course Duration</td>
                                    <td>Seats</td>
                                </tr>
                             </thead>
                             
                             <tbody>
                             	<tr>
                                	<td>1.</td>
                                    <td>Civil Engineering</td>
                                    <td>Regular</td>
                                    <td>1955</td>
                                    <td>6 Semester</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                	<td>2.</td>
                                    <td>Mechanical Engineering</td>
                                    <td>Regular</td>
                                    <td>1958</td>
                                    <td>6 Semester</td>
                                    <td>180</td>
                                </tr>
                                <tr>
                                	<td>3.</td>
                                    <td>Electrical Engineering</td>
                                    <td>Regular</td>
                                    <td>1958</td>
                                    <td>6 Semester</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                	<td>4.</td>
                                    <td>Automobile Engineering</td>
                                    <td>Regular</td>
                                    <td>1958</td>
                                    <td>7 Semester</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                	<td>5.</td>
                                    <td>Matallurgy</td>
                                    <td>Regular</td>
                                    <td>1965</td>
                                    <td>7 Semester</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                	<td>6.</td>
                                    <td>Power Electronics</td>
                                    <td>Regular</td>
                                    <td>1984</td>
                                    <td>6 Semester</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                	<td>7.</td>
                                    <td>Textile Manufacturing</td>
                                    <td>Regular</td>
                                    <td>1969</td>
                                    <td>7 Semester</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                	<td>8.</td>
                                    <td>Textile Processing </td>
                                    <td>Regular</td>
                                    <td>1969</td>
                                    <td>7 Semester</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                	<td>9.</td>
                                    <td>Information technology</td>
                                    <td>Regular</td>
                                    <td>2001</td>
                                    <td>6 Semester</td>
                                    <td>60</td>
                                </tr>
                             </tbody>
                             </table>
                        
                        
                       
                    </div>
                </div>
            </article>
        </section>
    	   

           
           <footer>
           		<?php require_once('footer.php'); ?>
           </footer>
           
           </div>
           </div>
           
           <div class="col-md-1">
           </div>
           
    </div>	
    

</body>
</html>