<?php
/**
 * Anstahl Engineering V4 theme functions.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

define( 'ANSTAHL_VERSION', '4.0.0' );
define( 'ANSTAHL_DIR', get_template_directory() );
define( 'ANSTAHL_URI', get_template_directory_uri() );

require_once ANSTAHL_DIR . '/inc/theme-data.php';
require_once ANSTAHL_DIR . '/inc/template-tags.php';

/**
 * Theme setup.
 *
 * @return void
 */
function anstahl_setup() {
	load_theme_textdomain( 'anstahl-engineering', ANSTAHL_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 48,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'anstahl-engineering' ),
		'footer'  => __( 'Footer Navigation', 'anstahl-engineering' ),
	) );

	add_image_size( 'anstahl-card', 720, 405, true );
	add_image_size( 'anstahl-hero', 1920, 1080, true );
}
add_action( 'after_setup_theme', 'anstahl_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function anstahl_enqueue_assets() {
	wp_enqueue_style(
		'anstahl-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Rajdhani:wght@600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'anstahl-main',
		ANSTAHL_URI . '/assets/css/main.css',
		array( 'anstahl-fonts' ),
		ANSTAHL_VERSION
	);

	wp_enqueue_style(
		'anstahl-style',
		get_stylesheet_uri(),
		array( 'anstahl-main' ),
		ANSTAHL_VERSION
	);

	wp_enqueue_script(
		'anstahl-main',
		ANSTAHL_URI . '/assets/js/main.js',
		array(),
		ANSTAHL_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'anstahl_enqueue_assets' );

/**
 * Add defer to theme script.
 *
 * @param string $tag    Script tag.
 * @param string $handle Handle.
 * @return string
 */
function anstahl_defer_scripts( $tag, $handle ) {
	if ( 'anstahl-main' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'anstahl_defer_scripts', 10, 2 );

/**
 * Register widget areas.
 *
 * @return void
 */
function anstahl_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'anstahl-engineering' ),
		'id'            => 'footer-1',
		'description'   => __( 'Optional footer widget area.', 'anstahl-engineering' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget__title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'anstahl_widgets_init' );

/**
 * Custom excerpt length.
 *
 * @return int
 */
function anstahl_excerpt_length() {
	return 28;
}
add_filter( 'excerpt_length', 'anstahl_excerpt_length' );

/**
 * Custom excerpt more.
 *
 * @return string
 */
function anstahl_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'anstahl_excerpt_more' );

/**
 * Add skip link and body classes.
 *
 * @param array<string> $classes Body classes.
 * @return array<string>
 */
function anstahl_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'anstahl_body_classes' );

/**
 * Get current SEO slug.
 *
 * @return string
 */
function anstahl_get_current_seo_slug() {
	if ( is_front_page() ) {
		return 'home';
	}

	if ( is_singular() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );

		return $slug ? $slug : 'home';
	}

	return 'home';
}

/**
 * Set document title from SEO architecture.
 *
 * @param array<string, string> $parts Title parts.
 * @return array<string, string>
 */
function anstahl_filter_document_title_parts( $parts ) {
	if ( ! function_exists( 'anstahl_get_seo_meta' ) ) {
		return $parts;
	}

	$meta           = anstahl_get_seo_meta( anstahl_get_current_seo_slug() );
	$parts['title'] = $meta['title'];

	return $parts;
}
add_filter( 'document_title_parts', 'anstahl_filter_document_title_parts' );

/**
 * Output SEO meta tags and schema markup.
 *
 * @return void
 */
