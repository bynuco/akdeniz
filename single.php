<?php get_header(); ?>
    <div class="py-5" style="background: url('<?= base_url( 'assets/img/bg4.jpg' ); ?>') fixed">


		<?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="nco-single">
					<?php
					$category = get_the_category( $post->ID )[0];
					if ( $category->slug === "sliderlar" ) {
					    get_template_part('partials/posts/post','slider');
                    }else{
						get_template_part('partials/posts/post','single');
                    }
					?>
                </div>
            </div>


		<?php endwhile; ?>

    </div>
<?php get_footer();
