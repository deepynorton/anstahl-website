<?php
/**
 * Template Name: Approach
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'How We Work', 'anstahl-engineering' ),
	'title'       => __( 'Our Engineering Approach', 'anstahl-engineering' ),
	'description' => __( 'Safety, quality, ethics, sustainability, and community—embedded in every engineering decision we make.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="page-intro page-intro--center">
			<p><?php esc_html_e( "Anstahl's operational philosophy integrates five foundational commitments. These are not separate compliance functions—they are design principles that shape how we engineer solutions, manage projects, select materials, and engage with stakeholders.", 'anstahl-engineering' ); ?></p>
		</div>
		<div class="grid grid--5">
			<?php foreach ( anstahl_get_values() as $value ) : ?>
				<div id="<?php echo esc_attr( $value['slug'] ); ?>">
					<?php get_template_part( 'template-parts/components/card', 'values', $value ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Engineering with Integrity', 'anstahl-engineering' ); ?></h2>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Work with Anstahl', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
