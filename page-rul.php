<?php 
/*
Template Name: Рулонные
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
                        <?php the_field('rul-title'); ?>
                        </div>
                        <div class="gorizont__inner">
                            <div class="gorizont__img">
                                <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rul/rulthree.jpg" alt="">
                            </div>
                            <div class="gorizont__text">
                            <?php the_field('rul-subtext'); ?>
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
                        <?php the_field('rul-text'); ?>
                        </div>
                        <div class="page__subtext">
                        <?php the_field('rul-podtext'); ?>
                        </div>
                        <div class="page__list">
                            <div class="page__point">
                            <?php the_field('rul-one'); ?>
                            </div>
                            <div class="page__point">
                            <?php the_field('rul-two'); ?>
                            </div>
                            <div class="page__point">
                            <?php the_field('rul-three'); ?>
                            </div>
                            <div class="page__point">
                            <?php the_field('rul-for'); ?>
                            </div>
                            <div class="page__point">
                            <?php the_field('rul-fier'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="page__img rul__img">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rul/rulone.jpg" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/rul/rultwo.jpg" alt="">
                        <div class="page__img-top">
                            <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rul/rulfor.jpg" alt="">
                            <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/rul/rulfier.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();
?>