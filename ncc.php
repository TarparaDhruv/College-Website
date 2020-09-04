<?php
	
	require_once('connection.php');
	
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
<style>
	 div img
	 {
		 padding:5px;
	 }
</style>

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
                <article class="row">
                <div class="text-center" style=" font-size:32px;">
                    	NCC
                </div>
                <div class="col-md-offset-2 col-md-8">
                <center>
               
                <?php
				
					$dis1=mysql_query("select * from clg_ncc");
					while($dis=mysql_fetch_array($dis1))
						{	
							echo "<div style='display:inline-block;'>";
							echo "<a href='ncc/$dis[1]' target='_self'><img alt='$dis[2]' title='$dis[2]' class='img-responsive' style='max-height:300px' width='350px' src='ncc/$dis[1]'></a>";		
							echo "</div>";
						}
				?>
                	</center>
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