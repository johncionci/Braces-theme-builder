<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage {%= title %}
 * @author {%= author %}
 * @link {%= author_uri %}
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'content', 'single' );
				{%= prefix %}_post_nav();

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}

			} // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
