<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:      footer.inc.php
 * @Package:   GetSimple
 * @Action:    Bootstrap3 for GetSimple CMS
 *
 *****************************************************/
?>

<div class="footer-top get-a-quote">

	<p>
		Need A Help? 
                    <a class="black" href="contact-us.html">Consult Now</a>
	</p>

</div>

<footer>
	<div class="footer-main">

		<div class="row">
			<div class="col-lg-3">
				<h3>ABOUT US</h3>
				<P align="justify">
					<?php get_component('about-us'); ?>
				</P>
			</div>
			<div class="col-lg-3">

				<h3>QUICK LINKS</h3>
				<!--<?php get_allPages(return_page_slug()); ?>-->
				<P>
<?php get_component('footer'); ?>
				</P>
			</div>
			<div class="col-lg-3">
				<h3>OUR LOCATION</h3>
				<P align="justify">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8062.20464657578!2d76.94835244146216!3d11.01274608924809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8588d339b0a19%3A0x591afebe5d3207c5!2sGateway+clinic!5e0!3m2!1sen!2sin!4v1444130601234" width="100%" height="200" frameborder="0" style="border:#e1e1e1 solid 1px"  allowfullscreen></iframe>
               </P>
				
			</div>
			<div class="col-lg-3">
				<h3>ADDRESS</h3>
				<?php get_component('contact-us'); ?>
				<br>
				<br>
				<i class="fa fa-phone"></i> Phone : <a href="tel:0422 2542244">+(91)-(0422) 2542244 </a>  <br>
				<i class="fa fa-mobile"></i> Mobile : <a href="tel:+91 92457 31318">+91 92457 31318</a><br>
				<i class="fa fa-envelope"></i> E-Mail : <a href="mailto:info@gatewayclinics.com"><span style="color:#fff">info@gatewayclinics.com</span></a>
				<!--<i class="fa fa-phone"></i> Phone : 
				<a href="tel:<?php echo $ThemeSettings -> Phone; ?>"> <?php echo $ThemeSettings -> Phone; ?></a>  
				<br>
				<i class="fa fa-envelope"></i> E-Mail : <a href="mailto:<?php echo $ThemeSettings -> ContactEmail; ?>">
                        	<?php echo $ThemeSettings -> ContactEmail; ?> </a>-->
				<div class="s-icons">
					<a target="_blank" href="https://www.facebook.com/gatewayclinics.coimbatore"> <i class="fa fa-facebook"></i> </a>
					<a target="_blank" href="https://twitter.com/gatewayclinics"> <i class="fa fa-twitter"></i> </a>
					<a target="_blank" href="https://plus.google.com/107394388861722250197?utm_source=embedded&utm_medium=googleabout&utm_campaign=link"> <i class="fa fa-google"></i> </a>
					<a target="_blank" href="https://in.pinterest.com/gatewayclinics/"> <i class="fa fa-pinterest"></i> </a>
					<a target="_blank" href="https://www.linkedin.com/hp/?dnr=WOaPpZM66aLsnl3rWx8rDUPB1Kyp_DEHLy7y&trk=nav_responsive_tab_home"> <i class="fa fa-linkedin"></i> </a>
				</div>
				
			</div>

		</div>

	</div>

	<div class="row" id="copyright">
		<!-- Copyrights -->
		<div class="col-xs-12 col-sm-6 col-md-6">
			<span style="font-size:14px;color:#fff">Copyright © <a href="http://www.gatewayclinics.com/"> Gateway Clinics</a>, 2015
				<br>
				<!-- Terms Link --> Powered By <a target="_blank" href="http://www.inway.in/">Inway <img src="images/inway.png"></a></span>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<!-- Goto Top -->
			<a href="#" title="web counter"><b>Visitor Counter :</b> <img src="http://counter7.freecounter.ovh/private/freecounterstat.php?c=373dd6a425dc70546a8f9d996df95202" border="0" title="web counter" alt="web counter"></a>
			<a href="#" class="navbar-brand scroll-top pull-right"> <i class="glyphicon glyphicon-arrow-up"></i> </a>
			
		</div>
	</div>
	

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php get_theme_url(); ?>/bxslider/plugins/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>

<script type="text/javascript" src="<?php get_theme_url(); ?>/js/contactform.js"></script>

