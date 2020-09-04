<?php
	require_once('connection.php');

	if($_REQUEST['str']=="show")
	{
		$img_show= mysql_query("select * from clg_gallery where id='$_REQUEST[idimage]'") or die("Data is missing");
		$img_show1=mysql_fetch_array($img_show);
?>
<div>
    <img src="gallery/<?php echo $img_show1[2];?>" style="padding:10px;width:500px;" alt="<?php echo $img_show1[2]; ?>">
    </div>
<?php
	}
	elseif($_REQUEST['str']=="next")
	{
		$img_next= mysql_query("select * from clg_gallery where id='$_REQUEST[idnext]'") or die("Data is missing");
		$img_next1=mysql_fetch_array($img_next);	
?>
	<div>
    <img src="gallery/<?php echo $img_next1[2];?>" class="img-responsive" height="500px">
    </div>
<?php
	}
	elseif($_REQUEST['str']=="previous")
	{
		$img_previous= mysql_query("select * from clg_gallery where id='$_REQUEST[idprevious]'") or die("Data is missing");
		$img_previous1=mysql_fetch_array($img_previous);	

?>
	<div>
    <img src="gallery/<?php echo $img_previous1[2];?>" class="img-responsive" height="500px">
    </div>
<?php
	}
	else if($_REQUEST['str']=="delete")
	{
		mysql_query("delete from clg_gallery where id='$_REQUEST[iddelete]'");
		$iddelete=$_REQUEST['iddelete']-1;
		$img_delete= mysql_query("select * from clg_gallery where id=$iddelete") or die("Data is missing");
		$img_delete1=mysql_fetch_array($img_delete);	
?>
	<div>
    <img src="gallery/<?php echo $img_delete1[2];?>" class="img-responsive" height="500px">
    </div>
<?php
	}
?>