<?php
/**
 * Template Name: Contact Us
 *

 */
 
get_header(); ?>

	
		<div id="banner-area">
		<img src="images/contact-us.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<!--<div class="text-center">
		        	
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#"> Contact</a></li>
		          	</ul>
	          	</div>-->
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
			<div class="row">
				<!-- Map start here -->
				<!--<div id="map-wrapper" class="no-padding">
					<div class="map" id="map"></div>
				</div><!--/ Map end here -->	

			</div><!-- Content row  end -->

			<div class="gap-40"></div>

			<div class="row">
	    		<div class="col-md-7">
					<h3>Contact Us</h3>
	    		<?php echo do_shortcode('[contact-form-7 id="61" title="Contact form 1"]'); ?>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
			    		<p><i class="fa fa-home info"></i>Redshore Technologies Pvt.Ltd, Plot No:513, 5th Floor Manjeera Trinity Corporate, JNTU - Hitech City Road, Kukatpally, Hyderabad, Telangana 72</p>
						<p><i class="fa fa-phone info"></i>+91 7799092929</p>
						<p><i class="fa fa-envelope-o info"></i>  info@redshoretech.com</p>
						<p><i class="fa fa-globe info"></i>www.redshoretech.com</p>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	

   
<?php get_footer(); ?>
