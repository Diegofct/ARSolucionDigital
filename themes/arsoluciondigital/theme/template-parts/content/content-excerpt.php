<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-[#1a0a3e] rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-[1.02] flex flex-col h-full' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="aspect-video overflow-hidden">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover hover:scale-110 transition-transform duration-500' ) ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="p-6 sm:p-8 flex flex-col flex-grow">

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="inline-block px-3 py-1 mb-4 text-xs font-semibold text-white bg-[#7E52FF] rounded-full w-fit">
				<?php esc_html_e( 'Destacado', 'arsoluciondigital' ); ?>
			</span>
		<?php endif; ?>

		<header class="entry-header mb-4">
			<?php
			the_title( sprintf( '<h2 class="text-xl sm:text-2xl font-bold text-white mb-3 leading-tight hover:text-[#7E52FF] transition-colors"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			?>

			<div class="flex items-center gap-4 text-sm text-gray-400">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</time>
				<span>•</span>
				<span><?php echo esc_html( arsoluciondigital_reading_time() ); ?> min de lectura</span>
			</div>
		</header>

		<div class="entry-content text-gray-300 text-sm sm:text-base leading-relaxed mb-6 flex-grow">
			<?php the_excerpt(); ?>
		</div>

		<footer class="entry-footer mt-auto">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="inline-flex items-center gap-2 text-[#7E52FF] hover:text-purple-400 font-semibold transition-colors group">
				Leer más
				<svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
				</svg>
			</a>
		</footer>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
