<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mobilizacja_biznesu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
		<div class="container">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/template/img/logo.svg" alt="Mobilizacja biznesu" /></a>
        <nav class="navbar navbar-expand-lg py-0 navbar-dark" id="mainNav">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?php echo get_template_directory_uri() ?>/template/img/hamburger.svg" alt="hamburger menu">
          </button>
          <?php
          wp_nav_menu([
            'menu'            => 'menu-1',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarResponsive',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav ml-auto my-2 my-lg-0',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          ]);
          ?>
		  <a href="#" class="button download"><?php echo $GLOBALS['cgv']['download'] ?></a>
        </nav>
		</div>
	</header>
