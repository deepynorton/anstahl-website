<?php
/**
 * Static theme content data.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

/**
 * Get navigation fallback links.
 *
 * @return array<int, array{label: string, url: string}>
 */
function anstahl_get_nav_links() {
	return array(
		array(
			'label' => __( 'Products', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'products' ),
		),
		array(
			'label' => __( 'Competence', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'competence' ),
		),
		array(
			'label' => __( 'Projects', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'projects' ),
		),
		array(
			'label' => __( 'Innovation', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'innovation' ),
		),
		array(
			'label' => __( 'Approach', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'approach' ),
		),
		array(
			'label' => __( 'Company', 'anstahl-engineering' ),
			'url'   => anstahl_get_page_url( 'company' ),
		),
	);
}

/**
 * Resolve page URL by slug with home fallback.
 *
 * @param string $slug Page slug.
 * @return string
 */
function anstahl_get_page_url( $slug ) {
	$page = get_page_by_path( $slug );

	if ( $page ) {
		return get_permalink( $page->ID );
	}

	return home_url( '/' . $slug . '/' );
}

/**
 * Product cards for homepage and products template.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_products() {
	return array(
		array(
			'slug'        => 'thornoj',
			'name'        => 'THORNOJ',
			'tagline'     => __( 'Advanced Sealing & Packing Solutions', 'anstahl-engineering' ),
			'description' => __( 'High-performance packing and mechanical seal systems for rotating and static equipment in demanding process environments.', 'anstahl-engineering' ),
			'accent'      => 'thornoj',
			'icon'        => 'seal',
		),
		array(
			'slug'        => 'ormos',
			'name'        => 'ORMOS',
			'tagline'     => __( 'Industrial & Custom Engineered Components', 'anstahl-engineering' ),
			'description' => __( 'Precision manufacturing and custom engineering for industrial parts, fabricated assemblies, and application-specific components.', 'anstahl-engineering' ),
			'accent'      => 'ormos',
			'icon'        => 'gear',
		),
		array(
			'slug'        => 'ragnvern',
			'name'        => 'RAGNVERN',
			'tagline'     => __( 'Thermal Insulation & Heat Protection Systems', 'anstahl-engineering' ),
			'description' => __( 'Removable insulation blankets and heat protection systems engineered to improve energy efficiency and personnel safety.', 'anstahl-engineering' ),
			'accent'      => 'ragnvern',
			'icon'        => 'thermal',
		),
	);
}

/**
 * Competence cards.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_competencies() {
	return array(
		array(
			'slug'        => 'manufacturing',
			'title'       => __( 'Manufacturing', 'anstahl-engineering' ),
			'description' => __( 'Precision-engineered components, custom parts, and industrial assemblies manufactured to exacting specifications.', 'anstahl-engineering' ),
			'icon'        => 'factory',
		),
		array(
			'slug'        => 'renewable-energy',
			'title'       => __( 'Renewable Energy', 'anstahl-engineering' ),
			'description' => __( 'Energy recovery, hybrid systems, and sustainable power integration across industrial applications.', 'anstahl-engineering' ),
			'icon'        => 'energy',
		),
		array(
			'slug'        => 'automation',
			'title'       => __( 'Automation', 'anstahl-engineering' ),
			'description' => __( 'Industrial automation, system integration, and process control for consistency and operational throughput.', 'anstahl-engineering' ),
			'icon'        => 'automation',
		),
		array(
			'slug'        => 'data-engineering',
			'title'       => __( 'Data Engineering', 'anstahl-engineering' ),
			'description' => __( 'Data acquisition, analytics, and engineering intelligence that transform operational data into actionable insights.', 'anstahl-engineering' ),
			'icon'        => 'data',
		),
		array(
			'slug'        => 'maintenance-improvement',
			'title'       => __( 'Maintenance Improvement', 'anstahl-engineering' ),
			'description' => __( 'Reliability-centred maintenance programmes and equipment lifecycle optimisation strategies.', 'anstahl-engineering' ),
			'icon'        => 'maintenance',
		),
		array(
			'slug'        => 'consultancy',
			'title'       => __( 'Engineering Consultancy', 'anstahl-engineering' ),
			'description' => __( 'Integrated consultancy spanning mechanical, process, energy, and systems engineering.', 'anstahl-engineering' ),
			'icon'        => 'consultancy',
		),
	);
}

/**
 * Project cards.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_projects() {
	return array(
		array(
			'slug'        => 'parts-design',
			'title'       => __( 'Parts Design & Improvement', 'anstahl-engineering' ),
			'excerpt'     => __( 'Reverse engineering and performance optimisation of critical rotating equipment components.', 'anstahl-engineering' ),
			'image'       => 'project-parts.svg',
		),
		array(
			'slug'        => 'energy-recovery',
			'title'       => __( 'Energy Recovery Systems', 'anstahl-engineering' ),
			'excerpt'     => __( 'Waste heat recovery solutions that convert process losses into usable thermal or electrical output.', 'anstahl-engineering' ),
			'image'       => 'project-energy.svg',
		),
		array(
			'slug'        => 'boiler-feed-pump',
			'title'       => __( 'Boiler Feed Pump Solutions', 'anstahl-engineering' ),
			'excerpt'     => __( 'Engineered sealing and mechanical solutions for high-pressure boiler feed pump applications.', 'anstahl-engineering' ),
			'image'       => 'project-pump.svg',
		),
		array(
			'slug'        => 'waste-treatment',
			'title'       => __( 'Hybrid Waste Treatment Systems', 'anstahl-engineering' ),
			'excerpt'     => __( 'Integrated treatment systems combining mechanical, thermal, and process engineering.', 'anstahl-engineering' ),
			'image'       => 'project-waste.svg',
		),
	);
}

/**
 * Innovation cards.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_innovations() {
	return array(
		array(
			'slug'        => 'flexible-mould-packing',
			'title'       => __( 'Flexible Mould Packing Ring', 'anstahl-engineering' ),
			'description' => __( 'Adaptive sealing geometry for non-standard gland configurations and irregular shaft conditions.', 'anstahl-engineering' ),
		),
		array(
			'slug'        => 'hybrid-packing',
			'title'       => __( 'Hybrid Packing Technology', 'anstahl-engineering' ),
			'description' => __( 'Multi-material packing constructions combining chemical resistance, thermal stability, and low friction.', 'anstahl-engineering' ),
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
}

/**
 * Approach value pillars.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_values() {
	return array(
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
}

/**
 * Get theme image URL.
 *
 * @param string $filename Image filename.
 * @return string
 */
function anstahl_get_image_url( $filename ) {
	return get_template_directory_uri() . '/assets/images/' . ltrim( $filename, '/' );
}
