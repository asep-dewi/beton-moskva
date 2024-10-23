<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $content['service'][$_SESSION['service']]['service_1'] ?> в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?> дешево, низкие цены 👍, заказ круглосуточно</title>
    <meta name="description" content="<?= $content['service'][$_SESSION['service']]['service_1'] ?> в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?> недорого по доступной стоимости, работаем 24 часа. Ожидание не более 30 мин.">
    <!--    <meta name='keywords' content="--><? //=$content['service'][$_SESSION['service']]['service_1']
                                                ?><!--, --><? //=$content['domens'][$_SESSION['domen']]['gorod_im_p']
                                                            ?><!--, недорого"/>-->


    <script>
        // Проверяем, можно ли использовать Webp формат
        function canUseWebp() {
            // Создаем элемент canvas
            let elem = document.createElement('canvas');
            // Приводим элемент к булеву типу
            if (!!(elem.getContext && elem.getContext('2d'))) {
                // Создаем изображение в формате webp, возвращаем индекс искомого элемента и сразу же проверяем его
                return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
            }
            // Иначе Webp не используем
            return false;
        }
        if (canUseWebp() == true) {
            document.querySelector('html').classList.add("webp");
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
</head>

<body>

    <!--header-->
    <?php include(ROOT . '/views/module3/header.php'); ?>
    <!--header END-->
    <!--first-screen-->
    <section class="first-screen" style="background-image: url(/pics/bg_1-2.jpg);">
        <a href="/" class="first-screen__logo_link flex items_vcenter">
            <picture>
                <source srcset="/img/webp/flogox2.webp" type="image/webp">
                <img src="/img/flogox2.png" alt="">
            </picture>
        </a>
        <div class="container ">
            <div class="breadcramps">
                <a href="/" class="a-border">Главная</a> <a href="#" class="a-border"> <?= $content['service'][$_SESSION['service']]['service_7']; ?></a>
            </div>
            <div class="first-screen__cont">
                <h1 class="h1--pt"><?= $content['service'][$_SESSION['service']]['service_10'] ?> в <span class="h1-br"><?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?></span> <br> <sup class="first-screen__h1-small">Быстро и недорого</sup></h1>
                <div class="days-service__block">
                    <ul>
                        <li>Цены – на 15-20% ниже, чем в среднем по рынку</li>
                        <li>Собственный парк надежных современных эвакуаторов</li>
                        <li>Постоянный штат квалифицированных водителей-операторов</li>
                        <li>100% гарантия безопасности ТС на всех этапах эвакуации</li>
                    </ul>
                </div>
            </div>
            <div class="flex_between first-screen__bl">
                <div class="first-screen__left">
                    <p class="first-screen__all">всего от</p>
                    <p class="first-screen__price"><?= $content['service'][$_SESSION['service']]['price'] ?><sup>р. </sup></p>
                    <p class="first-screen__button">
                        <button type="button" class="btn btn_red" onclick="open_section_popup('#first-screen__popup')">Заказать сейчас</button>
                    </p>
                    <div class="first-screen__message bg_blue">
                        <button type="button" class="avtopark__message-close">&times;</button>
                        <p class="first-screen__message-date">Сегодня 3 августа 2017 г.</p>
                        <script>
                            let date = new Date();
                            let month = [
                                'Января',
                                'Февраля',
                                'Марта',
                                'Апрель',
                                'Мая',
                                'Июня',
                                'Июля',
                                'Августа',
                                'Сентября',
                                'Ноября',
                                'Декабря',
                            ];
                            let currentManth = month[date.getMonth()];
                            let day = date.getDate();
                            let year = date.getFullYear();

                            let str = `Сегодня ${day} ${currentManth} ${year} г.`;
                            let domItem = document.querySelector('.first-screen__message-date');
                            domItem.textContent = str;

                            let hour = date.getHours().toString();
                            console.log(hour);

                            switch (hour) {
                                case '12':
                                    console.log('12 Часов');
                                    break;
                                case '13':
                                    console.log('13 Часов');
                                default:
                                    console.log('default');
                            }
                        </script>
                        <!--                    <p class="first-screen__message-date">Сегодня 3 августа 2017 г.</p>-->

                        <!--why-choice-->
                        <?php include(ROOT . '/views/module3/services_oder_counter.php'); ?>
                        <!--why-choice END-->
                        <p>Услугу заказали уже <?= $current_views_ch ? $current_views_ch : 0; ?> человек</p>
                    </div>
                </div>
                <!--<div class="first-screen__right2">
                <div class="flex_between">
                    <p class="first-screen__right-p">Как организовать<br> переезд</p>
                    <a href="#"  class="btn btn_blue btn_short "></a>
                </div>

                <p>Специально для Вас мы подготовили памятку со списком этапов переезда и подготовки к ним.</p>
            </div>-->
            </div>



        </div>
        <div class="first-screen__section_popup bg_red section_popup " id="first-screen__popup">
            <button type="button" class="section_popup_close" onclick="close_section_popup('#first-screen__popup')">&times;</button>
            <div class="first-screen__section_logo">

                <picture>
                    <source srcset="/img/webp/flogox2.webp" type="image/webp">
                    <img src="/img/flogox2.png" alt="">
                </picture>
            </div>
            <div class="heading2">Оставить заявку</div>
            <div class="heading2__line bg_red"></div>
            <p class="first-screen__section-text1">и убедитесь, что наши</p>
            <p class="first-screen__section-text2"> цены на 20% ниже</p>
            <p class="first-screen__section-text1">чем у компаний-конкурентов</p>
            <div class="form_area">
                <form action="send.php" method="post" id="first_screen_form">
                    <input type="hidden" name="subject" value="Оставить заявку">
                    <p>
                        <span class="first-screen__section_popup_ico"><img src="/img/ico_name.png" alt=""></span>
                        <input type="text" class="input" name="name" placeholder="Ваше имя">
                    </p>
                    <p>
                        <span class="first-screen__section_popup_ico"><img src="/img/ico_tel.png" alt=""></span>
                        <input type="tel" class="input" name="tel" placeholder="Номер телефона">
                    </p>

                    <p class="form_area__but"><button type="submit" class="btn btn_blue btn_short "></button></p>
                </form>
            </div>
            <div class="section_popup__sucess bg_red flex_center" id="first_screen_form_sucess">
                <button type="button" class="section_popup_close" onclick="close_section_popup('#first-screen__popup')">&times;</button>
                <div>
                    <div class="heading2">Спасибо<br> за заявку!</div>
                    <p>Менеджер перезвонит Вам <br>в течение 3 минут.</p>
                </div>
            </div>
        </div>
    </section>
    <!--first-screen END-->

    <!--garanty-->
    <section class="garanty">
        <div class="container">
            <h2 class="fz50 align-center upper">Цены на <?= $content['service'][$_SESSION['service']]['service_1'] ?></h2>
            <p class="align-center garanty__p"><?= $content['service'][$_SESSION['service']]['service_1'] ?> от <?= $content['service'][$_SESSION['service']]['price'] ?> р.</p>
            <dl class="garanty__dl flex_between">
                <dt><span class="bg_white">Эвакуатор 1.5 т</span></dt>
                <dd>2000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Эвакуатор 3.5 т</span></dt>
                <dd>3000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Мотоциклы, квадроциклы</span></dt>
                <dd>2000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Легковые авто</span></dt>
                <dd>2000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Джипы, минивены</span></dt>
                <dd>2500<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Газели, микроовтобусы</span></dt>
                <dd>2800<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Грузовые авто</span></dt>
                <dd>6000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Эвакуатор-манипулятор</span></dt>
                <dd>6000<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Пробег за МКАД</span></dt>
                <dd>50<span class="rub">р./ км</span></dd>

                <dt><span class="bg_white">Прикурить авто</span></dt>
                <dd>от 1590<span class="rub">р.</span></dd>
                <dt><span class="bg_white">Подвоз топлива</span></dt>
                <dd>от 1590<span class="rub">р.</span></dd>
            </dl>
            <!--        <dl class="garanty__dl flex_between">-->
            <!--          <dt><span class="bg_white">Погрузка/разгрузка</span></dt>-->
            <!--          <dd>350<span class="rub">р.час</span></dd>-->
            <!--          <dt><span class="bg_white">Сборка/разборка мебели</span></dt>-->
            <!--          <dd>350<span class="rub">р.час</span></dd>-->
            <!--          <dt><span class="bg_white">Монтаж/демонтаж техники и мебели</span></dt>-->
            <!--          <dd>400<span class="rub">р.час</span></dd>-->
            <!--          <dt><span class="bg_white">Такелаж</span></dt>-->
            <!--          <dd>550<span class="rub">р.час</span></dd>-->
            <!--        </dl>-->
            <h2 class="fz50 align-center garanty__h2 upper">
                <span class="bg_white">Гарантируем</span>
            </h2>
            <ul class="garanty__list flex_between">
                <li>
                    <p><img src="/img/garanty1.png" alt=""></p>
                    <p>Ответственный подход</p>
                </li>
                <li>
                    <p><img src="/img/garanty2.png" alt=""></p>
                    <p>Бережное отношение к вещам</p>
                </li>
                <li>
                    <p><img src="/img/garanty3.png" alt=""></p>
                    <p>Пунктуальность</p>
                </li>
                <li>
                    <p><img src="/img/garanty4.png" alt=""></p>
                    <p>Низкие цены</p>
                </li>
            </ul>
        </div>
    </section>
    <!--garanty END-->

    <!--text-block-->
    <section class="text-block">
        <div class="container">
            <div class="flex text-block__row">
                <div class="text-block__heading">
                    <!--                <h2 class="fz50">--><? //=$content['service'][$_SESSION['service']]['service_1']
                                                            ?><!-- без хлопот</h2>-->
                    <h2 class="fz50">Поможем в любой ситуации</h2>
                </div>

                <div class="text-block__text">
                    <p>Вы можете рассчитывать на нашу помощь, что бы ни случилось с вашим ТС. Благодаря большому собственному автопарку и команде опытных водителей-операторов мы гарантируем безопасность для вашего ТС.</p>
                    <p>Справимся с погрузкой и перевозкой авто после ДТП, эвакуируем с парковки на СТО, прикурим двигатель или подвезем топливо. Техническое состояние и местоположение вашего авто не имеют значения.</p>
                </div>
            </div>
            <div class="flex text-block__row">
                <div class="text-block__heading">
                    <h2 class="fz50">С нами удобно</h2>
                    <p>Чтобы заказать наши услуги, вам понадобится всего пара минут</p>
                </div>
                <div class="text-block__text">
                    <ol class="how-we-work__list how-we-work__list-2 flex_between">
                        <li>
                            <p>Оставьте заявку по телефону <a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a> или через онлайн-форму на нашем сайте</p>
                        </li>
                        <li>
                            <p>Сообщите диспетчеру ваш адрес, марку и модель ТС, опишите его неисправности</p>
                        </li>
                        <li>
                            <p>Диспетчер тут же направит к вам подходящую технику</p>
                        </li>
                        <li>
                            <p>Водитель выполнит погрузку / перевозку ТС по указанному вами адресу</p>
                        </li>
                        <li>
                            <p>Вы оцениваете выполненную работу и оплачиваете услуги</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--text-block END-->

    <!--calculator-->
    <section class="calculator barkova_bg" id="calculator">
        <div class="container flex_between" id="calculator_block_1">
            <div class="calculator__spec">
                <p class="calculator__spec-name">Юлия Антонова</p>
                <p>менеджер по работе с клиентами в нашей компании с 2006 года</p>
            </div>
            <div class="calculator__form bg_blue">
                <div class="heading2">Рассчитайте стоимость <?= $content['service'][$_SESSION['service']]['service_9'] ?></div>
                <div class="form_area">
                    <form action="send.php" method="post" id="calculate_form">
                        <fieldset>
                            <div class="select">
                                <select name="type">

                                    <option selected disabled>Тип авто</option>
                                    <option val="легковой автомобиль до 1.5т" class="cuselItem cuselActive"><label>Легковой автомобиль до 1.5т</label></option>
                                    <option val="кроссовер/внедорожник до 3.5 т" class="cuselItem"><label>Кроссовер/внедорожник до 3.5 т</label></option>
                                    <option val="микроавтобус/Газель до 3.5 т" class="cuselItem"><label>Микроавтобус/Газель до 3.5 т</label></option>
                                    <option val="мотоцикл" class="cuselItem"><label>Мотоцикл</label></option>
                                    <option val="квадроцикл/снегоход" class="cuselItem"><label>Квадроцикл/снегоход</label></option>
                                    <option val="спецтехника  до 3.5 т" class="cuselItem"><label>Спецтехника до 3.5 т</label></option>
                                    <option val="прочее до 3.5 т" class="cuselItem"><label>Прочее до 3.5 т</label></option>
                                    <option val="грузовые авто" class="cuselItem"><label>Грузовые авто</label></option>
                                    <option val="эвакуатор-манипулятор" class="cuselItem"><label>Эвакуатор-манипулятор</label></option>
                                </select>
                                <div class="select__val select__val_value">Например, квартирный переезд</div>
                            </div>
                        </fieldset>
                        <style>
                            .calculator__count-text {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .zabl {
                                font-size: 18px;
                            }
                        </style>
                        <fieldset>
                            <div class="flex_between calculator__maxheight">
                                <div class="select calculator__select zabl">
                                    Количество заблокированных колес
                                </div>
                                <div class="calculator__loaders flex_between">
                                    <button type="button" class="calculator__loaders_minus" id="calculator__minus">&minus;</button>
                                    <span class="calculator__count-text">
                                        <input type="tel" readonly name="loaders_count" value="0" class="calculator__count" id="calculator__count" max="4">
                                    </span>
                                    <button type="button" class="calculator__loaders_plus" id="calculator__plus">+</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <input type="text" name="from" placeholder="Откуда" class="input" id="calculator__from">
                            <button type="button" class="calculator__location" data-id="calculator__from"></button>
                        </fieldset>
                        <fieldset>
                            <input type="text" name="to" placeholder="Куда" class="input" id="calculator__to">
                            <button type="button" class="calculator__location" data-id="calculator__to"></button>
                        </fieldset>
                        <fieldset>
                            <div class="flex_between calculator__radios">
                                <span class="radio__block">
                                    <input type="checkbox" name="ttk" id="ttk"> <label for="ttk">Въезд в ТТК</label>
                                </span>
                            </div>
                        </fieldset>

                        <div class="flex_between items_vcenter calculator__buttons">
                            <button type="submit" class="btn btn_red btn-sm">Расчитать</button>
                        </div>
                    </form>
                    <div class="calculator__cost calculator__form bg_blue" id="calculator__cost">
                        <form action="" method="post" id="calculate_form2">
                            <input type="hidden" name="subject" value="калькулятор">
                            <input type="hidden" name="calc_values" value="" id="calc_values">
                            <input type="hidden" name="price" value="" id="calc_price">
                            <div class="heading2">стоимость манипулятора</div>
                            <p class="calculator__cost-price"><span id="price_num">20 450</span><sup>Р.</sup></p>
                            <p class="calculator__cost-ring">Закажите по телефону</p>
                            <p class="calculator__cost-tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>
                            <p class="calculator__cost-or"><span class="bg_blue">или</span></p>
                            <p class="calculator__cost-leave">Оставьте свой номер и мы Вам перезвоним</p>
                            <div class="calculator__cost-form flex_between items_vcenter">
                                <div class="calculator__cost-form-inp">
                                    <input type="tel" name="tel" class="input" placeholder="Номер телефона">
                                </div>
                                <button type="submit" class="btn btn_red btn_short" onclick="canculate()"></button>
                            </div>
                            <p class="calculator__cost-reset"><a href="javascript:;" onclick="reset_calc()" class="a-border">Рассчитать заново</a></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="calculator__note"></div>

        <!-- calculator__cost2 -->
        <div class="calculator__cost calculator__cost-detail calculator__form bg_blue" id="calculator__cost2">
            <div class="container">
                <button type="button" class="popup__close_sm for_calculate" onclick="calculator__cost2_close()">&times;</button>
                <div class="calculator__cost-detail__wrap">
                    <form action="" method="post" id="calculate_form_detail2">
                        <input type="hidden" name="subject" value="калькулятор детальный">
                        <input type="hidden" name="calc_values" value="" id="calc_values2">
                        <input type="hidden" name="price" value="" id="calc_price2">
                        <div class="heading2">стоимость квартирного переезда</div>
                        <p class="calculator__cost-price"><span id="price_num2">20 450</span><sup>Р.</sup></p>
                        <p class="calculator__cost-ring">Закажите по телефону</p>
                        <p class="calculator__cost-tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>
                        <p class="calculator__cost-or"><span class="bg_blue">или</span></p>
                        <p class="calculator__cost-leave">Оставьте свой номер и мы Вам перезвоним</p>
                        <div class="calculator__cost-form flex_between items_vcenter">
                            <div class="calculator__cost-form-inp">
                                <input type="tel" name="tel" class="input" placeholder="Номер телефона">
                            </div>
                            <button type="submit" class="btn btn_red btn_short" onclick="canculate()"></button>
                        </div>
                        <p class="calculator__cost-reset"><a href="javascript:;" onclick="calculator__cost2_close(); canculate_detail();" class="a-border">Рассчитать заново</a></p>
                    </form>
                </div>
            </div>
        </div>
        <!-- calculator__cost2 END-->


        <!--calculator__full-->
        <!--    <div class="calculator__full bg_blue" id="calculator__full">-->
        <!--        <div class="container">-->
        <!--            <button type="button" class="popup__close_sm for_calculate" onclick="canculate_detail_close()">&times;</button>-->
        <!--            <div class="heading2 align-center">ПОдробный расчёт стоимости </div>-->
        <!--            <form action="" method="post" id="calculate_form_detail" >-->
        <!---->
        <!--                <div class="calculator__full-wrap flex_between">-->
        <!---->
        <!--                    <div class="form_area calculator__full-left">-->
        <!--                        <fieldset>-->
        <!--                            <div class="select">-->
        <!--                                <select name="relocation_type">-->
        <!--                                    <option value="Автомобиль" selected="">Автомобиль</option>-->
        <!--                                    <option value="Самолет">Самолет</option>-->
        <!--                                    <option value="Поезд">Поезд</option>-->
        <!--                                </select>-->
        <!--                                <div class="select__val select__val_value">Автомобиль</div>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset>-->
        <!--                            <div class="flex calculator__maxheight">-->
        <!--                                <span class="calculator__loaders-text">Срок аренды</span>-->
        <!--                                <div class="calculator__loaders calculator__loaders2 flex_between">-->
        <!--                                    <button type="button" class="calculator__loaders_minus" >−</button>-->
        <!--                                    <span class="calculator__count-text">-->
        <!--											<input type="tel" readonly="" name="srok" value="12" class="calculator__count" >-->
        <!--											<div>часов</div>-->
        <!--										</span>-->
        <!--                                    <button type="button" class="calculator__loaders_plus" >+</button>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset>-->
        <!--                            <div class="flex calculator__maxheight">-->
        <!--                                <span class="calculator__loaders-text">Дата подачи</span>-->
        <!--                                <div class="flex calculator__full-dates">-->
        <!--                                    <a href="javascript:;" class="a-border calculator__full-datapicker" >-->
        <!--                                        <label for="datepicker" id="fordatepicker">-->
        <!--                                            12 <span>апреля</span> 2018-->
        <!--                                        </label>-->
        <!--                                        <input type="text" name="date" readonly id="datepicker" >-->
        <!--                                    </a>-->
        <!--                                    <a href="javascript:;" class="a-border" onclick="open_calculator__full_time()" id="calculator__full_time_num">-->
        <!--                                        20:30-->
        <!--                                    </a>-->
        <!--                                    <input type="hidden" name="time"  id="time_inp" >-->
        <!--                                    <div class="bg_red calculator__full-time" id="calculator__full_time">-->
        <!--                                        <button type="button" class="ui-datepicker-close" onclick="close_calculator__full_time()">&times;</button>-->
        <!--                                        <div class="calculator__full-scrolls flex_between">-->
        <!--                                            <div class="calculator__full-dots">:</div>-->
        <!--                                            <div class="calculator__full-block2">-->
        <!--                                                <div class="calculator__full-scroll" id="slider_hours">-->
        <!---->
        <!--                                                    <a href="#">01</a>-->
        <!--                                                    <a href="#">02</a>-->
        <!--                                                    <a href="#">03</a>-->
        <!--                                                    <a href="#">04</a>-->
        <!--                                                    <a href="#">05</a>-->
        <!--                                                    <a href="#">06</a>-->
        <!--                                                    <a href="#">07</a>-->
        <!--                                                    <a href="#">08</a>-->
        <!--                                                    <a href="#">09</a>-->
        <!--                                                    <a href="#">10</a>-->
        <!--                                                    <a href="#">11</a>-->
        <!--                                                    <a href="#">12</a>-->
        <!--                                                    <a href="#">13</a>-->
        <!--                                                    <a href="#">14</a>-->
        <!--                                                    <a href="#">15</a>-->
        <!--                                                    <a href="#">16</a>-->
        <!--                                                    <a href="#">17</a>-->
        <!--                                                    <a href="#">18</a>-->
        <!--                                                    <a href="#">19</a>-->
        <!--                                                    <a href="#">20</a>-->
        <!--                                                    <a href="#">21</a>-->
        <!--                                                    <a href="#">22</a>-->
        <!--                                                    <a href="#">23</a>-->
        <!--                                                    <a href="#">24</a>-->
        <!---->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="calculator__full-block2">-->
        <!--                                                <div class="calculator__full-scroll" id="slider_minuts">-->
        <!--                                                    <a href="#">00</a>-->
        <!--                                                    <a href="#">05</a>-->
        <!--                                                    <a href="#">10</a>-->
        <!--                                                    <a href="#">15</a>-->
        <!--                                                    <a href="#">20</a>-->
        <!--                                                    <a href="#">25</a>-->
        <!--                                                    <a href="#">30</a>-->
        <!--                                                    <a href="#">35</a>-->
        <!--                                                    <a href="#">40</a>-->
        <!--                                                    <a href="#">45</a>-->
        <!--                                                    <a href="#">50</a>-->
        <!--                                                    <a href="#">55</a>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <p class="align-center"><button type="button" class="btn btn_white btn_short btn_short_r" onclick="calculator__full_time()"></button></p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset>-->
        <!--                            <div class="flex calculator__maxheight">-->
        <!--                                <span class="calculator__loaders-text">Грузчиков</span>-->
        <!--                                <div class="calculator__loaders calculator__loaders2 flex_between">-->
        <!---->
        <!--                                    <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                    <span class="calculator__count-text">-->
        <!---->
        <!--											<input type="tel" readonly="" name="loaders_count" value="5" class="calculator__count" >-->
        <!--										</span>-->
        <!--                                    <button type="button" class="calculator__loaders_plus" >+</button>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset class="fieldset1">-->
        <!--                            <input type="text" name="from" placeholder="Откуда" class="input" id="calculator__from3">-->
        <!--                            <button type="button" class="calculator__location" data-id="calculator__from3"></button>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset>-->
        <!--                            <input type="text" name="to" placeholder="Куда" class="input" id="calculator__to3">-->
        <!--                            <button type="button" class="calculator__location" data-id="calculator__to3"></button>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset class="fieldset2">-->
        <!--                            <div class="flex_between calculator__radios">-->
        <!--									<span class="radio__block">-->
        <!--										<input type="checkbox" name="centr" id="centrx1" checked=""> <label for="centrx1">Въезд в центр</label>-->
        <!--									</span>-->
        <!--                                <span class="radio__block">-->
        <!--										<input type="checkbox" name="ttk" id="ttkx1"> <label for="ttkx1">Въезд в ТТК</label>-->
        <!--									</span>-->
        <!--                                <span class="radio__block">-->
        <!--										<input type="checkbox" name="sk" id="skx1"> <label for="skx1">Въезд в СК</label>-->
        <!--									</span>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                        <fieldset class="fieldset3">-->
        <!--                            <div class="select">-->
        <!--                                <select name="pay_type">-->
        <!--                                    <option value="Оплата" selected="">Оплата</option>-->
        <!--                                    <option value="Paypall">Paypall</option>-->
        <!--                                    <option value="Webmoney">Webmoney</option>-->
        <!--                                </select>-->
        <!--                                <div class="select__val select__val_value">Оплата</div>-->
        <!--                            </div>-->
        <!--                        </fieldset>-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="calculator__full-right">-->
        <!--                        <p class="calculator__full-heading3">Упаковочные материалы:</p>-->
        <!--                        <div class="flex_between calculator__full-blocks">-->
        <!--                            <div class="calculator__full-block">-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Короб<br> большой</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="korobB" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Короб<br> малый</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="korobM" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Пузырчатая<br> пленка</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="plenka" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!---->
        <!--                            </div>-->
        <!--                            <div class="calculator__full-block">-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Стрейч-<br> пленка</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="streich" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Картон-<br> ный лист</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="karton" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="calculator__full-tr">-->
        <!--                                    <p class="calculator__full-td_name">Скотч</p>-->
        <!--                                    <div class="calculator__loaders  calculator__loaders_little flex_between">-->
        <!--                                        <button type="button" class="calculator__loaders_minus">−</button>-->
        <!--                                        <span class="calculator__count-text">-->
        <!--												<input type="tel" readonly="" name="skotch" value="12" class="calculator__count">-->
        <!--												<div>шт</div>-->
        <!--											</span>-->
        <!--                                        <button type="button" class="calculator__loaders_plus">+</button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <fieldset class="fieldset1">-->
        <!--                            <textarea  name="from" placeholder="Комментарий:" class="input" ></textarea>-->
        <!--                        </fieldset>-->
        <!--                        <p class="calculator__full-but"><button type="submit" class="btn btn_red  btn-sm ">Расcчитать</button></p>-->
        <!---->
        <!---->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--            </form>-->
        <!--        </div>-->
        <!---->
        <!--    </div>-->
        <!--calculator__full END-->
    </section>
    <!--calculator END-->

    <!--no-time-->
    <section class="no-time bg_red">
        <div class="container flex_between items_vcenter">
            <div class="heading2">
                Некогда<br> считать?
            </div>
            <div class="no-time__text">
                Я помогу. оставьте номер своего<br> телефона. Я перезвоню Вам и сделаю<br> расчет за пару минут.
            </div>
            <div class="no-time__form ">
                <form action="" method="post" id="no_time_form" class="flex_between items_vcenter">
                    <span class="for_input"><input type="tel" name="tel" placeholder="Номер телефона" class="input"></span>
                    <button type="submit" class="btn btn_blue btn_short "></button>
                </form>
            </div>
        </div>
    </section>
    <!--no-time END-->

    <!--why-trust-->
    <section class="why-trust" id="why-trust">
        <div class="container ">
            <h2 class="fz50 upper">Узнайте, почему нам доверяют тысячи клиентов</h2>
            <p class="align-center">Выполняем погрузку любой сложности, гарантируем сохранность ТС во время работы</p>
            <ul class="cargo__list cargo__list2 flex_between">
                <li class="cargo__item">
                    <span class="cargo__ico">
                        <picture>
                            <source srcset="/img/webp/adv4x2.webp" type="image/webp">
                            <img src="/img/adv4x2.png" alt="">
                        </picture>
                    </span>
                    <div class="cargo__item-text">
                        <p class="cargo__item-title">Собственный автопарк</p>
                        <p>Мы – не посредники. В нашем распоряжении – большой парк современных эвакуаторов разной грузоподъемности и оснащения. В том числе с кранами-манипуляторами, сдвижными гидравлическими платформами.</p>
                    </div>
                </li>
                <li class="cargo__item cargo__item__long">
                    <span class="cargo__ico">
                        <picture>
                            <source srcset="/img/webp/adv3x2.webp" type="image/webp">
                            <img src="/img/adv3x2.png" alt="">
                        </picture>
                    </span>
                    <div class="cargo__item-text">
                        <p class="cargo__item-title">Квалифицированные водители</p>
                        <p>Наши специалисты справятся с погрузкой любой сложности. Для них не составит проблем, если авто находится на тесной парковке, в кювете, если у ТС отсутствует буксировочный крюк, заблокированы колеса, кузов сильно деформирован.</p>
                    </div>
                </li>
                <li class="cargo__item">
                    <span class="cargo__ico">
                        <picture>
                            <source srcset="/img/webp/adv6x2.webp" type="image/webp">
                            <img src="/img/adv6x2.png" alt="">
                        </picture>
                    </span>
                    <div class="cargo__item-text">
                        <p class="cargo__item-title">Подача эвакуатора через 20-30 минут</p>
                        <p>Наши эвакуаторы равномерно распределены для дежурства во всех районах Москвы и Московской области. Вне зависимости от того, где вы находитесь, помощь прибудет уже через 20-30 минут после поступления заявки.</p>
                    </div>

                </li>
                <li class="cargo__item cargo__item__long">
                    <span class="cargo__ico">
                        <picture>
                            <source srcset="/img/webp/adv5x2.webp" type="image/webp">
                            <img src="/img/adv5x2.png" alt="">
                        </picture>
                    </span>
                    <div class="cargo__item-text">
                        <p class="cargo__item-title">Работаем 24/7</p>
                        <p>Мы принимаем и выполняем заявки на эвакуацию круглосуточно, без перерывов и выходных. Вы можете рассчитывать на оперативную помощь в любое время суток и в любой день недели. </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--why-trust END-->

    <!--instantly-->
    <!--<section class="instantly" id="instant-call">
    <div class="container">
        <div class="instantly__wrap">
            <h2 class="fz50 upper">Мгновенный вызов эвакуатора</h2>
            <p>Оставьте номер своего телефона. Менеджер перезвонит Вам в течение 3ех минут и договорится о времени приезда.</p>
            <div class="instantly__form">
                <form action="" method="post" id="instantly_form">
                    <input type="hidden" name="subject" value="Закажите <?= $content['service'][$_SESSION['service']]['service_7']; ?> с грузчиками">
                    <p><input type="tel" name="tel" class="input input_big" placeholder="Номер Вашего телефона"></p>
                    <p><button type="submit" class="btn btn_red btn-sm">Вызвать</button></p>
                </form>
            </div>
        </div>
    </div>
</section>-->
    <!--instantly END-->



    <!--instantly-->
    <!--<section class="instantly instantly2">
    <div class="container">
        <div class="instantly__wrap">
            <h2 class="fz50 upper">Закажите <?= $content['service'][$_SESSION['service']]['service_7']; ?> с грузчиками</h2>
            <p>Оставьте номер своего телефона.<br> Менеджер перезвонит Вам для уточнения деталей.</p>
            <div class="instantly__form">
                <form action="" method="post" id="instantly_form2">
                    <input type="hidden" name="subject" value="Закажите <?= $content['service'][$_SESSION['service']]['service_7']; ?> с грузчиками">
                    <p><input type="tel" name="tel" class="input input_big" placeholder="Номер Вашего телефона"></p>
                    <p><button type="submit" class="btn btn_red btn-sm">Вызвать</button></p>
                </form>
            </div>
        </div>
    </div>
</section>-->

    <!--instantly END-->

    <!-- avtopark -->
    <section class="avtopark" id="prices">
        <div class="container">

            <div class="avtopark__for-filters flex_between">
                <h2 class="fz50 upper">Наш автопарк</h2>
                <!--            <div class="avtopark__filters flex ">-->
                <!--                <a href="javascript:;" data-id="1.5" class="active">1.5 т</a>-->
                <!--                <a href="javascript:;" data-id="3">3 т</a>-->
                <!--                <a href="javascript:;" data-id="4">5 т</a>-->
                <!--                <a href="javascript:;" data-id="10">10 т</a>-->
                <!--                <a href="javascript:;" data-id="all">все</a>-->
                <!--            </div>-->
            </div>


            <?php include(ROOT . '/views/module3/prices-main.php'); ?>


        </div>
    </section>
    <!-- avtopark END-->



    <!-- examples -->
    <!--<section class="examples" style="background-image: url(/img/bg14.jpg);">-->
    <section class="examples">
        <div class="container flex_between">
            <div class="examples__left">
                <h2>Посмотрите как мы работаем</h2>
                <p>
                    <button type="button" class="btn btn_red" onclick="open_popups('#popup-ring-z')"> Оставить заявку</button>
                </p>
            </div>

            <div class="examples__right">
                <div class="examples__slider bg_blue" id="examples__slider">
                    <!--examples__item-->
                    <div class="examples__item">
                        <div class="examples__item-title">Срочная эвакуация</div>
                        <dl class="flex_between">
                            <dt>Выполненные работы: </dt>
                            <dd>погрузка и перевозка автомобиля по Москве</dd>
                            <dt>Длительность: </dt>
                            <dd>40 минут</dd>
                            <!--                        <dt>Дополнительно: </dt>-->
                            <!--                        <dd>набор упаковки для переезда 3-комн.квартиры</dd>-->
                            <dt>
                                <div class="examples__item-foto">
                                    <img src="/img/otz/m42.jpg" alt="">
                                    <p>Кирилл Новоселов</p>
                                </div>
                            </dt>
                            <dd>
                                <p>
                                    <em>Подача эвакуатора – в течение 20 минут. При этом тариф стандартный, без наценок за срочность. Водитель работал быстро, аккуратно. Погрузка заняла не больше 10 минут. До места назначения доехали без проблем.</em>
                                </p>
                                <div class="examples__item-gallery flex_between">
                                    <a href="/pics/img1.jpg" class="fancybox" rel="group"><img src="/pics/img1.jpg" alt=""></a>
                                    <a href="/pics/img2.jpg" class="fancybox" rel="group"><img src="/pics/img2.jpg" alt=""></a>
                                    <a href="/pics/img3.jpg" class="fancybox" rel="group"><img src="/pics/img3.jpg" alt=""></a>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <!--examples__item-->
                    <div class="examples__item">
                        <div class="examples__item-title">Эвакуация из Москвы в Подмосковье</div>
                        <dl class="flex_between">
                            <dt>Выполненные работы: </dt>
                            <dd>погрузка на эвакуатор, перевозка (130 км)</dd>
                            <dt>Длительность: </dt>
                            <dd>2,5 часа</dd>
                            <!--                        <dt>Дополнительно: </dt>-->
                            <!--                        <dd>набор упаковки для переезда 2-комн.квартиры</dd>-->
                            <dt>
                                <div class="examples__item-foto">
                                    <img src="/img/otz/m38.jpg" alt="">
                                    <p>Анатолий Перов</p>
                                </div>
                            </dt>
                            <dd>
                                <p>
                                    <em>Заявку оформлял через сайт. Через минуту после заполнения формы перезвонила диспетчер, уточнила детали. Эвакуатор был на месте через полчаса. Погрузка, перевозка, выгрузка прошли без эксцессов, работа сделана аккуратно. Стоимость – ровно столько, сколько озвучила диспетчер при заказе. </em>
                                </p>
                                <div class="examples__item-gallery flex_between">
                                    <a href="/pics/img1.jpg" class="fancybox" rel="group"><img src="/pics/img2.jpg" alt=""></a>
                                    <a href="/pics/img2.jpg" class="fancybox" rel="group"><img src="/pics/img3.jpg" alt=""></a>
                                    <a href="/pics/img3.jpg" class="fancybox" rel="group"><img src="/pics/img1.jpg" alt=""></a>
                                </div>
                            </dd>
                        </dl>
                    </div>

                </div>
                <p class="examples__p"><a href="javascript:;" class="a-border" id="examples__slider_next">Ещё отзыв</a></p>
                <p class="examples__free">Бесплатная консультация:</p>
                <p class="examples__tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>
            </div>

        </div>
    </section>
    <!-- examples END -->

    <!-- only-us -->
    <section class="only-us only-us2">
        <div class="container clearfix">
            <div class="flex_between only-us__first">
                <div class="only-us__order bg_red">
                    <div class="heading2">Нужна помощь?</div>
                    <p class="only-us__order-text">Позвоните мне, я помогу Вам сделать расчет стоимости <?= $content['service'][$_SESSION['service']]['service_9'] ?></p>

                    <p class="only-us__order-tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>

                    <p class="only-us__order-img"><img src="/img/help_img.jpg" alt=""></p>
                </div>

                <ul class="only-us__list only-us__list2 flex_between">
                    <li>
                        <p class="only-us__big">10</p>
                        <p>лет на рынке транспортных услуг</p>
                    </li>
                    <li>
                        <p class="only-us__big">34 600</p>
                        <p>заказов в год, от частных клиентов и крупных компаний</p>
                    </li>
                    <li>
                        <p class="only-us__big">100</p>
                        <p>машин в собственном автопарке</p>
                    </li>
                    <li>
                        <p class="only-us__big">100 000 000 <span>кг</span></p>
                        <p>- общий вес грузов, перевозимых нашей компанией за год</p>
                    </li>
                    <li>
                        <p class="only-us__big">5000 <span>м<sup>2</sup></span></p>
                        <p>площадь собственных складов ответственного хранения</p>
                    </li>
                    <li>
                        <p class="only-us__big">800 - 20000 <span>кг</span></p>
                        <p>грузоподъемность наших автомобилей</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- only-us END -->

    <!-- discount -->
    <!--<section class="discount">
    <div class="container flex">
        <div class="discount__left">
            <p class="discount__date">Толькодо 15 августа</p>
            <div class="slick-slider discount__slider" id="discount__slider">
                <div class="discount__item">
                    <h2 class="fz50 upper">скидка для переезда<br> в новое жилье</h2>
                    <p>Во время заказа сообщите менеджеру о том, что готовитесь к переезду именно в новую квартиру. Пришлите копию свидетельства о собственности на 		недвижимость на электронную почту
                        <a href="mailto:info@грузоперевозки.москва" class="a-border">info@грузоперевозки.москва</a> и мы сделаем Вам скидку в размере 10% от суммы Вашего заказа.</p>
                    <p><button type="button" class="btn btn_red " onclick="car_popup('Renault (каблук)')">Заказать переезд со скидкой</button></p>
                </div>
                <div class="discount__item">
                    <h2 class="fz50 upper">скидка для переезда в новое жилье</h2>
                    <p>Во время заказа сообщите менеджеру о том, что готовитесь к переезду именно в новую квартиру. Пришлите копию свидетельства о собственности на 		недвижимость на электронную почту
                        <a href="mailto:info@грузоперевозки.москва" class="a-border">info@грузоперевозки.москва</a> и мы сделаем Вам скидку в размере 10% от суммы Вашего заказа.</p>
                    <p><button type="button" class="btn btn_red " onclick="car_popup('Renault (каблук)')">Заказать переезд со скидкой</button></p>
                </div>
                <div class="discount__item">
                    <h2 class="fz50 upper">скидка для переезда в новое жилье</h2>
                    <p>Во время заказа сообщите менеджеру о том, что готовитесь к переезду именно в новую квартиру. Пришлите копию свидетельства о собственности на 		недвижимость на электронную почту
                        <a href="mailto:info@грузоперевозки.москва" class="a-border">info@грузоперевозки.москва</a> и мы сделаем Вам скидку в размере 10% от суммы Вашего заказа.</p>
                    <p><button type="button" class="btn btn_red " onclick="car_popup('Renault (каблук)')">Заказать переезд со скидкой</button></p>
                </div>
            </div>
        </div>
        <div class="discount__circle bg_red flex_center">
            10<sup>%</sup>
        </div>
    </div>
</section>-->
    <!-- discount END-->



    <!-- tarifs -->
    <!--<section class="tarifs">
    <div class="container">
        <h2 class="align-center upper fz50">Тарифы на <?= $content['service'][$_SESSION['service']]['service_7']; ?></h2>
        <div class="tarifs__wrap flex_between">
            <div class="tarifs__left">
                <ul class="tarifs__list flex_between">
                    <li class="tarifs__item">
                        <div class="flex">
                            <span class="tarifs__rooms_num">1</span>
                            <span class="tarifs__rooms">комнатная квартира</span>
                        </div>
                        <ul class="tarifs__item_ul">
                            <li>мебель</li>
                            <li>бытовая техника</li>
                            <li>кухонный гарнитур</li>
                            <li>предметы интерьера и пр.</li>
                            <li>+ 20-40 коробок</li>
                        </ul>
                        <p class="tarifs__item_p">Газель 10 кубов<br> 2 грузчика на 4 часа</p>
                        <p class="tarifs__price">
                            <sup>ОТ</sup> 4 500 <sup>Р.</sup>
                        </p>
                        <p><button type="button" class="btn btn_red btn-sm " onclick="car_popup('Газель 10 кубов 2 грузчика на 4 часа')">Отправить заявку</button></p>
                    </li>
                    <li class="tarifs__item">
                        <div class="flex">
                            <span class="tarifs__rooms_num">2</span>
                            <span class="tarifs__rooms">комнатная квартира</span>
                        </div>
                        <ul class="tarifs__item_ul">
                            <li>мебель</li>
                            <li>бытовая техника</li>
                            <li>кухонный гарнитур</li>
                            <li>предметы интерьера и пр.</li>
                            <li>+ 30-60 коробок</li>
                        </ul>
                        <p class="tarifs__item_p">Бычок 19 кубов<br> 2 грузчика на 5 часов</p>
                        <p class="tarifs__price">
                            <sup>ОТ</sup> 5 600 <sup>Р.</sup>
                        </p>
                        <p><button type="button" class="btn btn_red  btn-sm" onclick="car_popup('Бычок 19 кубов 2 грузчика на 5 часов')">Отправить заявку</button></p>
                    </li>
                    <li class="tarifs__item">
                        <div class="flex">
                            <span class="tarifs__rooms_num">3</span>
                            <span class="tarifs__rooms">комнатная квартира</span>
                        </div>
                        <ul class="tarifs__item_ul">
                            <li>мебель</li>
                            <li>бытовая техника</li>
                            <li>кухонный гарнитур</li>
                            <li>предметы интерьера и пр.</li>
                            <li>+ 50-70 коробок</li>
                        </ul>
                        <p class="tarifs__item_p">Бычок 20 кубов<br> 2 грузчика на 5 часов</p>
                        <p class="tarifs__price">
                            <sup>ОТ</sup> 7 200 <sup>Р.</sup>
                        </p>
                        <p><button type="button" class="btn btn_red  btn-sm" onclick="car_popup('Бычок 20 кубов 2 грузчика на 5 часов')">Отправить заявку</button></p>
                    </li>
                </ul>
            </div>
            <div class="tarifs__hr"></div>
            <div class="tarifs__right">
                <p class="tarifs__free">Бесплатный индивидуальный расчет стоимости переезда</p>
                <p>по Вашим пожеланиям и требованиям</p>
                <p><button type="button" class="btn btn_blue  btn-sm" onclick="open_popups('#popup-ring-z')">Рассчитать</button></p>
                <p>Или оцените стоимость переезда по телефону</p>
                <p class="tarifs__tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"></a><?= $content['tel'] ?></p>
            </div>
        </div>

    </div>
</section>-->
    <!-- tarifs END -->

    <!-- find_cheep -->
    <!--<section class="find_cheep ">
    <div class="container flex_between">
        <div class="find_cheep__wrap">
            <h2 class=" upper fz50">Нашли цену ниже? Сообщите нам и получите скидку.</h2>
            <p>Ежедневно мы сравниваем цены на квартирный переезд с ценами других мувинговых компаний. Если Вам предложили квартирный переезд "под ключ" по цене ниже, чем у нас, мы сделаем для Вас еще более выгодное предложение. Все, что Вам нужно сделать - это прислать нам уже готовый расчет из другой компании. Для этого воспользуйтесь формой ниже.</p>
            <div class="find_cheep__form">
                <form action="" method="post" id="find_cheep__form"  enctype="multipart/form-data">
                    <input type="hidden" name="subject" value="Нашли цену ниже? Сообщите нам и получите скидку.">
                    <p><input type="text" name="name" class="input input_big" placeholder="Ваше имя" ></p>
                    <p><input type="tel" name="tel" class="input input_big" placeholder="Номер телефона" ></p>
                    <div class="input_file">
                        <div class="input_file__val">Прикрепить файл</div>
                        <input type="file" name="filename">
                    </div>
                    <p class="align-center"><button type="submit" class="btn btn_red btn-sm">Отправить</button></p>
                </form>
                <p class="align-center">Если у Вас есть вопросы, спросите нас по телефону:</p>
                <p class="align-center find_cheep__tel"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>
            </div>

        </div>
    </div>
</section>-->
    <!-- find_cheep END -->

    <!--packing_kits-->
    <!--<section class="packing_kits ">
    <div class="container">
        <h2 class="upper fz50 align-center">Наборы упаковки</h2>
        <p class="align-center">Чтобы Вам было удобно переезжать, мы собрали специальные наборы для надежной защиты <br>
            Вашей мебели, бытовой техники и личных вещей</p>
        <ul class="packing_kits__list flex_between">
            <li class="packing_kits__item">
                <p class="packing_kits__img">
                    <img src="/pics/set1.jpg" alt="">
                </p>
                <p class="packing_kits__name">Набор для переезда однокомнатной квартиры</p>
                <p class="packing_kits__price">5 976<sup>р.</sup></p>
                <ul class="tarifs__item_ul packing_kits__ul">
                    <li>Короб универсальный - 20 шт.</li>
                    <li>Короб малый - 20 шт.</li>
                    <li>Короб под одежду - 1 шт.</li>
                    <li>Защитная пленка с пузырьками - 60 м/кв.</li>
                    <li>Трейч-пленка - 1 рулон</li>
                    <li>Скотч бумажный - 1 шт.</li>
                    <li>Скотч полиэтиленовый - 4 шт.</li>
                </ul>
            </li>
            <li class="packing_kits__item">
                <p class="packing_kits__img">
                    <img src="/pics/set2.jpg" alt="">
                </p>
                <p class="packing_kits__name">Набор для переезда двухкомнатной квартиры</p>
                <p class="packing_kits__price">9 423<sup>р.</sup></p>
                <ul class="tarifs__item_ul packing_kits__ul">
                    <li>Короб универсальный - 20 шт.</li>
                    <li>Короб малый - 20 шт.</li>
                    <li>Короб под одежду - 1 шт.</li>
                    <li>Защитная пленка с пузырьками - 60 м/кв.</li>
                    <li>Трейч-пленка - 1 рулон</li>
                    <li>Скотч бумажный - 1 шт.</li>
                    <li>Скотч полиэтиленовый - 4 шт.</li>
                </ul>
            </li>
            <li class="packing_kits__item">
                <p class="packing_kits__img">
                    <img src="/pics/set3.jpg" alt="">
                </p>
                <p class="packing_kits__name">Набор для переезда трехкомнатной  квартиры</p>
                <p class="packing_kits__price">13 977<sup>р.</sup></p>
                <ul class="tarifs__item_ul packing_kits__ul">
                    <li>Короб универсальный - 20 шт.</li>
                    <li>Короб малый - 20 шт.</li>
                    <li>Короб под одежду - 1 шт.</li>
                    <li>Защитная пленка с пузырьками - 60 м/кв.</li>
                    <li>Трейч-пленка - 1 рулон</li>
                    <li>Скотч бумажный - 1 шт.</li>
                    <li>Скотч полиэтиленовый - 4 шт.</li>
                </ul>
            </li>
        </ul>
    </div>
</section>-->
    <!--packing_kits END-->

    <!-- how-mutch-materials -->
    <!--<section class="how-mutch-materials bg_blue">
    <div class="container">
        <h2 class="align-center fz50">Узнайте, сколько упаковочных материалов Вам может понадобиться для переезда</h2>
        <div class="flex_between how-mutch-materials__wrap">
            <div class="how-mutch-materials__left">
                <form action="" method="post" id="how_mutch_materials_form">
                    <p class="align-center">
                        Отметьте то, что планируете перевезти. Система рассчитает примерное количество упаковочных материалов с небольшим запасом.
                    </p>
                    <div class="flex_between how-mutch-materials__blocks">
                        <ul class="how-mutch-materials__block">
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi1" name="checkers[]" value="Крупная бытовая техника"> <label for="radoi1">Крупная бытовая техника</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi2" name="checkers[]" value="Кухонная техника"> <label for="radoi2">Кухонная техника</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi3" name="checkers[]" value="Компьютерная техника"> <label for="radoi3">Компьютерная техника</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi4" name="checkers[]" value="Бытовая техника">  <label for="radoi4">Бытовая техника</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi5" name="checkers[]" value="Посуда"> <label for="radoi5">Посуда</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi6" name="checkers[]" value="Хрупкие предметы"> <label for="radoi6">Хрупкие предметы</label>
								</span>
                            </li>
                        </ul>
                        <ul class="how-mutch-materials__block">
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi7" name="checkers[]" value="Одежда"> <label for="radoi7">Одежда</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi8" name="checkers[]" value="Верхняя одежда"> <label for="radoi8">Верхняя одежда</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi9" name="checkers[]" value="Детские игрушки"> <label for="radoi9">Детские игрушки</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi10" name="checkers[]" value="Детская одежда"> <label for="radoi10">Детская одежда</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi11" name="checkers[]" value="Картины, постеры"> <label for="radoi11">Картины, постеры</label>
								</span>
                            </li>
                            <li>
								<span class="radio__block">
									<input type="checkbox" id="radoi12" name="checkers[]" value="Книги"> <label for="radoi12">Книги</label>
								</span>
                            </li>
                        </ul>
                    </div>
                    <div class="flex_between how-mutch-materials__blocks how-mutch-materials__blocks2">
                        <div class="how-mutch-materials__block">
                            <p>Кол-во проживающих</p>
                            <div class="calculator__loaders calculator__loaders2 flex_between">
                                <button type="button" class="calculator__loaders_minus" >−</button>
                                <span class="calculator__count-text">
									<input type="tel" readonly="" name="loaders_count" value="5" class="calculator__count" >
								</span>
                                <button type="button" class="calculator__loaders_plus" >+</button>
                            </div>
                        </div>
                        <div class="how-mutch-materials__block">
                            <button type="submit" class="btn btn_red btn-sm">Готово</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="how-mutch-materials__right bg_red">
                <p class="how-mutch-materials__ring align-center">Позвоните нам</p>
                <p class="how-mutch-materials__tel align-center"><a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a></p>
                <p class="how-mutch-materials__or align-center">или оставьте заявку по кнопке ниже.</p>
                <p class="how-mutch-materials__little align-center">Специалисты помогут Вам подобрать упаковку, подскажут, какое количество материалов понадобится именно для Вашего переезда.</p>
                <p class="how-mutch-materials__but align-center">
                    <button type="button" class="btn btn_white btn-sm red-color" onclick="open_popups('#popup-ring-z')">Заказать упаковку</button>
                </p>
                <div class="flex_between how-mutch-materials__delivery">
                    <div class="how-mutch-materials__delivery1">
                        <p>Доставка упаковки<br> осуществляется ежедневно </p>
                        <p class="how-mutch-materials__delivery-big">с 8.00 до 22.00</p>
                    </div>
                    <div class="how-mutch-materials__delivery1">
                        <p>В стоимость доставки<br>  входит подъем на<br>  этаж,до двери квартиры.</p>
                    </div>
                </div>
                <p class="how-mutch-materials__cost-heading align-center">Стоимость доставки:</p>
                <table class="how-mutch-materials__table">
                    <tr>
                        <td>
                            <p>в пределах МКАД</p>
                            <p class="how-mutch-materials__td-big">600<sup>Р.</sup></p>
                        </td>
                        <td>
                            <p>за МКАД</p>
                            <p class="how-mutch-materials__td-big">600<sup>Р.</sup></p>
                            <p>+ 20 р./км.</p>
                        </td>
                    </tr>
                </table>
                <p class="how-mutch-materials__little2">
                    При покупке упаковочных материалов на сумму свыше 8000 р. доставка в пределах МКАД – бесплатно, за МКАД – доплата 20 р./км.
                </p>
            </div>
        </div>
    </div>
</section>-->
    <!-- how-mutch-materials END -->

    <!-- what-else -->
    <section class="what-else ">
        <div class="container">
            <h2 class="align-center upper fz50">Чем еще мы можем Вам помочь</h2>
            <p class="align-center what-else__p">Чтобы Вам было удобно переезжать, мы собрали специальные наборы для надежной защиты
                Вашей мебели, бытовой техники и личных вещей</p>
            <div class="what-else__slider flex_between" id="what_else__slider">
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-манипулятор/">Эвакуатор-манипулятор</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help2.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-для-легковых-автомобилей/">Эвакуатор для легковых авто</a></p>
                    <p>Специалисты нашей компании бережно относятся к имуществу клиентов,
                        пунктуальны и вежливы.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help3.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/мотоэвакуатор/">Мотоэвакуатор</a></p>
                    <p>Наши специалисты имеют необходимые навыки и опыт в разборке и сборке встроенной, корпусной и мягкой мебели.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-для-газелей/">Эвакуатор для Газелей</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>

                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-для-внедорожников/">Эвакуатор для внедорожников</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-для-автобусов/">Эвакуатор для автобусов</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/эвакуатор-для-спецтехники/">Эвакуатор для спецтехники</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/техпомощь-на-дороге/">Техпомощь на дороге</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>

                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/прикурить-автомобиль/">Прикурить автомобиль</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
                <div class="what-else__item">
                    <p class="what-else__img">
                        <img src="/pics/help1.jpg" alt="">
                    </p>
                    <p class="what-else__name"><a href="/подвоз-топлива/">Подвоз топлива</a></p>
                    <p>К Вашим услугам наш автопарк из надежных автомобилей для перевозки различных видов грузов.</p>
                    <p><button type="button" class="btn btn_red btn-sm" onclick="open_popups('#popup-ring-z')">Заказать</button></p>
                </div>
            </div>
        </div>
    </section>
    <!-- what-else END-->


    <!-- reviews -->
    <section class="reviews">
        <div class="container">
            <div class="reviews__text">
                <h2>Уже 10 лет нам доверяют более <span class="wh_sp">12 000</span> клиентов</h2>
                <p>Мы прислушиваемся к каждому отзыву. Благодаря этому, улучшаем сервис и расширяем количество услуг.</p>
                <p><button type="button" class="btn btn_blue btn-sm" onclick="open_section_popup('#reviews__popup')">Оставить отзыв</button></p>
            </div>

            <div class="slick-slider reviews__slider" id="reviews__slider">

                <div class="reviews__item ">
                    <div class="flex_between">
                        <div class="reviews__item-img">
                            <picture>
                                <source srcset="/img/otz/w4.jpg" type="image/webp">
                                <img src="/img/otz/w4.jpg" alt="">
                            </picture>
                        </div>
                        <div class="reviews__item-cont">
                            <p class="reviews__item-name">Алёна</p>
                            <p class="reviews__item-date">12.12.2016 г.</p>
                            <div class="reviews__item-table flex">
                                <div>
                                    <div class="reviews__item-tr">Достоинства:</div>
                                    <div class="reviews__item-td">отличная цена, аккуратная погрузка</div>
                                </div>
                                <div>
                                    <div class="reviews__item-tr">Недостатки:</div>
                                    <div class="reviews__item-td">нет</div>
                                </div>
                            </div>
                            <p class="reviews__item-text">Обслуживание очень понравилось. Во-первых, совсем не долго ждала эвакуатора – по ощущениям, не больше 20 минут. Во-вторых, очень приятный, вежливый водитель. И, что самое главное, стоимость перевозки минимум на 500 рублей дешевле, чем называли в других фирмах.</p>
                        </div>
                    </div>
                </div>

                <div class="reviews__item ">
                    <div class="flex_between">
                        <div class="reviews__item-img">
                            <picture>
                                <source srcset="/img/otz/m9.jpg" type="image/webp">
                                <img src="/img/otz/m9.jpg" alt="">
                            </picture>
                        </div>
                        <div class="reviews__item-cont">
                            <p class="reviews__item-name">Станислав</p>
                            <p class="reviews__item-date">12.12.2016 г.</p>
                            <div class="reviews__item-table flex">
                                <div>
                                    <div class="reviews__item-tr">Достоинства:</div>
                                    <div class="reviews__item-td">быстрая подача, хороший эвакуатор, тарифы</div>
                                </div>
                                <div>
                                    <div class="reviews__item-tr">Недостатки:</div>
                                    <div class="reviews__item-td">не нашел</div>
                                </div>
                            </div>
                            <p class="reviews__item-text">Приятно удивлен. В первую очередь, оперативностью. С момента звонка в диспетчерскую до приезда эвакуатора прошло около 25-30 минут. Машина свежая, ухоженная, с хорошим оборудованием. С погрузкой водитель справился буквально за 5 минут. В салоне чисто, не накурено.</p>
                        </div>
                    </div>
                </div>

                <div class="reviews__item ">
                    <div class="flex_between">
                        <div class="reviews__item-img">
                            <picture>
                                <source srcset="/img/otz/m33.jpg" type="image/webp">
                                <img src="/img/otz/m33.jpg" alt="">
                            </picture>
                        </div>
                        <div class="reviews__item-cont">
                            <p class="reviews__item-name">Юрий</p>
                            <p class="reviews__item-date">12.12.2016 г.</p>
                            <div class="reviews__item-table flex">
                                <div>
                                    <div class="reviews__item-tr">Достоинства:</div>
                                    <div class="reviews__item-td">быстрая обработка заявок, недорого</div>
                                </div>
                                <div>
                                    <div class="reviews__item-tr">Недостатки:</div>
                                    <div class="reviews__item-td">нет</div>
                                </div>
                            </div>
                            <p class="reviews__item-text">Заказывал в этой компании услугу <?= $content['service'][$_SESSION['service']]['service_9']; ?> на прошлой неделе. Звонил уже ночью, в полпервого. Трубку взяли сразу. Сказали, ждать примерно полчаса, сразу назвали цену. Приехали даже раньше. Приятно, что после работы цена не изменилась – сколько говорили при заказе, столько и заплатил.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="reviews__popup bg_blue section_popup" id="reviews__popup">
            <button type="button" class="section_popup_close" onclick="close_section_popup('#reviews__popup')">&times;</button>
            <div class="heading2">Оставить отзыв</div>
            <div class="form_area">
                <form action="" method="post" id="reviews_form">
                    <input type="hidden" name="subject" value="Оставить отзыв">
                    <div class="reviews__stars flex">
                        <input type="hidden" name="review__rate" class="review__rate">
                        <button type="button" class="reviews__star">1</button>
                        <button type="button" class="reviews__star">2</button>
                        <button type="button" class="reviews__star">3</button>
                        <button type="button" class="reviews__star">4</button>
                        <button type="button" class="reviews__star">5</button>
                    </div>
                    <p><input type="text" class="input" name="name" placeholder="Ваше имя"></p>
                    <p><input type="tel" class="input" name="tel" placeholder="Номер телефона"></p>
                    <p><textarea class="input" name="review" placeholder="Ваш отзыв"></textarea></p>
                    <p class="form_area__but"><button type="submit" class="btn btn_red btn_short "></button></p>
                </form>
            </div>
            <div class="section_popup__sucess bg_blue flex_center" id="reviews_form_sucess">
                <button type="button" class="section_popup_close" onclick="close_section_popup('#reviews__popup')">&times;</button>
                <div>
                    <div class="heading2">Спасибо<br> за Ваш <br> отзыв!</div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews END -->


    <!-- have-questions -->
    <section class="have-questions ">
        <div class="container flex_between">
            <div class="days-service__questions days-service__questions2 bg_blue">
                <div class="heading2">Есть вопросы?</div>
                <p>Задайте прямо сейчас</p>
                <div class="days-service__form form_area">
                    <form action="" method="post" id="days_service_form" novalidate="novalidate">
                        <input type="hidden" name="subject" value="Есть вопросы?">
                        <p><textarea class="input" name="question" placeholder="Напишите ваш вопрос"></textarea></p>
                        <p><input type="text" class="input" name="name" placeholder="Ваше имя"></p>
                        <p><input type="tel" class="input" name="tel" placeholder="Номер телефона" maxlength="17"></p>
                        <p class="days-service__we-can">Мы можем ответить на Ваш вопрос в любом из этих мессенджеров:</p>
                        <p class="flex_center days-service__radios">
                            <span class="radio__block">
                                <input type="checkbox" id="WatsApp" checked="" name="watsapp"> <label for="WatsApp">WatsApp</label>
                            </span>
                            <span class="radio__block">
                                <input type="checkbox" id="Viber" name="viber"> <label for="Viber">Viber</label>
                            </span>
                            <span class="radio__block">
                                <input type="checkbox" id="Messenger" name="messenger"> <label for="Messenger">Messenger</label>
                            </span>
                        </p>
                        <p class="form_area__but"><button type="submit" class="btn btn_red btn_short "></button></p>
                    </form>
                </div>
                <div class="days-service__form-sucess bg_red flex_center" id="days_service_form_sucess">
                    <div>
                        <div class="heading2">Спасибо за Ваш вопрос!</div>
                        <p>Наш менеджер ответит<br> вам в течении 10 минут</p>
                    </div>
                </div>
            </div>
            <div class="have-questions__discount">
                <div class="flex have-questions__heading">
                    <img src="/img/10perc.png" alt="">
                    <h2 class="upper">Хотите снизить цену?</h2>
                </div>
                <p>Получите 10% скидку на квартирный переезд, воспользовавшись персональным купоном.</p>
                <div class="have-questions__form">
                    <form action="" method="post" id="nicely__form" class="flex ">
                        <input type="hidden" name="subject" value="Купон">
                        <div class="have-questions__left">
                            <input type="email" name="mail" class="input input_big" placeholder="Ваш e-mail">
                        </div>
                        <button type="submit" class="btn btn_red btn_short "></button>
                    </form>
                </div>
                <p class="have-questions__message">Купон будет отправлен на Вашу электронную почту в течение 3 минут.</p>
                <p>Во время заказа на нашем сайте или по телефону <a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a>, cообщите номер купона менеджеру и получите 10% скидку.</p>
            </div>
        </div>
    </section>
    <!-- have-questions END -->



    <!-- nicely -->
    <?php include(ROOT . '/views/module3/nicely-links-service.php'); ?>
    <!-- nicely END -->


    <!--footer-->
    <?php include(ROOT . '/views/module3/footer-service.php'); ?>
    <!--footer END-->


    <!-- navigate -->
    <div class="navigate">
        <div class="container">
            <button type="button" class="navigate__prev"></button>
            <button type="button" class="navigate__next"></button>
        </div>
    </div>
    <!-- navigate -->

    <!-- popups -->
    <?php include(ROOT . '/views/module3/popups.php'); ?>
    <!-- popups -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/libs.min.js"></script>
    <script src="/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
</body>

</html>