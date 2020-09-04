<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');

	mysql_query("delete from clg_downloads where id='$_REQUEST[id]'");
	$display=mysql_query("select * from clg_downloads") or die("Data is missing");	

?>
   <tr>
                          <th>Name</th>
                          <th>File Name</th>
                          <th>File Type</th>
                          <th>Upload Date</th>
                          <th>Remove</th>
                        </tr>
						<?php
						while($display2=mysql_fetch_array($display))
                        {
							echo "<tr>";
							echo "<td>".$display2[1]."</td>";
							echo "<td>".$display2[2]."</td>";
							echo "<td>".$display2[3]."</td>";
							echo "<td>".$display2[4]."</td>";
							echo "<td onClick='delete_download(".$display2[0].")'><span class='glyphicon glyphicon-trash'>X</span></td>";
							echo "</tr>";
						}
						?>
