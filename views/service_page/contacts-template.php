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
  <title>Контакты</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />

  <link href=/css/external.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
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

    <section class="title title_contact">
      <div class="container">
        <div class="breadcrumbs">
          <ul>
            <li><a href="/">Главная</a></li>
            <li>Контакты</li>
          </ul>
        </div>
        <h1>Контакты</h1>
      </div>
    </section>

    <section class="content">
      <div class="container">

        <div class="row mt65 mb15 table-mt30">
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <h3>Режим работы</h3>
            <p>Понедельник - Пятница с 9:00 до 18:00<br> Суббота с 9:00 до 15:00</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <h3>Режим работы</h3>
            <p><strong class="cl_black"><?= $content['tel'] ?></strong> (круглосуточно)<br>
              <a href="#callback-modal" class="popup-modal">Заказать обратный звонок</a>
            </p>
          </div>
          <!-- <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <h3>Ищите нас в соцсетях</h3>
            <ul class="list list__social">
              <li class="list__item">
                <a href="#" class="icon icon_vk"></a>
              </li>
              <li class="list__block">
                <a href="#" class="icon icon_fb"></a>
              </li>
              <li class="list__block">
                <a href="#" class="icon icon_tw"></a>
              </li>
              <li class="list__block">
                <a href="#" class="icon icon_od"></a>
              </li>
              <li class="list__block">
                <a href="#" class="icon icon_in"></a>
              </li>
            </ul>
          </div> -->
        </div>

        <h3>Контактная информация</h3>
        <div class="row mb10">
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Горячая линия:</strong><br> <?= $content['tel'] ?><br> <a href="#">beton@mail.ru</a></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Отдел контроля качества:</strong><br><br> <a href="#">beton-control@mail.ru</a></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Отдел маркетинга:</strong><br><br> <a href="#">beton-marketing@mail.ru</a></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Отдел кадров руководством:</strong><br><br> <a href="#">beton-kadry@mail.ru</a></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Отдел закупок и партнерства:</strong><br><br> <a href="#">beton-partner@mail.ru</a></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 pb20">
            <p class="cl_black"><strong>Отдел логистики:</strong><br> <?= $content['tel'] ?><br> <a href="#">beton-logistics@mail.ru</a></p>
          </div>
        </div>

        <h3>Адреса</h3>


        <!--map-footer-->
        <?php include(ROOT . '/views/module/map-footer.php'); ?>
        <!--map-footer END-->

        <div class="row mb85 table-mb30 mt-15">
          <div class="col-md-8 col-sm-6 col-xs-6">
            <h3>Реквизиты</h3>
            <p>Наименование организации: Бетон.Москва<br> Адрес: 125424, г. Москва, ул. Летная, 98<br> Юридический адрес: 125424, г. Москва, ул. Летная, 98<br> ИНН / КПП: 1234567890 / 1234567890<br> ОГРН: 1234567890123</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6">
            <h3>Все контакты</h3>
            <p><img src="/img/qr.png" alt=""></p>
          </div>
        </div>
      </div>
    </section>

    <!--form-call-wait-questions-->
    <?php include(ROOT . '/views/module/form-call-wait-questions.php'); ?>
    <!--form-call-wait-questions END-->

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