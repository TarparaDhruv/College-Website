<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');

	$delete=mysql_query("select * from clg_faculty where id = '$_REQUEST[id]'");
	$delete1=mysql_fetch_array($delete);
	mysql_query("delete from clg_faculty where id='$_REQUEST[id]'");	
	$targetdir1=dirname(__FILE__)."\\profile_img\\";
	unlink($targetdir1.$delete1[11]);
?>
<thead>
                                    <tr>    
                                        <td>ID</td>
                                        <td>FNAME</td>
                                        <td>LNAME</td>
                                        <td>POST</td>
                                        <td>QUALI.</td>
                                        <td>EMAIL</td>
                                        <td>CONTACT</td>
                                        <td>GENDER</td>
                                        <td>EXPERIENCE</td>
                                        <td>UPDATE</td>
                                        <td>DELETE</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $show=mysql_query("select * from clg_faculty where branch_code='$_REQUEST[branch_code]'");  
                                        while($show1=mysql_fetch_array($show))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $show1[0];?></td>
                                        <td><?php echo $show1[1];?></td>
                                        <td><?php echo $show1[3];?></td>
                                        <td><?php echo $show1[6];?></td>
                                        <td><?php echo $show1[7];?></td>
                                        <td><?php echo $show1[4];?></td>
                                        <td><?php echo $show1[8];?></td>
                                        <td><?php echo $show1[10];?></td>
                                        <td><?php
                                                echo $show1[13];
                                                
                                            ?>
</td>
                                        <td align="center"><a href="edit_faculty_reg.php?id=<?php echo $show1[0];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td align="center" onClick="update(<?php echo $show1[0];?>,<?php echo $_REQUEST['branch_code'];?>)"><span class="glyphicon glyphicon-trash"></span></td>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
 <script>
 	alert("SUCCESSFULLY DELETED");
 </script>