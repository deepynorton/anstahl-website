<?php
/**
 * Project card component.
 *
 * @package Anstahl_Engineering
 *
 * @var array<string, string> $args Card data.
 */

defined( 'ABSPATH' ) || exit;

$args = wp_parse_args(
	$args ?? array(),
	array(
		'slug'    => '',
		'title'   => '',
		'excerpt' => '',
		'image'   => 'project-parts.jpg',
		'url'     => '',
	)
);

$url       = $args['url'] ? $args['url'] : anstahl_get_page_url( 'projects' ) . '#' . $args['slug'];
$image_url = anstahl_get_image_url( $args['image'] );
?>
<article class="card-project">
	<a class="card-project__link" href="<?php echo esc_url( $url ); ?>">
		<div class="card-project__media">
			<img
				src="<?php echo esc_url( $image_url ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
				width="720"
				height="405"
			>
			<div class="card-project__overlay" aria-hidden="true"></div>
			<h3 class="card-project__title"><?php echo esc_html( $args['title'] ); ?></h3>
		</div>
		<?php if ( $args['excerpt'] ) : ?>
			<p class="card-project__excerpt"><?php echo esc_html( $args['excerpt'] ); ?></p>
		<?php endif; ?>
	</a>
</article>
