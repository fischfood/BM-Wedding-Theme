<?php
/**
 * Front Page Template
 *
 * Default template utilized when your theme has a define "Front Page"
 * within Setting->Reading within the WordPress admin
 *
 * @since 0.1.0
 *
 * @package 
 * @subpackage Templates
 */

?>

<?php /* if ( !is_user_logged_in() ): ?>
	<div class="olive">

		<?php get_template_part('temp-front'); ?>

	</div>
<?php endif; */ ?>

<?php get_header(); ?>
	
	<div class="row extend">
		<div class="small-12" role="main">

			<?php do_action( 'hatch_content_before' ); ?>

			<?php if ( have_posts() ) : ?>

				<?php do_action( 'hatch_loop_before' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php do_action( 'hatch_loop_after' ); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			<?php do_action( 'hatch_content_after' ); ?>

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		</div>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>


