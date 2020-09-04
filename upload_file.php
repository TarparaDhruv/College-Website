<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');

	$set=0;
	
	if(isset($_REQUEST['submit']))
	{
		$filename = $_FILES['ufile']['name'];
		$targetdir = dirname(__FILE__)."\\files\\";
		$targetfile = $targetdir.$_FILES['ufile']['name'];
		$ex = pathinfo($targetfile,PATHINFO_EXTENSION);
			
			if ( file_exists("C:/xampp/htdocs/college/files/".$filename) ) 
			{die("Sorry, file already exists.");}

		if(mysql_query("insert into clg_downloads values(0,'$_REQUEST[fname]','$filename','$ex','$_REQUEST[udate]')") or die("Entery is not mentioned"))
			if(move_uploaded_file($_FILES['ufile']['tmp_name'],$targetfile) or die("File is not uploded"))
				$set=1;

	}

	
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
                <article>
                	<div class="row">
                    					
       					<div class="col-md-2 col-sm-2 admin_sidemenu">
                        	<?php
								require_once('adminsidemenu.php');
							?>
                        </div>
                
                	<div class="col-md-10 col-sm-10" >
                    	<div class="row">


            <div class="row">

            	<div class="col-md-offset-1 col-md-9" >
					<center><h1 style="font-variant:small-caps; ">Upload File</h1></center>
 			        <form  action="" method="post"  enctype="multipart/form-data" name="form" >

                                                
                                                <div class="form-group">
                                                <label for="fname" style="float:left;">File Name:-</label>
                                                <input autofocus type="text" name="fname" placeholder="File Name" class="form-control" data-toggle="tooltip" maxlength="50" required pattern="[a-zA-Z]{0,25}$" title="Enter Name of File.">
                                                </div>
                                                
                                                <div class="form-group">
                                                <label for="ufile" style="float:left;">File to Upload:-</label>
                                                <input type="file" name="ufile"  class="form-control" required data-toggle="tooltip" title="Select File to upload">
                                                </div>
                                                
                                                <div class="form-group">
                                                <label for="udte" style="float:left;">Date of upload:-</label>
                                                <input type="date" name="udate" class="form-control" required data-toggle="tooltip" title="Select date of file upload.">
                                                </div>
        										
                                                <ul class="list-group-item-warning">
                                                	<li></li>
                                                    <li></li>
                                                    <li>Date format is yyyy-mm-dd</li>
                                                </ul>
                                                <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                                    </form>
                   
                </div>
             </div>
			<div style="clear:both;">
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
    echo "<script>alert('SUCCESSFULLY REGISTERED');</script>";
    
    ?>