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
	<div class="container">
		<div class="focus">
			<div class="row">
				<div class="col s6 welcome">
		      		<h3>Welcome</h3>
		      		<p>
		      			Welcome to a cycling club with a difference.  Unlike traditional clubs that have a defined geographical base, the Virtual Cycling Club has no borders.  
		      		</p>
		      		<p>Instead it’s an online community of cycling friends who provide information and support to each other in training and racing -- for all forms of cycling, and especially for time trialling.</p>
		      	</div>
		      	<div class="col s5 offset-s1">
			      	<h3>Get Started</h3>
			      	 <div class="encourage">
			      	 	<p>
			      	 		Signing up is an easy way to stay up to date with the latest information. It only takes a couple of minutes and you're ready to go.
			      	 	</p>
			      	 	<a class="btn waves-effect waves-light" type="submit" href="register" name="action">Register <i class="fas fa-sign-in-alt"></i></a>
			      	 </div>
			 		 <span>Already have an account? <a href="login">Login</a></span>
		      	</div>
			</div>
	    </div>
	</div>
</section>

<section class="additional-info container">
	<div class="row">
		<div class="col s3">
			<span class="icon">
				<i class="far fa-calendar-alt"></i>
			</span>
			<p>
				Affiliation to Cycling Time Trials in the UK
			</p>
		</div>
		<div class="col s3">
			<span class="icon">
				<i class="fas fa-comments"></i>
			</span>
			<p>
				Access to the member’s discussion area
			</p>
		</div>
		<div class="col s3">
			<span class="icon">
				<i class="fas fa-bicycle"></i>
			</span>
			<p>
				Access to Virtual Cycling Club’s Strava group
			</p>
		</div>
		<div class="col s3">
			<span class="icon">
				<i class="far fa-thumbs-up"></i>
			</span>
			<p>
				Eligibility for team TT events
			</p>
		</div>
    </div>
</section>

<?php
get_footer();
