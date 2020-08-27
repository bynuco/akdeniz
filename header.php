<!--
Tasarım & Kodlama : Nesimi Umutcan ÖZTÜRK
E-Posta : nesimiztrk@gmail.com
-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="author" content="Nesimi Umutcan ÖZTÜRK" />
    <meta name="contact" content="nesimiztrk@gmail.com" />
    <link rel="shortcut icon" href="<?= base_url('./assets/img/favicon.ico')?>" />
    <link rel="publisher" href="https://bynuco.com">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta name="description" content="Akdeniz Üniversitesi" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha512-Cf6hwVH1QphJW86KYNkv1BdTHRsyVFTmrEKLGgR79daJUdDomgP43WWHqDNOmvNXFL39K3P66ss0mIwGIlxSeg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha512-Cf6hwVH1QphJW86KYNkv1BdTHRsyVFTmrEKLGgR79daJUdDomgP43WWHqDNOmvNXFL39K3P66ss0mIwGIlxSeg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" integrity="sha512-YTL2qFiv2wZNnC764l1DD5zN6lYxDzJ89Ss6zj6YoYIzr6+zwjdVKM1sUR+971X3h7qWCa9cPUBXyYqhOqWWLQ==" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/shadow.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/style.min.css" rel="stylesheet">

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
					'menu_class'     => '',
					'menu_id'        => '',
					'container_id'   => ''
				)
			);
			?>
        </div>
    </div>

	<?php
	$headerBgStyle = "";
	$menuBgStyle   = "";
	if ( ! is_home() ) {
		$headerBgStyle = "style='background-color: #31A3DD'";
		$menuBgStyle   = "style='background-color: rgba(0, 0, 0,0.7)'";
	}
	?>
    <div class="header_bg" <?= $headerBgStyle ?>>
        <div class="container">
            <div class="header">
                <a href="<?= site_url(); ?>">
                    <img class="logo" src="<?= base_url( 'assets/img/logo2.png' ); ?>"
                         alt="Akdeniz Üniversitesi Logosu">
                </a>
                <div class="h_search float-lg-right">
                    <form>
                        <input type="text" id="aramaInput" class="text mr-1" placeholder="Arama.." required>
                        <button type="submit" id="aramaButton">
                            <i class="fa fa-search fa-lg"></i>
                        </button>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <nav class="menu navbar navbar-expand-lg" <?= $menuBgStyle ?>>
		<?php get_template_part( 'partials/menuPartial' ); ?>
    </nav>
</header>


<div id="sliderBg" class="sliderBg" style="min-width: 98vw;"></div>
<div class="clearfix"></div>

