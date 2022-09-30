<?php 
/*
Template Name: День-ночь
*/
?>


<?php get_header();
?>



    <section class="rul">
        <div class="container">
            <div class="rul__inner">
                <div class="rul__content">
                    <div id="tabs-1" class="rul__content-item rul__content-item--activ">
                        <div class="gorizont__title">
                        <?php the_field('den-title'); ?>
                        </div>
                        <div class="gorizont__inner">
                            <div class="gorizont__img">
                                <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/den/denone.webp" alt="">
                            </div>
                            <div class="gorizont__text">
                            <?php the_field('den-subtext'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="assortment">
        <div class="container">
            <div id="tabs-1" class="rul__content-item rul__content-item--activ">
                <div class="gorizont__title assortment__title">
                    Ассортимент материала
                </div>
                <div class="assortment__inner">
                    
                </div>
            </div>
        </div>
    </section>


    <section class="page">
        <div class="container">
            <div id="tabs-1" class="rul__content-item rul__content-item--activ">
                <div class="page__inner">
                    <div class="page__text">
                        <div class="page__title gorizont__title">
                        <?php the_field('den-text'); ?>
                        </div>
                        <div class="page__subtext">
                        <?php the_field('den-poltext'); ?>
                        </div>
                        <div class="page__list">
                            <div class="page__point">
                            <?php the_field('den-one'); ?>
                            </div>
                            <div class="page__point">
                               <?php the_field('den-two'); ?>
                            </div>
                            <div class="page__point">
                               <?php the_field('den-three'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-for'); ?>
                            </div>
                            <div class="page__subtext plice__text">
                                <?php the_field('den-sub-text'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-fier'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-sex'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-seven '); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-axt'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('rden-noen'); ?>
                            </div>
                            <div class="page__point">
                                <?php the_field('den-zein'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="page__img">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/den/dentwo.webp" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/den/denthree.webp" alt="">
                        <div class="page__img-top">
                            <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/den/denfor.webp" alt="">
                            <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/den/denfier.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();
?>