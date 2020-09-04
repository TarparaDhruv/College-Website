
<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');
	
	if(isset($_REQUEST['deleteid']))
	{
		$delete1=mysql_query("select * from clg_ncc where id='$_REQUEST[deleteid]'");
		$delete=mysql_fetch_array($delete1);
		$targetdir1=dirname(__FILE__)."\\ncc\\";
		$targetdir2=dirname(__FILE__)."\\deleted_img\\";
		
		copy($targetdir1."/".$delete[1],$targetdir2."/".$delete[1]);
		unlink($targetdir1.$delete[1]);
		mysql_query("delete from clg_ncc where id='$_REQUEST[deleteid]'");
		echo "<script>alert('Image is deleted & moved to delete_img folder')</script>";
		header('location:editncc.php');
	}
	
	if(isset($_REQUEST['submit']))
	{
		$x=mysql_query('SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "college" AND TABLE_NAME = "clg_ncc"');
		$xx=mysql_fetch_array($x);

		
		$filename = $_FILES['img']['name'];
		$targetdir = dirname(__FILE__)."\\ncc\\";
		$targetfile = $targetdir.$_FILES['img']['name'];
		$ex = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
		
		$filename = $xx[0];
		$targetfile = $targetdir.$filename.".".$ex;
		
		
		mysql_query ("insert into clg_ncc values(0,'$filename.$ex','$_REQUEST[imgtitle]')") or die("Error Occued during data insertion");		
		if(move_uploaded_file($_FILES['img']['tmp_name'],$targetfile) or die("File is not uploded"))
		echo "<script>alert('Image Sucessfully Uploded')</script>";
	}
	
	
	
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
                        	
            		

            <center><h1 style="font-variant:small-caps;">Add/Remove NCC Images</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9" >
                	<form  action="" method="post"  enctype="multipart/form-data" name="form" >
                            			
                              			<div class="form-group">
                                        <label for="imgtitle" style="float:left;">Title of Image:-</label>
                                    	<input type="text" name="imgtitle"  class="form-control" data-toggle="tooltip" >
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="img" style="float:left;">Image:-</label>
                                        <input type="file" name="img" class="form-control" required data-toggle="tooltip" >
                                    	</div>
			                            
                                        <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                            </form>
                   			
                            <br><br>
                            <table class="table table-responsive text-center">
                            	<tr style="font-weight:bold;">
                                	<td>ID</td>
                                    <td>Image</td>
                                    <td>Image Title</td>
                                    <td>Delete</td>
                                </tr>
                                
                                <?php 
									$display1=mysql_query("select * from clg_ncc");
									while($display=mysql_fetch_array($display1))
									{
										echo "<tr>";
										echo "<td>$display[0]</td>";
										echo "<td><a target='_blank' href='ncc/".$display[1]."'><center><img src='ncc/".$display[1]."' class='img-responsive' style='width:50px;'></center></a></td>";
										echo "<td>$display[2]</td>";
										echo "<td><a href='".$_SERVER['PHP_SELF']."?deleteid=".$display[0]."'><span class='glyphicon glyphicon-trash'></span></a></td>";
										echo "</tr>";
									}
								?>
                            </table>
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
	alert("SUCCESSFULLY UPLOADED");
</script>
<?php
	}
?>