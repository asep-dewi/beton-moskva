<?php


	
	class StartController
	{

		//*******************Главная страница*************************//
		public function actionIndex()
		{
            $content = include(ROOT.'/data/content.php');
            $comment = include(ROOT.'/data/comment.php');


            $this->updateData();

            $data = include(ROOT.'/data/data.php');

            if (isset($_SESSION['metro_region'])) {
                $this->cache($content['metro_region'][$_SESSION['metro_region']]['metro_region_template']);
                require_once(ROOT.$content['cache_path'].$content['metro_region'][$_SESSION['metro_region']]['metro_region_template']);
            } else if (isset($_SESSION['cyti_region'])) {
                $this->cache($content['cyti_region'][$_SESSION['cyti_region']]['region_cyti_template']);
                require_once(ROOT.$content['cache_path'].$content['cyti_region'][$_SESSION['cyti_region']]['region_cyti_template']);
            } else if (isset($_SESSION['okrug_region'])) {
                $this->cache($content['okrug_region'][$_SESSION['okrug_region']]['region_okrug_template']);
                require_once(ROOT.$content['cache_path'].$content['okrug_region'][$_SESSION['okrug_region']]['region_okrug_template']);
            } else if (isset($_SESSION['region'])) {
                $this->cache($content['region'][$_SESSION['region']]['region_template']);
                require_once(ROOT.$content['cache_path'].$content['region'][$_SESSION['region']]['region_template']);
            } else if (isset($_SESSION['domen'])) {

                $this->cache($content['domens'][$_SESSION['domen']]['main_template']);
                require_once(ROOT.$content['cache_path'].$content['domens'][$_SESSION['domen']]['main_template']);
            }



			return true;
		}
        //************************************************************//

        //*******************Главная страница*************************//
        public function actionService()
        {
            $content = include(ROOT.'/data/content.php');
            $comment = include(ROOT.'/data/comment.php');

            $this->updateData();

            $data = include(ROOT.'/data/data.php');

            if (isset($_SESSION['metro_region'])) {
//                echo 'metro';
                $this->cache($content['metro_region'][$_SESSION['metro_region']]['service_template']);
                require_once(ROOT.'/views/error/error-404.php');
            } else if (isset($_SESSION['cyti_region'])) {
//                echo 'cyti_region';
                $this->cache($content['cyti_region'][$_SESSION['cyti_region']]['service_template']);
                require_once(ROOT.'/views/error/error-404.php');
            } else if (isset($_SESSION['okrug_region'])) {
//                echo 'okrug_region';
                $this->cache($content['okrug_region'][$_SESSION['okrug_region']]['service_template']);
                require_once(ROOT.'/views/error/error-404.php');
            } else if (isset($_SESSION['region'])) {
//                echo 'region';
                $this->cache($content['region'][$_SESSION['region']]['service_template']);
                require_once(ROOT.'/views/error/error-404.php');
            } //else if (isset($_SESSION['domen'])) {
			  else if (isset($_SESSION['service'])) {
//                echo 'domen';
                //$this->cache($content['domens'][$_SESSION['domen']]['service_template']); 
				$this->cache($content['service'][$_SESSION['service']]['service_template']);
                //require_once(ROOT.$content['cache_path'].$content['domens'][$_SESSION['domen']]['service_template']);
				require_once(ROOT.$content['cache_path'].$content['service'][$_SESSION['service']]['service_template']);
           }
		   

		   
		   


            return true;
        }
        //************************************************************//

        //*****Эвакуация легковых автомобилей****//
        public function cache($file_path)
        {
            $content = include(ROOT.'/data/content.php');
            $comment = include(ROOT.'/data/comment.php');
            $data = include(ROOT.'/data/data.php');

            $cache_path = "/cache";


            $file_path_cache = ROOT.$cache_path.$file_path;



            $cache_time = 10; // Время жизни кэша в секундах


            if (file_exists($file_path_cache)) {

                if ((time()-(filemtime($file_path_cache)+$cache_time))>$cache_time) {
                    $original_file = file_get_contents(ROOT.$file_path);
                    $tmp_file = $original_file;
                    $tmp_file = str_replace(array("\r","\n"),"",$tmp_file);
                    $tmp_file = str_replace(array("  ","   "),"",$tmp_file);


                    file_put_contents($file_path_cache, $tmp_file);


                    file_put_contents(ROOT.$file_path, $original_file);

                }
            } else echo 'файл отсутствует';
        }
        //************************************************************//

		//*****Эвакуация легковых автомобилей****//
        public function actionError_404()
        {
            $content = include(ROOT.'/data/content.php');
            require_once(ROOT.'/views/error/error-404.php');
            return true;
        }
        //************************************************************//

        //*****Эвакуация легковых автомобилей****//
        public function actionError_502()
        {
            $content = include(ROOT.'/data/content.php');
            require_once(ROOT.'/views/error/error_502.php');
            return true;
        }
        //************************************************************//


        public function actionUpdate_comment()
        {
            $content = include(ROOT . '/data/comment.php');
            $filename = '/data/comment.php';

            $file = file_get_contents(ROOT.$filename);

            include(ROOT . '/data/temp.php');

            echo 'Редактировани мест комментариев выполнено';

            file_put_contents(ROOT.$filename, $file);
            return true;
        }



        public function actionFormation_comment()
        {
            echo 'Формрование коментариев из файла comment_for_generate.php выполено';

            $content = include(ROOT . '/data/content.php');
            $comment_for_generate = include(ROOT . '/data/comment_for_generate.php');

            $filename = '/data/comment.php';

            $repetition_array =[];//Массив повторений

            $i=0;
            $y = 1;

            for ($j = 1; $j <= count($comment_for_generate); $j++) {
                $status_repetition=0;
                while ($status_repetition==0) {
                    $status_repetition=1;
                    $rand = rand(1, count($comment_for_generate));

                    foreach ($repetition_array as $item_repetition) {

                        if ($item_repetition==$rand) {
                            $status_repetition = 0;
                        }
                    }
                }
                array_push($repetition_array, $j);
            }

            $text = "
            <?php
            return array(
            ";


            foreach ($content['domens'] as $item) {



                $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

//                $comment_item['text'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['text']);
//                $comment_item['dostoinstva'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['dostoinstva']);
//                $comment_item['nedostatki'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['nedostatki']);
//                $comment_item['kommentarij'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['kommentarij']);

//                echo '<br>'.$comment_item['dostoinstva'];

                $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/null',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                if ($i==(count($comment_for_generate)-1)) {
                    $i=0;
                } else {
                    $i++;
                }
                $y++;
                $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

//                $comment_item['text'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['text']);
//                $comment_item['dostoinstva'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['dostoinstva']);
//                $comment_item['nedostatki'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['nedostatki']);
//                $comment_item['kommentarij'] = str_replace("<gorod>", $item['gorod_predl_p'], $comment_item['kommentarij']);

                $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/null',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                if ($i==(count($comment_for_generate)-1)) {
                    $i=0;
                } else {
                    $i++;
                }
                $y++;

                foreach ($content['service'] as $item_service) {

                    $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];
                    $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_service['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                    if ($i==(count($comment_for_generate)-1)) {
                        $i=0;
                    } else {
                        $i++;
                    }
                    $y++;
                    $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

                    $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_service['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                    if ($i==(count($comment_for_generate)-1)) {
                        $i=0;
                    } else {
                        $i++;
                    }
                    $y++;
                }

                if (isset($item['main_menu_region'])) {
                    foreach ($content['region'] as $item_region) {

                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];
                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                    }

                    foreach ($content['okrug_region'] as $item_okrug_region) {

                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];
                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_okrug_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_okrug_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                    }

                    foreach ($content['cyti_region'] as $item_cyti_region) {

                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];
                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_cyti_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_cyti_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                    }

                    foreach ($content['metro_region'] as $item_metro_region) {

                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];
                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_metro_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                        $comment_item = $comment_for_generate['comment'.$repetition_array[$i]];

                        $text .= "
                        'comment".$y."'=>[
                                'name'=>'".$comment_item['name']."',
                                'page'=>'".$item['session_start']."/".$item_metro_region['session_start']."',
                                'text'=>'".$comment_item['text']."',
                                'stars'=>'".$comment_item['stars']."',
                                'dostoinstva'=>'".$comment_item['dostoinstva']."',
                                'nedostatki'=>'".$comment_item['nedostatki']."',
                                'kommentarij'=>'".$comment_item['kommentarij']."',
                                'photo_user'=>'".$comment_item['photo_user']."',
                                'photo_scan'=>'".$comment_item['photo_scan']."',
                                'current_city'=>'".$comment_item['current_city']."',
                            ],

                    ";
                        if ($i==(count($comment_for_generate)-1)) {
                            $i=0;
                        } else {
                            $i++;
                        }
                        $y++;
                    }
                }



            }
            $text .= "
);
?>
            ";

            file_put_contents(ROOT.$filename, $text);
            return true;
        }



        public function actionFormation_action_comment()
        {

            echo 'Формрование действий для редактирования мест комментариев выполнено';

            $content = include(ROOT . '/data/content.php');
            $comment_for_generate = include(ROOT . '/data/comment_for_generate.php');

            $filename = '/data/temp.php';

            $file = file_get_contents(ROOT.$filename);

            $i = 1;

            $text = '<?php';




            foreach ($content['domens'] as $item) {

                $text .= '
                        $file = str_replace("\''.$item['session_start'].'/null\'", "\'tmp_'.$i.'\'", $file);
                    ';
                $i++;


                foreach ($content['service'] as $item_service) {
                    $text .= '
                        $file = str_replace("\''.$item['session_start'].'/'.$item_service['session_start'].'\'", "\'tmp_'.$i.'\'", $file);
                    ';
                    $i++;
                }

                if (isset($item['main_menu_region'])) {
                    foreach ($content['region'] as $item_region) {
                        $text .= '
                        $file = str_replace("\''.$item['session_start'].'/'.$item_region['session_start'].'\'", "\'tmp_'.$i.'\'", $file);
                    ';
                        $i++;
                    }

                    foreach ($content['okrug_region'] as $item_okrug_region) {
                        $text .= '
                        $file = str_replace("\''.$item['session_start'].'/'.$item_okrug_region['session_start'].'\'", "\'tmp_'.$i.'\'", $file);
                    ';
                        $i++;
                    }

                    foreach ($content['cyti_region'] as $item_cyti_region) {
                        $text .= '
                        $file = str_replace("\''.$item['session_start'].'/'.$item_cyti_region['session_start'].'\'", "\'tmp_'.$i.'\'", $file);
                    ';
                        $i++;
                    }

                    foreach ($content['metro_region'] as $item_metro_region) {
                        $text .= '
                        $file = str_replace("\''.$item['session_start'].'/'.$item_metro_region['session_start'].'\'", "\'tmp_'.$i.'\'", $file);
                    ';
                        $i++;
                    }
                }
            }

            $max_i = $i-1;
            $i=1;
            foreach ($content['domens'] as $item) {

                $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/null\'", $file);
                    ';
                $i++;
                if ($max_i==$i) $i=0;

                foreach ($content['service'] as $item_service) {
                    $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/'.$item_service['session_start'].'\'", $file);
                    ';
                    $i++;
                    if ($max_i==$i) $i=0;
                }
                if (isset($item['main_menu_region'])) {
                    foreach ($content['region'] as $item_region) {
                        $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/'.$item_region['session_start'].'\'", $file);
                    ';
                        $i++;
                        if ($max_i==$i) $i=0;
                    }

                    foreach ($content['okrug_region'] as $item_okrug_region) {
                        $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/'.$item_okrug_region['session_start'].'\'", $file);
                    ';
                        $i++;
                        if ($max_i==$i) $i=0;
                    }

                    foreach ($content['cyti_region'] as $item_cyti_region) {
                        $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/'.$item_cyti_region['session_start'].'\'", $file);
                    ';
                        $i++;
                        if ($max_i==$i) $i=0;
                    }

                    foreach ($content['metro_region'] as $item_metro_region) {
                        $text .= '
                        $file = str_replace("\'tmp_'.($i+1).'\'", "\''.$item['session_start'].'/'.$item_metro_region['session_start'].'\'", $file);
                    ';
                        $i++;
                        if ($max_i==$i) $i=0;
                    }
                }


            }

            $text .= "

                ?>
            ";

            file_put_contents(ROOT.$filename, $text);
            return true;
        }





