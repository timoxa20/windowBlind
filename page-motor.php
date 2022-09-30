<?php 
/*
Template Name: Моторизация
*/
?>

<?php get_header();
?>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('mot-title'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/mot/noroot.webp" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('mot-subtext'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mc">
        <div class="container">
            <div class="gorizont__title mc__title">
            <?php the_field('mot-title-one'); ?>
            </div>
            <div class="mc__inner">
                <div class="mc__text">
                <?php the_field('mot-subtext-one'); ?>
                </div>
                <div class="mc__img">
                    <img src="<?php echo bloginfo('template_url')?>/assets/images/mot/motone.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="gorizont">
        <div class="container">
            <div class="gorizont__title">
            <?php the_field('mot-title-two'); ?>
            </div>
            <div class="gorizont__inner">
                <div class="gorizont__img">
                    <img class="gorizont__img-images" src="<?php echo bloginfo('template_url')?>/assets/images/mot/mottwo.jpg" alt="">
                </div>
                <div class="gorizont__text">
                <?php the_field('mot-subtext-two'); ?>
                </div>
            </div>
        </div>
    </section>



    <?php get_footer();
?>