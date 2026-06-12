<?php
/**
 * Template Name: Contact
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$contact             = anstahl_get_contact_page_data();
$status              = isset( $_GET['contact_status'] ) ? sanitize_text_field( wp_unslash( $_GET['contact_status'] ) ) : '';
$rfq_url             = '#rfq-center';
$engineering_form_id = 'engineering-inquiry-form';
$partnership_form_id = 'partnership-inquiry-form';
$business_email      = 'info@anstahl.com';
$business_email_url  = 'mailto:info@anstahl.com';
$business_phone      = __( 'Available by confirmed business inquiry', 'anstahl-engineering' );
$business_phone_url  = '';
$office_location     = __( 'Indonesia', 'anstahl-engineering' );
$business_hours      = __( 'Monday to Friday, 08:00 to 17:00 WIB', 'anstahl-engineering' );

foreach ( $contact['information'] as $item ) {
	if ( false !== stripos( $item['label'], 'Email' ) ) {
		$business_email     = $item['value'];
		$business_email_url = ! empty( $item['url'] ) ? $item['url'] : 'mailto:' . $item['value'];
	}

	if ( false !== stripos( $item['label'], 'Phone' ) ) {
		$business_phone     = $item['value'];
		$business_phone_url = ! empty( $item['url'] ) ? $item['url'] : '';
	}

	if ( false !== stripos( $item['label'], 'Office' ) || false !== stripos( $item['label'], 'Location' ) ) {
		$office_location = $item['value'];
	}

	if ( false !== stripos( $item['label'], 'Hours' ) ) {
		$business_hours = $item['value'];
	}
}

$contact_channels = array(
	array(
		'title'       => __( 'Engineering Inquiry', 'anstahl-engineering' ),
		'description' => __( 'Reliability issues, project discussions, technical consultation, maintenance improvement, automation, and energy systems.', 'anstahl-engineering' ),
		'icon'        => 'gear',
		'target'      => '#' . $engineering_form_id,
	),
	array(
		'title'       => __( 'Product Information', 'anstahl-engineering' ),
		'description' => __( 'For THORNOJ, ORMOS, RAGNVERN, specifications, application suitability, and product documentation.', 'anstahl-engineering' ),
		'icon'        => 'factory',
		'target'      => '#' . $engineering_form_id,
	),
	array(
		'title'       => __( 'Partnership Inquiry', 'anstahl-engineering' ),
		'description' => __( 'For EPC collaboration, strategic supply, industrial alliance, institutional cooperation, and long-term engagement.', 'anstahl-engineering' ),
		'icon'        => 'community',
		'target'      => '#' . $partnership_form_id,
	),
	array(
		'title'       => __( 'General Contact', 'anstahl-engineering' ),
		'description' => __( 'For company information, administrative communication, vendor introduction, or non-technical inquiries.', 'anstahl-engineering' ),
		'icon'        => 'arrow',
		'target'      => '#' . $engineering_form_id,
	),
);
$contact_info_items  = array(
	array(
		'label'   => __( 'Head Office', 'anstahl-engineering' ),
		'value'   => $office_location,
		'support' => __( 'Representative office information is configurable in theme contact data.', 'anstahl-engineering' ),
		'icon'    => 'factory',
	),
	array(
		'label'   => __( 'Phone', 'anstahl-engineering' ),
		'value'   => $business_phone,
		'url'     => $business_phone_url,
		'support' => __( 'Telephone routing will appear here when a confirmed business number is configured.', 'anstahl-engineering' ),
		'icon'    => 'arrow',
	),
	array(
		'label'   => __( 'Email', 'anstahl-engineering' ),
		'value'   => $business_email,
		'url'     => $business_email_url,
		'support' => __( 'Use email for technical documents, formal inquiries, and partnership communication.', 'anstahl-engineering' ),
		'icon'    => 'data',
	),
	array(
		'label'   => __( 'Business Hours', 'anstahl-engineering' ),
		'value'   => $business_hours,
		'support' => __( 'Indonesia business time, with project communication arranged by inquiry context.', 'anstahl-engineering' ),
		'icon'    => 'maintenance',
	),
);
$notices             = array(
	'success'           => __( 'Your inquiry has been received. Anstahl will review the information and respond through the appropriate contact route.', 'anstahl-engineering' ),
	'invalid_method'    => __( 'The form request method was not accepted. Please submit the form again.', 'anstahl-engineering' ),
	'security_failed'   => __( 'The form security check failed. Please refresh the page and submit again.', 'anstahl-engineering' ),
	'spam_detected'     => __( 'The inquiry could not be submitted because automated spam behavior was detected.', 'anstahl-engineering' ),
	'rate_limited'      => __( 'Too many inquiries were submitted from this connection. Please wait before trying again.', 'anstahl-engineering' ),
	'recaptcha_failed'  => __( 'The spam protection verification failed. Please try again.', 'anstahl-engineering' ),
	'validation_failed' => __( 'Please complete all required fields with valid information.', 'anstahl-engineering' ),
	'mail_failed'       => __( 'The inquiry could not be sent by email. Please contact Anstahl directly by business email.', 'anstahl-engineering' ),
);
?>

<article class="contact-page">
	<section class="contact-hero" aria-labelledby="contact-title">
		<div class="container contact-hero__grid">
			<div class="contact-hero__content">
				<p class="overline"><?php esc_html_e( 'Contact', 'anstahl-engineering' ); ?></p>
				<h1 id="contact-title" class="contact-hero__title">
					<?php esc_html_e( 'LET’S ENGINEER SOLUTIONS', 'anstahl-engineering' ); ?>
					<span><?php esc_html_e( '—TOGETHER.', 'anstahl-engineering' ); ?></span>
				</h1>
				<p class="contact-hero__desc"><?php esc_html_e( 'We’re here to answer your questions, explore new opportunities, and support your projects from concept to completion.', 'anstahl-engineering' ); ?></p>
				<div class="contact-hero__actions">
					<a class="btn btn--primary btn--lg" href="<?php echo esc_url( $rfq_url ); ?>" aria-label="<?php esc_attr_e( 'Start the RFQ process form', 'anstahl-engineering' ); ?>">
						<span><?php esc_html_e( 'Start RFQ Process', 'anstahl-engineering' ); ?></span>
					</a>
					<a class="btn btn--secondary btn--lg" href="#contact-inquiry" aria-label="<?php esc_attr_e( 'Contact the Anstahl team', 'anstahl-engineering' ); ?>">
						<span><?php esc_html_e( 'Contact Our Team', 'anstahl-engineering' ); ?></span>
					</a>
				</div>
			</div>
			<div class="contact-hero__media" aria-hidden="true">
				<img
					src="<?php echo esc_url( anstahl_get_image_url( 'contact-industrial-plant.svg' ) ); ?>"
					alt=""
					loading="eager"
					decoding="async"
					fetchpriority="high"
					width="960"
					height="640"
				>
			</div>
		</div>
	</section>

	<section class="section section--surface contact-channels">
		<div class="container">
			<div class="contact-channel-grid">
				<?php foreach ( $contact_channels as $channel ) : ?>
					<article class="contact-channel-card">
						<div class="contact-channel-card__icon" aria-hidden="true">
							<?php anstahl_icon( $channel['icon'] ); ?>
						</div>
						<h3><?php echo esc_html( $channel['title'] ); ?></h3>
						<p><?php echo esc_html( $channel['description'] ); ?></p>
						<a class="contact-channel-card__link" href="<?php echo esc_url( $channel['target'] ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Start inquiry for %s', 'anstahl-engineering' ), $channel['title'] ) ); ?>">
							<?php esc_html_e( 'Start Inquiry', 'anstahl-engineering' ); ?>
						</a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="contact-inquiry" class="section section--bg contact-main" aria-labelledby="contact-main-title">
		<div class="container contact-main__heading">
			<p class="overline"><?php esc_html_e( 'Engineering Contact', 'anstahl-engineering' ); ?></p>
			<h2 id="contact-main-title"><?php esc_html_e( 'Contact Information & Inquiry Forms', 'anstahl-engineering' ); ?></h2>
			<p><?php esc_html_e( 'Share your technical context, product requirement, or partnership objective through the appropriate inquiry path.', 'anstahl-engineering' ); ?></p>
		</div>
		<div class="container contact-inquiry-grid">
			<aside class="contact-info-panel" aria-labelledby="contact-info-title">
				<p class="overline"><?php esc_html_e( 'Office Information', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-info-title"><?php esc_html_e( 'Business Contact', 'anstahl-engineering' ); ?></h2>
				<div class="contact-info-stack">
					<?php foreach ( $contact_info_items as $item ) : ?>
						<article class="contact-info-item">
							<div class="contact-info-item__icon" aria-hidden="true">
								<?php anstahl_icon( $item['icon'] ); ?>
							</div>
							<div>
								<h3><?php echo esc_html( $item['label'] ); ?></h3>
								<p class="contact-info-item__value">
									<?php if ( ! empty( $item['url'] ) ) : ?>
										<a href="<?php echo esc_url( $item['url'] ); ?>"><?php echo esc_html( $item['value'] ); ?></a>
									<?php else : ?>
										<?php echo esc_html( $item['value'] ); ?>
									<?php endif; ?>
								</p>
								<p class="contact-info-item__support"><?php echo esc_html( $item['support'] ); ?></p>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</aside>

			<span id="contact-form" class="contact-form-anchor" aria-hidden="true"></span>
			<section class="contact-form-panel contact-form-tabs" aria-labelledby="contact-forms-title">
				<p class="overline"><?php esc_html_e( 'Inquiry Forms', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-forms-title"><?php esc_html_e( 'Submit Your Inquiry', 'anstahl-engineering' ); ?></h2>
				<?php if ( $status && isset( $notices[ $status ] ) ) : ?>
					<div class="contact-form-notice contact-form-notice--<?php echo 'success' === $status ? 'success' : 'error'; ?>" role="status" aria-live="polite">
						<?php echo esc_html( $notices[ $status ] ); ?>
					</div>
				<?php endif; ?>
				<div class="contact-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Inquiry type', 'anstahl-engineering' ); ?>">
					<button class="contact-tab is-active" id="engineering-tab" type="button" role="tab" aria-selected="true" aria-controls="<?php echo esc_attr( $engineering_form_id ); ?>" tabindex="0">
						<?php esc_html_e( 'Engineering Inquiry', 'anstahl-engineering' ); ?>
					</button>
					<button class="contact-tab" id="partnership-tab" type="button" role="tab" aria-selected="false" aria-controls="<?php echo esc_attr( $partnership_form_id ); ?>" tabindex="-1">
						<?php esc_html_e( 'Partnership Inquiry', 'anstahl-engineering' ); ?>
					</button>
				</div>
				<noscript>
					<div class="contact-form-notice" role="status">
						<?php
						printf(
							/* translators: %s: business email. */
							esc_html__( 'JavaScript is disabled, so the tab switcher is unavailable. Submit the Engineering Inquiry form below or email %s for partnership inquiries.', 'anstahl-engineering' ),
							esc_html( $business_email )
						);
						?>
					</div>
				</noscript>
				<div class="contact-tab-panels">
					<form id="<?php echo esc_attr( $engineering_form_id ); ?>" class="contact-form contact-tab-panel is-active" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data" aria-labelledby="engineering-tab" aria-describedby="contact-form-note" role="tabpanel" tabindex="0">
						<input type="hidden" name="action" value="anstahl_contact_submit">
						<input type="hidden" name="contact_industry" value="other">
						<?php wp_nonce_field( 'anstahl_contact_submit', 'anstahl_contact_nonce' ); ?>
						<div class="form-row form-row--honeypot" aria-hidden="true">
							<label for="engineering-website"><?php esc_html_e( 'Website', 'anstahl-engineering' ); ?></label>
							<input type="text" id="engineering-website" name="contact_website" tabindex="-1" autocomplete="off">
						</div>
						<input type="hidden" class="contact-recaptcha-token" name="g-recaptcha-response" value="">
						<p id="contact-form-note" class="sr-only"><?php esc_html_e( 'Fields marked required must be completed before submission. The form is protected with server-side validation and spam controls.', 'anstahl-engineering' ); ?></p>
						<?php if ( ! empty( $contact['upload_support'] ) ) : ?>
							<div class="contact-upload-support" aria-label="<?php esc_attr_e( 'Supported upload documents', 'anstahl-engineering' ); ?>">
								<strong><?php esc_html_e( 'Supported upload context:', 'anstahl-engineering' ); ?></strong>
								<ul>
									<?php foreach ( $contact['upload_support'] as $upload_item ) : ?>
										<li><?php echo esc_html( $upload_item ); ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
						<p class="contact-form__intro"><?php esc_html_e( 'Tell us about your engineering challenge and our team will get back to you.', 'anstahl-engineering' ); ?></p>
						<div class="contact-form__grid">
						<div class="form-row">
							<label for="engineering-name"><?php esc_html_e( 'Full Name *', 'anstahl-engineering' ); ?></label>
							<input type="text" id="engineering-name" name="contact_name" autocomplete="name" required>
						</div>
						<div class="form-row">
							<label for="engineering-company"><?php esc_html_e( 'Company *', 'anstahl-engineering' ); ?></label>
							<input type="text" id="engineering-company" name="contact_company" autocomplete="organization" required>
						</div>
						<div class="form-row">
							<label for="engineering-email"><?php esc_html_e( 'Email *', 'anstahl-engineering' ); ?></label>
							<input type="email" id="engineering-email" name="contact_email" autocomplete="email" required>
						</div>
						<div class="form-row">
							<label for="engineering-phone"><?php esc_html_e( 'Phone Number', 'anstahl-engineering' ); ?></label>
							<input type="tel" id="engineering-phone" name="contact_phone" autocomplete="tel">
						</div>
						<div class="form-row">
							<label for="engineering-type"><?php esc_html_e( 'Project / Inquiry Type *', 'anstahl-engineering' ); ?></label>
							<select id="engineering-type" name="contact_inquiry_type" required>
								<option value=""><?php esc_html_e( 'Select option', 'anstahl-engineering' ); ?></option>
								<option value="assessment"><?php esc_html_e( 'Engineering Assessment', 'anstahl-engineering' ); ?></option>
								<option value="consultation"><?php esc_html_e( 'Technical Consultation', 'anstahl-engineering' ); ?></option>
								<option value="product"><?php esc_html_e( 'Product Information', 'anstahl-engineering' ); ?></option>
								<option value="rfq"><?php esc_html_e( 'Request Quotation', 'anstahl-engineering' ); ?></option>
							</select>
						</div>
						<div class="form-row">
							<label for="engineering-preferred"><?php esc_html_e( 'Preferred Contact Method', 'anstahl-engineering' ); ?></label>
							<select id="engineering-preferred" name="contact_position">
								<option value="email"><?php esc_html_e( 'Email', 'anstahl-engineering' ); ?></option>
								<option value="phone"><?php esc_html_e( 'Phone', 'anstahl-engineering' ); ?></option>
							</select>
						</div>
						<div class="form-row form-row--textarea">
							<label for="engineering-message"><?php esc_html_e( 'Message / Project Requirement *', 'anstahl-engineering' ); ?></label>
							<textarea id="engineering-message" name="contact_message" rows="7" required></textarea>
						</div>
						<div class="form-row form-row--file">
							<label for="engineering-attachment"><?php esc_html_e( 'Technical Attachment', 'anstahl-engineering' ); ?></label>
							<input type="file" id="engineering-attachment" name="contact_attachment" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.zip">
							<p class="form-row__hint"><?php esc_html_e( 'Optional. Upload one PDF, DOC, DOCX, JPG, PNG, or ZIP file up to 8 MB.', 'anstahl-engineering' ); ?></p>
						</div>
						<div class="form-row form-row--checkbox">
							<label class="form-checkbox" for="engineering-consent">
								<input type="checkbox" id="engineering-consent" name="contact_consent" required>
								<span><?php esc_html_e( 'I consent to PT Anstahl Engineering Asia reviewing this inquiry and contacting me about the submitted requirement. *', 'anstahl-engineering' ); ?></span>
							</label>
						</div>
						</div>
						<button class="btn btn--primary btn--block" type="submit">
							<?php esc_html_e( 'Submit Inquiry', 'anstahl-engineering' ); ?>
						</button>
					</form>
					<form id="<?php echo esc_attr( $partnership_form_id ); ?>" class="contact-form contact-tab-panel" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data" aria-labelledby="partnership-tab" aria-describedby="partnership-form-note" role="tabpanel" tabindex="0" hidden>
						<input type="hidden" name="action" value="anstahl_contact_submit">
						<input type="hidden" name="contact_industry" value="other">
						<input type="hidden" name="contact_inquiry_type" value="partnership">
						<?php wp_nonce_field( 'anstahl_contact_submit', 'anstahl_contact_nonce' ); ?>
						<div class="form-row form-row--honeypot" aria-hidden="true">
							<label for="partnership-website"><?php esc_html_e( 'Website', 'anstahl-engineering' ); ?></label>
							<input type="text" id="partnership-website" name="contact_website" tabindex="-1" autocomplete="off">
						</div>
						<input type="hidden" class="contact-recaptcha-token" name="g-recaptcha-response" value="">
						<p id="partnership-form-note" class="sr-only"><?php esc_html_e( 'Fields marked required must be completed before submission. The form is protected with server-side validation and spam controls.', 'anstahl-engineering' ); ?></p>
						<p class="contact-form__intro"><?php esc_html_e( 'Interested in partnering with Anstahl? Let’s explore how we can create value together.', 'anstahl-engineering' ); ?></p>
						<div class="contact-form__grid">
						<div class="form-row">
							<label for="partnership-name"><?php esc_html_e( 'Full Name *', 'anstahl-engineering' ); ?></label>
							<input type="text" id="partnership-name" name="contact_name" autocomplete="name" required>
						</div>
						<div class="form-row">
							<label for="partnership-company"><?php esc_html_e( 'Company *', 'anstahl-engineering' ); ?></label>
							<input type="text" id="partnership-company" name="contact_company" autocomplete="organization" required>
						</div>
						<div class="form-row">
							<label for="partnership-email"><?php esc_html_e( 'Email *', 'anstahl-engineering' ); ?></label>
							<input type="email" id="partnership-email" name="contact_email" autocomplete="email" required>
						</div>
						<div class="form-row">
							<label for="partnership-phone"><?php esc_html_e( 'Phone Number', 'anstahl-engineering' ); ?></label>
							<input type="tel" id="partnership-phone" name="contact_phone" autocomplete="tel">
						</div>
						<div class="form-row">
							<label for="partnership-interest"><?php esc_html_e( 'Partnership Interest', 'anstahl-engineering' ); ?></label>
							<select id="partnership-interest" name="contact_position">
								<option value="strategic-partnership"><?php esc_html_e( 'Strategic Partnership', 'anstahl-engineering' ); ?></option>
								<option value="epc-collaboration"><?php esc_html_e( 'EPC Collaboration', 'anstahl-engineering' ); ?></option>
								<option value="supply-partnership"><?php esc_html_e( 'Supply Partnership', 'anstahl-engineering' ); ?></option>
								<option value="institutional-cooperation"><?php esc_html_e( 'Institutional Cooperation', 'anstahl-engineering' ); ?></option>
							</select>
						</div>
						<div class="form-row">
							<label for="partnership-preferred"><?php esc_html_e( 'Preferred Contact Method', 'anstahl-engineering' ); ?></label>
							<select id="partnership-preferred" name="contact_preferred_method">
								<option value="email"><?php esc_html_e( 'Email', 'anstahl-engineering' ); ?></option>
								<option value="phone"><?php esc_html_e( 'Phone', 'anstahl-engineering' ); ?></option>
							</select>
						</div>
						<div class="form-row form-row--textarea">
							<label for="partnership-message"><?php esc_html_e( 'Message / Partnership Proposal *', 'anstahl-engineering' ); ?></label>
							<textarea id="partnership-message" name="contact_message" rows="7" required></textarea>
						</div>
						<div class="form-row form-row--file">
							<label for="partnership-attachment"><?php esc_html_e( 'Supporting Attachment', 'anstahl-engineering' ); ?></label>
							<input type="file" id="partnership-attachment" name="contact_attachment" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.zip">
							<p class="form-row__hint"><?php esc_html_e( 'Optional. Upload one PDF, DOC, DOCX, JPG, PNG, or ZIP file up to 8 MB.', 'anstahl-engineering' ); ?></p>
						</div>
						<div class="form-row form-row--checkbox">
							<label class="form-checkbox" for="partnership-consent">
								<input type="checkbox" id="partnership-consent" name="contact_consent" required>
								<span><?php esc_html_e( 'I consent to PT Anstahl Engineering Asia reviewing this inquiry and contacting me about the submitted requirement. *', 'anstahl-engineering' ); ?></span>
							</label>
						</div>
						</div>
						<button class="btn btn--primary btn--block" type="submit">
							<?php esc_html_e( 'Submit Inquiry', 'anstahl-engineering' ); ?>
						</button>
					</form>
				</div>
			</section>
		</div>
	</section>

	<section id="rfq-center" class="section section--surface contact-rfq-section" aria-labelledby="contact-rfq-title">
		<div class="container contact-rfq-strip">
			<div>
				<p class="overline"><?php esc_html_e( 'RFQ Support', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-rfq-title"><?php esc_html_e( 'Need a formal quotation?', 'anstahl-engineering' ); ?></h2>
				<p><?php esc_html_e( 'Use the structured RFQ process for drawings, specifications, scope of work, technical requirements, and supporting project documents.', 'anstahl-engineering' ); ?></p>
				<ul class="contact-rfq-list">
					<li><?php esc_html_e( 'Drawings', 'anstahl-engineering' ); ?></li>
					<li><?php esc_html_e( 'Specifications', 'anstahl-engineering' ); ?></li>
					<li><?php esc_html_e( 'Scope of Work', 'anstahl-engineering' ); ?></li>
					<li><?php esc_html_e( 'Technical Documents', 'anstahl-engineering' ); ?></li>
				</ul>
			</div>
			<a class="btn btn--primary" href="#<?php echo esc_attr( $engineering_form_id ); ?>">
				<?php esc_html_e( 'Start RFQ Process', 'anstahl-engineering' ); ?>
			</a>
		</div>
	</section>

	<section class="section section--bg contact-map-section" aria-labelledby="contact-map-title">
		<div class="container contact-map-grid">
			<div class="contact-map-panel">
				<svg class="contact-indonesia-map" viewBox="0 0 1000 430" role="img" aria-labelledby="contact-map-svg-title contact-map-svg-desc" focusable="false">
					<title id="contact-map-svg-title"><?php esc_html_e( 'Indonesia representative office map', 'anstahl-engineering' ); ?></title>
					<desc id="contact-map-svg-desc"><?php echo esc_html( sprintf( __( 'Map of Indonesia with the configured office location shown as %s.', 'anstahl-engineering' ), $office_location ) ); ?></desc>
					<g class="contact-map__outline" aria-hidden="true">
						<path d="M70 255C120 174 180 92 266 64" />
						<path d="M278 314C390 320 495 330 606 358" />
						<path d="M445 156C512 104 623 108 690 168" />
						<path d="M680 182C724 142 784 146 820 191" />
						<path d="M805 230C870 174 944 178 984 225" />
					</g>
					<g aria-hidden="true">
						<path class="contact-map__land" d="M85 245c23-65 84-137 150-176 22 20 35 46 35 79 0 61-45 116-120 169-35-13-75-32-65-72Z" />
						<path class="contact-map__land" d="M125 337c37-14 72-12 104 7-29 20-67 25-112 15-19-4-16-16 8-22Z" />
						<path class="contact-map__land" d="M277 309c87 4 179 14 274 35-74 28-169 30-285 5-35-8-32-35 11-40Z" />
						<path class="contact-map__land" d="M430 151c60-55 169-57 238-4 48 37 45 103 6 149-48 56-157 64-228 12-55-41-61-113-16-157Z" />
						<path class="contact-map__land" d="M680 163c37-27 83-24 115 8-16 19-36 33-60 42 43 21 60 54 49 94-40 20-93 15-126-21 34-28 42-69 22-123Z" />
						<path class="contact-map__land" d="M613 341c63 2 118 10 165 25-53 22-118 23-194 3-23-6-10-27 29-28Z" />
						<path class="contact-map__land" d="M811 221c58-54 136-57 183-10-22 39-59 67-111 82-41 12-85 4-123-23 10-19 27-36 51-49Z" />
						<path class="contact-map__land contact-map__land--small" d="M366 258c23-8 45-5 65 9-26 13-52 15-78 5-10-4-6-11 13-14Z" />
						<path class="contact-map__land contact-map__land--small" d="M721 340c30-6 60-3 89 8-28 14-63 16-104 5-10-3-5-10 15-13Z" />
					</g>
					<g class="contact-map__marker-group" role="img" aria-label="<?php echo esc_attr( sprintf( __( 'Configured office location: %s', 'anstahl-engineering' ), $office_location ) ); ?>">
						<circle class="contact-map__pulse" cx="420" cy="333" r="22" />
						<circle class="contact-map__marker" cx="420" cy="333" r="8" />
					</g>
				</svg>
			</div>
			<div class="contact-map-copy">
				<p class="overline"><?php esc_html_e( 'Indonesian Representative Office Map', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-map-title"><?php esc_html_e( 'INDONESIAN REPRESENTATIVE OFFICE', 'anstahl-engineering' ); ?></h2>
				<p><?php esc_html_e( 'Representative office details are prepared for configuration through the project contact data. No unverified office address is hardcoded in the theme.', 'anstahl-engineering' ); ?></p>
				<ul class="contact-map-list">
					<li><strong><?php esc_html_e( 'Office Location', 'anstahl-engineering' ); ?></strong><span><?php echo esc_html( $office_location ); ?></span></li>
					<li><strong><?php esc_html_e( 'Customer Email', 'anstahl-engineering' ); ?></strong><a href="<?php echo esc_url( $business_email_url ); ?>"><?php echo esc_html( $business_email ); ?></a></li>
					<li><strong><?php esc_html_e( 'Business Hours', 'anstahl-engineering' ); ?></strong><span><?php echo esc_html( $business_hours ); ?></span></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="section section--surface contact-process">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Inquiry Process', 'anstahl-engineering' ),
				'title'       => __( 'From Inquiry To Execution', 'anstahl-engineering' ),
				'description' => __( 'A structured process helps convert technical context into a clear engineering response.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<ol class="contact-process-list">
				<?php foreach ( $contact['process'] as $step ) : ?>
					<li>
						<span><?php echo esc_html( $step['step'] ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['description'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="contact-assistance-strip" aria-label="<?php esc_attr_e( 'Immediate assistance', 'anstahl-engineering' ); ?>">
		<div class="container contact-assistance-strip__inner">
			<p><?php esc_html_e( 'Need immediate assistance?', 'anstahl-engineering' ); ?></p>
			<div class="contact-assistance-strip__links">
				<?php if ( $business_phone_url ) : ?>
					<a href="<?php echo esc_url( $business_phone_url ); ?>"><?php echo esc_html( $business_phone ); ?></a>
				<?php else : ?>
					<span><?php echo esc_html( $business_phone ); ?></span>
				<?php endif; ?>
				<a href="<?php echo esc_url( $business_email_url ); ?>"><?php echo esc_html( $business_email ); ?></a>
			</div>
		</div>
	</section>

	<?php if ( defined( 'ANSTAHL_RECAPTCHA_SITE_KEY' ) && ANSTAHL_RECAPTCHA_SITE_KEY ) : ?>
		<script src="https://www.google.com/recaptcha/api.js?render=<?php echo esc_attr( ANSTAHL_RECAPTCHA_SITE_KEY ); ?>" async defer></script>
		<script>
			window.addEventListener('load', function () {
				if (!window.grecaptcha) {
					return;
				}
				window.grecaptcha.ready(function () {
					window.grecaptcha.execute('<?php echo esc_js( ANSTAHL_RECAPTCHA_SITE_KEY ); ?>', { action: 'contact_submit' }).then(function (token) {
						document.querySelectorAll('.contact-recaptcha-token').forEach(function (field) {
							field.value = token;
						});
					});
				});
			});
		</script>
	<?php endif; ?>

	<section class="section section--cta contact-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title"><?php esc_html_e( 'Discuss Your Next Project', 'anstahl-engineering' ); ?></h2>
			<p class="section--cta__desc"><?php esc_html_e( 'Connect with our engineering team to explore technical requirements, product inquiries, project opportunities, and industrial collaboration.', 'anstahl-engineering' ); ?></p>
			<div class="section--cta__actions">
				<a class="btn btn--white btn--lg" href="<?php echo esc_url( $rfq_url ); ?>" aria-label="<?php esc_attr_e( 'Go to the RFQ form', 'anstahl-engineering' ); ?>">
					<span><?php esc_html_e( 'Start RFQ Process', 'anstahl-engineering' ); ?></span>
				</a>
				<a class="btn btn--secondary btn--lg" href="#contact-inquiry" aria-label="<?php esc_attr_e( 'Contact the Anstahl team', 'anstahl-engineering' ); ?>">
					<span><?php esc_html_e( 'Contact Our Team', 'anstahl-engineering' ); ?></span>
				</a>
			</div>
		</div>
	</section>
</article>

<?php
get_footer();
