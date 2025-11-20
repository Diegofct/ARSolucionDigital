<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

	<!-- Wrapper para header -->
	<div class="bg-glow-effect">
		<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>
	</div>

	<div id="content" class="bg-[#12003C]">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				// Previous/next post navigation
				if ( is_singular( 'post' ) ) :
				?>
					<nav class="post-navigation max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
							<?php
							$prev_post = get_previous_post();
							$next_post = get_next_post();

							if ( $prev_post ) :
							?>
								<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="bg-[#1a0a3e] p-6 rounded-lg hover:bg-[#2a1a4e] transition-colors group">
									<span class="text-sm text-gray-400 block mb-2">← Anterior</span>
									<span class="text-white font-semibold group-hover:text-[#7E52FF] transition-colors"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></span>
								</a>
							<?php endif; ?>

							<?php if ( $next_post ) : ?>
								<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="bg-[#1a0a3e] p-6 rounded-lg hover:bg-[#2a1a4e] transition-colors group <?php echo !$prev_post ? 'md:col-start-2' : ''; ?>">
									<span class="text-sm text-gray-400 block mb-2">Siguiente →</span>
									<span class="text-white font-semibold group-hover:text-[#7E52FF] transition-colors"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></span>
								</a>
							<?php endif; ?>
						</div>
					</nav>
				<?php
				endif;

			endwhile;
			?>

		</main>
	</div>

<?php
get_footer();
