<style>
.swiper-button-prev:after, .swiper-button-next:after, .swiper-container-rtl  {
    content: '';
}
</style>
<section class="slider">
    <div class="">
        <div class="swiper-container">
            <div class="swiper-wrapper">
				<?php
				$args = array(
					'posts_per_page'   => 20,
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
	                        $sliderLink = get_field('slider_link',$i->ID);
                        }
                        ?>
                        <a href="<?= $sliderLink; ?>"
                           title="">
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


<div class="modal fade bd-example-modal-lg" id="isteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="https://files.akdeniz.edu.tr/akdeniz/assets/img/akdenizcovidduyuru.jpg"  class="img-fluid"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
<!--
<button id="isteModalButton" type="button" style="display:none" data-toggle="modal" data-target="#isteModal">
</button>
-->
<script>
    $( document ).ready(function() {
        $("#isteModalButton").trigger('click');
    });
</script>
