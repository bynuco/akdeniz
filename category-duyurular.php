<?php
get_header(); ?>
<div style="background: url('<?= base_url( 'assets/img/bg4.jpg' ); ?>') fixed">
    <section id="primary" class="container" >
        <div class="nco-single py-5">

			<?php
			if ( have_posts() ) : ?>

                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="text-white bg-info d-block p-3 text-center font-1-half text-decoration-none">
                            TÜM DUYURULAR
                        </div>
                    </div>
					<?php

					while ( have_posts() ) : the_post(); ?>

                        <div class="col-lg-6">
                            <div class="card card-body bg-light mb-2">

                                <a href="<?php the_permalink() ?>" class="text-dark font-1-2"
                                   title="<?php the_title_attribute(); ?>">
                                    <i class="fas fa-angle-right"></i> <?php the_title(); ?>
                                </a>
                            </div>
                        </div>


					<?php endwhile; ?>
                </div>

			<?php endif; ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>