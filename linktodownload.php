<?php
	
	require_once('connection.php');
	$id=$_REQUEST['id'];
	
	$xx=mysql_query("select * from clg_downloads where id=$id");
	$x=mysql_fetch_array($xx);
	header('location:files/'.$x[2]);

?>
