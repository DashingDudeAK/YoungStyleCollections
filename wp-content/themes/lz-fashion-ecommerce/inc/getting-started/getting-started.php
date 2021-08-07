<?php
//about theme info
add_action( 'admin_menu', 'lz_fashion_ecommerce_gettingstarted' );
function lz_fashion_ecommerce_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'lz-fashion-ecommerce'), esc_html__('About Theme', 'lz-fashion-ecommerce'), 'edit_theme_options', 'lz_fashion_ecommerce_guide', 'lz_fashion_ecommerce_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lz_fashion_ecommerce_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'lz_fashion_ecommerce_admin_theme_style');

//guidline for about theme
function lz_fashion_ecommerce_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lz-fashion-ecommerce' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to LZ Fashion Ecommerce WordPress Theme', 'lz-fashion-ecommerce' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'lz-fashion-ecommerce' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'lz-fashion-ecommerce' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'lz-fashion-ecommerce' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'lz-fashion-ecommerce' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'lz-fashion-ecommerce' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'lz-fashion-ecommerce' ); ?> <a href="<?php echo esc_url( LZ_FASHION_ECOMMERCE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'lz-fashion-ecommerce' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'LZ Fashion Ecommerce is a modern, stylish and elegant WordPress theme to establish an online fashion store for selling branded and local clothes, footwear, jewellery, cosmetics, accessories, watches, beauty, clothing, handbags and everything that fashion freaks look for in a site. It has a bold design to leave an impacting impression on the visitors. This multipurpose theme has the flexibility to be used as a fashion blog giving fashion tips, as a portfolio or an ecommerce shop for any purpose. It gives you all the chance to design header and footer; choose between boxed and full-width layout and use image or solid or text background in your website according to your style sense. The theme has fluid layout to adopt any screen size making your website fully responsive. Customize the theme to your heart’s desire to suit your brand. It is cross-browser compatible, SEO ready and enhances website loading speed. Sliders which play an important role in an ecommerce site, has been included to make the site look more convincing.', 'lz-fashion-ecommerce')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Fashion Ecommerce Theme', 'lz-fashion-ecommerce' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'lz-fashion-ecommerce'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( LZ_FASHION_ECOMMERCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lz-fashion-ecommerce'); ?></a>
			<a href="<?php echo esc_url( LZ_FASHION_ECOMMERCE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'lz-fashion-ecommerce'); ?></a>
			<a href="<?php echo esc_url( LZ_FASHION_ECOMMERCE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lz-fashion-ecommerce'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/lz-fashion-ecommerce.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'lz-fashion-ecommerce'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'lz-fashion-ecommerce'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'lz-fashion-ecommerce'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>