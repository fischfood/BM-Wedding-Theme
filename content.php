<?php
/**
 * Content Template
 *
 * The default template for displaying content. Used within single and index/archive/search templates.
 *
 * @since 0.1.0
 *
 * @package 
 * @subpackage Templates
 */

?>

<?php
/** This action is documented in includes/Linchpin/hatch-hooks.php */
do_action( 'hatch_post_before' ); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<div class="entry-content">


			<?php
			/** This action is documented in includes/Linchpin/hatch-hooks.php */
			do_action( 'hatch_post_entry_content_before' ); ?>

			<?php the_content(); ?>

			<?php
			/** This action is documented in includes/Linchpin/hatch-hooks.php */
			do_action( 'hatch_post_entry_content_after' ); ?>
		</div>


	</article>
<?php
/** This action is documented in includes/Linchpin/hatch-hooks.php */
do_action( 'hatch_post_after' );
