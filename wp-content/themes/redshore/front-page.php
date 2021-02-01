<?php get_header(); ; ?>
<body <?php body_class(); ?>>

	<!-- Slider start -->
	<section id="home" class="no-padding">	
		<!-- Carousel -->
    	<div id="main-slide" class="carousel slide" data-ride="carousel">
    		<div class="overlay"></div>
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
			    <li data-target="#main-slide" data-slide-to="1"></li>
			    <li data-target="#main-slide" data-slide-to="2"></li>
			</ol><!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">
		<?php 	$loop = new WP_Query( array( 'post_type' => 'sliders', 'posts_per_page' => -1) );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			 <div class="item <?php if($i==0){ echo 'active'; } ?>">
			 <div class="slider-content">
                        <div class="col-md-12 text-center">                    		
                            <h3 class="animated3">
                            	<?php the_content(); ?>
                            </h3>
                        </div>
                    </div>
			<?php  the_post_thumbnail("full");
			
			 
			  echo '</div>';
			  $i++;
			endwhile;
			?>
			
			    	 
			  
			  
			
			</div><!-- Carousel inner end-->

			<!-- Controls -->
			<a class="left carousel-control" href=" index-4.html#main-slide" data-slide="prev">
		    	<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href=" index-4.html#main-slide" data-slide="next">
		    	<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div><!-- /carousel -->    
		</div>
    </section>
    <!--/ Slider end -->

     <!-- Features start -->
	<!--<section id="service" class="service">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">
					<div class="service-content">
                    	<h3>Our VISION</h3>
						<span class="service-image"><img class="img-responsive" src="images/service-1.jpg" alt=""></span>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
					<div class="service-content">
						<h3>ABOUT REDSHORE</h3>
						<span class="service-image"><img class="img-responsive" src="images/service-2.jpg" alt=""></span>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
					
				</div>

				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay="1.1s" style="visibility: visible;-webkit-animation-delay: 1.1s; -moz-animation-delay: 1.1s; animation-delay: 1.1s;">
					<div class="service-content">
                    	<h3>VALUES THAT DRIVE US</h3>
						<span class="service-image"><img class="img-responsive" src="images/service-3.jpg" alt=""></span>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
				</div>

			</div>
		</div>
	</section><!--/ Features end -->


	<!-- Portfolio start -->
	<!--<section id="portfolio" class="portfolio portfolio-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">
					<div class="service-content tleft">
                    	<h3><i class="fa fa-language"></i> Application Migration</h3>
						
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
					<div class="service-content tleft">
						<h3><i class="fa fa-database"></i> Oracle</h3>
						
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
					
				</div>

				<div class="col-md-4 col-sm-4 wow fadeInDown animated" data-wow-delay="1.1s" style="visibility: visible;-webkit-animation-delay: 1.1s; -moz-animation-delay: 1.1s; animation-delay: 1.1s;">
					<div class="service-content tleft">
                    	<h3><i class="fa fa-language"></i> Application Maintenance</h3>
						
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
					</div>
				</div>

			</div>
		</div>
	</section><!-- Portfolio end -->

	<!-- About tab start -->
	<!--<section id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<!--<span class="icon-pentagon wow bounceIn" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;"><i class="fa fa-meh-o"></i></span>-->
					<!--<h2 class="title2">Know About Our Company
						<span class="title-desc">A Quality Experience Team with 4 years experience</span>
					</h2>
				</div>
			</div> <!-- Title row end -->

			<!--<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
					  		<a class="animated fadeIn" href=" index-4.html#tab_a" data-toggle="tab">
					  			<span class="tab-icon"><i class="fa fa-bank"></i></span>
					  			<div class="tab-info"><h3>Who are we</h3></div>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href=" index-4.html#tab_b" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-database"></i></span>
					  			<div class="tab-info"><h3>Our company</h3></div>
						  	</a>
						</li>
					 	<!--<li>
						  	<a class="animated fadeIn" href=" index-4.html#tab_c" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-android"></i></span>
					  			<div class="tab-info"><h3>What we do</h3></div>
						  	</a>
						</li>-->
						<!--<li>
						  	<a class="animated fadeIn" href=" index-4.html#tab_d" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-language"></i></span>
					  			<div class="tab-info"><h3>Why choose us</h3></div>	
						  	</a>
						</li>
						<li>
						  	<a class="animated fadeIn" href=" index-4.html#tab_e" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-coffee"></i></span>
					  			<div class="tab-info"><h3>Save time with us</h3></div>	
						  	</a>
						</li>
					</ul>
					<div class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<img class="img-responsive pull-left" src="images/featured-tab1.png" alt="">
				            <h3>We are awwared winning company</h3> 
				            <p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
				            <ul class="check-list">
				            	<li><i class="fa fa-arrow-circle-right"></i> We design to keep in mind business</li>
				            	<li><i class="fa fa-arrow-circle-right"></i> Love design to keep in mind business</li>
				            	<li><i class="fa fa-arrow-circle-right"></i> Hope design to keep in mind business</li>
				            </ul>
				        </div>
				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <img class="img-responsive pull-right" src="images/featured-tab2.png" alt="">
				            <h3>We are awwared winning company</h3> 
							<p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS kitsch actually messenger bag pug. Pbrbp semiotics try-hard, Schlitz occupy dreamcatcher master cleanse Marfa Vice tofu. </p>							 
							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
				                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
				                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
				                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
				                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
				             </ul>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_c">
				            <h3 class="text-center">We Build Ready made Web Applications for You</h3> 
							<img class="img-responsive" src="images/featured-tab3.png" alt="">
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_d">
				            <h3>We Build Ready made Web Applications for You</h3> 
							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
				                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
				                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
				                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
				                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
				                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
				                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
				                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
				             </ul>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_e">
				            <i class="fa fa-coffee pull-left big"></i>
				            <h3>Easy Solution on Every Project</h3> 
				            <p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray single-origin coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap wayfarers health goth. Helvetica cray church-key hashtag Carles. Four dollar toast meggings seitan, Tonx pork belly VHS Bushwick. Chambray banh mi cornhole. Locavore messenger bag seitan.</p>
				            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS kitsch actually messenger bag pug. semiotics try-hard, Schlitz occupy dreamcatcher master cleanse Marfa Vice tofu. </p>
				        </div>
					</div>
	    		</div>
			</div>
		</div>
    </section><!-- About end -->
    
  <!--
	<section id="portfolio-item">
		<div class="container">
			
			<div class="row">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="portfolio-slider">
                    	<h4>Our Clients</h4>
						<div class="flexportfolio flexslider">
							<ul class="slides">
								<li>	<?php 	$loop = new WP_Query( array( 'post_type' => 'clients', 'posts_per_page' => -1) );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  <div class="col-md-2">
			
			<?php  the_post_thumbnail("full");
			
			 
			  echo '</div>';
			  $i++;
			endwhile;
			?>
                                   
                                    	
                                   
                                </li>
								
							</ul>
						</div>
					</div>
				</div>
			

			</div>
		</div>
	</section>
	-->

   
<?php get_footer(); ?>