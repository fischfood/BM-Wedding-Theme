<?php
/**
 * Header Template
 *
 * @since 0.1.0
 *
 * @package 
 * @subpackage Templates
 */

?>

<?php $olive = ''; if ( !is_user_logged_in() ) { $olive = 'olive-back olive-back-show'; } ?>


<!doctype html>
<html class="no-js <?php echo $olive; ?>" <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

	<?php
	/** This action is documented in includes/Linchpin/hatch-hooks.php */
	do_action( 'hatch_head_scripts' ); ?>

</head>

<body <?php body_class(); ?>>

<?php do_action( 'hatch_body_tag_after' ); ?>

<?php if ( !is_user_logged_in() ): ?><div class="olive hide"><?php endif; ?>

<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'hatch_layout_start' ); ?>

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'hatch_header_before' ); ?>

		<?php get_template_part( 'includes/partials/navigation' ); ?>

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'hatch_header_after' ); ?>

		<section class="container" role="document">
