<?php /* Single Post Template: Одиночная запись - сайт */ get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <main id="single-wrapper">
        <header class="single-site-header" style="background-image:url(https://truemisha.ru/images/2016/03/css-animation-background.png);">
            <div class="single-site-header-attr">
                <div class="single-site-header-title wow fadeInUp"><h1><?php the_title(); ?></h1></div>
                <div class="single-site-header-desc wow fadeInUp"><?php the_excerpt(); ?></div>
                <a class="button-red wow fadeInUp" href="<?php the_field('project_link'); ?>" target="_blank">Посетить сайт</a>
            </div>
            <div class="single-site-header-thumbs">
                <img class="wow bounceInUp" data-wow-delay="0.5s" src="<?php the_field('thumb_one'); ?>">
                <img class="wow bounceInUp" data-wow-delay="0.6s" src="<?php the_field('thumb_two'); ?>">
                <img class="wow bounceInUp" data-wow-delay="0.7s" src="<?php the_field('thumb_three'); ?>">
            </div>
        </header>
        <section class="single-site-content">
            <div class="text-block">
                <?php the_content(); ?>
            </div>
            <div class="single-site-content-params">
            <div class="development">
                <div>Над проектом работали:</div>
                <?php if(have_rows('project_development')): ?>
                <?php while(have_rows('project_development')): the_row(); ?>
                <div class="development-guy">
                    <img src="<?php the_sub_field('project_development_guy_photo'); ?>">
                    <p><?php the_sub_field('project_development_guy_name'); ?></p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="share">
                <div>Поделиться:</div>
                <div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="6" data-mode="share" data-like-text-enable="false" data-mobile-view="false" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="40" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1525535" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="true" class="uptolike-buttons" ></div>
            </div>
        </div>
        </section>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>