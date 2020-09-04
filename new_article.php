
<?php
	
	require_once('connection.php');
    if(!isset($_SESSION['user']))
        header('location:index.php');
	
	if(isset($_REQUEST['publish']))
	{
		mysql_query("insert into clg_article values(0,'$_REQUEST[maintitle]','$_REQUEST[subtitle]','$_REQUEST[article]','$_REQUEST[publish_date]','$_REQUEST[author]')") or die("Entry is not mentioned in database");
	
		if($_REQUEST['link1']!="")
			mysql_query("insert into clg_article_addon_link values(0,'$_REQUEST[article_id]','$_REQUEST[link1]','$_REQUEST[link1title]')") or die("Link1 is not uploded");
	
	
		if($_REQUEST['link2']!="")
			mysql_query("insert into clg_article_addon_link values(0,'$_REQUEST[article_id]','$_REQUEST[link2]','$_REQUEST[link2title]')") or die("Link2 is not uploded");
	


			if (!empty($_FILES['article_img']['name']))
			{
			$filename= $_FILES['article_img']['name'];
			$ex = ".".pathinfo($filename,PATHINFO_EXTENSION);
			$targetdir=dirname(__FILE__)."\\article_img\\";
			$imgname=$_REQUEST['article_id'].$ex;
			
			mysql_query("insert into clg_article_addon_img values(0,'$_REQUEST[article_id]','$imgname')") or die("Entry is mentioned in Databse");
			move_uploaded_file($_FILES['article_img']['tmp_name'],$targetdir.$imgname) or dir ("error");
		}	
	}

	$x=mysql_query('SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "college"
AND TABLE_NAME = "clg_article"');
$xx=mysql_fetch_array($x);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

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
                    	<div class="row">
 						<div id="show" class="col-md-12 col-sm-12">
                        	
     		<center><h1 style="font-variant:small-caps;">New Article</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9">
                	<form onSubmit="" action="" method="POST"  enctype="multipart/form-data">
                    					
                                        <div class="form-group">
                                        <label for="article_id" style="float:left;">Article ID:-</label>
                                        <input type="text" name="article_id" class="form-control" title="Article ID" data-toggle="tooltip" value="<?php echo $xx[0]; ?>" readonly>
                            	        </div>
                    
                                        <div class="form-group">
                                        <label for="fname" style="float:left;">Main Title:-</label>
                                        <input autofocus type="text" name="maintitle" placeholder="Main Title" class="form-control" title="Enter Main Title" data-toggle="tooltip">
                            	        </div>
                                        
                                        <div class="form-group">
                                        <label for="subtitle" style="float:left;">SubTitle:-</label>
                                        <input type="text" name="subtitle" placeholder="Subtitle" class="form-control" title="Enter Subtitle" data-toggle="tooltip">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="article" style="float:left;">Article:-</label>
                                        <textarea required name="article" class="form-control" cols="10" rows="10" style="resize:vertical;" placeholder="Type Article here" title="Type your Article here" data-toggle="tooltip" name="article"></textarea>
                                    	</div>
                                        

                                        <ul class="list-group-item-warning text-left">
                                        	<li>To make text bold use this method &lt;b&gt;Text&lt;/b&gt;</li>
                                            <li>To provide link in article use this method &lt;a href='http://www.gtu.ac.in'&gt;Text to show&lt;/a&gt;</li>
                                        </ul>
                                        
                                        
                                        <div class="form-group">
                                        <label for="article_img" style="float:left;">Image:- </label>
                                    	<input type="file" name="article_img"  class="form-control"  title="Choose Image you want to show in Article" data-toggle="tooltip">
                                    	</div>
                                           
                                         <div class="row">
                                         <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link1" style="float:left;">Link-1:-</label>
                                        <input type="text" name="link1" placeholder="EX : http://www.exapmle.com" class="form-control" title="Enter Link that you want to dsplay in your article." data-toggle="tooltip">
                                    	</div>
                                        
                                        </div>
                                        
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link1 Title" style="float:left;">Link-1 Title:-</label>
                                        <input type="text" name="link1title" placeholder="Link title:Result" class="form-control" title="Enter Link Title that you want to dsplay in your article." data-toggle="tooltip">
                                    	</div>
                                        	
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link2" style="float:left;">Link-2:-</label>
                                        <input type="text" name="link2" placeholder="EX : http://www.exapmle.com" class="form-control" title="Enter Link that you want to dsplay in your article." data-toggle="tooltip">
                                    	</div>
                                        
                                        </div>
                                        
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link2 Title" style="float:left;">Link-2 Title:-</label>
                                        <input type="text" name="link2title" placeholder="Link title:Result" class="form-control" title="Enter Link Title that you want to dsplay in your article." data-toggle="tooltip">
                                    	</div>
                                        
                                        </div>
                                        </div>
                                        
                                        <ul class="list-group-item-warning text-left">
                                        	<li>To connect uploded file with article use "linktodownload.php?id=00" page</li>
                                            <li>find ID of uploded file and replace it with "id=00"</li>
                                            <li>use "http://" otherwise link will not open</li>
                                            <li>Please fill Link Title otherwise link wil not be shown to user</li>
                                            
                                        </ul>
                                     
                                         <div class="form-group">
                                        <label for="publish_date" style="float:left;">Publish Date:-</label>
                                        <input type="date" name="publish_date" class="form-control" required title="Publish Date" data-toggle="tooltip">
                                    	</div>
                                                                                
                                        <div class="form-group">
                                        <label for="author" style="float:left;">Author Name:-</label>
                                       	<input type="text" name="author" id="author" placeholder="Author Name" class="form-control" required title="Enter Author of Article." data-toggle="tooltip">
                                    	</div>        
  									    
                                        
                                    	<center><input type="submit" value="Publish" class="btn btn-info" name="publish"></center>
                            </form>
				</div></div>  
       			<div style="clear:both;">
            </div>         
                                 
       
        
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