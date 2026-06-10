<?php
/**
 * Template Name: Company
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'About Us', 'anstahl-engineering' ),
	'title'       => __( 'Engineering Beyond Boundaries', 'anstahl-engineering' ),
	'description' => __( 'An engineering-driven company committed to industrial innovation, manufacturing excellence, and long-term partnership.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container container--narrow">
		<article class="page-content">
			<h2><?php esc_html_e( 'Company Overview', 'anstahl-engineering' ); ?></h2>
			<p><?php esc_html_e( 'PT Anstahl Engineering Asia is a multidisciplinary engineering company serving mining, power generation, manufacturing, oil & gas, infrastructure, process industries, renewable energy, and industrial operations across Asia.', 'anstahl-engineering' ); ?></p>

			<div class="company-blocks">
				<div class="company-block">
					<h3><?php esc_html_e( 'Vision', 'anstahl-engineering' ); ?></h3>
					<p><?php esc_html_e( 'To be the most trusted engineering partner in Asia for industrial innovation, manufacturing excellence, and sustainable energy solutions.', 'anstahl-engineering' ); ?></p>
				</div>
				<div class="company-block">
					<h3><?php esc_html_e( 'Mission', 'anstahl-engineering' ); ?></h3>
					<p><?php esc_html_e( 'To deliver engineering solutions that improve industrial performance, safety, and sustainability—through innovative products, precision manufacturing, intelligent automation, and multidisciplinary consultancy.', 'anstahl-engineering' ); ?></p>
				</div>
			</div>

			<h2><?php esc_html_e( 'Corporate Values', 'anstahl-engineering' ); ?></h2>
			<ul class="values-list">
				<li><strong><?php esc_html_e( 'Technical Excellence', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'The highest standards of engineering rigour in every product and project.', 'anstahl-engineering' ); ?></li>
				<li><strong><?php esc_html_e( 'Integrity', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'Honest, transparent, and ethical in every engagement.', 'anstahl-engineering' ); ?></li>
				<li><strong><?php esc_html_e( 'Innovation', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'Applied research that solves real industrial problems.', 'anstahl-engineering' ); ?></li>
				<li><strong><?php esc_html_e( 'Reliability', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'Accountable delivery on specification and schedule.', 'anstahl-engineering' ); ?></li>
				<li><strong><?php esc_html_e( 'Partnership', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'Long-term relationships built on mutual respect.', 'anstahl-engineering' ); ?></li>
				<li><strong><?php esc_html_e( 'Sustainability', 'anstahl-engineering' ); ?></strong> — <?php esc_html_e( 'Responsible engineering for efficient industrial operations.', 'anstahl-engineering' ); ?></li>
			</ul>
		</article>
	</div>
</section>

<section class="section section--cta">
	<div class="container section--cta__inner">
		<h2 class="section--cta__title"><?php esc_html_e( 'Partner with Anstahl', 'anstahl-engineering' ); ?></h2>
		<div class="section--cta__actions">
			<?php anstahl_button( array( 'url' => anstahl_get_page_url( 'contact' ), 'label' => __( 'Contact Us', 'anstahl-engineering' ), 'style' => 'white', 'size' => 'lg' ) ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
