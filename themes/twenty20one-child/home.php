<?php
/**
 * Template Name: Home Page
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <h1>This is a home page template file.</h1>
        <h2>Introduction about Myself.</h2>

    <?php
    // Start the loop
    while ( have_posts() );
    the_post();

    // Include the page content template
    get_template_part( 'cintent', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if( comments_open() || get_comments_number() ):
        comments_template();
    endif;

    // End the loop
endwhile;
?>
