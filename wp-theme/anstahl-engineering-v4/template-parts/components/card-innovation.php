<?php
/**
 * Innovation card component.
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
		'url'         => '',
	)
);

$url = $args['url'] ? $args['url'] : anstahl_get_page_url( 'innovation' ) . '#' . $args['slug'];
?>
<article class="card-innovation">
	<a class="card-innovation__link" href="<?php echo esc_url( $url ); ?>">
		<span class="card-innovation__index" aria-hidden="true"></span>
		<h3 class="card-innovation__title"><?php echo esc_html( $args['title'] ); ?></h3>
		<?php if ( $args['description'] ) : ?>
			<p class="card-innovation__desc"><?php echo esc_html( $args['description'] ); ?></p>
		<?php endif; ?>
	</a>
</article>
