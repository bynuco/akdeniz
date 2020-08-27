<?php get_header(); ?>
    <div class="py-5" style="background: url('https://eders.akdeniz.edu.tr/bootstrap/img/bg4.jpg') fixed">


		<?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="nco-single">
                    <h1 class="mb-4">
                        <i class="fas fa-angle-double-right"></i> <?= get_the_title(); ?>
                    </h1>
                    <div class="nco-content"><?php the_content(); ?></div>
                </div>
            </div>


		<?php endwhile; ?>

    </div>
<?php get_footer();
