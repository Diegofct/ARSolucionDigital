<?php
/**
 * Template Name: Blog
 * Template for displaying the Blog page
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
						Explora ideas, tips y tendencias que te ayudarán a potenciar tu marca y mantenerte al día en el mundo digital.
					</p>
				</div>
			</div>
		</section>
	</div>

	<div id="content" class="bg-white">
		<main id="main" class="site-main py-12 sm:py-16 md:py-20 lg:py-24">
			<div class="container mx-auto px-4 sm:px-6 lg:px-8">

				<div class="max-w-7xl mx-auto">
					<!-- Layout: Content + Sidebar -->
					<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

						<!-- Main Content Area -->
						<div class="lg:col-span-2">

							<?php
							// Query to get all blog posts
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$blog_posts = new WP_Query( array(
								'post_type' => 'post',
								'posts_per_page' => 6,
								'paged' => $paged,
								'post_status' => 'publish',
								'orderby' => 'date',
								'order' => 'DESC'
							) );

							if ( $blog_posts->have_posts() ) :
							?>

								<!-- Blog Posts Grid -->
								<div class="grid grid-cols-1 gap-8">
									<?php
									while ( $blog_posts->have_posts() ) :
										$blog_posts->the_post();
										?>
										<!-- Blog Post Card -->
										<article class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-200 hover:border-gray-300 transition-all duration-300 hover:shadow-xl group">
											<div class="grid grid-cols-1 md:grid-cols-5 gap-0">

												<?php if ( has_post_thumbnail() ) : ?>
													<!-- Image Column -->
													<div class="md:col-span-2 aspect-video md:aspect-auto overflow-hidden">
														<a href="<?php echo esc_url( get_permalink() ); ?>">
															<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500' ) ); ?>
														</a>
													</div>
												<?php endif; ?>

												<!-- Content Column -->
												<div class="<?php echo has_post_thumbnail() ? 'md:col-span-3' : 'md:col-span-5'; ?> p-6 sm:p-8 flex flex-col">

													<!-- Category Badge -->
													<?php
													$categories = get_the_category();
													if ( ! empty( $categories ) ) :
													?>
														<div class="mb-3">
															<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"
															   class="inline-block px-3 py-1 text-xs font-semibold text-[#7E52FF] bg-purple-50 rounded-full hover:bg-purple-100 transition-colors">
																<?php echo esc_html( $categories[0]->name ); ?>
															</a>
														</div>
													<?php endif; ?>

													<!-- Title -->
													<h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 leading-tight">
														<a href="<?php echo esc_url( get_permalink() ); ?>" class="hover:text-[#7E52FF] transition-colors">
															<?php the_title(); ?>
														</a>
													</h2>

													<!-- Meta Info -->
													<div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-4">
														<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="flex items-center gap-1">
															<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
															</svg>
															<?php echo esc_html( get_the_date() ); ?>
														</time>
														<span>•</span>
														<span class="flex items-center gap-1">
															<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
															</svg>
															<?php echo esc_html( arsoluciondigital_reading_time() ); ?> min
														</span>
													</div>

													<!-- Excerpt -->
													<div class="text-gray-600 leading-relaxed mb-6 flex-grow">
														<?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
													</div>

													<!-- Read More Link -->
													<div>
														<a href="<?php echo esc_url( get_permalink() ); ?>"
														   class="inline-flex items-center gap-2 text-[#7E52FF] hover:text-purple-700 font-semibold transition-colors group/link">
															Leer más
															<svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
															</svg>
														</a>
													</div>

												</div>

											</div>
										</article>
										<?php
									endwhile;
									?>
								</div>

								<!-- Pagination -->
								<?php if ( $blog_posts->max_num_pages > 1 ) : ?>
									<div class="mt-12">
										<nav class="flex justify-center items-center gap-2">
											<?php
											echo paginate_links( array(
												'total' => $blog_posts->max_num_pages,
												'current' => $paged,
												'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
												'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
												'type' => 'plain',
												'before_page_number' => '<span class="sr-only">Página </span>',
											) );
											?>
										</nav>
									</div>
								<?php endif; ?>

								<?php
								wp_reset_postdata();
							else :
							?>

								<!-- Empty State -->
								<div class="text-center py-20 bg-gray-50 rounded-2xl border border-gray-200">
									<div class="mb-6">
										<svg class="w-20 h-20 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
										</svg>
									</div>
									<h2 class="text-2xl font-bold text-gray-900 mb-3">
										No hay entradas todavía
									</h2>
									<p class="text-gray-600 mb-6">
										Pronto publicaremos contenido sobre automatización y transformación digital.
									</p>
									<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"
									   class="inline-flex items-center gap-2 px-6 py-3 bg-[#7E52FF] text-white font-semibold rounded-lg hover:bg-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
										Contáctanos
										<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
										</svg>
									</a>
								</div>

							<?php endif; ?>

						</div>

						<!-- Sidebar -->
						<aside class="lg:col-span-1">
							<div class="sticky top-8 space-y-8">

								<!-- Search Box -->
								<div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">
									<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
										<svg class="w-5 h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
										</svg>
										Buscar
									</h3>
									<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative">
										<input type="search"
											   name="s"
											   placeholder="Buscar artículos..."
											   class="w-full px-4 py-3 pr-12 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#7E52FF] focus:border-transparent outline-none transition-all text-sm text-gray-900"
											   value="<?php echo get_search_query(); ?>">
										<button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#7E52FF] transition-colors">
											<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
											</svg>
										</button>
									</form>
								</div>

								<!-- Categories -->
								<?php
								$categories = get_categories( array(
									'orderby' => 'count',
									'order' => 'DESC',
									'hide_empty' => true,
									'number' => 8
								) );

								if ( ! empty( $categories ) ) :
								?>
									<div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">
										<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
											<svg class="w-5 h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
											</svg>
											Categorías
										</h3>
										<ul class="space-y-2">
											<?php foreach ( $categories as $category ) : ?>
												<li>
													<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"
													   class="flex items-center justify-between py-2 px-3 rounded-lg hover:bg-white hover:border hover:border-gray-200 transition-all group">
														<span class="text-gray-700 group-hover:text-[#7E52FF] transition-colors"><?php echo esc_html( $category->name ); ?></span>
														<span class="text-xs font-semibold text-gray-400 bg-white px-2 py-1 rounded-full"><?php echo esc_html( $category->count ); ?></span>
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>

								<!-- Popular Tags -->
								<?php
								$tags = get_tags( array(
									'orderby' => 'count',
									'order' => 'DESC',
									'hide_empty' => true,
									'number' => 15
								) );

								if ( ! empty( $tags ) ) :
								?>
									<div class="bg-gray-50 rounded-2xl border border-gray-200 p-6">
										<h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
											<svg class="w-5 h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
											</svg>
											Etiquetas
										</h3>
										<div class="flex flex-wrap gap-2">
											<?php foreach ( $tags as $tag ) : ?>
												<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
												   class="inline-block px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:border-[#7E52FF] hover:text-[#7E52FF] transition-all">
													#<?php echo esc_html( $tag->name ); ?>
												</a>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>

							</div>
						</aside>

					</div>
				</div>

			</div>
		</main>
	</div>

	<!-- Estilos para la paginación -->
	<style>
		.page-numbers {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			min-width: 40px;
			height: 40px;
			padding: 0.5rem 1rem;
			background-color: #f9fafb;
			color: #374151;
			border: 1px solid #e5e7eb;
			border-radius: 0.5rem;
			font-weight: 500;
			transition: all 0.3s;
			text-decoration: none;
		}

		.page-numbers:hover {
			background-color: #7E52FF;
			color: white;
			border-color: #7E52FF;
			transform: scale(1.05);
		}

		.page-numbers.current {
			background-color: #7E52FF;
			color: white;
			border-color: #7E52FF;
		}

		.page-numbers.dots {
			background-color: transparent;
			border-color: transparent;
			color: #9ca3af;
		}

		.page-numbers.dots:hover {
			background-color: transparent;
			border-color: transparent;
			transform: none;
		}
	</style>

<?php
get_footer();
