<!-- News -->
<section class="news">
    <div class="container mt-2 py-4">


        <div class="row">
            <div class="col-12 col-lg-12 my-3">
                <div class="duyurular">
                    <div class="title text-info shadow-1">
                        DUYURULAR
                        <div class="sag float-right">
                            <span class="text-info">
                                <i class="fas fa-bullhorn fa-lg"></i>
                            </span>
                        </div>
                    </div>
                    <div class="icerik my-1">
						<?php
						$args = array(
							'posts_per_page'   => 10,
							'offset'           => 0,
							'category_name'    => 'duyurular',
							'orderby'          => 'date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true,
						);

						$results = get_posts( $args );
						?>

                        <div class="row my-2">
							<?php foreach ( $results as $i ) : ?>
                                <div class="col-lg-6">
                                    <div class="haber" data-toggle="tooltip" data-placement="bottom"
                                         title="<?= htmlentities( $i->post_title, ENT_QUOTES, "UTF-8" ); ?>">
                                        <img alt="" class="img-fluid"
                                             src="https://eders.akdeniz.edu.tr/bootstrap/img/haber_icon.png">
                                        <a href="<?= get_the_permalink( $i->ID ); ?>"
                                           title="<?php the_title_attribute(); ?>">
											<?= kisalt( $i->post_title, 54 ); ?>
                                        </a>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>

                        <a class="text-white btn btn-info btn-block btn-lg"
                           href="<?= categoryNewUrl( "duyurular" ); ?>">
                            <i class="fas fa-arrow-alt-circle-right"></i> Tüm
                            Duyurular
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="col-12 col-lg-12 my-3 etkinliklerBg">
        <div class="container">
            <div class="etkinlikler">
                <div class="title shadow-1">
                    ETKİNLİKLER
                    <div class="sag float-right">
                            <span class="text-danger">
                                <i class="far fa-calendar-alt fa-lg"></i>
                            </span>
                    </div>
                </div>

                <div class="icerik my-1">
					<?php
                    unset($args,$results);
					$args = array(
						'posts_per_page'   => 1000,
						'offset'           => 0,
						'category_name'    => 'etkinlikler',
						'orderby'          => 'meta_value_num',
						'order'            => 'ASC',
						'meta_key'         => 'etkinlik_baslangic',
						'post_type'        => 'post',
						'post_status'      => 'publish',
						'suppress_filters' => true,
					);

					$results = get_posts( $args );
					?>

                    <div class="row my-2">
						<?php foreach ( $results as $i ) : ?>
							<?php
							$gununTarihi   = date( 'd/m/Y' );
							$etkinlikBitis = get_field( 'etkinlik_bitis', $i->ID );

							if ( strtotime(nco_strtotime($gununTarihi)) >  strtotime(nco_strtotime($etkinlikBitis)) ) {
								continue;
							}
							?>

                            <div class="col-lg-6">
                                <div class="etkinlik" data-toggle="tooltip" data-placement="bottom"
                                     title="<?= htmlentities( $i->post_title, ENT_QUOTES, "UTF-8" ); ?>">
									<?php
									$postDate = ncoPostDate( get_field( 'etkinlik_baslangic', $i->ID ) );
									?>
                                    <div class="tarih float-left">
                                        <strong><?= $postDate[0]; ?></strong><br>
										<?= ncoAylar( $postDate[1] ); ?>
                                    </div>

                                    <a class="text-dark" href="<?= get_the_permalink( $i->ID ); ?>"
                                       title="<?php the_title_attribute(); ?>">
										<?= kisalt( $i->post_title, 38 ); ?>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>

                    <a class="text-white btn btn-danger btn-block btn-lg"
                       href="<?= categoryNewUrl( "etkinlikler" ); ?>">
                        <i class="fas fa-arrow-alt-circle-right"></i> Tüm
                        Etkinlikler
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="title shadow-1">
                    HABERLER
                    <div class="sag float-right">
                        <a class="sag-title" href="<?= categoryNewUrl('haberler'); ?>">TÜM HABER ARŞİVİ</a>
                            <span class="badge text-dark">
                               <i class="fas fa-newspaper fa-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="haberler">

                    <div class="icerik my-3">
                        <div class="row">
							<?php
							$args = array(
								'posts_per_page'   => 4,
								'offset'           => 0,
								'category_name'    => 'haberler',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
								'suppress_filters' => true,
							);

							$results = get_posts( $args );
							?>

							<?php foreach ( $results as $i ) : ?>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="card shadow-1">
                                        <div class="card-body">
                                            <a href="<?= get_the_permalink( $i->ID ); ?>">
                                                <img alt="" class="img-fluid"
                                                     src="<?= ncoPostImage( $i->ID ); ?>">
                                            </a>
                                        </div>
                                        <div class="card-footer text-white p-0 text-center">
                                            <a class="pt-0" href="<?= get_the_permalink( $i->ID ); ?>"
                                               title="<?php the_title_attribute(); ?>">
												<?= kisalt( strip_tags( $i->post_title ), 60 ); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-12">
                <div class="row">
			
			<div class="col-lg-8">
				<a href="http://bhim.akdeniz.edu.tr/basinda-bugun/" target="_blank">
				    <img src="https://files.akdeniz.edu.tr/akdeniz/assets/img/basindaBugun.png" class="img-fluid img-thumbnail"
					 alt="Basında Bügün" style="height:120px">
				</a>
                    	</div>
                   	<div class="col-lg-4">
				<a href="https://eua.eu/" target="_blank">
				    <img src="https://files.akdeniz.edu.tr/akdeniz/assets/img/screenshot-eua.eu-2021.01.18-12_50_09.png" class="img-fluid img-thumbnail"
					 alt="EUA"  style="height:120px">
				</a>
			</div>
                    
                </div>
		    
		<div class="row mt-5">
			
			<div class="col-md">
				<a href="https://www.yok.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/YOK.jpg" class="img-fluid img-thumbnail"
					 alt="Yükseköğretim kurulu">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="https://www.osym.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/osym.jpg" class="img-fluid img-thumbnail"
					 alt="Ölçme, Seçme ve Yerleştirme Merkezi">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="https://www.tubitak.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/tubitak.jpg" class="img-fluid img-thumbnail"
					 alt="Türkiye Bilimsel ve Teknolojik Araştırma Kurumu">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="https://www.cimer.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/cimer.jpg" class="img-fluid img-thumbnail"
					 alt="Cumhurbaşkanlığı İletişim Merkezi">
				</a>
                    	</div>
                    
               	
			
			<div class="col-md">
				<a href="https://www.uak.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/uak.jpg" class="img-fluid img-thumbnail"
					 alt="Üniversitelerarası Kurul Başkanlığı">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="https://www.ilan.gov.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/ilan.jpg" class="img-fluid img-thumbnail"
					 alt="Basın İlan Kurumu">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="http://engelsiz.akdeniz.edu.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/engelsiz-akdeniz.jpg" class="img-fluid img-thumbnail"
					 alt="Engelli Öğrenci Birimi">
				</a>
                    	</div>
			
			<div class="col-md">
				<a href="http://ekampus.akdeniz.edu.tr/" target="_blank">
				    <img src="https://gitlab.com/bynuco/akdenizz/-/raw/master/e-kampus.jpg" class="img-fluid img-thumbnail"
					 alt="E-Kampüs Uygulaması">
				</a>
                    	</div>
                    
               	</div>

            </div>
        </div>
    </div>

</section>
