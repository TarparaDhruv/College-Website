
<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');
	$set=0;
	if(isset($_REQUEST['upload']))
	{
		$filename = $_FILES['gallery_image']['name'];
		$targetdir = dirname(__FILE__)."\\gallery\\";
		$targetfile = $targetdir.$_FILES['gallery_image']['name'];
		$ex = pathinfo($targetfile,PATHINFO_EXTENSION);
			
		if ( file_exists("C:/xampp/htdocs/college/gallery/".$filename) ) 
		{	
			echo "<script>alert('Sorry, file name is  already exists. Please change file name and retry.')</script>";
		}
		else
		{
			if(mysql_query("insert into clg_gallery values(0,'$_REQUEST[branch_code]','$filename','$_REQUEST[publish_date]')") or 		die("Entery is not mentioned"))
				
			if(move_uploaded_file($_FILES['gallery_image']['tmp_name'],$targetfile) or die("File is not uploded"))
					$set=1;
		}
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload Image</title>

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
                        	
            		

            <center><h1 style="font-variant:small-caps;">Gallery Image Upload</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9" >
                	<form  action="" method="post"  enctype="multipart/form-data" name="form" >
                            			
                      					<div class="form-group">
                                        <label for="branch_code" style="float:left;">Select Department:-</label>
                                        <select name="branch_code" id="gallery_dept" class="form-control" required data-toggle="tooltip" title="Select Department">
                                            <optgroup label="Select Department">
                                                <option>02-AUTOMOBILE</option>
                                                <option>06-CIVIL</option>
                                                <option>09-ELECTRICAL</option>
                                                <option>16-INFORMATION TECHNOLOGY</option>
                                                <option>19-MECHANICAL</option>
                                                <option>21-METALLURGY</option>
                                                <option>24-POWER ELECTRONICS</option>
                                                <option>28-TEXTILE PROCESSING</option>
                                                <option>29-TEXTILE MANUFACTURING</option>
                               </optgroup>
                                        </select>
                                    	</div>
                                        
                                        
                              			<div class="form-group">
                                        <label for="gallery_image" style="float:left;">Image:-</label>
                                    	<input type="file" name="gallery_image"  class="form-control" required data-toggle="tooltip" title="Jpg/Jpeg Only.">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="publish_date" style="float:left;">Publish Date:-</label>
                                        <input type="date" name="publish_date" class="form-control" required data-toggle="tooltip" title="Date of Publishing">
                                    	</div>
										
                                        <center><button type="submit" class="btn btn-info" name="upload">Upload</button></center>
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