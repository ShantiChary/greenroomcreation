<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenroomcreation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'greenroomcreation' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding header-row">
			<div class="header-logo">
				<!-- <a href="#"> -->
    				<img src="wp-content\themes\greenroomcreation\images/logo.png"/>
				<!-- </a>					 -->
			</div>
			
			<div id="social-links">
				<div class="link">
					<a href="https://www.linkedin.com/in/greenroomcreation/" target="_blank" rel="noopener"><p>LINKEDIN</p></a>
				</div>

				<div class="link">
					<a href="mailto:tataniya@greenroomcreation.com?subject=GRC%20Inquiry"><p>EMAIL</p></a>
				</div>
			</div>		


		</div><!-- .site-branding -->

	</header><!-- #masthead -->
