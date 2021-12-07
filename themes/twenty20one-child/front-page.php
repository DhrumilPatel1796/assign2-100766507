<?php
/**
 * Template Name: Front Page Template File
 *
 * In order for this template to work a page needs to be created with the About template selected.
 */
/**
 * @since Twenty Twenty One 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/content-page');
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
