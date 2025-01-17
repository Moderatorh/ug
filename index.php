<?
$config = include './modules/config.php';
include './modules/form-handler.php'
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Продажа и поставка древесных топливных пеллет в Краснодарском крае и Крыму</title>
    <meta name="description"
          content=" Юг-Пеллет занимается продажей и поставкой древесных топливных пеллет из хвойных пород древесины по всей территории Краснодарского края и Крыма. У нас Вы можете купить качественные пеллеты по оптовым ценам. Постоянное наличие на складе, выгодные цены, высокое качество и оперативная доставка." />
    <meta name="keywords"
          content=" купить пеллеты, топливные пеллеты, хвойные пеллеты, пеллеты в Краснодарском крае, пеллеты в Краснодаре, пеллеты в Крыму" />
    <link rel="preload" href="./assets/css/style.css" as="style">
    <link rel="preload" href="./assets/js/script.min.js" as="script">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./favicon.svg" type="image/svg+xml">    <!-- Yandex.Metrika counter -->

<!--    
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


	<script type="text/javascript">        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');
        ym(88799626, 'init', {clickmap: true, trackLinks: true, accurateTrackBounce: true});    
	</script>

@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
-->

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<!-- 
##################

<noscript>
    <div><img src="https://mc.yandex.ru/watch/88799626" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>

##########################
-->

<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header__logo">
                <div class="header__logo-pic">
                    <picture>
                        <source srcset="./assets/img/logo.webp" type="image/webp">
                        <img src="./assets/img/logo.png" alt="logo"></picture>
                </div>
                <div class="header__logo-text"> Продажа и поставка древесных топливных <br> пеллет по Краснодарскому
                    краю и Крыму
                </div>
            </div>
            <div class="header-address--item"><small>Адреса складов:</small> <b>Краснодарский край <br>г. Краснодар, ул
                    Станичная 7</b> <a href="/#locations" data-tab="tab-content-1">Схема проезда</a></div>
            <div class="header-address--item"><b>Краснодарский край <br>г. Абинск ул. Труда 229</b> <a
                        href="/#locations" data-tab="tab-content-2">Схема проезда</a></div>
            <div class="header-address--item"><b>Республика Крым <br>г. Керчь, ш. Индустриальное, 15</b> <a
                        href="/#locations" data-tab="tab-content-3">Схема проезда</a></div>
            <div class="header-address--item header__contacts-tel">
                <div class="header__tel">
                    <a href="tel:<?php echo $config['telephone'] ?>">
                        <?php echo $config['telephoneFormated'] ?>
                    </a>
                </div>
                <div class="header__time"> Ежендевно с 9:00-20:00</div>
                <div class="header-email header__tel">
                    <a href="mailto:<?php echo $config['email'] ?>">
                        <?php echo $config['email'] ?>
                    </a>
                </div>
            </div>
            <div class="header__burger burger"><span></span></div>
        </div>
    </div>
    <div class="header-address-mobile">
        <div class="container">
            <div class="header-address"><small>Адреса складов:</small>
                <p>Краснодар, Абинск, Керчь</p></div>
            <div class="header__contacts-tel">
                <div class="header__tel">
                    <a href="tel:<?php echo $config['telephone'] ?>"><?php echo $config['telephoneFormated'] ?></a></div>
                <div class="header__time"> Ежендевно с 9:00-20:00</div>
            </div>
        </div>
    </div>
    <div class="burger-menu">
        <div class="burger-menu-items">
            <div class="header-address--item"><small>Адреса складов:</small> <b>Краснодарский край <br>г. Краснодар, ул
                    Станичная 7</b> <a href="/#locations" data-tab="tab-content-1">Схема проезда</a></div>
            <div class="header-address--item"><b>Краснодарский край <br>г. Абинск ул. Труда 229</b> <a
                        href="/#locations" data-tab="tab-content-2">Схема проезда</a></div>
            <div class="header-address--item"><b>Республика Крым <br>г. Керчь, ш. Индустриальное, 15</b> <a
                        href="/#locations" data-tab="tab-content-3">Схема проезда</a></div>
        </div>
        <div class="burger-menu__tel">
            <a href="tel:<?php echo $config['telephone'] ?>">
                <?php echo $config['telephoneFormated'] ?>
            </a>
            <div class="burger-menu__time"> Ежендевно с 9:00-20:00</div>
            <div class="header-email header__tel">
                <a href="mailto:<?php echo $config['email'] ?>">
                    <?php echo $config['email'] ?>
                </a>
            </div>
        </div>
    </div>
