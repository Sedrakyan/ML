<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ml
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="preloader">
    <div class="loader">&nbsp;</div>
</div>
<?php if (defined('FW') && fw_get_db_settings_option('scroll_to_top') == 'on'):?>
<a class="scrollToTop" href="#" style="display: none;"><i class="fa fa-angle-double-up"></i></a>
<?php endif; ?>
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?= defined('FW') && fw_get_db_settings_option('logo') ? fw_get_db_settings_option('logo')['url'] : get_template_directory_uri().'/images/logo.png'?>" alt="logo">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php
                if (is_front_page() && is_home()) {
                    wp_nav_menu( array(
                        'menu_class' => 'nav navbar-nav main-nav menu-scroll',
                        'menu' => 'single-blog-menu',
                        'menu_id'        => 'top-menu',
                        'container'      => 'ul',
                    ) );
                } elseif (is_front_page()) {
                    wp_nav_menu( array(
                        'menu_class' => 'nav navbar-nav main-nav menu-scroll',
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'top-menu',
                        'container'      => 'ul',
                    ) );
                } elseif(is_404() || (is_search() && !have_posts())){
                    wp_nav_menu( array(
                        'menu_class' => 'nav navbar-nav main-nav menu-scroll',
                        'menu' => '404-menu',
                        'menu_id'        => 'top-menu',
                        'container'      => 'ul',
                    ) );
                } else {
                    wp_nav_menu( array(
                        'menu_class' => 'nav navbar-nav main-nav menu-scroll',
                        'menu' => 'single-blog-menu',
                        'menu_id'        => 'top-menu',
                        'container'      => 'ul',
                    ) );
                }
                ?>
            </div><!--/.nav-collapse -->
            <div class="search-area">
                <form id="header-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input id="search" name="s"  value="<?php echo get_search_query(); ?>" type="text" placeholder="Search ...">
                    <input id="search_submit" value="Researcher" type="submit">
                </form>
            </div>
        </div>
    </nav><!-- #site-navigation -->
</section>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ml' ); ?></a>
	<div id="content" class="site-content">