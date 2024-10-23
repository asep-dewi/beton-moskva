<?php


$www = explode(".", $_SERVER['HTTP_HOST']);

if ($_SERVER['HTTPS'] == "off") {
  if ($www['0'] == 'www') {
//    echo 're1';
    $str = str_replace("www.", "", $_SERVER['HTTP_HOST']);
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://' . $str . $_SERVER["REQUEST_URI"]);
  } else {
//    echo 're2';
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]);
  }

} else {
  if ($www['0'] == 'www') {
    echo 're3';
    $str = str_replace("www.", "", $_SERVER['HTTP_HOST']);
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://' . $str . $_SERVER["REQUEST_URI"]);
  } else {
  }
}


function date_rus($d, $m, $y)
{
  $months = array('нулября', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
  return $d . ' ' . $months[$m] . ' ' . '20'.$y . ' г.';
}


if ($_SESSION) {
  session_destroy();
  session_start();
} else {
  session_start();
}


$content = include('data/content.php');

$url = $_SERVER['HTTP_HOST'];
$next_url = $_SERVER['REQUEST_URI'];

$domen_status = 0;

foreach ($content['domens'] as $item) {

  if ($item['punycode']) {
    $domen = $item['punycode'] . '.' . $content['main_domen'];
  } else {
    $domen = $content['main_domen'];
  }

  if ($domen == $url) {
    $domen_status = 1;
  }
}

if ($domen_status == 0) {
  echo 'домен не найден';
  print_r($domen);
  header('HTTP/1.0 404 Not Found');
}

$next_url = explode("/", $next_url);

unset($next_url[count($next_url) - 1]);
unset($next_url[0]);

if (count($next_url) > 0) {
  $status_next_url = 0;//если внутренню ссылку сайта проверяем его на включение, если нет то выдаем ошибку 404
  foreach ($next_url as $part_url) {

    if ($part_url <> '') {

      foreach ($content['service'] as $item) {
        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
          $status_next_url = 1;

        }
      }
      foreach ($content['region'] as $item) {
        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
          $status_next_url = 1;

        }
      }
      foreach ($content['okrug_region'] as $item) {
        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
          $status_next_url = 1;
        }
      }
      foreach ($content['cyti_region'] as $item) {
        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
          $status_next_url = 1;

        }
      }
      foreach ($content['metro_region'] as $item) {
        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
          $status_next_url = 1;

        }
      }

//                    echo $status_next_url.'<br>';


      if ($status_next_url == 0) {
        header('HTTP/1.0 404 Not Found');
      }

    }
    $status_next_url = 0;
  }

}


ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы
define('ROOT', dirname('_FILE_'));
require_once(ROOT . '/router/router.php');


//4. вызов Route
$router = new Router;
$router->run();


?>