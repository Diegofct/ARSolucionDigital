<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

get_header();
?>

	<main id="main" class="site-main">
		<div class="container mx-auto container-padding py-12">

			<?php
			if ( have_posts() ) :

				// Load posts loop.
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content', get_post_type() );
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => __( 'Anterior', 'arsoluciondigital' ),
						'next_text' => __( 'Siguiente', 'arsoluciondigital' ),
					)
				);

			else :

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>

		</div>
	</main>

<?php
get_footer();
