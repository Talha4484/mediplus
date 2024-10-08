<?php 
/* Template Name: Home page */
$head = get_field("head",get_the_ID());
// $footer_section = get_field("footer_section",get_the_ID());



get_header();
 ?>

		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/img/slider2.jpg'); ?>')">

					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>
										<?php if (!empty($head['banner_heading'])): ?>
                               			<h1><?php echo esc_html($head['banner_heading']); ?></h1>
                            			<?php endif; ?>
									
									</h1>
									<p>
										<?php if (!empty($head['banner_paragraph'])): ?>
										<p><?php echo $head['banner_paragraph'];?></p>	 
										<?php endif; ?>
									</p>
									
								
								<div class="button">
									<a href="#" class="btn">Get Appointment</a>
									<a href="#" class="btn primary">Learn More</a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				
				<div class="single-slider" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/img/slider.jpg'); ?>')">

					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>
										
										<?php if (!empty($head['banner_heading_1'])): ?>
                               			<h1><?php echo esc_html($head['banner_heading_1']); ?></h1>
                            			<?php endif; ?>
									
									</h1>
																		
									<p>
										<?php if (!empty($head['banner_paragraph_1'])): ?>
										<p><?php echo $head['banner_paragraph_1'];?></p>	 
										<?php endif; ?>
									</p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				
				<div class="single-slider" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/img/slider3.jpg'); ?>')">

					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>
										<?php if (!empty($head['banner_heading_2'])): ?>
                               			<h1><?php echo esc_html($head['banner_heading_2']); ?></h1>
                            			<?php endif; ?>
									
									</h1>									
									<p>
										<?php if (!empty($head['banner_paragraph_2'])): ?>
										<p><?php echo $head['banner_paragraph_2'];?></p>	 
										<?php endif; ?>
									</p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Contact Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
									<?php if (!empty($head['schedule_author'])): ?>
										<p><?php echo $head['schedule_author']; ?></p>	 
										<?php endif; ?>

										<?php if (!empty($head['schedule_title'])): ?>
    									<h4><?php echo $head['schedule_title']; ?></h4>
										<?php endif; ?>

										<?php if (!empty($head['schedule_paragraph'])): ?>
										<p><?php echo $head['schedule_paragraph']; ?></p>	 
										<?php endif; ?>


										<a href="<?php if(!empty($head['learn_more'])): echo $head['learn_more']['url'];?>">
   										<?php echo $head['learn_more']['title']; ?>
   										<i class="fa fa-long-arrow-right"></i>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span><?php if (!empty($head['schedule_author_1'])): ?>
										<p><?php echo $head['schedule_author_1'];?></p>	 
										</span>
										<?php endif; ?>

										<span><?php if(!empty($head['schedule_title_1'])): ?></span>
										<h4><?php echo $head['schedule_title_1'];?></h4>
										<?php endif; ?>

										<?php if (!empty($head['schedule_paragraph_1'])): ?>
										<p><?php echo $head['schedule_paragraph_1']; ?></p>	 
										<?php endif; ?>

										<a href="<?php if(!empty($head['learn_more1'])): echo $head['learn_more1']['url'];?>">
   										<?php echo $head['learn_more1']['title'];?>
   										<i class="fa fa-long-arrow-right"></i>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<?php if (!empty($head['schedule_author_2'])): ?>
										<p><?php echo $head['schedule_author_2'];?></p>	 
										<?php endif; ?>			

										<span><?php if(!empty($head['schedule_title_2'])): ?></span>
										<h4><?php echo $head['schedule_title_2'];?></h4>
										<?php endif; ?>

										<?php if (!empty($head['schedule_paragraph_2'])): ?>
										<p><?php echo $head['schedule_paragraph_2']; ?></p>	 
										<?php endif; ?>

										<a href="<?php if(!empty($head['learn_more2'])): echo $head['learn_more2']['url'];?>">
   										<?php echo $head['learn_more2']['title'];?>
   										<i class="fa fa-long-arrow-right"></i>
										</a>
										<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
								<?php if(!empty($head['schedule_author_2'])): ?>
								<h2><?php echo $head['schedule_author_2'];?></h2>
								<?php endif; ?>

							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/section-img.png'); ?>" alt="Description of the image">

								<?php if (!empty($head['feautes_main_paragraph'])): ?>
								<p><?php echo $head['feautes_main_paragraph']; ?></p>	 
								<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<?php if(!empty($head['single_heading'])): ?>
								<h3><?php echo $head['single_heading'];?></h3>
								<?php endif; ?>

							<?php if (!empty($head['single_paragraph'])): ?>
								<p><?php echo $head['single_paragraph']; ?></p>	 
								<?php endif; ?>	
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>

							<?php if(!empty($head['single_heading_1'])): ?>
								<h3><?php echo $head['single_heading_1'];?></h3>
								<?php endif; ?>

							<?php if (!empty($head['single_paragraph_1'])): ?>
								<p><?php echo $head['single_paragraph_1']; ?></p>	 
								<?php endif; ?>	
						</div>
						<!-- End Single features -->
					</div>

					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3><?php echo $head['single_heading_2'];?></h3>
							<p><?php echo $head['single_paragraph_2'];?></p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">557</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/section-img.png" alt="#">
							
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php echo $head['choose-left_heading']; ?></h3>
							<p><?php echo $head['choose-left_paragraph']; ?></p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<?php
								// Retrieve the video URL from Customizer settings
								$video_url = get_theme_mod('video_url', 'https://www.youtube.com/watch?v=RFVXy6CRVR4'); 
								?>

								<a href="<?php echo esc_url($video_url); ?>" class="video video-popup mfp-iframe">
								    <i class="fa fa-play"></i>
								</a>

							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->

		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/section-img.png" alt="#">
							
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf1.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf2.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf3.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf4.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf1.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf2.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf3.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf4.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/section-img.png'); ?>" alt="Description of the image">

							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">General Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Teeth Whitening</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Heart Surgery</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.html">Ear Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.html">Vision Problems</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.html">Blood Transfusion</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/section-img.png'); ?>" alt="Description of the image">

							
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-ui-cut"></i>
								</div>
								<h4 class="title">Plastic Suggery</h4>
								<div class="price">
									<p class="amount">$199<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i><?php echo $head['list_items_1'];?></li>
								<li><i class="icofont icofont-ui-check"></i><?php echo $head['list_items_1'];?></li>
								<li class="cross"><i class="icofont icofont-ui-close"></i><?php echo $head['list_items_1'];?></li>
								<li class="cross"><i class="icofont icofont-ui-close"></i><?php echo $head['list_items_1'];?></li>
								<li class="cross"><i class="icofont icofont-ui-close"></i><?php echo $head['list_items_1'];?></li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-tooth"></i>
								</div>
								<h4 class="title">Teeth Whitening</h4>
								<div class="price">
									<p class="amount">$299<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-heart-beat"></i>
								</div>
								<h4 class="title">Heart Suggery</h4>
								<div class="price">
									<p class="amount">$399<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
								<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<!-- <img src="img/section-img.png" alt="#"> -->
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/section-img.png'); ?>" alt="Description of the image">

							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog1.jpg'); ?>" alt="Description of the image">

							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">22 Aug, 2020</div>
									<h2><a href="blog-single.php">We have annnocuced our new product.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog2.jpg'); ?>" alt="Description of the image">
								
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">15 Jul, 2020</div>
									<h2><a href="blog-single.php">Top five way for solving teeth problems.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog3.jpg'); ?>" alt="Description of the image">

							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">05 Jan, 2020</div>
									<h2><a href="blog-single.php">We provide highly business soliutions.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri();?>/img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<!-- <img src="img/section-img.png" alt="#"> -->
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/section-img.png'); ?>" alt="Description of the image">

							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/contact-img.png'); ?>" alt="Description of the image">
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<?php get_footer(); ?>


		<!--/ End Footer Area -->
		
		<!-- jQuery Min JS -->
        <!-- <script src="js/jquery.min.js"></script> -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>


        <!-- jQuery Migrate JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-3.0.0.js"></script>


        <!-- jQuery UI JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>


        <!-- Easing JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/easing.js"></script>


        <!-- Color JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/colors.js"></script>

        <!-- Popper JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>

        <!-- Bootstrap Datepicker JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.js"></script>

        <!-- jQuery Nav JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nav.js"></script>

        <!-- Slicknav JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/slicknav.min.js"></script>

        <!-- ScrollUp JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollUp.min.js"></script>

        <!-- Nice Select JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/niceselect.js"></script>

        <!-- Tilt jQuery JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/tilt.jquery.min.js"></script>

        <!-- Owl Carousel JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl-carousel.js"></script>

        <!-- CounterUp JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>

        <!-- Steller JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/steller.js"></script>

        <!-- Wow JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

        <!-- Magnific Popup JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>

        <!-- Counter Up CDN JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

        <!-- Main JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

		<!-- Include GMaps library -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/gmaps.min.js"></script>

