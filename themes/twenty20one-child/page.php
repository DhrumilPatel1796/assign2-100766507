<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();
        
            // Include the page content template.
            get_template_part( 'template-parts/content/content-page' );
        
            // If comments are open or we have at least one comment, load up the comment
            if( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        
        //End the loop.
        endwhile;
        ?>
        
    </main>
</div>
<?php get_footer(); ?>
