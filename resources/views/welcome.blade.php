<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Promo site krasber</title>
        <meta name="description" content="Связаться с нами info@krasber.ru или +7 (978) 754-74-99.">
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
        <header>
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
                                        <a href="#">О нас</a>
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
                                <a href="tel:+7(978)754-74-99">+7(978)754-74-99</a>
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

        <section class="guarantees">
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
                            <div class="s-item-btn">
                                <div class="btn btn-styled" data-service="Landing page">
                                    Заказать
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                    </svg>
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
                            <div class="s-item-btn">
                                <div class="btn btn-styled" data-service="Корпоративный сайт">
                                    Заказать
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                    </svg>
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
                            <div class="s-item-btn">
                                <div class="btn btn-styled" data-service="Сайт-визитка">
                                    Заказать
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                    </svg>
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
                            <div class="s-item-btn">
                                <div class="btn btn-styled" data-service="Сайт-каталог">
                                    Заказать
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                    </svg>
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
                            <div class="s-item-btn">
                                <div class="btn btn-styled" data-service="Промо-сайт">
                                    Заказать
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-cheveron-down') }}"></use>
                                    </svg>
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
                            <div class="s-item-btn">
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
        <script src="{{ asset('js/main.min.js') }}"></script>
        <script src="{{ asset('js/vendor.min.js') }}"></script>
    </body>
</html>
