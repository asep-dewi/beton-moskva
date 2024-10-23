<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8" lang="ru" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="ru" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png"> -->
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="/img/favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="/img/favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="/img/favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="/img/favicon/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="/img/favicon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="/img/favicon/mstile-310x310.png" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <title><?= $content['service'][$_SESSION['service']]['service_1'] ?> на доставку бетона в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?>, низкие цены на услуги 👍. Заказать бетон в Мск и Московская область по низким ценам, круглосуточно - <?= $content['brand'] ?></title>
  <meta name="description" content="Предлагаем услуги по производству и доставке бетона недорого по доступным ценам в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?>.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />


  <link href="/css/external.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="/css/internal.css" rel="stylesheet">
  <link href="/css/plugins.css" rel="stylesheet">
  <!-- FANCYBOX -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />

</head>

<body>
  <div class="wrap">
    <!--header-->
    <?php include(ROOT . '/views/module/header.php'); ?>
    <!--header END-->

    <section class="title deli-block" style="background-image: url(/img/title_delivery.jpg);">
      <div class="container">
        <div class="breadcrumbs">
          <ul>
            <li><a href="/">Главная</a></li>
            <li><?= $content['service'][$_SESSION['service']]['service_1'] ?></li>
          </ul>
        </div>
        <h1><?= $content['service'][$_SESSION['service']]['service_1'] ?></h1>
        <div class="row">
          <div class="col-md-6">
            <p class="fz-20">Ознакомьтесь со способами доставки на разные виды бетона для фундамента, монолитного перекрытия, пола, бассейна, забора и дорожных работ.</p>
            <div class="col-md-6 p0"><a href="#callback-modal" class="btn popup-modal">Заказать обратный звонок</a></div>
            <div class="col-md-6 srt-block">
              <div><img src="/img/srt.png"></div>
              <div class="srt-2"><b>100% соответствие</b><br>ГОСТ 7473-94<br>“Смеси бетонные”</div>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="ul-yellow">
              <li><span>Стоимость услуги рассчитывается в индивидуальном порядке</span></li>
              <li><span>Для постоянных покупателей и оптовых заказчиков предусмотренная гибкая система скидок</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="calc1" class="calc1">
      <form method="POST" id="order-beton-calc">
        <div class="container">
          <div class="calc1__content">
            <div class="tabs2__nav tabs2-nav">
              <div class="tabs2-nav__item is-active" data-tab-name="tab2-1">Бетон на граните</div>
              <div class="tabs2-nav__item" data-tab-name="tab2-2">Бетон на гравии</div>
              <div class="tabs2-nav__item" data-tab-name="tab2-3">Тощий бетон</div>
              <div class="tabs2-nav__item" data-tab-name="tab2-4">Бетон на керамзите</div>
              <div class="tabs2-nav__item" data-tab-name="tab2-5">Растворы</div>
              <!--            <div class="tabs2-nav__item" data-tab-name="tab2-6">Цементное молочко</div>-->
            </div>


            <div class="calc1__box">
              <ul class="calc1__list">
                <li class="calc1__item">
                  <div class="calc1__title">Наименование</div>
                </li>

                <li class="calc1__item">
                  <div class="calc1__title">Наполнитель</div>
                </li>

                <li class="calc1__item">
                  <div class="calc1__title">Цена за 1м<sup>3</sup></div>

                </li>
                <li class="calc1__item">
                  <div class="calc1__title">Объём 1м<sup>3</sup></div>

                </li>
                <!--                  <li class="calc1__item">-->
                <!--                    <div class="calc1__title">Условия отгрузки</div>-->

                <!--                  </li>-->
              </ul>

              <div class="calc1__box-inner">
                <div class="tabs2__content">
                  <div class="tab2 tab2-1 is-active">
                    <div class="tabs2__content-inner">

                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B7.5B100']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B7.5B100']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B7.5B100']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B12.5M150']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B12.5M150']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B12.5M150']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>

                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B15M200']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B15M200']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B15M200']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B20M250']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B20M250']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B20M250']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B22.5M300']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B22.5M300']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B22.5M300']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B25M350']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B25M350']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B25M350']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                      <ul class="tabs2__line">
                        <li><?= $content['beton_price']['granit']['B30M400']['name'] ?></li>
                        <li>гранит (5-20)</li>
                        <li><?= $content['beton_price']['granit']['B30M400']['price'] ?> ₽/м<sup>3</sup></li>
                        <li>
                          <div class="number">
                            <button class="number-minus" type="button">-</button>
                            <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['granit']['B30M400']['price'] ?>" value="" placeholder="0">
                            <button class="number-plus" type="button">+</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="tab2 tab2-2">
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B7.5B100']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B7.5B100']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B7.5B100']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B12.5M150']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B12.5M150']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B12.5M150']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B15M200']['name'] ?></li>
                      <li>гравий</li>
                      <li><?= $content['beton_price']['graviy']['B15M200']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B15M200']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B20M250']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B20M250']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B20M250']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B22.5M300']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B22.5M300']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B22.5M300']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B25M350']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B25M350']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B25M350']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['graviy']['B30M400']['name'] ?></li>
                      <li>гравий (5-20)</li>
                      <li><?= $content['beton_price']['graviy']['B30M400']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['graviy']['B30M400']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab2 tab2-3">
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['toschiy']['B7.5B100']['name'] ?></li>
                      <li>щебень</li>
                      <li><?= $content['beton_price']['toschiy']['B7.5B100']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['toschiy']['B7.5B100']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['toschiy']['B12.5M150']['name'] ?></li>
                      <li>щебень</li>
                      <li><?= $content['beton_price']['toschiy']['B12.5M150']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['toschiy']['B12.5M150']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['toschiy']['B15M200']['name'] ?></li>
                      <li>щебень</li>
                      <li><?= $content['beton_price']['toschiy']['B15M200']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['toschiy']['B15M200']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['toschiy']['B20M250']['name'] ?></li>
                      <li>щебень</li>
                      <li><?= $content['beton_price']['toschiy']['B20M250']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['toschiy']['B20M250']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab2 tab2-4">
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['keramzitobeton']['B7.5B100']['name'] ?></li>
                      <li>керамзит (d1600)</li>
                      <li><?= $content['beton_price']['keramzitobeton']['B7.5B100']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['keramzitobeton']['B7.5B100']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['keramzitobeton']['B12.5M150']['name'] ?></li>
                      <li>керамзит (d1600)</li>
                      <li><?= $content['beton_price']['keramzitobeton']['B12.5M150']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['keramzitobeton']['B12.5M150']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['keramzitobeton']['B15M200']['name'] ?></li>
                      <li>керамзит (d1600)</li>
                      <li><?= $content['beton_price']['keramzitobeton']['B15M200']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['keramzitobeton']['B15M200']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['keramzitobeton']['B20M250']['name'] ?></li>
                      <li>керамзит (d1600)</li>
                      <li><?= $content['beton_price']['keramzitobeton']['B20M250']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['keramzitobeton']['B20M250']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['keramzitobeton']['B22.5M300']['name'] ?></li>
                      <li>керамзит (d1600)</li>
                      <li><?= $content['beton_price']['keramzitobeton']['B22.5M300']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['keramzitobeton']['B22.5M300']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab2 tab2-5">
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['rastvor']['B7.5B100']['name'] ?></li>
                      <li>нет</li>
                      <li><?= $content['beton_price']['rastvor']['B7.5B100']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['rastvor']['B7.5B100']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['rastvor']['B12.5M150']['name'] ?></li>
                      <li>нет</li>
                      <li><?= $content['beton_price']['rastvor']['B12.5M150']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['rastvor']['B12.5M150']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['rastvor']['B15M200']['name'] ?></li>
                      <li>нет</li>
                      <li><?= $content['beton_price']['rastvor']['B15M200']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['rastvor']['B15M200']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                    <ul class="tabs2__line">
                      <li><?= $content['beton_price']['rastvor']['B20M250']['name'] ?></li>
                      <li>нет</li>
                      <li><?= $content['beton_price']['rastvor']['B20M250']['price'] ?> ₽/м<sup>3</sup></li>
                      <li>
                        <div class="number">
                          <button class="number-minus" type="button">-</button>
                          <input type="number" class="num" min="0" max="9999" data-num="1" data-price="<?= $content['beton_price']['rastvor']['B20M250']['price'] ?>" value="" placeholder="0">
                          <button class="number-plus" type="button">+</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--                <div class="tab2 tab2-6">content tab 6</div>-->

                </div>

                <!--                  <div class="extra" id="conditions">-->
                <!--                    <span>Самовызов</span>-->
                <!--                    <div class="extra__item extra__item1">-->
                <!--                      <input type="radio" name="extra__item1" value="dostavka">-->
                <!--                      <input type="radio" name="extra__item1" value="samoviviz">-->
                <!--                    </div>-->
                <!--                    <div class="extra__item">-->
                <!--                      <input type="radio" name="extra__item2" value="moskva">-->
                <!--                      <input type="radio" name="extra__item2" value="podmoskovie">-->
                <!--                    </div>-->
                <!--                    <div class="extra__item"></div>-->
                <!--                  </div>-->

              </div>


            </div>


            <div class="calc1__result">
              <div class="calc1__result-item">
                <div class="calc1__result-weight calc1-flex">
                  <span>Объём:</span> <input class="input__calc1" type="number" id="input_calc_weight" name="select_massa" value="0">
                  <span>м<sup>3</sup></span>
                </div>
              </div>
              <!--            <div class="alc1__result-item">-->
              <!--              <span>Сумма:</span> <span id="calc-price">0</span> <span> ₽</span>-->
              <!--              <input type="hidden" id="input_calc_price" name="input_calc_price" value="0">-->
              <!--            </div>-->
              <!--            <div class="alc1__result-item">-->
              <!--              <span>НДС 20%:</span> <span id="calc-nds">0</span> <span> ₽</span>-->
              <!--            </div>-->
              <div class="calc1__result-item">
                <div class="calc1__result-summ calc1-flex">
                  <span>Итого:</span> <input class="input__calc1" type="number" id="input_calc_total" name="input_calc_total" value="0">
                  <span> ₽</span>
                </div>
              </div>
              <div class="calc1__result-item">
                <input type="text" class="phone-req-2" name="tel" placeholder="Ваш телефон" data-parsley-type="digits" required="">
              </div>

              <div class="calc1__result-item change_ch сalc1__small-text">
                <input type="checkbox" name="check" id="ch-11" value="1" required="" checked="">
                <label for="ch-11">Я принимаю Условия пользования сайтом и условия Политики конфиденциальности</label>
              </div>

              <div class="calc1__result-item" style="margin-top: 15px;">
                <button class="btn btn_block" style="margin-bottom: 5px;">Заказать</button>
              </div>

              <div class="calc1__result-item calc1__small-text calc1__small-text--light">
                <span>Мы перезвоним Вам в течении 3 минут.</span>
              </div>

            </div>

          </div>

        </div>
      </form>
    </section>



    <!--form-hard-to-count-->
    <?php include(ROOT . '/views/module/form-hard-to-count-main.php'); ?>
    <!--form-hard-to-count END-->


    <!-- <section class="block block__car">
      <div class="container">
        <h2 class="mb10">Наш автопарк</h2>
        <p class="fz-20 m0">Мы не только производим бетон, но и доставляем его в специальных автобетоносмесителях к объектув любое удобное для Вас время.</p>

        <div class="block__car__desc">
          <p>Надежная транспортировка позволит:</p>
          <ul class="list list__default">
            <li>приготовить раствор во время передвижения бетоносмесителя;</li>
            <li>смесь сохранит однородную консистенцию.</li>
          </ul>
          <p>Для перевозки на дальние расстояния используются пластификаторы и замедлители, не влияющие на качество бетона.</p>
        </div>

        <div class="row">
          <div class="col-md-6 car">
            <div class="car__image">
              <img src="/img/avto-1.jpg" alt="">
            </div>
            <div class="car__desc">
              <div class="car__desc__left">
                <h5>АБС-7DA на МАЗ-6312В3</h5>
                <p>
                  <span>Объем: до 7 кубов</span>
                  <span>Длина: 5,5 м</span>
                </p>
              </div>
              <div class="car__desc__right">
                <p><a href="#calculate-shipping" class="popup-modal">Рассчитать стоимость доставки</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 car">
            <div class="car__image">
              <img src="/img/avto-2.jpg" alt="">
            </div>
            <div class="car__desc">
              <div class="car__desc__left">
                <h5>АБС-7DA на МАЗ-6312В3</h5>
                <p>
                  <span>Объем: до 7 кубов</span>
                  <span>Длина: 5,5 м</span>
                </p>
              </div>
              <div class="car__desc__right">
                <p><a href="#calculate-shipping" class="popup-modal">Рассчитать стоимость доставки</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 car">
            <div class="car__image">
              <img src="/img/avto-3.jpg" alt="">
            </div>
            <div class="car__desc">
              <div class="car__desc__left">
                <h5>АБС-7DA на МАЗ-6312В3</h5>
                <p>
                  <span>Объем: до 7 кубов</span>
                  <span>Длина: 5,5 м</span>
                </p>
              </div>
              <div class="car__desc__right">
                <p><a href="#calculate-shipping" class="popup-modal">Рассчитать стоимость доставки</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 car">
            <div class="car__image">
              <img src="/img/avto-4.jpg" alt="">
            </div>
            <div class="car__desc">
              <div class="car__desc__left">
                <h5>АБС-7DA на МАЗ-6312В3</h5>
                <p>
                  <span>Объем: до 7 кубов</span>
                  <span>Длина: 5,5 м</span>
                </p>
              </div>
              <div class="car__desc__right">
                <p><a href="#calculate-shipping" class="popup-modal">Рассчитать стоимость доставки</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->





    <script>


    </script>



    <section class="block zakaz-beton-block zakaz-beton-block-dostavka">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb10">Закажите тощий бетон с доставкой прямо сейчас!</h2>
          </div>
          <div class="col-md-12 zbb-form">
            <form action="send.php" id="order-beton-3" class="form__calc">
              <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 girl2_txt"><b>Елена</b><br>
                    <div class="dol">Руководитель отдела продаж</div>Вы всегда можете обратиться ко мне. В этой сфере я работаю уже 5 лет, поэтому смогу оказать профессиональную помощь.
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 girl2_img">
                    <img src="/img/girl_2.png" />
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <div class="select-block">
                      <select class="js-choice" name="select_marka" id="validation-form__select" data-search="true" data-placeholder="Марка прочности бетона" required>
                        <option value="0" selected="">Марка прочности бетона</option>
                        <option value="В7,5 М100">В7,5 М100</option>
                        <option value="В12,5 М150">В12,5 М150</option>
                        <option value="В15 М200">В15 М200</option>
                        <option value="В20 М250">В20 М250</option>
                        <option value="В22,5 М300">В22,5 М300</option>
                        <option value="В25 М350">В25 М350</option>
                        <option value="В30 М400">В30 М400</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="phone-req-2" name="tel" placeholder="Ваш телефон" data-parsley-type="digits" required="">
                    <input type="text" name="beton_volume" placeholder="Объем, м3">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 change_ch">
                    <input type="checkbox" name="check" id="ch-2" value="1" required="" checked>
                    <label for="ch-2">Я принимаю Условия пользования сайтом и условия Политики конфиденциальности</label>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 garant">
                    <p>Гарантируем доставку <br>дешевле, чем где-либо!</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn_block">Заказать</button>
                    <span>Елена перезвонит Вам в течении 3 минут.</span>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- nicely -->
    <?php include(ROOT . '/views/module/nicely-links-service.php'); ?>
    <!-- nicely END -->

    <!--footer-nav-->
    <?php include(ROOT . '/views/module/footer-nav.php'); ?>
    <!--footer-nav END-->

    <!--footer-->
    <?php include(ROOT . '/views/module/footer.php'); ?>
    <!--footer END-->
  </div>


  <!--all-scrits-->
  <?php include(ROOT . '/views/module/all-scrits.php'); ?>
  <!--all-scrits END-->
</body>

</html>