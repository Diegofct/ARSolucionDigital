<?php
/**
 * Template for displaying the Servicios page
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

	<!-- Wrapper para header con el mismo efecto de brillo de la página de inicio -->
	<div class="bg-glow-effect">
		<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

		<!-- Hero Section para Servicios -->
		<section class="py-20 sm:py-20 md:py-24 lg:py-28">
			<div class="container mx-auto px-4 sm:px-6 lg:px-8">
				<!-- Section Header -->
				<div class="text-center max-w-4xl mx-auto relative z-10">
					<!-- Main Title -->
					<h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 sm:mb-8 leading-tight">
						Nuestros Servicios
					</h1>

					<!-- Description Text -->
					<p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-200 leading-relaxed">
						Paquetes cerrados de 7–30 días, con métricas, integraciones robustas y garantía. Resultados en semanas, no en meses.
					</p>
				</div>
			</div>
		</section>
	</div>

	<div id="content" class="bg-[#12003C]">
		<main id="main" class="site-main py-12 sm:py-16 md:py-20 lg:py-24">
			<div class="container mx-auto px-4 sm:px-6 lg:px-8">

				<!-- Services Grid Container with Background Effect -->
				<div class="relative max-w-5xl mx-auto">

					<!-- Elipse Background Image -->
					<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-[1500px] h-[600px] opacity-60 pointer-events-none z-0">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Elipse.png' ); ?>"
							 alt="Background effect"
							 class="w-full h-full object-contain">
					</div>

					<!-- Services Grid - 2 columns -->
					<div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 lg:gap-10">

					<?php
					// Definir los 4 servicios
					$services = array(
						array(
							'image' => 'servicio1.png',
							'title' => 'Nuestros OPS Aceleretors: Apps internas y automatización de servicios',
							'description' => 'De 10 pasos manuales a un flujo automático en 4-6 semanas. Menos errores, más velocidad.',
							'list' => array(
								'App interna (roles, validaciones, adjuntos).',
								'Automatizaciones (aprobaciones, SLA, notificaciones).',
								'Integraciones ERP/CRM/e-commerce + dashboard operativo.',
							),
						),
						array(
							'image' => 'servicio2.png',
							'title' => 'MVP Kickstart: De idea a demo que vende',
							'description' => 'MVP usable en 30 días para conseguir usuarios o levantar inversión.',
							'list' => array(
								'Scope mínimo (3–5 flujos críticos) y UX/UI esencial.',
								'Pagos o importación de datos + telemetría básica.',
								'Demo script y backlog de próximos 60–90 días.',
							),
						),
						array(
							'image' => 'servicio3.png',
							'title' => 'Integraciones en 10 días: ERP/CRM/e-commerce',
							'description' => 'Adiós al copiar/pegar. Sincronización fiable y datos consistentes en 7–10 días.',
							'list' => array(
								'Integración bidireccional (API/CSV programado).',
								'Reconciliación, reintentos, DLQ y alertas.',
								'Monitor básico de integraciones.',
							),
						),
						array(
							'image' => 'servicio4.png',
							'title' => 'Web & eCommerce en 10–21 días',
							'description' => 'Webs rápidas en WordPress y tiendas en WooCommerce/PrestaShop listas para vender, con Core Web Vitals en mente.',
							'list' => array(
								'Arquitectura de información y maquetación responsive.',
								'Checkout optimizado, impuestos/envíos y SEO técnico base.',
								'Analítica, RGPD y handover con vídeo.'
							),
						),
					);

					foreach ( $services as $service ) :
					?>
						<!-- Service Card -->
						<div class="bg-[#E6E6E6] p-4 sm:p-5 md:p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02] flex flex-col">

							<!-- Service Image -->
							<div class="w-full mb-4 overflow-hidden rounded-lg">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $service['image'] ); ?>"
									 alt="<?php echo esc_attr( $service['title'] ); ?>"
									 class="w-full h-[160px] sm:h-[180px] md:h-[200px] lg:h-[220px] object-cover">
							</div>

							<!-- Service Content -->
							<div class="flex flex-col flex-grow">
								<!-- Title -->
								<h3 class="text-base sm:text-lg md:text-xl font-bold text-[#12003C] text-center leading-tight mb-6">
									<?php echo esc_html( $service['title'] ); ?>
								</h3>

								<!-- Description -->
								<p class="text-xs sm:text-sm md:text-base text-[#12003C] text-center leading-[1.4] mb-6">
									<?php echo esc_html( $service['description'] ); ?>
								</p>

								<!-- List -->
								<?php if ( ! empty( $service['list'] ) ) : ?>
									<ul class="text-xs sm:text-sm md:text-base text-[#12003C] space-y-2 mb-4 flex-grow list-disc list-inside text-center mx-auto max-w-md">
										<?php foreach ( $service['list'] as $item ) : ?>
											<li class="leading-[1.3]"><?php echo esc_html( $item ); ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>

								<!-- Button -->
								<div class="flex justify-center items-center mt-auto">
									<a href="#<?php echo sanitize_title( $service['title'] ); ?>"
									   class="inline-block px-5 sm:px-6 md:px-7 py-2 sm:py-2.5 bg-[#7E52FF] text-white font-semibold rounded-full hover:bg-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl text-xs sm:text-sm md:text-base">
										Ver más
									</a>
								</div>
							</div>

						</div>
					<?php endforeach; ?>

					</div>
					<!-- End Services Grid -->

				</div>
				<!-- End Container with Background Effect -->

				<!-- Call to Action Text -->
				<div class="text-center mt-16 sm:mt-20 md:mt-24 lg:mt-28 xl:mt-32 mb-12 sm:mb-16 md:mb-20 lg:mb-24">
					<h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-white leading-tight px-4">
						¿No sabes cuál elegir? Empecemos por un diagnóstico rápido
					</h2>
				</div>

				<!-- Contact Section -->
				<?php get_template_part( 'template-parts/layout/contact', 'content' ); ?>

			</div>
		</main>
	</div>

<?php
get_footer();
