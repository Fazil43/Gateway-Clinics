<?php

if (!defined('IN_GS')) { die('you cannot load this page directly.');

}

/****************************************************

 *

 * @File:      template.php

 * @Package:   GetSimple

 * @Action:    Bootstrap3 for GetSimple CMS

 *

 *****************************************************/

?> 
<?php
	include ('header.inc.php');
 ?>
<div class="page-header">
       	<div class="container"> 
  		<div class="col-md-6"><h1><?php get_page_title(); ?></h1> </div>
  	<div class="col-md-6"> 
  		<ul class="pull-right breadcrumb">
                        <li>
                            <a href="home.html">Home</a>
                        </li>
                        <li class="active"><?php get_page_title(); ?></li>
                    </ul>
     </div>
  </div>
  </div> 
  <div class=""> <?php get_page_content(); ?></div>
<?php
	include ('footer.inc.php');
 ?>
