<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>