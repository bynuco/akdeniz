<?php
get_header(); ?>
    <div class="py-5" style="background: url('https://eders.akdeniz.edu.tr/bootstrap/img/bg4.jpg') fixed">
        <section id="primary" class="container">
            <div id="content" role="main">

				<?php
				if ( have_posts() ) : ?>


                    <div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-4">
                                <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" class="text-decoration-none">
                                <div class="card mb-4" style="min-height: 350px">
                                    <img class="card-img-top" src="<?= ncoPostImage( $post->ID ); ?>" alt="image"
                                         style="width:100%; height: 220px">
                                    <div class="card-body">
                                        <h6 class="card-title text-dark font-weight-light">
                                            <?= kisalt(get_the_title(),100); ?>
                                        </h6>
                                    </div>
                                    <div class="card-footer text-center text-dark">
                                        <?= get_the_date(); ?>
                                    </div>
                                </div>
                                </a>
                            </div>
						<?php endwhile; ?>
                    </div>
		
                   
				<?php endif; ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
