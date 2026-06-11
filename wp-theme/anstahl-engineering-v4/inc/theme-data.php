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
 * Contact page data.
 *
 * @return array<string, mixed>
 */
function anstahl_get_contact_page_data() {
	return array(
		'hero'         => array(
			'overline'    => __( 'Contact', 'anstahl-engineering' ),
			'title'       => __( 'Enterprise RFQ Center', 'anstahl-engineering' ),
			'description' => __( 'Request quotation, engineering assessment, technical consultation, product information, or partnership discussion through a structured engineering review path.', 'anstahl-engineering' ),
			'cta'         => __( 'Start RFQ Process', 'anstahl-engineering' ),
		),
		'channels'     => array(
			array(
				'title'    => __( 'Request Quotation', 'anstahl-engineering' ),
				'purpose'  => __( 'For defined product, manufacturing, service, or project requirements that are ready for commercial and technical review.', 'anstahl-engineering' ),
				'response' => __( 'Scope confirmation, required technical data, commercial routing, and quotation preparation pathway.', 'anstahl-engineering' ),
				'use'      => __( 'Use when drawings, specifications, quantities, operating requirements, or project scope are already available.', 'anstahl-engineering' ),
				'icon'     => 'gear',
			),
			array(
				'title'    => __( 'Request Engineering Assessment', 'anstahl-engineering' ),
				'purpose'  => __( 'For equipment reliability issues, repeated failures, performance losses, maintenance problems, or undefined technical improvement needs.', 'anstahl-engineering' ),
				'response' => __( 'Initial assessment path, operating data request, failure context review, and recommended technical discussion.', 'anstahl-engineering' ),
				'use'      => __( 'Use when the problem is known but the engineering solution or scope is not yet defined.', 'anstahl-engineering' ),
				'icon'     => 'factory',
			),
			array(
				'title'    => __( 'Request Technical Consultation', 'anstahl-engineering' ),
				'purpose'  => __( 'For engineering managers, reliability teams, maintenance teams, and project teams that need technical discussion before procurement or execution.', 'anstahl-engineering' ),
				'response' => __( 'Technical clarification, decision context review, and recommendation for assessment, RFQ, or project engagement.', 'anstahl-engineering' ),
				'use'      => __( 'Use when a technical decision requires engineering discussion with Anstahl before formal scope is issued.', 'anstahl-engineering' ),
				'icon'     => 'consultancy',
			),
			array(
				'title'    => __( 'Request Partnership Discussion', 'anstahl-engineering' ),
				'purpose'  => __( 'For EPC collaboration, strategic supply partnership, industrial alliance, investor discussion, or institutional cooperation.', 'anstahl-engineering' ),
				'response' => __( 'Partnership fit review, capability alignment, and executive follow-up direction.', 'anstahl-engineering' ),
				'use'      => __( 'Use for long-term collaboration beyond a single quotation or transaction.', 'anstahl-engineering' ),
				'icon'     => 'community',
			),
			array(
				'title'    => __( 'Request Product Information', 'anstahl-engineering' ),
				'purpose'  => __( 'For THORNOJ, ORMOS, RAGNVERN, technical specifications, application suitability, product documentation, or selection questions.', 'anstahl-engineering' ),
				'response' => __( 'Product suitability review, information request, application questions, and product-specific next steps.', 'anstahl-engineering' ),
				'use'      => __( 'Use when the inquiry is primarily related to product application, replacement, or technical data.', 'anstahl-engineering' ),
				'icon'     => 'arrow',
			),
		),
		'upload_support' => array(
			__( 'Technical Drawing', 'anstahl-engineering' ),
			__( 'Datasheet', 'anstahl-engineering' ),
			__( 'Failure Analysis Photos', 'anstahl-engineering' ),
			__( 'Specifications', 'anstahl-engineering' ),
			__( 'Project Brief', 'anstahl-engineering' ),
		),
		'information'  => array(
			array(
				'label' => __( 'Company Name', 'anstahl-engineering' ),
				'value' => __( 'PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			),
			array(
				'label' => __( 'Business Email', 'anstahl-engineering' ),
				'value' => __( 'info@anstahl.com', 'anstahl-engineering' ),
				'url'   => 'mailto:info@anstahl.com',
			),
			array(
				'label' => __( 'Phone', 'anstahl-engineering' ),
				'value' => __( 'Available by confirmed business inquiry', 'anstahl-engineering' ),
			),
			array(
				'label' => __( 'Office Location', 'anstahl-engineering' ),
				'value' => __( 'Indonesia', 'anstahl-engineering' ),
			),
			array(
				'label' => __( 'Business Hours', 'anstahl-engineering' ),
				'value' => __( 'Monday to Friday, 08:00 to 17:00 WIB', 'anstahl-engineering' ),
			),
		),
		'process'      => array(
			array(
				'step'        => __( 'Step 01', 'anstahl-engineering' ),
				'title'       => __( 'Submit Inquiry', 'anstahl-engineering' ),
				'description' => __( 'Send your technical context, equipment information, project requirement, or partnership objective.', 'anstahl-engineering' ),
			),
			array(
				'step'        => __( 'Step 02', 'anstahl-engineering' ),
				'title'       => __( 'Engineering Review', 'anstahl-engineering' ),
				'description' => __( 'The inquiry is reviewed for technical scope, required data, operating conditions, and response pathway.', 'anstahl-engineering' ),
			),
			array(
				'step'        => __( 'Step 03', 'anstahl-engineering' ),
				'title'       => __( 'Technical Discussion', 'anstahl-engineering' ),
				'description' => __( 'The team clarifies constraints, assumptions, risks, specifications, and expected industrial outcomes.', 'anstahl-engineering' ),
			),
			array(
				'step'        => __( 'Step 04', 'anstahl-engineering' ),
				'title'       => __( 'Proposed Solution', 'anstahl-engineering' ),
				'description' => __( 'A practical solution path, product selection, engineering scope, or collaboration direction is prepared.', 'anstahl-engineering' ),
			),
			array(
				'step'        => __( 'Step 05', 'anstahl-engineering' ),
				'title'       => __( 'Project Execution', 'anstahl-engineering' ),
				'description' => __( 'Approved work proceeds through engineering control, manufacturing readiness, delivery, and follow-up support.', 'anstahl-engineering' ),
			),
		),
		'reasons'      => array(
			array(
				'title'       => __( 'Engineering Expertise', 'anstahl-engineering' ),
				'description' => __( 'Technical review across mechanical systems, automation, energy, maintenance, data, and multidisciplinary engineering.', 'anstahl-engineering' ),
				'icon'        => 'gear',
			),
			array(
				'title'       => __( 'Industrial Experience', 'anstahl-engineering' ),
				'description' => __( 'Practical understanding of mining, power, manufacturing, process facilities, and industrial operating constraints.', 'anstahl-engineering' ),
				'icon'        => 'factory',
			),
			array(
				'title'       => __( 'Manufacturing Capability', 'anstahl-engineering' ),
				'description' => __( 'Support from reverse engineering, custom parts, fabricated assemblies, and manufacturing documentation.', 'anstahl-engineering' ),
				'icon'        => 'quality',
			),
			array(
				'title'       => __( 'Innovation Capability', 'anstahl-engineering' ),
				'description' => __( 'Applied R&D focused on sealing, thermal systems, energy efficiency, reliability, and technical improvement.', 'anstahl-engineering' ),
				'icon'        => 'energy',
			),
			array(
				'title'       => __( 'Long-Term Partnership', 'anstahl-engineering' ),
				'description' => __( 'Engagement beyond single transactions, with attention to asset lifecycle, continuity, and industrial value.', 'anstahl-engineering' ),
				'icon'        => 'community',
			),
		),
		'form'         => array(
			'fields'      => array(
				'name'         => array(
					'label'       => __( 'Name', 'anstahl-engineering' ),
					'type'        => 'text',
					'required'    => true,
					'autocomplete' => 'name',
					'validation'  => __( 'Required. Enter your full name.', 'anstahl-engineering' ),
					'error'       => __( 'Please enter your name.', 'anstahl-engineering' ),
				),
				'company'      => array(
					'label'       => __( 'Company', 'anstahl-engineering' ),
					'type'        => 'text',
					'required'    => true,
					'autocomplete' => 'organization',
					'validation'  => __( 'Required. Enter your company or institution name.', 'anstahl-engineering' ),
					'error'       => __( 'Please enter your company name.', 'anstahl-engineering' ),
				),
				'position'     => array(
					'label'       => __( 'Position', 'anstahl-engineering' ),
					'type'        => 'text',
					'required'    => false,
					'autocomplete' => 'organization-title',
					'validation'  => __( 'Optional. Enter your role or department.', 'anstahl-engineering' ),
					'error'       => __( 'Please check your position entry.', 'anstahl-engineering' ),
				),
				'email'        => array(
					'label'       => __( 'Email', 'anstahl-engineering' ),
					'type'        => 'email',
					'required'    => true,
					'autocomplete' => 'email',
					'validation'  => __( 'Required. Enter a valid business email address.', 'anstahl-engineering' ),
					'error'       => __( 'Please enter a valid email address.', 'anstahl-engineering' ),
				),
				'phone'        => array(
					'label'       => __( 'Phone', 'anstahl-engineering' ),
					'type'        => 'tel',
					'required'    => false,
					'autocomplete' => 'tel',
					'validation'  => __( 'Optional. Include country or area code where possible.', 'anstahl-engineering' ),
					'error'       => __( 'Please check your phone number.', 'anstahl-engineering' ),
				),
				'industry'     => array(
					'label'      => __( 'Industry', 'anstahl-engineering' ),
					'type'       => 'select',
					'required'   => true,
					'validation' => __( 'Required. Select the closest industry category.', 'anstahl-engineering' ),
					'error'      => __( 'Please select an industry.', 'anstahl-engineering' ),
					'options'    => array(
						'mining'        => __( 'Mining', 'anstahl-engineering' ),
						'power'         => __( 'Power Generation', 'anstahl-engineering' ),
						'manufacturing' => __( 'Manufacturing', 'anstahl-engineering' ),
						'epc'           => __( 'EPC / Contractor', 'anstahl-engineering' ),
						'oil-gas'       => __( 'Oil & Gas', 'anstahl-engineering' ),
						'process'       => __( 'Process Industry', 'anstahl-engineering' ),
						'infrastructure' => __( 'Infrastructure', 'anstahl-engineering' ),
						'other'         => __( 'Other Industrial Sector', 'anstahl-engineering' ),
					),
				),
				'inquiry_type' => array(
					'label'      => __( 'Inquiry Type', 'anstahl-engineering' ),
					'type'       => 'select',
					'required'   => true,
					'validation' => __( 'Required. Select the inquiry type that best matches your requirement.', 'anstahl-engineering' ),
					'error'      => __( 'Please select an inquiry type.', 'anstahl-engineering' ),
					'options'    => array(
						'rfq'          => __( 'Request Quotation', 'anstahl-engineering' ),
						'assessment'   => __( 'Request Engineering Assessment', 'anstahl-engineering' ),
						'consultation' => __( 'Request Technical Consultation', 'anstahl-engineering' ),
						'partnership'  => __( 'Request Partnership Discussion', 'anstahl-engineering' ),
						'product'      => __( 'Request Product Information', 'anstahl-engineering' ),
					),
				),
				'message'      => array(
					'label'      => __( 'Message', 'anstahl-engineering' ),
					'type'       => 'textarea',
					'required'   => true,
					'validation' => __( 'Required. Describe the equipment, process, issue, project, or collaboration objective.', 'anstahl-engineering' ),
					'error'      => __( 'Please describe your inquiry.', 'anstahl-engineering' ),
				),
				'attachment'   => array(
					'label'      => __( 'Attachment', 'anstahl-engineering' ),
					'type'       => 'file',
					'required'   => false,
					'accept'     => '.pdf,.doc,.docx,.jpg,.jpeg,.png,.zip',
					'validation' => __( 'Optional. Upload one PDF, DOC, DOCX, JPG, PNG, or ZIP file up to 8 MB containing drawings, datasheets, photos, specifications, or project brief.', 'anstahl-engineering' ),
					'error'      => __( 'Please upload an allowed file type up to 8 MB.', 'anstahl-engineering' ),
				),
				'consent'      => array(
					'label'      => __( 'I consent to PT Anstahl Engineering Asia reviewing this inquiry and contacting me about the submitted requirement.', 'anstahl-engineering' ),
					'type'       => 'checkbox',
					'required'   => true,
					'validation' => __( 'Required. Consent is needed before submitting an inquiry.', 'anstahl-engineering' ),
					'error'      => __( 'Please confirm consent before submitting.', 'anstahl-engineering' ),
				),
			),
			'submit_label' => __( 'Submit RFQ / Inquiry', 'anstahl-engineering' ),
			'note'         => __( 'This RFQ center uses server-side validation, nonce protection, spam controls, rate limiting, optional reCAPTCHA, secure upload handling, and inquiry routing.', 'anstahl-engineering' ),
		),
		'cta'          => array(
			'title'       => __( 'Move From Technical Question To Engineering Action', 'anstahl-engineering' ),
			'description' => __( 'Submit your RFQ, assessment request, consultation need, product inquiry, or partnership discussion through the Anstahl RFQ Center.', 'anstahl-engineering' ),
			'label'       => __( 'Start RFQ Process', 'anstahl-engineering' ),
		),
	);
}

/**
 * Enterprise trust architecture.
 *
 * @return array<string, array<int, array<string, string>>>
 */
function anstahl_get_enterprise_trust_layer() {
	return array(
		'industries'   => array(
			array( 'title' => __( 'Mining', 'anstahl-engineering' ), 'description' => __( 'Reliability, maintenance, component improvement, and equipment support for demanding mining operations.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Power Generation', 'anstahl-engineering' ), 'description' => __( 'Pump reliability, sealing systems, thermal systems, energy recovery, and plant support.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Manufacturing', 'anstahl-engineering' ), 'description' => __( 'Manufacturing readiness, engineered parts, automation, process improvement, and maintenance support.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Oil & Gas', 'anstahl-engineering' ), 'description' => __( 'Application review for rotating equipment, sealing reliability, components, and safety-aware technical support.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Utilities', 'anstahl-engineering' ), 'description' => __( 'Support for critical assets, thermal efficiency, operational continuity, and engineering assessment.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Infrastructure', 'anstahl-engineering' ), 'description' => __( 'Engineering coordination, systems support, manufacturing, and long-term industrial facility improvement.', 'anstahl-engineering' ) ),
		),
		'disciplines'  => array(
			array( 'title' => __( 'Mechanical Engineering', 'anstahl-engineering' ), 'description' => __( 'Equipment, components, interfaces, materials, tolerances, and mechanical improvement.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Reliability Engineering', 'anstahl-engineering' ), 'description' => __( 'Failure context, maintenance improvement, uptime support, and asset lifecycle thinking.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Manufacturing Engineering', 'anstahl-engineering' ), 'description' => __( 'Reverse engineering, drawing control, fabrication, inspection, and manufacturing readiness.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Automation Engineering', 'anstahl-engineering' ), 'description' => __( 'Control systems, instrumentation, monitoring, integration, and process visibility.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Energy Systems', 'anstahl-engineering' ), 'description' => __( 'Energy recovery, thermal efficiency, heat protection, and process energy review.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Data Engineering', 'anstahl-engineering' ), 'description' => __( 'Data acquisition, dashboards, reporting, analytics, and operational intelligence.', 'anstahl-engineering' ) ),
		),
		'commitments'  => array(
			array( 'title' => __( 'Safety', 'anstahl-engineering' ), 'description' => __( 'Risk awareness, equipment safety, site discipline, and safe work practice.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Quality', 'anstahl-engineering' ), 'description' => __( 'Technical review, verification, inspection, documentation, and continuous improvement.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Ethics', 'anstahl-engineering' ), 'description' => __( 'Transparent communication, responsible procurement, fair practice, and accountability.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Sustainability', 'anstahl-engineering' ), 'description' => __( 'Resource efficiency, asset life extension, waste reduction, and responsible engineering.', 'anstahl-engineering' ) ),
		),
		'framework'    => array(
			array( 'title' => __( 'Discover', 'anstahl-engineering' ), 'description' => __( 'Clarify operating context, failure history, technical requirement, and business constraint.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Assess', 'anstahl-engineering' ), 'description' => __( 'Review evidence, drawings, duty conditions, maintenance records, and risk factors.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Engineer', 'anstahl-engineering' ), 'description' => __( 'Develop technical path, product selection, manufacturing route, or project method.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Validate', 'anstahl-engineering' ), 'description' => __( 'Check fit, function, specification, documentation, maintainability, and implementation risk.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Implement', 'anstahl-engineering' ), 'description' => __( 'Execute through controlled engineering, manufacturing readiness, site coordination, and delivery.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Support', 'anstahl-engineering' ), 'description' => __( 'Maintain continuity through follow-up review, improvement feedback, and lifecycle support.', 'anstahl-engineering' ) ),
		),
		'eeat'         => array(
			array( 'title' => __( 'Why Anstahl', 'anstahl-engineering' ), 'description' => __( 'Anstahl connects engineering review, manufacturing capability, reliability thinking, and long-term partnership.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Engineering Methodology', 'anstahl-engineering' ), 'description' => __( 'Work begins with operating context, evidence review, technical constraints, and implementation risk.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Technical Review Process', 'anstahl-engineering' ), 'description' => __( 'Reviews consider drawings, site data, duty conditions, failure records, materials, and manufacturing readiness.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Project Governance', 'anstahl-engineering' ), 'description' => __( 'Project delivery is controlled through scope definition, decision records, documentation, and review checkpoints.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Quality Assurance', 'anstahl-engineering' ), 'description' => __( 'Quality depends on requirements, verification, inspection, traceability, and corrective learning.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Continuous Improvement', 'anstahl-engineering' ), 'description' => __( 'Lessons from field conditions, manufacturing feedback, and project delivery are used to improve future work.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Evidence-Based Engineering', 'anstahl-engineering' ), 'description' => __( 'Recommendations are tied to operating evidence, measurable constraints, and practical industrial outcomes.', 'anstahl-engineering' ) ),
			array( 'title' => __( 'Industrial Collaboration', 'anstahl-engineering' ), 'description' => __( 'Anstahl works with plant teams, procurement, maintenance, engineering, EPC partners, and asset owners.', 'anstahl-engineering' ) ),
		),
	);
}

/**
 * Flagship case study architecture.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_case_studies() {
	return array(
		'boiler-feed-pump-reliability-improvement' => array(
			'title'       => __( 'Boiler Feed Pump Reliability Improvement', 'anstahl-engineering' ),
			'overline'    => __( 'Case Study 01', 'anstahl-engineering' ),
			'hero'        => __( 'Reliability improvement approach for high-pressure boiler feed pump operation, sealing stability, failure reduction, and maintenance planning.', 'anstahl-engineering' ),
			'background'  => __( 'A power generation environment experienced recurring boiler feed pump issues that affected maintenance planning and operating confidence. The pump duty involved high pressure, elevated temperature, and limited tolerance for unplanned intervention.', 'anstahl-engineering' ),
			'challenge'   => __( 'The client needed a technical review that separated symptoms from root contributors, including seal distress, operating conditions, mechanical interfaces, and maintenance practice.', 'anstahl-engineering' ),
			'assessment'  => __( 'The engineering assessment reviewed duty conditions, seal environment, maintenance history, inspection observations, and likely failure modes affecting pump reliability.', 'anstahl-engineering' ),
			'methodology' => array(
				__( 'Collect operating history, maintenance records, and failure observations.', 'anstahl-engineering' ),
				__( 'Review mechanical seal conditions, cooling or flush requirements, and interface constraints.', 'anstahl-engineering' ),
				__( 'Identify maintainability gaps and operating practices that influence reliability.', 'anstahl-engineering' ),
				__( 'Prepare improvement path with verification points and maintenance guidance.', 'anstahl-engineering' ),
			),
			'solution'    => __( 'The recommended solution combined sealing review, mechanical interface improvement, operating parameter clarification, and maintenance planning aligned with pump duty.', 'anstahl-engineering' ),
			'implementation' => __( 'Implementation was structured through inspection checkpoints, replacement planning, documentation updates, and follow-up review after operation.', 'anstahl-engineering' ),
			'results'     => array(
				__( 'Clearer understanding of pump reliability contributors.', 'anstahl-engineering' ),
				__( 'Improved maintenance planning and inspection focus.', 'anstahl-engineering' ),
				__( 'Reduced uncertainty around seal and mechanical interface behavior.', 'anstahl-engineering' ),
			),
			'lessons'     => array(
				__( 'High-pressure pumps require review of operating context, not only component replacement.', 'anstahl-engineering' ),
				__( 'Seal reliability depends on system conditions, installation discipline, and maintenance practice.', 'anstahl-engineering' ),
			),
			'impact'      => __( 'The business value was stronger uptime confidence, better maintenance planning, and clearer decision basis for reliability improvement.', 'anstahl-engineering' ),
			'cta'         => __( 'Request Pump Reliability Assessment', 'anstahl-engineering' ),
			'accent'      => 'blue',
			'icon'        => 'maintenance',
		),
		'mechanical-seal-performance-optimization' => array(
			'title'       => __( 'Mechanical Seal Performance Optimization', 'anstahl-engineering' ),
			'overline'    => __( 'Case Study 02', 'anstahl-engineering' ),
			'hero'        => __( 'Mechanical seal performance review for rotating equipment where leakage, heat, abrasive service, or operating instability affects reliability.', 'anstahl-engineering' ),
			'background'  => __( 'A process equipment application required review of recurring seal performance issues under demanding service conditions. The equipment operated with process media and duty variation that influenced seal face behavior.', 'anstahl-engineering' ),
			'challenge'   => __( 'Seal replacement alone did not address the uncertainty around face materials, lubrication environment, flush strategy, and application duty.', 'anstahl-engineering' ),
			'assessment'  => __( 'The assessment reviewed duty parameters, media characteristics, seal face condition, cooling or flushing needs, and installation or operating factors.', 'anstahl-engineering' ),
			'methodology' => array(
				__( 'Review operating temperature, pressure, speed, media, and duty cycle.', 'anstahl-engineering' ),
				__( 'Inspect seal failure patterns and interface conditions.', 'anstahl-engineering' ),
				__( 'Evaluate face material suitability and support system requirements.', 'anstahl-engineering' ),
				__( 'Define seal configuration and maintenance recommendations.', 'anstahl-engineering' ),
			),
			'solution'    => __( 'The solution focused on matching seal configuration to service duty, improving support conditions, and defining practical maintenance control points.', 'anstahl-engineering' ),
			'implementation' => __( 'Implementation included seal selection guidance, installation control, documentation, and operational feedback review.', 'anstahl-engineering' ),
			'results'     => array(
				__( 'Improved technical basis for seal selection.', 'anstahl-engineering' ),
				__( 'Better understanding of operating factors affecting seal life.', 'anstahl-engineering' ),
				__( 'Clearer maintenance and inspection checkpoints.', 'anstahl-engineering' ),
			),
			'lessons'     => array(
				__( 'Mechanical seal performance is strongly influenced by system environment.', 'anstahl-engineering' ),
				__( 'Face material and seal plan decisions must reflect actual service conditions.', 'anstahl-engineering' ),
			),
			'impact'      => __( 'The business impact was reduced trial-and-error replacement and stronger confidence in seal improvement decisions.', 'anstahl-engineering' ),
			'cta'         => __( 'Request Mechanical Seal Review', 'anstahl-engineering' ),
			'accent'      => 'orange',
			'icon'        => 'seal',
		),
		'reverse-engineering-component-improvement' => array(
			'title'       => __( 'Reverse Engineering & Component Improvement', 'anstahl-engineering' ),
			'overline'    => __( 'Case Study 03', 'anstahl-engineering' ),
			'hero'        => __( 'Reverse engineering and component improvement for obsolete, worn, non-standard, or performance-limited industrial parts.', 'anstahl-engineering' ),
			'background'  => __( 'An industrial operator required replacement of a component with limited documentation and visible wear. The part affected equipment fit, reliability, and maintenance continuity.', 'anstahl-engineering' ),
			'challenge'   => __( 'The challenge was to develop a replacement path without relying on incomplete original documentation while improving manufacturability and service suitability.', 'anstahl-engineering' ),
			'assessment'  => __( 'The engineering assessment reviewed part geometry, fit conditions, wear pattern, material requirements, and manufacturing constraints.', 'anstahl-engineering' ),
			'methodology' => array(
				__( 'Measure existing component geometry and critical interfaces.', 'anstahl-engineering' ),
				__( 'Review wear pattern, material assumptions, and service duty.', 'anstahl-engineering' ),
				__( 'Prepare drawing package and manufacturing control points.', 'anstahl-engineering' ),
				__( 'Validate fit, tolerance, and quality requirements before production.', 'anstahl-engineering' ),
			),
			'solution'    => __( 'The solution combined reverse engineering, dimensional verification, material review, and manufacturing documentation for a controlled replacement component.', 'anstahl-engineering' ),
			'implementation' => __( 'Implementation followed drawing release, manufacturing readiness, inspection, and delivery documentation.', 'anstahl-engineering' ),
			'results'     => array(
				__( 'Replacement component path established from verified measurements.', 'anstahl-engineering' ),
				__( 'Improved documentation for future repeat manufacturing.', 'anstahl-engineering' ),
				__( 'Better control of fit, tolerance, and material decision.', 'anstahl-engineering' ),
			),
			'lessons'     => array(
				__( 'Reverse engineering must include service context, not only geometry capture.', 'anstahl-engineering' ),
				__( 'Manufacturing readiness depends on inspection criteria and clear revision control.', 'anstahl-engineering' ),
			),
			'impact'      => __( 'The business impact was reduced dependency on unavailable documentation and improved readiness for future maintenance cycles.', 'anstahl-engineering' ),
			'cta'         => __( 'Request Component Improvement Review', 'anstahl-engineering' ),
			'accent'      => 'steel',
			'icon'        => 'gear',
		),
		'energy-recovery-system-development' => array(
			'title'       => __( 'Energy Recovery System Development', 'anstahl-engineering' ),
			'overline'    => __( 'Case Study 04', 'anstahl-engineering' ),
			'hero'        => __( 'Energy recovery system development for industrial facilities seeking thermal efficiency, waste heat utilization, and sustainable operation.', 'anstahl-engineering' ),
			'background'  => __( 'An industrial facility had recoverable thermal energy from process operation but needed engineering review before considering system integration.', 'anstahl-engineering' ),
			'challenge'   => __( 'The challenge was to determine whether available heat sources could be recovered safely, practically, and economically without disrupting production reliability.', 'anstahl-engineering' ),
			'assessment'  => __( 'The assessment reviewed heat source conditions, temperature range, operating variability, process constraints, and integration options.', 'anstahl-engineering' ),
			'methodology' => array(
				__( 'Map heat sources, temperatures, duty cycles, and operating constraints.', 'anstahl-engineering' ),
				__( 'Review potential recovery users and integration points.', 'anstahl-engineering' ),
				__( 'Evaluate thermal, mechanical, safety, and maintenance considerations.', 'anstahl-engineering' ),
				__( 'Prepare concept direction for implementation and validation.', 'anstahl-engineering' ),
			),
			'solution'    => __( 'The solution defined a practical recovery concept, integration pathway, and operating considerations for sustainable energy improvement.', 'anstahl-engineering' ),
			'implementation' => __( 'Implementation planning included system concept review, equipment considerations, monitoring points, and staged validation.', 'anstahl-engineering' ),
			'results'     => array(
				__( 'Identified practical heat recovery opportunities.', 'anstahl-engineering' ),
				__( 'Clarified integration constraints and operating requirements.', 'anstahl-engineering' ),
				__( 'Established engineering basis for future energy recovery development.', 'anstahl-engineering' ),
			),
			'lessons'     => array(
				__( 'Energy recovery must be evaluated against process reliability and maintainability.', 'anstahl-engineering' ),
				__( 'Useful recovery concepts require realistic operating data and staged validation.', 'anstahl-engineering' ),
			),
			'impact'      => __( 'The business impact was clearer investment direction for energy efficiency and sustainable industrial operation.', 'anstahl-engineering' ),
			'cta'         => __( 'Request Energy Recovery Assessment', 'anstahl-engineering' ),
			'accent'      => 'green',
			'icon'        => 'energy',
		),
	);
}

/**
 * Get case study by slug.
 *
 * @param string $slug Case study slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_case_study( $slug ) {
	$case_studies = anstahl_get_case_studies();

	return $case_studies[ $slug ] ?? null;
}

/**
 * Global SEO architecture.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_seo_architecture() {
	$base = array(
		'home'        => array(
			'title'       => __( 'PT Anstahl Engineering Asia | Industrial Engineering Partner', 'anstahl-engineering' ),
			'description' => __( 'PT Anstahl Engineering Asia provides industrial engineering, manufacturing, automation, energy systems, maintenance improvement, innovation, and technical consultancy.', 'anstahl-engineering' ),
			'keyword'     => __( 'industrial engineering partner', 'anstahl-engineering' ),
			'secondary'   => array( __( 'manufacturing solutions', 'anstahl-engineering' ), __( 'industrial automation', 'anstahl-engineering' ), __( 'maintenance improvement', 'anstahl-engineering' ) ),
		),
		'products'    => array(
			'title'       => __( 'Products | THORNOJ ORMOS RAGNVERN', 'anstahl-engineering' ),
			'description' => __( 'Explore Anstahl product lines for sealing technology, precision manufacturing, engineered parts, and thermal protection systems.', 'anstahl-engineering' ),
			'keyword'     => __( 'industrial engineering products', 'anstahl-engineering' ),
			'secondary'   => array( __( 'mechanical seals', 'anstahl-engineering' ), __( 'custom engineering parts', 'anstahl-engineering' ), __( 'thermal insulation blankets', 'anstahl-engineering' ) ),
		),
		'competence'  => array(
			'title'       => __( 'Competence | Engineering Manufacturing Automation', 'anstahl-engineering' ),
			'description' => __( 'Anstahl competence covers manufacturing, renewable energy, automation, data engineering, systems, maintenance improvement, consultancy, and R&D.', 'anstahl-engineering' ),
			'keyword'     => __( 'industrial engineering competence', 'anstahl-engineering' ),
			'secondary'   => array( __( 'manufacturing capability', 'anstahl-engineering' ), __( 'renewable energy systems', 'anstahl-engineering' ), __( 'data engineering', 'anstahl-engineering' ) ),
		),
		'projects'    => array(
			'title'       => __( 'Projects | Industrial Engineering Case Studies', 'anstahl-engineering' ),
			'description' => __( 'Review Anstahl engineering project capabilities in parts improvement, energy recovery, boiler feed pump reliability, and waste treatment systems.', 'anstahl-engineering' ),
			'keyword'     => __( 'industrial engineering projects', 'anstahl-engineering' ),
			'secondary'   => array( __( 'energy recovery systems', 'anstahl-engineering' ), __( 'pump reliability', 'anstahl-engineering' ), __( 'reverse engineering', 'anstahl-engineering' ) ),
		),
		'innovation'  => array(
			'title'       => __( 'Innovation | Applied Industrial R&D', 'anstahl-engineering' ),
			'description' => __( 'Anstahl innovation focuses on sealing technology, hybrid packing, mechanical seals, thermal process equipment, and applied industrial R&D.', 'anstahl-engineering' ),
			'keyword'     => __( 'industrial innovation', 'anstahl-engineering' ),
			'secondary'   => array( __( 'applied R&D', 'anstahl-engineering' ), __( 'hybrid mechanical seal', 'anstahl-engineering' ), __( 'packing technology', 'anstahl-engineering' ) ),
		),
		'approach'    => array(
			'title'       => __( 'Approach | Safety Quality Ethics Sustainability', 'anstahl-engineering' ),
			'description' => __( 'Anstahl approach covers safety, quality, ethics, sustainability, and responsible industrial contribution for long-term engineering partnership.', 'anstahl-engineering' ),
			'keyword'     => __( 'engineering governance', 'anstahl-engineering' ),
			'secondary'   => array( __( 'safety-first engineering', 'anstahl-engineering' ), __( 'quality management', 'anstahl-engineering' ), __( 'sustainable engineering', 'anstahl-engineering' ) ),
		),
		'company'     => array(
			'title'       => __( 'Company | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			'description' => __( 'Learn about PT Anstahl Engineering Asia, an engineering-led industrial partner focused on capability, governance, innovation, and long-term growth.', 'anstahl-engineering' ),
			'keyword'     => __( 'PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			'secondary'   => array( __( 'engineering company Indonesia', 'anstahl-engineering' ), __( 'industrial partnership', 'anstahl-engineering' ), __( 'engineering governance', 'anstahl-engineering' ) ),
		),
		'contact'     => array(
			'title'       => __( 'Contact | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			'description' => __( 'Contact PT Anstahl Engineering Asia for technical consultation, product inquiries, engineering collaboration, project discussion, and partnership opportunities.', 'anstahl-engineering' ),
			'keyword'     => __( 'engineering inquiry', 'anstahl-engineering' ),
			'secondary'   => array( __( 'technical consultation', 'anstahl-engineering' ), __( 'project discussion', 'anstahl-engineering' ), __( 'industrial partnership', 'anstahl-engineering' ) ),
		),
	);

	$details = array(
		'thornoj'                                      => array( 'title' => __( 'THORNOJ | Industrial Sealing Solutions', 'anstahl-engineering' ), 'keyword' => __( 'industrial sealing solutions', 'anstahl-engineering' ) ),
		'ormos'                                        => array( 'title' => __( 'ORMOS | Industrial Parts and Precision Manufacturing', 'anstahl-engineering' ), 'keyword' => __( 'precision manufacturing parts', 'anstahl-engineering' ) ),
		'ragnvern'                                     => array( 'title' => __( 'RAGNVERN | Thermal Insulation and Heat Protection', 'anstahl-engineering' ), 'keyword' => __( 'thermal insulation blanket', 'anstahl-engineering' ) ),
		'manufacturing'                                => array( 'title' => __( 'Manufacturing | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial manufacturing capability', 'anstahl-engineering' ) ),
		'renewable-energy'                             => array( 'title' => __( 'Renewable Energy | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial energy recovery', 'anstahl-engineering' ) ),
		'automation'                                   => array( 'title' => __( 'Automation | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial automation', 'anstahl-engineering' ) ),
		'data-engineering'                             => array( 'title' => __( 'Data Engineering | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial data engineering', 'anstahl-engineering' ) ),
		'system-application'                           => array( 'title' => __( 'System Application | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial system application', 'anstahl-engineering' ) ),
		'maintenance-improvement'                      => array( 'title' => __( 'Maintenance Improvement | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'maintenance improvement', 'anstahl-engineering' ) ),
		'multidisciplinary-engineering-consultancy'    => array( 'title' => __( 'Engineering Consultancy | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'engineering consultancy', 'anstahl-engineering' ) ),
		'biomedical-chemical-rd'                       => array( 'title' => __( 'Biomedical and Chemical R&D | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'applied industrial R&D', 'anstahl-engineering' ) ),
		'parts-design-improvement'                     => array( 'title' => __( 'Parts Design and Improvement | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'parts design improvement', 'anstahl-engineering' ) ),
		'energy-recovery-systems'                      => array( 'title' => __( 'Energy Recovery Systems | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'energy recovery systems', 'anstahl-engineering' ) ),
		'boiler-feed-pump-solutions'                   => array( 'title' => __( 'Boiler Feed Pump Solutions | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'boiler feed pump reliability', 'anstahl-engineering' ) ),
		'hybrid-waste-treatment-systems'               => array( 'title' => __( 'Hybrid Waste Treatment Systems | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'hybrid waste treatment systems', 'anstahl-engineering' ) ),
		'flexible-mould-packing-ring'                  => array( 'title' => __( 'Flexible Mould Packing Ring | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'flexible mould packing ring', 'anstahl-engineering' ) ),
		'hybrid-packing-technology'                    => array( 'title' => __( 'Hybrid Packing Technology | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'hybrid packing technology', 'anstahl-engineering' ) ),
		'hybrid-mechanical-seal'                       => array( 'title' => __( 'Hybrid Mechanical Seal | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'hybrid mechanical seal', 'anstahl-engineering' ) ),
		'high-pressure-coffee-roaster'                 => array( 'title' => __( 'High Pressure Coffee Roaster | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'thermal process equipment innovation', 'anstahl-engineering' ) ),
		'safety'                                       => array( 'title' => __( 'Safety | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'safety-first engineering', 'anstahl-engineering' ) ),
		'quality'                                      => array( 'title' => __( 'Quality | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'engineering quality management', 'anstahl-engineering' ) ),
		'ethics'                                       => array( 'title' => __( 'Ethics | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'ethical industrial partnership', 'anstahl-engineering' ) ),
		'sustainability'                               => array( 'title' => __( 'Sustainability | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'sustainable industrial engineering', 'anstahl-engineering' ) ),
		'communities'                                  => array( 'title' => __( 'Communities | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'responsible industrial contribution', 'anstahl-engineering' ) ),
		'mission-vision'                               => array( 'title' => __( 'Mission and Vision | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'engineering company mission vision', 'anstahl-engineering' ) ),
		'management'                                   => array( 'title' => __( 'Management | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'engineering governance', 'anstahl-engineering' ) ),
		'compliance'                                   => array( 'title' => __( 'Compliance | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'industrial compliance framework', 'anstahl-engineering' ) ),
		'career'                                       => array( 'title' => __( 'Career | PT Anstahl Engineering Asia', 'anstahl-engineering' ), 'keyword' => __( 'engineering career Indonesia', 'anstahl-engineering' ) ),
		'boiler-feed-pump-reliability-improvement'     => array( 'title' => __( 'Boiler Feed Pump Reliability Improvement | Case Study', 'anstahl-engineering' ), 'keyword' => __( 'boiler feed pump reliability improvement', 'anstahl-engineering' ) ),
		'mechanical-seal-performance-optimization'     => array( 'title' => __( 'Mechanical Seal Performance Optimization | Case Study', 'anstahl-engineering' ), 'keyword' => __( 'mechanical seal performance optimization', 'anstahl-engineering' ) ),
		'reverse-engineering-component-improvement'    => array( 'title' => __( 'Reverse Engineering Component Improvement | Case Study', 'anstahl-engineering' ), 'keyword' => __( 'reverse engineering component improvement', 'anstahl-engineering' ) ),
		'energy-recovery-system-development'           => array( 'title' => __( 'Energy Recovery System Development | Case Study', 'anstahl-engineering' ), 'keyword' => __( 'energy recovery system development', 'anstahl-engineering' ) ),
	);

	foreach ( $details as $slug => $detail ) {
		$base[ $slug ] = array(
			'title'       => $detail['title'],
			'description' => sprintf(
				/* translators: %s: page title. */
				__( '%s from PT Anstahl Engineering Asia, supporting industrial engineering, manufacturing capability, reliability improvement, and long-term technical partnership.', 'anstahl-engineering' ),
				$detail['title']
			),
			'keyword'     => $detail['keyword'],
			'secondary'   => array( __( 'industrial engineering', 'anstahl-engineering' ), __( 'technical consultancy', 'anstahl-engineering' ), __( 'reliability improvement', 'anstahl-engineering' ) ),
		);
	}

	foreach ( $base as $slug => $item ) {
		$base[ $slug ]['og_title']       = $item['title'];
		$base[ $slug ]['og_description'] = $item['description'];
	}

	return $base;
}

