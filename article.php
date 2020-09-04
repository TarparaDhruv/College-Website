<?php

	require_once('connection.php');

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
                <center><h2>All Articles</h2></center>
                	<div class="col-md-offset-2 col-md-8" >
                         <?php
                                $getarticle1=mysql_query("select * from clg_article order by article_publishdate desc");
                                while($getarticle=mysql_fetch_array($getarticle1))
                                {
                            ?>
                        <div style="border:1px solid black;margin:10px;padding:8px;">
                        <span style="float:right; padding:5px;"><?php echo $getarticle[4]; ?></span>
                        	<table>
                            	<tr>
                                	<td colspan="3" style="font-size:14px;" class="text-uppercase"><b><u><?php echo $getarticle[1]; ?></u></b></td>
                                </tr>
                                <tr>
                                	<td><i class="tabspace"></i></td>
                                    <td><i class="tabspace"></i></td>
                                    <td class="text-justify">
									<?php
										echo substr($getarticle[3],0,147)."...";
									?>
                                    </td>
                                </tr>
                            </table>

                            <div style="float:right">
                            	<a href="article_detail.php?article_id=<?php echo $getarticle[0];?>">View more...</a>
                            </div>
                            <div style="clear:both;">
                            </div>
                        </div>
											<?php
                          }
                      ?>

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
