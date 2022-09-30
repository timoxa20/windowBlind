<?php 
/*
Template Name: Плиссе
*/
?>

<?php get_header();
?>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
                <?php the_field('pli-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/pli.png" alt="">
                </div>
                <div class="gorizont__text">
                    <?php the_field('pli-subtext'); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="assortment">
        <div class="container">
            <div class="gorizont__title assortment__title">
               Галерея
            </div>
            <div class="assortment__inner">
               
            </div>
        </div>
    </section>


    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page__text">
                    <div class="page__title gorizont__title">
                        <?php the_field('pli-text'); ?>
                    </div>
                    <div class="page__subtext">
                        <?php the_field('pli-descr'); ?>
                    </div>
                    <div class="page__list">
                        <div class="page__point">
                            <?php the_field('pli-one'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('pli-two'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('pli-three'); ?>
                        </div>
                        <div class="page__subtext plice__text">
                            <?php the_field('pli-for'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('pli-fier'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('pli-sex'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('pli-seven'); ?>
                        </div>
                        <div class="page__subtext plice__text">
                        <?php the_field('pli-axt'); ?>
                        </div>
                    </div>
                </div>
                <div class="page__img">
                    <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/pli/plione.webp" alt="">
                    <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/pli/plitwo.jpg" alt="">
                    <div class="page__img-top">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/pli/plithree.jpg" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/pli/plidor.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer();
?>