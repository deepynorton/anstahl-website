<?php
/**
 * Default page template.
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
		'title'       => get_the_title(),
		'description' => has_excerpt() ? get_the_excerpt() : '',
	) );
	?>

	<section class="section section--surface">
		<div class="container container--narrow">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	</section>

<?php endwhile; ?>

<?php
get_footer();
