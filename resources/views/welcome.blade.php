<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Специальное предложение на разработку сайтов в Симферополе от веб-студии Красбер</title>
        <meta name="description" content="Актуальные цены на разработку сайтов любой тематики и сложности. Связаться с нами info@krasber.ru или +7 (978) 754-74-99.">
        <meta name="theme-color" content="#eceff4">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}" type="image/png">
        <link rel="icon" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}" type="image/png">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicons/apple-touch-icon-precomposed.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/favicons/apple-touch-icon-167x167.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="apple-touch-icon" sizes="1024x1024" href="{{ asset('img/favicons/apple-touch-icon-1024x1024.png') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-top">
                            <div class="h-top-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('img/logo_blue.svg') }}" alt="Создание сайта в веб-студии Красбер" title="Веб-студия Красбер" >
                                </a>
                            </div>
                            <div class="h-top-menu">
                                <ul>
                                    <li class="active">
                                        <a href="#s-guarantees">О нас</a>
                                    </li>
                                    <li>
                                        <a href="#s-portfolio">Портфолио</a>
                                    </li>
                                    <li>
                                        <a href="#s-order">Акция</a>
                                    </li>
                                    <li>
                                        <a href="#s-services">Цены 2020</a>
                                    </li>
                                    <li>
                                        <a href="#s-contacts">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="h-top-phone">
                                <a href="tel:+79787547499">+7(978)754-74-99</a>
                            </div>
                            <div class="h-top-btn">
                                <div class="btn">
                                    Связаться с нами
                                </div>
                            </div>
                            <div class="h-mob-menu">
                                <svg>
                                    <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-menu') }}"></use>
                                </svg>
                                <div class="h-mob-menu-close icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-close-circle') }}"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-title">
                            Делаем сайты, которые<br />приносят прибыль
                            <div class="h-from-price">
                                от <span>12 000₽</span>
                            </div>
                        </div>
                        <div class="h-subtitle">
                            Закажи сайт сегодня и получи первых клиентов уже завтра!
                        </div>
                        <div class="h-btn">
                            <div class="btn">
                                Рассчитать стоимость сайта и сроки
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="guarantees" id="s-guarantees">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-title">Наши гарантии</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 01
                                </div>
                            </div>
                            <div class="g-item-text">
                                Работает команда специалистов
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 02
                                </div>
                            </div>
                            <div class="g-item-text">
                                Используем современные технологии
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 03
                                </div>
                            </div>
                            <div class="g-item-text">
                                Создаем крутой дизайн сайта
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 04
                                </div>
                            </div>
                            <div class="g-item-text">
                                Создаем адаптивную верстку сайта
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 05
                                </div>
                            </div>
                            <div class="g-item-text">
                                Бесплатная техническая поддержка
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="g-item">
                            <div class="g-item-title">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                    </svg>
                                </div>
                                <div>
                                    / 06
                                </div>
                            </div>
                            <div class="g-item-text">
                                Делаем все по плану и по срокам
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cases" id="s-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-title">Наши последние работы</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/more-laminata.png') }}" alt="Создание сайта-каталога ламината">
                            <div class="c-item-text">
                                <div class="name">Каталог ламината Симферополь</div>
                                <div class="tags">
                                    сайт-каталог, готовый дизайн, подключение CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/sayta-katalog-laminata-v-simferopole" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/bani.jpg') }}" alt="Создание интернет-магазина">
                            <div class="c-item-text">
                                <div class="name">Каталог бань в Севастополе</div>
                                <div class="tags">
                                    сайт-каталог, готовый дизайн, подключение CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/sayt-magazin-dlya-ban" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/laliga.png') }}" alt="Продажа билетов на спортивные мероприятия">
                            <div class="c-item-text">
                                <div class="name">Продажа билетов в Москве</div>
                                <div class="tags">
                                    сайт-каталог, уникальный дизайн, авторская CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/championsleague-tickets" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/sani.jpg') }}" alt="Создание сайта для отеля SANY">
                            <div class="c-item-text">
                                <div class="name">Сайт отеля Николаевка</div>
                                <div class="tags">
                                    корпоративный сайт, готовый дизайн, CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/sayt-dlya-otelya-sany" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/wood-brick.jpg') }}" alt="Сайт строительства домов в Севастополе и Крыму">
                            <div class="c-item-text">
                                <div class="name">Каталог по строительству Крым</div>
                                <div class="tags">
                                    сайт-каталог, готовый дизайн, подключение CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/sayt-dlya-stroitelstva-domov" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="c-item">
                            <img src="{{ asset('img/bikor.jpg') }}" alt="Разработка сайта для лакокрасочной организации">
                            <div class="c-item-text">
                                <div class="name">Разработка сайта для лакокрасочной организации</div>
                                <div class="tags">
                                    сайт-каталог, готовый дизайн, подключение CMS
                                </div>
                                <a href="https://krasber.ru/portfolio/bikor-tech" target="_blank" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="order" id="s-order">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="o-sub-title">
                            При заказе сайта сегодня реклама
                        </div>
                        <div class="o-title">
                            Яндекс.Директ в подарок!
                        </div>
                        <div class="o-info">
                            <p>* Мы бесплатно создадим одну рекламную кампанию и настроим счетчик метрики.</p>
                            <p>** Предложение подходит для тех, кто пробует рекламу впервые, настройка  для 1-2 групп товаров, расположенных на одном сайте.</p>
                        </div>
                    </div>
                    <div class="col-6 as-center">
                        <div class="o-form">
                            <form action="{{ route('send.order') }}" id="order-form" method="post">
                                @csrf
                                <div class="group">
                                    <select name="service" required>
                                        <option value="Корпоративный сайт">Корпоративный сайт</option>
                                        <option value="Landing page">Landing page</option>
                                        <option value="Сайт-визитка">Сайт-визитка</option>
                                        <option value="Промо-сайт">Промо-сайт</option>
                                        <option value="Сайт-каталог">Сайт-каталог</option>
                                        <option value="Интернет-магазин">Интернет-магазин</option>
                                    </select>
                                </div>
                                <div class="group">
                                    <input type="text" value="" name="name" placeholder="Имя" autocomplete="off" required minlength="3">
                                </div>
                                <div class="group group-two">
                                    <div class="group">
                                        <input type="email" value="" name="email" placeholder="Email" autocomplete="off" required>
                                    </div>
                                    <div class="group">
                                        <input type="text" value="" name="phone" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="info">
                                    Оставляя заявку, Вы соглашаетесь на обработку персональных данных
                                </div>
                                <div class="center">
                                    <button class="btn" type="submit">Заказать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="s-services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-title">
                            Наши услуги и цены
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Landing page
                            </div>
                            <div class="s-item-price">
                                от <span>12 000</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Одностраничный сайт для одного товара или услуги с графическими элементами, отлично подходит для акционных товаров или услуг.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        <span>Шаблонный либо уникальный дизайн</span>
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Адаптация под мобильные устройства
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Верстка макета сайта с нуля либо адаптация под корпоративные цвета и услуги Вашего бизнеса
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Управление содержимым сайта через CMS
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы обратной связи
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Установка виджетов
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Меню навигации
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Представление в лучшем виде информации и Вашей компании, фотографий, услуг/товаров отзывов.
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 7 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Landing page">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Корпоративный сайт
                            </div>
                            <div class="s-item-price">
                                от <span>15 500</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Многостраничной сайт обычно от пяти страниц. Отлично подходит для бизнеса с несколькими видами похожих или смежных услуг.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Создаем основные страницы: главная, контакты, отзывы, список услуг/товаров, новости, статьи, о компании
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Шаблонный либо уникальный дизайн
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Адаптация под мобильные устройства
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Верстка макета сайта с нуля либо адаптация под корпоративные цвета и услуги Вашего бизнеса
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Управление содержимым сайта через CMS
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы обратной связи
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Установка виджетов
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 7 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Корпоративный сайт">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Сайт-визитка
                            </div>
                            <div class="s-item-price">
                                от <span>15 500</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Многостраничной сайт для представления одного вида услуг либо товаров обычно до пяти страниц.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Создаем основные страницы: главная, контакты, отзывы, список услуг/товаров, новости, о компании
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Шаблонный либо уникальный дизайн
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Адаптация под мобильные устройства
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Верстка макета сайта с нуля либо адаптация под корпоративные цвета и услуги Вашего бизнеса
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Управление содержимым сайта через CMS
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы обратной связи
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Установка виджетов
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 7 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Сайт-визитка">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Промо-сайт
                            </div>
                            <div class="s-item-price">
                                от <span>25 000</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Сайт для раскрутки брэнда, товара, услуги либо события. Чаще всего создается при проведении рекламной акции.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Разработка концепции и реализация уникального дизайна
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Полное наполнение сайта под Ваше торговое предложение или акцию
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Проработка УТП, CTA, акционных баннеров
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Одностраничный сайт
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Верстка макета дизайна сайта с нуля
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата, формы обратной связи типа «Заказать звонок»
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Без CMS
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 20 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Промо-сайт">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Сайт-каталог
                            </div>
                            <div class="s-item-price">
                                от <span>30 000</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Сайт для презентации большого количества товаров или услуг с возможностью помещения в корзину и заказа.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Создаем основные страницы: главная, контакты, отзывы, каталог услуг, каталог товаров, страница с описанием товара, новости, статьи, о компании
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Возможность подключения корзины
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Возможность подключения поиска для сайта
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Наполнение сайта и каталога- 3 категорий по 10 товаров, более – за дополнительную плату
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Шаблонный либо уникальный дизайн
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Адаптация под мобильные устройства
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Верстка макета сайта с нуля либо адаптация под корпоративные цвета и услуги Вашего бизнеса
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Управление содержимым сайта через CMS
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы обратной связи
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Установка виджетов
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 20 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Сайт-каталог">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="s-item">
                            <div class="s-item-name">
                                Интернет-магазин
                            </div>
                            <div class="s-item-price">
                                от <span>40 000</span> ₽
                            </div>
                            <div class="s-item-desc">
                                <p>Полноценный магазин в интернете с корзиной для заказа товара личным кабинетом поиском и фильтрами.</p>
                            </div>
                            <div class="s-item-text">
                                <ul>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Создаем основные страницы: главная, контакты, отзывы, каталог услуг, каталог товаров, страница с описанием товара, новости, статьи, о компании
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Предусмотрено управление заказами через ЦМС
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Дизайн под ключ либо готовый
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Адаптация под мобильные устройства
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Наполнение сайта и каталога- 5 категорий по 10 товаров, более – за дополнительную плату
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Подключение корзины, поиска, фильтров
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Реализация личного кабинета, входа и регистрации
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы обратной связи
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Формы захвата
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Установка виджетов
                                    </li>
                                    <li>
                                        <div class="icon-default">
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-check') }}"></use>
                                            </svg>
                                        </div>
                                        Инструкция для самостоятельного редактирования и наполнения сайта
                                    </li>
                                </ul>
                            </div>
                            <div class="s-item-terms">
                                <div class="icon-default">
                                    <svg>
                                        <use xlink:href="../img/sprites/sprite.svg#icon-time"></use>
                                    </svg>
                                </div>
                                Срок создания: <span>от 20 рабочих дней</span>
                            </div>
                            <div class="s-item-btn">
                                <div>
                                    <div class="btn btn-styled" data-service="Интернет-магазин">
                                        Заказать
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Нужен сайт, но не знаете какого исполнителя выбрать? Приводим 11 причин, после которых, Вы доверите создание своего сайта нам!</h1>
                        <h2>Всегда качественно и надёжно</h2>
                        <p>В своей работе мы, веб студия «Красбер», используем только современные технологии для разработки сайтов, которые дружелюбны к поисковым системам. Перед завершением разработки и сдачи сайта Вам мы его тестируем и проверяем. Вы можете быть уверены, что Вам в руки попадёт качественный продукт, который пригоден для раскрутки уже сегодня.</p>
                        <h2>Дизайн сайтов</h2>
                        <p>При создании сайта мы разрабатываем макет и структуру сайта, исходя из принципов UХ и UI дизайна, который понятен, приятен и удобен пользователям. Неважно, заказываете ли Вы у нас разработку уникального дизайна сайта или же шаблонный, они одинаково хороши и продуктивны при взаимодействии с пользователем.</p>
                        <h2>Верстка сайтов</h2>
                        <p>Все наши сайты адаптированы для просмотра с мобильных устройств, то есть сайт одинаково хорошо отображается на экранах большого и маленького размера.</p>
                        <h2>Гарантия актуальности</h2>
                        <p>Заказывая сайт в нашей веб студии, Вы можете быть уверены, что сайт будет актуален по структуре и дизайну ближайшие 5 лет.</p>
                        <h2>Гибкость</h2>
                        <p>В CMS включены все необходимые и популярные модули: простой текстовый редактор с возможностью загрузить изображения и поставить ссылки, модуль отзывов с модерации отзывов через сайт, учет заказов и уровни доступа в личный кабинет для интернет-магазина. Дальнейшее подключение различных модулей и расширение функционала не имеет какого-либо ограничения.</p>
                        <h2>Дружелюбность к поисковым системам Яндекс и Google</h2>
                        <p>На этапе создания сайта мы делаем упор на дружелюбность и сотрудничество с поисковыми системами, ведь процесс создания сайта неразрывно связан с сео-продвижением.</p>
                        <h2>Безопасность</h2>
                        <p>В безопасности Вашего хостинга и сохранности данных Вы можете быть уверены. Помимо обычных мер и безопасного протокола, мы настраиваем сохранение копии сайта, то есть при неполадках за считанные минуты можно восстановить сайт.</p>
                        <h2>Техническая поддержка без ограничений</h2>
                        <p>Если Вы заказываете сайт у нас, то в любое рабочее время наш менеджер ответит на Ваши вопросы по редактированию сайта, разъяснит непонятные моменты и подскажет лучшее решение для рекламы.</p>
                        <h2>Комплексный подход</h2>
                        <p>К созданию сайта мы подходим комплексно. Мы не просто создаем Вам магазин в интернете, а вписываем его в рамки Вашего брэнда, прорабатываем стратегию развития от прототипа и дизайна сайта до дальнейшей рекламы.</p>
                        <h2>Прозрачная работа</h2>
                        <p>Все оплаты и задачи фиксируется в договоре и техническом задании. Уже на этапе согласования сайта нашим клиентам понятны этапы разработки сайта и сроки и их стоимость.</p>
                        <h2>Универсальность CMS</h2>
                        <p>CMS для наших сайтов проста и понятна, написана на популярном языке программирования php, поэтому  любой квалифицированный программист без труда разберётся в работе системы.</p>
                        <h3 class="center">Появились вопросы? Оставляйте свои данные в поле ниже для бесплатной консультации!</h3>
                    </div>
                </div>
            </div>
        </section>


        <section class="contacts" id="s-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-title">Наши контакты</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="c-form">
                            <form action="{{ route('send.contact') }}" id="contacts-form" method="post">
                                @csrf
                                <div class="group">
                                    <input type="text" name="name" placeholder="Имя" required autocomplete="off" minlength="3">
                                </div>
                                <div class="group group-two">
                                    <div class="group">
                                        <input type="email" value="" name="email" placeholder="Email" required autocomplete="off">
                                    </div>
                                    <div class="group">
                                        <input type="text" value="" name="phone" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="info">
                                    Оставляя заявку, Вы соглашаетесь на обработку персональных данных
                                </div>
                                <div class="center">
                                    <button class="btn" type="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="c-details">
                            <ul>
                                <li>
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-phone') }}"></use>
                                    </svg>
                                    <a href="tel:+79787547499">+7 (978)754-74-99 </a>
                                </li>
                                <li>
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-mail') }}"></use>
                                    </svg>
                                    <a href="mailto:info@krasber.ru">info@krasber.ru</a>
                                </li>
                                <li>
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-global') }}"></use>
                                    </svg>
                                    <div>
                                        <span>Официальный сайт:</span> <a href="https://krasber.ru" target="_blank">krasber.ru</a>
                                    </div>
                                </li>
                                <li>
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-location') }}"></use>
                                    </svg>
                                    Симферополь, Республика Крым
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>2017 - 2020 © Создание и продвижение сайтов. ИНН 910601621324 </p>
                        <p>Вся информация, представленная на сайте, носит информационный характер и ни при каких условиях не является публичной офертой.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="notify"></div>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(60988696, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/60988696" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <script src="{{ asset('js/main.min.js') }}"></script>
        <script src="{{ asset('js/vendor.min.js') }}"></script>
    </body>
</html>
