<?php

/***** Theme Info Page *****/

if (!function_exists('pena_lite_theme_info_page')) {
	function pena_lite_theme_info_page() {
		add_theme_page(esc_html__('Welcome to Pena Lite', 'pena-lite'), esc_html__('Theme Info', 'pena-lite'), 'edit_theme_options', 'blog', 'pena_lite_display_theme_page');
	}
}
add_action('admin_menu', 'pena_lite_theme_info_page');

if (!function_exists('pena_lite_display_theme_page')) {
	function pena_lite_display_theme_page() {
		$theme_data = wp_get_theme(); ?>
		<div class="theme-info-wrap">
			<h1>
				<?php printf(esc_html__('Welcome to %1s %2s', 'pena-lite'), $theme_data->Name, $theme_data->Version); ?>
			</h1>
			<div class="theme-description">
				<?php echo $theme_data->Description; ?>
			</div>
			<hr>
			<div id="getting-started">
				<h3>
					<?php printf(esc_html__('Getting Started with %s', 'pena-lite'), $theme_data->Name); ?>
				</h3>
				<div class="ad-row clearfix">
					<div class="ad-col-1-2">
						<div class="section">
							<h4>
								<?php esc_html_e('Theme Documentation', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php printf(esc_html__('Please check the documentation to get better overview of how the theme is structured.', 'pena-lite'), $theme_data->Name); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/documentation/pena-lite/'); ?>" target="_blank" class="button button-secondary">
									<?php esc_html_e('Visit Documentation', 'pena-lite'); ?>
								</a>
							</p>
						</div>
						<div class="section">
							<h4>
								<?php esc_html_e('Theme Options', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php printf(esc_html__('Click "Customize" to open the Customizer.',  'pena-lite'), $theme_data->Name); ?>
							</p>
							<p>
								<a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary">
									<?php esc_html_e('Customize', 'pena-lite'); ?>
								</a>
							</p>
						</div>
						<div class="section">
							<h4>
								<?php esc_html_e('Didi Pro', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php esc_html_e('Full version of this theme includes additional features; additional page templates, custom widgets, additional front page featured pages, different blog options, different theme options, WooCommerce, Give, The Events Calendar support color options & premium theme support.', 'pena-lite'); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/pena-charity-wordpress-theme/'); ?>" target="_blank" class="button button-secondary">
									<?php esc_html_e('Read more about Pena', 'pena-lite'); ?>
								</a>
							</p>
						</div>
					</div>
					<div class="ad-col-1-2">
						<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php esc_html_e('Theme Screenshot', 'pena-lite'); ?>" />
					</div>
				</div>
			</div>
			<hr>
			<div id="theme-author">
				<p>
					<?php printf(esc_html__('%1s is proudly brought to you by %2s. %3s: %4s.', 'pena-lite'), $theme_data->Name, '<a target="_blank" href="http://www.anarieldesign.com/" title="Anariel Design">Anariel Design</a>', $theme_data->Name, '<a target="_blank" href="http://www.anarieldesign.com/free-charity-wordpress-theme-pena/" title="Pena Lite Theme Demo">' . esc_html__('Theme Demo', 'pena-lite') . '</a>'); ?>
				</p>
			</div>
		</div><?php
	}
}

?>