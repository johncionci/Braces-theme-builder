<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage {%= title_capitalize %}
 * @author {%= author %}
 * @link {%= author_uri %}
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			if ( have_posts() ) { ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '{%= prefix %}' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php
					while ( have_posts() ) {
				 		the_post();
						get_template_part( 'content', 'search' );
					}
					{%= prefix %}_paging_nav();
				?>

		<?php }
			else {
				get_template_part( 'content', 'none' );
			}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
