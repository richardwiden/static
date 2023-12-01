<?php
/**
 * The Header
 *
 * This is the template that displays all of the <head> section and everything up until
 * <div id="mk-theme-container">.
 *
 * @package Jupiter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<?php do_action( 'mk_theme_before_head' ); ?>
<head>
	<?php do_action( 'mk_theme_after_head_opening' ); ?>
	<?php wp_head(); ?>
	<?php do_action( 'mk_theme_before_head_closing' ); ?>
	<!-- Cookies added by ricwi -->
    	<link rel="stylesheet"
    		  href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v3.0.0-rc.17/dist/cookieconsent.css">
    <!-- Google tag (gtag.js) added by ricwi -->
    	<script type="text/plain" data-category="analytics"
    			src="https://www.googletagmanager.com/gtag/js?id=G-TGQWHW67WD"></script>
    	<script type="text/plain" data-category="analytics">
            console.log("load analytics");
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-TGQWHW67WD');
            console.log("analytics loaded");

    	</script>
    <!-- icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://docs.mimer.com/mimer-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://docs.mimer.com/mimer-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://docs.mimer.com/mimer-icons/favicon-16x16.png">
    <link rel="manifest" href="https://docs.mimer.com/mimer-icons/site.webmanifest">
    <link rel="mask-icon" href="https://docs.mimer.com/mimer-icons/safari-pinned-tab.svg" color="#f28c00">
    <link rel="shortcut icon" href="https://docs.mimer.com/mimer-icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="https://docs.mimer.com/mimer-icons/browserconfig.xml">
    <meta name="theme-color" content="#f28c00">
</head>

<body <?php body_class( mk_get_body_class( global_get_post_id() ) ); ?> <?php echo get_schema_markup( 'body' ); // WPCS: XSS OK. ?> data-adminbar="<?php echo esc_attr( is_admin_bar_showing() ); ?>">
	<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}

		do_action( 'mk_theme_after_body_opening' );

		// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.
		do_action( 'theme_after_body_tag_start' );
	?>
    <!-- Cookies added by ricwi -->
    	<script type="module" src="https://docs.mimer.com/cookieconsent-config.js"></script>

	<!-- Target for scroll anchors to achieve native browser bahaviour + possible enhancements like smooth scrolling -->
	<div id="top-of-page"></div>

		<div id="mk-boxed-layout">

			<div id="mk-theme-container" <?php echo is_header_transparent( 'class="trans-header"' ); ?>>

				<?php
				mk_get_header_view( 'styles', 'header-' . get_header_style() );
