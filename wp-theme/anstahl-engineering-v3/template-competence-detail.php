<?php
/**
 * Template Name: Competence Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$competence_slug = get_post_field( 'post_name', get_queried_object_id() );
$competence      = anstahl_get_competence_detail( $competence_slug );

if ( ! $competence ) :
	?>
	<section class="section section--bg competence-detail competence-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Competence Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Competence Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This template supports Anstahl competence subpage slugs such as manufacturing, automation, and data-engineering.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'competence' ),
				'label' => __( 'Back to Competence', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'competence-detail--' . sanitize_html_class( $competence['accent'] );
?>

<article class="competence-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="competence-detail-hero" aria-labelledby="competence-detail-title">
		<div class="competence-detail-hero__media">
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
		<div class="competence-detail-hero__overlay" aria-hidden="true"></div>
		<div class="competence-detail-hero__grid" aria-hidden="true"></div>
		<div class="container competence-detail-hero__content">
			<div class="competence-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $competence['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $competence['overline'] ); ?></p>
			<h1 id="competence-detail-title" class="competence-detail-hero__title">
				<?php echo esc_html( $competence['title'] ); ?>
			</h1>
			<p class="competence-detail-hero__desc">
				<?php echo esc_html( $competence['hero'] ); ?>
			</p>
			<div class="competence-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $competence['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'competence' ),
					'label' => __( 'Back to Competence', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface competence-detail-overview" aria-labelledby="competence-overview-title">
		<div class="container competence-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="competence-overview-title">
					<?php
					printf(
						/* translators: %s: competence title. */
						esc_html__( '%s Capability', 'anstahl-engineering' ),
						esc_html( $competence['title'] )
					);
					?>
				</h2>
			</div>
			<div class="competence-detail-overview__copy">
				<p><?php echo esc_html( $competence['overview'] ); ?></p>
				<p><?php esc_html_e( 'Our approach combines practical engineering judgement, industrial operating awareness, and disciplined execution to deliver measurable operational value.', 'anstahl-engineering' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg competence-detail-capabilities" aria-labelledby="competence-capabilities-title">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Core Capabilities', 'anstahl-engineering' ),
				'title'       => __( 'What We Deliver', 'anstahl-engineering' ),
				'description' => __( 'Focused capability areas structured around industrial reliability, efficiency, and long-term operational improvement.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="competence-detail-grid competence-detail-grid--capabilities">
				<?php foreach ( $competence['capabilities'] as $capability ) : ?>
					<article class="competence-detail-card">
						<div class="competence-detail-card__icon" aria-hidden="true">
							<?php anstahl_icon( $competence['icon'] ); ?>
						</div>
						<p><?php echo esc_html( $capability ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--surface competence-detail-process" aria-labelledby="competence-process-title">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Process', 'anstahl-engineering' ),
				'title'       => __( 'Workflow', 'anstahl-engineering' ),
				'description' => __( 'A structured process that moves from operational understanding to practical implementation.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="competence-process-list">
				<?php foreach ( $competence['process'] as $index => $step ) : ?>
					<li>
						<span class="competence-process-list__index">
							<?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?>
						</span>
						<p><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--bg competence-detail-industries" aria-labelledby="competence-industries-title">
		<div class="container competence-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Industries', 'anstahl-engineering' ); ?></p>
				<h2 id="competence-industries-title"><?php esc_html_e( 'Industries Served', 'anstahl-engineering' ); ?></h2>
				<p class="competence-detail-muted">
					<?php esc_html_e( 'Capability applied across industrial environments where safety, uptime, and technical reliability are critical.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="competence-chip-list">
				<?php foreach ( $competence['industries'] as $industry ) : ?>
					<li><?php echo esc_html( $industry ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--surface competence-detail-tools" aria-labelledby="competence-tools-title">
		<div class="container competence-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Tools & Technologies', 'anstahl-engineering' ); ?></p>
				<h2 id="competence-tools-title"><?php esc_html_e( 'Methods, Tools & Technical Systems', 'anstahl-engineering' ); ?></h2>
				<p class="competence-detail-muted">
					<?php esc_html_e( 'Selected tools and technical methods are matched to the operating context, project objective, and implementation requirements.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="competence-tool-list">
				<?php foreach ( $competence['tools'] as $tool ) : ?>
					<li><?php echo esc_html( $tool ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--cta competence-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $competence['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with PT Anstahl Engineering Asia to discuss your technical challenge, operational goals, and implementation requirements.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $competence['cta'],
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
