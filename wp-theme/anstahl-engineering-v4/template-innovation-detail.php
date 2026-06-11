<?php
/**
 * Template Name: Innovation Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$innovation_slug = get_post_field( 'post_name', get_queried_object_id() );
$innovation      = anstahl_get_innovation_detail( $innovation_slug );

if ( ! $innovation ) :
	?>
	<section class="section section--bg innovation-detail innovation-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Innovation Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Innovation Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This innovation detail template supports Anstahl R&D innovation page slugs.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'innovation' ),
				'label' => __( 'Back to Innovation', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'innovation-detail--' . sanitize_html_class( $innovation['accent'] );
?>

<article class="innovation-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="innovation-detail-hero" aria-labelledby="innovation-detail-title">
		<div class="innovation-detail-hero__media">
			<img
				src="<?php echo esc_url( anstahl_get_image_url( 'hero-turbine.svg' ) ); ?>"
				alt=""
				loading="eager"
				decoding="async"
				fetchpriority="high"
				width="1920"
				height="1080"
			>
		</div>
		<div class="innovation-detail-hero__overlay" aria-hidden="true"></div>
		<div class="innovation-detail-hero__grid" aria-hidden="true"></div>
		<div class="container innovation-detail-hero__content">
			<div class="innovation-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $innovation['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $innovation['overline'] ); ?></p>
			<h1 id="innovation-detail-title" class="innovation-detail-hero__title">
				<?php echo esc_html( $innovation['title'] ); ?>
			</h1>
			<p class="innovation-detail-hero__desc">
				<?php echo esc_html( $innovation['hero'] ); ?>
			</p>
			<div class="innovation-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $innovation['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'innovation' ),
					'label' => __( 'Back to Innovation', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface innovation-detail-overview" aria-labelledby="innovation-overview-title">
		<div class="container innovation-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Innovation Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="innovation-overview-title"><?php esc_html_e( 'R&D Context', 'anstahl-engineering' ); ?></h2>
			</div>
			<div class="innovation-detail-overview__copy">
				<p><?php echo esc_html( $innovation['overview'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg innovation-detail-problem" aria-labelledby="innovation-problem-title">
		<div class="container innovation-detail-split-cards">
			<article class="innovation-detail-panel">
				<p class="overline"><?php esc_html_e( 'Problem Statement', 'anstahl-engineering' ); ?></p>
				<h2 id="innovation-problem-title"><?php esc_html_e( 'Technical Challenge', 'anstahl-engineering' ); ?></h2>
				<p><?php echo esc_html( $innovation['problem'] ); ?></p>
			</article>
			<article class="innovation-detail-panel innovation-detail-panel--concept">
				<p class="overline"><?php esc_html_e( 'Innovation Concept', 'anstahl-engineering' ); ?></p>
				<h2><?php esc_html_e( 'Research Direction', 'anstahl-engineering' ); ?></h2>
				<p><?php echo esc_html( $innovation['concept'] ); ?></p>
			</article>
		</div>
	</section>

	<section class="section section--surface innovation-detail-research">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Research Focus', 'anstahl-engineering' ),
				'title'       => __( 'R&D Workstreams', 'anstahl-engineering' ),
				'description' => __( 'Focused research areas that guide concept development, prototyping, validation, and industrial readiness.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="innovation-detail-grid innovation-detail-grid--research">
				<?php foreach ( $innovation['research_focus'] as $focus ) : ?>
					<article class="innovation-detail-card">
						<div class="innovation-detail-card__icon" aria-hidden="true">
							<?php anstahl_icon( $innovation['icon'] ); ?>
						</div>
						<p><?php echo esc_html( $focus ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg innovation-detail-principles" aria-labelledby="innovation-principles-title">
		<div class="container innovation-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Engineering Principles', 'anstahl-engineering' ); ?></p>
				<h2 id="innovation-principles-title"><?php esc_html_e( 'Principles Behind The Concept', 'anstahl-engineering' ); ?></h2>
				<p class="innovation-detail-muted">
					<?php esc_html_e( 'Each R&D concept is shaped by practical engineering principles that connect laboratory thinking with industrial operation.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="innovation-principle-list">
				<?php foreach ( $innovation['engineering_principles'] as $principle ) : ?>
					<li><?php echo esc_html( $principle ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--surface innovation-detail-applications" aria-labelledby="innovation-applications-title">
		<div class="container innovation-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Potential Applications', 'anstahl-engineering' ); ?></p>
				<h2 id="innovation-applications-title"><?php esc_html_e( 'Where The Innovation Can Apply', 'anstahl-engineering' ); ?></h2>
				<p class="innovation-detail-muted">
					<?php esc_html_e( 'Potential applications are evaluated by operating duty, technical risk, maintainability, and business value.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="innovation-application-list">
				<?php foreach ( $innovation['applications'] as $application ) : ?>
					<li><?php echo esc_html( $application ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--bg innovation-detail-roadmap">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Development Roadmap', 'anstahl-engineering' ),
				'title'       => __( 'From Concept To Validation', 'anstahl-engineering' ),
				'description' => __( 'A staged roadmap for translating technical ideas into tested, documented, and implementation-ready innovation.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="innovation-roadmap-list">
				<?php foreach ( $innovation['roadmap'] as $index => $step ) : ?>
					<li>
						<span class="innovation-roadmap-list__index">
							<?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?>
						</span>
						<p><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--cta innovation-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $innovation['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with PT Anstahl Engineering Asia to discuss research collaboration, concept development, or industrial innovation opportunities.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $innovation['cta'],
					'style' => 'white',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>
</article>

<?php
get_footer();
