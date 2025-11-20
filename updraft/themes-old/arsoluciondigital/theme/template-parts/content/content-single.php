<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Featured Image Hero -->
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden relative">
			<?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
			<div class="absolute inset-0 bg-gradient-to-t from-[#12003C] to-transparent"></div>
		</div>
	<?php endif; ?>

	<!-- Content Container -->
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20">

		<header class="entry-header mb-8 sm:mb-12">
			<?php the_title( '<h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">', '</h1>' ); ?>

			<div class="flex flex-wrap items-center gap-4 text-sm text-gray-400">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="flex items-center gap-2">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
					</svg>
					<?php echo esc_html( get_the_date() ); ?>
				</time>
				<span>•</span>
				<span class="flex items-center gap-2">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
					</svg>
					<?php echo esc_html( arsoluciondigital_reading_time() ); ?> min de lectura
				</span>
				<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) :
				?>
					<span>•</span>
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
						</svg>
						<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="hover:text-[#7E52FF] transition-colors">
							<?php echo esc_html( $categories[0]->name ); ?>
						</a>
					</span>
				<?php endif; ?>
			</div>
		</header>

		<div class="prose prose-lg prose-invert max-w-none
			prose-headings:text-white prose-headings:font-bold
			prose-h2:text-2xl prose-h2:sm:text-3xl prose-h2:mb-4 prose-h2:mt-8
			prose-h3:text-xl prose-h3:sm:text-2xl prose-h3:mb-3 prose-h3:mt-6
			prose-p:text-gray-300 prose-p:leading-relaxed prose-p:mb-6
			prose-a:text-[#7E52FF] prose-a:no-underline hover:prose-a:text-purple-400 hover:prose-a:underline
			prose-strong:text-white prose-strong:font-semibold
			prose-ul:text-gray-300 prose-ul:list-disc prose-ul:ml-6
			prose-ol:text-gray-300 prose-ol:list-decimal prose-ol:ml-6
			prose-li:mb-2
			prose-blockquote:border-l-4 prose-blockquote:border-[#7E52FF] prose-blockquote:pl-6 prose-blockquote:italic prose-blockquote:text-gray-400
			prose-code:text-[#7E52FF] prose-code:bg-[#1a0a3e] prose-code:px-2 prose-code:py-1 prose-code:rounded
			prose-img:rounded-xl prose-img:shadow-2xl">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links mt-8 flex items-center gap-2 text-gray-400">' . __( 'Páginas:', 'arsoluciondigital' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<!-- Tags -->
		<?php
		$tags = get_the_tags();
		if ( $tags ) :
		?>
			<footer class="entry-footer mt-12 pt-8 border-t border-gray-800">
				<div class="flex flex-wrap gap-2">
					<?php foreach ( $tags as $tag ) : ?>
						<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
						   class="px-4 py-2 bg-[#1a0a3e] text-gray-300 text-sm rounded-full hover:bg-[#7E52FF] hover:text-white transition-colors">
							#<?php echo esc_html( $tag->name ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			</footer>
		<?php endif; ?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
