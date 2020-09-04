<?php
	session_start();
	error_reporting(0);
	$con=mysql_connect("localhost","root","") or die("CONNECTION IS FAILED");
	mysql_select_db("college",$con) or die("DATABASE IS NOT FOUND");


	if(isset($_REQUEST['login']))
	{
		$logincheck1 = mysql_query("select * from clg_admin");
		$logincheck = mysql_fetch_array($logincheck1);
		if($_REQUEST['email']=="$logincheck[0]" && $_REQUEST['password']=="$logincheck[1]")
		{
			$_SESSION['user']="admin";	
			header('location:adminhome.php');
		}
		else
		{
			header('location:index.php');
		}
	}
?>
<!--/*		var t=0;
		var c=0;
		function autologout()
		{
			t++;
			c=0;
			function fun()
			{	
				c++;
				if(c==10)
					window.location.href='logout.php';
			}
			if(t==1)
				setInterval(fun,1000);
		}
		$(document).ready(function (){
			autologout();	
			$(document).click(function (){
				autologout();	
			});
			$('body').keypress(function (){
				autologout();	
			});
		});
*/-->