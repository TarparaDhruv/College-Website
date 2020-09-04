<?php
	
	require_once('connection.php');
		if(!isset($_SESSION['user']))
		header('location:index.php');

  	
	$delete=mysql_query("select * from clg_article_addon_img where article_id='$_REQUEST[id]'");
	$delete1=mysql_fetch_array($delete);
	$targetdir1=dirname(__FILE__)."\\article_img\\";
	$targetdir2=dirname(__FILE__)."\\deleted_img\\";
	
	mysql_query("delete from clg_article where article_id='$_REQUEST[id]'");
	mysql_query("delete from clg_article_addon_img where article_id='$_REQUEST[id]'");
	mysql_query("delete from clg_article_addon_link where article_id='$_REQUEST[id]'");
	copy($targetdir1."/".$delete1[2],$targetdir2."/".$delete1[2]) or die("not copied");
	unlink($targetdir1.$delete1[2]);
	$display=mysql_query("select * from clg_article") or die("Data is missing");	
	
?>
<table class="table table-responsive table-hover text-center">
<tr>
                        	<td>ID</td>
                            <td>Title</td>
                            <td>Subtitle</td>
                            <td>Published Date</td>
                            <td>Author</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php
						 while($display2=mysql_fetch_array($display))
						 {
							 echo "<tr>";
							 echo "<td>$display2[0]</td>";
							 echo "<td>$display2[1]</td>";
							 echo "<td>$display2[3]</td>";
							 echo "<td>$display2[4]</td>";
							 echo "<td>$display2[5]</td>";
							 echo "<td><a><span class='glyphicon glyphicon-pencil'></span></a></td>";
							 echo "<td><a onClick='delete_article($display2[0])'><span class='glyphicon glyphicon-trash'></span></a></td>";
							 echo "</tr>";
						 }
						
						?>
	</table>