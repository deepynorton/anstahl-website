<?php
/**
 * Template Name: Products
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'Our Brands', 'anstahl-engineering' ),
	'title'       => __( 'Engineered Products for Demanding Industrial Environments', 'anstahl-engineering' ),
	'description' => __( 'Three brands. One engineering standard. Sealing, mechanical, and thermal protection solutions built for performance and reliability.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="page-intro">
			<p><?php esc_html_e( 'Industrial equipment operates under conditions that demand more than catalogue specifications. Anstahl product brands are engineered to meet these challenges—with material science, precision manufacturing, and application engineering.', 'anstahl-engineering' ); ?></p>
		</div>
		<div class="grid grid--3">
			<?php foreach ( anstahl_get_products() as $product ) : ?>
				<div id="<?php echo esc_attr( $product['slug'] ); ?>">
					<?php get_template_part( 'template-parts/components/card', 'product', $product ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Request Product Information', 'anstahl-engineering' ); ?></h2>
		<p class="section--cta__desc"><?php esc_html_e( 'Our application engineering team is ready to assist with product selection and technical documentation.', 'anstahl-engineering' ); ?></p>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Speak with an Engineer', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
