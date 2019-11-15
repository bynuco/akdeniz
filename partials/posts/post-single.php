<article>
    <h1 class="mb-4">
        <?php $category = get_the_category( $post->ID )[0]; ?>
		<?php if ( $category->slug === "haberler") : ?>
            <img src="<?= ncoPostImage( get_the_ID() ); ?>" class="img-thumbnail img-fluid" alt="">
		<?php endif; ?>
	    <?= get_the_title(); ?>
    </h1>
    <div class="nco-content"><?php the_content(); ?></div>
    <hr>
    <div><?= get_the_date(); ?></div>
</article>