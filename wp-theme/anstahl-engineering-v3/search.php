<?php
/**
 * Search results template.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$search_query = get_search_query();
?>

<?php
anstahl_page_hero( array(
	'overline'    => __( 'Search Results', 'anstahl-engineering' ),
	'title'       => $search_query ? sprintf(
		/* translators: %s: search query */
		__( 'Results for "%s"', 'anstahl-engineering' ),
		$search_query
	) : __( 'Search', 'anstahl-engineering' ),
	'description' => '',
) );
?>

<section class="section section--surface">
	<div class="container container--narrow">
		<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label class="sr-only" for="search-field"><?php esc_html_e( 'Search', 'anstahl-engineering' ); ?></label>
			<input
				type="search"
				id="search-field"
				class="search-form__input"
				name="s"
				value="<?php echo esc_attr( $search_query ); ?>"
				placeholder="<?php esc_attr_e( 'Search…', 'anstahl-engineering' ); ?>"
			>
			<button class="btn btn--primary" type="submit"><?php esc_html_e( 'Search', 'anstahl-engineering' ); ?></button>
		</form>

		<?php if ( have_posts() ) : ?>
			<div class="search-results">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result' ); ?>>
						<h2 class="search-result__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="search-result__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 30 ) ); ?></p>
					</article>
				<?php endwhile; ?>
			</div>

			<nav class="pagination" aria-label="<?php esc_attr_e( 'Search results navigation', 'anstahl-engineering' ); ?>">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Previous', 'anstahl-engineering' ),
					'next_text' => __( 'Next', 'anstahl-engineering' ),
				) );
				?>
			</nav>
		<?php else : ?>
			<p class="search-no-results">
				<?php esc_html_e( 'No results found. Try a different search term.', 'anstahl-engineering' ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