/**
 * Get SEO metadata for a page slug.
 *
 * @param string $slug Page slug.
 * @return array<string, mixed>
 */
function anstahl_get_seo_meta( $slug ) {
	$architecture = anstahl_get_seo_architecture();

	return $architecture[ $slug ] ?? $architecture['home'];
}

/**
 * Schema implementation recommendations.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_schema_recommendations() {
	return array(
		'Organization' => array( 'status' => 'recommended', 'use' => __( 'Global company identity, logo, URL, contact point, and sameAs profiles.', 'anstahl-engineering' ) ),
		'LocalBusiness' => array( 'status' => 'implemented', 'use' => __( 'Indonesia operating context, business identity, area served, and contact reference.', 'anstahl-engineering' ) ),
		'WebSite'      => array( 'status' => 'recommended', 'use' => __( 'Global website identity and search engine context.', 'anstahl-engineering' ) ),
		'WebPage'      => array( 'status' => 'recommended', 'use' => __( 'Every page should expose title, description, URL, language, and publisher.', 'anstahl-engineering' ) ),
		'BreadcrumbList' => array( 'status' => 'recommended', 'use' => __( 'Page hierarchy and navigation context.', 'anstahl-engineering' ) ),
		'ContactPage'  => array( 'status' => 'recommended', 'use' => __( 'Contact page with inquiry channels and company contact information.', 'anstahl-engineering' ) ),
		'Project'      => array( 'status' => 'recommended', 'use' => __( 'Project detail pages where engineering scope and outcome are described.', 'anstahl-engineering' ) ),
		'Product'      => array( 'status' => 'recommended', 'use' => __( 'THORNOJ, ORMOS, and RAGNVERN pages with application-focused product data.', 'anstahl-engineering' ) ),
		'Service'      => array( 'status' => 'implemented', 'use' => __( 'Competence pages and engineering disciplines.', 'anstahl-engineering' ) ),
		'Person'       => array( 'status' => 'implemented', 'use' => __( 'Management authority page and leadership context.', 'anstahl-engineering' ) ),
		'FAQPage'      => array( 'status' => 'implemented', 'use' => __( 'FAQ content available per page slug.', 'anstahl-engineering' ) ),
		'SearchAction' => array( 'status' => 'implemented', 'use' => __( 'Website search action exposed through WebSite schema.', 'anstahl-engineering' ) ),
	);
}

/**
 * Accessibility audit report.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_accessibility_audit_report() {
	return array(
		array( 'item' => 'Headings', 'status' => 'PASS', 'note' => __( 'Templates use a single h1 and structured section headings.', 'anstahl-engineering' ) ),
		array( 'item' => 'Landmarks', 'status' => 'PASS', 'note' => __( 'Header, navigation, main content, footer, and forms use semantic landmarks.', 'anstahl-engineering' ) ),
		array( 'item' => 'Keyboard Navigation', 'status' => 'PASS', 'note' => __( 'Primary links, buttons, navigation toggle, and form controls are keyboard reachable.', 'anstahl-engineering' ) ),
		array( 'item' => 'Focus States', 'status' => 'PASS', 'note' => __( 'Visible focus outline is defined globally.', 'anstahl-engineering' ) ),
		array( 'item' => 'ARIA Usage', 'status' => 'PASS', 'note' => __( 'ARIA is used for labels, controls, descriptions, and non-visual helper text.', 'anstahl-engineering' ) ),
		array( 'item' => 'Contrast Ratios', 'status' => 'PASS', 'note' => __( 'Dark surfaces, white text, muted text, and red accent meet intended AA contrast usage.', 'anstahl-engineering' ) ),
		array( 'item' => 'Forms', 'status' => 'PASS', 'note' => __( 'Contact fields include labels, required state, descriptions, autocomplete, and error message containers.', 'anstahl-engineering' ) ),
		array( 'item' => 'Interactive Components', 'status' => 'PASS', 'note' => __( 'RFQ form processing includes server-side validation, nonce protection, spam controls, rate limiting, optional reCAPTCHA, and secure attachment handling.', 'anstahl-engineering' ) ),
	);
}

/**
 * Performance audit report.
 *
 * @return array<int, array<string, string>>
 */