</header>
<div class="about">
    <div class="container">
        <div class="about__subscr">
            <div class="about__subscr-text subscr-text">
                <div class="subscr-text__title"><span>Качественные</span> топливные пеллеты</div>
                <div class="subscr-text__subtitle"> из хвойных пород древесины оптом от производителя</div>
                <ul class="subscr-text__points">
                    <li>минимальный заказ от 1 тонны</li>
                    <li>доставка по Краснодарскому краю и Крыму</li>
                    <li>постоянное наличие на складе</li>
                </ul>
                <br> <span>Сотрудничаем с организациями, индивидуальными предпринимателями и физическими лицами</span>
                <br> <br><span>Организуем прямые поставки на объект по области и краю (партии по 20 тонн), минуя наши транзитные склады для удешевления стоимости доставки</span>
            </div>

            <button class="about__subscr-btn" id="issue">
                <span>Создать заявку</span>
            </button>

            <div class="prices">
                <div class="prices-item"><p><span>от</span><b> 13 800 ₽</b> <span>за 1 тонну</span></p>
                    <p>г. Краснодар</p></div>
                <div class="prices-item"><p><span>от</span><b> 13 800 ₽</b> <span>за 1 тонну</span></p>
                    <p>г. Абинск</p></div>
                <div class="prices-item"><p><span>от</span><b> 15 800 ₽</b> <span>за 1 тонну</span></p>
                    <p>г. Керчь</p></div>
                <div class="prices-description"> Цена актуальна <br class="ds-none"> от <b>01.01.25</b> по
                    <b>31.01.25</b> <br> Безналичный расчет +7% для ИП и ООО
                </div>
            </div>
        </div>
        <div class="about__imgs">
            <div class="about__imgs-main">
                <picture>
                    <source srcset="./assets/img/kamin.webp" type="image/webp">
                    <img src="./assets/img/kamin.png" alt="kamin"></picture>
            </div>
            <div class="about__imgs-submain">
                <picture>
                    <source srcset="./assets/img/pellets-pel.webp" type="image/webp">
                    <img src="./assets/img/pellets-pel.png" alt="pellets"></picture>
            </div>
        </div>
    </div>

    <? include './templates/email-form.php' ?>

