<?php
/**
 * Single post template.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

	<?php
	anstahl_page_hero( array(
		'overline'    => get_the_date(),
		'title'       => get_the_title(),
		'description' => has_excerpt() ? get_the_excerpt() : '',
	) );
	?>

	<section class="section section--surface">
		<div class="container container--narrow">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-content' ); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<figure class="single-content__featured">
						<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
					</figure>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer class="single-content__footer">
					<?php the_tags( '<p class="post-tags">', ', ', '</p>' ); ?>
				</footer>
			</article>
		</div>
	</section>

<?php endwhile; ?>

<?php
get_footer();
