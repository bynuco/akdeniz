<?php
get_header(); ?>

    <section id="primary" class="container">
        <div id="content" role="main">

			<?php
			if ( have_posts() ) : ?>


				<?php

				while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                    <div class="entry">
						<?php the_content(); ?>
                    </div>

				<?php endwhile; ?>


			<?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>