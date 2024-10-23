<?php

class Router
{
    private $routes;//предназначена для хранения массивов маршрутов

    public function __construct()
    {
        $routesPath = 'routes.php';
        $this->routes = require_once($routesPath);
    }

    public function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function getActionSubdomen()
    {
        session_unset();

        $content = include(ROOT . '/data/content.php');

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
                if (!isset($_SESSION)) {
                    $_SESSION['domen'] = $item['session_start'];
                } else {
                    $_SESSION['domen'] = $item['session_start'];
                }
                $domen_status = 1;
            }
        }
        if ($domen_status==0) {
            return false;
        }



        $next_url = explode("/", $next_url);

        unset($next_url[count($next_url)-1]);
        unset($next_url[0]);


////
//            print_r($next_url);
//            echo '<br>';


        if (count($next_url) > 0) {
            $status_next_url = 0;//если внутренню ссылку сайта проверяем его на включение, если нет то выдаем ошибку 404
            foreach ($next_url as $part_url) {

                if ($part_url <> '') {

                    foreach ($content['service'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
                            if (!isset($_SESSION)) {
                                $_SESSION['service'] = $item['session_start'];
                            } else {
                                $_SESSION['service'] = $item['session_start'];
                            }
                            $status_next_url = 1;

                        }
                    }
                    foreach ($content['region'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
//                            echo 'выполнено равенство';
                            if (!isset($_SESSION)) {
                                $_SESSION['region'] = $item['session_start'];
                            } else {
                                $_SESSION['region'] = $item['session_start'];
                            }
                            $status_next_url = 1;

                        }
                    }
                    foreach ($content['okrug_region'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
                            if (!isset($_SESSION)) {
                                $_SESSION['okrug_region'] = $item['session_start'];
                            } else {
                                $_SESSION['okrug_region'] = $item['session_start'];
                            }

                            $status_next_url = 1;
                        }
                    }
                    foreach ($content['cyti_region'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
                            if (!isset($_SESSION)) {
                                $_SESSION['cyti_region'] = $item['session_start'];
                            } else {
                                $_SESSION['cyti_region'] = $item['session_start'];
                            }
                            $status_next_url = 1;

                        }
                    }
                    foreach ($content['metro_region'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
                            if (!isset($_SESSION)) {
                                $_SESSION['metro_region'] = $item['session_start'];
                            } else {
                                $_SESSION['metro_region'] = $item['session_start'];
                            }
                            $status_next_url = 1;

                        }
                    }

                    foreach ($content['comment'] as $item) {
                        if (mb_strtolower($item['ucode']) == mb_strtolower($part_url)) {
                            $status_next_url = 1;

                        }
                    }

//                    echo $status_next_url.'<br>';


                    if ($status_next_url==0) {
                        return false;
                    }

                }
                $status_next_url = 0;
            }

        }

//        echo 'Домен: ' . $_SESSION['domen'] . '<br>';
//        echo 'Сервис: ' . $_SESSION['service'] . '<br>';
//        echo 'Регион: ' . $_SESSION['region'] . '<br>';
//        echo 'Округ региона: ' . $_SESSION['okrug_region'] . '<br>';
//        echo 'Город региона: ' . $_SESSION['cyti_region'] . '<br>';
//        echo 'Метро региона: ' . $_SESSION['metro_region'] . '<br>';

        return true;

    }

    public function run()
    {
        //получить строку запроса
        $uri = $this->getURI();
        $uri = mb_strtolower($uri);
//        echo $uri;
        $actionSubdomen = $this->getActionSubdomen();
//        echo $actionSubdomen;
//			проверить наличие запроса в файле routes.php
        if (isset($this->routes)) {
//            echo $uri;
            foreach ($this->routes as $uriPattern => $path) {
//                    echo $uriPattern.'<br>';
                if (preg_match("~" . mb_strtolower($uriPattern) . "~", $uri)) {
//                    echo $uri;
//                    echo  mb_strtolower($uriPattern);
//                        echo $path;
//                    echo $uriPattern.'<br>';


                    //получаем внутренний путь согласно правилам
                    $internalRout = preg_replace("~$uriPattern~", $path, $uri);
//                        echo $uri.'<br>';
//                        echo $path.'<br>';
                    //определить какой контроллер отвечает за запрос
                    $segments = explode('/', $path);
//						print_r($segments);


                    $controllerName = array_shift($segments) . 'Controller';
                    $controllerName = ucfirst($controllerName);

//                    if ($actionSubdomen == 1) {
//                        $actionName = 'action' . $actionSubdomen;
//                    } else {
//                        $actionName = 'actionError_404';
//                    }

						if ($actionSubdomen==1) {

                            $actionName = 'action'.ucfirst(array_shift($segments));
//                            $actionName = 'action'.$actionSubdomen;

                        } else {

                            $actionName = 'actionError_404';

                        }
//                    echo $actionName;

                    $parameters = $segments;

                    //Подключить файл класса-контроллера
                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
//                        print_r($_SESSION);
                    if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                    } else echo 'файл контроллера отсутствует';

//						print_r($_SESSION);

                    //создать объект, вызвать метод (т.е. action)
                    $controllerObject = new $controllerName;

                    if (method_exists($controllerObject, $actionName)) {
//                            echo $actionName.'<br>';
//                            echo 'метод в контроллере есть<br>';
                        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    } else {
//                            echo $actionName.'<br>';
//                            echo 'метод в контроллере нет есть<br>';
                        require_once(ROOT . '/views/error/error-404.php');
                        $result = null;

                    }

                    if ($result != null) {
                        break;
                    }
                }
            }
        }
    }
}

?>