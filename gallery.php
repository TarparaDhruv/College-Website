<?php
	
	require_once('connection.php');
	$id=$_REQUEST['departmentid'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery</title>

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


/* The Image Box */
div.img {
    //border: 1px solid #ccc;
}

div.img:hover {
opacity:0.8;
}

/* The Image */
div.img img {

    height: auto;
    cursor: pointer;
}

/* Description of Image */
div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

/* Add Responsiveness */
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
	margin:5px 0px 5px 0px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    max-width: 700px;
	height:80%;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0.1)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color:white;
	opacity:1.0;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
	opacity:1.0;
	color:white;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive Columns */
@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    .modal-content {
        width: 100%;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

/* Clear Floats */
.clearfix:after {
    content: "";
    display: table;
    clear: both;
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
                    <article>
                    	<center><h2 class="text-capitalize">
						<?php
						if($id!=0000)
							{
							$ab=mysql_query("select branch_name from clg_department where branch_code=$id");
							$abc=mysql_fetch_array($ab);
							echo $abc[0];
							}
						else
							{
								echo "ALL DEPARTMENT";
							}
						 ?>
                        </h2></center>
                        <br>
                        <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                        <?php
						if($id!=0000)
							{
								$gal1=mysql_query("select * from clg_gallery where branch_code=$id");
                            	while($gal=mysql_fetch_array($gal1))
                            {
                        ?>
                        <div class="responsive">
                          <div class="img">
                            <center><img src="gallery/<?php echo $gal[2];?>" alt="<?php echo "Branch code".$gal[1]; ?>" class="img-responsive" style="height:183px;"></center>
                          </div>
                        </div>
                        <?php
                            }
							}
						else
							{
								$gal1=mysql_query("select * from clg_gallery");
                            	while($gal=mysql_fetch_array($gal1))
                            {
                        ?>
                        <div class="responsive">
                          <div class="img">
                            <center><img src="gallery/<?php echo $gal[2];?>" alt="<?php echo "Branch code".$gal[1]; ?>" class="img-responsive" style="height:183px;"></center>
                          </div>
                        </div>
                        <?php
                            }
							}
						?>
                        
                        
                        <div class="clearfix"></div>
                        
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                          <span class="close">×</span>
                          <img class="modal-content" id="img01">
                          <div id="caption"></div>
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
        </div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
}
</script>

    
    </body>
</html>

