<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php the_title(); ?> &middot; P-Motion</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php the_field('кастомные_стили'); ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="Keywords" content="<?php the_field('ключевые_слова'); ?>">
<?php wp_head(); ?>
<script>
    jQuery(window).on('load', function () {
    var $preloader = jQuery('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
    });
</script>
</head>
<body <?php body_class(); ?>>
<div id="page-preloader">
    <div class="spinner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/preload.gif">
    </div>
</div>
<header id="header">
    <div class="main-header-logo">
        <a href="/"></a>
    </div>
    <div class="main-header-lang">
        <a href="#">RU &#10003;</a>
    </div>
    <div class="main-header-nav">
        <nav class="main-header-menu hide">
            <button type="button" class="tcon tcon-menu--xbutterfly" aria-label="toggle menu">
                <span class="tcon-menu__lines" aria-hidden="true"></span>
                <span class="tcon-visuallyhidden">toggle menu</span>
            </button>
            <div class="full-height middle-parent">
                <div class="full-height full-width middle-children">
                    <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
                </div>
            </div>
            <div class="main-header-menu-social">
                <div class="main-header-menu-social-icon">
                    <a href="https://vk.com/p.motion" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/vk.svg"></a>
                </div>
                <div class="main-header-menu-social-icon">
                    <a href="https://www.facebook.com/p.motion8" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/f.svg"></a>
                </div>
                <div class="main-header-menu-social-icon">
                    <a href="https://www.instagram.com/p_motion/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/insta.svg"></a>
                </div>
                <div class="main-header-menu-social-icon">
                    <a href="https://vimeo.com/pmotion" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/v.svg"></a>
                </div>
                <div class="main-header-menu-social-icon">
                    <a href="https://www.behance.net/pmtn" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/be.svg"></a>
                </div>
            </div>
        </nav>
    </div>
    <clear></clear>
</header>