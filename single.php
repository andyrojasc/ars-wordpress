<?php get_header(); ?>
  <?php if(get_field( 'categoriapagina' ) == 'Noticia' ) {?>
    <div class="container">
        <!-- Section header, imagen, tirulo y categoria -->
        <section class="row topMargen justify-content-center">
            <div class="col-12 text-center">
                <p class="cajaCategoria"><?php the_field( 'categorianoticia' ); ?></p>
            </div>

            <div class="col-12">
            <h2 class="h_fonts tituloNoticia"><?php the_field( 'titulonoticia' ); ?></h2>
            </div>

            <div class="col-lg-10 col-md-11 col-sm-12">
                <?php if ( get_field( 'imagennoticia') ) { ?>
                    <img class="img-fluid imgDetalleNoticia" src="<?php the_field( 'imagennoticia' ); ?>" />
                <?php } ?>
            </div>
        </section>

        <!-- Section Texto y publicidad -->
        <section class="row justify-content-md-center px-lg-4 mt-3">
            <div class="col-lg-9 col-md-12 col-sm-12 text-justify">
                <p class="tipoNoticiaLetra"><i class="far fa-calendar-alt fa-2x mr-2"></i> <span><?php the_field( 'fechanoticia' ); ?></span></p>
                <p class="tipoNoticiaLetra mt-4">
                    <?php the_field( 'detallenoticia' ); ?>
                </p>
            </div>
            <div class="col-lg-3 d-none d-lg-block mt-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/detalleNoticias/Capture.PNG" id="imgPublicidad" class="img-fluid" alt="">
            </div>
        </section>

        <!-- Noticias interesantes -->
        <section class="row px-lg-3 mt-3 justify-content-center">
            <div class="col-12">
                <div class="verMas">
                    <h2>
                        <span><?php the_field( 'titulocardsnoticiasrelacionadas' ); ?></span>
                    </h2>
                </div>
            </div>
            <!-- Cards de otras noticias -->
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                <a href="<?php the_field( 'href1noticia' ); ?>">
                    <?php if ( get_field( 'imagencard1') ) { ?>
                        <img class="card-img-top" src="<?php the_field( 'imagencard1' ); ?>" />
                    <?php } ?>
                </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard1' ); ?></p>
                        <a href="<?php the_field( 'href1noticia' ); ?>" class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard1' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                <a href="<?php the_field( 'href2noticia' ); ?>">
                    <?php if ( get_field( 'imagencard2') ) { ?>
                        <img class="card-img-top" src="<?php the_field( 'imagencard2' ); ?>" />
                    <?php } ?>
                </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard2' ); ?></p>
                        <a href="<?php the_field( 'href2noticia' ); ?>" class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard2' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                    <a href="<?php the_field( 'href3noticia' ); ?>">
                        <?php if ( get_field( 'imagencard3') ) { ?>
                            <img class="card-img-top" src="<?php the_field( 'imagencard3' ); ?>" />
                        <?php } ?>
                    </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard3' ); ?></p>
                        <a href="<?php the_field( 'href3noticia' ); ?>" class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard3' ); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <br>
    </div>
  <?php }else{ ?>
    <div class="body-perfil">
        <div class="container-fluid">
            <div class="row alignVertical">
            <div class="col-12 bannerContactenos text-center" style="<?php if ( get_field( 'main-img-deportista') ) { ?>  background-image: url(<?php the_field( 'main-img-deportista' ); ?>);  <?php } ?>">
                    <div class="alignVerticalContacts texto-foto">
                        <h1 class="h_fonts text-center textShadow text-white"><?php the_field( 'nombre-deportista' ); ?></h1>
                        <h4 class="h_fonts nombre-atleta"><?php the_field( 'pais-deportista' ); ?></h4>
                        <p class="texto-citado h_fonts"><?php the_field( 'frase-deportista' ); ?></p>
                        <h2 class="h_fonts deporte"><?php the_field( 'deporte' ); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3 pt-4">
                <div class="col-12 col-lg-4 text-white borde pt-2">
                    <h4><?php the_field( 'titulo-detalle-1' ); ?></h4>
                    <h5><?php the_field( 'detalle-deportista-1' ); ?></h5>
                </div>
                <div class="col-12 col-lg-4 text-white borde pt-2">
                    <h4><?php the_field( 'titulo-detalle-2' ); ?></h4>
                    <h5><?php the_field( 'detalle-deportista-2' ); ?></h5>
                </div>
                <div class="col-12 mb-4 col-lg-4 text-white  pt-2">
                    <h4><?php the_field( 'titulo-detalle-3' ); ?></h4>
                    <h5><?php the_field( 'detalle-deportista-3' ); ?></h5>
                </div>
            </div>
        </div>
    </div>
        <div class="container mt-3 mb-3 ">
            <div class="row">
                <div class="col ">
                <h2 class="text-center h_fonts"><?php the_field( 'titulo-biografia' ); ?></h2>
                    <p class="text-justify texto-descriptivo p-3"><?php the_field( 'biografia-texto' ); ?></p>
                </div>
            </div>
        </div>
  <?php } ?>
<?php get_footer(); ?>
