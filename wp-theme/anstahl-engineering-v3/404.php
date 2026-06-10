<?php
/**
 * 404 template.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="section section--bg error-page">
	<div class="container container--narrow error-page__inner">
		<p class="overline"><?php esc_html_e( 'Error 404', 'anstahl-engineering' ); ?></p>
		<h1 class="error-page__title"><?php esc_html_e( 'Page Not Found', 'anstahl-engineering' ); ?></h1>
		<p class="error-page__desc">
			<?php esc_html_e( 'The page you are looking for may have been moved, deleted, or does not exist.', 'anstahl-engineering' ); ?>
		</p>
		<div class="error-page__actions">
			<?php
			anstahl_button( array(
				'url'   => home_url( '/' ),
				'label' => __( 'Back to Home', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'contact' ),
				'label' => __( 'Contact Us', 'anstahl-engineering' ),
				'style' => 'secondary',
			) );
			?>
		</div>
	</div>
</section>

<?php
get_footer();
