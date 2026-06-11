<?php
/**
 * Template Name: Product Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$product_slug = get_post_field( 'post_name', get_queried_object_id() );
$product      = anstahl_get_product_detail( $product_slug );

if ( ! $product ) :
	?>
	<section class="section section--bg product-detail product-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Product Detail', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Product Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This product detail template supports THORNOJ, ORMOS, and RAGNVERN page slugs.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'products' ),
				'label' => __( 'Back to Products', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'product-detail--' . sanitize_html_class( $product['accent'] );
?>

<article class="product-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="product-detail-hero" aria-labelledby="product-detail-title">
		<div class="product-detail-hero__media">
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
		<div class="product-detail-hero__overlay" aria-hidden="true"></div>
		<div class="container product-detail-hero__content">
			<div class="product-detail-hero__icon" aria-hidden="true">
				<?php anstahl_icon( $product['icon'] ); ?>
			</div>
			<p class="overline"><?php echo esc_html( $product['brand_positioning'] ); ?></p>
			<h1 id="product-detail-title" class="product-detail-hero__title">
				<?php echo esc_html( $product['name'] ); ?>
			</h1>
			<p class="product-detail-hero__desc">
				<?php echo esc_html( $product['overview'] ); ?>
			</p>
			<div class="product-detail-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $product['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'products' ),
					'label' => __( 'Back to Products', 'anstahl-engineering' ),
					'style' => 'secondary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface product-detail-overview" aria-labelledby="product-overview-title">
		<div class="container product-detail-overview__grid">
			<div>
				<p class="overline"><?php esc_html_e( 'Overview', 'anstahl-engineering' ); ?></p>
				<h2 id="product-overview-title">
					<?php
					printf(
						/* translators: %s: product name. */
						esc_html__( '%s Product Platform', 'anstahl-engineering' ),
						esc_html( $product['name'] )
					);
					?>
				</h2>
			</div>
			<div class="product-detail-overview__copy">
				<p><?php echo esc_html( $product['overview'] ); ?></p>
				<p><?php esc_html_e( 'Each solution is developed with application-specific engineering, material selection, and operational reliability in mind—supporting safer, more efficient, and more sustainable industrial performance.', 'anstahl-engineering' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section section--bg product-detail-capabilities" aria-labelledby="product-capabilities-title">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Capabilities', 'anstahl-engineering' ),
				'title'       => __( 'Engineering Capability', 'anstahl-engineering' ),
				'description' => __( 'Focused capability areas designed around real industrial operating conditions.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="product-detail-grid product-detail-grid--capabilities">
				<?php foreach ( $product['sections'] as $index => $section ) : ?>
					<article class="product-detail-card">
						<span class="product-detail-card__index">
							<?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?>
						</span>
						<h3 class="product-detail-card__title"><?php echo esc_html( $section ); ?></h3>
						<p class="product-detail-card__desc">
							<?php esc_html_e( 'Engineered to support reliability, maintainability, and long-term industrial performance.', 'anstahl-engineering' ); ?>
						</p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--surface product-detail-applications" aria-labelledby="product-applications-title">
		<div class="container product-detail-split">
			<div>
				<p class="overline"><?php esc_html_e( 'Applications', 'anstahl-engineering' ); ?></p>
				<h2 id="product-applications-title"><?php esc_html_e( 'Industrial Applications', 'anstahl-engineering' ); ?></h2>
				<p class="product-detail-muted">
					<?php esc_html_e( 'Designed for equipment and systems operating in demanding industrial environments where uptime, safety, and efficiency are critical.', 'anstahl-engineering' ); ?>
				</p>
			</div>
			<ul class="product-detail-application-list">
				<?php foreach ( $product['applications'] as $application ) : ?>
					<li><?php echo esc_html( $application ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section--bg product-detail-highlights" aria-labelledby="product-highlights-title">
		<div class="container">
			<?php
			anstahl_section_header( array(
				'overline'    => __( 'Technical Highlights', 'anstahl-engineering' ),
				'title'       => __( 'Technical Capability', 'anstahl-engineering' ),
				'description' => __( 'Practical engineering value supported by product knowledge, field experience, and application review.', 'anstahl-engineering' ),
				'align'       => 'center',
			) );
			?>
			<div class="product-detail-grid product-detail-grid--highlights">
				<?php foreach ( $product['technical_highlights'] as $highlight ) : ?>
					<article class="product-detail-highlight">
						<div class="product-detail-highlight__mark" aria-hidden="true"></div>
						<p><?php echo esc_html( $highlight ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--cta product-detail-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title">
				<?php echo esc_html( $product['cta'] ); ?>
			</h2>
			<p class="section--cta__desc">
				<?php esc_html_e( 'Connect with the Anstahl engineering team for product selection, application review, and project-specific technical support.', 'anstahl-engineering' ); ?>
			</p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $product['cta'],
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
