<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');

	$display = mysql_query("select * from clg_gallery") or die("Data is missing");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery Images</title>

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
					<center><h1 style="font-variant:small-caps; ">Gallery Images</h1></center>
 			        <table class="table table-responsive table-hover text-center" id="gallery_image_show_admin">
                    	<thead>
                        	<tr style="font-weight:bold;">
                            	<td>ID</td>
                                <td>Branch</td>
                                <td>Path</td>
                                <td>Date</td>
                                <td>Preview</td>
                                <td>Delete</td>
                            </tr>
                       	</thead>
                            <?php
							while($display2=mysql_fetch_array($display))
								{
									echo "<tr>";
									echo "<td>".$display2[0]."</td>";
									echo "<td>".$display2[1]."</td>";
									echo "<td>".$display2[2]."</td>";
									echo "<td>".$display2[3]."</td>";
									echo "<td><center><a href='gallery/$display2[2]' target=_blank >  <img class='img-responsive' style='width:50px;' src='gallery/".$display2[2]."'></a></center></td>";
									echo "<td onClick='delete_gallery_image(".$display2[0].")'><span class='glyphicon glyphicon-trash'></span></td>";
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