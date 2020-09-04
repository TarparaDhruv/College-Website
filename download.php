<?php
	require_once('connection.php');
	$display=mysql_query("select * from clg_downloads") or die("Data is missing");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Downloads</title>

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
						<div class="col-md-offset-2 col-md-8" >
                            <center><h2>Downloads</h2></center>
                            <table class="table table-responsive table-hover text-center">
                                <tr style="font-weight:bold;">
                                  <td>Name</td>
                                  <td>File Name</td>
                                  <td>File Type</td>
                                  <td>Upload Date</td>
                                  <td>Download</td>
                                </tr>                                
								<?php
                                while($display2=mysql_fetch_array($display))
                                {
                                    echo "<tr>";
                                    echo "<td>".$display2[1]."</td>";
                                    echo "<td>".$display2[2]."</td>";
                                    echo "<td>".$display2[3]."</td>";
                                    echo "<td>".$display2[4]."</td>";
									echo "<td> <a download href='files\\".$display2[2]."'><i class='glyphicon glyphicon-download'></i></a></td>";
                               		echo "</tr>";
                                }
                                ?>
                            </table>
                                                   
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