<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Вызвать <?= $content['variable_2'] ?> в <?=$content['region'][$_SESSION['region']]['region_predl_p']?> недорого, низкие цены на услуги 👍. Заказ эвакуации авто в <?=$content['region'][$_SESSION['region']]['region_predl_p']?> круглосуточно</title>
    <meta name="description" content="Предлагаем услуги <?= $content['variable_4'] ?> в <?=$content['region'][$_SESSION['region']]['region_predl_p']?> по доступным ценам, работаем круглосуточно. Подача эвакуатора в <?=$content['region'][$_SESSION['region']]['region_predl_p']?> от 30 минут.">
    <meta name='keywords' content="<?= $content['variable_1'] ?>, <?= $content['domens'][$_SESSION['domen']]['gorod_im_p'] ?>, недорого"/>

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
        if (canUseWebp()==true) {
            document.querySelector('html').classList.add("webp");
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
</head>
<body>
<!--header-->
<?php include(ROOT.'/views/module3/header.php');?>
<!--header END-->

<!--first-screen-->
<section class="first-screen">
    <a href="/" class="first-screen__logo_link flex items_vcenter">
        <picture>
            <source srcset="/img/webp/flogox2.webp" type="image/webp">
            <img src="/img/flogox2.png" alt="">
        </picture>
    </a>
    <div class="container container_main_page">
        <div class="first-screen__texts flex">
            <div class="first-screen__left">
                <p>Все виды эвакуаторов для физических и юридических лиц. Помощь на дороге.</p>
            </div>
            <div class="first-screen__right">
                <p>Всегда бережно и быстро перевожу автомобили наших клиентов</p>
                <p class="fz22">Макаров Константин</p>
            </div>
        </div>
        <div>
            <h1>
                <span class="first-screen__logo">Недорогой <?=$content['variable_3']?> </span>
                <span class="first-screen__slogan">в <?=$content['region'][$_SESSION['region']]['region_predl_p']?></span>
            </h1>


            <p class="first-screen__town">Ваш город: <a href="javascript:;" onclick="open_popups('#popup_city')" class="first-screen__town_name" id="first-screen__town_name"><?= $content['domens'][$_SESSION['domen']]['current_city'] ?></a></p>
            <p class="first-screen__button"><button type="button" class="btn btn_red" onclick="open_section_popup('#first-screen__popup')">Оставить заявку</button></p>
        </div>
        <div class="first-screen__address">
            <p class="fz22">Москва </p>
            <p class="fz14"><?=$content['region'][$_SESSION['region']]['region_predl_p']?></p>
        </div>
    </div>
    <div class="first-screen__section_popup bg_red section_popup " id="first-screen__popup" >
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
            <form action="" method="post" id="first_screen_form" >
                <input type="hidden" name="subject" value="Оставить заявку">
                <p>
                    <span class="first-screen__section_popup_ico"><img src="/img/ico_name.png" alt=""></span>
                    <input type="text" class="input" name="name" placeholder="Ваше имя"></p>
                <p>
                    <span class="first-screen__section_popup_ico"><img src="/img/ico_tel.png" alt="" ></span>
                    <input type="tel" class="input" name="tel" placeholder="Номер телефона" >
                </p>

                <p class="form_area__but"><button type="submit" class="btn btn_blue btn_short "></button></p>
            </form>
        </div>
        <div class="section_popup__sucess bg_red flex_center" id="first_screen_form_sucess">
            <button type="button" class="section_popup_close" onclick="close_section_popup('#first-screen__popup')">&times;</button>
            <div>
                <div class="heading2">Спасибо<br> за  заявку!</div>
                <p>Менеджер перезвонит Вам <br>в течение 3 минут.</p>
            </div>
        </div>
    </div>
</section>
<!--first-screen END-->

<!--what-we-offer-->
<?php include(ROOT.'/views/module3/what-we-offer-region.php');?>
<!--what-we-offer END-->


<!--why-choice-->
<?php //include(ROOT.'/views/module3/about-main.php');?>
<!--why-choice END-->

<!--calculator-->
<?php include(ROOT.'/views/module3/calculator-main.php');?>
<!--calculator END-->

<!-- avtopark -->
<section class="avtopark" id="prices">
  <div class="container">
    <div class="heading-block heading-block2 flex_between items_vcenter">
      <h2>Наш автопарк</h2>
      <div class="heading-block__description">В распоряжении нашей компании есть эвакуаторы для перевозки всех классов ТС, вне зависимости от их технического состояния. В нашем автопарке – современная техника с гидравлическими и стационарными платформами, мощными лебедками и манипуляторами.</div>
    </div>

    <?php include(ROOT.'/views/module3/prices-main.php');?>


  </div>
</section>
<!-- avtopark END-->

<!--no-time-->
<?php include(ROOT.'/views/module3/no-time-2.php');?>
<!--no-time END-->

<!--cargo-->
<?php include(ROOT.'/views/module3/cargo-region.php');?>
<!--cargo END-->

<!-- know-avto -->
<?php //include(ROOT.'/views/module3/know-avto.php');?>
<!-- know-avto END-->





<!--no-time-->
<?php include(ROOT.'/views/module3/no-time.php');?>
<!--no-time END-->

<!-- how-we-work -->

<?php include(ROOT.'/views/module3/how-we-work-region.php');?>

<!-- section END -->

<!-- examples -->
<?php include(ROOT.'/views/module3/examples-region.php');?>
<!-- examples END -->


<!-- only-us -->
<?php include(ROOT.'/views/module3/only-us-region.php');?>
<!-- only-us END -->

<!-- days-service -->
<?php //include(ROOT.'/views/module3/days-service-main.php');?>
<!-- days-service END -->


<?php include(ROOT.'/views/module3/no-time-2.php');?>

<!-- reviews -->
<section class="reviews">
    <div class="container">
        <div class="reviews__text">
            <h2>Уже 10 лет нам доверяют более <span class="wh_sp">12 000</span> клиентов</h2>
            <p>Мы прислушиваемся к каждому отзыву. Благодаря этому, улучшаем сервис и расширяем количество услуг.</p>
            <p><button type="button" class="btn btn_blue btn-sm" onclick="open_section_popup('#reviews__popup')">Оставить отзыв</button></p>
        </div>

        <div class="slick-slider reviews__slider" id="reviews__slider">

<!--            --><?php //foreach ($comment as $item) {
//                $page = explode('/', $item['page']);
//                ?>
<!--                --><?php //if (($page[0] == $_SESSION['domen']) and ($page[1] == $_SESSION['region'])) { ?>

                    <div class="reviews__item ">
                        <div class="flex_between">
                            <div class="reviews__item-img">
                                <picture>
<!--                                    <source srcset="--><?//= $item['photo_user'] ?><!--" type="image/webp">-->
<!--                                    <img src="--><?//= $item['photo_user'] ?><!--" alt="">-->
                                  <source srcset="/img/otz/m25.jpg" type="image/webp">
                                  <img src="/img/otz/m25.jpg" alt="">
                                </picture>
                            </div>
                            <div class="reviews__item-cont">
<!--                                <p class="reviews__item-name">--><?//= $item['name'] ?><!--</p>-->
                                <p class="reviews__item-name">Руслан</p>
                                <p class="reviews__item-date">12.12.2016 г.</p>
                                <div class="reviews__item-table flex">
                                    <div>
                                        <div class="reviews__item-tr">Достоинства:</div>
<!--                                        <div class="reviews__item-td">--><?//= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['dostoinstva']) ?><!--</div>-->
                                        <div class="reviews__item-td">небольшое ожидание, хороший тариф, вежливый водитель</div>
                                    </div>
                                    <div>
                                        <div class="reviews__item-tr">Недостатки:</div>
<!--                                        <div class="reviews__item-td">--><?//=$item['nedostatki']?><!--</div>-->
                                        <div class="reviews__item-td">нет</div>
                                    </div>
                                </div>
                                <p class="reviews__item-text">Большое спасибо, очень выручили! При заказе сразу сказал, что мне нужно как можно быстрее. В результате, эвакуатор стоял рядом со мной уже минут через 25, а может, и раньше. Погрузка была несложная, быстрая. До места из <?=$content['region'][$_SESSION['region']]['region_predl_p']?> доехали минут за 40, были пробки небольшие. С водителем приятно поболтали по дороге, он мне даже чая из термоса предложил.</p>
                            </div>
                        </div>
                    </div>
<!--                --><?php //} ?>
<!--            --><?php //} ?>


          <div class="reviews__item ">
            <div class="flex_between">
              <div class="reviews__item-img">
                <picture>
                  <source srcset="/img/otz/w10.jpg" type="image/webp">
                  <img src="/img/otz/w10.jpg" alt="">
                </picture>
              </div>
              <div class="reviews__item-cont">
                <p class="reviews__item-name">Анастасия</p>
                <p class="reviews__item-date">12.12.2016 г.</p>
                <div class="reviews__item-table flex">
                  <div>
                    <div class="reviews__item-tr">Достоинства:</div>
                    <div class="reviews__item-td">аккуратная погрузка-выгрузка, невысокая цена</div>
                  </div>
                  <div>
                    <div class="reviews__item-tr">Недостатки:</div>
                    <div class="reviews__item-td">не обнаружила</div>
                  </div>
                </div>
                <p class="reviews__item-text">Вызывала в этой компании эвакуатор-манипулятор после ДТП. Обычной лебедкой загрузить машину не получилось бы. С манипуляторами раньше я не сталкивалась, поэтому очень переживала за машину. Но водитель большой молодец, все сделал на 5 баллов, и при этом довольно быстро. Огромная благодарность!</p>
              </div>
            </div>
          </div>

          <div class="reviews__item ">
            <div class="flex_between">
              <div class="reviews__item-img">
                <picture>
                  <source srcset="/img/otz/m48.jpg" type="image/webp">
                  <img src="/img/otz/m48.jpg" alt="">
                </picture>
              </div>
              <div class="reviews__item-cont">
                <p class="reviews__item-name">Александр</p>
                <p class="reviews__item-date">12.12.2016 г.</p>
                <div class="reviews__item-table flex">
                  <div>
                    <div class="reviews__item-tr">Достоинства:</div>
                    <div class="reviews__item-td">быстрая подача, отличное обслуживание</div>
                  </div>
                  <div>
                    <div class="reviews__item-tr">Недостатки:</div>
                    <div class="reviews__item-td">не нашел</div>
                  </div>
                </div>
                <p class="reviews__item-text">Заказывал эвакуацию внедорожника на прошлой неделе. Звонил во втором часу ночи. Дозвонился сразу. Понравилось, что тут же посчитали стоимость перевозки из <?=$content['region'][$_SESSION['region']]['region_predl_p']?>, и по факту она такой и осталась. Водитель – профи. Я очень неудобно был припаркован, но он даже глазом не моргнул. Доехали спокойно, без происшествий. </p>
              </div>
            </div>
          </div>


        </div>
    </div>
    <div class="reviews__popup bg_blue section_popup" id="reviews__popup">
        <button type="button" class="section_popup_close" onclick="close_section_popup('#reviews__popup')">&times;</button>
        <div class="heading2">Оставить отзыв</div>
        <div class="form_area">
            <form action="" method="post" id="reviews_form" >
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
                <p><input type="tel" class="input" name="tel" placeholder="Номер телефона" ></p>
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

<!-- nicely -->
<?php include(ROOT.'/views/module3/nicely-links-region.php');?>
<!-- nicely END -->



<!--footer-->
<?php include(ROOT.'/views/module3/footer.php');?>
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
<?php include(ROOT.'/views/module3/popups.php');?>
<!-- popups -->


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/libs.min.js"></script>
<script src="/js/gruz_calc.min.js?1"></script>
<script src="/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
</body>
</html>