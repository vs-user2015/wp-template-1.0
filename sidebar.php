<div id="sidebar">
	<div>
		<div id="side-content">
			<div id="free-estimate">
				<h1>FREE</h1>
				<p>Unit Estimates & Second Opinions</p>
			</div>	
		  
			<div id="annual-maintenance">
				<img src="<?php echo get_template_directory_uri() ;?>/images/tools.png">
				<p>Annual Maintenance Programs as low as</p>
				<h1>$12.50/Month!</h1>
				<div id="sidebar-learn"><a href="/penguin-plumbing/annual-maintenance-program/">LEARN MORE</a></div>
			</div>
		  
			<div id="subscribe">
				<h1>5 Things to Know Before Buying an Air Conditioner</h1>
					<p>Receive a FREE</p>
					<p>Buyers Guide</p>
				<form id="form272" name="form272" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" validate action="https://vitalstorm.wufoo.com/forms/mq60t5v0we32ve/#public">
					<input id="sidebar-field" name="Field1" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="1"   placeholder="Enter your email address"  required /><br>
					<input id="sidebar-email" name="saveForm" class="btTxt submit" type="submit" value="SUBMIT" />
					<input type="hidden" id="idstamp" name="idstamp" value="YefJuSqpXrGmcGk5eg3Apwc9xRPz8qxeFsuGLAXbseA=" />
				</form>
			</div>
		</div>
		<ul id="quick-menu">
			<?php wp_nav_menu(array("theme_location" => "sidebar-menu","container_id" => "side-menu")) ; ?>
		</ul>
		<?php if(is_active_sidebar("home_right_1") ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar("home_right_1") ; ?>
		</div>

		<?php endif; ?>
	</div>
</div>
