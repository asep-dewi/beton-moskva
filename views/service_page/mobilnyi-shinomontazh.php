<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $content['service'][$_SESSION['service']]['service_1'] ?> быстро и недорого 👍. Звоните</title>
    <meta name="description" content="Предлагаем услуги <?= $content['service'][$_SESSION['service']]['service_7'] ?> по доступным ценам в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?>, работаем круглосуточно. Подача техники по <?= $content['domens'][$_SESSION['domen']]['gorod_short'] ?> от 30 минут.">
    <meta name='keywords' content="<?= $content['service'][$_SESSION['service']]['service_1'] ?>, <?= $content['domens'][$_SESSION['domen']]['gorod_im_p'] ?>, недорого" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />

    <link rel="icon" type="image/vnd.microsoft.icon" href="/img/fav.png">
    <link href="/css/styles.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
    <style>
        .first-screen.main-page:before {
            background: url(<?= $content['img1_main'] ?>) center top no-repeat;
        }
    </style>
</head>

<body>
    <div class="main-wrap">
        <div class="first-screen header main-page">
            <div class="top-header">
                <div class="city-block">
                    <p>Ваш город: </p>
                    <span class="city"><!--<no-cache-php>--><?= $content['domens'][$_SESSION['domen']]['current_city'] ?><!--</no-cache-php>--></span>
                </div>
                <a href="tel:<?= $content['telhref'] ?>" class="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>

            <?php include(ROOT . '/views/module/header.php'); ?>

            <div class="preview-block other-title">
                <div class="container">
                    <div class="conditions">
                        <div class="left-col">КАК БЫСТРО И НЕДОРОГО ПЕРЕВЕЗТИ АВТОМОБИЛЬ</div>
                        <div class="center-col">
                            <div class="img-block">
                                <img src="/img/icon2.png" alt="">
                            </div>
                            <p><strong>Всего 1500 руб.</strong> при перевозке на небольшое расстояние.
                                <i class="fa fa-question tooltip-btn" aria-hidden="true">
                                    <span class="tooltip">
                                        В рамках района (если одна из наших бригад передвижного шиномонтажа находится рядом с Вами).
                                    </span>
                                </i>

                            </p>
                        </div>
                        <div class="right-col">
                            <div class="img-block">
                                <img src="/img/icon3.png" alt="">
                            </div>
                            <p>Работаем для вас с <strong>2005</strong> года</p>
                        </div>
                    </div>
                    <div class="call-evacuator">
                        <div class="left-col">
                            <?= $content['service'][$_SESSION['service']]['service_1'] ?>
                        </div>
                        <div class="right-col">
                            <h3>По гарантированным ценам <span>дешевле на 25%</span></h3>
                            <div class="wrap">
                                <button class="btn-aqua left-apply">
                                    Оставить заявку
                                </button>
                                <p><strong>Рядом с вами:</strong> <!--<no-cache-php>--><?= $data['number_evacuator'] ?><!--</no-cache-php>--> наших эвакуатора</p>
                                <p><strong><strong>Время подачи:</strong> <!--<no-cache-php>--><?= $data['number_podacha'] ?><!--</no-cache-php>--> минуты</strong></p>
                            </div>
                            <div class="wrapper">
                                <p>Диспетчер перезвонит через 1 минуту</p>
                                <span> Не верите? <button class="get-apply"> Проверьте!</button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="container">
            <p>Прокололи колесо или нужно поменять шины на машине?</p>
            <p>Звоните нам <a href="tel:+74999385564" class="phone-num">+7 499 938-55-64</a></p>
            <p>Прямо сейчас мобильный шиномонтаж готов выехать к вам на помощь. Мы работаем 24 часа.<br> Принимаем к оплате как наличные, так и карты.</p>
        </div>

        <?php include(ROOT . '/views/module/phone_number.php'); ?>
        <div class="right-col">
            <div class="container">
                <p> Прокол колеса всегда случается в самый неподходящий момент. Нередко бывает, что у водителя отсутствует возможность добраться своим ходом на авто до ближайшего шиномонтажа. К тому же, не все водители способны самостоятельно заменить колесо на запасное. В таких ситуациях необходимо вызывать мобильный шиномонтаж. </p>
            </div>
        </div>﻿
        <div class="why-we-block">
            <div class="container">
                <div class="wrapper-prev">
                    <h3 class="title-h3">
                        Почему <span class="number-count">1</span>% клиентов нравится работать с нами
                    </h3>
                    <div class="tabs">
                        <div class="tabs-block tab-active"><a href="#">01</a></div>
                        <div class="tabs-block"><a href="#">02</a></div>
                        <div class="tabs-block"><a href="#">03</a></div>
                        <div class="tabs-block"><a href="#">04</a></div>
                    </div>
                </div>
                <div class="tabs-text triangle hideme">
                    <div class="block-tabs-text active ">
                        <div class="left-col">
                            <h3>С нами действительно <span>недорого</span></h3>
                        </div>
                        <div class="center-img">
                            <div class="inner-img" style="background: url(/img/tab1.jpg); no-repeat center;background-size: cover;">
                            </div>
                        </div>
                        <div class="right-col">
                            <h4>С нами действительно недорого</h4>
                            <p>Мы собственники техники, а не посредники, поэтому наши тарифы одни из самых выгодных на московском рынке.</p>
                        </div>
                    </div>
                    <div class="block-tabs-text">
                        <div class="left-col">
                            <h3>100% безопасно</h3>
                        </div>
                        <div class="center-img">
                            <div class="inner-img" style="background: url(/img/tab2.jpg); no-repeat center;background-size: cover;">
                            </div>
                        </div>
                        <div class="right-col">
                            <h4>Неограниченная гарантия</h4>
                            <p>Выдается гарантия на срок жизни шины (просим сохранять наряд-заказ, т.к. он является документом).</p>
                        </div>
                    </div>
                    <div class="block-tabs-text">
                        <div class="left-col">
                            <h3>Вы можете <br>сэкономить</h3>
                        </div>
                        <div class="center-img">
                            <div class="inner-img" style="background: url(/img/tab3.jpg); no-repeat center;background-size: cover;">
                            </div>
                        </div>
                        <div class="right-col">
                            <h4>Скидка при заблаговременном заказе</h4>
                            <p>Скидка от 5% до 15% по акции. Удобно при сезонной переобувке - договоритесь с коллегами из офиса и получите скидку</p>
                        </div>
                    </div>
                    <div class="block-tabs-text">
                        <div class="left-col">
                            <h3>Удобно оплачивать</h3>
                        </div>
                        <div class="center-img">
                            <div class="inner-img" style="background: url(/img/tab4.jpg); no-repeat center;background-size: cover;">
                            </div>
                        </div>
                        <div class="right-col">
                            <h4>Гибкая система приема платежей</h4>
                            <p>За услуги шиномонтажа примем оплату картой, наличными или электронными деньгами.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--calc-->
        <div class="faq-block main-page" id="step3">
            <div class="wrap">
                <div class="text hideme">
                    <h2 class="title-h2">
                        <span>Важно знать.</span> Ответы на популярные вопросы
                    </h2>
                    <div class="question"><span></span>
                        <strong>Преимущества круглосуточного шиномонтажа</strong>
                    </div>
                    <div class="answer">
                        <p>Компания «Mobile 24» предлагает круглосуточный сервис по обслуживанию любых транспортных средств. Для оказания квалифицированного ремонта мобильный фургон с группой техпомощи будет мгновенно подан к месту происшествия или в любую удобную для Вас точку. Это позволит значительно сэкономить Ваше время. Передвижной шиномонтаж на базе микроавтобуса Mercedes полностью оснащен необходимым оборудованием для надежного и быстрого решения даже сложных задач по восстановлению проколов и порезов шин. Через небольшой отрезок времени автомобиль снова может продолжать движение.</p>
                        <p>Основу оборудования составляют немецкие шиномонтажные станки и балансировочные стенды, которые позволяют выполнять все виды работ: монтаж/демонтаж шин, балансировка колес. Подкатные домкраты и компрессор большого объема, которыми укомплектован передвижной мобильный шиномонтаж, позволяют решать стандартные работы быстрее.</p>
                    </div>
                    <div class="question"><span></span>
                        <strong>Экономия денег и времени</strong>
                    </div>
                    <div class="answer">
                        <p>Попробуйте мобильный ремонт и сэкономьте время и деньги. Чтобы воспользоваться службой передвижного шиномонтажа предварительная запись не требуется, так как наши специалисты доступны в любое удобное время. За полчаса (максимум 40 минут) мобильный микроавтобус прибудет в нужное место для оказания помощи.</p>
                        <p>Мы считаем, что наши цены на шиномонтаж вполне демократичные и доступные. При заказе услуг для 2 авто и более предусмотрена скидочная система. При сезонной переобувке, услуга передвижного шиномонтажа даст Вам комфорт и позволит сэкономить много времени и нервов, потраченных в очереди. А как известно время - это деньги.</p>

                    </div>
                    <div class="question"><span></span>
                        <strong>Какие есть дополнительные услуги?</strong>
                    </div>
                    <div class="answer">
                        <p>Мобильный шиномонтаж позволит на высоком уровне и в любое время получить сервис по:<br></p>
                        <ul>
                            <li>хранению шин (сможем подъеать к дому или офису);</li>
                            <li>балансировке колес;</li>
                            <li>замене тормозных колодок;</li>
                            <li>заправке автокондиционеров;</li>
                            <li>прикуриванию аккумумлятора;</li>
                            <li>запуску двигателя в мороз;</li>
                        </ul>
                        <p>Благодаря накопленному опыту все работы выполняются быстро и качественно.</p>
                    </div>

                </div>
                <div class="manager hideme">
                    <div class="inner-manager" style="background: url(/img/operator2.jpg) no-repeat center;background-size: cover;">

                    </div>
                    <span>Ольга, наш диспетчер</span>
                </div>
            </div>
        </div>
        <div class="price-catalog" id="step5">
            <div class="container">
                <div class="wrapper-prev">
                    <h3>Сколько стоит выездной шиномонтаж</h3>
                    <p>Самый важный для любого клиента вопрос: "А сколько стоит этот мобильный шиномонтаж?". Наша компания предлагает адекватные тарифы и профессиональный сервис, поэтому нас любят клиенты. Убедитесь сами.
                    </p>
                </div>
                <!--<div class="tabs-price">
                <div class="tabs-block-price tab-active"><a href="#">ОСНОВНОЕ</a></div>
                <div class="tabs-block-price "><a href="#">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</a></div>
                <div class="select-block">
                    <select id="tabs-price">
                        <option value="main">ОСНОВНОЕ</option>
                        <option value="extra">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</option>
                    </select>
                </div>
            </div>-->
                <div class="tabs-text-price">
                    <div class="block-tabs-text-price active">
                        <div class="img-block" style="background: url(/img/truck3.png) no-repeat center;">
                            <div class="msg">Без накруток и <br>скрытых платежей</div>
                            <a href="tel:<?= $content['telhref'] ?>" class="phone-num"><?= $content['tel'] ?></a>
                        </div>
                        <div class="prices-block">
                            <ul>
                                <li><span>РЕМОНТ ПРОКОЛОВ / БОКОВЫХ ПОРЕЗОВ </span><i></i> <strong>от 1700 руб.</strong></li>
                                <li><span>КОЭФФИЦИЕНТ ДЛЯ ВНЕДОРОЖНИКОВ И НИЗКОГО ПРОФИЛЯ</span><i></i><strong>1.2 / 1.3</strong></li>
                                <li><span>ЗАМЕНА КОЛЕС В СБОРЕ / ШИН </span><i></i> <strong>от 1900 руб.</strong></li>
                                <li><span>СЕЗОННОЕ ХРАНЕНИЕ ШИН (7 мес.) </span><i></i> <strong>3000 руб.</strong></li>
                                <li><span>ХРАНЕНИЕ ШИН НА ДИСКАХ (7 мес.) </span><i></i> <strong>3500 руб.</strong></li>
                                <li><span>ДОСТАВКА ШИН НА СКЛАД<br /> при заказе сезонной замены </span><i></i> <strong>бесплатно</strong></li>
                                <li><span>ШИНОМОНТАЖНЫЕ РАБОТЫ <br />(снятие/установкака, балансировка, монтаж/демонтаж) </span><i></i> <strong>от 220/160/180 руб.</strong></li>
                                <li><span>ВЫЕЗД ЗА МКАД</span><i></i><strong>40 руб./км</strong></li>

                            </ul>
                        </div>
                    </div>
                    <!--<div class="block-tabs-text-price">
                    <div class="img-block" style="background: url(/img/car2.jpg) no-repeat center;">
                        <div class="msg">Без накруток и <br>скрытых платежей</div>
                        <a href="tel:<?= $content['telhref'] ?>" class="phone-num"><?= $content['tel'] ?></a>
                    </div>
                    <div class="prices-block">
                        <ul>
                            <li><span>ЭВАКУАЦИЯ ЛЕГКОВОГО АВТОМОБИЛЯ2</span><i></i><strong>от 1500 руб.</strong></li>
                            <li><span>ЭВАКУАЦИЯ ВНЕДОРОЖНИКА (ДЖИПА)</span><i></i><strong> от2000 руб.</strong></li>
                            <li><span>ПЕРЕВОЗКА МОТОЦИКЛА (МОТОТЕХНИКИ)</span><i></i><strong>от 1500 руб.</strong></li>
                            <li><span>ПЕРЕВОЗКА СПЕЦТЕХНИКА (ДО 4 Т)</span><i></i><strong>от 2500 руб.</strong></li>
                            <li><span>ПЕРЕВОЗКА КВАДРОЦИКЛОВ (СНЕГОХОДОВ)</span><i></i><strong>от 1500 руб.</strong></li>
                            <li><span>УСЛУГИ КРАНА-МАНИПУЛЯТОРА</span><i></i><strong>от 4500 руб.</strong></li>
                            <li><span>ПЕРЕВОЗКА АВТО ИЗ САЛОНА</span><i></i><strong>от 1800 руб.</strong></li>
                            <li><span>ВЫЕЗД ЗА МКАД</span><i></i><strong>30-40 руб./км</strong></li>
                            <li><span>НАЦЕНКА ЗА 1 ЗАБЛОКИРОВАННОЕ КОЛЕСО</span><i></i><strong>500 руб.</strong></li>
                        </ul>
                    </div>
                </div>-->
                </div>
            </div>
        </div>
        <div class="testimonials-block" id="step6">
            <div class="container">
                <div class="wrapper-prev">
                    <h3>Реальные истории клиентов</h3>
                    <p>Нас рекомендуют друзьям. <strong>Надеемся, что и Вам тоже понравится работать с нами</strong></p>
                </div>
                <div class="count-slider">
                    <strong></strong>/<span></span>
                </div>
                <div class="slider-testimonial">
                    <?php foreach ($comment as $item) {
                        $page = explode('/', $item['page']);
                    ?>
                        <?php if (($page[0] == $_SESSION['domen']) and ($page[1] == $_SESSION['service'])) { ?>
                            <div class="item">
                                <div class="left-col">
                                    <div class="name"><?= $item['name'] ?></div>
                                    <a href="<?= $item['photo_user'] ?>" class="fancyimage"><img class="user-photo" src="<?= $item['photo_user'] ?>" alt=""></a>
                                    <div class="rate">
                                        <?php for ($x = 1; $x <= $item['stars']; $x++) { ?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        <?php } ?>
                                    </div>
                                    <div class="status"><?= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['text']) ?></div>
                                </div>
                                <div class="right-col">
                                    <div class="advantages">
                                        <span>Достоинства:</span>
                                        <p><?= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['dostoinstva']) ?></p>
                                    </div>
                                    <div class="disadvantages">
                                        <span>Недостатки:</span>
                                        <p><?= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['nedostatki']) ?></p>
                                    </div>
                                    <div class="comment">
                                        <span>Комментарий:</span>
                                        <!--<p><?= $item['kommentarij'] ?></p>-->
                                        <p><?= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['kommentarij']) ?></p>
                                    </div>
                                    <!--<a href="<?= $item['photo_scan'] ?>" class="look-scan fancyimage">Посмотреть скан</a>-->
                                    <button type="button" class="write-testimonial btn-main">Написать отзыв</button>

                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="own-park">
            <div class="container">
                <div class="wrapper-prev">
                    <h3>Собственный парк техники и доведенный до совершенства процесс мобильного шиномонтажа являются гарантией цен, которые ниже, как минимум на 25%, чем у конкурентов</h3>
                    <a href="tel:<?= $content['telhref'] ?>"><?= $content['tel'] ?></a>
                </div>
                <div class="extra">
                    <strong>А ЕЩЕ:</strong>
                    <p>Нас любят так как даем гарантию на срок жизни шины и быстро приезжаем 24 часа, тажке у нас можно заказать сезонную переобувку и получить скидку при заказе услуги для >2 авто. Договоритесь с друзьями или коллегами по работе и сэкономьте до 15%.</p>
                </div>
            </div>
        </div>
        <div class="garant-slider-block">
            <div class="container">
                <h2>Гарантируем надежный и доступный шиномонтаж</h2>
                <div class="garant-slider">
                    <div class="item">
                        <div class="img-wrap">
                            <img src="/img/icon.png" alt="">
                        </div>
                        <span>7</span>
                        <div class="wrap-text">
                            <p>ДНЕЙ В НЕДЕЛЮ КРУГЛОСУТОЧНО</p>
                            <strong>Мы работаем ночью, заботясь о Вашем удобстве</strong>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="/img/icon12.png" alt="">
                        </div>
                        <span>27375</span>
                        <div class="wrap-text">
                            <p>ЗАКАЗОВ В ГОД</p>
                            <strong>Нам доверяет много людей. Потому что у нас надежно, низкие цены и минимальное по Москве время ожидания подачи техники.</strong>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="/img/icon13.png" alt="">
                        </div>
                        <span>№1</span>
                        <div class="wrap-text">
                            <p>МЕСТО СРЕДИ СЛУЖБ ШИНОМОНТАЖА</p>
                            <strong>С нами надежно, потому что услуги застрахованы и мы отвечаем за сохранность авто.</strong>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="/img/icon14.png" alt="">
                        </div>
                        <span style="font-size: 40px;">от А до Я</span>
                        <div class="wrap-text">
                            <p>ЗНАЕМ И ЛЮБИМ СВОЮ РАБОТУ</p>
                            <strong>Знаем свою сферу деятельности на 5+. Многие специалисты имеют стаж от 10 лет в отрасли.</strong>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="/img/icon15.png" alt="">
                        </div>
                        <span>25</span>
                        <div class="wrap-text">
                            <p>БРИГАД ТЕХПОМОЩИ</p>
                            <strong>Знают как аккуратно устранить прокол, знают шиномонтаж на 5+</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include(ROOT . '/views/module/footer.php'); ?>
    </div>

    <?php include(ROOT . '/views/module/call_1.php'); ?>

    <!--<no-cache-php>--><?php include(ROOT . '/views/module/menu_place.php'); ?><!--</no-cache-php>-->

    <?php include(ROOT . '/views/module/call_2.php'); ?>

    <?php include(ROOT . '/views/module/calculator.php'); ?>

    <?php include(ROOT . '/views/module/modal_seconds_twenty.php'); ?>

    <?php include(ROOT . '/views/module/modal_seconds_sixteen.php'); ?>

    <?php include(ROOT . '/views/module/modal_sale.php'); ?>

    <?php include(ROOT . '/views/module/modal_wind.php'); ?>

    <?php include(ROOT . '/views/module/modal_testimonial.php'); ?>

    <div class="backdrop"></div>
    <script src="https://cdn.jsdelivr.net/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        var price_km = <?= $content['price_km'] ?>;
        $('#serv-1').on('change');
    </script>
    <script src="/js/map.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/slick.js"></script>
    <script type="text/javascript" src="/js/jquery.inputmask.bundle.js" charset="utf-8"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/submit-form.js"></script>
    <script src="/js/calc.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/popaps.js"></script>
</body>

</html>