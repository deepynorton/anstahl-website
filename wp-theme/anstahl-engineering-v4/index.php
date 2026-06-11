<?php
/**
 * Main template fallback.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="section section--bg">
	<div class="container container--narrow">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
					<header class="post-card__header">
						<h2 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<time class="post-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
							<?php echo esc_html( get_the_date() ); ?>
						</time>
					</header>
					<div class="post-card__excerpt">
						<?php the_excerpt(); ?>
					</div>
					<a class="btn btn--ghost" href="<?php the_permalink(); ?>">
						<?php esc_html_e( 'Read more', 'anstahl-engineering' ); ?>
					</a>
				</article>
			<?php endwhile; ?>

			<nav class="pagination" aria-label="<?php esc_attr_e( 'Posts navigation', 'anstahl-engineering' ); ?>">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Previous', 'anstahl-engineering' ),
					'next_text' => __( 'Next', 'anstahl-engineering' ),
				) );
				?>
			</nav>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts found.', 'anstahl-engineering' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
