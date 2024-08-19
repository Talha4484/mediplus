<?php 
/* Template Name: Contact */
$contact_section = get_field("contact_section",get_the_ID());

get_header(); 
?>
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
						
							<h2><?php echo $contact_section['contact_heading']; ?></h2>
							
							<ul class="bread-list">
								<li><a href="home.php"><?php echo $contact_section['contact_breadlist']; ?></a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active"><a href="#"><?php echo $contact_section['contact_breadlist_1']; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap"></div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2><?php echo $contact_section['contact_heading_2'];?></h2>
								<p><?php echo $contact_section['contact_des'];?></p>
								<!-- Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
											<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3><?php echo $contact_section['contact_number']; ?></h3>
									<p><?php echo $contact_section['contact_email']; ?></p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3><?php echo $contact_section['location']; ?></h3>
									<p><?php echo $contact_section['city']; ?></p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
								<h3><?php echo $contact_section['contact_timing']; ?></h3>
								<p><?php echo $contact_section['contact_day']; ?></p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php get_footer(); ?>

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

 