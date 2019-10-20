<!--
Tasarım & Kodlama : Nesimi Umutcan ÖZTÜRK
E-Posta : nesimiztrk@gmail.com
-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="<?= base_url( 'assets/css/bootstrap.min.css' ); ?>" rel="stylesheet">
    <link href="<?= base_url( 'assets/css/animate.css' ); ?>" rel="stylesheet">
    <link href="<?= base_url( 'assets/css/shadow.min.css' ); ?>" rel="stylesheet">
    <link href="<?= base_url( 'assets/css/style.css' ); ?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>

<!-- HEADER -->
<header>

    <div class="top">
        <div class="container">
	        <?php
	        wp_nav_menu(

		        array(
			        'theme_location' => 'top-menu',
			        'depth'          => 1,
			        'menu_class'         => '',
			        'menu_id'         => '',
			        'container_id'         => ''
		        )
	        );
	        ?>
        </div>
    </div>

    <div class="header_bg">
        <div class="container">
            <div class="header">
                <a href="<?= site_url(); ?>">
                    <img class="logo" src="<?= base_url( 'assets/img/logo2.png' ); ?>" alt="Akdeniz Üniversitesi Logosu">
                </a>
                <div class="h_search float-lg-right">
                    <form>
                        <input type="text" class="text mr-1" placeholder="Arama..">
                        <button type="submit">
                            <i class="fa fa-search fa-lg"></i>
                        </button>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

	<?php get_template_part( 'partials/menuPartial' ); ?>
</header>


<div id="sliderBg" class="sliderBg" style="min-width: 98vw;"></div>
<div class="clearfix"></div>

