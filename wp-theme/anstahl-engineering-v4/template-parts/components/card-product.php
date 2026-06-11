<?php
/**
 * Product card component.
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
		'name'        => '',
		'tagline'     => '',
		'description' => '',
		'accent'      => '',
		'icon'        => 'seal',
		'url'         => '',
	)
);

$url = $args['url'] ? $args['url'] : anstahl_get_page_url( 'products' ) . '#' . $args['slug'];
$accent_class = $args['accent'] ? 'card-product--' . sanitize_html_class( $args['accent'] ) : '';
?>
<article class="card-product <?php echo esc_attr( $accent_class ); ?>">
	<div class="card-product__icon" aria-hidden="true">
		<?php anstahl_icon( $args['icon'] ); ?>
	</div>
	<h3 class="card-product__name">
		<a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $args['name'] ); ?></a>
	</h3>
	<?php if ( $args['tagline'] ) : ?>
		<p class="card-product__tagline"><?php echo esc_html( $args['tagline'] ); ?></p>
	<?php endif; ?>
	<?php if ( $args['description'] ) : ?>
		<p class="card-product__desc"><?php echo esc_html( $args['description'] ); ?></p>
	<?php endif; ?>
	<a class="card-product__link" href="<?php echo esc_url( $url ); ?>">
		<?php esc_html_e( 'Learn more', 'anstahl-engineering' ); ?>
		<span aria-hidden="true"><?php anstahl_icon( 'arrow' ); ?></span>
	</a>
</article>
