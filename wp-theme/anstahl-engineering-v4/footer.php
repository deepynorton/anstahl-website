<?php
/**
 * Site footer.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

$privacy_page_url   = anstahl_get_page_url( 'privacy-policy' );
$terms_page_url     = anstahl_get_page_url( 'terms' );
$compliance_page_url = anstahl_get_page_url( 'compliance' );
?>

</main>

<footer class="site-footer" role="contentinfo">
	<div class="container site-footer__grid">
		<div class="site-footer__brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo" rel="home">
				<span class="site-footer__logo-text">ANSTAHL</span>
			</a>
			<p class="site-footer__tagline">
				<?php esc_html_e( 'Engineering-driven industrial solutions for a more efficient and sustainable future.', 'anstahl-engineering' ); ?>
			</p>
		</div>

		<nav class="site-footer__col" aria-label="<?php esc_attr_e( 'Company links', 'anstahl-engineering' ); ?>">
			<h2 class="site-footer__heading"><?php esc_html_e( 'Company', 'anstahl-engineering' ); ?></h2>
			<ul class="site-footer__links">
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'company' ) ); ?>"><?php esc_html_e( 'About', 'anstahl-engineering' ); ?></a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'approach' ) ); ?>"><?php esc_html_e( 'Approach', 'anstahl-engineering' ); ?></a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'innovation' ) ); ?>"><?php esc_html_e( 'Innovation', 'anstahl-engineering' ); ?></a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Careers', 'anstahl-engineering' ); ?></a></li>
			</ul>
		</nav>

		<nav class="site-footer__col" aria-label="<?php esc_attr_e( 'Product links', 'anstahl-engineering' ); ?>">
			<h2 class="site-footer__heading"><?php esc_html_e( 'Products', 'anstahl-engineering' ); ?></h2>
			<ul class="site-footer__links">
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'products' ) ); ?>#thornoj">THORNOJ</a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'products' ) ); ?>#ormos">ORMOS</a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'products' ) ); ?>#ragnvern">RAGNVERN</a></li>
			</ul>
		</nav>

		<nav class="site-footer__col" aria-label="<?php esc_attr_e( 'Contact links', 'anstahl-engineering' ); ?>">
			<h2 class="site-footer__heading"><?php esc_html_e( 'Contact', 'anstahl-engineering' ); ?></h2>
			<ul class="site-footer__links">
				<li><a href="mailto:info@anstahl.com">info@anstahl.com</a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Engineering Inquiry', 'anstahl-engineering' ); ?></a></li>
				<li><a href="<?php echo esc_url( anstahl_get_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Technical Consultation', 'anstahl-engineering' ); ?></a></li>
			</ul>
		</nav>
	</div>

	<div class="site-footer__bottom container">
		<p class="site-footer__copyright">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'anstahl-engineering' ); ?>
		</p>
		<ul class="site-footer__legal">
			<li><a href="<?php echo esc_url( $privacy_page_url ); ?>"><?php esc_html_e( 'Privacy', 'anstahl-engineering' ); ?></a></li>
			<li><a href="<?php echo esc_url( $terms_page_url ); ?>"><?php esc_html_e( 'Terms', 'anstahl-engineering' ); ?></a></li>
			<li><a href="<?php echo esc_url( $compliance_page_url ); ?>"><?php esc_html_e( 'Compliance', 'anstahl-engineering' ); ?></a></li>
		</ul>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
