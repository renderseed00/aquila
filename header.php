<?php
/**
 *Header template.
 *
 *@package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'hello-class' ); ?>>

<?php 
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div class="site" id="page">
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'template-parts/header/nav' ); ?>
	</header>
	<div class="site-content" id="content">
		
