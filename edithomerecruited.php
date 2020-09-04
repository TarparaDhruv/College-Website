<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');

	$display=mysql_query("select * from clg_recruited") or die("Data is missing");
	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>List of Students Recruited</title>

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
					<center><h1 style="font-variant:small-caps; ">List of Students Recruited</h1></center>
                    <table class="table table-responsive table-hover text-center" id="recruited_show_table">
                      <tr style="font-weight:bold;">
                          <td>ID</td>
                          <td>Name Of Company</td>
                          <td>Date of Campus Interview</td>
                          <td>No. of Students</td>
                          <td>Edit</td>
                          <td>Delete</td>
                        </tr>
						<?php
						while($display2=mysql_fetch_array($display))
                        {
							echo "<tr>";
							echo "<td>".$display2[0]."</td>";
							echo "<td>".$display2[1]."</td>";
							echo "<td>".$display2[2]."</td>";
							echo "<td>".$display2[3]."</td>";
							echo "<td><a href='editrecruited.php?id=".$display2[0]."'><span class='glyphicon glyphicon-pencil'></span></a></td>";
							echo "<td onClick='delete_recruited(".$display2[0].")'><span class='glyphicon glyphicon-trash'></span></td>";
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
