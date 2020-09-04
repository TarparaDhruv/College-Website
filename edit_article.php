
<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');
		
		$id=$_REQUEST['id'];	
		
		
		if(isset($_REQUEST['submit']))		
		{
		mysql_query("update clg_article set article_maintitle='$_REQUEST[title]',article_subtitle='$_REQUEST[subtitle]',article_article='$_REQUEST[article]',article_publishdate='$_REQUEST[publish_date]',article_authorname='$_REQUEST[author]' where article_id='$_REQUEST[article_id]'") or die("update failed");
		
			if($_REQUEST['link1']=="")
			{
				
				mysql_query("delete from clg_article_addon_link where article_id='$_REQUEST[article_id]' ") or die("link is not deleted from database");
			}
				
			if($_REQUEST['link1']!="")
			{
				mysql_query("delete from clg_article_addon_link where article_id='$_REQUEST[article_id]' ");
				mysql_query("insert into clg_article_addon_link values(0,'$_REQUEST[article_id]','$_REQUEST[link1]','$_REQUEST[link1title]')") or die(mysql_error());
				
				if($_REQUEST['link2']!="")
				mysql_query("insert into clg_article_addon_link values(0,'$_REQUEST[article_id]','$_REQUEST[link2]','$_REQUEST[link2title]')") or die("Link2 is not uploded");
				
			}
		echo "<script>alert('update successful');</script>";	
		}
		
	
		$display2=mysql_query("select * from clg_article where article_id=$id");
		$display=mysql_fetch_array($display2);
		$getlink=mysql_query(" select * from clg_article_addon_link where article_id=$id");
		$link1=mysql_fetch_array($getlink);
		$link2=mysql_fetch_array($getlink);
		$imgdisplay1=mysql_query("select * from clg_article_addon_img where article_id='$_REQUEST[id]'");
		$imgdisplay=mysql_fetch_array($imgdisplay1);

	
		if(isset($_REQUEST['upload']))
		{
		$path1="\article_img\\" . $imgdisplay[2];
		$path2=dirname(__FILE__).$path1;
		
		move_uploaded_file($_FILES['article_img']['tmp_name'],$path2) or die("error in image upload");
				header('location:edit_article.php?id='.$display[0]);
			
				header('location:edit_article.php?id='.$display[0]);
	}
	

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
<style>
#article_image_show
{
	width:100%;
	height:100%;
	position:fixed;
	background-color:rgba(0,0,0,0.5);
	top:0;
	left:0;
	z-index:9999;
	display:none;
	text-align:center;
	padding-top:15%;	
}

</style>

<script>
	function article_image_change(str)
	{
		if(str=='open')
		{
			$("#article_image_show").css("display","block");
		}
		if(str=='close')
		{
			$("#article_image_show").css("display","none");
		}

	}
</script>

</head>

