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
                <div class="text-center" style="padding-bottom:15px;">
                    	<h2>TRAINING AND PLACEMENT OFFICE (TPO)</h2>
                </div>
                <div class="col-md-offset-2 col-md-8 text-justify">
                
                <ul>
                <li>
                	<p>Dr. S. & S. S. Ghandhy College of Engineering & Technology is a Government Polytechnic under Department of Technical Education, Gandhinagar (Government of Gujarat). This Institute is one of the oldest and largest Technical Institution of Gujarat since 1955.
</p>
				</li>
                <li>
                	<p>Institute offering 3-Years/3.5 Years Diploma in Engineering and Technology approved by AICTE - ALL INDIA COUNCIL FOR TECHNICAL EDUCATION through full time programme admitted by centralized admission procedure governed by ACPC, Gujarat and affiliated with GUJARAT TECHNOLOGICAL UNIVERSTIY, Ahmadabad, Gujarat state.</p>
                </li>
                
                <li>
                	<p>Institute provides diploma holders according to needs of industry, business and community to serve the society as per VISION and MISSION.</p>
                </li>
                </ul>
                <br>
                <center><h2>VISION</h2></center>
                <br>
                <ul>
                <li>
                To equip and upgrade our staff as well as students in professional competencies towards technical education including management and pedagogical keeping pace with technological development for the betterment of society at large. 
                </li>
                </ul>
                <br>
                <center><h2>MISION</h2></center>
                <br>
                <ol>
                <li>
                	<p>TO provide a better platforms for the Diploma holders of the institute towards their bright carrier by providing in-time carrier opportunities via ON and OFF campus placement.</p>
                </li>
                <li>
                	<p>To establish and maintain better relations with various organization for the mutual benefits among students and institute and other organizations.</p>
                </li>
                <li>
                	<p>To establish productive collaboration between institute and industries through consultancy, training, faculty exchange and placement services and entrepreneurship culture.</p>
                </li>
                <li>
                	<p>To develop better curriculum and infrastructure by Institute-Industries interactions time to time.</p>
                </li>
                
                <br>
                <center><h2>TRAINING AND PLACEMENT OFFICE TEAM</h2></center>
                <br>
                <table class="table table-responsive table-hover text-center">
                	<tr style="font-weight:bold">
                    	<td>Sr. no.</td>
                        <td>Name</td>
                        <td>Designation	</td>
                        <td>Education Qualification</td>
                        <td>Experience</td>
                        <td>Email ID</td>
                        <td>Contact</td>
                    </tr>
                    <tr>
                    	<td>1.</td>
                        <td>K.K. Patel</td>
                        <td>TPO-1</td>
                        <td>M.E. Civil</td>
                        <td>29 yrs</td>
                        <td>tpossg@gmail.com (for Staff training)</td>
                        <td>9426853412</td>
                    </tr>
                    <tr>
                    	<td>2.</td>
                        <td>V.N Makwana</td>
                        <td>TPO-2</td>
                        <td>M.E. Electrical</td>
                        <td>12 yrs</td>
                        <td>tpossg@gmail.com (for Student Recruitment)</td>
                        <td>9726644008</td>
                    </tr>
                    <tr>
                    	<td>3.</td>
                        <td>D.D. vyas</td>
                        <td>Asst. TPO-2</td>
                        <td>B.E. Textile Processing</td>
                        <td>8 yrs</td>
                        <td>tpossg@gmail.com</td>
                        <td>9879479424</td>
                    </tr>
                    <tr>
                    	<td>4.</td>
                        <td>A.M. Makwana</td>
                        <td>Computer Data Operator-1</td>
                        <td>SSC</td>
                        <td>22 yrs</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                    	<td>5.</td>
                        <td>M.S. Domada</td>
                        <td>Computer Data Operator-2</td>
                        <td>Diploma EC</td>
                        <td>2 yrs</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                    	<td>6.</td>
                        <td>J.D. Patel</td>
                        <td>Peon</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>
                
               		<br>
               		<h3><p>Upcoming Recruiting Companies :-</p></h3>             
			        <br>
                    <table class="table table-responsive table-hover table-striped text-center">
                	 <tr style="font-weight:bold">
                     	<td>Sr. no.</td>
                     	<td>Name of Industries</td>
                        <td>Date of Campus Interviews</td>
                        <td>Eligible Branch</td>
                    </tr>
					
                    <?php
						$place1=mysql_query("select * from clg_placement");
						while($place=mysql_fetch_array($place1))
						{
					?>   
                    <tr>
                    	<td><?php echo $place[0];?></td>
                        <td><?php echo $place[1];?></td>
                        <td class="text-uppercase"><?php echo $place[2];?></td>
                        <td><?php echo $place[3];?></td>
                    </tr>	
                    <?php
						}
					?>      
				</table>
			             
                    <br>
               		<h3><p>Recruited Students List:-</p></h3>             
			        <br>
                    <table class="table table-responsive table-hover table-striped text-center">
                	 <tr style="font-weight:bold">
                     	<td>Sr. no.</td>
                     	<td>Name of Industries</td>
                        <td>Date of Campus Interviews</td>
                        <td>No. of Students Selected</td>
                    </tr>
					
                    <?php
						$place1=mysql_query("select * from clg_recruited");
						while($place=mysql_fetch_array($place1))
						{
					?>   
                    <tr>
                    	<td><?php echo $place[0];?></td>
                        <td><?php echo $place[1];?></td>
                        <td class="text-uppercase"><?php echo $place[2];?></td>
                        <td><?php echo $place[3];?></td>
                    </tr>	
                    <?php
						}
					?>      
				</table>
			                
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