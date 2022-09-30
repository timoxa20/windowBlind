<?php 
/*
Template Name: Горизонтальные
*/
?>
<?php get_header();
?>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('gor-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/gorizont.png" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('gor-subtext'); ?>
                </div>
            </div>
        </div>
    </section>

     <section class="assortment">
        <div class="container">
            <div class="gorizont__title assortment__title">
                Галерея
            </div>
            <div class="assortiment__inner">
            <?php echo do_shortcode('[metaslider id="94"]'); ?>
            </div>
        </div>
    </section> 


    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page__text">
                    <div class="page__title gorizont__title">
                    <?php the_field('gor-text'); ?>
                    </div>
                    <div class="page__subtext">
                    <?php the_field('gor-descr'); ?>
                    </div>
                    <div class="page__list">
                        <div class="page__point">
                        <?php the_field('gor-one'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-two'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-three'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-for '); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-fiev'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-sex'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-seven '); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('gor-axt'); ?>
                        </div>
                    </div>
                </div>
                <div class="page__img">
                    <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/blockimgone.png" alt="">
                    <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/blockimgtwo.png" alt="">
                    <div class="page__img-top">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/blockimgthree.png" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/blockimgfor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> 


    <?php get_footer();
?>