<body>

	<div id="admin_form" ></div>	
    <div id="article_image_show">
    	
        <div class="col-md-1 col-xs-1">
        </div>
        
        <div class="col-md-10 col-xs-10" >
            <div class="row">
            <div class="col-md-offset-4 col-md-4 " style="background:white;box-shadow:0px 0px 33px black;border-radius:5px;">

            	<form role="form" method="post" action="" enctype="multipart/form-data">
               	  <button class="btn-sm btn btn-danger" type="button" style="float:right;position:absolute;right:0;" onClick="article_image_change('close')">X</button>
                	<br>
                    <div style="font-variant:small-caps;font-size:18px; font-weight:bold;"><center>UPLOAD IMAGE</center></div>
                    
                    <div class="form-group">
                    	<label for="article image" style="float:left;">New Article Image:-</label>
                    	<input type="file" class="form-control" name="article_img" placeholder="Select New Image" autofocus>
                    </div>
                    
                    <div class="form-group">
                    <center><button type="submit" class="btn btn-sm btn-info" name="upload">Upload</button></center>
                    </div> 
                </form>
            </div>          
         	 </div>
    	  
           </div>
           
           <div class="col-md-1 col-xs-1" style="clear:both;">
           </div>
    </div>

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
                        	
            		
            		<center><h1 style="font-variant:small-caps;">Edit Article</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9">
        	<form onSubmit="" action="" method="post"  enctype="multipart/form-data">
            
										<div class="form-group">
                                        <label for="article_id" style="float:left;">Article ID:-</label>
                                        <input autofocus type="text" name="article_id" class="form-control" title="Article ID" data-toggle="tooltip" value="<?php echo $display[0]; ?>" readonly>
                            	        </div>

                    
                                        <div class="form-group">
                                        <label for="fname" style="float:left;">Main Title:-</label>
                                        <input autofocus type="text" name="title" placeholder="Main Title" class="form-control" required title="Enter Main Title" data-toggle="tooltip" value="<?php echo $display[1]; ?>">
                            	        </div>
                                        
                                        <div class="form-group">
                                        <label for="subtitle" style="float:left;">SubTitle:-</label>
                                        <input type="text" name="subtitle" placeholder="Subtitle" class="form-control" title="Enter Subtitle" data-toggle="tooltip" value="<?php echo $display[2]; ?>">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="article" style="float:left;">Article:-</label>
                                        <textarea required name="article" class="form-control" cols="10" rows="10" style="resize:vertical;" placeholder="Type Article here" title="Type Article here" data-toggle="tooltip"><?php echo $display[3]; ?></textarea>
                                    	</div>
                                        
                                        <ul class="list-group-item-warning text-left">
                                        	<li>To make text bold use this method &lt;b&gt;Text&lt;/b&gt;</li>
                                            <li>To provide link in article use this method &lt;a href='http://www.gtu.ac.in'&gt;Text to show&lt;/a&gt;</li>
                                        </ul>
                                        
                                        <div class="form-group">
                                        <label for="article image" style="float:left;">Article Image:-</label>
                                        	<img src="article_img\<?php echo $imgdisplay[2];?>" class="img-responsive" alt="<?php echo $display[1] ?>" style="width:150px;max-height:200px;padding:10px;" onClick="article_image_change('open');">

                                    	</div>
                                          
                                         <div class="row">
                                         <div class="col-md-6"> 
                                        
                                        <div class="form-group">
    	                                <label for="link1" style="float:left;">Link-1:-</label>
                                        <input type="text" name="link1" placeholder="EX : http://www.exapmle.com" class="form-control" title="Enter Link that you want to dsplay in your article." data-toggle="tooltip" value="<?php echo $link1[2]; ?>">
                                    	</div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link1title" style="float:left;">Link-1 Title:-</label>
                                        <input type="text" name="link1title" placeholder="Link Title" class="form-control" title="Enter Link Title that you want to dsplay in your article." data-toggle="tooltip" value="<?php echo $link1[3]; ?>">
                                    	</div>
                                        
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link2" style="float:left;">Link-2:-</label>
                                        <input type="url" name="link2" placeholder="EX : http://www.exapmle.com" class="form-control" title="Enter Link that you want to dsplay in your article." data-toggle="tooltip" value="<?php echo $link2[2]; ?>">
                                    	</div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        
                                        <div class="form-group">
    	                                <label for="link2title" style="float:left;">Link-2 Title:-</label>
                                        <input type="text" name="link2title" placeholder="Link Title" class="form-control" title="Enter Link Title that you want to dsplay in your article." data-toggle="tooltip" value="<?php echo $link2[3]; ?>">
                                    	</div>
                                        
                                        </div>
                                        </div>	
                                        
                                        <ul class="list-group-item-warning text-left">
                                        	<li>To connect uploded file with article use "linktodownload.php?id=00" page</li>
                                            <li>find ID of uploded file and replace it with "id=00"</li>
                                            <li>use "http://" otherwise link will not open.</li>
                                            <li>Please use Link 1 box, if only one link is to be used. </li>
                                            <li>Empty link's box to remove it.</li>
                                            <li>Please fill Link Title otherwise link wil not be shown to user.</li>
                                            
                                        </ul>
                                        
                                        <div class="form-group">
                                        <label for="publish_date" style="float:left;">Publish Date:-</label>
                                        <input type="date" name="publish_date" class="form-control" required title="Publish Date" data-toggle="tooltip" value="<?php echo $display[4]; ?>">
                                    	</div>
                                                                                
                                        <div class="form-group">
                                        <label for="author" style="float:left;">Author Name:-</label>
                                       	<input type="text" name="author" id="author" placeholder="Author Name" class="form-control" required title="Enter Author of Article." data-toggle="tooltip" value="<?php echo $display[5]; ?>" >
                                    	</div>        
  									    
                                        
                                        <ul class="list-group-item-warning text-left">
											<li>Date formate is yyyy-mm-dd</li>
                                        </ul>
                                                
                                    	<center><input type="submit" value="Publish" class="btn btn-info" name="submit"></center>
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