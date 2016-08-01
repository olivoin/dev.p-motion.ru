<?php /* Single Post Template: single-default */ get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<main id="single-wrapper">
    <header class="header-balet">
        <h1>Русский национальный балет</h1>
        <h2>Презентационный сайт</h2>
        <p>Создавая сайт для Русского Национального Балета, мы поставили задачу познако-
мить аудиторию с театром и заинтересовать зрителя, тем самым повысить интерес к
театру и увеличить продажу билетов. Балет имени Радченко занимает лидирующие
пазиции в мире, необходимо было сделать лаконичный дизайн сайта, передающий
дух балета.</p>
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/girl.png">
    </header>
    <div class="balet-desc-1">
        <p>Балетная компания основана в 1989 году легендарным танцовщиком
Большого Театра: Сергеем Радченко. Елена и Сергей Радченко, более 25 лет успешно
руководят “Русской Национальной Балетной Компанией”.</p>
    </div>
    <div class="balet-desc-2">
        <h2>Адаптивный дизайн</h2>
        <p style="margin-bottom:60px;">Благодаря адаптивной верстве, все стараницы сайта выглядят<br>
прекрасно на любых устройствах</p>
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/11.png">
    </div>
    <div class="balet-about">
        <h2 class="width-850 hor-wrap">О театре</h2>
        <p class="width-850 hor-wrap">Каждый экран стараницы « О театре» состоит из фотогравий и описания балета. За 1
минуту человек знакомится с театром: узнает особенности, репертуар и историю балета</p>
        <div class="text-center">
            <img src="http://p-motion.ru/wp-content/uploads/2015/12/2.png">
        </div>
    </div>
    <div class="balet-repertuar relative">
        <div class="width-1000 hor-wrap">
            <div class="width-450">
                <h2>Репертуар</h2>
                <p>Стараница «Репертуар» быстро позволяет познакомиться с
каждым выступлением театра. Только по одной миниатюре
становится понятным, что мы увидим на выступлении</p>
            </div>
        </div>
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/9.png" class="absolute top-0 right-0">
    </div>
    <div class="width-1000 hor-wrap">
        <p>При выборе репертуара открывается стараница с подробным описанием представления</p>
    </div>
    <div class="text-center" style="margin-bottom:150px;">
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/10.png">
    </div>
    <div class="balet-repertuar relative">
        <div class="width-1000 hor-wrap">
            <div class="width-450">
                <h2>Афиша</h2>
                <p>Стараница «Афиша» состоит из удобного календаряс датами выступлений, так же показан репертуар на ближайший месяц</p>
            </div>
        </div>
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/111.png" class="absolute top-0 right-0">
    </div>
    <div class="balet-repertuar relative">
        <img src="http://p-motion.ru/wp-content/uploads/2015/12/3.png" class="absolute top-0 left-0">
        <div class="width-1000 hor-wrap">
            <div class="width-450" style="margin-left:550px;">
                <h2>English</h2>
                <p>"Русский Национальный Балет" часто путешествует по миру, поэтому была необходимость в английской версии сайта</p>
            </div>
        </div>
    </div>
    <div class="balet-quote">
        <div class="width-1200 hor-wrap text-center">
            <p><em>«Великолепная школа позволяет артистам с блеском демонстрировать свое мастерство.
Подлинной жизнерадостностью, сочетанием характерных и классических танцев, русские
сумели зажечь нашу изнеженную, избалованную публику. Такое мы видели впервые». </em></p>
            <p>Билл Уайтни, обозреватель газеты «Лос Анджелес таймс».</p>
        </div>
    </div>
    <div class="balet-site">
        <div class="full-height full-width middle-parent">
            <div class="full-height full-width middle-children">
                <div class="width-800 hor-wrap text-right">
                    <a href="http://radchenko-ballet.com/" target="_blank">Посмотреть сайт</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>