//        //*****Эвакуация легковых автомобилей****//
//        public function actionUpdate_comment()
//        {
//            $content = include(ROOT . '/data/comment.php');
//            $filename = '/data/comment.php';
//
//            $file = file_get_contents(ROOT.$filename);
//
//            $file = str_replace("main", "tmp_1", $file);
//            $file = str_replace("service", "tmp_2", $file);
//            $file = str_replace("region", "tmp_3", $file);
//            $file = str_replace("okrug", "tmp_4", $file);
//            $file = str_replace("metro", "tmp_5", $file);
//            $file = str_replace("cyti", "tmp_6", $file);
//            $file = str_replace("subdomen", "tmp_7", $file);
//
//            $file = str_replace("tmp_1", "service", $file);
//            $file = str_replace("tmp_2", "region", $file);
//            $file = str_replace("tmp_3", "okrug", $file);
//            $file = str_replace("tmp_4", "metro", $file);
//            $file = str_replace("tmp_5", "cyti", $file);
//            $file = str_replace("tmp_6", "subdomen", $file);
//            $file = str_replace("tmp_7", "main", $file);
//
//            file_put_contents(ROOT.$filename, $file);
//            return true;
//        }
//        //************************************************************//


        public function updateData ()
        {

            $data = include(ROOT . '/data/data.php');

            if (time() >= $data['time_last_evacuator_update']) {
                $filename = '/data/data.php';
                $file = file_get_contents(ROOT.$filename);
                $file = str_replace("'time_last_evacuator_update'=>'" . $data['time_last_evacuator_update'] . "'", "'time_last_evacuator_update'=>'" . (time() + $data['period_update_time_evacuator']) . "'", $file);

                if ($data['number_evacuator'] > $data['min_number_evacuator']) {
                    $file = str_replace("'number_evacuator'=>'" . $data['number_evacuator'] . "'", "'number_evacuator'=>'" . ($data['number_evacuator'] - 1) . "'", $file);
                } else {
                    $file = str_replace("'number_evacuator'=>'" . $data['number_evacuator'] . "'", "'number_evacuator'=>'" . $data['max_number_evacuator'] . "'", $file);
                }
                file_put_contents('./data/data.php', $file);
            }

            if (time() >= $data['time_last_podacha_update']) {
                $filename = '/data/data.php';
                $file = file_get_contents(ROOT.$filename);
                $file = str_replace("'time_last_podacha_update'=>'" . $data['time_last_podacha_update'] . "'", "'time_last_podacha_update'=>'" . (time() + $data['period_update_time_podacha']) . "'", $file);

                if ($data['number_podacha'] > $data['min_number_podacha']) {
                    $file = str_replace("'number_podacha'=>'" . $data['number_podacha'] . "'", "'number_podacha'=>'" . ($data['number_podacha'] - 1) . "'", $file);
                } else {
                    $file = str_replace("'number_podacha'=>'" . $data['number_podacha'] . "'", "'number_podacha'=>'" . $data['max_number_podacha'] . "'", $file);
                }
                file_put_contents(ROOT.$filename, $file);
            }

        }


	}
?>

