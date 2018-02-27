<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtual_Cycling_Club
 */

get_header(); ?>

<section class="hero">
	<div class="focus">
		<div class="row">
      	<div class="col s6 welcome">
      		<h3>Welcome</h3>
      		<span>
      			Welcome to a cycling club with a difference.  Unlike traditional clubs that have a defined geographical base, the Virtual Cycling Club has no borders.  Instead it’s an online community of cycling friends who provide information and support to each other in training and racing -- for all forms of cycling, and especially for time trialling.
      		</span>
      	</div>
      	<div></div>
      <div class="col s5 offset-s1">
      	<h3>Get Started</h3>
      	 <div class="encourage">
      	 	<a class="btn waves-effect waves-light" type="submit" href="register" name="action">Register
	    		<i class="material-icons right">send</i>
	 		 </a>
      	 </div>
 		 <span>Already have an account? <a href="login">Login</a></span>
      </div>
	</div>
</section>

<section class="additional-info">
	<div class="process">
		<i class="material-icons">directions_bike</i>
		<i class="material-icons">directions_bike</i>
		<i class="material-icons">directions_bike</i>
		<i class="material-icons">directions_bike</i>
	</div>
	<ul>
		<li>Affiliation to Cycling Time Trials in the UK, providing access to more than 1,000 organised events each year</li>
		<li>Access to the member’s discussion area on this website</li>
		<li>Eligibility for the Virtual Cycling Club honours at course, age group, gender and overall levels;</li>
		<li>Access to the Virtual Cycling Club’s Strava group</li>
		<li>Eligibility for team TT events</li>
		<li>A digital club logo for use in online profiles, customised with the colours of your choice.</li>
	</ul>
</section>

<section>
	<p>The Virtual Cycling Club is affiliated to Cycling Time Trials in the UK, enabling its members to ride in open TT events in any of the twenty two districts across the country.</p>

	<p>We’re a club for absolutely anyone with an interest in cycling.  Our members are enthusiasts with varying levels of cycling experience.  Alongside their association with the VCC most of them maintain links with traditional cycling clubs in their local areas.</p>

	<p>We’re also here for the independent cyclist who wants to compete in TT events but doesn’t have access to a CTT affiliated club, or simply doesn’t want to join a traditional club.</p>

	<p>We’ll probably get to meet each other at TT events around the UK, or on the occasional club ride.  On the other hand, we may not ever meet at all in person.  Either way, we’ll remain a community in the online world with an identity in the real world.</p>

</section>


<?php
get_footer();
