<?php
	
	require_once('connection.php');
	
	$id=$_REQUEST['departmentid'];
	
	$display1=mysql_query("select * from clg_department where branch_code='$id'");	
	$display=mysql_fetch_array($display1);	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Department Details</title>

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
                <article class="text-md">
                	<div class="text-lg text-center text-capitalize">
                    	<?php echo $display[2]; ?>
                    </div>	
                    <div class="row">
                    	<div class="col-md-10 col-md-offset-1 text-justify">
                        <?php
							echo "<br><p style='text-indent:25px;'>".$display[3]."</p>";  
							echo "<br><p style='text-indent:25px;'>".$display[4]."</p>";  
							echo "<br><p style='text-indent:25px;'>".$display[5]."</p>";  
						?>
                        </div>

                    </div>
                    <div class="row">
                    	<div class="col-md-10 col-md-offset-1 text-justify">
                        </div>
                    </div>

				<div class="row">

                <center><h2 class="text-capitalize">Staff Detail Of <?php echo $display[2];?></h2></center>

                <div class="col-md-offset-2 col-md-8">
                	<div class="row text-capitalize">
				<?php
					
					$fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='HOD'");
					while($fetchdata=mysql_fetch_array($fetchdata1))
					{
				?>               			
                        <div class="col-md-6 " style="padding:5px;">
							<div style="border:1px solid black;padding:5px;">
                            <table>
                            	<tr>
                                	<td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                	<td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                	<td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                	<td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
												?>
												</td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
					}
					 ?>
                     
                <?php
					
					$fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='In Charge HOD'");
					while($fetchdata=mysql_fetch_array($fetchdata1))
					{
				?>               			
                        <div class="col-md-6" style="padding:5px;">
							<div style="border:1px solid black;padding:5px;">
                            <table>
                            	<tr>
                                	<td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                	<td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                	<td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                	<td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
												?>
												</td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
					}
					 ?>
                     
                <?php
					
					$fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Lecturer'");
					while($fetchdata=mysql_fetch_array($fetchdata1))
					{
				?>               			
                        <div class="col-md-6" style="padding:5px;">
							<div style="border:1px solid black;padding:5px;">
                            <table>
                            	<tr>
                                	<td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                	<td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                	<td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                	<td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
												?>
												</td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
					}
					 ?>
                     
                <?php
					
					$fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Lab Assistant'");
					while($fetchdata=mysql_fetch_array($fetchdata1))
					{
				?>               			
                        <div class="col-md-6" style="padding:5px;">
							<div style="border:1px solid black;padding:5px;">
                            <table>
                            	<tr>
                                	<td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                	<td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                	<td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                	<td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
												?>
												</td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
					}
					 ?>
                     
                <?php
					
					$fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Head Clerk' ");
					while($fetchdata=mysql_fetch_array($fetchdata1))
					{
				?>                			
                        <div class="col-md-6" style="padding:5px;">
							<div style="border:1px solid black;padding:5px;">
                            <table>
                            	<tr>
                                	<td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                	<td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                	<td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                	<td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
												?>
												</td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
					}
					 ?>             
                
                     <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Sr. Clerk' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>             
               

                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Jr. Clerk' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>             
               

	             <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Accountant' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
				<?php
                    }
                     ?>  


				<?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Store Keeper' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>
                     
                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Computer Operator' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>       

                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Instructor' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>       

                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Fitter' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>       

				<?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Turner' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>       


                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Librarian' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>             
                          
                <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Hamaal' ");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>             
               


                 <?php
                    
                    $fetchdata1=mysql_query("select * from clg_faculty where branch_code='$id' && post='Peon'");
                    while($fetchdata=mysql_fetch_array($fetchdata1))
                    {
                ?>                          
                        <div class="col-md-6" style="padding:5px;">
                            <div style="border:1px solid black;padding:5px;">
                            <table>
                                <tr>
                                    <td rowspan="5" style="vertical-align:middle"><img src="profile_img/<?php echo $fetchdata[11];?>" alt="<?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?>" style="height:150px;" class="img-responsive"></td>
                                    <td>NAME : <?php echo $fetchdata[10]." ".$fetchdata[1]." ".$fetchdata[3];;?></td>
                                </tr>
                                <tr>
                                    <td>DESIGNATION : <?php echo $fetchdata[6];?></td>
                                </tr>
                                <tr>
                                    <td>QUALIFICATION : <?php echo $fetchdata[7];?></td>
                                </tr>
                                <tr>
                                    <td>EXPERIENCE : <?php $date1=mysql_query("select DATEDIFF((select CURDATE()),'$fetchdata[13]')");
                                                $date=mysql_fetch_array($date1);
                                                echo round($date[0]/365,1)." Years";
                                                ?>
                                                </td>
                                </tr>
                               
                                
                            </table>
                            </div>
                        </div>     
                <?php
                    }
                     ?>           
                    </div>
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