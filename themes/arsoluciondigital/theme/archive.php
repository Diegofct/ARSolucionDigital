<?php
/**
 * The template for displaying archive pages (Blog)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'arsoluciondigital' ); ?></a>

	<!-- Wrapper para header con efecto de brillo -->
	<div class="bg-glow-effect">
		<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

		<!-- Hero Section para Blog -->
		<section class="py-20 sm:py-20 md:py-24 lg:py-28">
			<div class="container mx-auto px-4 sm:px-6 lg:px-8">
				<div class="text-center max-w-4xl mx-auto relative z-10">
					<h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 sm:mb-8 leading-tight">
						Blog
					</h1>
					<p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-200 leading-relaxed">
						Insights, estrategias y casos prácticos para transformar tu negocio digital
					</p>
				</div>
			</div>
		</section>
	</div>

	<div id="content" class="bg-[#12003C]">
		<main id="main" class="site-main py-12 sm:py-16 md:py-20 lg:py-24">
			<div class="container mx-auto px-4 sm:px-6 lg:px-8">

				<?php if ( have_posts() ) : ?>

					<!-- Blog Posts Grid -->
					<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 lg:gap-12">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content', 'excerpt' );
						endwhile;
						?>
					</div>

					<!-- Pagination -->
					<div class="mt-12 sm:mt-16 md:mt-20">
						<?php arsoluciondigital_the_posts_navigation(); ?>
					</div>

				<?php else : ?>

					<div class="max-w-2xl mx-auto text-center py-20">
						<h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
							No hay entradas todavía
						</h2>
						<p class="text-gray-300">
							Pronto publicaremos contenido interesante. ¡Vuelve pronto!
						</p>
					</div>

				<?php endif; ?>

			</div>
		</main>
	</div>

<?php
get_footer();
