<?php
/**
 * Template part for displaying the process/timeline section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

// Definir pasos del proceso
$process_steps = array(
	array(
		'position' => 'right', // Contenedor a la derecha
		'number' => '1',
		'title' => 'Discovery 72h',
		'description' => 'Problema, alcance mínimo y métricas (p. ej., tiempo de ciclo, errores, conversión).',
		'side_text' => 'Empezamos por el objetivo de negocio y definimos 2–3 métricas de éxito.',
	),
	array(
		'position' => 'left', // Contenedor a la izquierda
		'number' => '2',
		'title' => 'Prototipo en 7 días',
		'description' => 'Wireframe funcional o demo técnico que valida la solución antes de codificar.',
		'side_text' => 'Validamos rápido si la dirección es correcta y ajustamos sobre la marcha.',
	),
	array(
		'position' => 'right',
		'number' => '3',
		'title' => 'Sprint de desarrollo',
		'description' => 'Iteraciones de 1-2 semanas con entregas continuas y feedback constante.',
		'side_text' => 'Desarrollamos en ciclos cortos para que veas progreso real cada semana.',
	),
	array(
		'position' => 'left',
		'number' => '4',
		'title' => 'Testing & refinamiento',
		'description' => 'Pruebas automatizadas, corrección de bugs y optimización de rendimiento.',
		'side_text' => 'Garantizamos calidad con testing riguroso antes del lanzamiento.',
	),
	array(
		'position' => 'right',
		'number' => '5',
		'title' => 'Deploy & handoff',
		'description' => 'Lanzamiento a producción, documentación completa y transferencia de conocimiento.',
		'side_text' => 'Tu equipo queda capacitado para mantener y evolucionar la solución.',
	),
);

?>

<section class="bg-glow-corners py-16 sm:py-20 md:py-24 lg:py-28">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Header -->
		<div class="text-center mb-12 sm:mb-16 md:mb-20">
			<!-- Small Badge -->
			<div class="inline-block mb-6 sm:mb-8">
				<span class="px-6 py-2 sm:px-8 sm:py-3 bg-gradient-to-r from-[#C7B3FF] to-[#7E52FF] text-white text-xs sm:text-sm font-semibold rounded-full shadow-lg">
					Cómo trabajamos
				</span>
			</div>

			<!-- Main Title -->
			<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white max-w-4xl mx-auto leading-tight px-4">
				Un proceso claro para entregar valor en semanas
			</h2>
		</div>

		<!-- Timeline Container -->
		<div class="relative max-w-6xl mx-auto">

			<!-- Vertical Line -->
			<div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-[#5A76FF] top-0 bottom-0 hidden lg:block"></div>

			<!-- Timeline Steps -->
			<div class="space-y-12 sm:space-y-16 md:space-y-20 lg:space-y-24">

				<?php foreach ( $process_steps as $index => $step ) : ?>

					<?php if ( $step['position'] === 'right' ) : ?>
						<!-- Step Right -->
						<div class="relative flex flex-col lg:flex-row items-center lg:items-start gap-6 lg:gap-0 lg:min-h-[180px]">

							<!-- Left Side Text (Desktop) -->
							<div class="hidden lg:flex lg:w-1/2 lg:pr-16 xl:pr-20 lg:items-center lg:justify-end">
								<p class="text-gray-300 text-sm md:text-base lg:text-lg leading-relaxed text-right max-w-md">
									<?php echo esc_html( $step['side_text'] ); ?>
								</p>
							</div>

							<!-- Center Circle Dot (Desktop) -->
							<div class="hidden lg:block absolute left-1/2 top-28 transform -translate-x-1/2 w-6 h-6 bg-[#5A76FF] rounded-full border-4 border-[#12003C] z-20"></div>

							<!-- Arrow Image (Desktop) - Starts from circle -->
							<div class="hidden lg:block absolute left-1/2 top-8 transform translate-x-3 w-20 xl:w-24 z-10">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flechacurvaderecha.png' ); ?>"
									 alt="Flecha"
									 class="w-full h-auto opacity-90">
							</div>

							<!-- Right Side Content Box -->
							<div class="w-full lg:w-1/2 lg:pl-28 xl:pl-32">
								<div class="bg-[#CCCCCC] rounded-xl p-5 sm:p-6 md:p-7 lg:p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
									<h3 class="text-lg sm:text-xl md:text-2xl font-bold text-black mb-4">
										<?php echo esc_html( $step['number'] . '. ' . $step['title'] ); ?>
									</h3>
									<hr class="border-t-2 border-gray-400 mb-4">
									<p class="text-gray-800 text-sm sm:text-base md:text-lg leading-relaxed">
										<?php echo esc_html( $step['description'] ); ?>
									</p>
								</div>
								<!-- Side Text (Mobile/Tablet) -->
								<div class="lg:hidden mt-4 px-4">
									<p class="text-gray-300 text-sm md:text-base leading-relaxed text-center">
										<?php echo esc_html( $step['side_text'] ); ?>
									</p>
								</div>
							</div>

						</div>

					<?php else : ?>
						<!-- Step Left -->
						<div class="relative flex flex-col lg:flex-row items-center lg:items-start gap-6 lg:gap-0 lg:min-h-[180px]">

							<!-- Left Side Content Box -->
							<div class="w-full lg:w-1/2 lg:pr-28 xl:pr-32">
								<div class="bg-[#CCCCCC] rounded-xl p-5 sm:p-6 md:p-7 lg:p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
									<h3 class="text-lg sm:text-xl md:text-2xl font-bold text-black mb-4">
										<?php echo esc_html( $step['number'] . '. ' . $step['title'] ); ?>
									</h3>
									<hr class="border-t-2 border-gray-400 mb-4">
									<p class="text-gray-800 text-sm sm:text-base md:text-lg leading-relaxed">
										<?php echo esc_html( $step['description'] ); ?>
									</p>
								</div>
								<!-- Side Text (Mobile/Tablet) -->
								<div class="lg:hidden mt-4 px-4">
									<p class="text-gray-300 text-sm md:text-base leading-relaxed text-center">
										<?php echo esc_html( $step['side_text'] ); ?>
									</p>
								</div>
							</div>

							<!-- Center Circle Dot (Desktop) -->
							<div class="hidden lg:block absolute left-1/2 top-28 transform -translate-x-1/2 w-6 h-6 bg-[#5A76FF] rounded-full border-4 border-[#12003C] z-20"></div>

							<!-- Arrow Image (Desktop) - Starts from circle -->
							<div class="hidden lg:block absolute left-1/2 top-8 transform -translate-x-full -translate-x-3 w-20 xl:w-24 z-10">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flechacurvaizquierda.png' ); ?>"
									 alt="Flecha"
									 class="w-full h-auto opacity-90">
							</div>

							<!-- Right Side Text (Desktop) -->
							<div class="hidden lg:flex lg:w-1/2 lg:pl-16 xl:pl-20 lg:items-center">
								<p class="text-gray-300 text-sm md:text-base lg:text-lg leading-relaxed max-w-md">
									<?php echo esc_html( $step['side_text'] ); ?>
								</p>
							</div>

						</div>

					<?php endif; ?>

				<?php endforeach; ?>

			</div>

		</div>

		
	</div>
	<!-- Bottom Content -->
	<div class="text-center mt-20 sm:mt-28 md:mt-38 lg:mt-46 xl:mt-50">
		<!-- Quote Paragraph -->
		<p class="text-gray-200 text-lg sm:text-xl md:text-2xl lg:text-3xl font-medium mb-8 sm:mb-10 md:mb-12 leading-relaxed max-w-4xl mx-auto px-4">
			Si el plan no cambia una métrica, lo modificamos hasta que lo haga.
		</p>

		<!-- CTA Button -->
		<div class="flex justify-center">
			<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"
			   class="inline-block px-6 sm:px-8 py-3 sm:py-3.5 bg-gradient-to-r from-[#C7B3FF] to-[#7E52FF] text-black font-semibold rounded-lg hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base">
				¿Hablamos?
			</a>
		</div>
	</div>
</section><!-- .process-section -->
