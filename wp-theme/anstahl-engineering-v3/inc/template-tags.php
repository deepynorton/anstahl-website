<?php
/**
 * Template tags and helpers.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

/**
 * Output inline SVG icon.
 *
 * @param string $icon Icon key.
 * @return void
 */
function anstahl_icon( $icon ) {
	$icons = array(
		'seal' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/></svg>',
		'gear' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>',
		'thermal' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/></svg>',
		'factory' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 20h20"/><path d="M5 20V10l5-3v13"/><path d="M12 20V6l7-4v18"/></svg>',
		'energy' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
		'automation' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/></svg>',
		'data' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 5-6"/></svg>',
		'maintenance' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
		'consultancy' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36 6.36-2.12z"/></svg>',
		'shield' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
		'quality' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
		'ethics' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/></svg>',
		'sustainability' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
		'community' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
		'arrow' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
	);

	if ( isset( $icons[ $icon ] ) ) {
		echo $icons[ $icon ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

/**
 * Render section header.
 *
 * @param array<string, string> $args Section header args.
 * @return void
 */
function anstahl_section_header( $args ) {
	$defaults = array(
		'overline'    => '',
		'title'       => '',
		'description' => '',
		'align'       => 'center',
		'class'       => '',
	);

	$args = wp_parse_args( $args, $defaults );
	$align_class = 'center' === $args['align'] ? 'section-header--center' : 'section-header--left';
	?>
	<header class="section-header <?php echo esc_attr( $align_class . ' ' . $args['class'] ); ?>">
		<?php if ( $args['overline'] ) : ?>
			<p class="overline"><?php echo esc_html( $args['overline'] ); ?></p>
		<?php endif; ?>
		<?php if ( $args['title'] ) : ?>
			<h2 class="section-header__title"><?php echo esc_html( $args['title'] ); ?></h2>
		<?php endif; ?>
		<?php if ( $args['description'] ) : ?>
			<p class="section-header__desc"><?php echo esc_html( $args['description'] ); ?></p>
		<?php endif; ?>
	</header>
	<?php
}

/**
 * Render CTA button.
 *
 * @param array<string, string> $args Button args.
 * @return void
 */
function anstahl_button( $args ) {
	$defaults = array(
		'url'    => '#',
		'label'  => '',
		'style'  => 'primary',
		'size'   => '',
		'class'  => '',
		'icon'   => false,
	);

	$args = wp_parse_args( $args, $defaults );

	$classes = array(
		'btn',
		'btn--' . sanitize_html_class( $args['style'] ),
	);

	if ( $args['size'] ) {
		$classes[] = 'btn--' . sanitize_html_class( $args['size'] );
	}

	if ( $args['class'] ) {
		$classes[] = $args['class'];
	}
	?>
	<a class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" href="<?php echo esc_url( $args['url'] ); ?>">
		<span><?php echo esc_html( $args['label'] ); ?></span>
		<?php if ( $args['icon'] ) : ?>
			<span class="btn__icon"><?php anstahl_icon( 'arrow' ); ?></span>
		<?php endif; ?>
	</a>
	<?php
}

/**
 * Render page hero for inner pages.
 *
 * @param array<string, string> $args Hero args.
 * @return void
 */
function anstahl_page_hero( $args ) {
	$defaults = array(
		'overline'    => '',
		'title'       => '',
		'description' => '',
		'image'       => 'hero-turbine.svg',
	);

	$args = wp_parse_args( $args, $defaults );
	$image_url = anstahl_get_image_url( $args['image'] );
	?>
	<section class="page-hero" aria-labelledby="page-hero-title">
		<div class="page-hero__media">
			<img
				src="<?php echo esc_url( $image_url ); ?>"
				alt=""
				loading="eager"
				decoding="async"
				width="1920"
				height="1080"
			>
		</div>
		<div class="page-hero__overlay" aria-hidden="true"></div>
		<div class="container page-hero__content">
			<?php if ( $args['overline'] ) : ?>
				<p class="overline"><?php echo esc_html( $args['overline'] ); ?></p>
			<?php endif; ?>
			<h1 id="page-hero-title" class="page-hero__title"><?php echo esc_html( $args['title'] ); ?></h1>
			<?php if ( $args['description'] ) : ?>
				<p class="page-hero__desc"><?php echo esc_html( $args['description'] ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}