</div>
<div class="quality">
    <div class="container">
        <div class="quality__pic">
            <div class="quality__pic-img">
                <picture>
                    <source srcset="./assets/img/pel-bucket.webp" type="image/webp">
                    <img src="./assets/img/pel-bucket.jpg" alt=""></picture>
            </div>
            <div class="quality__pic-mobtitle"> Качество и упаковка</div>
        </div>
        <div class="quality__content qual-cont">
            <div class="qual-cont__title"> Качество и упаковка</div>
            <ul class="qual-cont__point qual-points">
                <li class="qual-points__item">
                    <div class="qual-points__item-pic">
                        <picture>
                            <source srcset="./assets/img/pellets1.webp" type="image/webp">
                            <img src="./assets/img/pellets1.png" alt=""></picture>
                    </div>
                    <div class="qual-points__item-title"> Характеристики</div>
                    <div class="qual-points__item-subscr"><p>хвойные породы дерева (ель, сосна)</p>
                        <p>теплоемкость: 4600 кКал/кг</p>
                        <p>диамерт: 8 мм</p>
                        <p>длина : 5-40 мм</p>
                        <p>зольность: 0,5- 0,8 %</p></div>
                </li>
                <li class="qual-points__item">
                    <div class="qual-points__item-pic">
                        <picture>
                            <source srcset="./assets/img/pellets2.webp" type="image/webp">
                            <img src="./assets/img/pellets2.png" alt=""></picture>
                    </div>
                    <div class="qual-points__item-title"> Качество</div>
                    <div class="qual-points__item-subscr"><p>пеллеты евростандарта EnPlus A1</p>
                        <p>низкая зольность</p>
                        <p>полное сгорание</p>
                        <p>имеются протоколы испытаний</p></div>
                </li>
                <li class="qual-points__item">
                    <div class="qual-points__item-pic">
                        <picture>
                            <source srcset="./assets/img/pellets.webp" type="image/webp">
                            <img src="./assets/img/pellets.png" alt=""></picture>
                    </div>
                    <div class="qual-points__item-title"> Фасовка</div>
                    <div class="qual-points__item-subscr"><p>ПЭТ мешки по 20 кг*</p>
                        <p>Биг бэг по 1000 кг</p>                        <span>*на 1 поддоне 50 мешков по 20 кг</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="delivery">
    <div class="container">
        <div class="delivery__content del-cont">
            <div class="del-cont__title"> Доставка и склад</div>
            <ul class="del-cont__points">
                <li class="del-cont__item">
                    <div class="del-cont__item-pic">
                        <picture>
                            <source srcset="./assets/img/Frame-house.webp" type="image/webp">
                            <img src="./assets/img/Frame-house.png" alt="house"></picture>
                    </div>
                    <div class="del-cont__item-title"> Мы предлагаем</div>
                    <div class="del-cont__item-text"> гибкие условия поставки пеллет и постоянное наличие на складе
                    </div>
                </li>
                <li class="del-cont__item">
                    <div class="del-cont__item-pic">
                        <picture>
                            <source srcset="./assets/img/Frame-track.webp" type="image/webp">
                            <img src="./assets/img/Frame-track.png" alt="track"></picture>
                    </div>
                    <div class="del-cont__item-title"> Мы организуем</div>
                    <div class="del-cont__item-text"> доставку любого объёма от 1 до 20 т (газель, манипулятор, фура)
                    </div>
                </li>
                <li class="del-cont__item">
                    <div class="del-cont__item-pic">
                        <picture>
                            <source srcset="./assets/img/Frame-dot.webp" type="image/webp">
                            <img src="./assets/img/Frame-dot.png" alt="location"></picture>
                    </div>
                    <div class="del-cont__item-title"> Самовывоз</div>
                    <div class="del-cont__item-text cities-delivery"><p>с наших складов в городах:</p>
                        <ul>
                            <li>Краснодар</li>
                            <li>Абинск</li>
                            <li>Керчь</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="delivery__pic">
            <div class="delivery__pic-img">
                <picture>
                    <source srcset="./assets/img/delivery-track.webp" type="image/webp">
                    <img src="./assets/img/delivery-track.png" alt="track"></picture>
            </div>
            <div class="delivery__pic-mobtitle"> Доставка и склад</div>
        </div>
    </div>
</div>
<div class="payment">
    <div class="container">
        <div class="payment__offset"></div>
        <div class="payment__body">
            <div class="payment__title"> Оплата и документы</div>
            <div class="payment__content">
                <ul class="payment__content-list">
                    <li class="payment__content-list_item">
                        <div class="payment__content-list_item-pic">
                            <picture>
                                <source srcset="./assets/img/Frame-guy.webp" type="image/webp">
                                <img src="./assets/img/Frame-guy.png" alt=""></picture>
                        </div>
                        <div class="payment__content-list_item-title"> Юридические лица и ИП</div>
                        <div class="payment__content-list_item-text"><p>полный комплект для бухгалтерии (договора
                                поставок, счёт на оплату, товарная накладная, УПД) </p></div>
                    </li>
                    <li class="payment__content-list_item">
                        <div class="payment__content-list_item-pic">
                            <picture>
                                <source srcset="./assets/img/Frame-case.webp" type="image/webp">
                                <img src="./assets/img/Frame-case.png" alt=""></picture>
                        </div>
                        <div class="payment__content-list_item-title"> Физические лица</div>
                        <div class="payment__content-list_item-text"><p> перевод на карту (Альфа банк, Сбербанк,
                                Тинькофф банк) </p>
                            <p> оплата наличными расчётом </p></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <div class="gallery__title"> Фотогалерея</div>
        <div class="gallery-slider">
            <div>
                <picture>
                    <source srcset="./assets/img/slide1.webp" type="image/webp">
                    <img src="./assets/img/slide1.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide2.webp" type="image/webp">
                    <img src="./assets/img/slide2.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide3.webp" type="image/webp">
                    <img src="./assets/img/slide3.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide4.webp" type="image/webp">
                    <img src="./assets/img/slide4.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide5.webp" type="image/webp">
                    <img src="./assets/img/slide5.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide6.webp" type="image/webp">
                    <img src="./assets/img/slide6.jpg" alt=""></picture>
            </div>
            <div>
                <picture>
                    <source srcset="./assets/img/slide7.webp" type="image/webp">
                    <img src="./assets/img/slide7.jpg" alt=""></picture>
            </div>
        </div>
    </div>
