<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

?>

<header id="masthead" class="bg-white shadow-sm">
	<div class="container mx-auto px-4 py-4">
		<div class="flex items-center justify-between">

			<!-- Logo -->
			<div class="flex-shrink-0">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoARSD.png" alt="AR Solución Digital" class="h-12">
				</a>
			</div>

			<!-- Navigation Menu -->
			<nav class="hidden md:flex items-center space-x-8">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-gray-700 hover:text-purple-600 transition-colors">Inicio</a>
				<a href="<?php echo esc_url( home_url( '/servicios' ) ); ?>" class="text-gray-700 hover:text-purple-600 transition-colors">Servicios</a>
				<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="text-gray-700 hover:text-purple-600 transition-colors">Contacto</a>
				<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-gray-700 hover:text-purple-600 transition-colors">Blog</a>
			</nav>

			<!-- CTA Button -->
			<div class="flex-shrink-0">
				<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="inline-block px-6 py-3 bg-gradient-to-r from-[#C7B3FF] to-[#7E52FF] text-black font-semibold rounded-lg hover:opacity-90 transition-opacity">
					¿Hablamos?
				</a>
			</div>

		</div>
	</div>
</header><!-- #masthead -->
