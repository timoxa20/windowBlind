<?php 
/*
Template Name: Вертикальные
*/
?>
<?php get_header();
?>
    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('vet-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/ver/noroot.webp" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('ver-subtext'); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="assortment">
        <div class="container">
            <div class="gorizont__title assortment__title">
                Галлерея
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
                    <?php the_field('ver-text'); ?>
                    </div>
                    <div class="page__subtext">
                    <?php the_field('ver-textone'); ?>
                    </div>
                    <div class="page__list">
                        <div class="page__point">
                        <?php the_field('ver-one'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-two'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-three'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-for'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-fier'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-sex'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-seven'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-axt'); ?>
                        </div>
                        <div class="page__point">
                        <?php the_field('ver-noin'); ?>
                        </div>
                    </div>
                </div>
                <div class="page__img">
                    <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/ver/dmmiibj4p008skso8owg.webp" alt="">
                    <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/ver/fqgfkoozjg0sok44wskw.webp" alt="">
                    <div class="page__img-top">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/ver/verone.jpg" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/ver/vertwo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer();
?>