</div>
<div class="location">
    <div class="container">
        <div class="location__body">
            <div class="body__title"> Схема проезда</div>
            <div class="tabs" id="locations">
                <div class="tab-buttons">
                    <button data-content="tab-content-1" class="active">Краснодар</button>
                    <button data-content="tab-content-2">Абинск</button>
                    <button data-content="tab-content-3">Керчь</button>
                </div>
                <div class="tab-contents">
                    <div class="tab-content active" id="tab-content-1">
                        <figure class="contacts-us-frame">
                            <div style="width: 100%">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A88e848d70a0da55a275c264780e7037f3c2b9570e8e646274c4baf946ff53e85&amp;source=constructor"
                                        width="1120" height="480"></iframe>
                            </div>
                        </figure>
                    </div>
                    <div class="tab-content" id="tab-content-2">
                        <figure class="contacts-us-frame">
                            <div style="width: 100%">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A41e27e0979088ddf663c64f14d131a4c820aab18164488238fb1c840c6948da7&amp;source=constructor"
                                        width="1120" height="480"></iframe>
                            </div>
                        </figure>
                    </div>
                    <div class="tab-content" id="tab-content-3">
                        <figure class="contacts-us-frame">
                            <div style="width: 100%">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8437b9bf6ae3f979d40457915ecb3fdc03f41d55ad8cf0c2891261d3ca6b709d&amp;source=constructor"
                                        width="1120" height="480"></iframe>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top_about">
                <div class="footer__top_about-title tit"> О компании</div>
                <div class="footer__top_about-subscr txt"> Компания "Юг-Пеллет" на рынке топливных пеллет с 2020 года.
                    Мы осуществляем поставки топливных пеллет потребителям Краснодарского края и Крыма по наиболее
                    низким оптовым ценам.
                </div>
            </div>
            <div class="footer__top_time">
                <div class="footer__top_time-title tit"> Время работы</div>
                <div class="footer__top_time-subscr txt"> Прием звонков и заявок осушествляется ежедневно с 9:00 до
                    20:00 МСК. Обработка заявок происходит ежедневно: ПН -ВС 9:00 - 20:00 МСК
                </div>
            </div>
            <div class="footer__top_contacts">
                <div class="footer__top_contacts-title tit"> Наши контакты</div>
                <ul class="footer__top_contacts-list contacts-list">
                    <li class="contacts-list__phone"><a href="tel:<?php echo $config['telephone'] ?>">
                            <?php echo $config['telephoneFormated'] ?>
                        </a>
                    </li>
                    <li class="contacts-list__telegram"><a target="_blank" href="https://telegram.me/ug_pellet">@ug_pellet</a>
                    </li>
                    <li class="contacts-list__mail">
                        <a href="mailto:<?php echo $config['email'] ?>">
                            <?php echo $config['email'] ?>
                        </a>
                    </li>
                    <li class="contacts-list__adress"><a>г. Краснодар ул. Станичная 7</a></li>
                    <li class="contacts-list__adress"><a>г. Абинск ул. Труда 229</a></li>
                    <li class="contacts-list__adress"><a>г. Керчь ш. Индустриальное 15</a></li>
                </ul>                <!--Rating::top.agroserver.ru counter-->            </div>
        </div>
        <div class="footer__bot">
            <div class="footer__bot_logo">
                <picture>
                    <source srcset="./assets/img/logo-wt.webp" type="image/webp">
                    <img src="./assets/img/logo-wt.png" alt="logo"></picture>
            </div>
            <a href="https://agroserver.ru/" target="_blank">
                <script>
                    var r = escape(document.referrer);
                    var rd = Math.random();
                    var pr = 'https://top.agroserver.ru/ct/';
                    document.write('<img src="' + pr + '?uid=17398&ref=' + r + '&rd=' + rd + '" width="88" height="31" border="0">');
                </script>
            </a>
            <div class="footer__bot_info txt"> ИП Дурановский М. В. (Дурановский Максим Владимирович) ОГРНИП
                123456789210; ИНН 123145678910
            </div>
            <div class="footer__bot_company txt"> © 2020-2025 «Юг-Пеллет» Оптовая продажа топливных пеллет в
                Краснодарском крае и Крыму
            </div>
        </div>
    </div>
</footer>
<script src="./assets/js/script.min.js"></script>
<script src="./assets/js/custom.js"></script>

 

</body>
</html>