
<?php
	
	require_once('connection.php');
    if(!isset($_SESSION['user']))
        header('location:index.php');
	$set=0;
	if(isset($_REQUEST['submit']))
	{
		$ex=".".substr($_FILES['profile_img']['type'],6);
		$photo=mysql_query("select max(id) from clg_faculty");
		$photos=mysql_fetch_array($photo);
		
		if($photos=="")
		{
			$nm="1".$ex;
		}
		else
		{
			$nm=($photos[0]+1).$ex;
		}
		
		$path1="\profile_img\\".$nm;
		$path2=dirname(__FILE__).$path1;
	
		mysql_query("insert into clg_faculty values(0,'$_REQUEST[fname]','$_REQUEST[mname]','$_REQUEST[lname]','$_REQUEST[email]','$_REQUEST[branch_code]','$_REQUEST[post]','$_REQUEST[qualification]','$_REQUEST[contact]','$_REQUEST[ocontact]','$_REQUEST[gender]','$nm','$_REQUEST[birthdate]','$_REQUEST[start_date]')");
		move_uploaded_file($_FILES['profile_img']['tmp_name'],$path2);
		$set=1;
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Faculty Registration</title>

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
                        	
            		



            <center><h1 style="font-variant:small-caps;">Faculty Registration</h1></center>
            <div class="row">
            	<div class="col-md-offset-1 col-md-9" >
                	<form  action="" method="post"  enctype="multipart/form-data" name="form" >
                            			
                                        <br>
                                        <div class="form-group text-left">
                                        <label for="gender" style="float:left;">Initial :- &nbsp;</label>
                                 		<div class="radio-inline" >
    									<input type="radio" name="gender" value="Mr." required data-toggle="tooltip" title="Mr." > Mr.
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Ms." required data-toggle="tooltip" title="Ms."> Ms.  
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Mrs." required data-toggle="tooltip" title="Mrs."> Mrs.  
                                		</div>
                                        <div class="radio-inline">
    									<input type="radio" name="gender" value="Dr." required data-toggle="tooltip" title="Dr."> Dr.  
                                		</div>
                                        </div>
                                        
                      					<div class="form-group">
                                        <label for="fname" style="float:left;">First Name:-</label>
                                        <input autofocus type="text" name="fname" placeholder="First Name" class="form-control" data-toggle="tooltip" maxlength="25" required pattern="[a-zA-Z]{0,25}$" title="Enter Less Than 25 Alphabets."  onkeypress="return AllowAlphabet(event)">
                            	        </div>
                                        
                                        <div class="form-group">
                                        <label for="middlename" style="float:left;">Middlename:-</label>
                                        <input type="text" name="mname" placeholder="Middle Name" class="form-control" maxlength="25"  required pattern="[a-zA-Z]{0,25}$" data-toggle="tooltip" title="Enter Less Than 25 Alphabets." onkeypress="return AllowAlphabet(event)">
                                    	</div>
                                    	   
                                        <div class="form-group">
                                        <label for="lname" style="float:left;">Lastname:-</label>
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control" maxlength="25" required pattern="[a-zA-Z]{0,25}$" data-toggle="tooltip" title="Enter Less Than 25 Alphabets." onkeypress="return AllowAlphabet(event)">
                                    	</div>
                                        
                                                                                
                                        <div class="form-group">
                                        <label for="email" style="float:left;">Email:-</label>
                                       	<input type="email" name="email" id="email" placeholder="abc@example.com" class="form-control" pattern="^\S+@+\S+\.+\S+$" data-toggle="tooltip" title="Enter Email " >
                                    	</div>        
  									    
                                        <div class="form-group">
                                        <label for="branch_code" style="float:left;">Branch Code:-</label>
                                        <select name="branch_code" id="branch_code" class="form-control" required data-toggle="tooltip" title="Branch Code">
                                            <optgroup label="Select Branch Code">
                                                <option>02-AUTOMOBILE</option>
                                                <option>06-CIVIL</option>
                                                <option>09-ELECTRICAL</option>
                                                <option>16-IT</option>
                                                <option>19-MECHANICAL</option>
                                                <option>21-METALLURGY</option>
                                                <option>24-POWER ELECTRONICS</option>
                                                <option>28-TEXTILE PROCESSING</option>
                                                <option>29-TEXTILE MANUFACTURING</option>
                                                <option>1000-APPLIED MECHANICS</option>
                                                <option>1001-GENERAL</option>
                                                <option>1002-ADMIN</option>
                               </optgroup>
                                        </select>
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="post" style="float:left;">Designation:-</label>
                                        <select name="post" id="post" class="form-control" required  data-toggle="tooltip" title="Designation">
                                            <optgroup label="Select Designation">
                                                <option>HOD</option>
                                                <option>In Charge HOD</option>
                                                <option>Lecturer</option>
                                                <option>Lab Assistant</option>
                                                <option>Head Clerk</option>
                                                <option>Accountant</option>
                                                <option>Sr. Clerk</option>
                                                <option>Jr. Clerk</option>
                                                <option>Computer Operator</option>
                                                <option>Store Keeper</option>
                                                <option>Instructor</option>
                                                <option>Fitter</option>
                                                <option>Turner</option>
                                                <option>Librarian</option>
                                                <option>Peon</option>
                                                <option>Hamaal</option>
                                            </optgroup>
                                        </select>
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="Qualification" style="float:left;">Qualification</label>
                                        <select name="qualification" id="qualification" class="form-control" required  data-toggle="tooltip"  title="Qualification">
                                            <optgroup label="Select Qualification">
                                                <option>B.E.</option>
                                                <option>M.E.</option>
                                                <option>Ph.D.</option>
                                                <option>M.C.A</option>
                                                <option>M.Com</option>
                                                <option>M.A.</option>
                                                <option>B.Com</option>
                                                <option>B.A</option>
                                                <option>Diploma</option>
                                                <option>S.S.C.</option>
                                                <option>H.S.C</option>
                                                
											</optgroup>
                                        </select>
                                    	</div>
										
                                        <div class="form-group">
                                        <label for="contact" style="float:left;">Contact No:-</label>
                                        <input type="text" name="contact" maxlength="10" placeholder="Contact Number" class="form-control"  pattern="[0-9]{10}" data-toggle="tooltip" title="Enter 10 Digit Contact Number." onKeyPress="return isNumberKey(event)">
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="ocontact" style="float:left;">Optional Contact No:-</label>
                                        <input type="text" name="ocontact" maxlength="10" placeholder="Optional Contact Number" class="form-control" pattern="[0-9]{10}" data-toggle="tooltip" title="Enter 10 Digit Contact Number" onKeyPress="return isNumberKey(event)">
                                    	</div>

	                          			<div class="form-group">
                                        <label for="pimg" style="float:left;">Profile Photo:-</label>
                                    	<input type="file" name="profile_img"  class="form-control"  data-toggle="tooltip" title="Profile Image" required>
                                    	</div>
                                        
                                        <div class="form-group">
                                        <label for="bdte" style="float:left;">Birthdate:-</label>
                                        <input type="date" name="birthdate" class="form-control" required data-toggle="tooltip" title="Birthdate" max="1/1/2015">
                                    	</div>

                                    	<div class="form-group">
                                        <label for="st_date" style="float:left;">Start Date:-</label>
                                        <input type="date" name="start_date" class="form-control" required data-toggle="tooltip" title="Start Date" max="1/1/2016">
                                        </div>
                                        
                                        <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                            </form>
                   
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
	if($set==1)
	{
?>
<script>	
	alert("SUCCESSFULLY REGISTERED");
</script>
<?php
	}
?>