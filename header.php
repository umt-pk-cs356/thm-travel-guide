<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Travelguide
 * @since Travelguide 1.0
 */
?><!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri('style.css'); ?>" type="text/css" />

<?php wp_head(); ?>
</head>

<body>

<div class="header">

<!--div class="header-top">
<h1>Your <span>Company</span></h1>
<p>Call Us: 000 0000 000</p>
</div-->
<div class="site-name half left"><!-- site name and description  --></div>
 
<div class="header-top">
    <h1 id="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <p id="site-description"><?php bloginfo('description'); ?></p>

	
	
	</div>
	<div id="search-box">
				<form method="get" id="searchform" action="" > 
					<input type="text" value="Search..." onfocus="if(this.value == this.defaultValue) this.value = ''" name="s" id="s" /> 
				</form>
			</div><!-- search-box -->

		
		
<div class="topmenu">
<!--ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="#">About&nbsp;Us</a></li>
  <li><a href="#">What's&nbsp;New</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">Resources</a></li>
  <li><a href="#">Links</a></li>
</ul-->


<?php wp_nav_menu(array( 'menu' => 'mainnav', 'menu_class' => 'nav-bar-content', 'menu_id' => 'navigation', 'container' => false, 'theme_location' => 'primary-menu', 'show_home' => '1')); ?>
	
<div class="search-box">
				<?php get_search_form(); ?>
			</div>			
			
</div>
<div class="header-img">
<h2>WORLD TRAVEL GUIDE</h2>
<!--h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2-->
</div>
</div>


