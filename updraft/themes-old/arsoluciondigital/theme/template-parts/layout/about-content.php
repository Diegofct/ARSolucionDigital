<?php
/**
 * Template part for displaying the about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

// Definir características/servicios
$features = array(
	'Webs y tiendas en 10–21 días (WordPress, WooCommerce, PrestaShop)',
	'Integraciones ERP/CRM y e-commerce (APIs, colas, datos consistentes)',
	'Arquitecturas escalables y desarrollo backend (PHP/Symfony/Laravel, JS)',
	'Optimización de rendimiento y fiabilidad (caching, colas, observabilidad)',
);

?>

<section class="py-10 sm:py-20 md:py-24 lg:py-28 bg-white">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Title -->
		<div class="text-center mb-8 sm:mb-10 md:mb-12">
			<h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#7E52FF] mb-6 sm:mb-8">
				Nosotros
			</h2>

			<!-- Description -->
			<p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-700 leading-relaxed max-w-5xl mx-auto px-4">
				Más de una década creando productos web, automatizando procesos e integrando sistemas en entornos reales de alto tráfico. Aplicamos prácticas de arquitectura y operación aprendidas en empresas líderes para entregar resultados medibles en semanas.
			</p>
		</div>

		<!-- Features Container -->
		<div class="max-w-6xl mx-auto mt-12 sm:mt-16 md:mt-20 space-y-6 sm:space-y-8 md:space-y-10 px-4 sm:px-6">

			<!-- Top Row - Two containers centered -->
			<div class="flex flex-col sm:flex-row flex-wrap justify-center items-stretch gap-3 sm:gap-4 md:gap-5 lg:gap-6">
				<!-- Feature 1 -->
				<div class="flex-1 min-w-0 sm:max-w-md px-4 sm:px-6 md:px-8 lg:px-10 py-3 sm:py-3.5 md:py-4 bg-[#D9D9D9] rounded-full shadow-md hover:shadow-lg transition-all duration-300">
					<p class="text-[11px] sm:text-xs md:text-sm lg:text-base text-gray-800 font-medium text-center leading-snug sm:leading-relaxed break-words">
						<?php echo esc_html( $features[0] ); ?>
					</p>
				</div>

				<!-- Feature 2 -->
				<div class="flex-1 min-w-0 sm:max-w-md px-4 sm:px-6 md:px-8 lg:px-10 py-3 sm:py-3.5 md:py-4 bg-[#D9D9D9] rounded-full shadow-md hover:shadow-lg transition-all duration-300">
					<p class="text-[11px] sm:text-xs md:text-sm lg:text-base text-gray-800 font-medium text-center leading-snug sm:leading-relaxed break-words">
						<?php echo esc_html( $features[1] ); ?>
					</p>
				</div>
			</div>

			<!-- Bottom Row - Two containers shifted left -->
			<div class="flex flex-col sm:flex-row flex-wrap justify-center md:justify-start items-stretch gap-3 sm:gap-4 md:gap-5 lg:gap-6 md:ml-8 lg:ml-16 xl:ml-24">
				<!-- Feature 3 -->
				<div class="flex-1 min-w-0 sm:max-w-md px-4 sm:px-6 md:px-8 lg:px-10 py-3 sm:py-3.5 md:py-4 bg-[#D9D9D9] rounded-full shadow-md hover:shadow-lg transition-all duration-300">
					<p class="text-[11px] sm:text-xs md:text-sm lg:text-base text-gray-800 font-medium text-center leading-snug sm:leading-relaxed break-words">
						<?php echo esc_html( $features[2] ); ?>
					</p>
				</div>

				<!-- Feature 4 -->
				<div class="flex-1 min-w-0 sm:max-w-md px-4 sm:px-6 md:px-8 lg:px-10 py-3 sm:py-3.5 md:py-4 bg-[#D9D9D9] rounded-full shadow-md hover:shadow-lg transition-all duration-300">
					<p class="text-[11px] sm:text-xs md:text-sm lg:text-base text-gray-800 font-medium text-center leading-snug sm:leading-relaxed break-words">
						<?php echo esc_html( $features[3] ); ?>
					</p>
				</div>
			</div>

		</div>

	</div>

	<!-- Trayectoria Image - Full Width -->
	<div class="w-full mt-12 sm:mt-16 md:mt-20 lg:mt-24">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/trayectoria.png' ); ?>"
			 alt="Trayectoria"
			 class="w-full h-auto object-cover">
	</div>

</section><!-- .about-section -->
