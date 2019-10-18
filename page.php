<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
    <div class="container my-5">
        <div class="nco-single shadow-1">
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="mb-4">
                    <img src="<?=get_the_post_thumbnail_url( $post->ID )?>" alt="">
                    <?= get_the_title(); ?>
                </h1>
                <div class="nco-content px-4"><?php the_content(); ?></div>
            </article>
        </div>
    </div>


<?php endwhile; ?>


<?php get_footer();
