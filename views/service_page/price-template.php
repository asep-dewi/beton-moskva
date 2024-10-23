<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie8" lang="ru" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]>
<html class="ie9" lang="ru" prefix="og: http://ogp.me/ns#"><![endif]-->
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

  <title><?= $content['service'][$_SESSION['service']]['service_1'] ?> на производство и доставку бетона в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?>, низкие цены на услуги 👍. Заказать бетон в Мск и Московская область недорого, круглосуточно - <?= $content['brand'] ?></title>
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


    <section class="title title-price" style="background-image: url(/img/title_price.jpg);">
      <div class="container">
        <div class="breadcrumbs">
          <ul>
            <li><a href="/">Главная</a></li>
            <li><?= $content['service'][$_SESSION['service']]['service_1'] ?></li>
          </ul>
        </div>
        <h1><?= $content['service'][$_SESSION['service']]['service_1'] ?> на бетон</h1>
        <p class="title__desc fz-20">Ознакомьтесь с ценами на разные виды бетона для фундамента, монолитного перекрытия,
          пола, бассейна, забора и дорожных работ.</p>
      </div>
    </section>

    <section class="block block__sale">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>Стоимость бетона на 20% ниже, чем у конкурентов!</h2>
            <p class="fz-20">Многолетний опыт и налаженный рабочий процесс позволяют снизить стоимость бетона в среднем,
              на 20%. Каждые 35 минут мы доставляем бетон в разные уголки Москвы.</p>
          </div>
        </div>
      </div>
    </section>


    <!--general-price-->
    <?php include(ROOT . '/views/module/general-price.php'); ?>
    <!--general-price END-->

    <!--why-order-beton-us-main-->
    <?php include(ROOT . '/views/module/why-order-beton-us-main.php'); ?>
    <!--why-order-beton-us-main END-->


    <section class="block makes-price">
      <div class="container">
        <h2 class="mb10">Из чего складывается общая цена</h2>
        <div class="row">
          <div class="col-md-6">
            <ul class="list list__delivery">
              <li>Марка бетона, которая зависит от количественной доли цемента в составе смеси</li>
              <li>Прочность смеси на сжатие</li>
              <li>Устойчивость к влаге и морозостойкость</li>
              <li>Прочность песка и щебня с гравием, а также наличие или отсутствие примесей</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list list__delivery">
              <li>Марка бетона, которая зависит от количественной доли цемента в составе смеси</li>
              <li>Прочность смеси на сжатие</li>
              <li>Устойчивость к влаге и морозостойкость</li>
              <li>Прочность песка и щебня с гравием, а также наличие или отсутствие примесей</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!--antifreeze-->
    <?php include(ROOT . '/views/module/antifreeze.php'); ?>
    <!--antifreeze END-->


    <!--helpful-information-->
    <?php include(ROOT . '/views/module/helpful-information.php'); ?>
    <!--helpful-information END-->


    <section class="block">
      <div class="container">
        <h2 class="mb10">Видео</h2>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 video-block">
          <div class="video_wrapper" data-youtube="WaKrhuh6_mw"><img src="/img/video-block.jpg" /></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <p>Бетон <?= $content['service'][$_SESSION['service']]['service_11'] ?> – тип легких бетонов, который используется в
            основном для бетонной подготовки. Применяется, прежде всего, перед заливкой монолитных плит или фундамента
            здания, а также при строительстве дорог.</p>
          <p>
            Сегодня именно бетон считается самым распространенным материалом в строительстве. И не важно, идёт ли речь о
            строительстве небоскреба или же о постройке фундамента для небольшого загородного домика – он будет необходим.
          </p>
          <p>
            Но в разных случаях будет нужен разный бетон. Его принято делить на классы и марки. Все они отличаются по
            своим характеристикам и используются для разных целей. Для чего-то будет достаточно невысокого уровня
            прочности, а для другого строения прочность обязательно должна быть повышенной.</p>
        </div>
      </div>
    </section>


    <!--certificates-->
    <?php include(ROOT . '/views/module/certificates.php'); ?>
    <!--certificates END-->

    <!-- nicely -->
    <?php include(ROOT . '/views/module/nicely-links-service.php'); ?>
    <!-- nicely END -->

    <!--map-footer-->
    <?php include(ROOT . '/views/module/map-footer.php'); ?>
    <!--map-footer END-->

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