function anstahl_output_seo_meta() {
	if ( ! function_exists( 'anstahl_get_seo_meta' ) ) {
		return;
	}

	$slug      = anstahl_get_current_seo_slug();
	$meta      = anstahl_get_seo_meta( $slug );
	$url       = is_singular() ? get_permalink( get_queried_object_id() ) : home_url( '/' );
	$site_name = get_bloginfo( 'name' );
	$image     = anstahl_get_image_url( 'hero-turbine.svg' );
	$faq       = function_exists( 'anstahl_get_faq_for_slug' ) ? anstahl_get_faq_for_slug( $slug ) : array();
	$schemas   = array(
		array(
			'@context' => 'https://schema.org',
			'@type'    => 'Organization',
			'@id'      => home_url( '/#organization' ),
			'name'     => 'PT Anstahl Engineering Asia',
			'url'      => home_url( '/' ),
			'logo'     => $image,
			'image'    => $image,
			'areaServed' => array(
				array(
					'@type' => 'Country',
					'name'  => 'Indonesia',
				),
				array(
					'@type' => 'Place',
					'name'  => 'Asia',
				),
			),
			'knowsAbout' => array(
				'Industrial Engineering',
				'Manufacturing',
				'Mechanical Sealing Solutions',
				'Thermal Insulation Systems',
				'Energy Recovery Systems',
				'Engineering Consultancy',
				'Automation',
				'Maintenance Improvement',
			),
			'contactPoint' => array(
				'@type'       => 'ContactPoint',
				'contactType' => 'business inquiry',
				'email'       => 'info@anstahl.com',
				'areaServed'  => array( 'ID', 'Asia' ),
				'availableLanguage' => array( 'English', 'Indonesian' ),
			),
		),
		array(
			'@context' => 'https://schema.org',
			'@type'    => 'LocalBusiness',
			'@id'      => home_url( '/#localbusiness' ),
			'name'     => 'PT Anstahl Engineering Asia',
			'url'      => home_url( '/' ),
			'image'    => $image,
			'email'    => 'info@anstahl.com',
			'address'  => array(
				'@type'          => 'PostalAddress',
				'addressCountry' => 'ID',
			),
			'priceRange' => '$$',
		),
		array(
			'@context' => 'https://schema.org',
			'@type'    => 'WebSite',
			'@id'      => home_url( '/#website' ),
			'name'     => $site_name,
			'url'      => home_url( '/' ),
			'publisher' => array(
				'@id' => home_url( '/#organization' ),
			),
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => home_url( '/?s={search_term_string}' ),
				'query-input' => 'required name=search_term_string',
			),
		),
		array(
			'@context'    => 'https://schema.org',
			'@type'       => 'WebPage',
			'@id'         => trailingslashit( $url ) . '#webpage',
			'name'        => $meta['title'],
			'description' => $meta['description'],
			'url'         => $url,
			'inLanguage'  => get_bloginfo( 'language' ),
			'isPartOf'    => array(
				'@id' => home_url( '/#website' ),
			),
			'primaryImageOfPage' => array(
				'@type' => 'ImageObject',
				'url'   => $image,
			),
			'publisher'   => array(
				'@id' => home_url( '/#organization' ),
			),
		),
		array(
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array(
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => __( 'Home', 'anstahl-engineering' ),
					'item'     => home_url( '/' ),
				),
				array(
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => $meta['title'],
					'item'     => $url,
				),
			),
		),
	);

	if ( 'contact' === $slug ) {
		$schemas[] = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'ContactPage',
			'@id'         => trailingslashit( $url ) . '#contactpage',
			'name'        => $meta['title'],
			'description' => $meta['description'],
			'url'         => $url,
			'mainEntity'  => array(
				'@id' => home_url( '/#organization' ),
			),
		);
	}

	if ( in_array( $slug, array( 'thornoj', 'ormos', 'ragnvern' ), true ) ) {
		$brand_name = array(
			'thornoj'  => 'THORNOJ',
			'ormos'    => 'ORMOS',
			'ragnvern' => 'RAGNVERN',
		);
		$schemas[] = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Product',
			'@id'         => trailingslashit( $url ) . '#product',
			'name'        => $meta['title'],
			'description' => $meta['description'],
			'image'       => $image,
			'category'    => 'Industrial Engineering Product',
			'brand'       => array(
				'@type' => 'Brand',
				'name'  => $brand_name[ $slug ],
			),
			'offers'      => array(
				'@type'         => 'Offer',
				'url'           => $url,
				'availability'  => 'https://schema.org/InStock',
				'priceCurrency' => 'IDR',
				'price'         => '0',
				'priceValidUntil' => gmdate( 'Y-m-d', strtotime( '+1 year' ) ),
				'seller'        => array(
					'@id' => home_url( '/#organization' ),
				),
			),
		);
	}

	if ( in_array( $slug, array( 'parts-design-improvement', 'energy-recovery-systems', 'boiler-feed-pump-solutions', 'hybrid-waste-treatment-systems' ), true ) ) {
		$schemas[] = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Project',
			'name'        => $meta['title'],
			'description' => $meta['description'],
			'url'         => $url,
			'image'       => $image,
			'provider'    => array(
				'@id' => home_url( '/#organization' ),
			),
		);
	}

	if ( function_exists( 'anstahl_get_case_study' ) && anstahl_get_case_study( $slug ) ) {
		$case = anstahl_get_case_study( $slug );
		$schemas[] = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Project',
			'@id'         => trailingslashit( $url ) . '#case-study',
			'name'        => $case['title'],
			'description' => $case['hero'],
			'url'         => $url,
			'image'       => $image,
			'provider'    => array(
				'@id' => home_url( '/#organization' ),
			),
			'about'       => array( $case['challenge'], $case['solution'], $case['impact'] ),
		);
	}

	if ( in_array( $slug, array( 'manufacturing', 'renewable-energy', 'automation', 'data-engineering', 'system-application', 'maintenance-improvement', 'multidisciplinary-engineering-consultancy', 'biomedical-chemical-rd' ), true ) ) {
		$schemas[] = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Service',
			'@id'         => trailingslashit( $url ) . '#service',
			'name'        => $meta['title'],
			'description' => $meta['description'],
			'provider'    => array(
				'@id' => home_url( '/#organization' ),
			),
			'areaServed'  => array(
				'@type' => 'Country',
				'name'  => 'Indonesia',
			),
		);
	}

	if ( 'management' === $slug ) {
		$schemas[] = array(
			'@context' => 'https://schema.org',
			'@type'    => 'Person',
			'@id'      => trailingslashit( $url ) . '#management',
			'name'     => 'Management Team',
			'jobTitle' => 'Engineering Management',
			'worksFor' => array(
				'@id' => home_url( '/#organization' ),
			),
		);
	}

	if ( ! empty( $faq ) ) {
		$schemas[] = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'@id'        => trailingslashit( $url ) . '#faq',
			'mainEntity' => array_map(
				static function ( $item ) {
					return array(
						'@type'          => 'Question',
						'name'           => $item['question'],
						'acceptedAnswer' => array(
							'@type' => 'Answer',
							'text'  => $item['answer'],
						),
					);
				},
				$faq
			),
		);
	}
	?>
	<link rel="canonical" href="<?php echo esc_url( $url ); ?>">
	<meta name="description" content="<?php echo esc_attr( $meta['description'] ); ?>">
	<meta name="keywords" content="<?php echo esc_attr( implode( ', ', array_merge( array( $meta['keyword'] ), $meta['secondary'] ) ) ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
	<meta property="og:title" content="<?php echo esc_attr( $meta['og_title'] ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $meta['og_description'] ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $meta['og_title'] ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $meta['og_description'] ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
	<?php foreach ( $schemas as $schema ) : ?>
		<script type="application/ld+json"><?php echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></script>
	<?php endforeach; ?>
	<?php
}
add_action( 'wp_head', 'anstahl_output_seo_meta', 5 );

