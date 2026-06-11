<?php
/**
 * Template Name: Case Study Detail
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

get_header();

$case_slug = get_post_field( 'post_name', get_queried_object_id() );
$case      = anstahl_get_case_study( $case_slug );

if ( ! $case ) :
	?>
	<section class="section section--bg case-study-detail case-study-detail--missing">
		<div class="container container--narrow">
			<p class="overline"><?php esc_html_e( 'Case Study', 'anstahl-engineering' ); ?></p>
			<h1><?php esc_html_e( 'Case Study Not Found', 'anstahl-engineering' ); ?></h1>
			<p><?php esc_html_e( 'This template supports Anstahl flagship engineering case study slugs.', 'anstahl-engineering' ); ?></p>
			<?php
			anstahl_button( array(
				'url'   => anstahl_get_page_url( 'projects' ),
				'label' => __( 'Back to Projects', 'anstahl-engineering' ),
				'style' => 'primary',
			) );
			?>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;

$accent_class = 'case-study-detail--' . sanitize_html_class( $case['accent'] );
?>

<article class="case-study-detail <?php echo esc_attr( $accent_class ); ?>">
	<section class="case-study-hero" aria-labelledby="case-study-title">
		<div class="container case-study-hero__content">
			<div class="case-study-hero__icon" aria-hidden="true"><?php anstahl_icon( $case['icon'] ); ?></div>
			<p class="overline"><?php echo esc_html( $case['overline'] ); ?></p>
			<h1 id="case-study-title"><?php echo esc_html( $case['title'] ); ?></h1>
			<p><?php echo esc_html( $case['hero'] ); ?></p>
			<div class="case-study-hero__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $case['cta'],
					'style' => 'primary',
					'size'  => 'lg',
				) );
				?>
			</div>
		</div>
	</section>

	<section class="section section--surface">
		<div class="container case-study-narrative-grid">
			<?php
			$narrative = array(
				__( 'Background', 'anstahl-engineering' )             => $case['background'],
				__( 'Challenge', 'anstahl-engineering' )              => $case['challenge'],
				__( 'Engineering Assessment', 'anstahl-engineering' ) => $case['assessment'],
				__( 'Solution', 'anstahl-engineering' )               => $case['solution'],
				__( 'Implementation', 'anstahl-engineering' )         => $case['implementation'],
				__( 'Business Impact', 'anstahl-engineering' )        => $case['impact'],
			);
			foreach ( $narrative as $heading => $copy ) :
				?>
				<article class="case-study-panel">
					<p class="overline"><?php echo esc_html( $heading ); ?></p>
					<h2><?php echo esc_html( $heading ); ?></h2>
					<p><?php echo esc_html( $copy ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section section--bg">
		<div class="container case-study-three">
			<article class="case-study-panel">
				<p class="overline"><?php esc_html_e( 'Methodology', 'anstahl-engineering' ); ?></p>
				<h2><?php esc_html_e( 'Methodology', 'anstahl-engineering' ); ?></h2>
				<ol class="case-study-list case-study-list--numbered">
					<?php foreach ( $case['methodology'] as $index => $item ) : ?>
						<li><span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span><p><?php echo esc_html( $item ); ?></p></li>
					<?php endforeach; ?>
				</ol>
			</article>
			<article class="case-study-panel">
				<p class="overline"><?php esc_html_e( 'Results', 'anstahl-engineering' ); ?></p>
				<h2><?php esc_html_e( 'Results', 'anstahl-engineering' ); ?></h2>
				<ul class="case-study-list">
					<?php foreach ( $case['results'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</article>
			<article class="case-study-panel">
				<p class="overline"><?php esc_html_e( 'Lessons Learned', 'anstahl-engineering' ); ?></p>
				<h2><?php esc_html_e( 'Lessons Learned', 'anstahl-engineering' ); ?></h2>
				<ul class="case-study-list">
					<?php foreach ( $case['lessons'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</article>
		</div>
	</section>

	<section class="section section--cta case-study-cta">
		<div class="container section--cta__inner">
			<h2 class="section--cta__title"><?php echo esc_html( $case['cta'] ); ?></h2>
			<p class="section--cta__desc"><?php esc_html_e( 'Submit an RFQ or engineering assessment request through the Anstahl RFQ Center.', 'anstahl-engineering' ); ?></p>
			<div class="section--cta__actions">
				<?php
				anstahl_button( array(
					'url'   => anstahl_get_page_url( 'contact' ),
					'label' => $case['cta'],
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
