<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Blank Theme
 */

get_header(); ?>
<section id="content">
	<div id="banner-outer">
		<?php get_template_part("template-part/main-navigation") ; ?>
		<?php get_template_part("template-part/home-banner") ; ?>
	</div>
	<?php get_template_part("template-part/main-form") ; ?>
	<section id="wrapper">
		<!-- 3.4 Three Reasons -->
		<section id="three-reasons">
			<div id="three-reasons-wrapper">
				<div>
					<div class="reason reason-one"> 
						<div>
							<a href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="24/7 Emergency Service" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason1.png" title="24/7 Emergency Service"></a>
							<h3>24/7 Emergency<br>Service</h3>
							
						</div>
					</div>
					<div class="reason reason-two">
						<div>
							<a href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="100% Satisfaction Guarantee" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason2.png" title="100% Satisfaction Guarantee"></a>
							<h3>100% Satisfaction<br>Guarantee</h3>
						</div>
					</div>
					<div class="reason reason-three">
						<div>
							<a href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="Upfront Pricing" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason3.png" title="Upfront Pricing"></a>
							<h3>Upfront<br>Pricing</h3>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</section>
		
		<!-- 3.5 Coupon-Review -->
		<section id="coupon-review">
			<div id="coupon-review-wrapper">
				<div>
					<div id="coupon-review-inner">
						<div id="coupon-area">
									<div id="our_specials">
										<div class="special active">
											<img src="<?php echo get_template_directory_uri() ; ?>/images/senior-vet-discount.png" title="senior vet discount" alt="senior vet discount">
										</div>
										<div class="special">
											<img src="<?php echo get_template_directory_uri() ; ?>/images/precision-tuneup-69-off.png" title="precision tuneup 69 off" alt="precision tuneup 69 off">
										</div>
										<div class="special">
											<img src="<?php echo get_template_directory_uri() ; ?>/images/free-service-call.png" title="free service call" alt="free service call">
										</div>
										<div class="clear"></div>
									</div>
										<div id="s_indexes">
										<a class="s-index"></a>
										<a class="s-index"></a>
										<a class="s-index"></a>
									</div>
								</div>
						<div id="review-area">
							<div id="testimonials">
								<a href="<?php echo get_bloginfo() ; ?>/testimonials/"><h2>Customer Testimonials</h2></a>
								<div id="test_container">
									<div class="testimonial">
										<img alt="Penguin Plumbing & Air reviews" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png" title="Penguin Plumbing & Air reviews">
										<div class="testimonial_text">"I wanted to say how impressed I am with Penguin Air." <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">– Shanan T., Buckeye, AZ</h3>
									</div>
									<div class="testimonial">
										<img alt="Penguin Plumbing & Air reviews" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png" title="Penguin Plumbing & Air reviews">
										<div class="testimonial_text">"Penguin Air & Plumbing is fantastic. We’ve been having some..." <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">– Carl J., Phoenix, AZ</h3>
									</div>
									<div class="testimonial">
										<img alt="Penguin Plumbing & Air reviews" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png" title="Penguin Plumbing & Air reviews">
										<div class="testimonial_text">"Excellent service. Steve was extremely knowledgeable and efficient." <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">– Lowell A., Phoenix, AZ</h3>
									</div>
									<div class="clear"></div>
								</div>
								<div id="t_pagers">
									<a class="pagers"></a>
									<a class="pagers"></a>
									<a class="pagers"></a>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<div id="section-wrapper">
		<div>
			<div id="copy">
				<div>
					<?php if(have_posts()): while(have_posts()) : the_post() ; ?>
					<?php the_content() ; ?>
					<?php endwhile ; endif ; ?>
				</div>
			</div>
			<?php get_sidebar() ; ?>
			<div class="clear"></div>
		</div>
	</div>
</section>
<?php get_footer();
