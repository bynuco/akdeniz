<!-- News -->
<section class="news">
    <div class="container mt-2">


        <div class="row">
            <div class="col-12 col-lg-7 my-3">
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
							'posts_per_page'   => 8,
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

						<?php foreach ( $results as $i ) : ?>
                            <div class="haber" data-toggle="tooltip" data-placement="right"
                                 title="<?= htmlentities( $i->post_title, ENT_QUOTES, "UTF-8" ); ?>">
                                <img alt="" class="img-fluid" src="<?= base_url( 'assets/img/haber_icon.png' ); ?>">
                                <a href="<?= get_the_permalink( $i->ID ); ?>" title="<?php the_title_attribute(); ?>">
									<?= kisalt( $i->post_title, 68 ); ?>
                                </a>
                            </div>
						<?php endforeach; ?>

                        <a class="text-white btn btn-info btn-block btn-lg"
                           href="<?= categoryNewUrl( "duyurular" ); ?>">
                            <i class="fas fa-arrow-alt-circle-right"></i> Tüm
                            Duyurular
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 my-3">
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
						$args = array(
							'posts_per_page'   => 8,
							'offset'           => 0,
							'category_name'    => 'etkinlikler',
							'orderby'          => 'date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true,
						);

						$results = get_posts( $args );


						?>
						<?php foreach ( $results as $i ) : ?>
                            <div class="etkinlik" data-toggle="tooltip" data-placement="left"
                                 title="<?= htmlentities( $i->post_title, ENT_QUOTES, "UTF-8" ); ?>">
								<?php
								$postDate = ncoPostDate( get_field( 'etkinlik_bitis', $i->ID ) );
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
						<?php endforeach; ?>

                        <a class="text-white btn btn-danger btn-block btn-lg"
                           href="<?= categoryNewUrl( "etkinlikler" ); ?>">
                            <i class="fas fa-arrow-alt-circle-right"></i> Tüm
                            Etkinlikler
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="title shadow-1">
                    HABERLER
                    <div class="sag float-right">
                        <a class="sag-title" href="<?= categoryNewUrl( "haberler" ); ?>">TÜM HABER ARŞİVİ</a>
                        <span class="badge text-dark">
                           <i class="fas fa-newspaper fa-lg"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 linkks">
                <a href="#">
                <img class="img-fluid mt-3 shadow-2" src="<?= base_url( 'assets/img/basindabugun.jpg' ) ?>"
                     alt="Akdeniz Üniversitesi Basında Bugün">
                </a>
                <a href="http://akdenizdenhaber.com/" target="_blank" rel="nofollow">
                    <img class="img-fluid mt-4 shadow-2" src="<?= base_url( 'assets/img/Akdenizdenhaber.jpg' ) ?>"
                         alt="Akdeniz'den Haber Web Sitesi">
                </a>
                <!--
                   <a href="#" class="btn  btn-block">Öğrenci <i class="fas fa-user float-right mt-1"></i></a>
                   <a href="#" class="btn btn-block">Aday Öğrenci <i
                               class="fas fa-graduation-cap float-right mt-1"></i></a>
                   <a href="#" class="btn btn-block">Personel <i class="fas fa-users float-right mt-1"></i></a>
                   <a href="#" class="btn btn-block">Bilimsel Araş. Projeleri Koor. Bir. <i
                               class="fas fa-chart-bar float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Kütüphane <i class="fas fa-book-reader float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Hastane <i class="fas fa-hospital-alt float-right mt-1"></i></a>
                   <a href="#" class="btn btn-block">Basın ve Halkla İlişkiler <i
                               class="fas fa-newspaper float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Engelli <i class="fas fa-wheelchair float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Kalite <i class="fas fa-award float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Akdeniz Teknoloji Transfer Ofisi <i
                               class="fas fa-caret-right float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Antalya Teknokent <i class="fas fa-tenge float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Uzaktan Eğitim <i
                               class="fas fa-chalkboard-teacher float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Sürekli Eğitim <i class="fas fa-school float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Kampüste Yaşam <i class="fas fa-university float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Egit. ve Öğr. Mükemmellik A.U.M. <i
                               class="fas fa-medal float-right mt-1"></i></a>
                   <a href="#" class="btn btn-block">Yayınlar <i class="fas fa-book float-right mt-1"></i></a>
                   <a href="http://ekampus.akdeniz.edu.tr/" class="btn  btn-block">E-Kampüs <i class="fab fa-etsy float-right mt-1"></i></a>
                   <a href="#" class="btn  btn-block">Yemekhaneler <i class="fas fa-utensils float-right mt-1"></i></a>
               -->
            </div>
            <div class="col-lg-9">
                <div class="haberler">

                    <div class="icerik my-3">
                        <div class="row">
							<?php
							$args = array(
								'posts_per_page'   => 6,
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

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="card shadow-1">
                                        <div class="card-body">
                                            <a href="<?= get_the_permalink( $i->ID ); ?>">
                                                <img alt="" class="img-fluid"
                                                     src="<?= ncoPostImage( $i->ID ); ?>">
                                            </a>
                                        </div>
                                        <div class="card-footer text-white p-0 text-center">
                                            <a class="pt-3" href="<?= get_the_permalink( $i->ID ); ?>"
                                               title="<?php the_title_attribute(); ?>">
												<?= kisalt( strip_tags( $i->post_title ), 60 ); ?>
                                                <!--<div class="text-dark">
													<? /*= kisalt( strip_tags( $i->post_content ), 150 ); */ ?>
                                                </div>-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Archive -->
<!--<section class="archive pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4 mb-lg-2">
                <div class="card text-center bg-card1">
                    <div class="card-body p-0">
                        <img alt="" class="img-fluid" src="<? /*= base_url( 'assets/img/Akdenizden10.jpg' ); */ ?>">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4 mb-lg-2">
                <div class="card text-center bg-card2">
                    <div class="card-body p-0">
                        <img alt="" class="img-fluid" src="<? /*= base_url( 'assets/img/kurumsal-kimlik-alt.jpg' ); */ ?>">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4 mb-lg-2">
                <div class="card text-center bg-card5">
                    <div class="card-body p-0">
                        <img alt="" class="img-fluid" src="<? /*= base_url( 'assets/img/Akdenizden10.jpg' ); */ ?>">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-lg-2">
                <div class="card text-center bg-card6">
                    <div class="card-body p-0">
                        <img alt="" class="img-fluid" src="<? /*= base_url( 'assets/img/tanitim-katalogu.jpg' ); */ ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->