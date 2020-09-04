
<?php
	
	require_once('connection.php');
    if(!isset($_SESSION['user']))
        header('location:index.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Faculty </title>

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
                        	
							<table class=" table table-responsive table-hover text-center" id="table_showdata">
                            		<tr style="font-weight:bold;">	
                                    	<td>FNAME</td>
                                        <td>LNAME</td>
                                        <td>DESIGNATION</td>
                                        <td>QUALI.</td>
                                        <td>EMAIL</td>
                                        <td>CONTACT</td>
                                        <td>EXP.</td>
                                        <td>UPDATE</td>
                                        <td>DELETE</td>
                                    </tr>
								<tbody>
                                	<?php
										$show=mysql_query("select * from clg_faculty where branch_code='$_REQUEST[branch_code]'");	
										while($show1=mysql_fetch_array($show))
										{
									?>
                                	<tr>
                                    	<td><?php echo $show1[1];?></td>
                                        <td><?php echo $show1[3];?></td>
                                        <td><?php echo $show1[6];?></td>
                                        <td><?php echo $show1[7];?></td>
                                        <td><?php echo $show1[4];?></td>
                                        <td><?php echo $show1[8];?></td>
                                        <td><?php 
												$date1=mysql_query("select DATEDIFF((select CURDATE()),'$show1[13]')");
												$date=mysql_fetch_array($date1);
												echo round($date[0]/365,1)." Years";
											?></td>
                                        <td ><a href="edit_faculty_reg.php?id=<?php echo $show1[0];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td onClick="delete_faculty(<?php echo $show1[0];?>,<?php echo $_REQUEST['branch_code'];?>)"><span class="glyphicon glyphicon-trash"></span></td>
                                        
                                    </tr>
                                    <?php
										}
									?>
                                </tbody>
                            </table>
			           				       
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