<?php
/**
 * Template Name: Competence
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'What We Do', 'anstahl-engineering' ),
	'title'       => __( 'Engineering Competence Across Disciplines', 'anstahl-engineering' ),
	'description' => __( 'Integrated capabilities in manufacturing, energy, automation, data engineering, and consultancy—delivered by engineers who understand industrial operations.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="page-intro">
			<p><?php esc_html_e( 'Anstahl combines deep technical expertise with multidisciplinary consultancy capability—enabling us to diagnose root causes, engineer integrated solutions, and support implementation through to measurable results.', 'anstahl-engineering' ); ?></p>
		</div>
		<div class="grid grid--3">
			<?php foreach ( anstahl_get_competencies() as $competence ) : ?>
				<div id="<?php echo esc_attr( $competence['slug'] ); ?>">
					<?php get_template_part( 'template-parts/components/card', 'competence', $competence ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Engineering Expertise Ready for Your Challenge', 'anstahl-engineering' ); ?></h2>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Request Engineering Consultation', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
