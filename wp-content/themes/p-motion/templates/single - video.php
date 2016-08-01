<?php /* Single Post Template: single-video */ get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <main id="single-wrapper" class="single-wrapper-video">
        <div class="width-1000 hor-wrap">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>