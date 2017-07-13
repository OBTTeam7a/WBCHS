<?php get_header(); ?>
	<nav class="site_nav">
		<?php $args = array('theme_location'=> "prime"); ?>
	<?php wp_nav_menu( $args ); ?>
  </nav>
  <div class="row">
		<div class="accordion">
			<h3>
				Recent news
			</h3>
		<div>
			<p>
				Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
			</p>
		</div>
		<h3>
			Upcoming Events
		</h3>
		  <div>
				<p>
					Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3 news">
			<table>
				<thead>
					<tr>
						<h2>Upcoming Events</h2>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							<div class="num">
								<h1>26</h1>
							</div>
							<div class="month">
								<h2>June</h2>
							</div>
						</th>
						<td>
							<div class="eventTitle">
								<p>Graduation</p>
							</div>
							<div class="eventDes">
								<p>Aduitorium<br/>7:30AM</p>
							</div>
						</td>
					</tr>
					<tr>
						<th>
							<div class="num">
								<h1>30</h1>
							</div>
							<div class="month">
								<h2>June</h2>
							</div>
						</th>
						<td>
							<div class="eventTitle">
								<p>Student Fair</p>
							</div>
							<div class="eventDes">
								<p>Aduitorium<br/>7:30AM</p>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-3 info">
			<img src="images/bongoCrop.jpg">
			<div class="overlay">
				<div class="overlayText">
					Music
				</div>
			</div>
		</div>
		<div class="col-3 info">
			<img src="images/11227396636_a910cdd7ce_b.jpg">
			<div class="overlay">
				<div class="overlayText">
					Student News
				</div>
			</div>
		</div>
		<div class="col-3 info">
			<img src="images/collage.jpg">
			<div class="overlay">
				<div class="overlayText">
					Our Mission
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3 news">
			<table>
				<thead>
					<tr>
						<h2>Recent News</h2>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							<div class="num">
								<h1>17</h1>
							</div>
							<div class="month">
								<h2>June</h2>
							</div>
						</th>
						<td><p>Tickets Available for Graduation</p></td>
					</tr>
					<tr>
						<th>
							<div class="num">
								<h1>03</h1>
							</div>
							<div class="month">
								<h2>July</h2>
							</div>
						</th>
						<td><p>Get your Cap and Gown</p></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-3 info">
			<img src="images/muralCrop.jpg">
			<div class="overlay">
				<div class="overlayText">
					Arts
				</div>
			</div>
		</div>
		<div class="col-3 info">
			<img src="images/classCrop.jpg">
			<div class="overlay">
				<div class="overlayText">
					Teachers
				</div>
			</div>
		</div>
		<div class="col-3 info">
			<img src="images/WBCHS2.jpg">
			<div class="overlay">
				<div class="overlayText">
					Faculty and Staff
				</div>
			</div>
		</div>
	</div>
</div>
	<?php if (have_posts()):
		while(have_posts()) : the_post();
?>
<?php the_content(); ?>
<?php endwhile;
	else:
		echo '<p> No content found</p>';
	endif;
get_footer();
 ?>
