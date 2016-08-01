<?php /* Template Name: Страница - контакты */ get_header(); ?>
<div class="full-height">
    <aside id="sidebar">
            <div class="full-height full-width middle-parent">
                <div class="full-height full-width middle-children">
                    <div class="contacts">
                        <h1>Контакты:</h1>
                        <div class="margin-b-20">
                            +7 (926) 353-64-48 <span>(фото, видео)</span><br>+7 (925) 152-92-23 <span>(сайты, дизайн)</span>
                        </div>
                        <div class="margin-b-20">
                            <a href="mailto:info@p-motion.ru">info@p-motion.ru</a> 
                        </div>
                        <div>Россия, г.Сергиев Посад,<br>пр-т.Красной Армии, д.240</div>
                    </div>
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
    </aside>
    <section id="video-block">
        <video controls autoplay muted loop poster="<?php bloginfo('template_url'); ?>/assets/images/poster.png">
            <source src="<?php bloginfo('template_url'); ?>/assets/video/contacts.webm" type="video/webm">
            <source src="<?php bloginfo('template_url'); ?>/assets/video/contacts.mp4" type="video/mp4">
            <source src="<?php bloginfo('template_url'); ?>/assets/video/contacts.ogv" type="video/ogg">
        </video>
    </section>
</div>
<?php get_footer(); ?>