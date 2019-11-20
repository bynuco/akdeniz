<?php
get_header(); ?>
    <div style="background: url('<?= base_url( 'assets/img/bg4.jpg' ); ?>') fixed">
        <section id="primary" class="container" >
            <div class="nco-single py-5">

				<?php
				if ( have_posts() ) : ?>

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="d-block pb-2 text-center font-1-half text-decoration-none">
                                <h1>TÜM ETKİNLİKLER</h1>
                            </div>
                        </div>
						<?php

						while ( have_posts() ) : the_post(); ?>

                            <div class="col-lg-6 mb-2">
                                <div class="card card-body bg-light text-center"  style="min-height: 10vh; display: flex; justify-content: center">

                                    <a href="<?php the_permalink() ?>" class="text-dark font-1-2"
                                       title="<?php the_title_attribute(); ?>">
                                        <i class="fas fa-angle-right"></i>
                                        <strong class="text-dark"><?php the_title(); ?></strong>

                                    </a>
                                </div>
                                <div class="card-footer text-center" style="border:1px solid #ccc;">
                                    <strong>Etkinlik Başlangıç Tarihi:</strong>
                                    <span class="text-danger"> <?= get_field( 'etkinlik_baslangic', $post->ID ); ?></span>
                                    <br>
                                    <strong>Etkinlik Bitiş Tarihi:</strong>
                                    <span class="text-danger"> <?= get_field( 'etkinlik_bitis', $post->ID ); ?></span>
                                </div>
                            </div>


						<?php endwhile; ?>
                    </div>

				<?php endif; ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>