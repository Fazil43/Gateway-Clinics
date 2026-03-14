<?php
@ob_start();
error_reporting(0);
include("connection/connection.php");
$root=$_SERVER['root']."/doctorweb"; // local

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gateway Clinics</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 	
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<style type="text/css">
@font-face {
  font-family: 'MyWebFont';
  src: url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.eot'); /* IE9 Compat Modes */
  src: url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.woff') format('woff'), /* Modern Browsers */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/MyriadPro-BoldCond/613952637-MyriadPro-BoldCond.svg#svgFontName') format('svg'); /* Legacy iOS */
}
@font-face {
  font-family: 'MyWebFont2';
  src: url('fonts/DroidSans/351806641-DroidSans.eot'); /* IE9 Compat Modes */
  src: url('fonts/DroidSans/351806641-DroidSans.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('fonts/DroidSans/351806641-DroidSans.woff') format('woff'), /* Modern Browsers */
       url('fonts/DroidSans/351806641-DroidSans.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('fonts/DroidSans/351806641-DroidSans.svg#svgFontName') format('svg'); /* Legacy iOS */
}
</style>
<!--title animation-->
<script type="text/javascript">
function tb8_makeArray(n){
this.length = n;
return this.length;
}
tb8_messages = new tb8_makeArray(3);
tb8_messages[0] = "Gateway Clinics";
tb8_messages[1] = "Gateway Clinics";
tb8_messages[2] = "Gateway Clinics";
tb8_rptType = 'infinite';
tb8_rptNbr = 5;
tb8_speed = 100;
tb8_delay = 2000;
var tb8_counter=1;
var tb8_currMsg=0;
var tb8_tekst ="";
var tb8_i=0;
var tb8_TID = null;
function tb8_pisi(){
tb8_tekst = tb8_tekst + tb8_messages[tb8_currMsg].substring(tb8_i, tb8_i+1);
document.title = tb8_tekst;
tb8_sp=tb8_speed;
tb8_i++;
if (tb8_i==tb8_messages[tb8_currMsg].length){
tb8_currMsg++; tb8_i=0; tb8_tekst="";tb8_sp=tb8_delay;
}
if (tb8_currMsg == tb8_messages.length){
if ((tb8_rptType == 'finite') && (tb8_counter==tb8_rptNbr)){
clearTimeout(tb8_TID);
return;
}
tb8_counter++;
tb8_currMsg = 0;
}
tb8_TID = setTimeout("tb8_pisi()", tb8_sp);
}
tb8_pisi()
</script>
<!--end title animation-->
<link rel="shortcut icon" href="images/fav.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="css/media.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/ndrop.css" rel="stylesheet" type="text/css">

<!-- banner -->
<link rel="stylesheet" type="text/css" href="css/2.css" />
<script type="text/javascript" src="js/a.js"></script>
<!-- end banner -->


<!-- gallery -->
    <!-- CSS Global Compulsory-->
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">           
    <link rel="stylesheet" href="assets/css/effects.css">           
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1">    
    <!-- end Gallery -->

</head>

<body>
<div class="top">
<div class="container">

<div class="row-fluid">
<div class="span12">
<div class="span3"><img src="images/logo.png"></div>
<div class="span2"><div style="padding-top:20px;"><!-- <a href="#"><img src="images/company.jpg"></a> --></div></div>
<div class="span7 pull-right">
<div class="button">
<?php include("headermenu.php");?>
</div>
</div>
</div>
</div>

</div>
</div><!-- end top -->
<div style="padding-top:2px; background-color:#0b5789;"></div>
<div class="banner">
<div id="wowslider-container1">
<div class="ws_images"><ul>
<?php
$sql="select * from $_table50";
$rs=mysql_query($sql,$link);
$rscount=mysql_num_rows($rs);
if($rscount!=0)
{
while($rsdata=mysql_fetch_array($rs))
{
$c_id=$rsdata['id'];
$image4=$rsdata['image'];
$encoded_cid=base64_encode($c_id);
?>

<li><img src="<?php echo $root;?>/admin/<?php echo $image4;?>" alt="" title="" id="wows1_0"/></li>
<?php
}
}
?>
</ul></div>
</div>
</div>
<div style="padding-top:2px; background-color:#0b5789;"></div>
<div style="padding-top:20px;"></div>

<div class="welocme">
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="span3">
<div class="wid"><h4 style="text-align:center; background-color:#0B5789; color:#FFF; margin:0; padding-top:10px; padding-bottom:10px;" class="wid2">Our Services</h4>
<ul class="wid3"><?php $sel="SELECT  * FROM  $_table23";
		$result=mysql_query($sel,$link) or die (mysql_error());
		$i="1";
		while($fetch_sr_data=mysql_fetch_array($result))
		{ 
        	$c_id=$fetch_sr_data[id];
			$category=$fetch_sr_data[category];
			$encoded_cid=base64_encode($c_id);?>

<li><a class="se" href="?cid=<?php echo $encoded_cid;?>"><?php echo $category;?></a></li>
<?php
		}
		?>
</ul></div>
</div>

<div class="span9"><h4 class="ali4" style="padding-bottom:20px;">Photo Gallery</h4>


<div class="gallery">
<?php
$sql="select * from $_table504";
$rs=mysql_query($sql,$link);
$rscount=mysql_num_rows($rs);
if($rscount!=0)
{
while($rsdata=mysql_fetch_array($rs))
{
$c_id=$rsdata['id'];
$image45=$rsdata['image'];
$encoded_cid=base64_encode($c_id);
?>
  
  <?php
  if($countt%3==0)
  {
  ?>   

  <ul class="thumbnails"> 
   <?php
  
  if($Count5%3==0)
  {
  
  ?>
   <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li> <?php
  }
  
 elseif($Counti%3==1)
  {
  
  ?>

          <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li>
         <?php
  }
  
 elseif($Counti%3==2)
  {
  
  ?>
          <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li>
         
          <ul class="thumbnails"> 
   <?php
  
  if($Counti%3==0)
  {
  
  ?>
   <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li> <?php
  }
  
 elseif($Counti%3==1)
  {
  
  ?>

          <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li>
         <?php
  }
  
 elseif($Counti%3==2)
  {
  
  ?>
          <li class="span4">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="" href="<?php echo $root;?>/admin/<?php echo $image45;?>">
       <div class="overlay-zoom">	
                        <img src="<?php echo $root;?>/admin/<?php echo $image45;?>" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
         </li>
 
         </ul>
         
      
<?php  
  }
  }
  }
}

}?>

   
        </div><!-- end gallery -->





</div>

</div>
</div>
</div>
</div>





<div class="footer">
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="span3">
<div class="new">
<h4 class="ali6">Endoscopy Atlas</h4>
<div class="row-fluid">
<div class="span12">
<div class="span6"><center><img src="images/foo.jpg"></center><h5 style="text-align:center; color:#FFF;">Normal pylorus</h5></div>
<div class="span6"><center><img src="images/foo2.jpg"></center><h5 style="text-align:center; color:#FFF;">Schatzki's ring</h5></div>
</div>
</div>
</div>
<h4 class="ali2"><a href="http://marvelouswebsolutions.com/doctorweb/services.php?cid=MTI=">Read More</a></h4>
</div>

<div class="span3">
<div class="new new2">
<h4 class="ali6">News and Events</h4>
<marquee loop="true" onMouseOut="start();" onMouseOver="stop();">
<?php
$sql="select * from $_table58";
$rs=mysql_query($sql,$link);
$rscount=mysql_num_rows($rs);
if($rscount!=0)
{
while($rsdata=mysql_fetch_array($rs))
{
$c_id=$rsdata['id'];
$image=$rsdata['image'];
$image2=$rsdata['image2'];
$encoded_cid=base64_encode($c_id);
?>

<a href="news.php?cid=<?php echo $encoded_cid5;?>"><img src="<?php echo $root;?>/news/<?php echo $image;?>">
</a>
<?php
}
}
?>
</marquee>
</div>
</div>

<div class="span3">
<div class="new new3">
<h4 class="ali6">Contact Us</h4>
<b>Dr. K. SENDHIL KUMAR</b><br/>
MS, FICS, FACS (USA), DNB (Surg. Gastro) <br/>
Surgical Gastroenterologist & Laparoscopic Surgeon<br/><br/>

43, Periyasamy Road (West),<br/>
Behind Eye Foundation, R.S. Puram,<br/>
Coimbatore - 641 002,<br/>
Tamil Nadu, India.<br/><br/>

Phone : 0422 2542244<br/>
Mobile : 9245731318<br/>
</div>
</div>

<div class="span3">
<div class="new">
<h4 class="ali6">Information</h4>
<ul class="ali7">
<li>Home</li>
<li>About Us</li>
<li>Services</li>
<li>Gallery</li>
<li>Categories</li>
<li>Medical Tourism</li>
<li>Contact Us</li>
</ul>
<h4 class="ali6">Follow Us</h4>
<a href="https://www.facebook.com/gatewayclinics.coimbatore" target="_blank"><img src="images/facebook.png"></a>
<a href="https://twitter.com/gatewayclinics" target="_blank"><img src="images/twitter.png"></a>
<a href="https://www.linkedin.com/hp/?dnr=WOaPpZM66aLsnl3rWx8rDUPB1Kyp_DEHLy7y&trk=nav_responsive_tab_home" target="_blank"><img src="images/linkedin.png"></a>
<a href="https://plus.google.com/107394388861722250197/posts?utm_source=embedded&utm_medium=googleabout&utm_campaign=link" target="_blank"><img src="images/googleplus.png"></a>
<a href="https://in.pinterest.com/gatewayclinics/" target="_blank"><img src="images/p1.png"></a>
<a href="#" target="_blank"><img src="images/p2.png"></a>
<a href="#" target="_blank"><img src="images/p3.png"></a>
</div>
</div>

</div>
</div>

<hr/>
<div style="padding-top:15px;">
<div class="row-fluid"><div class="span12">
<div class="span4"><p style="color:#FFF;">Copyright &#169; 2015 Gateway Clinics</p></div>
<div class="span4 pull-right"><p class="pull-right" style="color:#FFF;">Designed by : <a href="http://marvelouswebsolutions.com" target="_blank" class="ss">Marvelouswebsolutions.com</a></p></div>
</div></div>
</div>
</div>
</div>
<!-- gallery -->
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initFancybox();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->
<!-- end gallery -->

<!-- banner -->
<script type="text/javascript" src="js/d.js"></script>
<script type="text/javascript" src="js/e.js"></script>
<!-- end banner -->

       
<script type="text/javascript" src="js/back-to-top.js"></script>
<!-- end click to top -->

 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
