<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Cycling_Club
 */

?>

	</section>

	<footer class="page-footer">
	  	<div class="container">
	    	<div class="row">
	      		<div class="col l6 s12">
	      			<h5 class="white-text">Legal Stuff</h5>
	        		<ul>
	      				<li><a class="grey-text text-lighten-3" href="/about">About Us</a></li>
	     	     		<li><a class="grey-text text-lighten-3" href="/privacy">Privacy Policy</a></li>
	     	     		<li><a class="grey-text text-lighten-3" href="/terms">Terms &amp; Conditions</a></li>
	     	     		<li><a class="grey-text text-lighten-3" href="/contact">Contact</a></li>
	     		   	</ul>
  				</div>
	      		<div class="col l3 offset-l3 s12">
	      			<h5 class="white-text">Get Social</h5>
					<div class="col s3">
						<a href="#">
							<i class="fab fa-facebook-square"></i>
						</a>
					</div>
					
					<div class="col s3">
						<a href="#">
							<i class="fab fa-twitter-square"></i>
						</a>
					</div>
					<div class="col s3">
						<a href="#">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
	    	  	</div>
	    	</div>
	 	</div>
	  <div class="footer-copyright">
	    <div class="container">
	    <?= date("Y"); ?> &copy; Virtual Cycle Club 
	    <span class="plug right">
	    	Created with <i class="fas fa-heart"></i> by <a class="grey-text text-lighten-4" href="https://samayres.net">Sam Ayres</a>
	    </span>
	    </div>
	  </div>
	</footer>

	<?php wp_footer();?>

	</body>
</html>
