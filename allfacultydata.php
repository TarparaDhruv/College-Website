<?php
	require_once('connection.php');
	if(!isset($_SESSION['user']))
		header('location:index.php');

?>
	<style>
		table tr td
		{
			padding:10px;
			
		}
	</style>

<table  class="table-responsive table-hover table-bordered"  cellpadding="5px" cellspacing="5px">
	<thead>
    	<td>ID</td>
        <td>FNAME</td>
        <td>MNAME</td>
        <td>LNAME</td>
        <td>EMAIL</td>
        <td>BRANCH CODE</td>
        <td>DELETE</td>
        <td>UPDATE</td>
    </thead>
    <?php
	
		$alldata=mysql_query("select * from clg_faculty");
		while($alldata1=mysql_fetch_array($alldata))
		{
	?>
    <tr>
		<td><?php echo $alldata1[0];?></td>
        <td><?php echo $alldata1[1];?></td>
        <td><?php echo $alldata1[2];?></td>
        <td><?php echo $alldata1[3];?></td>
        <td><?php echo $alldata1[4];?></td>
        <td><?php echo $alldata1[5];?></td>
        <td>X</td>
        <td>&radic;</td>
            
    </tr>
    <?php
		}
	?>
</table>
