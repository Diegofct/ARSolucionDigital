<?php
/**
 * Template part for displaying the services section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

// Definir servicios
$services = array(
	array(
		'image' => 'servicio1.png',
		'title' => 'Nuestros OPS Aceleretors: Apps internas y automatización de servicios',
		'description' => 'De 10 pasos manuales a un flujo automático en 4-6 semanas. Menos errores, más velocidad.',
	),
	array(
		'image' => 'servicio2.png',
		'title' => 'MVP Kickstart: De idea a demo que vende',
		'description' => 'MVP usable en 30 días para conseguir usuarios o levantar inversión.',
	),
	array(
		'image' => 'servicio3.png',
		'title' => 'Integraciones en 10 días: ERP/CRM/e-commerce',
		'description' => 'Adiós al copiar/pegar. Sincronización fiable y datos consistentes en 7–10 días.',
	),
	array(
		'image' => 'servicio4.png',
		'title' => 'Web & eCommerce en 10–21 días',
		'description' => 'Webs rápidas en WordPress y tiendas en WooCommerce/PrestaShop listas para vender, con Core Web Vitals en mente.',
	),
);

?>

<section class="py-16 sm:py-20 md:py-24 lg:py-28 bg-white">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Title -->
		<div class="text-center mb-8 sm:mb-12 md:mb-16">
			<h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#7E52FF] mb-6 sm:mb-8 md:mb-10">
				Nuestros Servicios
			</h2>

			<!-- Features List -->
			<div class="max-w-4xl mx-auto space-y-3 sm:space-y-4 text-left sm:text-center px-4">
				<p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed">
					<span class="font-bold text-black">Resultados medibles:</span> Métricas acordadas y entregables transferibles.
				</p>
				<p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed">
					<span class="font-bold text-black">Velocidad y foco:</span> Paquetes cerrados de 7-30 días.
				</p>
				<p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed">
					<span class="font-bold text-black">Sin humo:</span> Integraciones robustas con tu stack actual.
				</p>
			</div>
		</div>

		<!-- Services Carousel -->
		<div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

			<!-- Carousel Container with Gray Background -->
			<div class="relative rounded-2xl py-8 sm:py-10 md:py-12 lg:py-14 px-6 sm:px-8 md:px-10 lg:px-12 xl:px-16">
				<div class="overflow-hidden">
					<div id="services-carousel-track" class="flex transition-transform duration-500 ease-out">

						<?php foreach ( $services as $index => $service ) : ?>
							<div class="carousel-slide w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-2 sm:px-3 md:px-4">
								<!-- Card with responsive dimensions -->
								<div class="bg-[#E6E6E6] p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-[1.02] flex flex-col h-full mx-auto overflow-hidden
											max-w-[300px] sm:max-w-[340px] md:max-w-[380px] lg:max-w-[420px] xl:max-w-[482px]">

									<!-- Service Image - Fixed heights -->
									<div class="w-full flex-shrink-0 overflow-hidden">
										<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $service['image'] ); ?>"
											 alt="<?php echo esc_attr( $service['title'] ); ?>"
											 class="w-full h-[160px] sm:h-[200px] md:h-[240px] lg:h-[280px] xl:h-[320px] object-cover rounded-2xl">
									</div>

									<!-- Service Content - Flexible -->
									<div class="flex flex-col flex-grow p-4 sm:p-5 md:p-6 lg:p-7">
										<!-- Title with controlled height -->
										<h3 class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-black text-center leading-tight mb-3 line-clamp-3">
											<?php echo esc_html( $service['title'] ); ?>
										</h3>

										<!-- Description with controlled height -->
										<p class="text-[10px] sm:text-xs md:text-sm lg:text-[15px] text-black text-center leading-snug mb-4 sm:mb-5 flex-grow line-clamp-4">
											<?php echo esc_html( $service['description'] ); ?>
										</p>

										<!-- Button -->
										<div class="flex justify-center items-center mt-auto">
											<a href="<?php echo esc_url( home_url( '/servicios#' . sanitize_title( $service['title'] ) ) ); ?>"
											   class="inline-block px-5 sm:px-6 md:px-7 lg:px-9 py-2 sm:py-2.5 md:py-3 bg-[#7E52FF] text-white font-semibold rounded-full hover:bg-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl text-[10px] sm:text-xs md:text-sm lg:text-base whitespace-nowrap">
												Ver más
											</a>
										</div>
									</div>

								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>

				<!-- Navigation Arrows -->
				<button id="carousel-prev"
						class="absolute left-0 sm:left-1 md:left-2 top-1/2 -translate-y-1/2 text-gray-600 hover:text-gray-800 transition-colors duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-gray-400 rounded-full p-0.5 sm:p-1"
						aria-label="Anterior">
					<svg class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 lg:w-12 lg:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
					</svg>
				</button>

				<button id="carousel-next"
						class="absolute right-0 sm:right-1 md:right-2 top-1/2 -translate-y-1/2 text-gray-600 hover:text-gray-800 transition-colors duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-gray-400 rounded-full p-0.5 sm:p-1"
						aria-label="Siguiente">
					<svg class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 lg:w-12 lg:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
					</svg>
				</button>
			</div>

			<!-- Dots Indicators -->
			<div class="flex justify-center gap-2 sm:gap-3 mt-6 sm:mt-8 md:mt-10">
				<?php foreach ( $services as $index => $service ) : ?>
					<button class="carousel-dot w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#7E52FF]"
							data-slide="<?php echo $index; ?>"
							aria-label="Ir a slide <?php echo $index + 1; ?>">
					</button>
				<?php endforeach; ?>
			</div>

		</div>

	</div>
</section><!-- .services-section -->

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const track = document.getElementById('services-carousel-track');
		const slides = document.querySelectorAll('.carousel-slide');
		const prevBtn = document.getElementById('carousel-prev');
		const nextBtn = document.getElementById('carousel-next');
		const dots = document.querySelectorAll('.carousel-dot');

		let currentSlide = 0;
		let slidesPerView = 1;
		let totalSlides = slides.length;

		// Calculate slides per view based on screen size
		function updateSlidesPerView() {
			const width = window.innerWidth;
			if (width >= 1024) {
				slidesPerView = 3;
			} else if (width >= 640) {
				slidesPerView = 2;
			} else {
				slidesPerView = 1;
			}
		}

		// Update carousel position
		function updateCarousel() {
			const maxSlide = totalSlides - slidesPerView;
			if (currentSlide > maxSlide) {
				currentSlide = maxSlide;
			}
			if (currentSlide < 0) {
				currentSlide = 0;
			}

			const translateX = -(currentSlide * (100 / slidesPerView));
			track.style.transform = `translateX(${translateX}%)`;

			// Update dots
			dots.forEach((dot, index) => {
				if (index === currentSlide) {
					dot.style.backgroundColor = '#7E52FF';
					dot.classList.add('w-6', 'sm:w-8', 'md:w-10');
				} else {
					dot.style.backgroundColor = '#9CA3AF';
					dot.classList.remove('w-6', 'sm:w-8', 'md:w-10');
				}
			});

			// Update button states
			prevBtn.disabled = currentSlide === 0;
			nextBtn.disabled = currentSlide >= maxSlide;

			if (prevBtn.disabled) {
				prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
			} else {
				prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
			}

			if (nextBtn.disabled) {
				nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
			} else {
				nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
			}
		}

		// Previous slide
		prevBtn.addEventListener('click', function() {
			if (currentSlide > 0) {
				currentSlide--;
				updateCarousel();
			}
		});

		// Next slide
		nextBtn.addEventListener('click', function() {
			const maxSlide = totalSlides - slidesPerView;
			if (currentSlide < maxSlide) {
				currentSlide++;
				updateCarousel();
			}
		});

		// Dot navigation
		dots.forEach((dot, index) => {
			dot.addEventListener('click', function() {
				currentSlide = index;
				updateCarousel();
			});
		});

		// Touch/Swipe support
		let touchStartX = 0;
		let touchEndX = 0;

		track.addEventListener('touchstart', function(e) {
			touchStartX = e.changedTouches[0].screenX;
		}, { passive: true });

		track.addEventListener('touchend', function(e) {
			touchEndX = e.changedTouches[0].screenX;
			handleSwipe();
		}, { passive: true });

		function handleSwipe() {
			const swipeThreshold = 50;
			const diff = touchStartX - touchEndX;

			if (Math.abs(diff) > swipeThreshold) {
				if (diff > 0) {
					// Swipe left - next
					const maxSlide = totalSlides - slidesPerView;
					if (currentSlide < maxSlide) {
						currentSlide++;
						updateCarousel();
					}
				} else {
					// Swipe right - prev
					if (currentSlide > 0) {
						currentSlide--;
						updateCarousel();
					}
				}
			}
		}

		// Handle window resize
		let resizeTimer;
		window.addEventListener('resize', function() {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				updateSlidesPerView();
				updateCarousel();
			}, 250);
		});

		// Initialize
		updateSlidesPerView();
		updateCarousel();

		// Auto-play (optional)
		let autoplayInterval;
		function startAutoplay() {
			autoplayInterval = setInterval(function() {
				const maxSlide = totalSlides - slidesPerView;
				if (currentSlide < maxSlide) {
					currentSlide++;
				} else {
					currentSlide = 0;
				}
				updateCarousel();
			}, 5000); // Change slide every 5 seconds
		}

		function stopAutoplay() {
			clearInterval(autoplayInterval);
		}

		// Start autoplay
		startAutoplay();

		// Pause autoplay on hover
		track.addEventListener('mouseenter', stopAutoplay);
		track.addEventListener('mouseleave', startAutoplay);

		// Pause autoplay on touch
		track.addEventListener('touchstart', stopAutoplay);
	});
</script>
