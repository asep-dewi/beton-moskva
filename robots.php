<?php
$content = include('data/content.php');
$url = $_SERVER['HTTP_HOST'];

if (file_exists('data/content.php')) {
//    echo 'файл конт найден';
//    readfile("robots/robots_subdomen.txt");
} else {
//    echo 'файл конт не найден';
}

if (file_exists('robots/robots_subdomen.txt')) {
//    echo 'файл робота найден';
//    readfile("robots/robots_subdomen.txt");
} else {
//    echo 'файл робота не найден';
}


foreach ($content['domens'] as $item) {

    if ($item['punycode']) {
        $domen = $item['punycode'] . '.' . $content['main_domen'];
    } else {
        $domen = $content['main_domen'];
    }

    if ($domen == $url) {
        header("Content-Type: text/plain");
        readfile('robots/' . $item['robots']);


        exit;
    }
}

?>