<?php /* template name: Страница презентации */ get_header(); ?>
<main id="presentation-page">
    <section class="presentation-block-1">
        <div class="full-height full-width middle-parent">
            <div class="full-height full-width middle-children">
                <h1>студия корпоративного <span>брендинга</span></h1>
                <p>О том, как именно создается личность компании</p>
            </div>
        </div>
    </section>
    <div class="background-white">
        <section class="presentation-block-2">
        <h2>Зачем нужен брендинг?</h2>
        <p class="width-600 hor-wrap">Бренд символизирует определённые качества продукта
и характеристики самого производителя продукта.
Бренд должен быть узнаваем. Когда у компании есть
лицо и имя - ее запоминают и ей доверяют.</p>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/1.png">
    </section>
    <section class="presentation-block-3">
        <h2 class="presentation-heading">Как мы справляемся с этой задачей:</h2>
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">1.</span>
            <h3>Знакомство с клиентом</h3>
            <ul>
                <li>- К нам обращается Клиент.</li>
                <li>- Мы договариваемся о встрече.</li>
                <li>- Знакомимся с клиентом, он рассказывает о своей компании и свои пожелания.</li>
            </ul>
            <div class="presentation-image">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/2.png">
            </div>
        </div>
    </section>
    <section class="presentation-block-4">
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">2.</span>
            <h3>Стратегия</h3>
            <ul>
                <li>- В соответствии с требованиями заказчика, мы разрабатываем коммерческое предложение.</li>
                <li>- Клиент утверждает предложение и мы начинаем.</li>
            </ul>
            <div class="presentation-image">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/3.png">
            </div>
        </div>
    </section>
    <section class="presentation-block-5">
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">2.</span>
            <h3>Процесс</h3>
            <ul>
                <li>- Распределяются задачи между отделами, начинается процесс создания продукта:</li>
            </ul>
            <div class="presentation-image">
                <ul>
                    <li>
                        <h4>name</h4>
                        <p>Наша команда придумывает название компании.</p>
                    </li>
                    <li>
                        <h4>design</h4>
                        <p>Разрабатывается фирменный стиль и логотип компании.</p>
                        <p class="grey">Создается айдентика в которой заложена идея компании, 
ее преимущества и особенности.</p>
                    </li>
                    <li>
                        <h4>digital</h4>
                        <p>Разрабатывается сайт и мобильное приложения.</p>
                        <p class="grey">Сайт является инструментом общения вашей компании
                        с клиентов в интернете, поэтому очень важно создать
                        максимально удобный процесс коммуникации.</p>
                    </li>
                    <li>
                        <h4>video</h4>
                        <p>Снимаем Ваше корпоративное, рекламное видео.</p>
                        <p class="grey">На данный момент видео - самый мощный инструмент,
чтобы донести до потребителя то, что вам нужно.</p>
                    </li>
                    <li>
                        <h4>foto</h4>
                        <p>Делаем фотографии на сайт и другую рекламную продукцию.</p>
                        <p class="grey">Грамотно поставленное рекламное фото демонстрирует
изделия и услуги с наилучшей стороны, а компанию
как бренд, которому можно доверять.</p>
                    </li>
                </ul>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/4.png">
            </div>
        </div>
    </section>
    <section class="presentation-block-6">
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">4.</span>
            <h3>Тестирование</h3>
            <ul>
                <li>- Тестируем продукт на целевой аудитории клиента, дорабатываем  до идеала.</li>
            </ul>
        </div>
        <div class="presentation-image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/5.png">
        </div>
    </section>
    <section class="presentation-block-7">
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">5.</span>
            <h3>Продакшн</h3>
            <ul>
                <li>- Согласовываем проект и утверждаем с заказчиком.</li>
                <li>- Выпускаем продукт в массы.</li>
            </ul>
        </div>
        <div class="presentation-image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/6.png">
        </div>
    </section>
    <section class="presentation-block-8">
        <div class="presentation-block-list">
            <span class="presentation-block-list-number">6.</span>
            <h3>Сопровождение проекта</h3>
            <ul>
                <li>- Заботимся о Вашем сайте и выводим его на первые позиции в яндексе и гугле.</li>
                <li>- Продвигаем видео на ютубе.</li>
            </ul>
        </div>
        <div class="presentation-image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/7.png">
        </div>
    </section>
    <section class="presentation-block-9">
        <div class="presentation-block-list">
            <h3>Вот и всё</h3>
        </div>
        <div class="presentation-image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/presentation/8.png">
        </div>
    </section>
    </div>
</main> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > $('.presentation-block-1').height()) {
                $('.header-black').toggleClass('header-black header-white');
            } else {
                $('.header-white').toggleClass('header-white header-black');
            }
        });
    });
</script>
<?php get_footer(); ?>