<?php
/**
 * Values / approach pillar card component.
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
		'icon'        => 'shield',
		'url'         => '',
	)
);

$url = $args['url'] ? $args['url'] : anstahl_get_page_url( 'approach' ) . '#' . $args['slug'];
?>
<article class="card-values">
	<a class="card-values__link" href="<?php echo esc_url( $url ); ?>">
		<div class="card-values__icon" aria-hidden="true">
			<?php anstahl_icon( $args['icon'] ); ?>
		</div>
		<h3 class="card-values__title"><?php echo esc_html( $args['title'] ); ?></h3>
		<?php if ( $args['description'] ) : ?>
			<p class="card-values__desc"><?php echo esc_html( $args['description'] ); ?></p>
		<?php endif; ?>
	</a>
</article>
