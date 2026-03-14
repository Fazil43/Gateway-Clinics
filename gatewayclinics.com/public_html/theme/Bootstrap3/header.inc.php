<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:      header.inc.php
 * @Package:   GetSimple
 * @Action:    Bootstrap3 for GetSimple CMS
 *
 *****************************************************/
# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$ThemeSettings = Bootstrap3_Settings();
$SelectedTheme = $ThemeSettings -> SelectedTheme;
if (!$SelectedTheme)
	$SelectedTheme = "Default";
$NavBarStyle = ($ThemeSettings -> InvertNavigationBar == 'true') ? 'navbar-inverse' : 'navbar-default';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="shortcut icon" href="<?php get_theme_url(); ?>/ico/favicon.png">

    <title><?php echo(get_custom_title_tag()); ?> - <?php get_site_name(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php get_theme_url(); ?>/css/bootstrap_<?php echo $SelectedTheme; ?>.min.css" rel="stylesheet" class="SelectedTheme">

    <!-- Custom styles for this template -->
    <link href="<?php get_theme_url(); ?>/css/Bootstrap3.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/font-awesome/css/font-awesome.min.css">
	<link href="<?php get_theme_url(); ?>/css/hover-dropdown-menu.css" rel="stylesheet" />
	<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_theme_url(); ?>/js/html5shiv.js"></script>
      <script src="<?php get_theme_url(); ?>/js/respond.min.js"></script>
    <![endif]-->
	  
 	<script src="<?php get_theme_url(); ?>/js/jquery-1.10.2.min.js"></script> 	   
    <script src="<?php get_theme_url(); ?>/js/jquery.cookie.js"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.tablesorter.min.js"></script>
    <script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/hover-dropdown-menu.js"></script>
	<script src="<?php get_theme_url(); ?>/js/jquery.sticky-kit.js"></script>
	
	  
    <?php get_header(); ?>
	  
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//gatewayclinics.com/stats/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->



</head>


  <body id="<?php get_page_slug(); ?>" class="boxed">
  	
  	<div class="container" >
<div id="wrap">
  	<div id="top-bar">
          
                <div class="row">
                    <div class="col-sm-12 link-hover-black">
                        <div class="col-sm-8 col-md-6" align="left">
							
                        	<span style="color:#fff"><i class="fa fa-phone"></i> <a href="tel:0422 2542244"><b> +(91)-(0422) 2542244 </b></a></span> 
			 				&nbsp; <a href="mailto:info@gatewayclinics.com"><i class="fa fa-envelope"></i> <b>info@gatewayclinics.com</b></a>
                        </div>
                        <!-- Top Social Icon -->
                        <div class="col-xs-12 col-sm-4 col-md-6">

                        	 <div class="navbar-right">
								 <div class="s-icons">
								 <a href="https://play.google.com/store/apps/details?id=inway.gatewayclinics.com" target="_blank"><img  width="115px" src="data/uploads/GooglePlay.png"></a>
                        	 	
                                 <?php get_component('s-icons'); ?>
                        		</div>
                        	</div>
                        </div>
						<!-- Top Contact -->
						
                        
                    </div>
                </div>
        
        </div>
        <header id="" class="sticky-navigation">
	<!-- Sticky Menu -->
	<div class="sticky-menu relative">
		<!-- navbar -->
		<div class="navbar navbar-default" role="navigation">
			
						<div class="navbar-header">
							<!-- Button For Responsive toggle -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Logo -->

							<a class="navbar-brand" href="<?php get_site_url(); ?>">
								 <?php
								if ($ThemeSettings -> Logo) {
									echo "<img src='" . $ThemeSettings -> Logo . "' alt='" . get_site_name(false) . "' class='img-responsive'>";
								} else {
									get_site_name();
								}
								?>
							</a>
						</div>
						<!-- Navbar Collapse -->
						<div class="navbar-collapse collapse">
							<!-- nav -->
							<ul class="nav navbar-nav" >
								<?php get_navigation_bootstrap(return_page_slug()); ?>
							</ul>
							<!-- Right nav -->
						</div>
						<!-- /.navbar-collapse -->
					
		</div>
		<!-- navbar -->
	</div>
	<!-- Sticky Menu -->
</header>
  
	   <?php
	if ($ThemeSettings -> DisplayOtherThemes == "true") {
		$ThemeUrl = get_theme_url(false);
		function AddThemeMenuItem($ThemeName) {
			global $SelectedTheme, $ThemeUrl;
			$Classes = ($ThemeName == $SelectedTheme) ? 'current active' : '';
			echo '<li class="' . $Classes . '"><a href="#" rel="' . $ThemeUrl . '/css/bootstrap_' . $ThemeName . '.min.css">' . $ThemeName . '</a></li>';
		}

		echo '<ul class="nav navbar-nav navbar-right">';
		echo '  <li class="dropdown">';
		echo '    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Themes <b class="caret"></b></a>';
		echo '    <ul class="dropdown-menu" id="ThemesMenu">';
		AddThemeMenuItem('Default');
		echo '      <li class="divider"></li>';
		AddThemeMenuItem('Amelia');
		AddThemeMenuItem('Cerulean');
		AddThemeMenuItem('Cosmo');
		AddThemeMenuItem('Cyborg');
		AddThemeMenuItem('Darkly');
		AddThemeMenuItem('Flatly');
		AddThemeMenuItem('Journal');
		AddThemeMenuItem('Lumen');
		AddThemeMenuItem('Paper');
		AddThemeMenuItem('Readable');
		AddThemeMenuItem('Sandstone');
		AddThemeMenuItem('Simplex');
		AddThemeMenuItem('Slate');
		AddThemeMenuItem('Spacelab');
		AddThemeMenuItem('Superhero');
		AddThemeMenuItem('United');
		AddThemeMenuItem('Yeti');
		echo '      <li class="divider"></li>';
		echo '      <li><a><input type="checkbox" id="chkInvertNavigationBar"' . ($ThemeSettings -> InvertNavigationBar == "true" ? 'checked="checked"' : '') . '/> <label for="chkInvertNavigationBar">Invert NavBar</label></a></li>';
		echo '    </ul>';
		echo '  </li>';
		echo '</ul>';
	}
?>

