<?php
/**
 * Template Name: Contact
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

anstahl_page_hero( array(
	'overline'    => __( 'Get in Touch', 'anstahl-engineering' ),
	'title'       => __( "Let's Start the Conversation", 'anstahl-engineering' ),
	'description' => __( 'Connect with our engineering team to discuss your project, product requirements, or partnership opportunity.', 'anstahl-engineering' ),
) );
?>

<section class="section section--surface">
	<div class="container">
		<div class="contact-grid">
			<div class="contact-info">
				<h2><?php esc_html_e( 'Office Information', 'anstahl-engineering' ); ?></h2>
				<address class="contact-info__address">
					<strong><?php esc_html_e( 'PT Anstahl Engineering Asia', 'anstahl-engineering' ); ?></strong><br>
					<?php esc_html_e( 'Indonesia', 'anstahl-engineering' ); ?>
				</address>
				<ul class="contact-info__list">
					<li>
						<strong><?php esc_html_e( 'General Inquiries', 'anstahl-engineering' ); ?></strong><br>
						<a href="mailto:info@anstahl.com">info@anstahl.com</a>
					</li>
					<li>
						<strong><?php esc_html_e( 'Engineering Support', 'anstahl-engineering' ); ?></strong><br>
						<a href="mailto:engineering@anstahl.com">engineering@anstahl.com</a>
					</li>
					<li>
						<strong><?php esc_html_e( 'Partnerships', 'anstahl-engineering' ); ?></strong><br>
						<a href="mailto:partnerships@anstahl.com">partnerships@anstahl.com</a>
					</li>
					<li>
						<strong><?php esc_html_e( 'Business Hours', 'anstahl-engineering' ); ?></strong><br>
						<?php esc_html_e( 'Monday – Friday: 08:00 – 17:00 (WIB)', 'anstahl-engineering' ); ?>
					</li>
				</ul>
			</div>

			<div class="contact-form-wrap">
				<h2><?php esc_html_e( 'Engineering Inquiry', 'anstahl-engineering' ); ?></h2>
				<p class="contact-form__intro">
					<?php esc_html_e( 'We aim to respond to all engineering inquiries within two business days.', 'anstahl-engineering' ); ?>
				</p>
				<form class="contact-form" method="post" action="<?php echo esc_url( anstahl_get_page_url( 'contact' ) ); ?>">
					<div class="form-row">
						<label for="contact-name"><?php esc_html_e( 'Full Name', 'anstahl-engineering' ); ?> <span aria-hidden="true">*</span></label>
						<input type="text" id="contact-name" name="contact_name" required autocomplete="name">
					</div>
					<div class="form-row">
						<label for="contact-company"><?php esc_html_e( 'Company', 'anstahl-engineering' ); ?> <span aria-hidden="true">*</span></label>
						<input type="text" id="contact-company" name="contact_company" required autocomplete="organization">
					</div>
					<div class="form-row">
						<label for="contact-email"><?php esc_html_e( 'Email', 'anstahl-engineering' ); ?> <span aria-hidden="true">*</span></label>
						<input type="email" id="contact-email" name="contact_email" required autocomplete="email">
					</div>
					<div class="form-row">
						<label for="contact-phone"><?php esc_html_e( 'Phone', 'anstahl-engineering' ); ?></label>
						<input type="tel" id="contact-phone" name="contact_phone" autocomplete="tel">
					</div>
					<div class="form-row">
						<label for="contact-type"><?php esc_html_e( 'Inquiry Type', 'anstahl-engineering' ); ?></label>
						<select id="contact-type" name="contact_type">
							<option value="engineering"><?php esc_html_e( 'Engineering Inquiry', 'anstahl-engineering' ); ?></option>
							<option value="technical"><?php esc_html_e( 'Technical Consultation', 'anstahl-engineering' ); ?></option>
							<option value="partnership"><?php esc_html_e( 'Partnership Inquiry', 'anstahl-engineering' ); ?></option>
							<option value="general"><?php esc_html_e( 'General', 'anstahl-engineering' ); ?></option>
						</select>
					</div>
					<div class="form-row">
						<label for="contact-message"><?php esc_html_e( 'Message', 'anstahl-engineering' ); ?> <span aria-hidden="true">*</span></label>
						<textarea id="contact-message" name="contact_message" rows="6" required></textarea>
					</div>
					<button class="btn btn--primary btn--block" type="submit">
						<?php esc_html_e( 'Submit Inquiry', 'anstahl-engineering' ); ?>
					</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
