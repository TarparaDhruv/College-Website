
<?php
	
	require_once('connection.php');
            if(!isset($_SESSION['user']))
        header('location:index.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Faculty</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="bootstrap/jquery-1.11.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--Custome JavaScript-->
<script src="script/script.js" type="text/javascript"></script>
<!--Custome Styleshet-->
<link href="bootstrap/css/style.css" rel="stylesheet">
<script>
	ensure();
</script>
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
       					<div class="col-md-2 col-sm-2 admin_sidemenu">
                        	<?php
								require_once('adminsidemenu.php');
							?>
                        </div>
                
                	<div class="col-md-10 col-sm-10" >
                    	<div class="row">
 						<div id="show" class="col-md-12 col-sm-12">
                        	
                           <div class="row">
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "2";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i>
                                    	<?php
											$auto=mysql_query("select count(id) from clg_faculty where branch_code=2");
											$auto1=mysql_fetch_array($auto);
											if($auto1[0]==0)
												echo "0";
											else
												echo $auto1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p>AUTOMOBILE</p>
                            </div>	
                            </a>
                         </div>
                         
							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "6";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                		<i>
										<?php
											$civil=mysql_query("select count(id) from clg_faculty where branch_code=6");
											$civil1=mysql_fetch_array($civil);
											if($civil1[0]==0)
												echo "0";
											else
												echo $civil1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>CIVIL</p>
                            </div>	
                            </a>
                         </div>
                        
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "9";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
									<i>
										<?php
											$electrical=mysql_query("select count(id) from clg_faculty where branch_code=9");
											$electrical1=mysql_fetch_array($electrical);
											if($electrical1[0]==0)
												echo "0";
											else
												echo $electrical1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>ELECTRICAL</p>
                            </div>	
                            </a>
                         </div>                         
                       </div>
                       
                        	<div class="row">
  							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "16";?>"  style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i>
										<?php
											$it=mysql_query("select count(id) from clg_faculty where branch_code=16");
											$it1=mysql_fetch_array($it);
											if($it1[0]==0)
												echo "0";
											else
												echo $it1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>IT</p>
                            </div>	
                            </a>
                         </div>
                         
							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "19";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i>
										<?php
											$mechanical=mysql_query("select count(id) from clg_faculty where branch_code=19");
											$mechanical1=mysql_fetch_array($mechanical);
											if($mechanical1[0]==0)
												echo "0";
											else
												echo $mechanical1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p> MECHANICAL</p>
                            </div>	
                            </a>
                         </div>
                        
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "21";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
									<i>
										<?php
											$meta=mysql_query("select count(id) from clg_faculty where branch_code=21");
											$meta1=mysql_fetch_array($meta);
											if($meta1[0]==0)
												echo "0";
											else
												echo $meta1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>METALLURGY</p>
                            </div>	
                            </a>
                         </div> 
             </div>
 
                         
         	<div class="row">
  							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "24";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i>
										<?php
											$pe=mysql_query("select count(id) from clg_faculty where branch_code=24");
											$pe1=mysql_fetch_array($pe);
											if($pe1[0]==0)
												echo "0";
											else
												echo $pe1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>POWER ELECTRONICS</p>
                            </div>	
                            </a>
                         </div>
                         
							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "28";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                         			<i>
										<?php
											$tp=mysql_query("select count(id) from clg_faculty where branch_code=28");
											$tp1=mysql_fetch_array($tp);
											if($tp1[0]==0)
												echo "0";
											else
												echo $tp1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>TEXTILE PROCESSING</p>
                            </div>	
                            </a>
                         </div>
                        
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "29";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
									<i>
										<?php
											$tm=mysql_query("select count(id) from clg_faculty where branch_code=29");
											$tm1=mysql_fetch_array($tm);
											if($tm1[0]==0)
												echo "0";
											else
												echo $tm1[0];
										?>
                                        </i>
                                </div>
                                </center>

                                <p>TEXTILE MANUFACURING</p>
                            </div>	
                            </a>
                         </div> 
             </div>
 
               
         	<div class="row">
  							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "1001";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i><?php
                                        $gd=mysql_query("select count(id) from clg_faculty where branch_code=1001");
                                            $gd1=mysql_fetch_array($gd);
                                            if($gd1[0]==0)
                                                echo "0";
                                            else
                                                echo $gd1[0];
                                        ?>
                                    </i>
                                </div>
                                </center>

                                <p>GENERAL DEPARTMENT</p>
                            </div>	
                            </a>
                         </div>
                         
							 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "1000";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                    <i><?php
                                        $as=mysql_query("select count(id) from clg_faculty where branch_code=1000");
                                            $as1=mysql_fetch_array($as);
                                            if($as1[0]==0)
                                                echo "0";
                                            else
                                                echo $as1[0];
                                        ?>
                                    </i>
                                </div>
                                </center>

                                <p>APPLIED SCIENCE STAFF</p>
                            </div>	
                            </a>
                         </div>
                        
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="faculty_data_show.php?branch_code=<?php echo "1002";?>" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                    <i><?php
                                        $of=mysql_query("select count(id) from clg_faculty where branch_code=1002");
                                            $of1=mysql_fetch_array($of);
                                            if($of1[0]==0)
                                                echo "0";
                                            else
                                                echo $of1[0];
                                        ?>
                                    </i>

                                </div>
                                </center>

                                <p>OFFICE STAFF</p>
                            </div>	
                            </a>
                         </div> 
             </div>
 
 
 
                    </div>
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

</body>
</html>