<?php
/**
 * Template Name: Contact
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$contact = anstahl_get_contact_page_data();
$trust   = anstahl_get_enterprise_trust_layer();
$status  = isset( $_GET['contact_status'] ) ? sanitize_text_field( wp_unslash( $_GET['contact_status'] ) ) : '';
$notices = array(
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
		<div class="container contact-hero__content">
			<p class="overline"><?php echo esc_html( $contact['hero']['overline'] ); ?></p>
			<h1 id="contact-title" class="contact-hero__title"><?php echo esc_html( $contact['hero']['title'] ); ?></h1>
			<p class="contact-hero__desc"><?php echo esc_html( $contact['hero']['description'] ); ?></p>
			<div class="contact-hero__actions">
				<a class="btn btn--primary btn--lg" href="#contact-form">
					<span><?php echo esc_html( $contact['hero']['cta'] ); ?></span>
				</a>
			</div>
		</div>
	</section>

	<section class="section section--surface contact-channels">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Contact Channels', 'anstahl-engineering' ),
				'title'       => __( 'Route Your Inquiry Correctly', 'anstahl-engineering' ),
				'description' => __( 'Select the inquiry path that matches the technical or business context. This helps the team review the requirement with the right discipline.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="contact-channel-grid">
				<?php foreach ( $contact['channels'] as $channel ) : ?>
					<article class="contact-channel-card">
						<div class="contact-channel-card__icon" aria-hidden="true">
							<?php anstahl_icon( $channel['icon'] ); ?>
						</div>
						<h2><?php echo esc_html( $channel['title'] ); ?></h2>
						<dl>
							<dt><?php esc_html_e( 'Purpose', 'anstahl-engineering' ); ?></dt>
							<dd><?php echo esc_html( $channel['purpose'] ); ?></dd>
							<dt><?php esc_html_e( 'Expected Response Scope', 'anstahl-engineering' ); ?></dt>
							<dd><?php echo esc_html( $channel['response'] ); ?></dd>
							<dt><?php esc_html_e( 'Recommended Use', 'anstahl-engineering' ); ?></dt>
							<dd><?php echo esc_html( $channel['use'] ); ?></dd>
						</dl>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg contact-main" aria-labelledby="contact-form-title">
		<div class="container contact-main__grid">
			<aside class="contact-info-panel" aria-labelledby="contact-info-title">
				<p class="overline"><?php esc_html_e( 'Contact Information', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-info-title"><?php esc_html_e( 'Business Contact', 'anstahl-engineering' ); ?></h2>
				<dl class="contact-info-list">
					<?php foreach ( $contact['information'] as $item ) : ?>
						<div>
							<dt><?php echo esc_html( $item['label'] ); ?></dt>
							<dd>
								<?php if ( ! empty( $item['url'] ) ) : ?>
									<a href="<?php echo esc_url( $item['url'] ); ?>"><?php echo esc_html( $item['value'] ); ?></a>
								<?php else : ?>
									<?php echo esc_html( $item['value'] ); ?>
								<?php endif; ?>
							</dd>
						</div>
					<?php endforeach; ?>
				</dl>
			</aside>

			<div id="contact-form" class="contact-form-panel">
				<p class="overline"><?php esc_html_e( 'Inquiry Form', 'anstahl-engineering' ); ?></p>
				<h2 id="contact-form-title"><?php esc_html_e( 'Submit Engineering Inquiry', 'anstahl-engineering' ); ?></h2>
				<p class="contact-form__intro"><?php echo esc_html( $contact['form']['note'] ); ?></p>
				<?php if ( $status && isset( $notices[ $status ] ) ) : ?>
					<div class="contact-form-notice contact-form-notice--<?php echo 'success' === $status ? 'success' : 'error'; ?>" role="status">
						<?php echo esc_html( $notices[ $status ] ); ?>
					</div>
				<?php endif; ?>
				<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data" aria-describedby="contact-form-note">
					<input type="hidden" name="action" value="anstahl_contact_submit">
					<?php wp_nonce_field( 'anstahl_contact_submit', 'anstahl_contact_nonce' ); ?>
					<div class="form-row form-row--honeypot" aria-hidden="true">
						<label for="contact-website"><?php esc_html_e( 'Website', 'anstahl-engineering' ); ?></label>
						<input type="text" id="contact-website" name="contact_website" tabindex="-1" autocomplete="off">
					</div>
					<input type="hidden" id="contact-recaptcha-token" name="g-recaptcha-response" value="">
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
					<div class="contact-form__grid">
						<?php foreach ( $contact['form']['fields'] as $key => $field ) : ?>
							<?php
							$field_id = 'contact-' . sanitize_html_class( $key );
							$desc_id  = $field_id . '-desc';
							$error_id = $field_id . '-error';
							?>
							<div class="form-row form-row--<?php echo esc_attr( sanitize_html_class( $field['type'] ) ); ?>">
								<?php if ( 'checkbox' === $field['type'] ) : ?>
									<label class="form-checkbox" for="<?php echo esc_attr( $field_id ); ?>">
										<input
											type="checkbox"
											id="<?php echo esc_attr( $field_id ); ?>"
											name="<?php echo esc_attr( 'contact_' . $key ); ?>"
											<?php required( ! empty( $field['required'] ) ); ?>
											aria-describedby="<?php echo esc_attr( $desc_id . ' ' . $error_id ); ?>"
										>
										<span><?php echo esc_html( $field['label'] ); ?><?php echo ! empty( $field['required'] ) ? ' *' : ''; ?></span>
									</label>
								<?php else : ?>
									<label for="<?php echo esc_attr( $field_id ); ?>">
										<?php echo esc_html( $field['label'] ); ?><?php echo ! empty( $field['required'] ) ? ' *' : ''; ?>
									</label>
									<?php if ( 'select' === $field['type'] ) : ?>
										<select id="<?php echo esc_attr( $field_id ); ?>" name="<?php echo esc_attr( 'contact_' . $key ); ?>" <?php required( ! empty( $field['required'] ) ); ?> aria-describedby="<?php echo esc_attr( $desc_id . ' ' . $error_id ); ?>">
											<option value=""><?php esc_html_e( 'Select option', 'anstahl-engineering' ); ?></option>
											<?php foreach ( $field['options'] as $value => $label ) : ?>
												<option value="<?php echo esc_attr( $value ); ?>"><?php echo esc_html( $label ); ?></option>
											<?php endforeach; ?>
										</select>
									<?php elseif ( 'textarea' === $field['type'] ) : ?>
										<textarea id="<?php echo esc_attr( $field_id ); ?>" name="<?php echo esc_attr( 'contact_' . $key ); ?>" rows="7" <?php required( ! empty( $field['required'] ) ); ?> aria-describedby="<?php echo esc_attr( $desc_id . ' ' . $error_id ); ?>"></textarea>
									<?php else : ?>
										<input
											type="<?php echo esc_attr( $field['type'] ); ?>"
											id="<?php echo esc_attr( $field_id ); ?>"
											name="<?php echo esc_attr( 'contact_' . $key ); ?>"
											<?php required( ! empty( $field['required'] ) ); ?>
											<?php echo ! empty( $field['autocomplete'] ) ? 'autocomplete="' . esc_attr( $field['autocomplete'] ) . '"' : ''; ?>
											<?php echo ! empty( $field['accept'] ) ? 'accept="' . esc_attr( $field['accept'] ) . '"' : ''; ?>
											aria-describedby="<?php echo esc_attr( $desc_id . ' ' . $error_id ); ?>"
										>
									<?php endif; ?>
								<?php endif; ?>
								<p id="<?php echo esc_attr( $desc_id ); ?>" class="form-row__hint"><?php echo esc_html( $field['validation'] ); ?></p>
								<p id="<?php echo esc_attr( $error_id ); ?>" class="form-row__error" aria-live="polite"><?php echo esc_html( $field['error'] ); ?></p>
							</div>
						<?php endforeach; ?>
					</div>
					<button class="btn btn--primary btn--block" type="submit">
						<?php echo esc_html( $contact['form']['submit_label'] ); ?>
					</button>
				</form>
				<?php if ( defined( 'ANSTAHL_RECAPTCHA_SITE_KEY' ) && ANSTAHL_RECAPTCHA_SITE_KEY ) : ?>
					<script src="https://www.google.com/recaptcha/api.js?render=<?php echo esc_attr( ANSTAHL_RECAPTCHA_SITE_KEY ); ?>" async defer></script>
					<script>
						window.addEventListener('load', function () {
							if (!window.grecaptcha) {
								return;
							}
							window.grecaptcha.ready(function () {
								window.grecaptcha.execute('<?php echo esc_js( ANSTAHL_RECAPTCHA_SITE_KEY ); ?>', { action: 'contact_submit' }).then(function (token) {
									var field = document.getElementById('contact-recaptcha-token');
									if (field) {
										field.value = token;
									}
								});
							});
						});
					</script>
				<?php endif; ?>
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
						<h2><?php echo esc_html( $step['title'] ); ?></h2>
						<p><?php echo esc_html( $step['description'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="section section--bg contact-reasons">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Why Contact Anstahl', 'anstahl-engineering' ),
				'title'       => __( 'Engineering Context Before Commercial Response', 'anstahl-engineering' ),
				'description' => __( 'Anstahl reviews inquiries through technical relevance, operating context, and long-term industrial value.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="contact-reason-grid">
				<?php foreach ( $contact['reasons'] as $reason ) : ?>
					<article class="contact-reason-card">
						<div class="contact-reason-card__icon" aria-hidden="true">
							<?php anstahl_icon( $reason['icon'] ); ?>
						</div>
						<h2><?php echo esc_html( $reason['title'] ); ?></h2>
						<p><?php echo esc_html( $reason['description'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--surface contact-trust-layer">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Enterprise Trust Layer', 'anstahl-engineering' ),
				'title'       => __( 'Industrial Context Anstahl Is Built To Support', 'anstahl-engineering' ),
				'description' => __( 'The RFQ Center is supported by industry focus, engineering disciplines, operational commitments, and a structured delivery framework.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="trust-layer-grid">
				<?php foreach ( array( 'industries' => __( 'Industries Served', 'anstahl-engineering' ), 'disciplines' => __( 'Engineering Disciplines', 'anstahl-engineering' ), 'commitments' => __( 'Operational Commitments', 'anstahl-engineering' ), 'framework' => __( 'Engineering Delivery Framework', 'anstahl-engineering' ) ) as $group_key => $group_title ) : ?>
					<article class="trust-layer-card">
						<h2><?php echo esc_html( $group_title ); ?></h2>
						<ul>
							<?php foreach ( $trust[ $group_key ] as $item ) : ?>
								<li>
									<strong><?php echo esc_html( $item['title'] ); ?></strong>
									<span><?php echo esc_html( $item['description'] ); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--bg contact-eeat-layer">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'E-E-A-T Signals', 'anstahl-engineering' ),
				'title'       => __( 'Evidence-Based Engineering Practice', 'anstahl-engineering' ),
				'description' => __( 'Anstahl strengthens trust through methodology, technical review, governance, quality assurance, continuous improvement, and industrial collaboration.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="eeat-layer-grid">
				<?php foreach ( $trust['eeat'] as $item ) : ?>
					<article class="eeat-layer-card">
						<h2><?php echo esc_html( $item['title'] ); ?></h2>
						<p><?php echo esc_html( $item['description'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--cta contact-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title"><?php echo esc_html( $contact['cta']['title'] ); ?></h2>
			<p class="section--cta__desc"><?php echo esc_html( $contact['cta']['description'] ); ?></p>
			<div class="section--cta__actions">
				<a class="btn btn--white btn--lg" href="#contact-form">
					<span><?php echo esc_html( $contact['cta']['label'] ); ?></span>
				</a>
			</div>
		</div>
	</section>
</article>

<?php
get_footer();
