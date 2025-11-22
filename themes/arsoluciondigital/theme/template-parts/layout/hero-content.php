<?php
/**
 * Template part for displaying the hero/cover section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

// Definir contenido del hero según el contexto
$hero_title = is_front_page()
	? 'Automatizamos tu<br>operación y <span class="text-[#7E52FF] font-bold">lanzamos<br>productos en semanas</span>,<br>no en meses'
	: get_the_title();

$hero_description = is_front_page()
	? 'Reducimos tu tiempo de ciclo un 40–60%, eliminamos tareas manuales y lanzamos tu MVP en 30 días.'
	: ( has_excerpt() ? get_the_excerpt() : '' );

?>

<section class="min-h-[calc(100vh-80px)] flex items-center justify-center py-8 sm:py-12 md:py-16 lg:py-20">
	<div class="container mx-auto container-padding w-full">
		<div class="max-w-5xl mx-auto text-center text-white">

			<!-- Hero Title -->
			<h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl mb-4 sm:mb-6 md:mb-8 leading-[1.1]">
				<?php echo wp_kses_post( $hero_title ); ?>
			</h1>

			<!-- Hero Description -->
			<?php if ( ! empty( $hero_description ) ) : ?>
				<p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 md:mb-10 text-gray-200 leading-[1.4] max-w-3xl mx-auto px-4">
					<?php echo esc_html( $hero_description ); ?>
				</p>
			<?php endif; ?>

			<!-- Hero CTA Buttons -->
			<div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center px-4">
				<?php
				$contacto_page = get_page_by_path( 'contacto' );
				$contacto_url = $contacto_page ? get_permalink( $contacto_page->ID ) : home_url( '/contacto' );
				?>
				<a href="<?php echo esc_url( $contacto_url ); ?>"
				   class="w-full sm:w-auto inline-block px-6 sm:px-8 py-3 sm:py-4 bg-purple-600 text-white font-semibold rounded-full hover:bg-purple-700 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 text-sm sm:text-base">
					Agendar cita
				</a>
				<?php
				$servicios_page = get_page_by_path( 'servicios' );
				$servicios_url = $servicios_page ? get_permalink( $servicios_page->ID ) : home_url( '/servicios' );
				?>
				<a href="<?php echo esc_url( $servicios_url ); ?>"
				   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 sm:px-8 py-3 sm:py-4 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-purple-900 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 text-sm sm:text-base">
					Ver servicios
					<svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
					</svg>
				</a>
			</div>

		</div>
	</div>
</section><!-- .hero-section -->
