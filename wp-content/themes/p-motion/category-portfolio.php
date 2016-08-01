<?php get_header(); ?>
<div id="portfolio" class="wrap hor-wrap">
    <div class="portfolio-filter">
        <div class="filter" data-filter="all">Все работы</div>
        <div class="filter" data-filter=".category-branding">Branding</div>
        <div class="filter" data-filter=".category-digital">Digital</div>
        <div class="filter" data-filter=".category-media">Media</div>
    </div>
    <div class="portfolio-posts">
        <div class="row">
            <?php
                $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                $args = array(
                    'post_type'         =>  'post',
                    'category_id'       =>  array(12,14,1),
                    'paged'             =>  $paged,
                    'orderby'           => date,
                ); 
                $my_query = new WP_Query( $args );
                while( $my_query->have_posts() ) :
                       $my_query->the_post();
            ?>
            <?php $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'high'); ?>
            <article <?php post_class(array('mix','col-4','float-l')); ?>>
                <a href="<?php the_permalink(); ?>">
                    <header class="post-header">
                        <div class="post-image" style="background-image:url(<?php echo $full_image_url[0]; ?>);"></div>
                    </header>
                </a>
            </article>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>