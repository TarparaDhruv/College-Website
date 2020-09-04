
<?php
	
	require_once('connection.php');
    if(!isset($_SESSION['user']))
        header('location:index.php');

	if(isset($_REQUEST['loginforchangepass']))
	{
		$loginforpass1 = mysql_query("select * from clg_admin");
		$loginforpass = mysql_fetch_array($loginforpass1);
		if($_REQUEST['change_email']=="$loginforpass[0]" && $_REQUEST['change_password']=="$loginforpass[1]")
		{
			$set=1;
		}
		else
			$error=1;
	}

	
	if(isset($_REQUEST['submit']))
	{
		if(isset($_REQUEST['newemail']))
		{
			if($_REQUEST['newpass']=="" && $_REQUEST['newpassconfirm']=="")
			{
				mysql_query("update clg_admin set email='$_REQUEST[newemail]'");
				echo "<script type='text/javascript'>alert('EMAIL HAS BEEN CHANGED SUCCESSFULLY');</script>";
			}
		}
		
		if(isset($_REQUEST['newemail']) && $_REQUEST['newpass']!="")
		{
			if($_REQUEST['newpass']!=$_REQUEST['newpassconfirm'])
			{	
				$set=1;
				$seterror=1;
			}
			if($_REQUEST['newpass']==$_REQUEST['newpassconfirm'])
			{
				mysql_query("update clg_admin set email='$_REQUEST[newemail]',pass='$_REQUEST[newpass]'");
				echo "<script type='text/javascript'>alert('PASSWORD AND EMAIL HAS BEEN CHANGED SUCCESSFULLY');</script>";
			}
			
		}
	}

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
<script>
	$(document).ready(function () {
		$("#showpassword").click(function () {
			if ($(".password").attr("type")=="password") {
				$(".password").attr("type", "text");
			}
			else{
				$(".password").attr("type", "password");
			}
	
		});
		$("#showpasswordforchange").click(function () {
			if ($(".changepassword").attr("type")=="password") {
				$(".changepassword").attr("type", "text");
			}
			else{
				$(".changepassword").attr("type", "password");
			}
	
		});
	});
</script>

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
             
          	
            <?php
				if($set!=1)
				{
			?>
	      	<div id="loginforpass" >           	
            <div class="row">
            	<div class="col-md-offset-1 col-md-9">
                	<form role="form" method="post" action="">
                	<br>
                    <?php
					
						if($error==1)
						{
							echo "<div style='color:red'>USERNAME AND PASSWORD DOES NOT MATCH</div>";
						}
					?>  
       			
                    <div style="font-variant:small-caps;font-size:18px; font-weight:bold;float:left;"><center>Enter Current Credentials</center><br></div>

                    <div style="clear:both;"></div>
                    <div class="form-group">
                    	<label for="email" style="float:left;">Email:-</label>
                    	<input type="email" name="change_email" class="form-control" id="email" placeholder="Enter Email Here" autofocus>
                    </div>
                    
                    <div class="form-group">
                    	<label for="pwd" style="float:left;">Password:-</label>
                    	<input type="password" name="change_password" class="form-control password" placeholder="Enter Password Here">
                    </div>
   					
                    <div class="form-group">
                    	<input type="checkbox" style="float:left;" name="showpassword" id="showpassword">
						<label for="pwd" style="float:left;">Show Password</label>
                    </div>
   					
                    <div class="form-group" style="clear:both;">
                    <center><button type="submit" name="loginforchangepass" class="btn btn-sm btn-info">Log In</button></center>
                    </div> 
                </form>

				</div></div>
                
                <div style="clear:both;">
            </div>         
             </div>                   
          	
            <?php
				}
				if($set==1)
				{
			?>
            <div id="change pass">           	
     		<center><h1 style="font-variant:small-caps;">Change Password</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9">
                	<form onSubmit="" action="" method="POST"  enctype="multipart/form-data">
                    <?php
						if($seterror==1)
							echo "<div style='color:red'>PASSWORD DOES NOT MATCH</div>";
					?>             
                                        <div class="form-group">
                                        <label for="fname" style="float:left;">Email :- </label>
                                        <input autofocus type="email" name="newemail" placeholder="abc@example.com" class="form-control" title="Enter New Email" data-toggle="tooltip" id="newemail">
                            	        </div>

                                        <div class="form-group">
                                        <label for="subtitle" style="float:left;">New Password :- </label>
                                        <input type="password" name="newpass" placeholder="Enter New Password" class="form-control changepassword" title="Enter New Password" data-toggle="tooltip" >
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="subtitle" style="float:left;">Confirm Password :- </label>
                                        <input type="password" name="newpassconfirm" placeholder="Confirm New Password" class="form-control changepassword" title="Confirm New Password" data-toggle="tooltip" >
                                    	</div>
                                        
                                           					
                                        <div class="form-group">
                                            <input type="checkbox" style="float:left;" name="showpassword" id="showpasswordforchange">
                                            <label for="pwd" style="float:left;">Show Password</label>
                                        </div>

                                        
                                        <center><input type="submit" value="Submit" class="btn btn-info" name="submit"></center>
                            </form>
				</div></div>  
       			<div style="clear:both;">
            </div>         
             </div>                   
       		<?php
				}
			?>
        
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
