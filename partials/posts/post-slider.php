<img src="<?= ncoPostImage( get_the_ID() ); ?>" class="img-thumbnail img-fluid" alt="">
<article>
	<h1 class="mb-4">

		<?= get_the_title(); ?>
	</h1>
	<div class="nco-content"><?php the_content(); ?></div>
</article>