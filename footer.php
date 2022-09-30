<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__info">
                    <div class="footer__title">
                        Контакты
                    </div>
                    <div class="footer__info-phone footer__font">
                        <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                    </div>
                    <div class="footer__info-strit footer__font">
                    <?php the_field('adress', 2); ?>
                    </div>
                    <div class="footer__info-work footer__font">
                        Пн-Вс 09:00 -20:00
                    </div>
                </div>
                <div class="footer__menu">
                    <div class="footer__title">
                        Меню
                    </div>
                    <div class="footer__menu-assortment footer__font">
                        Ассортимент
                        <ul class="header__subheader footer__subheader">
                            <div class="header__window">
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/gor.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Горизонтальные жалюзи
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/ver.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Вертикальные жалюзи
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/rul.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Рулонные жалюзи
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/den.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        День-ночь
                                    </div>
                                </li>
                            </div>
                            <div class="header__window">
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/rim.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Римские шторы
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/pli.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Шторы плиссе
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/mc.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Москитные сетки
                                    </div>
                                </li>
                                <li class="header__subheader-list">
                                    <a class="header__subheader-img" href="#">
                                        <img class="footer__main-menu" src="<?php echo bloginfo('template_url')?>/assets/images/icons/mot.svg" alt="">
                                    </a>
                                    <div class="header__subheader-text">
                                        Моторизация
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="footer__information">
                    <div class="footer__title">
                        Информация
                    </div>

                    <div class="footer__information-privacy footer__font">
                        <a href="#">Политика конфеденциальности</a>
                    </div>
                    <div class="footer__information-c footer__font">
                        © 2022 Жалюзи
                    </div>
                </div>
                <div class="footer__social">
                    <div class="footer__title">
                        Социальные сетие
                    </div>
                    <div class="footer__social-inner">
                        <div class="footer__social-ok">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_url')?>/assets/images/odnoklassniki.png" alt="">
                            </a>
                        </div>
                        <div class="footer__social-telegram">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_url')?>/assets/images/telegram.png" alt="">
                            </a>
                        </div>
                        <div class="footer__social-viber">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_url')?>/assets/images/viber.png" alt="">
                            </a>
                        </div>
                        <div class="footer__social-wat">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_url')?>/assets/images/whatsapp.png" alt="">
                            </a>
                        </div>
                        <div class="footer__social-instagramm">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_url')?>/assets/images/instagram.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Request a call -->
    <div class="popup">
        <div class="popup_dialog">
            <div class="popup_content text-center">
                <button data-cloce type="button" class="popup_close"><strong>&times;</strong></button>
                <div class="popup__form">
                    <div class="form" action="#">
                    <?php echo do_shortcode('[contact-form-7 id="55" title="Всплывающяя форма"]')   ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php  
    wp_footer();
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(80030182, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/80030182" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199533477-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199533477-1');
</script>
</body>

</html>