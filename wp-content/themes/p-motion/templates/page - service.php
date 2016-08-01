<?php /* Template Name: Страница - Услуги */ get_header(); ?>
<div id="service-page" class="<?php the_field('фон_услуги'); ?>">
    <div class="service-title">
        <?php the_field('заголовок'); ?>
    </div>
    <nav class="service-page-nav">
        <ul>
            <?php if(have_rows('service-work')): ?>
            <?php while(have_rows('service-work')): the_row(); ?>
            <li><a href="#<?php the_sub_field('service-work-title'); ?>"><?php the_sub_field('service-work-title'); ?></a></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="section section-first">
        <div class="section-wrap">
            <div class="section-desc text-block">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="section-first-down">
            хочу узнать<br>больше
        </div>
    </div>
    <?php if(have_rows('service-work')): ?>
    <?php while(have_rows('service-work')): the_row(); ?>
    <div class="section" data-anchor="<?php the_sub_field('service-work-title'); ?>">
        <div class="section-wrap">
            <div class="section-title">
                <h2><?php the_sub_field('service-work-title'); ?></h2>
            </div>
            <div class="section-desc text-block">
                <p><?php the_sub_field('service-work-desc'); ?></p>
            </div>
            <div class="section-work">
                <h3>Пример:</h3>
                <?php the_sub_field('service-work-exemple'); ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>