<?php
/**
 * Template Name: About Page
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <h2>Name: Dhrumil Patel</h2>
    <h2>Student Id: 100766507</h2>
    <h2>DCmail: dhrumilmanojkumar.patel@dcmail.ca</h2>
    <h2>Course: Contemporary Web Design</h2>
    <h2>Subject Name: Content Management & System I</h2> 

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
