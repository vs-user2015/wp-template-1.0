	<!-- 3.7 Footer -->
		<footer>
			<div id="footer-wrapper">
				<div>
					<div id="left-footer">
						<div class="footer-navigation">
							<?php wp_nav_menu(array("theme_location" => "branding-footer","container_id"=> "branding-footer")) ; ?>
						</div>
						<div class="footer-navigation">
							<?php wp_nav_menu(array("theme_location" => "service-footer","container_id"=> "service-footer")) ; ?>
						</div>
						<div class="footer-navigation">
							<?php wp_nav_menu(array("theme_location" => "service2-footer","container_id"=> "service2-footer")) ; ?>
						</div>
					</div>
					<div id="right-footer">
						<p>Follow Us</p>
						<div id="social-media">
							<ul>
								<li><a href="https://www.facebook.com/penguinairaz" id="facebook" target="_blank"></a></li>
								<li><a href="https://twitter.com/Penguinairaz" id="twitter" target="_blank"></a></li>
								<li><a href="http://www.linkedin.com/company/penguin-air-&-home-services" id="linkedin" target="_blank"></a></li>
								<li><a href="https://plus.google.com/100806810270522825765/posts" id="gplus" target="_blank"></a></li>
								<li><a href="http://www.youtube.com/user/Penguinairaz" id="youtube" target="_blank"></a></li>
							</ul>
						</div>
						<div id="address">
							<address>
								<p>Penguin Air & Plumbing</p>
								<p>2850 South 36th Street Suite A7<br>Phoenix, AZ 85034</p>
							</address>
							<div id="license-number">
								<p>License #'s</p>
								<p class="licenses">291261</p>
								<p class="licenses">291262</p>
							</div>
							<p><span>&copy;</span> <?php echo date("Y") ; ?> All Rights Reserved.  Penguin Air & Plumbing</p>
							<p id="vitalstorm_signature"><a target="_blank" href="http://vitalstorm.com" rel="nofollow">Marketing for Home Services</a> by Vitalstorm.</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div id="service-location">
					<p>We Proudly Serve These Local Areas:</p>
					<?php wp_nav_menu(array("theme_location" => "city-pages","container-id" => "service-cities")) ; ?>
				</div>
			</div>
		</footer>
		<div id="footer_affiliates">
			<div id="footer_affiliates_wrapper">
				<div><img alt="nate" src="<?php echo get_template_directory_uri() ; ?>/images/nate.png" title="nate"></div>
				<div><img alt="trane comfort specialist" src="<?php echo get_template_directory_uri() ; ?>/images/trane-comfort-specialist.png" title="trane comfort specialist"></div>
				<div><img alt="southwest gas corporation" src="<?php echo get_template_directory_uri() ; ?>/images/southwest_gas_corporation.png" title="southwest gas corporation"></div>
				<div><img alt="certified contractor" src="<?php echo get_template_directory_uri() ; ?>/images/certified_contractor.png" title="certified contractor"></div>
				<div><img alt="aps" src="<?php echo get_template_directory_uri() ; ?>/images/aps.png" title="aps"></div>
				<div><img alt="bbb" src="<?php echo get_template_directory_uri() ; ?>/images/bbb.png" title="bbb"></div>
				<div><img alt="lowes" src="<?php echo get_template_directory_uri() ; ?>/images/lowes.png" title="lowes"></div>
			</div>
		</div> 
			
		<!-- BEGIN: BBB AB Seal -->
		<script type="text/javascript">
				var bbb = bbb || [];
				bbb.push(["bbbid", "phoenix"]);
				bbb.push(["bid", "1000016873"]);
				bbb.push(["chk", "AF7BB7BC7D"]);
				bbb.push(["pos", "bottom-right"]);
				(function () {
					var scheme = (("https:" == document.location.protocol) ? "https://" : "http://");
					var bbb = document.createElement("script");
					bbb.type = "text/javascript";
					bbb.async = true;
					bbb.src = scheme + "seal-central-northern-western-arizona.bbb.org/badge/badge.min.js";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(bbb, s);
					
					bbb.onload = function(){
					var img = document.createElement("img");
					img.src = "http://dev.vitalstorm.com/penguin-plumbing/wp-content/themes/penguin/images/close-bbb.png";
					img.alt = "close BBB";
					img.id = "close-bbb";
					img.style.height = 35 + "px";
					img.style.width = 35 + "px";
					img.style.marginRight = 10 + "px";
					img.style.zIndex = 99;
					var bbbBadgeContainer = document.querySelector("#bbb-badge");
					
					var bbbBadge = document.getElementById("bbb-badge-img");
					bbbBadge.insertBefore(img,bbbBadge.children[0]);
					bbbBadge.style.display = "-webkit-flex";
					bbbBadge.style.display = "flex";
					bbbBadge.style.flexFlow = "row";
					bbbBadge.style.position = "relative";

					
					var closeBBB = document.querySelector("#close-bbb");
					
					// Touch event for mobile to close the bbb badge
					closeBBB.addEventListener("touchstart",function(){
						bbbBadgeContainer.style.display = "none";
					},false);
					// Click event for desktop to close the bbb badge
					closeBBB.addEventListener("click",function(){
						bbbBadgeContainer.style.display = "none";
					},false);
				}
				})();
				
				
		</script>
		<!-- END: BBB AB Seal -->
		
		<?php wp_footer(); ?>
	</body>
</html>