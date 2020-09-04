
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

  a:hover
  {
	  text-decoration:none;
  }
  a
  {
	  color:black;
  }
</style>
</head>


<body >
	<div id="admin_form" ></div>	
    <div class="container-fluid">
		<div class="row">
    	<div class="col-md-1">
        </div>
        
        <div class="col-md-10 col-sm-12" style="background:white;">
        
        <header>
			<?php require_once('header.php'); ?>
      	</header>
        
        <section>
        	<article class="text-md">
            <div class="container-fluid">
                <div class="row">
                          <div class="col-md-9">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="">
    <div class="item active">
      <img src="images/DSC00709.JPG" alt="Admin Building">
      <div class="carousel-caption">
        <p>Education is our Mission</p>
      </div>
    </div>

    <div class="item">
      <img src="images/DSC00809.JPG" alt="">
      <div class="carousel-caption">
        <p>Ghandhy College Campus</p>
      </div>
    </div>

    <div class="item">
      <img src="images/DSC00749.JPG" alt="">
      <div class="carousel-caption">
        <p>Lokarpan Event</p>
      </div>
    </div>
     
  <div class="item">
      <img src="images/DSC00708.JPG" alt="">
      <div class="carousel-caption">
        <p>IT Building</p>
      </div>
    </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row" style="margin:2% 0 0 0; ">
    
    <div class="col-md-4" style="padding:5px;">
		<div style="float:left">
        	<img src="images/c1.jpg"  style="width:150px; height:150px;" class="img-rounded">
        </div>
        <div class="text-justify">
        	
         	<font style="font-size:13px;">
            	<p style="font-size:14px;"><b>Better Library Facilities</b></p>
                More then 23000 books.
                Internal Book search sotware.<br>
                <span style="float:right;"><a href="library.php">Read more...</a></span>
                <span style="clear:both;"></span>
                
            </font>
            	
        </div>
        <div style="clear:both;">
        </div>
        
     </div>
    
     <div class="col-md-4" style="padding:5px">
		<div style="float:left">
        	<img src="images/c2.jpg" style="width:150px; height:150px;" class="img-rounded">
        </div>
	    <div class="text-justify">
        	<font style="font-size:13px;">
            	<p style="font-size:14px;"><b>GKS</b></p>
                Our College runs varios courses in Technical & Non-Technical departments under GKS<br>
                <span style="float:right;"><a href="http://www.gksgujarat.org">Read more...</a></span>
                <span style="clear:both;"></span>
            </font>
    	</div>
        <div style="clear:both;">
        </div>
     </div>
    
     <div class="col-md-4" style="padding:5px">
		<div style="float:left">
        	<img src="images/c3.jpg" style="width:150px; height:150px;" class="img-rounded">
        </div>
		
        <div class="text-justify">        	
            <font style="font-size:13px;">
            	<p style="font-size:14px;"><b>NCC</b></p>
                Good Facility of NCC services and campus<br>
                <span style="float:right;"><a href="ncc.php">Read more...</a></span>
                <span style="clear:both;"></span>
            </font>
        </div>
        <div style="clear:both;">
        </div>
     </div>
</div>

</div>
                                        
                  <div class="col-md-3 artical_show" >
                  	<div style="height:px;border:1px solid black;" class="text-justify"	>
      					  <center><img src="images/AgrawalSir.png"  style="width:175px;" class="img-responsive text-center" alt="-From Mr. IB Dave"></center>
                          <p style="padding:1px;">This is the best college for Diploma and we want to keep it the best.</p>            	
                         <a href="principal.php" style="float:right" >Read more...</a>
                         <div style="clear:both">
                         </div>
                    </div>
                    <div style="border:1px solid black;margin:5% 0 0 0 ;" class="farvu">
                        <center><h4>Latest Articles</h4></center>
                        <ul class="list-unstyled">
                        <?php
					   		$article1=mysql_query("select * from clg_article order by article_id desc");
							while($article=mysql_fetch_array($article1))
							{
					   ?>
                            <li class="text-uppercase"><i class="dorotate">&gt;</i> <a href="article_detail.php?article_id=<?php echo $article[0];?>"><?php echo $article[1]; ?></a></li>
                       <?php 
							}
					   ?>
                 		<li style="text-align:right;font-size:12px;"><a href="article.php">All Articles</a></li>
                        </ul>
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