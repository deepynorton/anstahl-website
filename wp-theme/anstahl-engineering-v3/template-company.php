<?php
/**
 * Template Name: Company
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$company = anstahl_get_company_overview();
$nav     = anstahl_get_company_navigation();
?>

<main class="company-overview" aria-labelledby="company-overview-title">
	<section class="company-overview-hero">
		<div class="company-overview-hero__media">
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
		<div class="company-overview-hero__overlay" aria-hidden="true"></div>
		<div class="company-overview-hero__grid" aria-hidden="true"></div>
		<div class="container company-overview-hero__content">
			<p class="overline"><?php echo esc_html( $company['hero']['overline'] ); ?></p>
			<h1 id="company-overview-title" class="company-overview-hero__title">
				<?php echo esc_html( $company['hero']['title'] ); ?>
			</h1>
			<p class="company-overview-hero__desc">
				<?php echo esc_html( $company['hero']['description'] ); ?>
			</p>
			<div class="company-overview-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'mission-vision' ),
					'label' => __( 'Explore Company Direction', 'anstahl-engineering' ),
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => __( 'Contact Anstahl', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<nav class="company-section-nav" aria-label="<?php esc_attr_e( 'Company section navigation', 'anstahl-engineering' ); ?>">
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

	<section class="section section--surface company-statement" aria-labelledby="company-statement-title">
		<div class="container company-statement__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Executive Statement', 'anstahl-engineering' ); ?></p>
				<h2 id="company-statement-title"><?php esc_html_e( 'Engineering-Led Company Statement', 'anstahl-engineering' ); ?></h2>
			</div>
			<div class="company-statement__copy">
				<p><?php echo esc_html( $company['statement'] ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg company-snapshot">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Corporate Snapshot', 'anstahl-engineering' ),
				'title'       => __( 'Integrated Industrial Capability', 'anstahl-engineering' ),
				'description' => __( 'A corporate platform connecting engineering judgement, manufacturing discipline, applied innovation, and consultancy for industrial clients.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="company-snapshot-grid">
				<?php foreach ( $company['snapshot'] as $item ) : ?>
					<article class="company-snapshot-card">
						<div class="company-snapshot-card__icon" aria-hidden="true">
							<?php anstahl_icon( $item['icon'] ); ?>
						</div>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['description'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--surface company-pillars">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Corporate Pillars', 'anstahl-engineering' ),
				'title'       => __( 'How Anstahl Builds Industrial Trust', 'anstahl-engineering' ),
				'description' => __( 'The pillars that reinforce engineering credibility, governance maturity, technical capability, and long-term partnership.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="company-pillar-grid">
				<?php foreach ( $company['pillars'] as $pillar ) : ?>
					<article class="company-pillar-card">
						<div class="company-pillar-card__icon" aria-hidden="true">
							<?php anstahl_icon( $pillar['icon'] ); ?>
						</div>
						<h3><?php echo esc_html( $pillar['title'] ); ?></h3>
						<p><?php echo esc_html( $pillar['description'] ); ?></p>
						<a class="company-card-link" href="<?php echo esc_url( $pillar['url'] ); ?>">
							<span><?php esc_html_e( 'Read more', 'anstahl-engineering' ); ?></span>
							<?php anstahl_icon( 'arrow' ); ?>
						</a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg company-timeline" aria-labelledby="company-timeline-title">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Corporate Timeline', 'anstahl-engineering' ),
				'title'       => __( 'Past, Present, and Future Direction', 'anstahl-engineering' ),
				'description' => __( 'A growth path from industrial problem solving toward broader technical leadership and sustainable engineering impact.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="company-timeline-list">
				<?php foreach ( $company['timeline'] as $item ) : ?>
					<li>
						<span class="company-timeline-list__period"><?php echo esc_html( $item['period'] ); ?></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['description'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--cta company-overview-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title"><?php echo esc_html( $company['cta']['title'] ); ?></h2>
			<p class="section--cta__desc"><?php echo esc_html( $company['cta']['description'] ); ?></p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => $company['cta']['url'],
					'label' => $company['cta']['label'],
					'style' => 'white',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
