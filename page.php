<?php
/**
 * The template for displaying all single posts
 * O modelo para exibir todas as postagens únicas
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
    
	get_template_part( 'template-parts/content/content-page' );

	// Se os comentários estiverem abertos ou houver pelo menos um comentário, carregue o modelo de comentário.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
