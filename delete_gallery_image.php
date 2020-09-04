<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');

	
	$delete=mysql_query("select * from clg_gallery where id='$_REQUEST[id]'");
	$delete1=mysql_fetch_array($delete);
	$targetdir1=dirname(__FILE__)."\\gallery\\";
	$targetdir2=dirname(__FILE__)."\\deleted_img\\";
	
	copy($targetdir1."/".$delete1[2],$targetdir2."/".$delete1[2]);
	unlink($targetdir1.$delete1[2]);
	mysql_query("delete from clg_gallery where id='$_REQUEST[id]'");
	
	
	$display=mysql_query("select * from clg_gallery");
	
?>

                    	<thead>
                        	<tr>
                            	<td>ID</td>
                                <td>Branch</td>
                                <td>Path</td>
                                <td>Date</td>
                                <td>Preview</td>
                                <td>Delete</td>
                            </tr>
                       	</thead>
                            <?php
							while($display2=mysql_fetch_array($display))
								{
									echo "<tr>";
									echo "<td>".$display2[0]."</td>";
									echo "<td>".$display2[1]."</td>";
									echo "<td>".$display2[2]."</td>";
									echo "<td>".$display2[3]."</td>";
									echo "<td><center><img class='img-responsive' style='width:50px;' src='gallery/".$display2[2]."'></center></td>";
									echo "<td onClick='delete_gallery_image(".$display2[0].")'><span class='glyphicon glyphicon-trash'></span></td>";
									echo "</tr>";
								}
							?>