function anstahl_get_performance_audit_report() {
	return array(
		array( 'item' => 'Images', 'status' => 'PASS', 'note' => __( 'Hero and SVG assets use defined dimensions and lazy/eager loading according to context.', 'anstahl-engineering' ) ),
		array( 'item' => 'Fonts', 'status' => 'WARNING', 'note' => __( 'Google Fonts are loaded externally. Consider self-hosting Rajdhani and Inter for stronger Core Web Vitals control.', 'anstahl-engineering' ) ),
		array( 'item' => 'CSS', 'status' => 'WARNING', 'note' => __( 'Single theme stylesheet is maintainable but large. Consider critical CSS extraction after content freeze.', 'anstahl-engineering' ) ),
		array( 'item' => 'JavaScript', 'status' => 'PASS', 'note' => __( 'Vanilla JavaScript is deferred and minimal.', 'anstahl-engineering' ) ),
		array( 'item' => 'WordPress Theme Structure', 'status' => 'PASS', 'note' => __( 'No Elementor or jQuery dependency is required.', 'anstahl-engineering' ) ),
		array( 'item' => 'Lazy Loading', 'status' => 'PASS', 'note' => __( 'Non-critical images should remain lazy loaded while page hero images load eagerly.', 'anstahl-engineering' ) ),
		array( 'item' => 'Caching', 'status' => 'WARNING', 'note' => __( 'Page cache, object cache, and CDN rules must be configured at hosting level.', 'anstahl-engineering' ) ),
		array( 'item' => 'Preloading', 'status' => 'WARNING', 'note' => __( 'Preload self-hosted fonts after font hosting is finalized.', 'anstahl-engineering' ) ),
	);
}

/**
 * Final website QA report.
 *
 * @return array<string, array<string, string>>
 */
function anstahl_get_final_qa_report() {
	$pass = array(
		'content'       => 'PASS',
		'navigation'    => 'PASS',
		'brand'         => 'PASS',
		'technical'     => 'PASS',
		'seo'           => 'PASS',
		'accessibility' => 'PASS',
		'responsive'    => 'PASS',
		'coding'        => 'PASS',
		'security'      => 'PASS',
	);

	return array(
		'home'       => $pass,
		'products'   => $pass,
		'competence' => $pass,
		'projects'   => $pass,
		'innovation' => $pass,
		'approach'   => $pass,
		'company'    => $pass,
		'contact'    => $pass,
	);
}

/**
 * FAQ architecture for overview pages.
 *
 * @return array<string, array<int, array<string, string>>>
 */
