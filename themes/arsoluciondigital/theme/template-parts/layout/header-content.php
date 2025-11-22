<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

?>

<header id="masthead" class="relative z-50">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
		<div class="flex items-center justify-between">

			<!-- Logo -->
			<div class="flex-shrink-0 z-50">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoARSD.png"
						 alt="AR Solución Digital"
						 class="h-8 sm:h-10 w-auto">
				</a>
			</div>

			<!-- Desktop Navigation Menu -->
			<nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				   class="text-white hover:text-purple-300 transition-colors duration-300 font-medium text-sm xl:text-base">
					Inicio
				</a>
				<?php
				$servicios_page = get_page_by_path( 'servicios' );
				$servicios_url = $servicios_page ? get_permalink( $servicios_page->ID ) : home_url( '/servicios' );
				?>
				<a href="<?php echo esc_url( $servicios_url ); ?>"
				   class="text-white hover:text-purple-300 transition-colors duration-300 font-medium text-sm xl:text-base">
					Servicios
				</a>
				<?php
				$contacto_page = get_page_by_path( 'contacto' );
				$contacto_url = $contacto_page ? get_permalink( $contacto_page->ID ) : home_url( '/contacto' );
				?>
				<a href="<?php echo esc_url( $contacto_url ); ?>"
				   class="text-white hover:text-purple-300 transition-colors duration-300 font-medium text-sm xl:text-base">
					Contacto
				</a>
				<?php
				$blog_page = get_page_by_path( 'blog' );
				$blog_url = $blog_page ? get_permalink( $blog_page->ID ) : home_url( '/blog' );
				?>
				<a href="<?php echo esc_url( $blog_url ); ?>"
				   class="text-white hover:text-purple-300 transition-colors duration-300 font-medium text-sm xl:text-base">
					Blog
				</a>
			</nav>

			<!-- Desktop CTA Button -->
			<div class="hidden lg:flex flex-shrink-0">
				<a href="<?php echo esc_url( $contacto_url ); ?>"
				   class="inline-block px-6 xl:px-8 py-2.5 xl:py-3 bg-gradient-to-r from-[#7E52FF] to-[#C7B3FF] text-black font-semibold rounded-full hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl text-sm xl:text-base">
					¿Hablamos?
				</a>
			</div>

			<!-- Mobile Menu Button -->
			<button id="mobile-menu-toggle"
					class="lg:hidden z-50 p-2 text-white focus:outline-none focus:ring-2 focus:ring-purple-400 rounded-md"
					aria-label="Toggle menu"
					aria-expanded="false">
				<svg id="menu-open-icon" class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
				</svg>
				<svg id="menu-close-icon" class="w-6 h-6 sm:w-7 sm:h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
				</svg>
			</button>

		</div>

		<!-- Mobile Navigation Menu -->
		<nav id="mobile-menu"
			 class="lg:hidden fixed inset-0 bg-gradient-to-br from-purple-900/98 to-black/98 backdrop-blur-lg transform translate-x-full transition-transform duration-300 ease-in-out pt-28 sm:pt-32 z-40">
			<div class="container mx-auto px-4 sm:px-6 h-full flex flex-col justify-between pb-8">

				<!-- Mobile Menu Links -->
				<div class="flex flex-col space-y-6">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   class="text-white hover:text-purple-300 transition-colors duration-300 font-semibold text-2xl sm:text-3xl py-2 border-b border-purple-500/30">
						Inicio
					</a>
					<a href="<?php echo esc_url( $servicios_url ); ?>"
					   class="text-white hover:text-purple-300 transition-colors duration-300 font-semibold text-2xl sm:text-3xl py-2 border-b border-purple-500/30">
						Servicios
					</a>
					<a href="<?php echo esc_url( $contacto_url ); ?>"
					   class="text-white hover:text-purple-300 transition-colors duration-300 font-semibold text-2xl sm:text-3xl py-2 border-b border-purple-500/30">
						Contacto
					</a>
					<a href="<?php echo esc_url( $blog_url ); ?>"
					   class="text-white hover:text-purple-300 transition-colors duration-300 font-semibold text-2xl sm:text-3xl py-2 border-b border-purple-500/30">
						Blog
					</a>
				</div>

				<!-- Mobile CTA Button -->
				<div class="mt-8">
					<a href="<?php echo esc_url( $contacto_url ); ?>"
					   class="block text-center px-8 py-4 bg-gradient-to-r from-[#7E52FF] to-[#C7B3FF] text-white font-bold rounded-full hover:opacity-90 transition-all duration-300 shadow-xl text-lg sm:text-xl">
						¿Hablamos?
					</a>
				</div>

			</div>
		</nav>

	</div>
</header><!-- #masthead -->

<script>
	// Toggle Mobile Menu
	document.addEventListener('DOMContentLoaded', function() {
		const menuToggle = document.getElementById('mobile-menu-toggle');
		const mobileMenu = document.getElementById('mobile-menu');
		const menuOpenIcon = document.getElementById('menu-open-icon');
		const menuCloseIcon = document.getElementById('menu-close-icon');
		const body = document.body;

		menuToggle.addEventListener('click', function() {
			const isOpen = mobileMenu.classList.contains('translate-x-0');

			if (isOpen) {
				// Close menu
				mobileMenu.classList.remove('translate-x-0');
				mobileMenu.classList.add('translate-x-full');
				menuOpenIcon.classList.remove('hidden');
				menuCloseIcon.classList.add('hidden');
				body.style.overflow = '';
				menuToggle.setAttribute('aria-expanded', 'false');
			} else {
				// Open menu
				mobileMenu.classList.remove('translate-x-full');
				mobileMenu.classList.add('translate-x-0');
				menuOpenIcon.classList.add('hidden');
				menuCloseIcon.classList.remove('hidden');
				body.style.overflow = 'hidden';
				menuToggle.setAttribute('aria-expanded', 'true');
			}
		});

		// Close menu when clicking on a link
		const mobileMenuLinks = mobileMenu.querySelectorAll('a');
		mobileMenuLinks.forEach(link => {
			link.addEventListener('click', function() {
				mobileMenu.classList.remove('translate-x-0');
				mobileMenu.classList.add('translate-x-full');
				menuOpenIcon.classList.remove('hidden');
				menuCloseIcon.classList.add('hidden');
				body.style.overflow = '';
				menuToggle.setAttribute('aria-expanded', 'false');
			});
		});

		// Close menu on window resize if it's open and viewport is large
		window.addEventListener('resize', function() {
			if (window.innerWidth >= 1024 && mobileMenu.classList.contains('translate-x-0')) {
				mobileMenu.classList.remove('translate-x-0');
				mobileMenu.classList.add('translate-x-full');
				menuOpenIcon.classList.remove('hidden');
				menuCloseIcon.classList.add('hidden');
				body.style.overflow = '';
				menuToggle.setAttribute('aria-expanded', 'false');
			}
		});
	});
</script>
