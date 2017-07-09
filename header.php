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
			  <a href="index.html">Home</a>
			  <a href="academics.html">Academics</a>
			  <a href="contact.html">Contact Us</a>
			  <a href="mission.html">Mission</a>
			  <a href="Calendar.html">Calendar</a>
			  <a href="about.html">About Us</a>
			  <a href="#">login</a>
			  <a href="#">Register</a>
			  <a href="#">Select Lanuage</a>
			</div>
		  </div>
		</div>
	</div>