<script type="text/javascript">

$('.scroll-top').on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:0}, 1000);       
});
	if (($(window).height() + 100) < $(document).height()) {/*
		 $('#page').removeClass('hidden').affix({
		 // how far to scroll down before link "slides" into view
		 offset : {
		 top : 100
		 }
		 });
		 */
	}
	$('.foobar').bxSlider({
		mode : 'fade',
		auto : 'true',
		speed : 1500
	});

	$('.bxslider').bxSlider({
		useCSS : false,
		easing : 'ease',
		minSlides : 6,
		maxSlides : 4,
		slideWidth : 450,
		slideMargin : 10,
		ticker : true,
		tickerHover : true,
		speed : 30000,
		// auto: true,

	}); 
</script>
<script>
	$(document).scroll(function(e) {
		var scrollTop = $(document).scrollTop();
		if (scrollTop > 0) {
			console.log(scrollTop);
			$('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
		} else {
			$('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
		}
	});
	if (navigator.userAgent.match(/IEMobile/10.0/)) {
		var msViewportStyle = document.createElement("style")
		msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"))
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
	}
</script>

<?php
if ($ThemeSettings->DisplayOtherThemes == "true") {
?>
<script type="text/javascript">
	$(document).ready(function() {
		// If user selected a theme, load it
		if ($.cookie("theme")) {
			$("link.SelectedTheme").attr("href", $.cookie("theme"));
			HighlightTheme($.cookie("theme"));
		}

		// If user selected a navbar inversion, load it
		if ($.cookie("invert")) {
			if ($.cookie("invert") == "true") {
				$('#chkInvertNavigationBar').attr('checked', 'checked');
				SetInvert(true);
			} else {
				$('#chkInvertNavigationBar').removeAttr('checked');
				SetInvert(false);
			}
		}

		// User is selecting a new theme
		$("#ThemesMenu li a").click(function() {
			$("link.SelectedTheme").attr("href", $(this).attr('rel'));
			$.cookie("theme", $(this).attr('rel'), {
				expires : 365,
				path : '/'
			});
			HighlightTheme($.cookie("theme"));
			return false;
		});

		// User is selecting a new navbar inversion
		$("#chkInvertNavigationBar").change(function() {
			if (this.checked) {
				$.cookie("invert", "true", {
					expires : 365,
					path : '/'
				});
				SetInvert(true);
			} else {
				$.cookie("invert", "false", {
					expires : 365,
					path : '/'
				});
				SetInvert(false);
			}
		});

		// Prevent the menu from disappearing when selecting a navbar inversion
		$('.dropdown-menu input, .dropdown-menu label').click(function(e) {
			e.stopPropagation();
		});

		// Allow sub menus
		// From http://stackoverflow.com/a/19076934/342378
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			// Avoid following the href location when clicking
			event.preventDefault();
			// Avoid having the menu to close when clicking
			event.stopPropagation();
			// Store old class
			var OldClass = $(this).parent().attr("class");
			// Close all menus
			$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
			// Restore old class
			$(this).parent().attr("class", OldClass);
			// Toggle the class to show or hide it
			$(this).parent().toggleClass('open');

			var menu = $(this).parent().find("ul");
			var menupos = $(menu).offset();

			if (menupos.left + menu.width() > $(window).width()) {
				var newpos = -$(menu).width();
				menu.css({
					left : newpos
				});
			} else {
				var newpos = $(this).parent().width();
				menu.css({
					left : newpos
				});
			}
		});

	});

	function HighlightTheme(url) {
		$("#ThemesMenu li.current").attr("class", "");
		$("#ThemesMenu li a[rel='" + url + "']").parent().attr("class", "current active");
	}

	function SetInvert(invert) {
		if (invert) {
			$("#NavBar").removeClass("navbar-default").addClass("navbar-inverse");
		} else {
			$("#NavBar").addClass("navbar-default").removeClass("navbar-inverse");
		}
	}
</script>
<?php
}

if ($ThemeSettings->TrackingId != "") {
?>

<script type="text/javascript">
		var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $ThemeSettings -> TrackingId; ?>
		']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>

<?php
}
?>

<?php get_footer(); ?>
</div></div>
</body>
</html>