<?php
/**
 * Archive template.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$archive_title       = get_the_archive_title();
$archive_description = get_the_archive_description();
?>

<?php
anstahl_page_hero( array(
	'overline'    => __( 'Archive', 'anstahl-engineering' ),
	'title'       => wp_strip_all_tags( $archive_title ),
	'description' => wp_strip_all_tags( $archive_description ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="grid grid--2">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card__thumb" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'anstahl-card', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
							</a>
						<?php endif; ?>
						<h2 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<time class="post-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
							<?php echo esc_html( get_the_date() ); ?>
						</time>
						<div class="post-card__excerpt"><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>
			</div>

			<nav class="pagination" aria-label="<?php esc_attr_e( 'Archive navigation', 'anstahl-engineering' ); ?>">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Previous', 'anstahl-engineering' ),
					'next_text' => __( 'Next', 'anstahl-engineering' ),
				) );
				?>
			</nav>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts found in this archive.', 'anstahl-engineering' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
