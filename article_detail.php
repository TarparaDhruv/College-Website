<?php
	
	require_once('connection.php');
	
	$article1=mysql_query("select * from clg_article where article_id='$_REQUEST[article_id]'");
	$article_img1=mysql_query("select * from clg_article_addon_img where article_id='$_REQUEST[article_id]'");
	$article_link1=mysql_query("select * from clg_article_addon_link where article_id='$_REQUEST[article_id]'");
	
	$article=mysql_fetch_array($article1);
	$article_img=mysql_fetch_array($article_img1);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Article</title>

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
                	<div class="col-md-offset-1 col-md-10" style="border:1px solid black;">
                    	
                    	<div class="text-center">
                        	<p><b style="font-size:32px;"><?php echo $article[1]; ?></b></p>
                        </div>    	
                        
                        <div class="text-center">
                        	<p><b style="font-size:18px;"><?php echo $article[2]; ?></b></p>
                        </div>
                            	
                        <div style="margin:10px;padding:10px;">
     							<div class="text-center">
                        		<?php
									if($article_img!="")
									{
								?>
                                <center><img class="img-thumbnail img-rounded img-responsive" src="article_img/<?php echo $article_img[2];?>" style="margin-bottom:10px;"></center>
                                <?php
									}
								?>
                                </div>
                                <p class="text-justify" style="margin-top:10px;">
									<i class="tabspace"></i><?php echo $article[3];?>
                                </p>
    
								<?php 
									if(mysql_num_rows($article_link1)>0)
									{
								?>
                                <div>
                                <br><h5>Associated Links:-</h5>
								<?php
									while($article_link=mysql_fetch_array($article_link1))
									{
										echo "<i class='tabspace'></i><a href='" . $article_link[2] . "'>".$article_link[3]."</a><br>";
									}
								?>                                	
                                </div>
                                <?php
									}
								?>
        
                                <div style="float:right" class="text-center">
                                	<br><p><?php echo $article[5];?><br>
                                 	<?php echo "(".$article[4] . ") "; ?></p>
                       			</div>		
                                
                                <div style="clear:both">
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
           </div>
           
           <div class="col-md-1">
           </div>
           
    </div>	
    

</body>
</html>