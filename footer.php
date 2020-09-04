<div class="row text-sm" style="word-break:keep-all;" >
	<div class="col-md-5 col-sm-5 col-xs-5" >
    	
        Dr. S & SS Ghandhy College &copy; 
		<?php
			 $s=getdate();
			 echo $s['year'];
		?> | Designed By JDV
    </div>
    <div class="col-md-7 col-sm-7 col-xs-7">
    
    	<ul class="list-unstyled list-inline">
        	<li><a role="button" href="contactus.php">Contact Us</a></li>
            <li><a role="button" href="usefulllink.php">Links</a></li>
            <li><a role="button" href="download.php">Downloads</a></li>
            <li><a role="button" href="infrastructure.php">Infrastructure</a></li>
            
            <?php
				if(isset($_SESSION['user']))
				{
			?>
            <li><a role="button" href="logout.php">Log out</a></li>
            <li><a role="button" href="adminhome.php" >Admin Panel</a></li>
            <?php
				}
				else
				{
			?>
            <li><a role="button" onClick="adminlogin('open');">Admin</a></li>
            <?php
				}
			?>

        </ul>
    
    </div>
</div>
