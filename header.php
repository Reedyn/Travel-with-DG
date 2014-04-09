<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '/', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/less/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
        
		<link rel="icon" href="<?php bloginfo('template_directory') ?>/favicons/favicon.ico" type="image/vnd.microsoft.icon">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon-152x152.png">
    </head>
    <body>
        
        <header class="main-header">
            <section class="cover">
                <div class="logotype">
                    <a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logotype.svg" alt="" id="main-logo" class="main-logo"></a>
                    <img src="<?php bloginfo('template_directory') ?>/img/main-menu-btn.svg" alt="" id="main-menu-toggle" class="main-menu-toggle">
                </div>
            </section>
            <section class="menu">
                <?php wp_nav_menu( array( 'menu_class' => 'menu', 'depth' => 1 , 'container' => 'nav', 'container_class' => 'main-menu', 'container_id' => 'main-menu', 'fallback_cb' => false) ); ?>
            </section>
        </header>