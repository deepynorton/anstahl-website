<?php
/**
 * Template Name: Innovation
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'R&D & Innovation', 'anstahl-engineering' ),
	'title'       => __( 'Engineering Innovation That Solves Real Problems', 'anstahl-engineering' ),
	'description' => __( 'Applied research, material development, and design engineering—driven by field experience and industrial demand.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="page-intro">
			<p><?php esc_html_e( 'Innovation at PT Anstahl Engineering Asia is born from equipment failures analysed in the field, process inefficiencies observed in operating plants, and client challenges that existing solutions cannot address.', 'anstahl-engineering' ); ?></p>
		</div>
		<div class="grid grid--2">
			<?php foreach ( anstahl_get_innovations() as $innovation ) : ?>
				<div id="<?php echo esc_attr( $innovation['slug'] ); ?>">
					<?php get_template_part( 'template-parts/components/card', 'innovation', $innovation ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Innovation Partnership', 'anstahl-engineering' ); ?></h2>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Discuss Innovation Collaboration', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
