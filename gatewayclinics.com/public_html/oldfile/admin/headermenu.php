<?php


$root=$_SERVER['root']."/doctorweb"; // local
?>
<div id="head">
  <h1><a href="#"><?php echo $_SESSION['SESS_USER_NAM'];?> </a></h1>
				<div class="right">
					<p>
						Welcome <a href="#"><strong><?php echo $_SESSION['SESS_USER_NAME'];?></strong></a> | 
					
						<a href="<?php echo $root?>/admin/viewprofile.php?<?php echo $random;?>">Profile Settings</a> |
						<a href="<?php echo $root?>/admin/logout.php?<?php echo $random;?>">Logout</a>
					</p>
				</div>
</div>