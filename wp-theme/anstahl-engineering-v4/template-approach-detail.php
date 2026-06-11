<?php
/**
 * Template Name: Approach Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$approach_slug = get_post_field( 'post_name', get_queried_object_id() );
$approach      = anstahl_get_approach_detail( $approach_slug );

if ( ! $approach ) :
	?>
	<section class="section section--bg approach-detail approach-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Approach Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Approach Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This approach detail template supports Anstahl corporate approach page slugs such as safety, quality, ethics, sustainability, and communities.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'approach' ),
				'label' => __( 'Back to Approach', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'approach-detail--' . sanitize_html_class( $approach['accent'] );
?>

<article class="approach-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="approach-detail-hero" aria-labelledby="approach-detail-title">
		<div class="approach-detail-hero__media">
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
		<div class="approach-detail-hero__overlay" aria-hidden="true"></div>
		<div class="approach-detail-hero__grid" aria-hidden="true"></div>
		<div class="container approach-detail-hero__content">
			<div class="approach-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $approach['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $approach['overline'] ); ?></p>
			<h1 id="approach-detail-title" class="approach-detail-hero__title">
				<?php echo esc_html( $approach['title'] ); ?>
			</h1>
			<p class="approach-detail-hero__desc">
				<?php echo esc_html( $approach['hero'] ); ?>
			</p>
			<div class="approach-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $approach['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'approach' ),
					'label' => __( 'Back to Approach', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface approach-detail-overview" aria-labelledby="approach-overview-title">
		<div class="container approach-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Approach Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="approach-overview-title"><?php esc_html_e( 'Corporate Governance Context', 'anstahl-engineering' ); ?></h2>
			</div>
			<div class="approach-detail-overview__copy">
				<p><?php echo esc_html( $approach['overview'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg approach-detail-principle" aria-labelledby="approach-principle-title">
		<div class="container">
			<div class="approach-principle-card">
				<p class="overline"><?php esc_html_e( 'Principle Statement', 'anstahl-engineering' ); ?></p>
				<h2 id="approach-principle-title"><?php esc_html_e( 'The Principle Behind Our Practice', 'anstahl-engineering' ); ?></h2>
				<p><?php echo esc_html( $approach['principle'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--surface approach-detail-commitments">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Commitments', 'anstahl-engineering' ),
				'title'       => __( 'What We Commit To', 'anstahl-engineering' ),
				'description' => __( 'Corporate commitments that guide responsible engineering, project execution, and long-term industrial partnership.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="approach-detail-grid approach-detail-grid--commitments">
				<?php foreach ( $approach['commitment'] as $commitment ) : ?>
					<article class="approach-detail-card">
						<div class="approach-detail-card__icon" aria-hidden="true">
							<?php anstahl_icon( $approach['icon'] ); ?>
						</div>
						<p><?php echo esc_html( $commitment ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg approach-detail-implementation">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Implementation Workflow', 'anstahl-engineering' ),
				'title'       => __( 'How The Approach Is Applied', 'anstahl-engineering' ),
				'description' => __( 'A practical workflow that turns corporate principles into consistent action across engineering, manufacturing, site work, and partnership.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="approach-workflow-list">
				<?php foreach ( $approach['implementation'] as $index => $step ) : ?>
					<li>
						<span class="approach-workflow-list__index">
							<?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?>
						</span>
						<p><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--surface approach-detail-standards" aria-labelledby="approach-standards-title">
		<div class="container approach-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Standards & Governance', 'anstahl-engineering' ); ?></p>
				<h2 id="approach-standards-title"><?php esc_html_e( 'Governance Practices', 'anstahl-engineering' ); ?></h2>
				<p class="approach-detail-muted">
					<?php esc_html_e( 'Governance practices help align daily decisions with safety, quality, ethics, sustainability, and responsible contribution.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="approach-standard-list">
				<?php foreach ( $approach['standards'] as $standard ) : ?>
					<li><?php echo esc_html( $standard ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--bg approach-detail-impact" aria-labelledby="approach-impact-title">
		<div class="container approach-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Impact', 'anstahl-engineering' ); ?></p>
				<h2 id="approach-impact-title"><?php esc_html_e( 'Operational & Partnership Impact', 'anstahl-engineering' ); ?></h2>
				<p class="approach-detail-muted">
					<?php esc_html_e( 'The value of each approach is measured by how it improves reliability, trust, performance, and responsibility in real industrial work.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="approach-impact-list">
				<?php foreach ( $approach['impact'] as $impact ) : ?>
					<li><?php echo esc_html( $impact ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--cta approach-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $approach['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with PT Anstahl Engineering Asia to discuss how our corporate approach can support your engineering, manufacturing, or industrial improvement requirements.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $approach['cta'],
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
