<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();  ?>>
		<div class="header">
			<div class="logo">
				<a href="<?php echo home_url();?>">
					<img src="images/WBCHSTRANLOGO.png">
				</a>
			</div>
		<div id="space"></div>
		<div class="top_right_header">
			<div id="dropdown">
			<div class="dropbtn" onclick="change(this) , openMenu()">
			  <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
			</div>
			<div id="myDropdown" class="dropdown-content">
				<nav class="site_nav">
					<?php $args = array('theme_location'=> "prime"); ?>
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
		  </div>
		</div>
	</div>