/**
 * Allow essential robots directives.
 *
 * @param string $output Robots output.
 * @param bool   $public Whether site is public.
 * @return string
 */
function anstahl_robots_txt( $output, $public ) {
	if ( ! $public ) {
		return $output;
	}

	$output .= "Allow: /wp-content/themes/anstahl-engineering-v4/assets/\n";
	$output .= 'Sitemap: ' . esc_url_raw( home_url( '/wp-sitemap.xml' ) ) . "\n";

	return $output;
}
add_filter( 'robots_txt', 'anstahl_robots_txt', 10, 2 );

/**
 * Add performance resource hints.
 *
 * @param array<int, string> $urls          Resource hint URLs.
 * @param string             $relation_type Relation type.
 * @return array<int, string>
 */
function anstahl_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		foreach ( array( 'https://fonts.googleapis.com', 'https://fonts.gstatic.com' ) as $url ) {
			if ( ! in_array( $url, $urls, true ) ) {
				$urls[] = $url;
			}
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'anstahl_resource_hints', 10, 2 );

/**
 * Add security headers for theme-rendered pages.
 *
 * @return void
 */
function anstahl_security_headers() {
	if ( headers_sent() ) {
		return;
	}

	header( 'X-Content-Type-Options: nosniff' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );
}
add_action( 'send_headers', 'anstahl_security_headers' );

