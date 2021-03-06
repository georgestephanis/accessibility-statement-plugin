<?php

$have_approaches            = isset( $approaches ) && count( $approaches );
$have_additional_approaches = isset( $additional_approaches ) && count( $additional_approaches );

if ( $have_approaches || $have_additional_approaches ) : ?>

	<h2><?php esc_html_e( 'Assessment approach', 'a11y-statement' ); ?></h2>

	<p><?php echo esc_html( $organisation ); ?> <?php esc_html_e( 'assessed the accessibility of' ); ?> <?php echo esc_html( $website_name ); ?> <?php esc_html_e( 'by the following approaches:', 'a11y-statement' ); ?></p>

	<ul>
		<?php foreach ( $approaches as $approach ) : ?>
			<li><?php echo esc_html( $approach ); ?></li>
		<?php endforeach; ?>
		<?php foreach ( $additional_approaches as $approach ) : ?>
			<li><?php echo esc_html( $approach ); ?></li>
		<?php endforeach; ?>
	</ul>

<?php endif; ?>
