<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<!-- Footer start -->
	<section id="footer" class="footer footer-map">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="footer-logo">
						<div class="col-md-4">
                        	<h4>SERVICES</h4>
                        	<ul class="footerlist">
                            	<li><a href="<?php echo site_url('services'); ?>">Managed Services</a></li>
                                <li><a href="<?php echo site_url('services'); ?>">Performance Tuning</a></li>
                                <li><a href="#">Implementation</a></li>
                                <li><a href="#">Upgrades</a></li>
                            </ul>
                        </div>
                        <!--<div class="col-md-4">
                        	<h4>Expertise</h4>
                            <ul class="footerlist">
                            	<li><a href="#">Health Care</a></li>
                                <li><a href="#">Automobile</a></li>
                                <li><a href="#">Banking</a></li>
                                <li><a href="#">Telecmmunication</a></li>
                                <li><a href="#">Energy</a></li>
                            </ul>
                        </div>-->
                        <div class="col-md-4">
                        	<h4>Contact Us & Corporate Office</h4>
                        	<ul class="footerlastlist">
                            	<li><i class="fa fa-map-marker"></i>
                                	Address: Redshore Technologies Pvt.Ltd,  Plot No:513, 5th Floor Manjeera Trinity Corporate, JNTU - Hitech City Road, Kukatpally, Hyderabad, Telangana -500072
                                </li>
                                <li><i class="fa fa-mobile"></i>
                                	+91 7799092929
                                </li>
                                <li><i class="fa fa-envelope"></i>
                                	info@redshoretech.com
                                </li>
                            </ul>
                        </div>
					</div>
					<div class="gap-20"></div>
					
				</div>
			</div><!--/ Row end -->
			
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix" data-original-title="" title="">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
            
		</div><!--/ Container end -->
	</section><!--/ Footer end -->
    
    <div class="copyrightdiv">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copyright-info">
               <span> @ Copyright 2020 Redshore Technologies Inc. All Rights Reserved</span>
                </div>
            </div>
        </div><!--/ Row end -->
    </div>
	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/waypoints.min.js"></script>
	<!-- Google Map API Key Source -->
	
	<!-- For Google Map -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gmap3.js"></script>
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
	<!-- Template custom -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
	</div><!-- Body inner end -->

</body></html>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
