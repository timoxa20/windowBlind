<?php 
/*
Template Name: Римские
*/
?>
<?php get_header();
?>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('rim-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rim/rimone.webp" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('rimsubtext'); ?>
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
                    <?php the_field('rimtext'); ?>
                    </div>
                    <div class="page__subtext">
                        <?php the_field('rim-sub-text'); ?>
                    </div>
                    <div class="page__list">
                        <div class="page__point">
                            <?php the_field('rimone'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('rimtwo'); ?>
                        </div>
                        <div class="page__point">
                           <?php the_field('rimthree'); ?>
                        </div>
                        <div class="page__point">
                            <?php the_field('rimfor'); ?>
                        </div>
                        <div class="page__subtext page__subtext-text">
                        <?php the_field('rimfier'); ?>
                        </div>
                    </div>
                </div>
                <div class="page__img">
                    <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rim/rimtwo.webp" alt="">
                    <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/rim/rimthree.jpg" alt="">
                    <div class="page__img-top">
                        <img class="page__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/rim/rimfor.webp" alt="">
                        <img class="page__img-images page__img-right" src="<?php echo bloginfo('template_url')?>/assets/images/rim/rimfier.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer();
?>