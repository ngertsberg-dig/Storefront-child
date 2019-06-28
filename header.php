<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- 
	NNNNNNNN        NNNNNNNNZZZZZZZZZZZZZZZZZZZ
	N:::::::N       N::::::NZ:::::::::::::::::Z
	N::::::::N      N::::::NZ:::::::::::::::::Z
	N:::::::::N     N::::::NZ:::ZZZZZZZZ:::::Z 
	N::::::::::N    N::::::NZZZZZ     Z:::::Z  
	N:::::::::::N   N::::::N        Z:::::Z    
	N:::::::N::::N  N::::::N       Z:::::Z     
	N::::::N N::::N N::::::N      Z:::::Z      
	N::::::N  N::::N:::::::N     Z:::::Z       
	N::::::N   N:::::::::::N    Z:::::Z        
	N::::::N    N::::::::::N   Z:::::Z         
	N::::::N     N:::::::::NZZZ:::::Z     ZZZZZ
	N::::::N      N::::::::NZ::::::ZZZZZZZZ:::Z
	N::::::N       N:::::::NZ:::::::::::::::::Z
	N::::::N        N::::::NZ:::::::::::::::::Z
	NNNNNNNN         NNNNNNNZZZZZZZZZZZZZZZZZZZ
-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="header" class="header" role="banner">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */

		 // do_action( 'storefront_header' );
		?>
		<?php
			$logoID = get_field('logo','option');
			$logo =  wp_get_attachment_image_src($logoID,'thumbnail')[0];
		?>
		<div id = 'logo'>
			<img src = "<?php echo $logo;?>" alt = 'site logo'>
		</div>
		<div class = 'navigation'>
			<ul>
				<li class = 'parent-list-item'><a href = '#'>Activities</a></li>
				<li class = 'parent-list-item'><a href = '#'>Accomodations</a></li>
				<li class = 'parent-list-item'><a href = '#'>Vacations</a></li>
				<li class = 'parent-list-item'><a href = '#'>About</a></li>
				<li class = 'parent-list-item'><a href = '#'>Contact</a></li>
			</ul>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
