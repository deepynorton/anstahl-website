<?php
/**
 * Site header.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'anstahl-engineering' ); ?></a>

<header class="site-header" id="site-header" role="banner">
	<div class="site-header__inner container">
		<div class="site-header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="site-header__logo-text">ANSTAHL</span>
					<span class="site-header__logo-sub"><?php esc_html_e( 'Engineering Asia', 'anstahl-engineering' ); ?></span>
				<?php endif; ?>
			</a>
		</div>

		<nav class="site-nav" id="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'anstahl-engineering' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'site-nav__list',
					'fallback_cb'    => false,
					'depth'          => 1,
				) );
			} else {
				echo '<ul class="site-nav__list">';
				foreach ( anstahl_get_nav_links() as $link ) {
					printf(
						'<li><a href="%s">%s</a></li>',
						esc_url( $link['url'] ),
						esc_html( $link['label'] )
					);
				}
				echo '</ul>';
			}
			?>
		</nav>

		<div class="site-header__actions">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'contact' ),
				'label' => __( 'Contact', 'anstahl-engineering' ),
				'style' => 'primary',
				'size'  => 'sm',
				'class' => 'site-header__cta',
			) );
			?>

			<button
				class="site-nav-toggle"
				type="button"
				aria-expanded="false"
				aria-controls="site-nav"
				aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'anstahl-engineering' ); ?>"
			>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</div>
</header>

<main id="main-content" class="site-main" role="main">
