<section class="slider">
    <div class="">
        <div class="swiper-container">
            <div class="swiper-wrapper">
				<?php
				$args = array(
					'posts_per_page'   => 15,
					'offset'           => 0,
					'category_name'    => 'sliderlar',
					'meta_key'         => 'slider_sirasi',
					'orderby'          => 'meta_value',
					'order'            => 'ASC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true,
				);

				$results = get_posts( $args );
				//print_r($results);
				?>

				<?php foreach ( $results as $i ) : ?>
                    <div class="swiper-slide">
                        <?php

                        $sliderLink = get_field('slider_link',$i->ID );

                        if(empty($sliderLink) || is_null($sliderLink)){
                            $sliderLink = get_the_permalink( $i->ID );
                        }else{
	                        $sliderLink = get_field('slider_link');
                        }
                        ?>
                        <a href="<?= $sliderLink; ?>"
                           title="<?php the_title_attribute(); ?>">
                            <img alt="Slider Resim" class="img-fluid animated fadeIn"
                                 src="<?= get_the_post_thumbnail_url( $i->ID ); ?>">
                        </a>
                    </div>
				<?php endforeach; ?>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>