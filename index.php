<?php get_header();
?>
    <section class="jaluzi">
        <div class="container">
            <div class="jaluzi__inner">
                <div class="jaluzi__left">
                    <div class="jaluzi__text">
                        <?php the_field('jaluzi'); ?>
                    </div>
                    <div class="jaluzi__subtext">
                    <?php the_field('subtext'); ?>
                    </div>
                    <div class="jaluzi__mol">
                    <?php the_field('punkt-one'); ?>
                    </div>
                    <div class="jaluzi__mol">
                    <?php the_field('punkt-two'); ?>
                    </div>
                    <div class="jaluzi__mol">
                    <?php the_field('punkt-three'); ?>
                    </div>
                    <div class="jaluzi__button">
                        <div class="header__button jaluzi__adv">
                            <button data-modal class="header__button-rul">Вызвать замерщика</button>
                        </div>
                    </div>
                </div>
                <div class="offer__slider">
                    <div class="jaluzi__right">
                        <div class="box__img">
                            <img class="right__img" src="<?php echo bloginfo('template_url')?>/assets/images/gorizontal.jpg" alt="">
                        </div>
                        <div class="box__img">
                            <img class="right__img" src="<?php echo bloginfo('template_url')?>/assets/images/vertical.jpg" alt="">
                        </div>
                        <div class="box__img">
                            <img class="right__img" src="<?php echo bloginfo('template_url')?>/assets/images/rullon.png" alt="">
                        </div>
                        <div class="box__img">
                            <img class="right__img" src="<?php echo bloginfo('template_url')?>/assets/images/zebra.png" alt="">
                        </div>
                        <div class="box__img">
                            <img class="right__img" src="<?php echo bloginfo('template_url')?>/assets/images/rimskie.png" alt="">
                        </div>
                    </div>
                    <div class="offer__slider-counter">
                        <div class="offer__slider-prev">
                            <img src="<?php echo bloginfo('template_url')?>/assets/images/icons/left.svg" alt="prev">
                        </div>
                        <span id="current">03</span>
                        /
                        <span id="total">05</span>
                        <div class="offer__slider-next">
                            <img src="<?php echo bloginfo('template_url')?>/assets/images/icons/right.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="block">
        <div class="container">
            <div class="block__title">
            <?php the_field('one-title'); ?>
            </div>
            <div class="block__box">
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block1.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-one'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-one'); ?>
                    </div>
                </div>
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block2.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-two'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-two'); ?>
                    </div>
                </div>
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block3.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-three'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-three'); ?>
                    </div>
                </div>
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block4.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-for'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-for'); ?>
                    </div>
                </div>
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block5.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-fier'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-fier'); ?>
                    </div>
                </div>
                <div class="block__inner">
                    <img class="block__img" src="<?php echo bloginfo('template_url')?>/assets/images/icons/block6.svg" alt="">
                    <div class="block__text">
                    <?php the_field('text-sex'); ?>
                    </div>
                    <div class="block__subtext">
                    <?php the_field('subtext-sex'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grid">
        <div class="container">
            <div class="grid__title">
                ассортимент
            </div>

            <div class="grid__inner">
                <div class="grid__left">
                    <a class="grid__images" href="#">
                        <img class="grid__img" src="<?php echo bloginfo('template_url')?>/assets/images/gor.png" alt="">
                    </a>
                    <div class="grid__m">
                        <a class="grid__images" href="#">
                            <img class="grid__img" src="<?php echo bloginfo('template_url')?>/assets/images/den.png" alt="">
                        </a>
                        <a class="grid__images" href="#">
                            <img class="grid__img grid__rime" src="<?php echo bloginfo('template_url')?>/assets/images/rim.png" alt="">
                        </a>
                    </div>
                    <a class="grid__images" href="#">
                        <img class="grid__img grid__lon" src="<?php echo bloginfo('template_url')?>/assets/images/pli.png" alt="">
                    </a>
                </div>
                <div class="grid__right">
                    <div class="grid__p">
                        <div class="grid__r">
                            <a class="grid__images" href="#">
                                <img class="grid__img" src="<?php echo bloginfo('template_url')?>/assets/images/ver.png" alt="">
                            </a>
                        </div>
                        <div class="grid__l">
                            <a class="grid__images" href="#">
                                <img class="grid__img" src="<?php echo bloginfo('template_url')?>/assets/images/mc.png" alt="">
                            </a>
                            <a class="grid__images" href="#">
                                <img class="grid__img grid__rule" src="<?php echo bloginfo('template_url')?>/assets/images/rul.png" alt="">
                            </a>
                        </div>
                    </div>
                    <a class="grid__images" href="#">
                        <img class="grid__img grid__lon" src="<?php echo bloginfo('template_url')?>/assets/images/mot.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <div class="feedback__title">
                свяжитесь с нами
            </div>
            <div class="feedback__inner">
                <div class="feedback__img">
                    <img class="feedback__images" src="<?php echo bloginfo('template_url')?>/assets/images/Group_53.png" alt="">
                </div>
                <div class="feedback__pole">
                    <div class="feedback__form" action="">
                    <?php echo do_shortcode('[contact-form-7 id="56" title="Форма обратной сзязи"]')   ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="container">
            <div class="questions__title">
            <?php the_field('questions'); ?>
            </div>
            <div class="questions__inner">
                <div class="questions__box">
                    <div class="questions__text ">
                    <?php the_field('questions-one'); ?>
                    </div>
                    <div class="questions__icons">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                    </div>
                    <div class="questions__subtext">
                        <span>Определяемся с предполагаемым бюджетом.</span>
                        <span>Полагаемся на собственный вкус, учитывая особые потребности вашего помещения.</span>
                        <span>Дорогостоящие жалюзи считаются из натуральных материалов, с применением ручной работы и
                            автоматизированные жалюзи и шторы.</span>
                    </div>
                </div>
                <div class="questions__box">
                    <div class="questions__text ">
                    <?php the_field('questions-two'); ?>
                    </div>
                    <div class="questions__icons">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                    </div>
                    <div class="questions__subtext">
                        <span>Первый вид - саморезы.</span>
                        <span>Второй вид - скотч.</span>
                        <span>Третий вид – навесные кронштейны.</span>
                    </div>
                </div>
                <div class="questions__box">
                    <div class="questions__text ">
                    <?php the_field('questions-three'); ?>
                    </div>
                    <div class="questions__icons">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                    </div>
                    <div class="questions__subtext">
                        <span>Ткани обработаны специальной пропиткой, обеспечивающей сохранение цвета.</span>
                        <span>Алюминиевые и горизонтальные жалюзи имеют высокую стойкость к воздействию солнечных
                            лучей.</span>
                    </div>
                </div>
                <div class="questions__box">
                    <div class="questions__text ">
                    <?php the_field('questions-for'); ?>
                    </div>
                    <div class="questions__icons">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                    </div>
                    <div class="questions__subtext">
                        <span>Сухая чистка несколько раз в год, с помощью пылесоса на малых оборотах.</span>
                        <span>Влажная чистка с использование средства для мытья посуды.</span>
                    </div>
                </div>
                <div class="questions__box">
                    <div class="questions__text ">
                    <?php the_field('questions-fier'); ?>
                    </div>
                    <div class="questions__icons">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                    </div>
                    <div class="questions__subtext">
                        <span>Сухая чистка несколько раз в год, с помощью пылесоса на малых оборотах.</span>
                        <span>Влажная чистка с использование средства для мытья посуды.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php 
   get_footer();
   ?>