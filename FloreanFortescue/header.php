<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div id="wrapper" class="hfeed">
    <div id="header">
        <img src="../wp/wp-content/themes/FloreanFortescue/img/FF_Title_Stacked.png" class="center">
        <header class="header-container">
            <div class="header-logo"> 
                 <img src="../wp/wp-content/themes/FloreanFortescue/img/FF_Logo_Design2.png">
            </div>
            <div id="masthead">
                <div class="nav-container">
                    <nav class="navbar navbar-default navbar-icecream">
                    <?php
                        wp_nav_menu(array(
                                'theme_location' => 'custom_menu',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav'
                            ));
                    ?>
                    <nav class="navbartwo navbar-default navbar-icecreamtwo">
                    <?php
                        wp_nav_menu(array(
                                'theme_location' => 'second_menu',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav'
                            ));
                    ?>
                </div> 
     			
            </div><!-- #masthead -->
        </header>
    </div><!-- #header -->
 
    <div id="main">