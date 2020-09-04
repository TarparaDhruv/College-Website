<?php
	
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');
	
	mysql_query("delete from clg_recruited where id='$_REQUEST[id]'") or die("ERROR IN DELETATION OF RECRUITED ");
?>

					<table class="table table-responsive table-hover text-center" id="recruited_show_table">
                      <tr style="font-weight:bold;">
                          <td>ID</td>
                          <td>Name Of Company</td>
                          <td>Date of Campus Interview</td>
                          <td>No. of Students</td>
                          <td>Edit</td>
                          <td>Delete</td>
                        </tr>
						<?php
						$display=mysql_query("select * from clg_recruited");
						while($display2=mysql_fetch_array($display))
                        {
							echo "<tr>";
							echo "<td>".$display2[0]."</td>";
							echo "<td>".$display2[1]."</td>";
							echo "<td>".$display2[2]."</td>";
							echo "<td>".$display2[3]."</td>";
							echo "<td><a href='editrecruited.php?id=".$display2[0]."'><span class='glyphicon glyphicon-pencil'></span></a></td>";
							echo "<td onClick='delete_recruited(".$display2[0].")'><span class='glyphicon glyphicon-trash'></span></td>";
							echo "</tr>";
						}
						?>
                   </table>
