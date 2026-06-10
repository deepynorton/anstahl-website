<?php
/**
 * Competence card component.
 *
 * @package Anstahl_Engineering
 *
 * @var array<string, string> $args Card data.
 */

defined( 'ABSPATH' ) || exit;

$args = wp_parse_args(
	$args ?? array(),
	array(
		'slug'        => '',
		'title'       => '',
		'description' => '',
		'icon'        => 'factory',
		'url'         => '',
	)
);

$url = $args['url'] ? $args['url'] : anstahl_get_page_url( 'competence' ) . '#' . $args['slug'];
?>
<article class="card-competence">
	<a class="card-competence__link" href="<?php echo esc_url( $url ); ?>">
		<div class="card-competence__icon" aria-hidden="true">
			<?php anstahl_icon( $args['icon'] ); ?>
		</div>
		<h3 class="card-competence__title"><?php echo esc_html( $args['title'] ); ?></h3>
		<?php if ( $args['description'] ) : ?>
			<p class="card-competence__desc"><?php echo esc_html( $args['description'] ); ?></p>
		<?php endif; ?>
	</a>
</article>
