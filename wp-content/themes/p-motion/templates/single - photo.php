<?php /* Single Post Template: single-photo */ get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <main id="single-wrapper" class="single-wrapper-photo">
        <div class="full-height full-width middle-parent">
            <div class="full-height full-width middle-children">
                <div class="photo-slider-wrap hor-wrap">
                    <div class="slider">
                        <ul class="photo-slider">
                            <?php if(have_rows('фотографии')): ?>
                            <?php while(have_rows('фотографии')): the_row(); ?>
                            <li>
                                <img src="<?php the_sub_field('фотография'); ?>">
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.wedding-slider,.photo-slider').bxSlider();
                    $('.all-photos h2').click(function(){
                    $('.all-photos').toggleClass('show');
                });
                $('.all-photos-content ul li a').attr('data-lightbox', 'roadtrip');   
            });  
        </script>
        <div class="all-photos hide">
            <h2>Смотреть все фотографии</h2>
            <div class="all-photos-content">
                <ul>
                    <?php if(have_rows('фотографии')): ?>
                    <?php while(have_rows('фотографии')): the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('фотография'); ?>"><img src="<?php the_sub_field('фотография'); ?>"></a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>