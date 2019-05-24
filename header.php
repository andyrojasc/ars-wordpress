<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="fixed-top">


<nav class="navbar navbar-expand-lg" role="navigation">
  <div class="container text-dark">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" id="collapsibleButton" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="open"><i class="fas fa-bars"></i></span>
	</button>
	<a class="navbar-brand mx-auto" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt=""></a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'navbar-collapse text-left collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'a_class'           => 'letras',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>

<div class="container-fluid px-0 bg_search pb-4">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="input-group py-2 mt-4">
                            <input type="text" class="form-control" id="busqueda" placeholder="<?php 
                        $currLang = get_bloginfo('language');
                        if($currLang == 'es-CR'){ // Replace condition with your language code.
                            echo 'Buscar Noticia';
                        } else {
                            echo 'Search New';
                        }?>"> 
                            <div class="input-group-append">
                                <?php 
                                $currLang = get_bloginfo('language');
                                if($currLang == "es-CR"){ // Replace condition with your language code.
                                    ?>
                                    <button class="btn btn-secondary" type="button" onclick="buscar()">
                                        <i class="fa fa-search" id="fa-search"></i>
                                    </button>
                                    <?php 
                                } else {
                                    ?>
                                    <button class="btn btn-secondary" type="button" onclick="search()">
                                        <i class="fa fa-search" id="fa-search"></i>
                                    </button>
                                    <?php 
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
         <!-- Global site tag (gtag.js) - Google Analytics -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135097596-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-135097596-1');
        </script>
    </header>
