<?php
/**
 * Front page template.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

$anstahl_home_products = array(
	array(
		'slug'        => 'thornoj',
		'name'        => 'THORNOJ',
		'category'    => __( 'Sealing Technology', 'anstahl-engineering' ),
		'tagline'     => __( 'Industrial Sealing Solutions', 'anstahl-engineering' ),
		'description' => __( 'High-performance packing and mechanical seal systems for rotating and static equipment in demanding process environments.', 'anstahl-engineering' ),
		'accent'      => 'thornoj',
		'icon'        => 'seal',
		'capabilities' => array(
			__( 'Packing Solutions', 'anstahl-engineering' ),
			__( 'Mechanical Seal Systems', 'anstahl-engineering' ),
			__( 'Rotating Equipment Reliability', 'anstahl-engineering' ),
		),
	),
	array(
		'slug'        => 'ormos',
		'name'        => 'ORMOS',
		'category'    => __( 'Precision Manufacturing', 'anstahl-engineering' ),
		'tagline'     => __( 'Industrial Parts & Manufacturing', 'anstahl-engineering' ),
		'description' => __( 'Precision manufacturing and custom engineering for industrial parts, fabricated assemblies, and application-specific components.', 'anstahl-engineering' ),
		'accent'      => 'ormos',
		'icon'        => 'gear',
		'capabilities' => array(
			__( 'Industrial Parts', 'anstahl-engineering' ),
			__( 'Custom Engineering Parts', 'anstahl-engineering' ),
			__( 'Fabricated Assemblies', 'anstahl-engineering' ),
		),
	),
	array(
		'slug'        => 'ragnvern',
		'name'        => 'RAGNVERN',
		'category'    => __( 'Thermal Protection', 'anstahl-engineering' ),
		'tagline'     => __( 'Thermal Insulation Systems', 'anstahl-engineering' ),
		'description' => __( 'Removable insulation blankets and heat protection systems engineered to improve energy efficiency and personnel safety.', 'anstahl-engineering' ),
		'accent'      => 'ragnvern',
		'icon'        => 'thermal',
		'capabilities' => array(
			__( 'Thermal Insulation Blanket', 'anstahl-engineering' ),
			__( 'Heat Protection Systems', 'anstahl-engineering' ),
			__( 'Energy Efficiency Solutions', 'anstahl-engineering' ),
		),
	),
);

$anstahl_home_competencies = array(
	array(
		'slug'        => 'manufacturing',
		'title'       => __( 'Manufacturing', 'anstahl-engineering' ),
		'description' => __( 'Precision-engineered components, custom parts, and industrial assemblies produced to customer drawings and exacting specifications.', 'anstahl-engineering' ),
		'icon'        => 'factory',
	),
	array(
		'slug'        => 'renewable-energy',
		'title'       => __( 'Renewable Energy', 'anstahl-engineering' ),
		'description' => __( 'Energy recovery, hybrid systems, and sustainable power integration that reduce fuel dependence and support ESG objectives.', 'anstahl-engineering' ),
		'icon'        => 'energy',
	),
	array(
		'slug'        => 'automation',
		'title'       => __( 'Automation', 'anstahl-engineering' ),
		'description' => __( 'Industrial automation, system integration, and process control for improved consistency, safety, and throughput.', 'anstahl-engineering' ),
		'icon'        => 'automation',
	),
	array(
		'slug'        => 'data-engineering',
		'title'       => __( 'Data Engineering', 'anstahl-engineering' ),
		'description' => __( 'Data acquisition, analytics, and engineering intelligence that transform operational data into actionable insights.', 'anstahl-engineering' ),
		'icon'        => 'data',
	),
	array(
		'slug'        => 'system-application',
		'title'       => __( 'System Application', 'anstahl-engineering' ),
		'description' => __( 'Application engineering that ensures products and subsystems perform as intended within the full operational context.', 'anstahl-engineering' ),
		'icon'        => 'gear',
	),
	array(
		'slug'        => 'maintenance-improvement',
		'title'       => __( 'Maintenance Improvement', 'anstahl-engineering' ),
		'description' => __( 'Reliability-centred maintenance programmes and equipment lifecycle optimisation that reduce unplanned downtime.', 'anstahl-engineering' ),
		'icon'        => 'maintenance',
	),
	array(
		'slug'        => 'consultancy',
		'title'       => __( 'Multidisciplinary Engineering Consultancy', 'anstahl-engineering' ),
		'description' => __( 'Integrated consultancy spanning mechanical, process, energy, and systems engineering for complex industrial challenges.', 'anstahl-engineering' ),
		'icon'        => 'consultancy',
	),
	array(
		'slug'        => 'biomedical-chemical-rd',
		'title'       => __( 'Biomedical & Chemical R&D', 'anstahl-engineering' ),
		'description' => __( 'Process engineering, materials science, and thermal system design for pharmaceutical, chemical, and food technology applications.', 'anstahl-engineering' ),
		'icon'        => 'thermal',
	),
);

$anstahl_home_projects = array(
	array(
		'slug'    => 'boiler-feed-pump',
		'title'   => __( 'Boiler Feed Pump Improvement', 'anstahl-engineering' ),
		'excerpt' => __( 'Engineered sealing and mechanical solutions for high-pressure boiler feed pump applications in power generation facilities.', 'anstahl-engineering' ),
		'image'   => 'project-pump.svg',
	),
	array(
		'slug'    => 'energy-recovery',
		'title'   => __( 'Energy Recovery Systems', 'anstahl-engineering' ),
		'excerpt' => __( 'Waste heat recovery and energy integration solutions that convert process losses into usable thermal or electrical output.', 'anstahl-engineering' ),
		'image'   => 'project-energy.svg',
	),
	array(
		'slug'    => 'waste-treatment',
		'title'   => __( 'Hybrid Waste Treatment System', 'anstahl-engineering' ),
		'excerpt' => __( 'Integrated treatment systems combining mechanical, thermal, and process engineering for industrial waste management.', 'anstahl-engineering' ),
		'image'   => 'project-waste.svg',
	),
	array(
		'slug'    => 'parts-design',
		'title'   => __( 'Parts Design & Reverse Engineering', 'anstahl-engineering' ),
		'excerpt' => __( 'Reverse engineering and performance optimisation of critical rotating equipment components—extending maintenance intervals.', 'anstahl-engineering' ),
		'image'   => 'project-parts.svg',
	),
);

$anstahl_home_innovations = array(
	array(
		'slug'        => 'flexible-mould-packing',
		'title'       => __( 'Flexible Mould Packing Ring', 'anstahl-engineering' ),
		'description' => __( 'Adaptive sealing geometry for non-standard gland configurations and irregular shaft conditions.', 'anstahl-engineering' ),
	),
	array(
		'slug'        => 'hybrid-packing',
		'title'       => __( 'Hybrid Packing', 'anstahl-engineering' ),
		'description' => __( 'Multi-material packing constructions combining chemical resistance, thermal stability, and low friction in a single solution.', 'anstahl-engineering' ),
	),
	array(
		'slug'        => 'hybrid-mechanical-seal',
		'title'       => __( 'Hybrid Mechanical Seal', 'anstahl-engineering' ),
		'description' => __( 'Advanced face material combinations and seal plan configurations for abrasive and high-temperature duties.', 'anstahl-engineering' ),
	),
	array(
		'slug'        => 'high-pressure-roaster',
		'title'       => __( 'High Pressure Coffee Roaster', 'anstahl-engineering' ),
		'description' => __( 'Precision thermal process engineering applied to specialty food manufacturing equipment.', 'anstahl-engineering' ),
	),
);

$anstahl_why_cards = array(
	array(
		'title'       => __( 'Engineering Driven', 'anstahl-engineering' ),
		'description' => __( 'Every engagement begins with technical understanding—solving problems at the source, not at the symptom.', 'anstahl-engineering' ),
		'icon'        => 'consultancy',
	),
	array(
		'title'       => __( 'Manufacturing Capability', 'anstahl-engineering' ),
		'description' => __( 'Precision production from prototype to serial manufacturing—with full traceability and material certification.', 'anstahl-engineering' ),
		'icon'        => 'factory',
	),
	array(
		'title'       => __( 'Innovation Focus', 'anstahl-engineering' ),
		'description' => __( 'Applied R&D driven by field experience, client challenges, and continuous material and design development.', 'anstahl-engineering' ),
		'icon'        => 'energy',
	),
	array(
		'title'       => __( 'Long-Term Partnership', 'anstahl-engineering' ),
		'description' => __( 'We invest in relationships that extend beyond individual projects—supporting plant performance over years.', 'anstahl-engineering' ),
		'icon'        => 'community',
	),
);

$anstahl_home_values = array(
	array(
		'slug'        => 'safety',
		'title'       => __( 'Safety', 'anstahl-engineering' ),
		'description' => __( 'The precondition for all engineering activity—protecting people across every project and facility.', 'anstahl-engineering' ),
		'icon'        => 'shield',
	),
	array(
		'slug'        => 'quality',
		'title'       => __( 'Quality', 'anstahl-engineering' ),
		'description' => __( 'Engineered at the design stage and maintained through disciplined manufacturing and verification.', 'anstahl-engineering' ),
		'icon'        => 'quality',
	),
	array(
		'slug'        => 'ethics',
		'title'       => __( 'Ethics', 'anstahl-engineering' ),
		'description' => __( 'Integrity is non-negotiable—transparent, fair, and consistent in every engagement.', 'anstahl-engineering' ),
		'icon'        => 'ethics',
	),
	array(
		'slug'        => 'sustainability',
		'title'       => __( 'Sustainability', 'anstahl-engineering' ),
		'description' => __( 'Responsible engineering that minimises resource consumption and extends asset life.', 'anstahl-engineering' ),
		'icon'        => 'sustainability',
	),
	array(
		'slug'        => 'communities',
		'title'       => __( 'Communities', 'anstahl-engineering' ),
		'description' => __( 'Local employment, skills development, and positive contribution to the regions we serve.', 'anstahl-engineering' ),
		'icon'        => 'community',
	),
);

get_header();
?>

<div class="home-v4 home-v41">

<!-- Hero -->
<section class="hero hero--v4" id="hero" aria-labelledby="hero-title">
	<div class="hero__media">
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
	<div class="hero__overlay" aria-hidden="true"></div>
	<div class="hero__radial" aria-hidden="true"></div>
	<div class="hero__motion" aria-hidden="true">
		<div class="hero__motion-grid"></div>
	</div>
	<div class="container hero__content">
		<div class="hero__copy">
			<p class="overline hero__overline hero-fade hero-fade--1"><?php esc_html_e( 'PT Anstahl Engineering Asia', 'anstahl-engineering' ); ?></p>
			<h1 id="hero-title" class="hero__title hero-fade hero-fade--2">
				<?php esc_html_e( 'Engineering Excellence', 'anstahl-engineering' ); ?><br>
				<?php esc_html_e( 'For Industrial Reliability', 'anstahl-engineering' ); ?>
			</h1>
			<p class="hero__subtitle hero-fade hero-fade--3">
				<?php esc_html_e( 'Advanced Engineering, Manufacturing, Automation, Energy Recovery, and Industrial Innovation Solutions for Sustainable Industrial Performance.', 'anstahl-engineering' ); ?>
			</p>
			<div class="hero__actions hero-fade hero-fade--4">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'competence' ),
					'label' => __( 'Explore Solutions', 'anstahl-engineering' ),
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => __( 'Contact Engineering Team', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>

		<div class="hero__stats" role="group" aria-label="<?php esc_attr_e( 'Engineering statistics', 'anstahl-engineering' ); ?>">
			<div class="hero-stat hero-fade hero-fade--5">
				<span class="hero-stat__value" data-count="50">50+</span>
				<span class="hero-stat__label"><?php esc_html_e( 'Projects Delivered', 'anstahl-engineering' ); ?></span>
			</div>
			<div class="hero-stat hero-fade hero-fade--6">
				<span class="hero-stat__value" data-count="10">10+</span>
				<span class="hero-stat__label"><?php esc_html_e( 'Industries Served', 'anstahl-engineering' ); ?></span>
			</div>
			<div class="hero-stat hero-fade hero-fade--7">
				<span class="hero-stat__value">3</span>
				<span class="hero-stat__label"><?php esc_html_e( 'Engineering Brands', 'anstahl-engineering' ); ?></span>
			</div>
			<div class="hero-stat hero-fade hero-fade--8">
				<span class="hero-stat__value hero-stat__value--text"><?php esc_html_e( 'Asia', 'anstahl-engineering' ); ?></span>
				<span class="hero-stat__label"><?php esc_html_e( 'Coverage', 'anstahl-engineering' ); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- Why Anstahl -->
<section class="section section--why home-reveal" id="why-anstahl" aria-labelledby="why-anstahl-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'Why Anstahl', 'anstahl-engineering' ),
			'title'       => __( 'Why Leading Industries Choose Anstahl', 'anstahl-engineering' ),
			'description' => __( 'Industrial operations demand partners who understand process constraints, equipment behaviour, and the cost of downtime.', 'anstahl-engineering' ),
			'align'       => 'center',
			'class'       => 'section-header--why',
		) );
		?>
		<div class="why-grid">
			<?php foreach ( $anstahl_why_cards as $index => $card ) : ?>
				<article class="why-card home-reveal-item" style="--reveal-delay: <?php echo esc_attr( $index * 0.1 ); ?>s">
					<div class="why-card__icon" aria-hidden="true">
						<?php anstahl_icon( $card['icon'] ); ?>
					</div>
					<h3 class="why-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
					<p class="why-card__desc"><?php echo esc_html( $card['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Products Overview -->
<section class="section section--surface products-overview home-reveal" id="products" aria-labelledby="products-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'Our Brands', 'anstahl-engineering' ),
			'title'       => __( 'Products Overview', 'anstahl-engineering' ),
			'description' => __( 'Three engineered product lines delivering sealing, manufacturing, and thermal protection solutions for demanding industrial environments.', 'anstahl-engineering' ),
			'align'       => 'center',
		) );
		?>
		<div class="products-overview__body">
			<div class="grid grid--3 home-products products-overview__grid">
				<?php foreach ( $anstahl_home_products as $index => $product ) : ?>
					<div class="products-overview__item home-reveal-item" style="--reveal-delay: <?php echo esc_attr( $index * 0.12 ); ?>s">
						<article class="card-product card-product--<?php echo esc_attr( $product['accent'] ); ?>">
							<div class="card-product__header">
								<p class="card-product__category"><?php echo esc_html( $product['category'] ); ?></p>
								<div class="card-product__icon" aria-hidden="true">
									<?php anstahl_icon( $product['icon'] ); ?>
								</div>
							</div>
							<h3 class="card-product__name">
								<a href="<?php echo esc_url( anstahl_get_page_url( 'products' ) . '#' . $product['slug'] ); ?>">
									<?php echo esc_html( $product['name'] ); ?>
								</a>
							</h3>
							<p class="card-product__tagline"><?php echo esc_html( $product['tagline'] ); ?></p>
							<p class="card-product__desc"><?php echo esc_html( $product['description'] ); ?></p>
							<ul class="card-product__capabilities">
								<?php foreach ( $product['capabilities'] as $capability ) : ?>
									<li><?php echo esc_html( $capability ); ?></li>
								<?php endforeach; ?>
							</ul>
							<a class="card-product__link" href="<?php echo esc_url( anstahl_get_page_url( 'products' ) . '#' . $product['slug'] ); ?>">
								<?php esc_html_e( 'Learn more', 'anstahl-engineering' ); ?>
								<span aria-hidden="true"><?php anstahl_icon( 'arrow' ); ?></span>
							</a>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="section__cta products-overview__cta">
				<h3 class="products-overview__cta-title">
					<?php esc_html_e( 'Engineered product lines for demanding industrial environments.', 'anstahl-engineering' ); ?>
				</h3>
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'products' ),
					'label' => __( 'View All Products', 'anstahl-engineering' ),
					'style' => 'ghost',
					'icon'  => true,
				) );
				?>
			</div>
		</div>
	</div>
</section>

<!-- Competence Overview -->
<section class="section section--bg home-reveal" id="competencies" aria-labelledby="competencies-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'What We Do', 'anstahl-engineering' ),
			'title'       => __( 'Competence Overview', 'anstahl-engineering' ),
			'description' => __( 'Multidisciplinary engineering capabilities spanning manufacturing, energy, automation, data engineering, and consultancy—delivered as integrated solutions.', 'anstahl-engineering' ),
			'align'       => 'center',
		) );
		?>
		<div class="grid grid--3 home-competence">
			<?php foreach ( $anstahl_home_competencies as $index => $competence ) : ?>
				<div class="home-reveal-item" style="--reveal-delay: <?php echo esc_attr( $index * 0.08 ); ?>s">
					<?php get_template_part( 'template-parts/components/card', 'competence', $competence ); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="section__cta">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'competence' ),
				'label' => __( 'View All Competencies', 'anstahl-engineering' ),
				'style' => 'ghost',
				'icon'  => true,
			) );
			?>
		</div>
	</div>
</section>

<!-- Featured Projects -->
<section class="section section--surface home-reveal" id="projects" aria-labelledby="projects-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'Our Work', 'anstahl-engineering' ),
			'title'       => __( 'Featured Projects', 'anstahl-engineering' ),
			'description' => __( 'Real engineering challenges solved with measurable outcomes across power generation, energy recovery, and industrial process systems.', 'anstahl-engineering' ),
			'align'       => 'left',
		) );
		?>
		<div class="grid grid--2 home-projects">
			<?php foreach ( $anstahl_home_projects as $index => $project ) : ?>
				<div class="home-reveal-item" style="--reveal-delay: <?php echo esc_attr( $index * 0.1 ); ?>s">
					<?php get_template_part( 'template-parts/components/card', 'project', $project ); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="section__cta section__cta--left">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'projects' ),
				'label' => __( 'View All Projects', 'anstahl-engineering' ),
				'style' => 'ghost',
				'icon'  => true,
			) );
			?>
		</div>
	</div>
</section>

<!-- Innovation -->
<section class="section section--bg home-reveal" id="innovation" aria-labelledby="innovation-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'R&D & Innovation', 'anstahl-engineering' ),
			'title'       => __( 'Innovation', 'anstahl-engineering' ),
			'description' => __( 'Applied engineering innovation driven by field experience, client challenges, and continuous material and design development.', 'anstahl-engineering' ),
			'align'       => 'center',
		) );
		?>
		<div class="grid grid--2 home-innovation">
			<?php foreach ( $anstahl_home_innovations as $index => $innovation ) : ?>
				<div class="home-reveal-item" style="--reveal-delay: <?php echo esc_attr( $index * 0.1 ); ?>s">
					<?php get_template_part( 'template-parts/components/card', 'innovation', $innovation ); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="section__cta">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'innovation' ),
				'label' => __( 'Explore Innovation', 'anstahl-engineering' ),
				'style' => 'ghost',
				'icon'  => true,
			) );
			?>
		</div>
	</div>
</section>

<!-- Approach -->
<section class="section section--surface home-reveal" id="approach" aria-labelledby="approach-title">
	<div class="container">
		<?php
		anstahl_section_header( array(
			'overline'    => __( 'How We Work', 'anstahl-engineering' ),
			'title'       => __( 'Approach', 'anstahl-engineering' ),
			'description' => __( 'Safety, quality, ethics, sustainability, and community—embedded in every engineering decision we make.', 'anstahl-engineering' ),
			'align'       => 'center',
		) );
		?>
		<div class="grid grid--5">
			<?php foreach ( $anstahl_home_values as $value ) : ?>
				<?php get_template_part( 'template-parts/components/card', 'values', $value ); ?>
			<?php endforeach; ?>
		</div>
		<div class="section__cta">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'approach' ),
				'label' => __( 'Learn About Our Approach', 'anstahl-engineering' ),
				'style' => 'ghost',
				'icon'  => true,
			) );
			?>
		</div>
	</div>
</section>

<!-- Final CTA -->
<section class="section section--cta section--cta-v4" id="contact-cta" aria-labelledby="contact-cta-title">
	<div class="container section--cta__inner">
		<h2 id="contact-cta-title" class="section--cta__title">
			<?php esc_html_e( "Let's Build Better Engineering Solutions Together", 'anstahl-engineering' ); ?>
		</h2>
		<p class="section--cta__desc">
			<?php esc_html_e( 'Partner with PT Anstahl Engineering Asia for engineered products, manufacturing capability, automation integration, and multidisciplinary consultancy.', 'anstahl-engineering' ); ?>
		</p>
		<div class="section--cta__actions">
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'contact' ),
				'label' => __( 'Request Consultation', 'anstahl-engineering' ),
				'style' => 'white',
				'size'  => 'lg',
			) );
			?>
		</div>
	</div>
</section>

</div><!-- .home-v4 -->

<?php
get_footer();
