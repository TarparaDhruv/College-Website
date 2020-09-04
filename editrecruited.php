
<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');
		
		if(isset($_REQUEST['update']))
		{
			mysql_query("update clg_recruited set cp_name='$_REQUEST[cp_name]', date='$_REQUEST[date_interview]', studentselected='$_REQUEST[selectedstudents]' where id='$_REQUEST[id]'") or die("update failed ");
			echo "<script>alert('Update Sucessful');</script>";
			header('location:edithomerecruited.php');
		}
		
		$display2=mysql_query("select * from clg_recruited where id=$_REQUEST[id]");
		$display=mysql_fetch_array($display2);
	
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
                        	
            		

            <center><h1 style="font-variant:small-caps;">Recruiter Form</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9" >
                	<form  action="" method="post"  enctype="multipart/form-data" name="form" >
                            			
                              			<div class="form-group">
                                        <label for="cpname" style="float:left;">Name of Company:-</label>
                                    	<input type="text" name="cp_name"  class="form-control" required data-toggle="tooltip"  value="<?php echo $display[1]; ?>">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="date_interview" style="float:left;">Date of Campus Interview:-</label>
                                        <input type="text" name="date_interview" class="form-control" required data-toggle="tooltip" value="<?php echo $display[2]; ?>" >
                                    	</div>
			
            							<div class="form-group">
                                        <label for="selectedstudents" style="float:left;">No. of Selected Students:-</label>
                                        <input type="text" name="selectedstudents" class="form-control" required data-toggle="tooltip" value="<?php echo $display[3];?>">
                                    	</div>
                                        
                                        <center><button type="submit" class="btn btn-info" name="update">Update</button></center>
                            </form>
                   
                </div>
             </div>
			<div style="clear:both;">
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
<?php
	if($set==1)
	{
?>
<script>	
	alert("SUCCESSFULLY REGISTERED");
</script>
<?php
	}
?>