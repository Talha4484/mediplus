<?php
// Get footer settings from ACF
$footer_section = get_field('footer_section', 'option');
// $quick_links = get_field('quick_links', 'option');
$quick_links = get_field('quick_links', 'option');
?>

<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2><?php echo $footer_section['footer_heading'];?></h2>
									 

								<p><?php echo $footer_section['footer_paragraph'];?></p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>										
											<li><a href="<?php echo $quick_links['footer_about_us'];?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="<?php echo $quick_links['footer_quick_links'];?>"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="<?php echo $quick_links['open_hours'];?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="<?php echo $quick_links['footer_news_letter'];?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="<?php echo $quick_links['footer_quick_links'];?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2><?php echo $footer_section['open_hours_heading']; ?></h2>
								<p><?php echo $footer_section['open_hours_detail'];?></p>
								<!-- <?php print_r($footer_section);?> -->
								<ul class="time-sidual">
									<!-- <li class="day"<?php echo $footer_section['open_hours_detail'] ?>></li> -->
									<!-- <li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li> -->
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2><?php echo $footer_section['footer_news_letter_heading'];?></h2>
								<p><?php echo $footer_section['footer_news_letter_detail']; ?></p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
	<?php wp_footer();?>
		</body>
	</html>