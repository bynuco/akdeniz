<footer>
    <div class="nco-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.8248652250486!2d30.653164315574756!3d36.89453777008269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c391cd6e38486d%3A0xfbd4e14587332eeb!2sAkdeniz%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1570793874135!5m2!1str!2str"
                allowfullscreen=""></iframe>
    </div>

    <div class="alt animated fadeIn text-center pt-5 pb-4">
        <p class="text-white">© 2019 Akdeniz Üniversitesi | Dumlupınar Bulvarı 07058 Kampüs / Antalya / Türkiye</p>
    </div>
</footer>

<section class="social-media container text-center py-4">
    <ul class="social">
        <li>
            <a href="https://www.facebook.com/Akdenizun" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/Akdenizun" target="_blank">
                <i class="fab fa-twitter-square"></i>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/akdeniz_universitesi/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </li>

        <li>
            <a href="https://www.youtube.com/Akdenizuniversitesitr" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/school/akdeniz-universitesi" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </li>
    </ul>
    <div style="position: absolute;top:50px;right: 10px; z-index: -999">
        <img width="70px" src="<?= base_url('assets/img/atam.png'); ?>" alt="">
    </div>
    <p class="text-white"><a class="text-dark" target="_blank" href="//bim.akdeniz.edu.tr">Bilgi İşlem Daire Başkanlığı</a><a class="d-none" href="https://bynuco.com">Web Yazılım Hizmetleri</a></p>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?= base_url( 'assets/js/bootstrap.min.js' ); ?>"></script>
<script src="<?= base_url( 'assets/lib/swiper/js/swiper.min.js' ); ?>"></script>
<script src="<?= base_url( 'assets/js/site.min.js' ); ?>"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152755445-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-152755445-1');
</script>
<?php wp_footer(); ?>
</body>
</html>