/**
 * Output optional analytics integrations when constants are configured.
 *
 * @return void
 */
function anstahl_output_tracking_scripts() {
	if ( defined( 'ANSTAHL_GTM_ID' ) && ANSTAHL_GTM_ID ) :
		?>
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo esc_js( ANSTAHL_GTM_ID ); ?>');
		</script>
		<?php
	endif;

	if ( defined( 'ANSTAHL_GA4_ID' ) && ANSTAHL_GA4_ID ) :
		?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( ANSTAHL_GA4_ID ); ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '<?php echo esc_js( ANSTAHL_GA4_ID ); ?>', { anonymize_ip: true });
		</script>
		<?php
	endif;

	if ( defined( 'ANSTAHL_LINKEDIN_PARTNER_ID' ) && ANSTAHL_LINKEDIN_PARTNER_ID ) :
		?>
		<script>
			_linkedin_partner_id = "<?php echo esc_js( ANSTAHL_LINKEDIN_PARTNER_ID ); ?>";
			window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
			window._linkedin_data_partner_ids.push(_linkedin_partner_id);
		</script>
		<script>
			(function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript"; b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk);
		</script>
		<?php
	endif;
}
add_action( 'wp_head', 'anstahl_output_tracking_scripts', 20 );

/**
 * Output optional GTM noscript fallback.
 *
 * @return void
 */
function anstahl_output_gtm_noscript() {
	if ( ! defined( 'ANSTAHL_GTM_ID' ) || ! ANSTAHL_GTM_ID ) {
		return;
	}
	?>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr( ANSTAHL_GTM_ID ); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<?php
}
add_action( 'wp_body_open', 'anstahl_output_gtm_noscript', 1 );

/**
 * Verify optional reCAPTCHA token.
 *
 * @param string $token reCAPTCHA response token.
 * @return bool
 */
function anstahl_verify_recaptcha( $token ) {
	if (
		! defined( 'ANSTAHL_RECAPTCHA_SECRET' ) ||
		! ANSTAHL_RECAPTCHA_SECRET ||
		! defined( 'ANSTAHL_RECAPTCHA_SITE_KEY' ) ||
		! ANSTAHL_RECAPTCHA_SITE_KEY
	) {
		return true;
	}

	if ( ! $token ) {
		return false;
	}

	$response = wp_remote_post(
		'https://www.google.com/recaptcha/api/siteverify',
		array(
			'timeout' => 8,
			'body'    => array(
				'secret'   => ANSTAHL_RECAPTCHA_SECRET,
				'response' => $token,
				'remoteip' => isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '',
			),
		)
	);

	if ( is_wp_error( $response ) ) {
		return false;
	}

	$body = json_decode( wp_remote_retrieve_body( $response ), true );

	return ! empty( $body['success'] );
}

/**
 * Redirect contact form with status.
 *
 * @param string $status Status key.
 * @return void
 */
function anstahl_contact_redirect( $status ) {
	wp_safe_redirect( add_query_arg( 'contact_status', rawurlencode( $status ), anstahl_get_page_url( 'contact' ) ) . '#contact-form' );
	exit;
}

/**
 * Process contact form submissions.
 *
 * @return void
 */
