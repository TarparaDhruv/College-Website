
<?php
	
	require_once('connection.php');

	if(!isset($_SESSION['user']))
	header('location:index.php');
	
	$display=mysql_query("select * from clg_faculty where id='$_REQUEST[id]'");	
	$display1=mysql_fetch_array($display);
	$update=0;
	
	if(isset($_REQUEST['upload']))
	{
		$path1="\profile_img\\".$display1[11];
		$path2=dirname(__FILE__).$path1;
		
		if(move_uploaded_file($_FILES['profile_img']['tmp_name'],$path2))
			{	header('location:edit_faculty_reg.php?id='.$display1[0]);}
			
	}
	
	if(isset($_REQUEST['update']))
	{
		mysql_query	("update clg_faculty set fname='$_REQUEST[fname]',mname='$_REQUEST[mname]',lname='$_REQUEST[lname]',email='$_REQUEST[email]',branch_code='$_REQUEST[branch_code]',post='$_REQUEST[post]',qualification='$_REQUEST[qualification]',contact='$_REQUEST[contact]',ocontact='$_REQUEST[ocontact]',gender='$_REQUEST[gender]',birthdate='$_REQUEST[birthdate]',start_date='$_REQUEST[start_date]' where id='$_REQUEST[id]'") or die("DATA UPDATE FAILED");
	header('location:faculty_data_show.php?branch_code='.$_REQUEST[branch_code].'');
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
<style>
#profile_image_show
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
	function profile_image_change(str)
	{
		if(str=='open')
		{
			$("#profile_image_show").css("display","block");
		}
		if(str=='close')
		{
			$("#profile_image_show").css("display","none");
		}

	}
</script>
</head>

<body>
	
	<div id="admin_form" ></div>	
    <div id="profile_image_show">
    	
        <div class="col-md-1 col-xs-1">
        </div>
        
        <div class="col-md-10 col-xs-10" >
            <div class="row">
            <div class="col-md-offset-4 col-md-4 " style="background:white;box-shadow:0px 0px 33px black;border-radius:5px;">

            	<form role="form" method="post" action="" enctype="multipart/form-data">
               	  <button class="btn-sm btn btn-danger" type="button" style="float:right;position:absolute;right:0;" onClick="profile_image_change('close')">X</button>
                	<br>
                    <div style="font-variant:small-caps;font-size:18px; font-weight:bold;"><center>UPLOAD IMAGE</center></div>
                    
                    <div class="form-group">
                    	<label for="email" style="float:left;">New Profile Image:-</label>
                    	<input type="file" class="form-control" name="profile_img" placeholder="Select New Image" autofocus required>
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
       					<div class="col-md-2 col-sm-2 col-xs-12 admin_sidemenu">
                        	<?php
								require_once('adminsidemenu.php');
							?>
                        </div>
                
                	<div class="col-md-10 col-sm-10 col-xs-12" >
                    	
                        <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-10" >
                        	
            		

      
            <center><h1 style="font-variant:small-caps;">Edit Faculty </h1></center>
            <div class="row">

            	<div class="col-md-offset-1 col-md-9" >
                
                	                	<form  action="" method="post"  enctype="multipart/form-data" name="form" class="forleftlabel">
                                        <br>
                                        <div class="form-group">
                                        <label for="gender" style="float:left;">Initial :-&nbsp; </label>
													
                                        <div class="radio-inline" >
    									<input type="radio" name="gender" value="Mr." required data-toggle="tooltip" title="MR" <?php if($display1[10]=="Mr.") echo "checked"; ?>> Mr
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Ms." required data-toggle="tooltip" title="MS" <?php if($display1[10]=="Ms.") echo "checked"; ?>> Ms 
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Mrs." required data-toggle="tooltip" title="MRS" <?php if($display1[10]=="Mrs.") echo "checked"; ?>> Mrs 
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Dr." required data-toggle="tooltip" title="DR" <?php if($display1[10]=="Dr.") echo "checked"; ?>> Dr 
                                		</div>
                            			</div>
                      					<div class="form-group">
                                        <label for="fname" style="float:left;">First Name:-</label>
                                        <input autofocus type="text" name="fname" placeholder="First Name" class="form-control" data-toggle="tooltip" maxlength="25" required pattern="[a-zA-Z]{0,25}$" title="Enter Less Than 25 Alphabets."  onkeypress="return AllowAlphabet(event)" value="<?php echo $display1[1];?>">
                            	        </div>
                                        
                                        <div class="form-group">
                                        <label for="middlename" style="float:left;">Middlename:-</label>
                                        <input type="text" name="mname" placeholder="Middle Name" class="form-control" maxlength="25"  required pattern="[a-zA-Z]{0,25}$" data-toggle="tooltip" title="Enter Less Than 25 Alphabets." onkeypress="return AllowAlphabet(event)" value="<?php echo $display1[2];?>">
                                    	</div>
                                    	   
                                        <div class="form-group">
                                        <label for="lname" style="float:left;">Lastname:-</label>
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control" maxlength="25" required pattern="[a-zA-Z]{0,25}$" data-toggle="tooltip" title="Enter Less Than 25 Alphabets." onkeypress="return AllowAlphabet(event)" value="<?php echo $display1[3];?>">
                                    	</div>
                                        
                                                                                
                                        <div class="form-group">
                                        <label for="email" style="float:left;">Email:-</label>
                                       	<input type="email" name="email" id="email" placeholder="abc@example.com" class="form-control" pattern="^\S+@+\S+\.+\S+$" data-toggle="tooltip" title="Enter Email " value="<?php echo $display1[4];?>">
                                    	</div>        
  									    
                                        <div class="form-group">
                                        <label for="branch_code" style="float:left;">Branch Code:-</label>
                                        <select name="branch_code" id="branch_code" class="form-control" required data-toggle="tooltip" title="Branch Code">
                                            <optgroup label="Select Branch Code">
                                                <option <?php if($display1[5]=="2"){ ?>selected<?php }?>>02-AUTOMOBILE</option>
                                                <option <?php if($display1[5]=="6"){ ?>selected<?php }?>>06-CIVIL</option>
                                                <option <?php if($display1[5]=="9"){ ?>selected<?php }?>>09-ELECTRICAL</option>
                                                <option <?php if($display1[5]=="16"){ ?>selected<?php }?>>16-IT</option>
                                                <option <?php if($display1[5]=="19"){ ?>selected<?php }?>>19-MECHANICAL</option>
                                                <option <?php if($display1[5]=="21"){ ?>selected<?php }?>>21-METALLURGY</option>
                                                <option <?php if($display1[5]=="24"){ ?>selected<?php }?>>24-POWER ELECTRONICS</option>
                                                <option <?php if($display1[5]=="28"){ ?>selected<?php }?>>28-TEXTILE PROCESSING</option>
                                                <option <?php if($display1[5]=="29"){ ?>selected<?php }?>>29-TEXTILE MANUFACTURING</option>
                                                <option <?php if($display1[5]=="29"){ ?>selected<?php }?>>1000-APPLIED MECHANICS</option>
                                                <option <?php if($display1[5]=="29"){ ?>selected<?php }?>>1001-GENERAL</option>
                                                <option <?php if($display1[5]=="29"){ ?>selected<?php }?>>1002-ADMIN</option>
                          
                                            </optgroup>
                                        </select>
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="post" style="float:left;">Designation</label>
                                        <select name="post" id="post" class="form-control" required  data-toggle="tooltip" title="Designation">
                                            <optgroup label="Select Post">
                                                <option <?php if($display1[6]=="HOD"){ ?>selected<?php }?>>HOD</option>
                                                <option <?php if($display1[6]=="In Charge HOD"){ ?>selected<?php }?> >In Charge HOD</option>
                                                <option  <?php if($display1[6]=="Lecturer"){ ?>selected<?php }?>>Lecturer</option>
                 
                                                <option <?php if($display1[6]=="Jr. Lecturer"){ ?>selected<?php }?>>Lab Assistant</option>
                                                <option <?php if($display1[6]=="Head Clerk"){ ?>selected<?php }?>>Head Clerk</option>
                                                <option <?php if($display1[6]=="Accountant"){ ?>selected<?php }?>>Accountant</option>
                                                <option <?php if($display1[6]=="Sr. Clerk"){ ?>selected<?php }?>>Sr. Clerk</option>
                                                <option <?php if($display1[6]=="Jr. Clerk"){ ?>selected<?php }?>>Jr. Clerk</option>
                                                <option <?php if($display1[6]=="Store Keeper"){ ?>selected<?php }?>>Store Keeper</option>
                                                <option <?php if($display1[6]=="Computer Operator"){ ?>selected<?php }?>>Computer Operator</option>
                                                <option <?php if($display1[6]=="Librarian"){ ?>selected<?php }?>>Librarian</option>
                                                <option <?php if($display1[6]=="Instructor"){ ?>selected<?php }?>>Instructor</option>
                                                <option <?php if($display1[6]=="Fitter"){ ?>selected<?php }?>>Fitter</option>
                                                <option <?php if($display1[6]=="Turner"){ ?>selected<?php }?>>Turner</option>
                                                <option <?php if($display1[6]=="Peon"){ ?>selected<?php }?>>Peon</option>
                                                <option <?php if($display1[6]=="Hamaal"){ ?>selected<?php }?>>Hamaal</option>



                                            </optgroup>
                                        </select>
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="Qualification" style="float:left;">Qualification</label>
                                        <select name="qualification" id="qualification" class="form-control" required  data-toggle="tooltip"  title="Qualification">
                                            <optgroup label="Select Qualification">
                                                <option <?php if($display1[7]=="B.E."){?>selected<?php }?>>B.E.</option>
                                                <option <?php if($display1[7]=="M.E."){?>selected<?php }?>>M.E.</option>
                                                <option <?php if($display1[7]=="Ph.D."){?>selected<?php }?>>Ph.D.</option>
                                                <option <?php if($display1[7]=="Diploma"){?>selected<?php }?>>Diploma</option>
                                                <option <?php if($display1[7]=="M.C.A."){?>selected<?php }?>>M.C.A.</option>
                                                <option <?php if($display1[7]=="S.S.C."){?>selected<?php }?>>S.S.C.</option>
                                                <option <?php if($display1[7]=="H.S.C."){?>selected<?php }?>>H.S.C.</option>
                                                <option <?php if($display1[7]=="M.Com"){?>selected<?php }?>>M.Com</option>
                                                <option <?php if($display1[7]=="M.A."){?>selected<?php }?>>M.A.</option>
                                                <option <?php if($display1[7]=="B.Com"){?>selected<?php }?>>B.Com</option>                                          
                                                <option <?php if($display1[7]=="B.A."){?>selected<?php }?>>B.A.</option>
											</optgroup>
                                        </select>
                                    	</div>
										
                                        <div class="form-group">
                                        <label for="contact" style="float:left;">Contact No:-</label>
                                        <input type="text" name="contact" maxlength="10" placeholder="Contact Number" class="form-control" pattern="[0-9]{10}" data-toggle="tooltip" title="Enter 10 Digit Contact Number." onKeyPress="return isNumberKey(event)" value="<?php echo $display1[8];?>">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="ocontact" style="float:left;">Optional Contact No:-</label>
                                        <input type="text" name="ocontact" maxlength="10" placeholder="Optional Contact Number" class="form-control" pattern="[0-9]{10}" data-toggle="tooltip" title="Enter 10 Digit Contact Number" onKeyPress="return isNumberKey(event)" value="<?php echo $display1[9];?>">
                                    	</div>

    
                              		   <div class="form-group">
                                        <label for="bdte" style="float:left;">Birthadte:-</label>
                                        <input type="date" name="birthdate" class="form-control" required data-toggle="tooltip" title="Birthdate" value="<?php echo $display1[12];?>">
                                    	</div>

                                    	<div class="form-group">
                                        <label for="st_date" style="float:left;">Start Date:-</label>
                                        <input type="date" name="start_date" class="form-control" required data-toggle="tooltip" title="Start Date" value="<?php echo $display1[13];?>">
                                        </div>
                                        
                                        <center><input type="submit" value="Submit" class="btn btn-info" name="update"></center>
                            </form>

                   
                </div>
              <div class="col-md-2 col-sm-2 col-xs-2" style="text-align:center;border:1px solid grey;box-shadow:2px 2px 2px black;cursor:pointer;">
              		
					<center>
                        <img src="profile_img\<?php echo $display1[11];?>" class="img-responsive" alt="<?php echo $display1[1] ?>" style="width:150px;max-height:200px;;padding:10px;" onClick="profile_image_change('open');">
                    </center>
                </div>
     
             </div>
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

<?php
	if($update==1)
	{
?>
<script>
	alert("Successfully Updated");
</script>
<?php
	}
?>

