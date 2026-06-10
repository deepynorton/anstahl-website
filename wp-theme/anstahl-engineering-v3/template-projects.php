<?php
/**
 * Template Name: Projects
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'Our Work', 'anstahl-engineering' ),
	'title'       => __( 'Engineering in Action', 'anstahl-engineering' ),
	'description' => __( 'Proven solutions for complex industrial challenges—delivered through rigorous engineering, disciplined execution, and measurable results.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="page-intro">
			<p><?php esc_html_e( 'Every project at PT Anstahl Engineering Asia begins with a problem worth solving. Our project portfolio reflects the breadth of our engineering capability—from component-level design improvement to integrated energy and waste treatment systems.', 'anstahl-engineering' ); ?></p>
		</div>
		<div class="grid grid--2">
			<?php foreach ( anstahl_get_projects() as $project ) : ?>
				<div id="<?php echo esc_attr( $project['slug'] ); ?>">
					<?php get_template_part( 'template-parts/components/card', 'project', $project ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Your Challenge. Our Engineering.', 'anstahl-engineering' ); ?></h2>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Discuss Your Project', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
