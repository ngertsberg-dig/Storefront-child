<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php
global $post;
if(is_single() != 1){
	$name = $post -> post_name;
}
else{
	$name = $post -> post_type;
}
$theme = get_template_directory_uri() . '/';
$scriptToLoad = $theme.'build/js/'.$name.'.js';
$loadMenu  = $theme.'/build/js/menu.js';
?>
<script src = <?php echo $scriptToLoad;?>></script>
<script src = <?php echo $loadMenu;?>></script>

<?php wp_footer(); ?>

</body>
</html>