function anstahl_handle_contact_form() {
	if ( 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		anstahl_contact_redirect( 'invalid_method' );
	}

	if (
		empty( $_POST['anstahl_contact_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['anstahl_contact_nonce'] ) ), 'anstahl_contact_submit' )
	) {
		anstahl_contact_redirect( 'security_failed' );
	}

	$honeypot = isset( $_POST['contact_website'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_website'] ) ) : '';
	if ( '' !== $honeypot ) {
		anstahl_contact_redirect( 'spam_detected' );
	}

	$ip        = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
	$rate_key  = 'anstahl_contact_' . md5( $ip );
	$attempts  = (int) get_transient( $rate_key );
	if ( $attempts >= 3 ) {
		anstahl_contact_redirect( 'rate_limited' );
	}
	set_transient( $rate_key, $attempts + 1, 15 * MINUTE_IN_SECONDS );

	$recaptcha_token = isset( $_POST['g-recaptcha-response'] ) ? sanitize_text_field( wp_unslash( $_POST['g-recaptcha-response'] ) ) : '';
	if ( ! anstahl_verify_recaptcha( $recaptcha_token ) ) {
		anstahl_contact_redirect( 'recaptcha_failed' );
	}

	$fields = array(
		'name'         => isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '',
		'company'      => isset( $_POST['contact_company'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_company'] ) ) : '',
		'position'     => isset( $_POST['contact_position'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_position'] ) ) : '',
		'email'        => isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '',
		'phone'        => isset( $_POST['contact_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_phone'] ) ) : '',
		'industry'     => isset( $_POST['contact_industry'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_industry'] ) ) : '',
		'inquiry_type' => isset( $_POST['contact_inquiry_type'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_inquiry_type'] ) ) : '',
		'message'      => isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '',
		'consent'      => isset( $_POST['contact_consent'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_consent'] ) ) : '',
	);

	if (
		! $fields['name'] ||
		! $fields['company'] ||
		! is_email( $fields['email'] ) ||
		! $fields['industry'] ||
		! $fields['inquiry_type'] ||
		! $fields['message'] ||
		! $fields['consent']
	) {
		anstahl_contact_redirect( 'validation_failed' );
	}

	$routes = array(
		'rfq'          => 'engineering@anstahl.com',
		'assessment'   => 'engineering@anstahl.com',
		'consultation' => 'engineering@anstahl.com',
		'partnership'  => 'partnerships@anstahl.com',
		'product'      => 'engineering@anstahl.com',
	);
	$to          = $routes[ $fields['inquiry_type'] ] ?? 'info@anstahl.com';
	$attachments = array();

	if ( ! empty( $_FILES['contact_attachment']['name'] ) ) {
		$attachment = $_FILES['contact_attachment'];
		$max_size   = 8 * MB_IN_BYTES;

		if ( ! empty( $attachment['error'] ) || empty( $attachment['size'] ) || $attachment['size'] > $max_size ) {
			anstahl_contact_redirect( 'validation_failed' );
		}

		$allowed_mimes = array(
			'pdf'  => 'application/pdf',
			'doc'  => 'application/msword',
			'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
			'jpg'  => 'image/jpeg',
			'jpeg' => 'image/jpeg',
			'png'  => 'image/png',
			'zip'  => 'application/zip',
		);

		require_once ABSPATH . 'wp-admin/includes/file.php';

		$uploaded = wp_handle_upload(
			$attachment,
			array(
				'test_form' => false,
				'mimes'     => $allowed_mimes,
			)
		);

		if ( empty( $uploaded['file'] ) || ! empty( $uploaded['error'] ) ) {
			anstahl_contact_redirect( 'validation_failed' );
		}

		$attachments[] = $uploaded['file'];
	}

	$body = sprintf(
		"Name: %s\nCompany: %s\nPosition: %s\nEmail: %s\nPhone: %s\nIndustry: %s\nInquiry Type: %s\n\nMessage:\n%s\n",
		$fields['name'],
		$fields['company'],
		$fields['position'],
		$fields['email'],
		$fields['phone'],
		$fields['industry'],
		$fields['inquiry_type'],
		$fields['message']
	);
	$sent   = wp_mail(
		$to,
		sprintf(
			/* translators: %s: inquiry type. */
			__( 'Anstahl Website Inquiry: %s', 'anstahl-engineering' ),
			$fields['inquiry_type']
		),
		$body,
		array(
			'Reply-To: ' . $fields['name'] . ' <' . $fields['email'] . '>',
		),
		$attachments
	);

	foreach ( $attachments as $attachment_path ) {
		if ( file_exists( $attachment_path ) ) {
			wp_delete_file( $attachment_path );
		}
	}

	anstahl_contact_redirect( $sent ? 'success' : 'mail_failed' );
}
add_action( 'admin_post_nopriv_anstahl_contact_submit', 'anstahl_handle_contact_form' );
add_action( 'admin_post_anstahl_contact_submit', 'anstahl_handle_contact_form' );

/**
 * Disable emoji scripts for performance.
 *
 * @return void
 */
function anstahl_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'anstahl_disable_emojis' );
