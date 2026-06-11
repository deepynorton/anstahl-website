<?php
/**
 * Template Name: Company Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$company_slug = get_post_field( 'post_name', get_queried_object_id() );
$company      = anstahl_get_company_detail( $company_slug );
$nav          = anstahl_get_company_navigation();

if ( ! $company ) :
	?>
	<section class="section section--bg company-detail company-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Company Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Company Page Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This company detail template supports Anstahl company page slugs such as mission-vision, management, compliance, and career.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'company' ),
				'label' => __( 'Back to Company', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'company-detail--' . sanitize_html_class( $company['accent'] );
?>

<article class="company-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="company-detail-hero" aria-labelledby="company-detail-title">
		<div class="company-detail-hero__media">
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
		<div class="company-detail-hero__overlay" aria-hidden="true"></div>
		<div class="company-detail-hero__grid" aria-hidden="true"></div>
		<div class="container company-detail-hero__content">
			<div class="company-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $company['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $company['overline'] ); ?></p>
			<h1 id="company-detail-title" class="company-detail-hero__title">
				<?php echo esc_html( $company['title'] ); ?>
			</h1>
			<p class="company-detail-hero__desc">
				<?php echo esc_html( $company['hero'] ); ?>
			</p>
			<div class="company-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $company['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'company' ),
					'label' => __( 'Back to Company', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<nav class="company-section-nav company-section-nav--detail" aria-label="<?php esc_attr_e( 'Company section navigation', 'anstahl-engineering' ); ?>">
		<div class="container">
			<ul class="company-section-nav__list">
				<?php foreach ( $nav as $item ) : ?>
					<li>
						<a href="<?php echo esc_url( $item['url'] ); ?>">
							<span class="company-section-nav__icon" aria-hidden="true">
								<?php anstahl_icon( $item['icon'] ); ?>
							</span>
							<span>
								<strong><?php echo esc_html( $item['title'] ); ?></strong>
								<small><?php echo esc_html( $item['description'] ); ?></small>
							</span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</nav>

	<section class="section section--surface company-detail-overview" aria-labelledby="company-overview-title">
		<div class="container company-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Company Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="company-overview-title"><?php esc_html_e( 'Corporate Context', 'anstahl-engineering' ); ?></h2>
			</div>
			<div class="company-detail-overview__copy">
				<p><?php echo esc_html( $company['overview'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg company-detail-principles">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Corporate Principles', 'anstahl-engineering' ),
				'title'       => __( 'Principles That Guide The Company', 'anstahl-engineering' ),
				'description' => __( 'Company principles that shape leadership, governance, technical decisions, and long-term industrial relationships.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="company-principle-grid">
				<?php foreach ( $company['principles'] as $principle ) : ?>
					<article class="company-principle-card">
						<div class="company-principle-card__mark" aria-hidden="true"></div>
						<p><?php echo esc_html( $principle ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php if ( isset( $company['vision'], $company['mission'] ) ) : ?>
		<section class="section section--surface company-detail-direction" aria-labelledby="company-direction-title">
			<div class="container company-direction-grid">
				<article class="company-executive-panel">
					<p class="overline"><?php esc_html_e( 'Vision', 'anstahl-engineering' ); ?></p>
					<h2 id="company-direction-title"><?php esc_html_e( 'Long-Term Vision', 'anstahl-engineering' ); ?></h2>
					<p><?php echo esc_html( $company['vision'] ); ?></p>
				</article>
				<article class="company-executive-panel company-executive-panel--accent">
					<p class="overline"><?php esc_html_e( 'Mission', 'anstahl-engineering' ); ?></p>
					<h2><?php esc_html_e( 'Engineering Mission', 'anstahl-engineering' ); ?></h2>
					<p><?php echo esc_html( $company['mission'] ); ?></p>
				</article>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['strategic_objectives'] ) || ! empty( $company['long_term_direction'] ) || ! empty( $company['core_values'] ) ) : ?>
		<section class="section section--bg company-detail-strategy">
			<div class="container company-detail-three">
				<?php if ( ! empty( $company['strategic_objectives'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Strategic Objectives', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Strategic Objectives', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['strategic_objectives'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['long_term_direction'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Long-Term Direction', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Long-Term Direction', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['long_term_direction'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['core_values'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Core Values', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Core Values', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['core_values'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['management_philosophy'] ) ) : ?>
		<section class="section section--surface company-detail-management" aria-labelledby="company-management-title">
			<div class="container">
				<div class="company-executive-panel">
					<p class="overline"><?php esc_html_e( 'Management Philosophy', 'anstahl-engineering' ); ?></p>
					<h2 id="company-management-title"><?php esc_html_e( 'Management Philosophy', 'anstahl-engineering' ); ?></h2>
					<p><?php echo esc_html( $company['management_philosophy'] ); ?></p>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['leadership_statement'] ) || ! empty( $company['engineering_philosophy'] ) || ! empty( $company['long_term_vision'] ) ) : ?>
		<section class="section section--bg company-detail-authority">
			<div class="container company-detail-three">
				<?php if ( ! empty( $company['leadership_statement'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Leadership Statement', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Leadership Statement', 'anstahl-engineering' ); ?></h2>
						<p><?php echo esc_html( $company['leadership_statement'] ); ?></p>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['engineering_philosophy'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Engineering Philosophy', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Engineering Philosophy', 'anstahl-engineering' ); ?></h2>
						<p><?php echo esc_html( $company['engineering_philosophy'] ); ?></p>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['long_term_vision'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Long-Term Vision', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Long-Term Vision', 'anstahl-engineering' ); ?></h2>
						<p><?php echo esc_html( $company['long_term_vision'] ); ?></p>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['leadership_principles'] ) || ! empty( $company['leadership_commitments'] ) ) : ?>
		<section class="section section--bg company-detail-leadership">
			<div class="container company-detail-two">
				<?php if ( ! empty( $company['leadership_principles'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Leadership Principles', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Leadership Principles', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['leadership_principles'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['leadership_commitments'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Leadership Commitments', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Leadership Commitments', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['leadership_commitments'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['organisational_structure'] ) ) : ?>
		<section class="section section--surface company-detail-organisation">
			<div class="container">
				<?php
				anstahl_section_header( array(
					'overline'    => __( 'Organisational Structure', 'anstahl-engineering' ),
					'title'       => __( 'Engineering-Focused Organisation', 'anstahl-engineering' ),
					'description' => __( 'A practical structure that connects corporate leadership, engineering review, operations readiness, commercial discipline, and applied innovation.', 'anstahl-engineering' ),
					'align'       => 'center',
				) );
				?>
				<div class="company-division-grid">
					<?php foreach ( $company['organisational_structure'] as $division ) : ?>
						<article class="company-division-card">
							<h3><?php echo esc_html( $division['division'] ); ?></h3>
							<p><?php echo esc_html( $division['role'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['decision_framework'] ) || ! empty( $company['governance_approach'] ) ) : ?>
		<section class="section section--bg company-detail-decision">
			<div class="container company-detail-two">
				<?php if ( ! empty( $company['decision_framework'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Decision Framework', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Technical Decision Framework', 'anstahl-engineering' ); ?></h2>
						<ol class="company-numbered-list">
							<?php foreach ( $company['decision_framework'] as $index => $item ) : ?>
								<li>
									<span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
									<p><?php echo esc_html( $item ); ?></p>
								</li>
							<?php endforeach; ?>
						</ol>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['governance_approach'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Governance Approach', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Governance Approach', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['governance_approach'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['governance_principles'] ) || ! empty( $company['technical_leadership_commitments'] ) ) : ?>
		<section class="section section--surface company-detail-leadership-commitments">
			<div class="container company-detail-two">
				<?php if ( ! empty( $company['governance_principles'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Governance Principles', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Governance Principles', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['governance_principles'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['technical_leadership_commitments'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Technical Leadership Commitments', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Technical Leadership Commitments', 'anstahl-engineering' ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $company['technical_leadership_commitments'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['compliance_philosophy'] ) ) : ?>
		<section class="section section--surface company-detail-compliance" aria-labelledby="company-compliance-title">
			<div class="container">
				<div class="company-executive-panel">
					<p class="overline"><?php esc_html_e( 'Compliance Philosophy', 'anstahl-engineering' ); ?></p>
					<h2 id="company-compliance-title"><?php esc_html_e( 'Compliance Philosophy', 'anstahl-engineering' ); ?></h2>
					<p><?php echo esc_html( $company['compliance_philosophy'] ); ?></p>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['frameworks'] ) ) : ?>
		<section class="section section--bg company-detail-frameworks">
			<div class="container">
				<?php
				anstahl_section_header( array(
					'overline'    => __( 'Compliance Frameworks', 'anstahl-engineering' ),
					'title'       => __( 'Quality, Safety, Ethics, and Sustainability', 'anstahl-engineering' ),
					'description' => __( 'Anstahl compliance practice connects technical control, safe execution, ethical conduct, and responsible engineering into one operating discipline.', 'anstahl-engineering' ),
					'align'       => 'center',
				) );
				?>
				<div class="company-division-grid company-division-grid--four">
					<?php foreach ( $company['frameworks'] as $framework ) : ?>
						<article class="company-division-card">
							<h3><?php echo esc_html( $framework['title'] ); ?></h3>
							<p><?php echo esc_html( $framework['description'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['certification_alignment'] ) || ! empty( $company['risk_management'] ) || ! empty( $company['documentation_discipline'] ) || ! empty( $company['traceability_principles'] ) ) : ?>
		<section class="section section--surface company-detail-compliance-systems">
			<div class="container company-detail-four">
				<?php
				$system_sections = array(
					__( 'Future Certification Alignment', 'anstahl-engineering' ) => $company['certification_alignment'] ?? array(),
					__( 'Risk Management Approach', 'anstahl-engineering' )      => $company['risk_management'] ?? array(),
					__( 'Documentation Discipline', 'anstahl-engineering' )      => $company['documentation_discipline'] ?? array(),
					__( 'Traceability Principles', 'anstahl-engineering' )       => $company['traceability_principles'] ?? array(),
				);
				foreach ( $system_sections as $heading => $items ) :
					if ( empty( $items ) ) {
						continue;
					}
					?>
					<article>
						<p class="overline"><?php echo esc_html( $heading ); ?></p>
						<h2><?php echo esc_html( $heading ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $items as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['why_work'] ) || ! empty( $company['engineering_culture'] ) || ! empty( $company['learning_environment'] ) ) : ?>
		<section class="section section--surface company-detail-career-culture">
			<div class="container company-detail-three">
				<?php
				$career_sections = array(
					__( 'Why Work With Anstahl', 'anstahl-engineering' ) => $company['why_work'] ?? array(),
					__( 'Engineering Culture', 'anstahl-engineering' )   => $company['engineering_culture'] ?? array(),
					__( 'Learning Environment', 'anstahl-engineering' )  => $company['learning_environment'] ?? array(),
				);
				foreach ( $career_sections as $heading => $items ) :
					if ( empty( $items ) ) {
						continue;
					}
					?>
					<article>
						<p class="overline"><?php echo esc_html( $heading ); ?></p>
						<h2><?php echo esc_html( $heading ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $items as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['career_development'] ) || ! empty( $company['innovation_participation'] ) || ! empty( $company['industrial_exposure'] ) ) : ?>
		<section class="section section--bg company-detail-career-development">
			<div class="container company-detail-three">
				<?php
				$development_sections = array(
					__( 'Career Development', 'anstahl-engineering' )       => $company['career_development'] ?? array(),
					__( 'Innovation Participation', 'anstahl-engineering' ) => $company['innovation_participation'] ?? array(),
					__( 'Industrial Exposure', 'anstahl-engineering' )      => $company['industrial_exposure'] ?? array(),
				);
				foreach ( $development_sections as $heading => $items ) :
					if ( empty( $items ) ) {
						continue;
					}
					?>
					<article>
						<p class="overline"><?php echo esc_html( $heading ); ?></p>
						<h2><?php echo esc_html( $heading ); ?></h2>
						<ul class="company-governance-list">
							<?php foreach ( $items as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( ! empty( $company['future_opportunities'] ) || ! empty( $company['application_process'] ) ) : ?>
		<section class="section section--surface company-detail-application">
			<div class="container company-detail-two">
				<?php if ( ! empty( $company['future_opportunities'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Future Opportunities', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Future Opportunities', 'anstahl-engineering' ); ?></h2>
						<ul class="company-outcome-list">
							<?php foreach ( $company['future_opportunities'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				<?php if ( ! empty( $company['application_process'] ) ) : ?>
					<article>
						<p class="overline"><?php esc_html_e( 'Application Process', 'anstahl-engineering' ); ?></p>
						<h2><?php esc_html_e( 'Application Process', 'anstahl-engineering' ); ?></h2>
						<ol class="company-numbered-list">
							<?php foreach ( $company['application_process'] as $index => $item ) : ?>
								<li>
									<span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
									<p><?php echo esc_html( $item ); ?></p>
								</li>
							<?php endforeach; ?>
						</ol>
					</article>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<section class="section section--surface company-detail-focus">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Focus Areas', 'anstahl-engineering' ),
				'title'       => __( 'Executive Focus Areas', 'anstahl-engineering' ),
				'description' => __( 'Priority areas that define the company direction, operating discipline, and capability development.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="company-detail-grid company-detail-grid--focus">
				<?php foreach ( $company['focus'] as $focus ) : ?>
					<article class="company-detail-card">
						<div class="company-detail-card__icon" aria-hidden="true">
							<?php anstahl_icon( $company['icon'] ); ?>
						</div>
						<p><?php echo esc_html( $focus ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg company-detail-outcomes" aria-labelledby="company-outcomes-title">
		<div class="container company-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Outcomes', 'anstahl-engineering' ); ?></p>
				<h2 id="company-outcomes-title"><?php esc_html_e( 'Corporate Outcomes', 'anstahl-engineering' ); ?></h2>
				<p class="company-detail-muted">
					<?php esc_html_e( 'The value of company governance is measured through stronger technical capability, clearer decisions, better partnerships, and sustainable growth.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="company-outcome-list">
				<?php foreach ( $company['outcomes'] as $outcome ) : ?>
					<li><?php echo esc_html( $outcome ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--cta company-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $company['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with PT Anstahl Engineering Asia to discuss corporate partnership, engineering collaboration, or long-term industrial development opportunities.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $company['cta'],
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