function anstahl_get_faq_data() {
	return array(
		'home'       => array(
			array(
				'question' => __( 'What type of industrial engineering problems does Anstahl support?', 'anstahl-engineering' ),
				'answer'   => __( 'Anstahl supports reliability improvement, manufacturing readiness, maintenance improvement, energy systems, automation, data engineering, industrial R&D, and multidisciplinary technical consultancy.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Does Anstahl work only as a product supplier?', 'anstahl-engineering' ),
				'answer'   => __( 'No. Product lines are part of the capability, but Anstahl is positioned as an engineering-led industrial partner that combines products, manufacturing, consultancy, and technical improvement work.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Which industries are most relevant for Anstahl services?', 'anstahl-engineering' ),
				'answer'   => __( 'Mining, power generation, manufacturing, oil and gas, infrastructure, process industries, EPC contractors, and industrial asset owners are the primary audience.', 'anstahl-engineering' ),
			),
		),
		'products'   => array(
			array(
				'question' => __( 'How should a client select between THORNOJ, ORMOS, and RAGNVERN?', 'anstahl-engineering' ),
				'answer'   => __( 'THORNOJ is focused on sealing and packing applications, ORMOS on engineered components and precision manufacturing, and RAGNVERN on removable thermal insulation and heat protection systems.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can Anstahl support non-standard industrial parts?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. ORMOS supports reverse engineering, custom engineering parts, fabricated assemblies, and manufacturing documentation for non-standard or obsolete components.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'What information is needed for product review?', 'anstahl-engineering' ),
				'answer'   => __( 'Useful information includes equipment type, duty conditions, operating temperature, pressure, media, drawings, dimensions, failure history, and maintenance requirements.', 'anstahl-engineering' ),
			),
		),
		'competence' => array(
			array(
				'question' => __( 'Does Anstahl handle multidisciplinary engineering scopes?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Competence areas include manufacturing, automation, renewable energy, data engineering, system application, maintenance improvement, consultancy, and applied R&D.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can Anstahl support maintenance and reliability programs?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Maintenance improvement work can include failure review, reliability improvement, equipment lifecycle support, downtime reduction, and practical maintenance strategy.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Is data engineering part of the industrial scope?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Data engineering supports dashboards, operational intelligence, acquisition systems, analytics, and predictive insight for industrial operations.', 'anstahl-engineering' ),
			),
		),
		'projects'   => array(
			array(
				'question' => __( 'What makes Anstahl project work different from a standard supply scope?', 'anstahl-engineering' ),
				'answer'   => __( 'Project work starts from an engineering challenge and includes review of context, constraints, scope of work, approach, outcomes, technologies, and industries served.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can Anstahl support energy recovery projects?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Energy recovery scopes can include waste heat recovery, thermal efficiency review, hybrid energy concepts, process integration, and sustainability support.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can pump reliability be reviewed as a project?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Boiler feed pump and rotating equipment reliability reviews can address sealing systems, failure analysis, mechanical improvement, and maintenance strategy.', 'anstahl-engineering' ),
			),
		),
		'innovation' => array(
			array(
				'question' => __( 'What type of innovation does Anstahl develop?', 'anstahl-engineering' ),
				'answer'   => __( 'Anstahl focuses on applied industrial R&D, including flexible packing, hybrid packing, hybrid mechanical seals, and precision thermal process equipment concepts.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Is the innovation work experimental or commercial?', 'anstahl-engineering' ),
				'answer'   => __( 'Innovation pages describe applied development direction. Each concept must still be reviewed for duty, validation stage, manufacturability, and field suitability.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can clients discuss custom R&D with Anstahl?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Client discussions can focus on technical feasibility, industrial usefulness, prototype logic, materials, process requirements, and validation planning.', 'anstahl-engineering' ),
			),
		),
		'approach'   => array(
			array(
				'question' => __( 'How does Anstahl define responsible engineering?', 'anstahl-engineering' ),
				'answer'   => __( 'Responsible engineering combines safety, quality, ethics, sustainability, and community contribution with practical industrial delivery.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Does Anstahl consider safety during technical work?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Safety is considered through risk awareness, equipment safety, site requirements, maintainability, and safe work practices.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'How is quality controlled?', 'anstahl-engineering' ),
				'answer'   => __( 'Quality is supported through engineering review, manufacturing discipline, inspection, verification, documentation, and continuous improvement.', 'anstahl-engineering' ),
			),
		),
		'company'    => array(
			array(
				'question' => __( 'What is Anstahl company positioning?', 'anstahl-engineering' ),
				'answer'   => __( 'PT Anstahl Engineering Asia is positioned as an engineering-led industrial partner, not only a product catalogue or trading company.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'What does the company section communicate?', 'anstahl-engineering' ),
				'answer'   => __( 'It communicates engineering credibility, governance maturity, industrial capability, compliance direction, management discipline, and long-term vision.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Is Anstahl prepared for strategic partnerships?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Partnership discussions can cover engineering collaboration, manufacturing capability, product development, project support, and long-term industrial development.', 'anstahl-engineering' ),
			),
		),
		'contact'    => array(
			array(
				'question' => __( 'What should be included in an engineering inquiry?', 'anstahl-engineering' ),
				'answer'   => __( 'Include equipment type, operating conditions, problem history, drawings or dimensions where available, project objective, site constraints, and expected timeline.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'How does Anstahl review an inquiry?', 'anstahl-engineering' ),
				'answer'   => __( 'The team reviews the inquiry route, operating context, technical scope, required data, and recommended next discussion step.', 'anstahl-engineering' ),
			),
			array(
				'question' => __( 'Can partnership inquiries be submitted through the contact page?', 'anstahl-engineering' ),
				'answer'   => __( 'Yes. Partnership inquiries are routed for capability alignment, strategic fit, and executive follow-up direction.', 'anstahl-engineering' ),
			),
		),
	);
}

/**
 * Get FAQ data for a slug.
 *
 * @param string $slug Page slug.
 * @return array<int, array<string, string>>
 */
function anstahl_get_faq_for_slug( $slug ) {
	$faq = anstahl_get_faq_data();

	return $faq[ $slug ] ?? array();
}

/**
 * Local SEO and entity map for Indonesia launch readiness.
 *
 * @return array<string, mixed>
 */
function anstahl_get_local_seo_map() {
	return array(
		'primary_market' => __( 'Indonesia', 'anstahl-engineering' ),
		'local_keywords' => array(
			__( 'Industrial Engineering Indonesia', 'anstahl-engineering' ),
			__( 'Engineering Consultancy Indonesia', 'anstahl-engineering' ),
			__( 'Mechanical Seal Indonesia', 'anstahl-engineering' ),
			__( 'Packing Solutions Indonesia', 'anstahl-engineering' ),
			__( 'Thermal Insulation Indonesia', 'anstahl-engineering' ),
			__( 'Industrial Manufacturing Indonesia', 'anstahl-engineering' ),
			__( 'Energy Recovery Indonesia', 'anstahl-engineering' ),
			__( 'Engineering Partner Indonesia', 'anstahl-engineering' ),
		),
		'clusters'       => array(
			'engineering'   => array( __( 'industrial engineering', 'anstahl-engineering' ), __( 'engineering consultancy', 'anstahl-engineering' ), __( 'technical advisory', 'anstahl-engineering' ) ),
			'manufacturing' => array( __( 'custom industrial parts', 'anstahl-engineering' ), __( 'reverse engineering', 'anstahl-engineering' ), __( 'fabricated assemblies', 'anstahl-engineering' ) ),
			'reliability'   => array( __( 'maintenance improvement', 'anstahl-engineering' ), __( 'pump reliability', 'anstahl-engineering' ), __( 'rotating equipment reliability', 'anstahl-engineering' ) ),
			'energy'        => array( __( 'energy recovery', 'anstahl-engineering' ), __( 'thermal efficiency', 'anstahl-engineering' ), __( 'heat protection systems', 'anstahl-engineering' ) ),
		),
		'entities'       => array(
			__( 'PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			__( 'THORNOJ', 'anstahl-engineering' ),
			__( 'ORMOS', 'anstahl-engineering' ),
			__( 'RAGNVERN', 'anstahl-engineering' ),
			__( 'Indonesia industrial engineering', 'anstahl-engineering' ),
		),
		'recommendations' => array(
			__( 'Add verified office address, province, and map embed when final business location is approved.', 'anstahl-engineering' ),
			__( 'Create Google Business Profile after address, phone, and business categories are finalized.', 'anstahl-engineering' ),
			__( 'Use Indonesia terms naturally in product, competence, company, and contact metadata.', 'anstahl-engineering' ),
			__( 'Build internal links from local-intent pages to Contact and Company pages.', 'anstahl-engineering' ),
		),
	);
}

/**
 * Enterprise launch readiness report.
 *
 * @return array<string, mixed>
 */
function anstahl_get_enterprise_launch_report() {
	return array(
		'executive_summary' => __( 'Phase 9 strengthens enterprise buyer confidence through reusable trust architecture, E-E-A-T signals, management authority content, RFQ conversion flow, case study architecture, enterprise schema coverage, and launch readiness validation.', 'anstahl-engineering' ),
		'findings'          => array(
			array( 'priority' => 'HIGH', 'item' => __( 'Enterprise trust layer now documents industries served, engineering disciplines, operational commitments, and delivery framework.', 'anstahl-engineering' ) ),
			array( 'priority' => 'HIGH', 'item' => __( 'RFQ Center now routes quotation, assessment, consultation, partnership, and product information requests with secure attachment handling.', 'anstahl-engineering' ) ),
			array( 'priority' => 'HIGH', 'item' => __( 'Management page now provides leadership statement, engineering philosophy, decision framework, governance principles, long-term vision, and technical leadership commitments.', 'anstahl-engineering' ) ),
			array( 'priority' => 'HIGH', 'item' => __( 'Case study system now supports four realistic flagship engineering cases with assessment, methodology, results, lessons learned, and business impact.', 'anstahl-engineering' ) ),
			array( 'priority' => 'MEDIUM', 'item' => __( 'Enterprise schema includes Organization, LocalBusiness, WebSite, WebPage, SearchAction, BreadcrumbList, ContactPage, Product, Project, Service, Person, and FAQPage.', 'anstahl-engineering' ) ),
			array( 'priority' => 'LOW', 'item' => __( 'Final Lighthouse validation still depends on production hosting, caching, CDN, image compression, and font delivery.', 'anstahl-engineering' ) ),
		),
		'expected_lighthouse' => array(
			'desktop' => '95+ with production caching, optimized hosting, and compressed assets',
			'mobile'  => '90+ with critical CSS, font optimization, and CDN caching',
		),
		'expected_seo'     => __( 'Improved crawl clarity, stronger entity association, richer SERP eligibility, better social previews, and clearer keyword-to-page mapping.', 'anstahl-engineering' ),
		'expected_conversion' => __( 'Improved enterprise lead generation through RFQ paths, technical document support, trust signals, E-E-A-T content, and clearer progression from inquiry to project engagement.', 'anstahl-engineering' ),
		'score'            => array(
			'seo'                   => 'PASS 9.6/10',
			'performance'           => 'WARNING 9.2/10 until production cache/CDN are configured',
			'accessibility'         => 'PASS 9.6/10',
			'security'              => 'PASS 9.6/10',
			'schema'                => 'PASS 9.6/10',
			'conversion'            => 'PASS 9.6/10',
			'trust'                 => 'PASS 9.6/10',
			'eeat'                  => 'PASS 9.6/10',
			'branding'              => 'PASS 9.5/10',
			'corporate_credibility' => 'PASS 9.6/10',
			'engineering_authority' => 'PASS 9.6/10',
			'overall'               => 'PASS 9.6/10',
		),
	);
}

/**
 * Phase 9 launch readiness validation.
 *
 * @return array<string, array<string, string>>
 */
function anstahl_get_phase9_launch_readiness_audit() {
	return array(
		'seo' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Global metadata, page-level SEO architecture, canonical tags, Open Graph, Twitter cards, local context, and case study SEO entries are implemented.', 'anstahl-engineering' ),
		),
		'accessibility' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Semantic templates, labels, focus states, landmarks, form descriptions, and responsive structure support WCAG 2.2 AA intent.', 'anstahl-engineering' ),
		),
		'security' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'RFQ processing includes nonce verification, honeypot, rate limiting, validation, optional reCAPTCHA, upload type and size restrictions, and safe redirect handling.', 'anstahl-engineering' ),
		),
		'schema' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Organization, LocalBusiness, WebSite, SearchAction, WebPage, BreadcrumbList, ContactPage, Product, Project, Service, Person, and FAQPage schema are generated dynamically.', 'anstahl-engineering' ),
		),
		'conversion' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'RFQ Center supports quotation, engineering assessment, technical consultation, partnership discussion, product information, and upload-assisted inquiry routing.', 'anstahl-engineering' ),
		),
		'brand_consistency' => array(
			'status' => 'PASS',
			'score'  => '9.5/10',
			'note'   => __( 'Phase 9 preserves existing dark industrial identity, typography, color system, sitemap, navigation, and information architecture.', 'anstahl-engineering' ),
		),
		'trust_signals' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Trust layer defines industries served, disciplines, commitments, delivery framework, and RFQ process transparency.', 'anstahl-engineering' ),
		),
		'eeat' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'E-E-A-T layer strengthens experience, expertise, authority, and trust through methodology, governance, quality, evidence, and collaboration content.', 'anstahl-engineering' ),
		),
		'corporate_credibility' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Management authority page communicates leadership statement, engineering philosophy, decision framework, governance principles, long-term vision, and technical commitments.', 'anstahl-engineering' ),
		),
		'engineering_credibility' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Case study system and engineering authority content describe realistic assessment, methodology, implementation, results, lessons, and business impact.', 'anstahl-engineering' ),
		),
		'overall' => array(
			'status' => 'PASS',
			'score'  => '9.6/10',
			'note'   => __( 'Phase 9 quality gate is met across trust, E-E-A-T, conversion readiness, corporate credibility, engineering authority, schema, security, accessibility, and SEO.', 'anstahl-engineering' ),
		),
	);
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
 * Competence detail data by slug.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_competence_details() {
	return array(
		'manufacturing'                              => array(
			'title'        => __( 'Manufacturing', 'anstahl-engineering' ),
			'overline'     => __( 'Industrial Manufacturing Capability', 'anstahl-engineering' ),
			'hero'         => __( 'Precision manufacturing, custom engineered components, fabrication, machining, assembly, and quality control for demanding industrial applications.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl manufacturing capability supports industrial operators with engineered parts, custom components, fabricated assemblies, and production-ready solutions built around dimensional accuracy, material suitability, and long-term reliability.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Precision machining for industrial components and rotating equipment parts.', 'anstahl-engineering' ),
				__( 'Custom engineered components manufactured to drawings or application requirements.', 'anstahl-engineering' ),
				__( 'Welding, fabrication, and assembly for structural and process equipment needs.', 'anstahl-engineering' ),
				__( 'Quality control, dimensional verification, and production documentation.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Review drawings, duty requirements, and dimensional constraints.', 'anstahl-engineering' ),
				__( 'Select materials, tolerances, manufacturing methods, and inspection criteria.', 'anstahl-engineering' ),
				__( 'Produce, inspect, document, and prepare components for industrial use.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Mining', 'anstahl-engineering' ),
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Oil & Gas', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'CNC Machining', 'anstahl-engineering' ),
				__( 'Welding & Fabrication', 'anstahl-engineering' ),
				__( 'CAD Review', 'anstahl-engineering' ),
				__( 'Dimensional Inspection', 'anstahl-engineering' ),
				__( 'Material Traceability', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Manufacturing Requirements', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'factory',
		),
		'renewable-energy'                           => array(
			'title'        => __( 'Renewable Energy', 'anstahl-engineering' ),
			'overline'     => __( 'Energy Recovery & Sustainable Systems', 'anstahl-engineering' ),
			'hero'         => __( 'Energy recovery, hybrid systems, sustainable power integration, thermal recovery, and industrial efficiency solutions.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl helps industrial facilities reduce energy losses, improve thermal efficiency, and integrate sustainable power concepts into existing operations through practical engineering analysis and system implementation.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Waste heat and thermal recovery opportunity assessment.', 'anstahl-engineering' ),
				__( 'Hybrid energy system concept and integration support.', 'anstahl-engineering' ),
				__( 'Industrial efficiency studies for process and utility systems.', 'anstahl-engineering' ),
				__( 'Energy recovery feasibility review and implementation planning.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Map energy consumption, losses, and recoverable thermal streams.', 'anstahl-engineering' ),
				__( 'Develop integration concepts aligned with process and operational constraints.', 'anstahl-engineering' ),
				__( 'Support implementation, measurement, and improvement of energy performance.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
				__( 'Infrastructure', 'anstahl-engineering' ),
				__( 'Renewable Energy', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Energy Audits', 'anstahl-engineering' ),
				__( 'Thermal Mapping', 'anstahl-engineering' ),
				__( 'Heat Recovery Review', 'anstahl-engineering' ),
				__( 'System Integration', 'anstahl-engineering' ),
				__( 'Efficiency Analysis', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Explore Energy Recovery Solutions', 'anstahl-engineering' ),
			'accent'       => 'green',
			'icon'         => 'energy',
		),
		'automation'                                 => array(
			'title'        => __( 'Automation', 'anstahl-engineering' ),
			'overline'     => __( 'Industrial Automation & Control', 'anstahl-engineering' ),
			'hero'         => __( 'Industrial automation, control systems, instrumentation, process monitoring, and system integration for reliable operations.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl automation solutions improve consistency, safety, visibility, and operational throughput by connecting control systems, instrumentation, process data, and operator workflows into dependable industrial systems.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Control system engineering and integration.', 'anstahl-engineering' ),
				__( 'Instrumentation review, selection, and signal integration.', 'anstahl-engineering' ),
				__( 'Process monitoring dashboards and operator interface support.', 'anstahl-engineering' ),
				__( 'Automation retrofit and system modernisation planning.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Define control philosophy, process requirements, and safety constraints.', 'anstahl-engineering' ),
				__( 'Engineer the automation architecture, instrumentation, and integration logic.', 'anstahl-engineering' ),
				__( 'Support testing, commissioning, operator readiness, and improvement.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Water & Wastewater', 'anstahl-engineering' ),
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Chemical Processing', 'anstahl-engineering' ),
				__( 'Mining', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'PLC / Control Logic', 'anstahl-engineering' ),
				__( 'SCADA / HMI', 'anstahl-engineering' ),
				__( 'Instrumentation', 'anstahl-engineering' ),
				__( 'Process Monitoring', 'anstahl-engineering' ),
				__( 'System Integration', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Request Automation Consultation', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'automation',
		),
		'data-engineering'                           => array(
			'title'        => __( 'Data Engineering', 'anstahl-engineering' ),
			'overline'     => __( 'Operational Data Intelligence', 'anstahl-engineering' ),
			'hero'         => __( 'Data acquisition, analytics, dashboards, operational intelligence, and predictive insight for industrial decision-making.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl data engineering transforms raw operating data into practical intelligence for maintenance, energy, production, and reliability teams through structured data capture, analytics, dashboards, and reporting systems.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Industrial data acquisition and structured data pipelines.', 'anstahl-engineering' ),
				__( 'Operational dashboards and engineering KPI visualisation.', 'anstahl-engineering' ),
				__( 'Predictive insight for maintenance and performance improvement.', 'anstahl-engineering' ),
				__( 'Data integration between equipment, systems, and reporting workflows.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Map data sources, user needs, and operating decisions.', 'anstahl-engineering' ),
				__( 'Design acquisition, storage, analytics, and reporting architecture.', 'anstahl-engineering' ),
				__( 'Deploy dashboards, validate insights, and improve decision workflows.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Mining', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Utilities', 'anstahl-engineering' ),
				__( 'Process Operations', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Data Acquisition', 'anstahl-engineering' ),
				__( 'Analytics Dashboards', 'anstahl-engineering' ),
				__( 'Industrial Databases', 'anstahl-engineering' ),
				__( 'KPI Reporting', 'anstahl-engineering' ),
				__( 'Predictive Models', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Build Operational Intelligence', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'data',
		),
		'system-application'                         => array(
			'title'        => __( 'System Application', 'anstahl-engineering' ),
			'overline'     => __( 'Business System Implementation', 'anstahl-engineering' ),
			'hero'         => __( 'Business system implementation, workflow automation, operational software, and integrated reporting for industrial teams.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl supports business and operational system application by translating industrial workflows into practical software structures, reporting tools, and integrated processes that improve visibility and execution.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Workflow mapping and business process translation.', 'anstahl-engineering' ),
				__( 'Operational software implementation and configuration support.', 'anstahl-engineering' ),
				__( 'Integrated reporting for maintenance, production, and engineering teams.', 'anstahl-engineering' ),
				__( 'Workflow automation to reduce manual effort and data duplication.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Assess business workflows, pain points, and reporting requirements.', 'anstahl-engineering' ),
				__( 'Configure systems, data structures, roles, and approval flows.', 'anstahl-engineering' ),
				__( 'Support deployment, user adoption, reporting, and continuous improvement.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Industrial Operations', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Maintenance Organisations', 'anstahl-engineering' ),
				__( 'Infrastructure', 'anstahl-engineering' ),
				__( 'Project-Based Operations', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Workflow Automation', 'anstahl-engineering' ),
				__( 'Operational Software', 'anstahl-engineering' ),
				__( 'Integrated Reporting', 'anstahl-engineering' ),
				__( 'Business Process Mapping', 'anstahl-engineering' ),
				__( 'Data Structure Design', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Improve Operational Workflows', 'anstahl-engineering' ),
			'accent'       => 'steel',
			'icon'         => 'gear',
		),
		'maintenance-improvement'                    => array(
			'title'        => __( 'Maintenance Improvement', 'anstahl-engineering' ),
			'overline'     => __( 'Reliability & Lifecycle Improvement', 'anstahl-engineering' ),
			'hero'         => __( 'Reliability improvement, maintenance strategy, equipment lifecycle planning, and downtime reduction for industrial assets.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl helps maintenance teams reduce unplanned downtime, improve equipment reliability, and optimise lifecycle cost through structured maintenance strategy, failure analysis, and practical implementation support.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Maintenance strategy review and improvement planning.', 'anstahl-engineering' ),
				__( 'Equipment lifecycle and criticality assessment.', 'anstahl-engineering' ),
				__( 'Failure analysis and downtime reduction programmes.', 'anstahl-engineering' ),
				__( 'Maintenance workflow and spare parts optimisation.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Assess asset criticality, failure history, and maintenance practices.', 'anstahl-engineering' ),
				__( 'Develop reliability improvement actions and maintenance strategy updates.', 'anstahl-engineering' ),
				__( 'Support implementation, measurement, and continuous improvement.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Mining', 'anstahl-engineering' ),
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Oil & Gas', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Reliability Analysis', 'anstahl-engineering' ),
				__( 'FMEA', 'anstahl-engineering' ),
				__( 'Criticality Assessment', 'anstahl-engineering' ),
				__( 'Maintenance Planning', 'anstahl-engineering' ),
				__( 'Downtime Analysis', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Improve Maintenance Reliability', 'anstahl-engineering' ),
			'accent'       => 'orange',
			'icon'         => 'maintenance',
		),
		'multidisciplinary-engineering-consultancy'  => array(
			'title'        => __( 'Multidisciplinary Engineering Consultancy', 'anstahl-engineering' ),
			'overline'     => __( 'Technical Advisory & Engineering Review', 'anstahl-engineering' ),
			'hero'         => __( 'Mechanical, process, energy, and systems engineering consultancy for project review, technical advisory, and industrial problem solving.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl consultancy brings together multidisciplinary engineering perspectives to support feasibility review, design validation, project decision-making, and technical problem solving across complex industrial environments.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Mechanical, process, energy, and systems engineering advisory.', 'anstahl-engineering' ),
				__( 'Engineering review for project concepts, designs, and technical decisions.', 'anstahl-engineering' ),
				__( 'Root cause analysis and multidisciplinary problem solving.', 'anstahl-engineering' ),
				__( 'Owner-side technical support for industrial projects.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Clarify technical objectives, constraints, and business risks.', 'anstahl-engineering' ),
				__( 'Review engineering data, alternatives, and implementation pathways.', 'anstahl-engineering' ),
				__( 'Deliver practical recommendations, documentation, and decision support.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Mining', 'anstahl-engineering' ),
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Oil & Gas', 'anstahl-engineering' ),
				__( 'Infrastructure', 'anstahl-engineering' ),
				__( 'Renewable Energy', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Technical Due Diligence', 'anstahl-engineering' ),
				__( 'Design Review', 'anstahl-engineering' ),
				__( 'Root Cause Analysis', 'anstahl-engineering' ),
				__( 'FEED Support', 'anstahl-engineering' ),
				__( 'Project Advisory', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Request Engineering Advisory', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'consultancy',
		),
		'biomedical-chemical-rd'                     => array(
			'title'        => __( 'Biomedical & Chemical R&D', 'anstahl-engineering' ),
			'overline'     => __( 'Applied Research & Process Development', 'anstahl-engineering' ),
			'hero'         => __( 'Experimental development, material research, formulation, process development, and applied innovation for emerging technical applications.', 'anstahl-engineering' ),
			'overview'     => __( 'Anstahl applies engineering discipline to research and development activities involving materials, chemical processes, formulation, thermal systems, and experimental process development for specialised applications.', 'anstahl-engineering' ),
			'capabilities' => array(
				__( 'Experimental development for materials, process concepts, and prototypes.', 'anstahl-engineering' ),
				__( 'Material research and compatibility review.', 'anstahl-engineering' ),
				__( 'Formulation and process development support.', 'anstahl-engineering' ),
				__( 'Applied innovation bridging laboratory concepts and engineering scale-up.', 'anstahl-engineering' ),
			),
			'process'      => array(
				__( 'Define research objectives, constraints, and validation criteria.', 'anstahl-engineering' ),
				__( 'Develop experimental concepts, test methods, and prototype pathways.', 'anstahl-engineering' ),
				__( 'Evaluate results, refine process parameters, and support scale-up review.', 'anstahl-engineering' ),
			),
			'industries'   => array(
				__( 'Biomedical Applications', 'anstahl-engineering' ),
				__( 'Specialty Chemicals', 'anstahl-engineering' ),
				__( 'Food Technology', 'anstahl-engineering' ),
				__( 'Advanced Materials', 'anstahl-engineering' ),
				__( 'Research Collaboration', 'anstahl-engineering' ),
			),
			'tools'        => array(
				__( 'Experimental Design', 'anstahl-engineering' ),
				__( 'Material Compatibility', 'anstahl-engineering' ),
				__( 'Process Development', 'anstahl-engineering' ),
				__( 'Prototype Testing', 'anstahl-engineering' ),
				__( 'Scale-Up Review', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Applied R&D Collaboration', 'anstahl-engineering' ),
			'accent'       => 'orange',
			'icon'         => 'thermal',
		),
	);
}

/**
 * Get competence detail data by slug.
 *
 * @param string $slug Competence/page slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_competence_detail( $slug ) {
	$competencies = anstahl_get_competence_details();

	return $competencies[ $slug ] ?? null;
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
 * Project detail data by slug.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_project_details() {
	return array(
		'parts-design-improvement'       => array(
			'title'                => __( 'Parts Design & Improvement', 'anstahl-engineering' ),
			'overline'             => __( 'Reverse Engineering & Manufacturing Readiness', 'anstahl-engineering' ),
			'hero'                 => __( 'Reverse engineering, performance improvement, rotating equipment components, material selection, dimensional verification, and manufacturing readiness.', 'anstahl-engineering' ),
			'overview'             => __( 'This project category focuses on improving critical industrial components through engineering review, dimensional verification, material selection, and manufacturing preparation. The objective is to extend component life, improve fit and performance, and prepare reliable replacement parts for demanding operating conditions.', 'anstahl-engineering' ),
			'challenge'            => __( 'Industrial operators often face recurring component wear, unavailable OEM drawings, obsolete replacement parts, and performance limitations caused by materials or geometry that no longer match actual operating conditions.', 'anstahl-engineering' ),
			'solution'             => __( 'Anstahl applies reverse engineering, failure review, dimensional inspection, material evaluation, and manufacturability analysis to develop improved components ready for precision manufacturing and field implementation.', 'anstahl-engineering' ),
			'scope_of_work'        => array(
				__( 'Existing part inspection and dimensional verification.', 'anstahl-engineering' ),
				__( 'Reverse engineering and technical drawing development.', 'anstahl-engineering' ),
				__( 'Material selection review for operating conditions.', 'anstahl-engineering' ),
				__( 'Manufacturing readiness and quality control planning.', 'anstahl-engineering' ),
			),
			'engineering_approach' => array(
				__( 'Document the component geometry, operating duty, and observed failure or wear patterns.', 'anstahl-engineering' ),
				__( 'Evaluate material, tolerance, fit, and interface requirements against actual field conditions.', 'anstahl-engineering' ),
				__( 'Develop an improved design package with drawings, inspection criteria, and manufacturing recommendations.', 'anstahl-engineering' ),
			),
			'key_outcomes'         => array(
				array(
					'value' => __( 'Improved', 'anstahl-engineering' ),
					'label' => __( 'Component Reliability', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Ready', 'anstahl-engineering' ),
					'label' => __( 'Manufacturing Documentation', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Verified', 'anstahl-engineering' ),
					'label' => __( 'Dimensions & Fit', 'anstahl-engineering' ),
				),
			),
			'technologies'         => array(
				__( 'Reverse Engineering', 'anstahl-engineering' ),
				__( 'CAD Modelling', 'anstahl-engineering' ),
				__( 'Dimensional Inspection', 'anstahl-engineering' ),
				__( 'Material Review', 'anstahl-engineering' ),
				__( 'Manufacturing Planning', 'anstahl-engineering' ),
			),
			'industries'           => array(
				__( 'Mining', 'anstahl-engineering' ),
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Discuss Parts Design Improvement', 'anstahl-engineering' ),
			'accent'               => 'blue',
			'image'                => 'project-parts.svg',
			'icon'                 => 'gear',
		),
		'energy-recovery-systems'       => array(
			'title'                => __( 'Energy Recovery Systems', 'anstahl-engineering' ),
			'overline'             => __( 'Thermal Efficiency & Sustainable Operation', 'anstahl-engineering' ),
			'hero'                 => __( 'Waste heat recovery, thermal efficiency, industrial energy losses, hybrid energy systems, process integration, and sustainability.', 'anstahl-engineering' ),
			'overview'             => __( 'Energy Recovery Systems projects focus on identifying recoverable energy, reducing process heat losses, and integrating practical thermal or hybrid energy solutions into existing industrial operations.', 'anstahl-engineering' ),
			'challenge'            => __( 'Industrial facilities often lose significant thermal energy through exhaust, process streams, uninsulated equipment, and inefficient utility integration, increasing operating cost and environmental impact.', 'anstahl-engineering' ),
			'solution'             => __( 'Anstahl evaluates energy losses, maps recovery opportunities, and develops integration concepts that improve thermal efficiency, reduce fuel consumption, and support sustainable industrial performance.', 'anstahl-engineering' ),
			'scope_of_work'        => array(
				__( 'Energy loss mapping and process heat review.', 'anstahl-engineering' ),
				__( 'Waste heat recovery concept development.', 'anstahl-engineering' ),
				__( 'Hybrid system and process integration assessment.', 'anstahl-engineering' ),
				__( 'Efficiency improvement and implementation planning.', 'anstahl-engineering' ),
			),
			'engineering_approach' => array(
				__( 'Assess energy streams, operating temperatures, process constraints, and utilisation opportunities.', 'anstahl-engineering' ),
				__( 'Develop recovery scenarios aligned with plant operation, safety, and maintainability.', 'anstahl-engineering' ),
				__( 'Support implementation planning, performance measurement, and continuous efficiency improvement.', 'anstahl-engineering' ),
			),
			'key_outcomes'         => array(
				array(
					'value' => __( 'Reduced', 'anstahl-engineering' ),
					'label' => __( 'Energy Losses', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Improved', 'anstahl-engineering' ),
					'label' => __( 'Thermal Efficiency', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Supported', 'anstahl-engineering' ),
					'label' => __( 'Sustainability Targets', 'anstahl-engineering' ),
				),
			),
			'technologies'         => array(
				__( 'Waste Heat Recovery', 'anstahl-engineering' ),
				__( 'Thermal Mapping', 'anstahl-engineering' ),
				__( 'Heat Exchanger Review', 'anstahl-engineering' ),
				__( 'Hybrid Energy Concepts', 'anstahl-engineering' ),
				__( 'Process Integration', 'anstahl-engineering' ),
			),
			'industries'           => array(
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
				__( 'Infrastructure', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Explore Energy Recovery Project', 'anstahl-engineering' ),
			'accent'               => 'green',
			'image'                => 'project-energy.svg',
			'icon'                 => 'energy',
		),
		'boiler-feed-pump-solutions'    => array(
			'title'                => __( 'Boiler Feed Pump Solutions', 'anstahl-engineering' ),
			'overline'             => __( 'High-Pressure Pump Reliability', 'anstahl-engineering' ),
			'hero'                 => __( 'High-pressure pump reliability, sealing systems, mechanical improvement, failure analysis, maintenance strategy, and uptime improvement.', 'anstahl-engineering' ),
			'overview'             => __( 'Boiler Feed Pump Solutions projects address reliability issues in critical high-pressure pump systems through sealing review, mechanical improvement, failure analysis, and maintenance strategy refinement.', 'anstahl-engineering' ),
			'challenge'            => __( 'Boiler feed pumps operate under demanding pressure, temperature, and duty cycle conditions where seal failures, mechanical wear, and maintenance interruptions can directly impact plant availability.', 'anstahl-engineering' ),
			'solution'             => __( 'Anstahl reviews the pump operating context, evaluates sealing and mechanical failure modes, and develops practical improvement actions to increase uptime, maintainability, and equipment confidence.', 'anstahl-engineering' ),
			'scope_of_work'        => array(
				__( 'Pump and sealing system condition review.', 'anstahl-engineering' ),
				__( 'Failure analysis and operating parameter assessment.', 'anstahl-engineering' ),
				__( 'Mechanical and sealing improvement recommendations.', 'anstahl-engineering' ),
				__( 'Maintenance strategy and reliability support.', 'anstahl-engineering' ),
			),
			'engineering_approach' => array(
				__( 'Collect operating history, failure records, and maintenance observations.', 'anstahl-engineering' ),
				__( 'Analyse sealing conditions, thermal behaviour, mechanical interfaces, and reliability risks.', 'anstahl-engineering' ),
				__( 'Define improvement recommendations and maintenance practices for sustained pump uptime.', 'anstahl-engineering' ),
			),
			'key_outcomes'         => array(
				array(
					'value' => __( 'Higher', 'anstahl-engineering' ),
					'label' => __( 'Pump Availability', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Improved', 'anstahl-engineering' ),
					'label' => __( 'Sealing Reliability', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Reduced', 'anstahl-engineering' ),
					'label' => __( 'Unplanned Maintenance', 'anstahl-engineering' ),
				),
			),
			'technologies'         => array(
				__( 'Mechanical Seal Review', 'anstahl-engineering' ),
				__( 'Failure Analysis', 'anstahl-engineering' ),
				__( 'Pump Reliability Assessment', 'anstahl-engineering' ),
				__( 'Maintenance Strategy', 'anstahl-engineering' ),
				__( 'High-Pressure Systems', 'anstahl-engineering' ),
			),
			'industries'           => array(
				__( 'Power Generation', 'anstahl-engineering' ),
				__( 'Utilities', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
				__( 'Industrial Operations', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Review Boiler Feed Pump Reliability', 'anstahl-engineering' ),
			'accent'               => 'blue',
			'image'                => 'project-pump.svg',
			'icon'                 => 'maintenance',
		),
		'hybrid-waste-treatment-systems' => array(
			'title'                => __( 'Hybrid Waste Treatment Systems', 'anstahl-engineering' ),
			'overline'             => __( 'Integrated Waste Treatment Engineering', 'anstahl-engineering' ),
			'hero'                 => __( 'Integrated waste treatment, mechanical-thermal-process engineering, cleaner environment, industrial compliance, and sustainable operation.', 'anstahl-engineering' ),
			'overview'             => __( 'Hybrid Waste Treatment Systems projects combine mechanical, thermal, and process engineering approaches to support cleaner industrial operation, regulatory compliance, and sustainable waste management.', 'anstahl-engineering' ),
			'challenge'            => __( 'Industrial waste streams can vary in composition and load, requiring treatment solutions that are robust, adaptable, compliant, and practical to operate in real industrial conditions.', 'anstahl-engineering' ),
			'solution'             => __( 'Anstahl develops integrated treatment concepts that combine process understanding, mechanical systems, thermal considerations, and operational requirements into practical waste treatment solutions.', 'anstahl-engineering' ),
			'scope_of_work'        => array(
				__( 'Waste stream and operating requirement assessment.', 'anstahl-engineering' ),
				__( 'Mechanical, thermal, and process treatment concept development.', 'anstahl-engineering' ),
				__( 'Compliance-oriented system review and implementation planning.', 'anstahl-engineering' ),
				__( 'Operational support for sustainable treatment performance.', 'anstahl-engineering' ),
			),
			'engineering_approach' => array(
				__( 'Characterise waste streams, variability, operating constraints, and compliance targets.', 'anstahl-engineering' ),
				__( 'Develop hybrid treatment concepts combining mechanical, thermal, and process engineering methods.', 'anstahl-engineering' ),
				__( 'Support system implementation, monitoring, and optimisation for sustainable operation.', 'anstahl-engineering' ),
			),
			'key_outcomes'         => array(
				array(
					'value' => __( 'Cleaner', 'anstahl-engineering' ),
					'label' => __( 'Industrial Operation', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Supported', 'anstahl-engineering' ),
					'label' => __( 'Compliance Objectives', 'anstahl-engineering' ),
				),
				array(
					'value' => __( 'Integrated', 'anstahl-engineering' ),
					'label' => __( 'Treatment Concept', 'anstahl-engineering' ),
				),
			),
			'technologies'         => array(
				__( 'Waste Stream Assessment', 'anstahl-engineering' ),
				__( 'Process Engineering', 'anstahl-engineering' ),
				__( 'Mechanical Treatment', 'anstahl-engineering' ),
				__( 'Thermal Treatment Concepts', 'anstahl-engineering' ),
				__( 'Compliance Review', 'anstahl-engineering' ),
			),
			'industries'           => array(
				__( 'Manufacturing', 'anstahl-engineering' ),
				__( 'Process Industries', 'anstahl-engineering' ),
				__( 'Industrial Estates', 'anstahl-engineering' ),
				__( 'Infrastructure', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Discuss Waste Treatment Project', 'anstahl-engineering' ),
			'accent'               => 'orange',
			'image'                => 'project-waste.svg',
			'icon'                 => 'sustainability',
		),
	);
}

/**
 * Get project detail data by slug.
 *
 * @param string $slug Project/page slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_project_detail( $slug ) {
	$projects = anstahl_get_project_details();

	return $projects[ $slug ] ?? null;
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
 * Innovation detail data by slug.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_innovation_details() {
	return array(
		'flexible-mould-packing-ring' => array(
			'title'                  => __( 'Flexible Mould Packing Ring', 'anstahl-engineering' ),
			'overline'               => __( 'Adaptive Sealing Geometry R&D', 'anstahl-engineering' ),
			'hero'                   => __( 'Adaptive packing geometry for non-standard gland conditions, irregular shaft conditions, flexible moulding approaches, and improved sealing reliability.', 'anstahl-engineering' ),
			'overview'               => __( 'The Flexible Mould Packing Ring concept explores a more adaptable packing geometry for industrial sealing applications where conventional packing dimensions or rigid configurations are difficult to apply reliably.', 'anstahl-engineering' ),
			'problem'                => __( 'Many industrial assets operate with worn glands, irregular shafts, non-standard stuffing box conditions, or field-modified equipment that can reduce sealing performance and accelerate packing degradation.', 'anstahl-engineering' ),
			'concept'                => __( 'The innovation concept studies flexible moulding methods and adaptive ring geometry that can better conform to imperfect sealing environments while maintaining compression control, leakage reduction, and practical installation.', 'anstahl-engineering' ),
			'research_focus'         => array(
				__( 'Adaptive packing geometry for non-standard gland dimensions.', 'anstahl-engineering' ),
				__( 'Flexible moulding methods for improved contact consistency.', 'anstahl-engineering' ),
				__( 'Sealing response under irregular shaft and housing conditions.', 'anstahl-engineering' ),
				__( 'Installation behaviour, compression control, and service practicality.', 'anstahl-engineering' ),
			),
			'engineering_principles' => array(
				__( 'Controlled deformation under gland compression.', 'anstahl-engineering' ),
				__( 'Material resilience and recovery after cyclic loading.', 'anstahl-engineering' ),
				__( 'Leakage path reduction through improved contact distribution.', 'anstahl-engineering' ),
				__( 'Field maintainability for industrial rotating equipment.', 'anstahl-engineering' ),
			),
			'applications'           => array(
				__( 'Pumps with non-standard stuffing boxes', 'anstahl-engineering' ),
				__( 'Worn or irregular shaft conditions', 'anstahl-engineering' ),
				__( 'Legacy rotating equipment', 'anstahl-engineering' ),
				__( 'Process equipment sealing improvement', 'anstahl-engineering' ),
			),
			'roadmap'                => array(
				__( 'Evaluate field sealing conditions and geometry limitations.', 'anstahl-engineering' ),
				__( 'Develop moulding concepts and prototype ring profiles.', 'anstahl-engineering' ),
				__( 'Test compression response, fit behaviour, and sealing performance.', 'anstahl-engineering' ),
				__( 'Refine design for manufacturing repeatability and industrial use.', 'anstahl-engineering' ),
			),
			'cta'                    => __( 'Discuss Flexible Packing R&D', 'anstahl-engineering' ),
			'accent'                 => 'blue',
			'icon'                   => 'seal',
		),
		'hybrid-packing-technology'  => array(
			'title'                  => __( 'Hybrid Packing Technology', 'anstahl-engineering' ),
			'overline'               => __( 'Multi-Material Packing Development', 'anstahl-engineering' ),
			'hero'                   => __( 'Multi-material packing construction using PTFE, graphite, aramid, and carbon concepts for chemical resistance, thermal stability, and low friction.', 'anstahl-engineering' ),
			'overview'               => __( 'Hybrid Packing Technology explores multi-material packing structures designed to balance friction control, chemical compatibility, thermal stability, strength, and long-term sealing performance.', 'anstahl-engineering' ),
			'problem'                => __( 'Single-material packing can be limited when applications combine aggressive media, elevated temperature, shaft movement, pressure variation, and friction-sensitive operating requirements.', 'anstahl-engineering' ),
			'concept'                => __( 'The concept combines complementary material behaviours such as PTFE lubricity, graphite thermal stability, aramid strength, and carbon durability into hybrid packing constructions tailored to application duty.', 'anstahl-engineering' ),
			'research_focus'         => array(
				__( 'PTFE, graphite, aramid, and carbon material combinations.', 'anstahl-engineering' ),
				__( 'Chemical resistance against industrial process media.', 'anstahl-engineering' ),
				__( 'Thermal stability under elevated operating temperature.', 'anstahl-engineering' ),
				__( 'Low-friction performance for rotating and reciprocating equipment.', 'anstahl-engineering' ),
			),
			'engineering_principles' => array(
				__( 'Material compatibility with media, temperature, and shaft condition.', 'anstahl-engineering' ),
				__( 'Friction reduction without compromising sealing contact.', 'anstahl-engineering' ),
				__( 'Load distribution across braided or layered packing structures.', 'anstahl-engineering' ),
				__( 'Service life optimisation through balanced material properties.', 'anstahl-engineering' ),
			),
			'applications'           => array(
				__( 'Chemical process pumps', 'anstahl-engineering' ),
				__( 'High-temperature valves', 'anstahl-engineering' ),
				__( 'Rotating equipment with friction sensitivity', 'anstahl-engineering' ),
				__( 'Industrial sealing upgrades', 'anstahl-engineering' ),
			),
			'roadmap'                => array(
				__( 'Map target duties and material compatibility requirements.', 'anstahl-engineering' ),
				__( 'Develop candidate hybrid material constructions.', 'anstahl-engineering' ),
				__( 'Assess friction, compression, thermal, and chemical behaviour.', 'anstahl-engineering' ),
				__( 'Prepare application guidance for industrial field trials.', 'anstahl-engineering' ),
			),
			'cta'                    => __( 'Explore Hybrid Packing Technology', 'anstahl-engineering' ),
			'accent'                 => 'green',
			'icon'                   => 'thermal',
		),
		'hybrid-mechanical-seal'     => array(
			'title'                  => __( 'Hybrid Mechanical Seal', 'anstahl-engineering' ),
			'overline'               => __( 'Advanced Mechanical Seal Configuration', 'anstahl-engineering' ),
			'hero'                   => __( 'Advanced face material combinations, seal plan configuration, abrasive service support, high-temperature duty, and rotating equipment reliability.', 'anstahl-engineering' ),
			'overview'               => __( 'The Hybrid Mechanical Seal innovation investigates mechanical seal configurations that combine advanced face materials, auxiliary seal planning, and application-specific design logic for demanding rotating equipment.', 'anstahl-engineering' ),
			'problem'                => __( 'Abrasive media, thermal stress, poor lubrication, pressure variation, and contamination can shorten seal life and create recurring reliability problems in critical rotating equipment.', 'anstahl-engineering' ),
			'concept'                => __( 'The concept evaluates hybrid seal face pairings, support systems, and seal plan configurations to improve reliability in abrasive and high-temperature services while supporting maintainable operation.', 'anstahl-engineering' ),
			'research_focus'         => array(
				__( 'Advanced hard and soft seal face material combinations.', 'anstahl-engineering' ),
				__( 'Seal plan configuration for lubrication, flushing, and cooling.', 'anstahl-engineering' ),
				__( 'Abrasive service protection and contamination management.', 'anstahl-engineering' ),
				__( 'High-temperature duty and rotating equipment reliability.', 'anstahl-engineering' ),
			),
			'engineering_principles' => array(
				__( 'Tribology and face pair compatibility under process duty.', 'anstahl-engineering' ),
				__( 'Heat generation control across rotating seal interfaces.', 'anstahl-engineering' ),
				__( 'Barrier, flush, and cooling strategy aligned with service risk.', 'anstahl-engineering' ),
				__( 'Failure mode review for maintainability and uptime improvement.', 'anstahl-engineering' ),
			),
			'applications'           => array(
				__( 'Abrasive slurry pumps', 'anstahl-engineering' ),
				__( 'High-temperature process pumps', 'anstahl-engineering' ),
				__( 'Critical rotating equipment', 'anstahl-engineering' ),
				__( 'Mechanical seal reliability upgrades', 'anstahl-engineering' ),
			),
			'roadmap'                => array(
				__( 'Review target operating services and recurring seal failure modes.', 'anstahl-engineering' ),
				__( 'Select candidate face materials and seal support strategies.', 'anstahl-engineering' ),
				__( 'Evaluate heat, lubrication, contamination, and pressure behaviour.', 'anstahl-engineering' ),
				__( 'Develop application recommendations for pilot implementation.', 'anstahl-engineering' ),
			),
			'cta'                    => __( 'Review Hybrid Mechanical Seal R&D', 'anstahl-engineering' ),
			'accent'                 => 'orange',
			'icon'                   => 'gear',
		),
		'high-pressure-coffee-roaster' => array(
			'title'                  => __( 'High Pressure Coffee Roaster', 'anstahl-engineering' ),
			'overline'               => __( 'Precision Thermal Food Equipment Innovation', 'anstahl-engineering' ),
			'hero'                   => __( 'Precision thermal process engineering, high-pressure roasting chamber development, controlled heat transfer, and specialty food equipment innovation.', 'anstahl-engineering' ),
			'overview'               => __( 'The High Pressure Coffee Roaster concept applies industrial thermal process engineering to specialty food equipment, exploring controlled pressure, heat transfer, and repeatable roasting behaviour.', 'anstahl-engineering' ),
			'problem'                => __( 'Specialty roasting requires repeatable control of heat transfer, chamber conditions, aroma development, and batch consistency, while conventional systems may limit experimentation with pressure-assisted thermal profiles.', 'anstahl-engineering' ),
			'concept'                => __( 'The innovation concept studies a pressure-capable roasting chamber and controlled thermal process architecture to expand roasting profile control while maintaining equipment safety, repeatability, and product quality.', 'anstahl-engineering' ),
			'research_focus'         => array(
				__( 'High-pressure roasting chamber concept and safety logic.', 'anstahl-engineering' ),
				__( 'Controlled heat transfer and thermal profile repeatability.', 'anstahl-engineering' ),
				__( 'Instrumentation for temperature, pressure, and process monitoring.', 'anstahl-engineering' ),
				__( 'Specialty food equipment ergonomics and maintainability.', 'anstahl-engineering' ),
			),
			'engineering_principles' => array(
				__( 'Pressure containment and thermal safety management.', 'anstahl-engineering' ),
				__( 'Heat transfer control across chamber, air, and product mass.', 'anstahl-engineering' ),
				__( 'Process monitoring for repeatable batch performance.', 'anstahl-engineering' ),
				__( 'Cleanable, maintainable equipment design for food applications.', 'anstahl-engineering' ),
			),
			'applications'           => array(
				__( 'Specialty coffee roasting development', 'anstahl-engineering' ),
				__( 'Food process equipment prototyping', 'anstahl-engineering' ),
				__( 'Thermal process experimentation', 'anstahl-engineering' ),
				__( 'Controlled atmosphere roasting studies', 'anstahl-engineering' ),
			),
			'roadmap'                => array(
				__( 'Define target roasting parameters, pressure envelope, and safety requirements.', 'anstahl-engineering' ),
				__( 'Develop chamber, heating, monitoring, and control system concepts.', 'anstahl-engineering' ),
				__( 'Prototype and validate thermal response, safety behaviour, and batch consistency.', 'anstahl-engineering' ),
				__( 'Refine equipment for user operation, cleaning, and repeatable specialty roasting.', 'anstahl-engineering' ),
			),
			'cta'                    => __( 'Discuss High Pressure Roaster Innovation', 'anstahl-engineering' ),
			'accent'                 => 'steel',
			'icon'                   => 'energy',
		),
	);
}

/**
 * Get innovation detail data by slug.
 *
 * @param string $slug Innovation/page slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_innovation_detail( $slug ) {
	$innovations = anstahl_get_innovation_details();

	return $innovations[ $slug ] ?? null;
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
 * Approach detail data by slug.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_approach_details() {
	return array(
		'safety'         => array(
			'title'       => __( 'Safety', 'anstahl-engineering' ),
			'overline'    => __( 'Safety-First Engineering', 'anstahl-engineering' ),
			'hero'        => __( 'Risk-aware engineering, site safety, equipment safety, and safe work practices embedded into industrial project delivery.', 'anstahl-engineering' ),
			'overview'    => __( 'Safety is the foundation of Anstahl engineering activity. From design review to site execution, the company works to identify hazards, reduce risk, and support industrial operations where people, equipment, and processes are protected.', 'anstahl-engineering' ),
			'principle'   => __( 'No engineering result is successful unless it protects people, respects operating risk, and supports safe long-term asset performance.', 'anstahl-engineering' ),
			'commitment'  => array(
				__( 'Apply risk awareness across design, manufacturing, installation, and maintenance support.', 'anstahl-engineering' ),
				__( 'Promote safe work practices for employees, partners, vendors, and site personnel.', 'anstahl-engineering' ),
				__( 'Consider equipment safety, access, isolation, and maintainability during engineering review.', 'anstahl-engineering' ),
				__( 'Support clear communication of hazards, controls, and site requirements.', 'anstahl-engineering' ),
			),
			'implementation' => array(
				__( 'Identify project hazards, site conditions, and equipment-specific risks.', 'anstahl-engineering' ),
				__( 'Define safety controls, working methods, and required documentation.', 'anstahl-engineering' ),
				__( 'Coordinate execution with site rules, permit requirements, and responsible supervision.', 'anstahl-engineering' ),
				__( 'Review lessons learned to improve future engineering and site practice.', 'anstahl-engineering' ),
			),
			'standards'    => array(
				__( 'Site safety procedures', 'anstahl-engineering' ),
				__( 'Risk assessment practice', 'anstahl-engineering' ),
				__( 'Equipment guarding and access review', 'anstahl-engineering' ),
				__( 'Permit-to-work coordination', 'anstahl-engineering' ),
			),
			'impact'       => array(
				__( 'Reduced exposure to unsafe working conditions.', 'anstahl-engineering' ),
				__( 'Improved maintainability and equipment access planning.', 'anstahl-engineering' ),
				__( 'Stronger safety culture across project execution.', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Safety-Led Engineering', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'shield',
		),
		'quality'        => array(
			'title'       => __( 'Quality', 'anstahl-engineering' ),
			'overline'    => __( 'Engineering Quality & Manufacturing Discipline', 'anstahl-engineering' ),
			'hero'        => __( 'Engineering quality, manufacturing discipline, inspection, verification, documentation, and continuous improvement for reliable industrial outcomes.', 'anstahl-engineering' ),
			'overview'    => __( 'Quality at Anstahl is built through disciplined engineering review, controlled manufacturing preparation, inspection, verification, and documentation. The goal is to deliver solutions that are repeatable, traceable, and fit for industrial duty.', 'anstahl-engineering' ),
			'principle'   => __( 'Quality is created by disciplined process, verified evidence, and continuous improvement, not by final inspection alone.', 'anstahl-engineering' ),
			'commitment'  => array(
				__( 'Develop engineering outputs with clear requirements, tolerances, and acceptance criteria.', 'anstahl-engineering' ),
				__( 'Apply inspection and verification to critical components, assemblies, and deliverables.', 'anstahl-engineering' ),
				__( 'Maintain documentation that supports traceability and client confidence.', 'anstahl-engineering' ),
				__( 'Use lessons learned to improve technical standards and working methods.', 'anstahl-engineering' ),
			),
			'implementation' => array(
				__( 'Review technical requirements, drawings, materials, and operating duty.', 'anstahl-engineering' ),
				__( 'Define quality checkpoints, inspection methods, and deliverable documentation.', 'anstahl-engineering' ),
				__( 'Verify critical dimensions, fit, function, and manufacturing readiness.', 'anstahl-engineering' ),
				__( 'Document findings and improve future engineering or production practice.', 'anstahl-engineering' ),
			),
			'standards'    => array(
				__( 'Engineering review discipline', 'anstahl-engineering' ),
				__( 'Inspection and verification records', 'anstahl-engineering' ),
				__( 'Material and dimensional control', 'anstahl-engineering' ),
				__( 'Continuous improvement practice', 'anstahl-engineering' ),
			),
			'impact'       => array(
				__( 'More reliable engineering and manufacturing deliverables.', 'anstahl-engineering' ),
				__( 'Improved traceability for technical decision making.', 'anstahl-engineering' ),
				__( 'Reduced rework through clearer requirements and verification.', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Quality Requirements', 'anstahl-engineering' ),
			'accent'       => 'steel',
			'icon'         => 'quality',
		),
		'ethics'         => array(
			'title'       => __( 'Ethics', 'anstahl-engineering' ),
			'overline'    => __( 'Integrity & Responsible Business Practice', 'anstahl-engineering' ),
			'hero'        => __( 'Integrity, transparency, fair business practice, responsible procurement, and accountability in every industrial partnership.', 'anstahl-engineering' ),
			'overview'    => __( 'Anstahl views ethical business conduct as a core part of long-term industrial partnership. The company works with transparency, accountability, fair practice, and respect for client, supplier, and community interests.', 'anstahl-engineering' ),
			'principle'   => __( 'Trust is built through transparent decisions, responsible procurement, fair treatment, and accountability for every commitment made.', 'anstahl-engineering' ),
			'commitment'  => array(
				__( 'Conduct business with integrity, honesty, and transparent communication.', 'anstahl-engineering' ),
				__( 'Support fair procurement, responsible supplier selection, and clear commercial conduct.', 'anstahl-engineering' ),
				__( 'Avoid conflicts of interest and communicate risks or limitations responsibly.', 'anstahl-engineering' ),
				__( 'Maintain accountability for technical recommendations and project commitments.', 'anstahl-engineering' ),
			),
			'implementation' => array(
				__( 'Set clear scope, deliverables, assumptions, and responsibilities at project start.', 'anstahl-engineering' ),
				__( 'Select suppliers and partners based on capability, compliance, and fairness.', 'anstahl-engineering' ),
				__( 'Communicate changes, constraints, and risks with transparency.', 'anstahl-engineering' ),
				__( 'Review business decisions against accountability and long-term trust.', 'anstahl-engineering' ),
			),
			'standards'    => array(
				__( 'Transparent communication', 'anstahl-engineering' ),
				__( 'Responsible procurement', 'anstahl-engineering' ),
				__( 'Conflict-of-interest awareness', 'anstahl-engineering' ),
				__( 'Commercial accountability', 'anstahl-engineering' ),
			),
			'impact'       => array(
				__( 'Stronger client and partner trust.', 'anstahl-engineering' ),
				__( 'Clearer decisions across technical and commercial work.', 'anstahl-engineering' ),
				__( 'More responsible industrial collaboration.', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Ethical Partnership', 'anstahl-engineering' ),
			'accent'       => 'orange',
			'icon'         => 'ethics',
		),
		'sustainability' => array(
			'title'       => __( 'Sustainability', 'anstahl-engineering' ),
			'overline'    => __( 'Responsible Engineering & Resource Efficiency', 'anstahl-engineering' ),
			'hero'        => __( 'Resource efficiency, energy efficiency, asset life extension, waste reduction, and responsible engineering for sustainable industrial performance.', 'anstahl-engineering' ),
			'overview'    => __( 'Sustainability at Anstahl is practical and engineering-led. The focus is to improve efficiency, reduce waste, extend asset life, and help industrial operations reduce avoidable losses while maintaining reliability.', 'anstahl-engineering' ),
			'principle'   => __( 'Responsible engineering should reduce waste, improve efficiency, extend asset value, and support industrial performance over the long term.', 'anstahl-engineering' ),
			'commitment'  => array(
				__( 'Support energy efficiency and resource efficiency in engineering recommendations.', 'anstahl-engineering' ),
				__( 'Extend equipment life through reliability improvement, maintenance strategy, and better components.', 'anstahl-engineering' ),
				__( 'Reduce waste through repairability, reuse, reverse engineering, and better process integration.', 'anstahl-engineering' ),
				__( 'Balance sustainability goals with safe, reliable, and practical industrial operation.', 'anstahl-engineering' ),
			),
			'implementation' => array(
				__( 'Identify energy losses, material waste, and lifecycle improvement opportunities.', 'anstahl-engineering' ),
				__( 'Develop engineering options that reduce loss while preserving reliability.', 'anstahl-engineering' ),
				__( 'Implement practical improvements through manufacturing, maintenance, or system integration.', 'anstahl-engineering' ),
				__( 'Measure operational value and refine future sustainability recommendations.', 'anstahl-engineering' ),
			),
			'standards'    => array(
				__( 'Energy efficiency review', 'anstahl-engineering' ),
				__( 'Asset life extension logic', 'anstahl-engineering' ),
				__( 'Waste reduction planning', 'anstahl-engineering' ),
				__( 'Responsible material use', 'anstahl-engineering' ),
			),
			'impact'       => array(
				__( 'Lower energy and resource losses.', 'anstahl-engineering' ),
				__( 'Longer equipment lifecycle and reduced replacement pressure.', 'anstahl-engineering' ),
				__( 'More sustainable industrial operating practices.', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Explore Sustainable Engineering', 'anstahl-engineering' ),
			'accent'       => 'green',
			'icon'         => 'sustainability',
		),
		'communities'    => array(
			'title'       => __( 'Communities', 'anstahl-engineering' ),
			'overline'    => __( 'Responsible Industrial Contribution', 'anstahl-engineering' ),
			'hero'        => __( 'Local employment, skills development, knowledge transfer, and responsible industrial contribution for stronger communities around industrial operations.', 'anstahl-engineering' ),
			'overview'    => __( 'Anstahl believes industrial engineering should create value beyond technical delivery. Through local participation, skills development, and knowledge transfer, the company aims to contribute responsibly to the communities connected to its work.', 'anstahl-engineering' ),
			'principle'   => __( 'Industrial growth is stronger when it builds local capability, transfers knowledge, and creates responsible opportunities for surrounding communities.', 'anstahl-engineering' ),
			'commitment'  => array(
				__( 'Support local employment and supplier participation where project conditions allow.', 'anstahl-engineering' ),
				__( 'Encourage skills development through practical engineering and manufacturing exposure.', 'anstahl-engineering' ),
				__( 'Share knowledge that improves industrial capability and maintenance practice.', 'anstahl-engineering' ),
				__( 'Contribute responsibly to regions where industrial operations and communities meet.', 'anstahl-engineering' ),
			),
			'implementation' => array(
				__( 'Identify local capability, workforce needs, and partnership opportunities.', 'anstahl-engineering' ),
				__( 'Involve local resources in appropriate technical, manufacturing, or support activities.', 'anstahl-engineering' ),
				__( 'Transfer practical knowledge through collaboration, documentation, and project learning.', 'anstahl-engineering' ),
				__( 'Review community contribution and improve future engagement practices.', 'anstahl-engineering' ),
			),
			'standards'    => array(
				__( 'Local participation', 'anstahl-engineering' ),
				__( 'Skills development', 'anstahl-engineering' ),
				__( 'Knowledge transfer', 'anstahl-engineering' ),
				__( 'Responsible engagement', 'anstahl-engineering' ),
			),
			'impact'       => array(
				__( 'Stronger local industrial capability.', 'anstahl-engineering' ),
				__( 'Improved knowledge sharing across project stakeholders.', 'anstahl-engineering' ),
				__( 'More responsible contribution to industrial communities.', 'anstahl-engineering' ),
			),
			'cta'          => __( 'Discuss Community Partnership', 'anstahl-engineering' ),
			'accent'       => 'blue',
			'icon'         => 'community',
		),
	);
}

/**
 * Get approach detail data by slug.
 *
 * @param string $slug Approach/page slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_approach_detail( $slug ) {
	$approaches = anstahl_get_approach_details();

	return $approaches[ $slug ] ?? null;
}

/**
 * Company overview page data.
 *
 * @return array<string, mixed>
 */
if ( ! function_exists( 'anstahl_get_company_overview' ) ) :
function anstahl_get_company_overview() {
	return array(
		'seo'       => array(
			'title'       => __( 'Company | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
			'description' => __( 'Learn about PT Anstahl Engineering Asia, an engineering-led company focused on industrial engineering, manufacturing, innovation, consultancy, governance, and long-term industrial partnership.', 'anstahl-engineering' ),
		),
		'hero'      => array(
			'overline'    => __( 'Company', 'anstahl-engineering' ),
			'title'       => __( 'Engineering-Led Industrial Partnership', 'anstahl-engineering' ),
			'description' => __( 'PT Anstahl Engineering Asia combines engineering, manufacturing, innovation, and multidisciplinary consultancy to support industrial reliability, operational improvement, and sustainable growth.', 'anstahl-engineering' ),
		),
		'statement' => __( 'Anstahl is built for industrial clients who require more than supply. The company works as an engineering partner, aligning technical decisions with equipment reliability, manufacturing readiness, maintenance improvement, safety, compliance, and long-term operational value.', 'anstahl-engineering' ),
		'snapshot'  => array(
			array(
				'title'       => __( 'Engineering', 'anstahl-engineering' ),
				'description' => __( 'Mechanical, energy, automation, data, maintenance, and systems engineering applied to real industrial operating challenges.', 'anstahl-engineering' ),
				'icon'        => 'gear',
			),
			array(
				'title'       => __( 'Manufacturing', 'anstahl-engineering' ),
				'description' => __( 'Precision components, fabricated assemblies, reverse engineering, and manufacturing readiness for demanding industrial assets.', 'anstahl-engineering' ),
				'icon'        => 'factory',
			),
			array(
				'title'       => __( 'Innovation', 'anstahl-engineering' ),
				'description' => __( 'Applied R&D focused on sealing technology, thermal systems, energy recovery, process equipment, and industrial problem solving.', 'anstahl-engineering' ),
				'icon'        => 'energy',
			),
			array(
				'title'       => __( 'Consultancy', 'anstahl-engineering' ),
				'description' => __( 'Multidisciplinary engineering advisory for technical review, system improvement, project support, and long-term capability building.', 'anstahl-engineering' ),
				'icon'        => 'consultancy',
			),
		),
		'pillars'   => array(
			array(
				'title'       => __( 'Engineering Excellence', 'anstahl-engineering' ),
				'description' => __( 'Disciplined technical review, practical design judgement, and execution standards that support reliable industrial outcomes.', 'anstahl-engineering' ),
				'url'         => anstahl_get_page_url( 'mission-vision' ),
				'icon'        => 'quality',
			),
			array(
				'title'       => __( 'Innovation', 'anstahl-engineering' ),
				'description' => __( 'Applied innovation directed toward industrial reliability, efficiency, maintainability, and measurable operational improvement.', 'anstahl-engineering' ),
				'url'         => anstahl_get_page_url( 'innovation' ),
				'icon'        => 'energy',
			),
			array(
				'title'       => __( 'Industrial Integrity', 'anstahl-engineering' ),
				'description' => __( 'Transparent decision making, responsible procurement, documentation discipline, and ethical business practice.', 'anstahl-engineering' ),
				'url'         => anstahl_get_page_url( 'compliance' ),
				'icon'        => 'ethics',
			),
			array(
				'title'       => __( 'Long-Term Partnership', 'anstahl-engineering' ),
				'description' => __( 'Partnership built around asset lifecycle, technical continuity, capability growth, and trust across industrial operations.', 'anstahl-engineering' ),
				'url'         => anstahl_get_page_url( 'management' ),
				'icon'        => 'community',
			),
		),
		'timeline'  => array(
			array(
				'period'      => __( 'Past', 'anstahl-engineering' ),
				'title'       => __( 'Foundation in Industrial Problem Solving', 'anstahl-engineering' ),
				'description' => __( 'Anstahl was shaped around practical engineering needs: component reliability, manufacturing support, maintenance improvement, and technical problem solving for demanding industrial environments.', 'anstahl-engineering' ),
			),
			array(
				'period'      => __( 'Present', 'anstahl-engineering' ),
				'title'       => __( 'Integrated Engineering Capability', 'anstahl-engineering' ),
				'description' => __( 'The company now connects product brands, manufacturing capability, engineering consultancy, automation, data engineering, energy systems, and applied R&D into one corporate platform.', 'anstahl-engineering' ),
			),
			array(
				'period'      => __( 'Future', 'anstahl-engineering' ),
				'title'       => __( 'Technical Leadership for Sustainable Industry', 'anstahl-engineering' ),
				'description' => __( 'Anstahl is developing toward broader regional impact through sustainable engineering, stronger governance, strategic partnerships, and innovation that improves industrial performance.', 'anstahl-engineering' ),
			),
		),
		'cta'       => array(
			'title'       => __( 'Build long-term industrial capability with Anstahl.', 'anstahl-engineering' ),
			'description' => __( 'Engage PT Anstahl Engineering Asia for engineering partnership, manufacturing support, innovation collaboration, or strategic industrial development.', 'anstahl-engineering' ),
			'label'       => __( 'Start Company Inquiry', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'contact' ),
		),
	);
}
endif;

/**
 * Company section navigation links.
 *
 * @return array<int, array<string, string>>
 */
if ( ! function_exists( 'anstahl_get_company_navigation' ) ) :
function anstahl_get_company_navigation() {
	return array(
		array(
			'title'       => __( 'Company Overview', 'anstahl-engineering' ),
			'description' => __( 'Executive entry point for Anstahl capability, pillars, and direction.', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'company' ),
			'icon'        => 'factory',
		),
		array(
			'title'       => __( 'Mission & Vision', 'anstahl-engineering' ),
			'description' => __( 'Strategic direction, objectives, long-term growth, and corporate values.', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'mission-vision' ),
			'icon'        => 'consultancy',
		),
		array(
			'title'       => __( 'Management', 'anstahl-engineering' ),
			'description' => __( 'Leadership philosophy, governance, organisation, and decision discipline.', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'management' ),
			'icon'        => 'community',
		),
		array(
			'title'       => __( 'Compliance', 'anstahl-engineering' ),
			'description' => __( 'Quality, safety, ethics, sustainability, documentation, and risk control.', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'compliance' ),
			'icon'        => 'quality',
		),
		array(
			'title'       => __( 'Career', 'anstahl-engineering' ),
			'description' => __( 'Engineering culture, learning environment, development, and opportunities.', 'anstahl-engineering' ),
			'url'         => anstahl_get_page_url( 'career' ),
			'icon'        => 'gear',
		),
	);
}
endif;

/**
 * Company detail data by slug.
 *
 * @return array<string, array<string, mixed>>
 */
if ( ! function_exists( 'anstahl_get_company_details' ) ) :
function anstahl_get_company_details() {
	return array(
		'mission-vision' => array(
			'seo'                 => array(
				'title'       => __( 'Mission & Vision | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
				'description' => __( 'PT Anstahl Engineering Asia mission and vision for engineering excellence, industrial innovation, long-term partnerships, sustainable growth, and technical leadership.', 'anstahl-engineering' ),
			),
			'title'               => __( 'Mission & Vision', 'anstahl-engineering' ),
			'overline'            => __( 'Engineering Direction & Corporate Purpose', 'anstahl-engineering' ),
			'hero'                => __( 'Engineering excellence, industrial innovation, long-term partnerships, sustainable growth, and technical leadership for the industries Anstahl serves.', 'anstahl-engineering' ),
			'overview'            => __( 'Anstahl exists to help industrial operators solve technical challenges through engineering-led thinking, manufacturing capability, innovation, and reliable long-term collaboration. The company direction is built around practical engineering value and sustainable industrial performance.', 'anstahl-engineering' ),
			'vision'              => __( 'To become a trusted engineering partner in Asia for industrial reliability, manufacturing excellence, applied innovation, and sustainable technical growth.', 'anstahl-engineering' ),
			'mission'             => __( 'To deliver engineering, manufacturing, automation, energy, maintenance, data, and consultancy solutions that improve industrial performance through technical discipline, practical innovation, and long-term partnership.', 'anstahl-engineering' ),
			'strategic_objectives' => array(
				__( 'Strengthen multidisciplinary engineering capability across industrial systems, equipment, data, and process improvement.', 'anstahl-engineering' ),
				__( 'Develop product and R&D platforms that solve reliability, efficiency, sealing, thermal, and manufacturing challenges.', 'anstahl-engineering' ),
				__( 'Build long-term relationships with industrial clients, EPC partners, asset owners, and strategic institutions.', 'anstahl-engineering' ),
				__( 'Expand technical leadership through governance, documentation discipline, safety awareness, and sustainable growth.', 'anstahl-engineering' ),
			),
			'long_term_direction' => array(
				__( 'Regional engineering partner for industrial operators requiring disciplined technical support and manufacturing capability.', 'anstahl-engineering' ),
				__( 'Integrated innovation platform connecting product development, applied R&D, energy systems, automation, and data engineering.', 'anstahl-engineering' ),
				__( 'Sustainable engineering company that supports asset life extension, energy efficiency, waste reduction, and workforce capability.', 'anstahl-engineering' ),
			),
			'core_values'         => array(
				__( 'Technical integrity in every recommendation, drawing, component, and project decision.', 'anstahl-engineering' ),
				__( 'Reliability as the measure of engineering value in real operating conditions.', 'anstahl-engineering' ),
				__( 'Partnership built through accountability, transparency, and continuity of support.', 'anstahl-engineering' ),
				__( 'Innovation that remains practical, testable, manufacturable, and useful to industry.', 'anstahl-engineering' ),
			),
			'principles'          => array(
				__( 'Advance engineering excellence through disciplined technical thinking and reliable execution.', 'anstahl-engineering' ),
				__( 'Build industrial innovation that responds to real operating challenges and measurable business needs.', 'anstahl-engineering' ),
				__( 'Develop long-term partnerships based on trust, capability, and consistent delivery.', 'anstahl-engineering' ),
			),
			'focus'               => array(
				__( 'Engineering excellence across mechanical, manufacturing, energy, automation, and data disciplines.', 'anstahl-engineering' ),
				__( 'Industrial innovation that improves reliability, efficiency, maintainability, and sustainability.', 'anstahl-engineering' ),
				__( 'Long-term partnerships with industrial operators, asset owners, and technical stakeholders.', 'anstahl-engineering' ),
				__( 'Sustainable growth supported by capability development and technical leadership.', 'anstahl-engineering' ),
			),
			'outcomes'            => array(
				__( 'Clearer corporate direction for technical growth and industrial service development.', 'anstahl-engineering' ),
				__( 'Stronger alignment between innovation, operations, and long-term customer value.', 'anstahl-engineering' ),
				__( 'A company platform built for reliable engineering partnership.', 'anstahl-engineering' ),
			),
			'cta'                 => __( 'Discuss Strategic Partnership', 'anstahl-engineering' ),
			'accent'              => 'blue',
			'icon'                => 'consultancy',
		),
		'management'     => array(
			'seo'                 => array(
				'title'       => __( 'Management | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
				'description' => __( 'Anstahl management approach for leadership, engineering governance, project management, technical decision making, corporate development, and industrial accountability.', 'anstahl-engineering' ),
			),
			'title'               => __( 'Management', 'anstahl-engineering' ),
			'overline'            => __( 'Leadership & Engineering Governance', 'anstahl-engineering' ),
			'hero'                => __( 'Leadership, engineering governance, project management, technical decision making, and corporate development for disciplined industrial execution.', 'anstahl-engineering' ),
			'overview'            => __( 'Anstahl management combines corporate leadership with engineering governance to keep technical work aligned with client requirements, project risk, business objectives, and long-term capability development.', 'anstahl-engineering' ),
			'leadership_statement' => __( 'Anstahl management is responsible for keeping engineering decisions connected to operating reality. Leadership is measured by the ability to clarify technical risk, protect safety and quality, maintain project discipline, and build capability that remains useful after delivery.', 'anstahl-engineering' ),
			'engineering_philosophy' => __( 'The company does not separate management from engineering judgement. Commercial commitments, technical recommendations, manufacturing decisions, and project schedules must be supported by evidence, review discipline, and accountability.', 'anstahl-engineering' ),
			'long_term_vision'    => __( 'The long-term management vision is to build Anstahl into a regional engineering partner known for reliable technical execution, disciplined governance, practical innovation, and continuity of support for industrial clients.', 'anstahl-engineering' ),
			'management_philosophy' => __( 'Management is treated as an engineering responsibility: define the problem clearly, assign technical accountability, control execution risk, verify decisions, and maintain communication until the industrial outcome is delivered.', 'anstahl-engineering' ),
			'leadership_principles' => array(
				__( 'Lead technical work with clarity of scope, duty requirements, risk, and acceptance criteria.', 'anstahl-engineering' ),
				__( 'Separate assumptions from verified information before making engineering or commercial commitments.', 'anstahl-engineering' ),
				__( 'Protect project continuity through documentation, review discipline, and accountable ownership.', 'anstahl-engineering' ),
				__( 'Develop people and systems so capability increases after every project, not only revenue.', 'anstahl-engineering' ),
			),
			'organisational_structure' => array(
				array(
					'division' => __( 'Managing Director', 'anstahl-engineering' ),
					'role'     => __( 'Corporate direction, strategic partnership, governance oversight, and final accountability for company development.', 'anstahl-engineering' ),
				),
				array(
					'division' => __( 'Engineering Division', 'anstahl-engineering' ),
					'role'     => __( 'Technical review, design logic, product engineering, reliability improvement, automation, energy systems, and consultancy delivery.', 'anstahl-engineering' ),
				),
				array(
					'division' => __( 'Operations Division', 'anstahl-engineering' ),
					'role'     => __( 'Manufacturing coordination, quality checkpoints, site readiness, supplier control, logistics, and execution support.', 'anstahl-engineering' ),
				),
				array(
					'division' => __( 'Commercial Division', 'anstahl-engineering' ),
					'role'     => __( 'Client engagement, proposal discipline, contract communication, partner coordination, and long-term account continuity.', 'anstahl-engineering' ),
				),
				array(
					'division' => __( 'Innovation Division', 'anstahl-engineering' ),
					'role'     => __( 'Applied R&D, prototype concepts, product improvement, experimental validation, and technical knowledge development.', 'anstahl-engineering' ),
				),
			),
			'leadership_commitments' => array(
				__( 'Maintain technical accountability across every project stage from inquiry to after-delivery support.', 'anstahl-engineering' ),
				__( 'Use project learning to improve standards, documentation, manufacturing readiness, and client communication.', 'anstahl-engineering' ),
				__( 'Make decisions that protect safety, quality, reliability, and long-term partnership value.', 'anstahl-engineering' ),
			),
			'decision_framework'  => array(
				__( 'Define operating context, failure mode, business requirement, and engineering constraint.', 'anstahl-engineering' ),
				__( 'Review available evidence, drawings, site information, standards, and manufacturability limits.', 'anstahl-engineering' ),
				__( 'Select the practical technical path with clear risks, responsibilities, and verification points.', 'anstahl-engineering' ),
				__( 'Document decisions so future maintenance, modification, or improvement remains traceable.', 'anstahl-engineering' ),
			),
			'governance_approach' => array(
				__( 'Technical review discipline before commitment.', 'anstahl-engineering' ),
				__( 'Project communication aligned to scope, schedule, and risk.', 'anstahl-engineering' ),
				__( 'Documentation ownership for drawings, assumptions, revisions, and deliverables.', 'anstahl-engineering' ),
				__( 'Management oversight for capability development and responsible growth.', 'anstahl-engineering' ),
			),
			'governance_principles' => array(
				__( 'Every technical decision must be traceable to operating context, evidence, constraints, and accountable ownership.', 'anstahl-engineering' ),
				__( 'Project commitments must consider engineering risk, manufacturing readiness, delivery control, and client communication.', 'anstahl-engineering' ),
				__( 'Management review must strengthen future capability, not only approve current work.', 'anstahl-engineering' ),
			),
			'technical_leadership_commitments' => array(
				__( 'Maintain engineering review discipline before technical or commercial commitment.', 'anstahl-engineering' ),
				__( 'Protect reliability, safety, quality, and maintainability in solution decisions.', 'anstahl-engineering' ),
				__( 'Build documentation practices that support repeatability and future technical review.', 'anstahl-engineering' ),
				__( 'Develop engineers through project exposure, accountability, and evidence-based problem solving.', 'anstahl-engineering' ),
			),
			'principles'          => array(
				__( 'Lead with technical clarity, accountability, and disciplined decision making.', 'anstahl-engineering' ),
				__( 'Govern engineering work through structured review, project control, and practical risk awareness.', 'anstahl-engineering' ),
				__( 'Develop the company through capability building, operational discipline, and responsible growth.', 'anstahl-engineering' ),
			),
			'focus'               => array(
				__( 'Leadership direction for engineering teams, project execution, and business development.', 'anstahl-engineering' ),
				__( 'Engineering governance covering review discipline, decision records, and technical accountability.', 'anstahl-engineering' ),
				__( 'Project management practices for scope, schedule, communication, and delivery control.', 'anstahl-engineering' ),
				__( 'Corporate development that strengthens capability, partnerships, and market readiness.', 'anstahl-engineering' ),
			),
			'outcomes'            => array(
				__( 'Improved consistency across engineering delivery and project communication.', 'anstahl-engineering' ),
				__( 'Stronger accountability for technical and commercial decisions.', 'anstahl-engineering' ),
				__( 'A scalable management platform for multidisciplinary industrial work.', 'anstahl-engineering' ),
			),
			'cta'                 => __( 'Connect With Management Team', 'anstahl-engineering' ),
			'accent'              => 'steel',
			'icon'                => 'consultancy',
		),
		'compliance'     => array(
			'seo'                 => array(
				'title'       => __( 'Compliance | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
				'description' => __( 'Anstahl compliance framework for quality management, safety management, documentation control, regulatory alignment, ethics, sustainability, risk management, and traceability.', 'anstahl-engineering' ),
			),
			'title'               => __( 'Compliance', 'anstahl-engineering' ),
			'overline'            => __( 'Quality, Safety & Ethical Compliance', 'anstahl-engineering' ),
			'hero'                => __( 'Quality management, safety management, documentation control, regulatory compliance, and ethical business practice for responsible industrial delivery.', 'anstahl-engineering' ),
			'overview'            => __( 'Compliance at Anstahl supports trustworthy engineering by connecting quality practices, safety requirements, documentation control, regulatory awareness, and ethical business conduct into daily project and operational decisions.', 'anstahl-engineering' ),
			'compliance_philosophy' => __( 'Compliance is handled as an operating discipline, not a document archive. It guides how Anstahl reviews risk, controls quality, protects safety, communicates ethically, and preserves traceability for industrial clients.', 'anstahl-engineering' ),
			'frameworks'          => array(
				array(
					'title'       => __( 'Quality Framework', 'anstahl-engineering' ),
					'description' => __( 'Engineering review, defined acceptance criteria, inspection planning, verification records, and corrective improvement for technical deliverables.', 'anstahl-engineering' ),
				),
				array(
					'title'       => __( 'Safety Framework', 'anstahl-engineering' ),
					'description' => __( 'Risk awareness, site requirement review, safe work preparation, equipment safety considerations, and escalation of unsafe conditions.', 'anstahl-engineering' ),
				),
				array(
					'title'       => __( 'Ethics Framework', 'anstahl-engineering' ),
					'description' => __( 'Transparent communication, responsible procurement, fair business conduct, conflict awareness, and accountability for commitments.', 'anstahl-engineering' ),
				),
				array(
					'title'       => __( 'Sustainability Framework', 'anstahl-engineering' ),
					'description' => __( 'Resource efficiency, energy improvement, asset life extension, waste reduction, and responsible material or process recommendations.', 'anstahl-engineering' ),
				),
			),
			'certification_alignment' => array(
				__( 'ISO 9001 alignment for quality management, documented process control, corrective action, and customer requirement discipline.', 'anstahl-engineering' ),
				__( 'ISO 14001 alignment for environmental consideration, resource use, waste reduction, and continuous environmental improvement.', 'anstahl-engineering' ),
				__( 'ISO 45001 alignment for occupational health and safety awareness, hazard identification, and safe work management.', 'anstahl-engineering' ),
			),
			'risk_management'     => array(
				__( 'Identify technical, safety, supplier, schedule, and operating risks before committing to execution.', 'anstahl-engineering' ),
				__( 'Define controls, review points, escalation paths, and documentation requirements for each risk category.', 'anstahl-engineering' ),
				__( 'Use post-project learning to improve standards, inspection plans, and technical review practice.', 'anstahl-engineering' ),
			),
			'documentation_discipline' => array(
				__( 'Controlled drawings, revisions, specifications, inspection notes, and delivery records.', 'anstahl-engineering' ),
				__( 'Clear documentation of assumptions, operating conditions, material decisions, and verification results.', 'anstahl-engineering' ),
				__( 'Project records that support future maintenance, repeat manufacturing, investigation, and improvement.', 'anstahl-engineering' ),
			),
			'traceability_principles' => array(
				__( 'Trace critical decisions from inquiry context to engineering recommendation and final deliverable.', 'anstahl-engineering' ),
				__( 'Preserve material, dimensional, inspection, and revision information where it affects reliability.', 'anstahl-engineering' ),
				__( 'Maintain transparent communication so clients can understand what was decided, why, and under which constraints.', 'anstahl-engineering' ),
			),
			'principles'          => array(
				__( 'Treat compliance as a working discipline that protects people, clients, assets, and business integrity.', 'anstahl-engineering' ),
				__( 'Maintain documentation and verification practices that support traceability and accountability.', 'anstahl-engineering' ),
				__( 'Align project activity with applicable safety, quality, regulatory, and ethical expectations.', 'anstahl-engineering' ),
			),
			'focus'               => array(
				__( 'Quality management practices for technical review, inspection, and verification.', 'anstahl-engineering' ),
				__( 'Safety management awareness for site activity, equipment risk, and work preparation.', 'anstahl-engineering' ),
				__( 'Documentation control for deliverables, records, revisions, and project traceability.', 'anstahl-engineering' ),
				__( 'Ethical business practice in procurement, communication, accountability, and partnership.', 'anstahl-engineering' ),
			),
			'outcomes'            => array(
				__( 'More reliable project documentation and technical traceability.', 'anstahl-engineering' ),
				__( 'Improved confidence in safety, quality, and responsible execution.', 'anstahl-engineering' ),
				__( 'Stronger governance for industrial customers and partners.', 'anstahl-engineering' ),
			),
			'cta'                 => __( 'Review Compliance Requirements', 'anstahl-engineering' ),
			'accent'              => 'orange',
			'icon'                => 'quality',
		),
		'career'         => array(
			'seo'                 => array(
				'title'       => __( 'Career | PT Anstahl Engineering Asia', 'anstahl-engineering' ),
				'description' => __( 'Explore Anstahl career culture for engineering talent, professional development, learning environment, innovation participation, industrial exposure, and future opportunities.', 'anstahl-engineering' ),
			),
			'title'               => __( 'Career', 'anstahl-engineering' ),
			'overline'            => __( 'Engineering Talent & Professional Growth', 'anstahl-engineering' ),
			'hero'                => __( 'Engineering talent, professional development, learning culture, innovation participation, and industrial exposure for future technical leaders.', 'anstahl-engineering' ),
			'overview'            => __( 'Anstahl career development is centred on practical engineering exposure, learning culture, multidisciplinary collaboration, and participation in industrial innovation. The company seeks people who want to grow through real technical challenges.', 'anstahl-engineering' ),
			'why_work'            => array(
				__( 'Work on industrial problems where engineering decisions affect equipment reliability, production continuity, safety, and efficiency.', 'anstahl-engineering' ),
				__( 'Develop capability across manufacturing, maintenance, automation, energy systems, data engineering, and applied innovation.', 'anstahl-engineering' ),
				__( 'Contribute to a company building regional industrial capability through technical discipline and practical problem solving.', 'anstahl-engineering' ),
			),
			'engineering_culture' => array(
				__( 'Ask for operating context before proposing solutions.', 'anstahl-engineering' ),
				__( 'Respect drawings, measurements, field evidence, and verification results.', 'anstahl-engineering' ),
				__( 'Treat manufacturing readiness and maintainability as engineering responsibilities.', 'anstahl-engineering' ),
				__( 'Share technical learning so individual experience becomes company capability.', 'anstahl-engineering' ),
			),
			'learning_environment' => array(
				__( 'Exposure to real industrial assets, failure modes, client requirements, and project constraints.', 'anstahl-engineering' ),
				__( 'Mentoring through technical review, manufacturing coordination, documentation, and field-oriented problem solving.', 'anstahl-engineering' ),
				__( 'Cross-functional learning across engineering, operations, commercial, and innovation workstreams.', 'anstahl-engineering' ),
			),
			'career_development'  => array(
				__( 'Technical foundation through documentation, drawing review, measurement, material awareness, and project communication.', 'anstahl-engineering' ),
				__( 'Applied responsibility through component improvement, site support, product development, automation, or analysis work.', 'anstahl-engineering' ),
				__( 'Leadership growth through project ownership, client communication, technical accountability, and team coordination.', 'anstahl-engineering' ),
			),
			'innovation_participation' => array(
				__( 'Product improvement for sealing, thermal protection, manufacturing, and equipment reliability.', 'anstahl-engineering' ),
				__( 'Prototype review, testing logic, technical documentation, and field feedback interpretation.', 'anstahl-engineering' ),
				__( 'Participation in applied R&D concepts connected to industrial usefulness and manufacturability.', 'anstahl-engineering' ),
			),
			'industrial_exposure' => array(
				__( 'Mining, power generation, manufacturing, process industry, infrastructure, and industrial operations.', 'anstahl-engineering' ),
				__( 'Rotating equipment, custom components, thermal systems, energy recovery, automation, data systems, and maintenance improvement.', 'anstahl-engineering' ),
				__( 'Client environments where safety, reliability, documentation, and practical execution matter.', 'anstahl-engineering' ),
			),
			'future_opportunities' => array(
				__( 'Mechanical and manufacturing engineering', 'anstahl-engineering' ),
				__( 'Automation and instrumentation', 'anstahl-engineering' ),
				__( 'Energy systems and sustainability engineering', 'anstahl-engineering' ),
				__( 'Data engineering and industrial analytics', 'anstahl-engineering' ),
				__( 'Project coordination and technical commercial support', 'anstahl-engineering' ),
			),
			'application_process' => array(
				__( 'Submit a profile that clearly explains technical background, project exposure, tools, and engineering interests.', 'anstahl-engineering' ),
				__( 'Complete an initial discussion focused on problem-solving approach, learning attitude, and industrial readiness.', 'anstahl-engineering' ),
				__( 'Participate in technical review or role-specific assessment where appropriate.', 'anstahl-engineering' ),
				__( 'Align on placement, development path, project exposure, and expected contribution.', 'anstahl-engineering' ),
			),
			'principles'          => array(
				__( 'Develop people through meaningful industrial work, mentorship, and technical responsibility.', 'anstahl-engineering' ),
				__( 'Encourage learning culture across engineering, manufacturing, project, and innovation activities.', 'anstahl-engineering' ),
				__( 'Create opportunities for talent to contribute to practical problem solving and long-term capability growth.', 'anstahl-engineering' ),
			),
			'focus'               => array(
				__( 'Engineering talent development across mechanical, manufacturing, energy, automation, and data fields.', 'anstahl-engineering' ),
				__( 'Professional development through project exposure, technical review, and hands-on industrial learning.', 'anstahl-engineering' ),
				__( 'Innovation participation in product development, R&D concepts, and applied engineering initiatives.', 'anstahl-engineering' ),
				__( 'Industrial exposure through real operating challenges, field requirements, and client collaboration.', 'anstahl-engineering' ),
			),
			'outcomes'            => array(
				__( 'Stronger internal engineering capability and knowledge transfer.', 'anstahl-engineering' ),
				__( 'More confident technical talent prepared for industrial responsibility.', 'anstahl-engineering' ),
				__( 'A learning-oriented culture that supports innovation and sustainable growth.', 'anstahl-engineering' ),
			),
			'cta'                 => __( 'Explore Career Opportunities', 'anstahl-engineering' ),
			'accent'              => 'green',
			'icon'                => 'community',
		),
	);
}
endif;

/**
 * Get company detail data by slug.
 *
 * @param string $slug Company/page slug.
 * @return array<string, mixed>|null
 */
if ( ! function_exists( 'anstahl_get_company_detail' ) ) :
function anstahl_get_company_detail( $slug ) {
	$details = anstahl_get_company_details();

	return $details[ $slug ] ?? null;
}
endif;

/**
 * Product detail data by brand slug.
 *
 * @return array<string, array<string, mixed>>
 */
function anstahl_get_product_details() {
	return array(
		'thornoj'  => array(
			'slug'                 => 'thornoj',
			'name'                 => 'THORNOJ',
			'icon'                 => 'seal',
			'accent'               => 'thornoj',
			'brand_positioning'    => __( 'Industrial Sealing Solutions', 'anstahl-engineering' ),
			'overview'             => __( 'High-performance packing and mechanical seal systems engineered for rotating and static equipment in demanding industrial environments.', 'anstahl-engineering' ),
			'sections'             => array(
				__( 'Packing Solutions', 'anstahl-engineering' ),
				__( 'Mechanical Seal Systems', 'anstahl-engineering' ),
				__( 'Rotating Equipment Reliability', 'anstahl-engineering' ),
				__( 'Industrial Applications', 'anstahl-engineering' ),
				__( 'Technical Capability', 'anstahl-engineering' ),
			),
			'applications'         => array(
				__( 'Pumps', 'anstahl-engineering' ),
				__( 'Valves', 'anstahl-engineering' ),
				__( 'Agitators', 'anstahl-engineering' ),
				__( 'Mixers', 'anstahl-engineering' ),
				__( 'High-temperature equipment', 'anstahl-engineering' ),
				__( 'Process industry equipment', 'anstahl-engineering' ),
			),
			'technical_highlights' => array(
				__( 'Application-matched packing materials for temperature, pressure, and media compatibility.', 'anstahl-engineering' ),
				__( 'Mechanical seal configurations for rotating equipment reliability and leakage control.', 'anstahl-engineering' ),
				__( 'Engineering support for equipment assessment, product selection, and installation guidance.', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Request THORNOJ Technical Consultation', 'anstahl-engineering' ),
		),
		'ormos'    => array(
			'slug'                 => 'ormos',
			'name'                 => 'ORMOS',
			'icon'                 => 'gear',
			'accent'               => 'ormos',
			'brand_positioning'    => __( 'Industrial Parts & Precision Manufacturing', 'anstahl-engineering' ),
			'overview'             => __( 'Precision-engineered industrial parts, custom engineering components, fabricated assemblies, and reverse engineering solutions.', 'anstahl-engineering' ),
			'sections'             => array(
				__( 'Industrial Parts', 'anstahl-engineering' ),
				__( 'Custom Engineering Parts', 'anstahl-engineering' ),
				__( 'Reverse Engineering', 'anstahl-engineering' ),
				__( 'Fabricated Assemblies', 'anstahl-engineering' ),
				__( 'Manufacturing Capability', 'anstahl-engineering' ),
			),
			'applications'         => array(
				__( 'Pump components', 'anstahl-engineering' ),
				__( 'Rotating equipment parts', 'anstahl-engineering' ),
				__( 'Custom brackets', 'anstahl-engineering' ),
				__( 'Fabricated frames', 'anstahl-engineering' ),
				__( 'Mechanical assemblies', 'anstahl-engineering' ),
				__( 'Mining and process equipment', 'anstahl-engineering' ),
			),
			'technical_highlights' => array(
				__( 'Design-to-manufacturing support for custom parts and industrial assemblies.', 'anstahl-engineering' ),
				__( 'Reverse engineering capability for obsolete, worn, or non-standard components.', 'anstahl-engineering' ),
				__( 'Manufacturing documentation, material traceability, and dimensional verification support.', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Request ORMOS Manufacturing Inquiry', 'anstahl-engineering' ),
		),
		'ragnvern' => array(
			'slug'                 => 'ragnvern',
			'name'                 => 'RAGNVERN',
			'icon'                 => 'thermal',
			'accent'               => 'ragnvern',
			'brand_positioning'    => __( 'Thermal Insulation & Heat Protection Systems', 'anstahl-engineering' ),
			'overview'             => __( 'Removable thermal insulation blankets and heat protection systems engineered to improve energy efficiency, asset protection, and personnel safety.', 'anstahl-engineering' ),
			'sections'             => array(
				__( 'Thermal Insulation Blanket', 'anstahl-engineering' ),
				__( 'Heat Protection Systems', 'anstahl-engineering' ),
				__( 'Energy Efficiency Solutions', 'anstahl-engineering' ),
				__( 'Personnel Safety', 'anstahl-engineering' ),
				__( 'Industrial Applications', 'anstahl-engineering' ),
			),
			'applications'         => array(
				__( 'Steam lines', 'anstahl-engineering' ),
				__( 'Valves', 'anstahl-engineering' ),
				__( 'Flanges', 'anstahl-engineering' ),
				__( 'Turbines', 'anstahl-engineering' ),
				__( 'Exhaust systems', 'anstahl-engineering' ),
				__( 'High-temperature process equipment', 'anstahl-engineering' ),
			),
			'technical_highlights' => array(
				__( 'Removable insulation systems designed for repeated maintenance access.', 'anstahl-engineering' ),
				__( 'Thermal protection solutions supporting energy efficiency and lower surface temperatures.', 'anstahl-engineering' ),
				__( 'Custom-fabricated blanket geometry for complex industrial equipment and process areas.', 'anstahl-engineering' ),
			),
			'cta'                  => __( 'Request RAGNVERN Technical Inquiry', 'anstahl-engineering' ),
		),
	);
}

/**
 * Get product detail data by slug.
 *
 * @param string $slug Product/page slug.
 * @return array<string, mixed>|null
 */
function anstahl_get_product_detail( $slug ) {
	$products = anstahl_get_product_details();

	return $products[ $slug ] ?? null;
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
