<?php /* Single Post Template: single-weding-dphoto */ get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <main id="single-wrapper" class="single-wedding-wrapper-photo">
        <h1><?php the_title(); ?></h1>
        <div class="single-wrapper-photo-burger">
            <div class="single-wrapper-photo-burger-grid">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/wedding/app.svg" width="25">
            </div>
            <div class="single-wrapper-photo-burger-line active">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/wedding/interface.svg" width="28">
            </div>
        </div>
        <div class="wedding-photos">
            <?php if(have_rows('фотографии')): ?>
            <?php while(have_rows('фотографии')): the_row(); ?>
            <a href="<?php the_sub_field('фотография'); ?>">
                <div style="background:url(<?php the_sub_field('фотография'); ?>) center center no-repeat" class="alignnone"></div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
    <script>
        jQuery(document).ready(function($) {
            $('.wedding-photos a').attr('data-lightbox', 'roadtrip');   
            $('.single-wrapper-photo-burger-grid').click(function(){
                $(this).addClass('active');
                $(this).siblings("div").removeClass("active");
                $('.wedding-photos').removeClass('line').addClass('grid');
            });
            $('.single-wrapper-photo-burger-line').click(function(){
                $(this).addClass('active');
                $(this).siblings("div").removeClass("active");
                $('.wedding-photos').removeClass('grid').addClass('line');
            });   
            lightbox.option({
              'resizeDuration': 200,
              'wrapAround': true,
              'showImageNumberLabel': false
            })
        });
    </script>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>