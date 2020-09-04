
<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');
		
		$display=mysql_query("select * from clg_article");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Article</title>

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
                    <center><h1 style="font-variant:small-caps; ">Edit Article</h1></center><br>
                    <table class="table table-responsive table-hover text-center" id="article_show_table">
                    	<tr style="font-weight:bold;">
                        	<td>ID</td>
                            <td>Title</td>
                            <td>Subtitle</td>
                            <td>Published Date</td>
                            <td>Author</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php
						 while($display2=mysql_fetch_array($display))
						 {
							 echo "<tr>";
							 echo "<td>$display2[0]</td>";
							 echo "<td>$display2[1]</td>";
							 echo "<td>$display2[2]</td>";
							 echo "<td>$display2[4]</td>";
							 echo "<td>$display2[5]</td>";
							 echo "<td><a href='edit_article.php?id=$display2[0]'><span class='glyphicon glyphicon-pencil'></span></a></td>";
							 echo "<td><a onClick='delete_article($display2[0])'><span class='glyphicon glyphicon-trash'></span></a></td>";
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

</body>
</html>