<?php
/**
 * Template Name: Project Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$project_slug = get_post_field( 'post_name', get_queried_object_id() );
$project      = anstahl_get_project_detail( $project_slug );

if ( ! $project ) :
	?>
	<section class="section section--bg project-detail project-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Project Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Project Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This project detail template supports Anstahl engineering project page slugs.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'projects' ),
				'label' => __( 'Back to Projects', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'project-detail--' . sanitize_html_class( $project['accent'] );
?>

<article class="project-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="project-detail-hero" aria-labelledby="project-detail-title">
		<div class="project-detail-hero__media">
			<img
				src="<?php echo esc_url( anstahl_get_image_url( $project['image'] ) ); ?>"
				alt=""
				loading="eager"
				decoding="async"
				fetchpriority="high"
				width="1920"
				height="1080"
			>
		</div>
		<div class="project-detail-hero__overlay" aria-hidden="true"></div>
		<div class="project-detail-hero__grid" aria-hidden="true"></div>
		<div class="container project-detail-hero__content">
			<div class="project-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $project['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $project['overline'] ); ?></p>
			<h1 id="project-detail-title" class="project-detail-hero__title">
				<?php echo esc_html( $project['title'] ); ?>
			</h1>
			<p class="project-detail-hero__desc">
				<?php echo esc_html( $project['hero'] ); ?>
			</p>
			<div class="project-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $project['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'projects' ),
					'label' => __( 'Back to Projects', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface project-detail-overview" aria-labelledby="project-overview-title">
		<div class="container project-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Project Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="project-overview-title"><?php esc_html_e( 'Engineering Context', 'anstahl-engineering' ); ?></h2>
			</div>
			<div class="project-detail-overview__copy">
				<p><?php echo esc_html( $project['overview'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg project-detail-challenge" aria-labelledby="project-challenge-title">
		<div class="container project-detail-split-cards">
			<article class="project-detail-panel">
				<p class="overline"><?php esc_html_e( 'Challenge', 'anstahl-engineering' ); ?></p>
				<h2 id="project-challenge-title"><?php esc_html_e( 'Industrial Challenge', 'anstahl-engineering' ); ?></h2>
				<p><?php echo esc_html( $project['challenge'] ); ?></p>
			</article>
			<article class="project-detail-panel project-detail-panel--solution">
				<p class="overline"><?php esc_html_e( 'Solution', 'anstahl-engineering' ); ?></p>
				<h2><?php esc_html_e( 'Engineering Solution', 'anstahl-engineering' ); ?></h2>
				<p><?php echo esc_html( $project['solution'] ); ?></p>
			</article>
		</div>
	</section>

	<section class="section section--surface project-detail-scope">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Scope of Work', 'anstahl-engineering' ),
				'title'       => __( 'Project Scope', 'anstahl-engineering' ),
				'description' => __( 'Focused engineering work packages structured around practical implementation and measurable project value.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="project-detail-grid project-detail-grid--scope">
				<?php foreach ( $project['scope_of_work'] as $scope ) : ?>
					<article class="project-detail-card">
						<div class="project-detail-card__icon" aria-hidden="true">
							<?php anstahl_icon( $project['icon'] ); ?>
						</div>
						<p><?php echo esc_html( $scope ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg project-detail-approach">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Engineering Approach', 'anstahl-engineering' ),
				'title'       => __( 'Process & Workflow', 'anstahl-engineering' ),
				'description' => __( 'A structured engineering process from problem definition through implementation planning and measurable outcomes.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="project-process-list">
				<?php foreach ( $project['engineering_approach'] as $index => $step ) : ?>
					<li>
						<span class="project-process-list__index">
							<?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?>
						</span>
						<p><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--surface project-detail-outcomes">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Key Outcomes', 'anstahl-engineering' ),
				'title'       => __( 'Measured Project Value', 'anstahl-engineering' ),
				'description' => __( 'Expected project value expressed through reliability, efficiency, readiness, compliance, and operational improvement.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="project-outcome-grid">
				<?php foreach ( $project['key_outcomes'] as $outcome ) : ?>
					<article class="project-outcome-card">
						<span class="project-outcome-card__value"><?php echo esc_html( $outcome['value'] ); ?></span>
						<span class="project-outcome-card__label"><?php echo esc_html( $outcome['label'] ); ?></span>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg project-detail-tech" aria-labelledby="project-tech-title">
		<div class="container project-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Technologies', 'anstahl-engineering' ); ?></p>
				<h2 id="project-tech-title"><?php esc_html_e( 'Methods & Technologies', 'anstahl-engineering' ); ?></h2>
				<p class="project-detail-muted">
					<?php esc_html_e( 'Selected technical methods are matched to project requirements, operating constraints, and implementation risk.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="project-chip-list">
				<?php foreach ( $project['technologies'] as $technology ) : ?>
					<li><?php echo esc_html( $technology ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--surface project-detail-industries" aria-labelledby="project-industries-title">
		<div class="container project-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Industries', 'anstahl-engineering' ); ?></p>
				<h2 id="project-industries-title"><?php esc_html_e( 'Industries Served', 'anstahl-engineering' ); ?></h2>
				<p class="project-detail-muted">
					<?php esc_html_e( 'Project methods are applicable across industrial environments where reliability, compliance, and efficiency matter.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="project-industry-list">
				<?php foreach ( $project['industries'] as $industry ) : ?>
					<li><?php echo esc_html( $industry ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--cta project-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $project['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with PT Anstahl Engineering Asia to review your operating challenge and develop a practical engineering path forward.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $project['cta'],
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
