<?php
/**
 * Template for displaying the front page (Página de Inicio)
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

	<!-- Wrapper que contiene tanto el header como el hero con el efecto de brillo compartido -->
	<div class="bg-glow-effect">
		<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>
		<?php get_template_part( 'template-parts/layout/hero', 'content' ); ?>
	</div>

	<div id="content">
		<main id="main" class="site-main">

			<!-- Services Section -->
			<?php get_template_part( 'template-parts/layout/services', 'content' ); ?>

			<!-- Process/Timeline Section -->
			<?php get_template_part( 'template-parts/layout/process', 'content' ); ?>

			<!-- About Section -->
			<?php get_template_part( 'template-parts/layout/about', 'content' ); ?>

			<!-- Contact Section -->
			<?php get_template_part( 'template-parts/layout/contact', 'content' ); ?>

			<!-- Aquí van las demás secciones de la página de inicio -->

		</main>
	</div>

<?php
get_footer(); 
