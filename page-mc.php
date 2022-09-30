<?php 
/*
Template Name: Маскитные сетки
*/
?>
<?php get_header();
?>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('mc-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/mc/mctwo.jpg" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('mc-subtext'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mc">
        <div class="container">
            <div class="gorizont__title mc__title">
            <?php the_field('mc-title-one'); ?>
            </div>
            <div class="mc__inner">
                <div class="mc__text">
                <?php the_field('mc-subtext-one'); ?>
                </div>
                <div class="mc__img">
                    <img src="<?php echo bloginfo('template_url')?>/assets/images/mc/mcone.webp" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('mc-title-two'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/mc/mcthree.webp" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('mc-subtext-two'); ?>
                </div>
            </div>
        </div>
    </section>



    <?php get_footer();
?>