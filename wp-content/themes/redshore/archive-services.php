<?php

get_header(); ?>

	
		<div id="banner-area">
		<img src="<?php echo get_template_directory_uri(); 
?>/images/training.png" width="1350" height="300"alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<!--<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>About Us</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#"> About Us</a></li>
		          	</ul>
	          	</div>
          	</div>--><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-desktop"></i></span>
					<h2 class="title classic">Our Services</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="landing-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-4 col-sm-6">
								<?php 	$loop = new WP_Query( array( 'post_type' => 'services') );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="<?php if($i==0){ echo 'active'; } ?>" >
			<a class="animated fadeIn" href="#tab_<?php the_id(); ?>" data-toggle="tab">
			<div class="tab-info">
						  			<h3><?php the_title(); ?></h3>
					  			</div>	
					  		</a>
			<?php  
			
			 
			  echo '</li>';
			  $i++;
			  	
			endwhile;
			?>
					  		
					  
					  
					</ul>
					<div class="tab-content col-md-8 col-sm-6">
				       <?php 	$loop = new WP_Query(array( 'post_type' => 'services')  );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <div class="tab-pane animated <?php if($i==0){ echo 'active'; } ?> fadeInLeft" id="tab_<?php  the_id();  ?>">
				        	<!--<i class="fa fa-briefcase big"></i>-->
				            
							     <?php  the_content();
			
			 
			  echo '</div>';
			  $i++;
			  	
			endwhile;
			?>
				    
					</div><!-- tab content -->
	    		</div><!-- Overview tab end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

	</section><!--/ Main container end -->


<?php get_footer(); ?>
