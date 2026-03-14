<?php
include("connection/connection.php");
?>
<ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutdet.php">About Us</a>
                 <ul class="submenu">
                 <?php $sel="SELECT  * FROM  $_table24";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
		while($fetch_sr_data=mysql_fetch_array($result))
		{ 
        	$c_id=$fetch_sr_data[id];
			$category=$fetch_sr_data[category];
			$encoded_cid=base64_encode($c_id);?>
            
                       <li><a href="aboutus.php?cid=<?php echo $encoded_cid;?>"><?php echo $category;?></a></li>
                       <?php
		}
		?></ul>
                </li>
                <li><a href="#">Services</a>
                    <ul class="submenu">
                    <?php $sel="SELECT  * FROM  $_table23";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
		while($fetch_sr_data=mysql_fetch_array($result))
		{ 
        	$c_id=$fetch_sr_data[id];
			$category1=$fetch_sr_data[category];
			$encoded_cid1=base64_encode($c_id);?>
                       	<li><a href="services.php?cid=<?php echo $encoded_cid1;?>"><?php echo $category1;?></a></li>
					<?php
		}
		?>
                    </ul>
                </li>
                <li><a href="">Gallery</a>
                    <ul class="submenu">
					<li><a href="gallery.php">Photo Gallery</a></li>
					<li><a href="video-gallery.php">Video Gallery</a></li>
                    </ul>
                </li>
                <li><a href="commondet.php?cid=<?php echo $encoded_cid2;?>">Categories</a>
                 <ul class="submenu">
                 <?php $sel="SELECT  * FROM  $_table83";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
		while($fetch_sr_data=mysql_fetch_array($result))
		{ 
        	$c_id=$fetch_sr_data[id];
			$category4=$fetch_sr_data[category];
			$encoded_cid2=base64_encode($c_id);?>
                    
                       	<li><a href="commondet.php?cid=<?php echo $encoded_cid2;?>"><?php echo $category4;?></a></li>
					
                    <?php
		}
		?>
            </ul>    </li>
                <li><a href="medical.php">Medical Tourism</a></li>
                <li><a href="#">Contact Us</a>
                 <ul class="submenu">
					<li><a href="contact.php">Coimbatore</a></li>
					<li><a href="chennai.php">Chennai</a></li>
                    </ul>
                </li>
                
            </ul>