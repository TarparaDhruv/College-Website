
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
<title>Admin Panel</title>

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
                       	 	<a href="edit_faculty_home.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i><?php 
											$all_fac=mysql_query("select count(id) from clg_faculty");
											$all_fac1=mysql_fetch_array($all_fac);
											echo $all_fac1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p> All Faculty</p>
                            </div>	
                            </a>
                         </div>
                         
							 <div class="col-md-4 col-sm-4">
                       	 	<a href="edit_article_home.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
  									<i><?php 
											$all_fac=mysql_query("select count(article_id) from clg_article");
											$all_fac1=mysql_fetch_array($all_fac);
											echo $all_fac1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p> All Articles</p>
                            </div>	
                            </a>
                         </div>
                        
                        	 <div class="col-md-4 col-sm-4">
                       	 	<a href="download_show.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
									<i><?php 
											$all_fac=mysql_query("select count(id) from clg_downloads");
											$all_fac1=mysql_fetch_array($all_fac);
											echo $all_fac1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p> All Downloads</p>
                            </div>	
                            </a>
                         </div>                         
                       </div>
                       
                        	<div class="row">


  							 <div class="col-md-4 col-sm-4">
                       	 	<a href="gallery_image_show_admin.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i><?php 
											$all_fac=mysql_query("select count(id) from clg_gallery");
											$all_fac1=mysql_fetch_array($all_fac);
											echo $all_fac1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p> Gallery Images</p>
                            </div>	
                            </a>
                         </div>

  							 <div class="col-md-4 col-sm-4">
                       	 	<a href="edithomerecruiter.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<i><?php 
											$all_fac=mysql_query("select count(id) from clg_placement");
											$all_fac1=mysql_fetch_array($all_fac);
											echo $all_fac1[0];
										?>
                                    </i>
                                </div>
                                </center>

                                <p>All Recruiter Companies</p>
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