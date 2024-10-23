<?php
return array(
//    'main_domen'=>'evacuator',//изначельный домен сайта
//    'main_domen'=>'potopnf9.beget.tech',//изначельный домен сайта
//    'main_domen' => 'xn--b1abgaidhp5adhje1b.xn--80adxhks',//изначельный домен сайта
    'main_domen' => 'xn--90aiydt.xn--80adxhks',//изначельный домен сайта
    'domens' => [
        'evacuator' => [
            'punycode' => '',
            'robots' => 'robots.txt',
            'session_start' => 'evacuator',
            'current_city' => 'Москва',
            'main_template' => '/views/main_page/main.php',
            'service_template' => '/views/service_page/main_service.php',
            'gorod_predl_p' => 'Москве',
            'gorod_dat_p' => 'Москве',
            'gorod_im_p' => 'Москва',
            'gorod_short' => 'Мск',
            'title_main_menu_region' => 'Округа',
            'main_menu_region' => [
                'part1' => [
                    'sao' => [ //admiraltejskij
                        'text' => 'САО',//Адмиралтейский
                        'link' => 'сао'//адмиралтейский
                    ],
                    'svao' => [ //vasileostrovskij
                        'text' => 'СВАО', //Василеостровский
                        'link' => 'свао' //василеостровский
                    ],
                    'vao' => [ //vyborgskij
                        'text' => 'ВАО',//Выборгский
                        'link' => 'вао'//выборгский
                    ],
                    'uvao' => [ //kalininskij
                        'text' => 'ЮВАО', //Калининский
                        'link' => 'ювао' //калининский
                    ],
                    'uao' => [ //kirovskij
                        'text' => 'ЮАО', //Кировский
                        'link' => 'юао' //кировский
                    ],
                  //'kolpinskij'=> [ //
                  //'text'=>'Колпинский', //
                  //'link'=>'колпинский' //
                  //],
                  //'krasnogvardejskij'=> [ //
                  //'text'=>'Красногвардейский', //
                  //'link'=>'красногвардейский' //
                  //],
                  //'krasnoselskij'=> [ //
                  //'text'=>'Красносельский', //
                  //'link'=>'красносельский' //
                  //],
                  //'kronshtadtskij'=> [ //
                  //'text'=>'Кронштадтский', //
                  //'link'=>'кронштадтский' //
                  //],
                ],
                'part2' => [
                    'uzao' => [//kurortnyj
                        'text' => 'ЮЗАО',//Курортный
                        'link' => 'юзао'//курортный
                    ],
                    'zao' => [ //moskovskij
                        'text' => 'ЗАО', //Московский
                        'link' => 'зао' //московский
                    ],
                    'szao' => [ //nevskij
                        'text' => 'СЗАО', //Невский
                        'link' => 'сзао' //невский
                    ],
                    'tsao' => [ //petrogradskij
                        'text' => 'ЦАО', //Петроградский
                        'link' => 'цао' //петроградский
                    ],
                    'nao' => [ //petrodvorcovyj
                        'text' => 'НАО', //Петродворцовый
                        'link' => 'нао' //петродворцовый
                    ],
                  //'primorskij'=> [ //
                  //    'text'=>'Приморский', //
                  //    'link'=>'приморский' //
                  //],
                  //'pushkinskij'=> [ //
                  //    'text'=>'Пушкинский', //
                  //    'link'=>'пушкинский' //
                  //],
                  //'frunzenskij'=> [ //
                  //    'text'=>'Фрунзенский', //
                  //    'link'=>'фрунзенский' //
                  //],
                  //'centralnyj'=> [ //
                  //    'text'=>'Центральный', //
                  //    'link'=>'центральный' //
                  //],
                ],
            ],
        ],


        'aprelevka' => [ //beloostrov
            'punycode' => 'xn--80aafla5ae4aj', //xn--90aciypaapik
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'aprelevka', //beloostrov
            'current_city' => 'Апрелевка', //Белоостров
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Апрелевке', //Белоострове
            'gorod_dat_p' => 'Апрелевке', //
            'gorod_im_p' => 'Апрелевка', //
            'okrug_region_distance' => '58',
            'okrug_region_delivery' => '750',

        ],

        'balashiha' => [ //volhov
            'punycode' => 'xn--80aaab1bq6ewa', //xn--b1aa0alb5b
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'balashiha', //volhov
            'current_city' => 'Балашиха', //Волхов
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Балашихе', //Волховe
            'gorod_dat_p' => 'Балашихе', // Волхову
            'gorod_im_p' => 'Балашиха', // Волхов
            'okrug_region_distance' => '60',
            'okrug_region_delivery' => '750',
        ],

        'vidnoe' => [ //vsevolozhsk
            'punycode' => 'xn--b1aedk0ag', //xn--b1aaifueubwg
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'vidnoe', //vsevolozhsk
            'current_city' => 'Видное', //Всеволожск
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Видном', //Всеволожске
            'gorod_dat_p' => 'Видному', //Всеволожску
            'gorod_im_p' => 'Видное', //Всеволожск
            'okrug_region_distance' => '51',
            'okrug_region_delivery' => '750',
        ],

        'dedovsk' => [ //vyborg
            'punycode' => 'xn--b1adad1aww', //xn--90abe7bk7d
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'dedovsk', //vyborg
            'current_city' => 'Дедовск', //Выборг
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Дедовске', //Выборге
            'gorod_dat_p' => 'Дедовку', //Выборге
            'gorod_im_p' => 'Дедовск', //Выборг
            'okrug_region_distance' => '25',
            'okrug_region_delivery' => '750',
        ],

        'dzerzhinskij' => [ //gatchina
            'punycode' => 'xn--d1acdchahg0a1ao', //xn--80aahvz2a9a
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'dzerzhinskij', //gatchina
            'current_city' => 'Дзержинский', //Гатчина
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Дзержинском', //Гатчине
            'gorod_dat_p' => 'Дзержинскому', //Гатчине
            'gorod_im_p' => 'Дзержинский', //Гатчина
            'okrug_region_distance' => '64',
            'okrug_region_delivery' => '750',
        ],

        'dolgoprudnyi' => [ //aleksandrovskaya //Егор
            'punycode' => 'xn--c1abbuhodcjk7a6g', //xn--80aaahje9addxmxjg6s
            'robots' => 'robots_subdomen.txt',
          //'img_bg'=>'/img/girl.jpg',
            'peremennay_subdomena' => ' переменная субдомена',
            'session_start' => 'dolgoprudnyi',//aleksandrovskaya
            'current_city' => 'Долгопрудный',//Александровская
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Долгопрудном',//Александровске
            'gorod_dat_p' => 'Долгопрудному',//Александровскому
            'gorod_im_p' => 'Долгопрудный',//Александровск
            'gorod_rod_p' => 'Долгопрудного', //Александровск
            'okrug_region_distance' => '21',
            'okrug_region_delivery' => '700',
        ],

        'domodedovo' => [ //zelenogorsk
            'punycode' => 'xn--b1adaae4bnbdb', //xn--c1adagsdpibul
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'domodedovo', //zelenogorsk
            'current_city' => 'Домодедово', //Зеленогорск
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Домодедово', //Зеленогорске
            'gorod_dat_p' => 'Домодедово', //Зеленогорску
            'gorod_im_p' => 'Домодедово', //
            'okrug_region_distance' => '64',
            'okrug_region_delivery' => '750',
        ],

        'zhukovskij' => [ //kingisepp
            'punycode' => 'xn--b1ahhecb0azo', //xn--c1aehbhtrap
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'zhukovskij', //kingisepp
            'current_city' => 'Жуковский', //Кингисепп
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Жуковском', //Кингисеппе
            'gorod_dat_p' => 'Жуковскому', //Кингисеппу
            'gorod_im_p' => 'Жуковский', //Кингисепп
            'okrug_region_distance' => '60',
            'okrug_region_delivery' => '750',
        ],

        'zelenograd' => [ //kirishi
            'punycode' => 'xn--80afebak3arjv', //xn--h1aaaf5a1c
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'zelenograd', //kirishi
            'current_city' => 'Зеленоград', //Кириши
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Зеленограде', //Кирише
            'gorod_dat_p' => 'Заленограду', //Кириши
            'gorod_im_p' => 'Зеленоград', //Кириши
            'okrug_region_distance' => '34',
            'okrug_region_delivery' => '750',
        ],

        'korolev' => [ //kirovsk
            'punycode' => 'xn--b1afoeoan', //xn--b1alfcslj
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'korolev', //kirovsk
            'current_city' => 'Королев', //Кировск
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Королеве', //Кировске
            'gorod_dat_p' => 'Королеву', //Кировску
            'gorod_im_p' => 'Королев', //Кировск
            'okrug_region_distance' => '41',
            'okrug_region_delivery' => '750',
        ],

        'kotelniki' => [ //kolpino
            'punycode' => 'xn--e1agafceof0b4g', //xn--h1addjcde
            'robots' => 'robots_subdomen.txt', //
            'session_start' => 'kotelniki', //kolpino
            'current_city' => 'Котельники', //Колпино
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Котельниках', //Колпине
            'gorod_dat_p' => 'Котельникам', //Колпино
            'gorod_im_p' => 'Котельники', //Колпино
            'okrug_region_distance' => '43',
            'okrug_region_delivery' => '750',
        ],

        'krasnogorsk' => [ //komarovo
            'punycode' => 'xn--80agtcngblfff', //xn--80aewijcbn
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'krasnogorsk', //komarovo
            'current_city' => 'Красногорск', //Комарово
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Красногорске', //Комарове
            'gorod_dat_p' => 'Красногорску', //Комарову
            'gorod_im_p' => 'Красногорск', //Комарово
            'okrug_region_distance' => '10',
            'okrug_region_delivery' => '600',
        ],

        'myakinino' => [ //kommunar
            'punycode' => 'xn--h1aaehhbh4k', //xn--80atgafdsv
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'myakinino', //kommunar
            'current_city' => 'Мякинино', //Коммунар
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Мякинино', //Коммунаре
            'gorod_dat_p' => 'Мякинино', //Коммунару
            'gorod_im_p' => 'Мякинино', //Коммунар
            'okrug_region_distance' => '10',
            'okrug_region_delivery' => '600',
        ],

        'lobnya' => [ //krasnoe-selo
            'punycode' => 'xn--90athc1g', //xn----7sbpbvkkiemme
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'lobnya', //krasnoe-selo
            'current_city' => 'Лобня', //Красное Село
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Лобне', //Красное Село
            'gorod_dat_p' => 'Лобне', //Красному Селу
            'gorod_im_p' => 'Лобня', //Красное Село
            'okrug_region_distance' => '33',
            'okrug_region_delivery' => '750',
        ],

        'lytkarino' => [ //kronshtadt
            'punycode' => 'xn--80aqedngln4f', //xn--80aiqmelqc4c
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'lytkarino', //kronshtadt
            'current_city' => 'Лыткарино', //Кронштадт
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Лыткарино', //Кронштадте
            'gorod_dat_p' => 'Лыткарино', //Кронштадту
            'gorod_im_p' => 'Лыткарино', //Кронштадт
            'okrug_region_distance' => '52',
            'okrug_region_delivery' => '750',
        ],

        'lyubertsy' => [ //lisij-nos
            'punycode' => 'xn--90aiqw4a4aq', //xn----otbaehqhtf
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'lyubertsy', //lisij-nos
            'current_city' => 'Люберцы', //Лисий Нос
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Люберцах', //Лисий Нос
            'gorod_dat_p' => 'Люберцам', //Лисьему Носу
            'gorod_im_p' => 'Люберцы', //Лисий Нос
            'okrug_region_distance' => '58',
            'okrug_region_delivery' => '750',
        ],

        'mytishchi' => [ //lomonosov
            'punycode' => 'xn--h1aaky0bj', //xn--b1ardedbba0a
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'mytishchi', //lomonosov
            'current_city' => 'Мытищи', //Ломоносов
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Мытищах', //Ломоносове
            'gorod_dat_p' => 'Мытищам', //Ломоносову
            'gorod_im_p' => 'Мытищи', //Ломоносов
            'okrug_region_distance' => '37',
            'okrug_region_delivery' => '750',
        ],

        'nahabino' => [ //luga
            'punycode' => 'xn--80aad2aveh5c', //xn--80afx6a
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'nahabino', //luga
            'current_city' => 'Нахабино', //Луга
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Нахабино', //Лугах
            'gorod_dat_p' => 'Нахабино', //Лугам
            'gorod_im_p' => 'Нахабино', //Луга
            'okrug_region_distance' => '21',
            'okrug_region_delivery' => '700',
        ],

        'odintsovo' => [ //metallostroj
            'punycode' => 'xn--b1admucdb5d',//
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'odintsovo', //metallostroj
            'current_city' => 'Одинцово',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Одинцово',//
            'gorod_dat_p' => 'Одинцово',//
            'gorod_im_p' => 'Одинцово', //
            'okrug_region_distance' => '72',
            'okrug_region_delivery' => '750',
        ],

        'podolsk' => [ //molodyozhnoe
            'punycode' => 'xn--d1amckbds1g',
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'podolsk',
            'current_city' => 'Подольск',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Подольске',
            'gorod_dat_p' => 'Подольску',
            'gorod_im_p' => 'Подольск',
            'okrug_region_distance' => '57',
            'okrug_region_delivery' => '750',
        ],

        'ramenskoe' => [ //otradnoe
            'punycode' => 'xn--80akatihikn',
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'ramenskoe',
            'current_city' => 'Раменское',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Раменском',
            'gorod_dat_p' => 'Раменскому',
            'gorod_im_p' => 'Раменское',
            'okrug_region_distance' => '70',
            'okrug_region_delivery' => '750',
        ],

        'reutov' => [ //pavlovsk
            'punycode' => 'xn--b1af1aglf',
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'reutov',
            'current_city' => 'Реутов',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Реутове',
            'gorod_dat_p' => 'Реутову',
            'gorod_im_p' => 'Реутов',
            'okrug_region_distance' => '48',
            'okrug_region_delivery' => '750',
        ],

        'troitsk' => [ //pesochnyj
            'punycode' => 'xn--h1aekhj1a',
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'troitsk',
            'current_city' => 'Троицк',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Троицке',
            'gorod_dat_p' => 'Троицку',
            'gorod_im_p' => 'Троицк',
            'okrug_region_distance' => '52',
            'okrug_region_delivery' => '750',
        ],

        'himki' => [ //petergof
            'punycode' => 'xn--h1aafh7b',
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'himki',
            'current_city' => 'Химки',
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Химках',
            'gorod_dat_p' => 'Химкам',
            'gorod_im_p' => 'Химки',
            'okrug_region_distance' => '15',
            'okrug_region_delivery' => '600',
        ],

        'shchelkovo' => [//petro-slavyanka
            'punycode' => 'xn--b1afpdqb5e', //xn----8sbahm7aeseimoj3q
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'shchelkovo', //petro-slavyanka
            'current_city' => 'Щелково', //Петро-Славянка
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php',
            'gorod_predl_p' => 'Щелково',
            'gorod_dat_p' => 'Щелково',
            'gorod_im_p' => 'Щелково',
            'okrug_region_distance' => '62',
            'okrug_region_delivery' => '750',
        ],

        'shcherbinka' => [ //pontonnyj
            'punycode' => 'xn--80ablnkrs4e', //xn--i1ahaacbe0a8f
            'robots' => 'robots_subdomen.txt',
            'session_start' => 'shcherbinka', //pontonnyj
            'current_city' => 'Щербинка',//Понтонном
            'main_template' => '/views/main_page/main_subdomen.php',
            'service_template' => '/views/service_page/main_subdomen_service.php', //'service_template'=>'/views/service_page/mobilnyi-shinomontazh.php'
            'gorod_predl_p' => 'Щербинке', //Понтонный
            'gorod_dat_p' => 'Щербинке',//Понтонному
            'gorod_im_p' => 'Щербинка', //Понтонный
            'okrug_region_distance' => '50',
            'okrug_region_delivery' => '750',
        ],

    ],


    'service' => [

        'contacts' => [ //http://xn--90aiydt.xn--80adxhks/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/
            'ucode' => '%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b',
            'session_start' => 'contacts',
            'service_1' => 'Контакты',
            'service_template' => '/views/service_page/contacts-template.php',
        ],
        'about-company' => [ //http://xn--90aiydt.xn--80adxhks/%D0%BE-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8/
            'ucode' => '%D0%BE-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8',
            'session_start' => 'about-company',
            'service_1' => 'О компании',
            'service_11' => 'М100',
            'service_template' => '/views/service_page/about-us-template.php',
        ],
        'price' => [ //http://xn--90aiydt.xn--80adxhks/%D1%86%D0%B5%D0%BD%D1%8B/
            'ucode' => '%D1%86%D0%B5%D0%BD%D1%8B',
            'session_start' => 'price',
            'service_1' => 'Цены',
            'service_11' => 'М100',
            'service_template' => '/views/service_page/price-template.php',
        ],

        'b7-5-m100' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B27-5-%D0%BC100/
            'ucode' => '%D0%B27,5-%D0%BC100',
//            'ucode' => '%D0%B27-5-%D0%BC100',
            'session_start' => 'b7-5-m100',
            'service_1' => '',
            'service_11' => 'В7,5 М100',
            'service_12' => 'Бетон марки М100 класса В7,5',
            'service_template' => '/views/service_page/beton-b7-5-m100-template.php',
        ],
        'b15-m200' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B215-%D0%BC200/
            'ucode' => '%D0%B215-%D0%BC200',
            'session_start' => 'b15-m200',
            'service_1' => '',
            'service_11' => 'В15 М200',
            'service_12' => 'Бетон марки М200 класса В15',
            'service_template' => '/views/service_page/beton-b15-m200-template.php',
        ],
        'b12-5-m150' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B212-5-%D0%BC150/
            'ucode' => '%D0%B212,5-%D0%BC150',
            'session_start' => 'b12-5-m150',
            'service_1' => '',
            'service_11' => 'В12,5 М150',
            'service_12' => 'Бетон марки М150 класса В12,5',
            'service_template' => '/views/service_page/beton-b12-5-m150-template.php',
        ],
        'b20-m250' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B220-%D0%BC250/
            'ucode' => '%D0%B220-%D0%BC250',
            'session_start' => 'b20-m250',
            'service_1' => '',
            'service_11' => 'В20 М250',
            'service_12' => 'Бетон марки М250 класса В20',
            'service_template' => '/views/service_page/beton-b20-m250-template.php',
        ],
        'b22-5-m300' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B220-%D0%BC250/
            'ucode' => '%D0%B222,5-%D0%BC300',
            'session_start' => 'b22-5-m300',
            'service_1' => '',
            'service_11' => 'В22,5 М300',
            'service_12' => 'Бетон марки М300 класса В22,5',
            'service_template' => '/views/service_page/beton-b22-5-m300-template.php',
        ],
        'b25-m350' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B225-%D0%BC350/
            'ucode' => '%D0%B225-%D0%BC350',
            'session_start' => 'b25-m350',
            'service_1' => '',
            'service_11' => 'В22,5 М300',
            'service_12' => 'Бетон марки М350 класса В25',
            'service_template' => '/views/service_page/beton-b25-m350-template.php',
        ],
        'b30-m400' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B230-%D0%BC400/
            'ucode' => '%D0%B230-%D0%BC400',
            'session_start' => 'b30-m400',
            'service_1' => '',
            'service_11' => 'В30 М400',
            'service_12' => 'Бетон марки М400 класса В30',
            'service_template' => '/views/service_page/beton-b30-m400-template.php',
        ],

        'delivery-template' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0/
            'ucode' => '%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0',
            'session_start' => 'delivery-template',
            'service_1' => 'Доставка',
            'service_template' => '/views/service_page/delivery-template.php',
        ],
        'production-template' => [ //http://xn--90aiydt.xn--80adxhks/%d0%bf%d1%80%d0%be%d0%b8%d0%b7%d0%b2%d0%be%d0%b4%d1%81%d1%82%d0%b2%d0%be/
            'ucode' => '%d0%bf%d1%80%d0%be%d0%b8%d0%b7%d0%b2%d0%be%d0%b4%d1%81%d1%82%d0%b2%d0%be',
            'session_start' => 'production-template',
            'service_1' => 'Производство',
            'service_template' => '/views/service_page/production-template.php',
        ],
        'discounts-template' => [ //http://xn--90aiydt.xn--80adxhks/%D1%81%D0%BA%D0%B8%D0%B4%D0%BA%D0%B8/
            'ucode' => '%D1%81%D0%BA%D0%B8%D0%B4%D0%BA%D0%B8',
            'session_start' => 'discounts-template',
            'service_1' => 'Скидки',
            'service_template' => '/views/service_page/discounts-template.php',
        ],
        'calc-template' => [ //http://xn--90aiydt.xn--80adxhks/%D0%BA%D0%B0%D0%BB%D1%8C%D0%BA%D1%83%D0%BB%D1%8F%D1%82%D0%BE%D1%80/
            'ucode' => '%D0%BA%D0%B0%D0%BB%D1%8C%D0%BA%D1%83%D0%BB%D1%8F%D1%82%D0%BE%D1%80',
            'session_start' => 'calc-template',
            'service_1' => 'Калькулятор',
            'service_template' => '/views/service_page/calc-template.php',
        ],
        'where-buy' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B3%D0%B4%D0%B5-%D0%BA%D1%83%D0%BF%D0%B8%D1%82%D1%8C/
            'ucode' => '%D0%B3%D0%B4%D0%B5-%D0%BA%D1%83%D0%BF%D0%B8%D1%82%D1%8C',
            'session_start' => 'where-buy',
            'service_1' => 'Где купить',
            'service_template' => '/views/service_page/where-buy-template.php',
        ],
        'payment' => [ //http://xn--90aiydt.xn--80adxhks/%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B0/
            'ucode' => '%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B0',
            'session_start' => 'payment',
            'service_1' => 'Оплата',
            'service_template' => '/views/service_page/payment-template.php',
        ],
        'guarantee' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B3%D0%B0%D1%80%D0%B0%D0%BD%D1%82%D0%B8%D0%B8/
            'ucode' => '%D0%B3%D0%B0%D1%80%D0%B0%D0%BD%D1%82%D0%B8%D0%B8',
            'session_start' => 'guarantee',
            'service_1' => 'Гарантии',
            'service_template' => '/views/service_page/guarantee-template.php',
        ],

        'normal-beton' => [ //http://xn--90aiydt.xn--80adxhks/%D0%BE%D0%B1%D1%8B%D1%87%D0%BD%D1%8B%D0%B9/
            'ucode' => '%D0%BE%D0%B1%D1%8B%D1%87%D0%BD%D1%8B%D0%B9',
            'session_start' => 'normal-beton',
            'service_1' => 'Общестроительный',
            'service_2' => 'общестроительный',
            'service_template' => '/views/service_page/norm-beton-template.php',
        ],
        'special-beton' => [ //http://xn--90aiydt.xn--80adxhks/%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9/
            'ucode' => '%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9',
            'session_start' => 'special-beton',
            'service_1' => 'Специальный',
            'service_2' => 'специальный',
            'service_template' => '/views/service_page/special-beton-template.php',
        ],
        'product-beton' => [ //http://xn--90aiydt.xn--80adxhks/%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BD%D1%8B%D0%B9/
            'ucode' => '%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BD%D1%8B%D0%B9',
            'session_start' => 'product-beton',
            'service_1' => 'Товарный',
            'service_2' => 'товарный',
            'service_template' => '/views/service_page/product-beton-template.php',
        ],
        'skinny-beton' => [ //http://xn--90aiydt.xn--80adxhks/%D1%82%D0%BE%D1%89%D0%B8%D0%B9/
            'ucode' => '%D1%82%D0%BE%D1%89%D0%B8%D0%B9',
            'session_start' => 'skinny-beton',
            'service_1' => 'Тощий',
            'service_2' => 'тощий',
            'service_template' => '/views/service_page/skinny-beton-template.php',
        ],
        'fatty-beton' => [ //http://xn--90aiydt.xn--80adxhks/%D0%B6%D0%B8%D1%80%D0%BD%D1%8B%D0%B9/
            'ucode' => '%D0%B6%D0%B8%D1%80%D0%BD%D1%8B%D0%B9',
            'session_start' => 'fatty-beton',
            'service_1' => 'Жирный',
            'service_2' => 'жирный',
            'service_template' => '/views/service_page/fatty-beton-template.php',
        ],
        'vary-heavy' => [
            'ucode' => '%D0%BE%D1%81%D0%BE%D0%B1%D0%BE-%D1%82%D1%8F%D0%B6%D0%B5%D0%BB%D1%8B%D0%B9',
            'session_start' => 'vary-heavy',
            'service_1' => 'Особо тяжелый',
            'service_2' => 'особо тяжелый',
            'service_template' => '/views/service_page/vary-heavy-beton-template.php',
        ],
        'heavy' => [
            'ucode' => '%D1%82%D1%8F%D0%B6%D0%B5%D0%BB%D1%8B%D0%B9',
            'session_start' => 'heavy',
            'service_1' => 'Тяжелый',
            'service_2' => 'тяжелый',
            'service_template' => '/views/service_page/heavy-beton-template.php',
        ],
        'light' => [
            'ucode' => '%D0%BB%D0%B5%D0%B3%D0%BA%D0%B8%D0%B9',
            'session_start' => 'light',
            'service_1' => 'Лёгкий',
            'service_2' => 'лёгкий',
            'service_template' => '/views/service_page/light-beton-template.php',
        ],
        'very-light' => [
            'ucode' => '%D0%BE%D1%81%D0%BE%D0%B1%D0%BE-%D0%BB%D0%B5%D0%B3%D0%BA%D0%B8%D0%B9',
            'session_start' => 'very-light',
            'service_1' => 'Особо лёгкий',
            'service_2' => 'особо лёгкий',
            'service_template' => '/views/service_page/very-light-beton-template.php',
        ],
        'features-at-work' => [
            'ucode' => '%d0%be%d1%81%d0%be%d0%b1%d0%b5%d0%bd%d0%bd%d0%be%d1%81%d1%82%d0%b8-%d0%bf%d1%80%d0%b8-%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%b5-%d1%81-%d0%b1%d0%b5%d1%82%d0%be%d0%bd%d0%be%d0%bc',
            'session_start' => 'features-at-work',
            'service_1' => 'Особенности при работе с бетоном',
            'service_template' => '/views/service_page/features-at-work-template.php',
        ],
      //


    ],


    'region' => [
        'sao' => [ //admiraltejskij //Егор
            'ucode' => '%D1%81%D0%B0%D0%BE', //%D0%B0%D0%B4%D0%BC%D0%B8%D1%80%D0%B0%D0%BB%D1%82%D0%B5%D0%B9%D1%81%D0%BA%D0%B8%D0%B9
            'session_start' => 'sao', //admiraltejskij
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'САО', //Адмиралтейском
            'region_dat_p' => 'Северному АО', //Адмиралтейску
            'region_im_p' => 'САО', //Адмиралтейский
            'title_okrug_menu_place' => 'Районы', //Округа
            'okrug_menu_place' => [
                'beskudnikovo' => [  //kolomna
                    'text' => 'Бескудниково',//Коломна
                    'link' => 'бескудниково'//коломна
                ],
                'golovino' => [
                    'text' => 'Головино',
                    'link' => 'головино'
                ],
                'degunino' => [
                    'text' => 'Дегунино',
                    'link' => 'дегунино'
                ],
                'koptevo' => [
                    'text' => 'Коптево',
                    'link' => 'коптево'
                ],
                'levoberezhnyi' => [
                    'text' => 'Левобережный',
                    'link' => 'левобережный'
                ],
                'hovrino' => [
                    'text' => 'Ховрино',
                    'link' => 'ховрино'
                ],
                'horoshevskij' => [
                    'text' => 'Хорошевский',
                    'link' => 'хорошевский'
                ],
            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'aeroport' => [//pushkinskaya //Егор
                    'text' => 'Аэропорт',//Пушкинская
                    'link' => 'аэропорт'//пушкинская
                ],
                'baltijskaya' => [
                    'text' => 'Балтийская',
                    'link' => 'балтийская'
                ],
                'begovaya' => [
                    'text' => 'Беговая',
                    'link' => 'беговая'
                ],
                'verhnie-lihobory' => [
                    'text' => 'Верхние лихоборы',
                    'link' => 'верхние-лихоборы'
                ],
                'vojkovskaya' => [
                    'text' => 'Войковская',
                    'link' => 'войковская'
                ],
                'dinamo' => [
                    'text' => 'Динамо',
                    'link' => 'динамо'
                ],
                'zorge' => [
                    'text' => 'Зорге',
                    'link' => 'зорге'
                ],
                'koptevo' => [
                    'text' => 'Коптево',
                    'link' => 'коптево'
                ],
                'lihobory' => [
                    'text' => 'Лихоборы',
                    'link' => 'лихоборы'
                ],
                'okruzhnaya' => [
                    'text' => 'Окружная',
                    'link' => 'окружная'
                ],
                'petrovkij-park' => [
                    'text' => 'Петровский парк',
                    'link' => 'петровский-парк'
                ],
                'petrovsko-razumovskaya' => [
                    'text' => 'Петровско Разумовская',
                    'link' => 'петровско-разумовская'
                ],
                'polezhaevskaya' => [
                    'text' => 'Полежаевская',
                    'link' => 'полежаевская'
                ],
                'rechnoj-vokzal' => [
                    'text' => 'Речной вокзал',
                    'link' => 'речной-вокзал'
                ],
                'seligerskaya' => [
                    'text' => 'Селигерская',
                    'link' => 'селигерская'
                ],
                'sokol' => [
                    'text' => 'Сокол',
                    'link' => 'сокол'
                ],
                'timiryazevkaya' => [
                    'text' => 'Тимирязевская',
                    'link' => 'тимирязевская'
                ],
                'hovrino' => [
                    'text' => 'Ховрино',
                    'link' => 'ховрино'
                ],
                'horoshevo' => [
                    'text' => 'Хорошево',
                    'link' => 'хорошево'
                ],
                'horoshevskaya' => [
                    'text' => 'Хорошевская',
                    'link' => 'хорошевская'
                ],
                'cska' => [
                    'text' => 'ЦСКА',
                    'link' => 'цска'
                ],
            ],
        ],
        'svao' => [
            'ucode' => '%D1%81%D0%B2%D0%B0%D0%BE',
            'session_start' => 'svao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'СВАО',
            'region_dat_p' => 'Северо-Восточному АО',
            'region_im_p' => 'СВАО',
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'lianozovo' => [
                    'text' => 'Лианозово',
                    'link' => 'лианозово'
                ],
                'losinoostrovskij' => [
                    'text' => 'Лосиноостровский',
                    'link' => 'лосиноостровский'
                ],
                'marfino' => [
                    'text' => 'Марифно',
                    'link' => 'марфино'
                ],
                'ostankino' => [
                    'text' => 'Останкино',
                    'link' => 'останкино'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'alekseevskaya' => [
                    'text' => 'Алексеевская',
                    'link' => 'алексеевская'
                ],
                'altufevo' => [
                    'text' => 'Алтуфьево',
                    'link' => 'алтуфьево'
                ],
                'babushkinskaya' => [
                    'text' => 'Бабушкинская',
                    'link' => 'бабушкинская'
                ],
                'bibirevo' => [
                    'text' => 'Бибирево',
                    'link' => 'бибирево'
                ],
                'botanicheskij-sad' => [
                    'text' => 'Ботанический сад',
                    'link' => 'ботанический-сад'
                ],
                'butyrskaya' => [
                    'text' => 'Бутырская',
                    'link' => 'бутырская'
                ],
                'vdnh' => [
                    'text' => 'ВДНХ',
                    'link' => 'вднх'
                ],
                'vladykino' => [
                    'text' => 'Владыкино',
                    'link' => 'владыкино'
                ],
                'vystavochnyi-tsentr' => [
                    'text' => 'Выставочный центр',
                    'link' => 'выставочный-центр'
                ],
                'dmitrovskaya' => [
                    'text' => 'Дмитровская',
                    'link' => 'дмитровская'
                ],
                'marina-roshcha' => [
                    'text' => 'Марьина роща',
                    'link' => 'марьина-роща'
                ],
                'medvedkovo' => [
                    'text' => 'Медведково',
                    'link' => 'медведково'
                ],
                'otradnoe' => [
                    'text' => 'Отрадное',
                    'link' => 'отрадное'
                ],
                'rostokino' => [
                    'text' => 'Ростокино',
                    'link' => 'ростокино'
                ],
                'savelovskaya' => [
                    'text' => 'Савеловская',
                    'link' => 'савеловская'
                ],
                'sviblovo' => [
                    'text' => 'Свиблово',
                    'link' => 'свиблово'
                ],
                'teletsentr' => [
                    'text' => 'Телецентр',
                    'link' => 'телецентр'
                ],
                'ulitsa-akademika-koroleva' => [
                    'text' => 'Улица академика Королева',
                    'link' => 'улица-академика-королева'
                ],
                'ulitsa-milashenkova' => [
                    'text' => 'Улица Милашенкова',
                    'link' => 'улица-милашенкова'
                ],
                'ulitsa-sergeya-ejzenshtejna' => [
                    'text' => 'Улица Сергея Эйзенштейна',
                    'link' => 'улица-сергея-эйзенштейна'
                ],
                'fonvizinskaya' => [
                    'text' => 'Фонвизинская',
                    'link' => 'фонвизинская'
                ],

            ],
        ],
        'vao' => [
            'ucode' => '%D0%B2%D0%B0%D0%BE',
            'session_start' => 'vao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ВАО',
            'region_dat_p' => 'Восточному АО',
            'region_im_p' => 'ВАО',
          /*'title_cyti_menu_place'=>'Города и поселки',
          'cyti_menu_place'=>[
              'levashovo'=> [
                  'text'=>'Левашово',
                  'link'=>'левашово'
              ],
              'pargolovo'=> [
                  'text'=>'Парголово',
                  'link'=>'парголово'
              ],
          ],*/
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'bogorodskoe' => [
                    'text' => 'Богородское',
                    'link' => 'богородское'
                ],
                'veshnyaki' => [
                    'text' => 'Вешняки',
                    'link' => 'вешняки'
                ],
                'golyanovo' => [
                    'text' => 'Гольяново',
                    'link' => 'гольяново'
                ],
                'izmajlovo' => [
                    'text' => 'Измайлово',
                    'link' => 'измайлово'
                ],
                'kosino-uhtomskij' => [
                    'text' => 'Косино-Ухтомский',
                    'link' => 'косино-ухтомский'
                ],
            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'andronovka' => [
                    'text' => 'Андроновка',
                    'link' => 'андроновка'
                ],
                'belokamennaya' => [
                    'text' => 'Белокаменная',
                    'link' => 'белокаменная'
                ],
                'bulvar-rokossovskogo' => [
                    'text' => 'Бульвар Рокоссовского',
                    'link' => 'бульвар-рокоссовского'
                ],
                'izmailovskaya' => [
                    'text' => 'Измайловская',
                    'link' => 'измайловская'
                ],
                'lokomotiv' => [
                    'text' => 'Локомотив',
                    'link' => 'локомотив'
                ],
                'novogireevo' => [
                    'text' => 'Новогиреево',
                    'link' => 'новогиреево'
                ],
                'novokosino' => [
                    'text' => 'Новокосино',
                    'link' => 'новокосино'
                ],
                'partizanskaya' => [
                    'text' => 'Партизанская',
                    'link' => 'партизанская'
                ],
                'pervomaiskaya' => [
                    'text' => 'Первомайская',
                    'link' => 'первомайская'
                ],
                'perovo' => [
                    'text' => 'Перово',
                    'link' => 'перово'
                ],
                'preobrazhenskaya-poshchad' => [
                    'text' => 'Преображенская площадь',
                    'link' => 'преображенская-площадь'
                ],
                'semenovskaya' => [
                    'text' => 'Семеновская',
                    'link' => 'семеновская'
                ],
                'sokolinaya-gora' => [
                    'text' => 'Соколиная Гора',
                    'link' => 'соколиная-гора'
                ],
                'sokolniki' => [
                    'text' => 'Сокольники',
                    'link' => 'сокольники'
                ],
                'cherkizovskaya' => [
                    'text' => 'Черкизовская',
                    'link' => 'черкизовская'
                ],
                'shosse-entuziastov' => [
                    'text' => 'Шоссе Энтузиастов',
                    'link' => 'шоссе-энтузиастов'
                ],
                'shchelkovskaya' => [
                    'text' => 'Щелковская',
                    'link' => 'щелковская'
                ],
                'elektrozavodskaya' => [
                    'text' => 'Электрозаводская',
                    'link' => 'электрозаводская'
                ],
            ],
        ],
        'uvao' => [
            'ucode' => '%D1%8E%D0%B2%D0%B0%D0%BE',
            'session_start' => 'uvao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ЮВАО',
            'region_dat_p' => 'Юго-Восточном АО',
            'region_im_p' => 'ЮВАО',
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'vyhino-zhulebino' => [
                    'text' => 'Выхино-Жулебино',
                    'link' => 'выхино-жулебино'
                ],
                'kapotnya' => [
                    'text' => 'Капотня',
                    'link' => 'капотня'
                ],
                'lefortovo' => [
                    'text' => 'Лефортово',
                    'link' => 'лефортово'
                ],
                'nekrasovka' => [
                    'text' => 'Некрасовка',
                    'link' => 'некрасовка'
                ],
                'nizhegorodskij' => [
                    'text' => 'Нижегородский',
                    'link' => 'нижегородский'
                ],
                'uzhnoportovyi' => [
                    'text' => 'Южнопортовый',
                    'link' => 'южнопортовый'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'aviamotornaya' => [
                    'text' => 'Авиамоторная',
                    'link' => 'авиамоторная'
                ],
                'bratislavskaya' => [
                    'text' => 'Братиславская',
                    'link' => 'братиславская'
                ],
                'volgogradskij-prospekt' => [
                    'text' => 'Волгоградский проспект',
                    'link' => 'волгоградский-проспект'
                ],
                'volzhskaya' => [
                    'text' => 'Волжская',
                    'link' => 'волжская'
                ],
                'dubrovka' => [
                    'text' => 'Дубровка',
                    'link' => 'дубровка'
                ],
                'zhulebino' => [
                    'text' => 'Жулебино',
                    'link' => 'жулебино'
                ],
                'kozhuhovskaya' => [
                    'text' => 'Кожуховская',
                    'link' => 'кожуховская'
                ],
                'kotelniki' => [
                    'text' => 'Котельники',
                    'link' => 'котельники'
                ],
                'kuzminki' => [
                    'text' => 'Кузьминки',
                    'link' => 'кузьминки'
                ],
                'lermontovskij-prospekt' => [
                    'text' => 'Лермонтовский проспект',
                    'link' => 'лермонтовский-проспект'
                ],
                'lublino' => [
                    'text' => 'Люблино',
                    'link' => 'люблино'
                ],
                'marino' => [
                    'text' => 'Марьино',
                    'link' => 'марьино'
                ],
                'nizhegorodskaya' => [
                    'text' => 'Нижегородская',
                    'link' => 'нижегородская'
                ],
                'novohohlovskaya' => [
                    'text' => 'Новохохловская',
                    'link' => 'новохохловская'
                ],
                'pechatniki' => [
                    'text' => 'Печатники',
                    'link' => 'печатники'
                ],
                'ryazanskij-prospekt' => [
                    'text' => 'Рязанский проспект',
                    'link' => 'рязанский-проспект'
                ],
                'tekstilshchiki' => [
                    'text' => 'Текстильщики',
                    'link' => 'текстильщики'
                ],
                'ugreshskaya' => [
                    'text' => 'Угрешская',
                    'link' => 'угрешская'
                ],

            ],
        ],
        'uao' => [ //kurortnyj
            'ucode' => '%D1%8E%D0%B0%D0%BE', //%D0%BA%D1%83%D1%80%D0%BE%D1%80%D1%82%D0%BD%D1%8B%D0%B9
            'session_start' => 'uao', //kurortnyj
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ЮАО', //Курортном
            'region_dat_p' => 'Южному АО', //Курортному
            'region_im_p' => 'САО', //Курортный
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'birulevo' => [
                    'text' => 'Бирюлево',
                    'link' => 'бирюлево'
                ],
                'brateevo' => [
                    'text' => 'Братеево',
                    'link' => 'братеево'
                ],
                'danilovskij' => [
                    'text' => 'Даниловский',
                    'link' => 'даниловский'
                ],
                'moskvoreche-saburovo' => [
                    'text' => 'Москворечье-Сабурово',
                    'link' => 'москворечье-сабурово'
                ],
                'nagatino-sadovniki' => [
                    'text' => 'Нагатино-Садовники',
                    'link' => 'нагатино-садовники'
                ],
                'nagatinskij-zaton' => [
                    'text' => 'Нагатинский затон',
                    'link' => 'нагатинский-затон'
                ],
                'orehovo-borisovo' => [
                    'text' => 'Орехово-Борисово',
                    'link' => 'орехово-борисово'
                ],
                'tehnopark' => [
                    'text' => 'Технопарк',
                    'link' => 'технопарк'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'avtozavodskaya' => [
                    'text' => 'Автозаводская',
                    'link' => 'автозаводская'
                ],
                'alma-atinskaya' => [
                    'text' => 'Алма-Атинская',
                    'link' => 'алма-атинская'
                ],
                'annino' => [
                    'text' => 'Аннино',
                    'link' => 'аннино'
                ],
                'borisovo' => [
                    'text' => 'Борисово',
                    'link' => 'борисово'
                ],
                'varshavskaya' => [
                    'text' => 'Варшавская',
                    'link' => 'варшавская'
                ],
                'verhnie-kotly' => [
                    'text' => 'Верхние Котлы',
                    'link' => 'верхние-котлы'
                ],
                'domodedovskaya' => [
                    'text' => 'Домодедовская',
                    'link' => 'домодедовская'
                ],
                'zil' => [
                    'text' => 'Зил',
                    'link' => 'зил'
                ],
                'zyablikovo' => [
                    'text' => 'Зябликово',
                    'link' => 'зябликово'
                ],
                'kantemirovskaya' => [
                    'text' => 'Кантемировская',
                    'link' => 'кантемировская'
                ],
                'kashirskaya' => [
                    'text' => 'Каширская',
                    'link' => 'каширская'
                ],
                'kolomenskaya' => [
                    'text' => 'Коломенская',
                    'link' => 'коломенская'
                ],
                'krasnogvardeiskaya' => [
                    'text' => 'Красногвардейская',
                    'link' => 'красногвардейская'
                ],
                'krymskaya' => [
                    'text' => 'Крымская',
                    'link' => 'крымская'
                ],
                'lesoparkovaya' => [
                    'text' => 'Лесопарковая',
                    'link' => 'лесопарковая'
                ],
                'nagatinskaya' => [
                    'text' => 'Нагатинская',
                    'link' => 'нагатинская'
                ],
                'nagornaya' => [
                    'text' => 'Нагорная',
                    'link' => 'нагорная'
                ],
                'orehovo' => [
                    'text' => 'Орехово',
                    'link' => 'орехово'
                ],

                'prazhskaya' => [
                    'text' => 'Пражская',
                    'link' => 'пражская'
                ],
                'tulskaya' => [
                    'text' => 'Тульская',
                    'link' => 'тульская'
                ],
                'ulitsa-akademika-yangelya' => [
                    'text' => 'Улица Академика Янгеля',
                    'link' => 'улица-академика-янгеля'
                ],
                'tsaritsyno' => [
                    'text' => 'Царицыно',
                    'link' => 'царицыно'
                ],
                'chertanovskaya' => [
                    'text' => 'Чертановская',
                    'link' => 'чертановская'
                ],
                'shabolovskaya' => [
                    'text' => 'Шаболовская',
                    'link' => 'шаболовская'
                ],
                'shipilovskaya' => [
                    'text' => 'Шипиловская',
                    'link' => 'шипиловская'
                ],
                'uzhnaya' => [
                    'text' => 'Южная',
                    'link' => 'южная'
                ],


            ],
        ],
        'uzao' => [ //moskovskij
            'ucode' => '%D1%8E%D0%B7%D0%B0%D0%BE',
            'session_start' => 'uzao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ЮЗАО',
            'region_dat_p' => 'Юго-Западному АО',
            'region_im_p' => 'ЮЗАО',
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'gagarinskij' => [
                    'text' => 'Гагаринский',
                    'link' => 'гагаринский'
                ],
                'zuzino' => [
                    'text' => 'Зюзино',
                    'link' => 'зюзино'
                ],
                'kotlovka' => [
                    'text' => 'Котловка',
                    'link' => 'котловка'
                ],
                'obruchevskij' => [
                    'text' => 'Обручевский',
                    'link' => 'обручевский'
                ],
                'severnoe-butovo' => [
                    'text' => 'Северное Бутово',
                    'link' => 'северное-бутово'
                ],
                'cheremushki' => [
                    'text' => 'Черемушки',
                    'link' => 'черемушки'
                ],
                'uzhnoe-butovo' => [
                    'text' => 'Южное Бутово',
                    'link' => 'южное-бутово'
                ],
            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'akademicheskaya' => [
                    'text' => 'Академическая',
                    'link' => 'академическая'
                ],
                'belyaevo' => [
                    'text' => 'Беляево',
                    'link' => 'беляево'
                ],
                'bitcevskij-park' => [
                    'text' => 'Битцевский парк',
                    'link' => 'битцевский-парк'
                ],
                'bulvar-admirala-ushakova' => [
                    'text' => 'Бульвар Адмирала Ушакова',
                    'link' => 'бульвар-адмирала-ушакова'
                ],
                'bulvar-dmitriya-donskogo' => [
                    'text' => 'Бульвар Дмитрия Донского',
                    'link' => 'бульвар-дмитрия-донского'
                ],
                'buninskaya-alleya' => [
                    'text' => 'Бунинская аллея',
                    'link' => 'бунинская-аллея'
                ],
                'vorobevy-gory' => [
                    'text' => 'Воробьевы горы',
                    'link' => 'воробьевы-горы'
                ],
                'kaluzhskaya' => [
                    'text' => 'Калужская',
                    'link' => 'калужская'
                ],
                'kahovskaya' => [
                    'text' => 'Каховская',
                    'link' => 'каховская'
                ],
                'konkovo' => [
                    'text' => 'Коньково',
                    'link' => 'коньково'
                ],
                'leninskij-prospekt' => [
                    'text' => 'Ленинский проспект',
                    'link' => 'ленинский-проспект'
                ],
                'lomonosovskij-prospekt' => [
                    'text' => 'Ломоносовский проспект',
                    'link' => 'ломоносовский-проспект'
                ],
                'nahimovskij-prospekt' => [
                    'text' => 'Нахимовский проспект',
                    'link' => 'нахимовский-проспект'
                ],
                'novoyasenevskaya' => [
                    'text' => 'Новоясеневская',
                    'link' => 'новоясеневская'
                ],
                'novye-cheremushki' => [
                    'text' => 'Новые Черемушки',
                    'link' => 'новые-черемушки'
                ],
                'ploshchad-gagarina' => [
                    'text' => 'Площадь Гагарина',
                    'link' => 'площадь-гагарина'
                ],
                'profsoyuznaya' => [
                    'text' => 'Профсоюзная',
                    'link' => 'профсоюзная'
                ],
                'sevastopolskaya' => [
                    'text' => 'Севастопольская',
                    'link' => 'севастопольская'
                ],
                'teplyj-stan' => [
                    'text' => 'Теплый Стан',
                    'link' => 'теплый-стан'
                ],
                'troparevo' => [
                    'text' => 'Тропарево',
                    'link' => 'тропарево'
                ],
                'ulitsa-gorchakova' => [
                    'text' => 'Улица Горчакова',
                    'link' => 'улица-горчакова'
                ],
                'ulitsa-skobelevskaya' => [
                    'text' => 'Улица Скобелевская',
                    'link' => 'улица-скобелевская'
                ],
                'ulitsa-starokochalovskaya' => [
                    'text' => 'Улица Старокочаловская',
                    'link' => 'улица-старокочаловская'
                ],
                'universitet' => [
                    'text' => 'Университет',
                    'link' => 'университет'
                ],
                'yasenevo' => [
                    'text' => 'Ясенево',
                    'link' => 'ясенево'
                ],
            ],
        ],
        'zao' => [ //nevskij
            'ucode' => '%D0%B7%D0%B0%D0%BE',
            'session_start' => 'zao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ЗАО',
            'region_dat_p' => 'Западному АО',
            'region_im_p' => 'ЗАО',
            'title_okrug_menu_place' => 'Округа',
            'okrug_menu_place' => [
                'vnukovo' => [
                    'text' => 'Внуково',
                    'link' => 'внуково'
                ],
                'dorogomilovo' => [
                    'text' => 'Дорогомилово',
                    'link' => 'дорогомилово'
                ],
                'kuntsevo' => [
                    'text' => 'Кунцево',
                    'link' => 'кунцево'
                ],
                'mozhaiskij' => [
                    'text' => 'Можайский',
                    'link' => 'можайский'
                ],
                'novoperedelkino' => [
                    'text' => 'Новопеределкино',
                    'link' => 'новопеределкино'
                ],
                'ochakovo-matveevskoe' => [
                    'text' => 'Очаково-Матвеевское',
                    'link' => 'очаково-матвеевское'
                ],
                'solntsevo' => [
                    'text' => 'Солнцево',
                    'link' => 'солнцево'
                ],
                'troparevo-nikulino' => [
                    'text' => 'Тропарево-Никулино',
                    'link' => 'тропарево-никулино'
                ],
                'fili-davydkovo' => [
                    'text' => 'Фили-Давыдково',
                    'link' => 'фили-давыдково'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'bagrationovskaya' => [
                    'text' => 'Багратионовская',
                    'link' => 'багратионовская'
                ],
                'kievskaya' => [
                    'text' => 'Киевская',
                    'link' => 'киевская'
                ],
                'krylatskoe' => [
                    'text' => 'Крылатское',
                    'link' => 'крылатское'
                ],
                'kuntsevskaya' => [
                    'text' => 'Кунцевская',
                    'link' => 'кунцевская'
                ],
                'kutuzovskaya' => [
                    'text' => 'Кутузовская',
                    'link' => 'кутузовская'
                ],
                'minskaya' => [
                    'text' => 'Минская',
                    'link' => 'минская'
                ],
                'molodezhnaya' => [
                    'text' => 'Молодежная',
                    'link' => 'молодежная'
                ],
                'park-pobedy' => [
                    'text' => 'Парк Победы',
                    'link' => 'парк-победы'
                ],
                'pionerskaya' => [
                    'text' => 'Пионерская',
                    'link' => 'пионерская'
                ],
                'prospekt-vernadskogo' => [
                    'text' => 'Проспект Вернадского',
                    'link' => 'проспект-вернадского'
                ],
                'ramenki' => [
                    'text' => 'Раменки',
                    'link' => 'раменки'
                ],
                'slavyanskij-bulvar' => [
                    'text' => 'Славянский бульвар',
                    'link' => 'славянский-бульвар'
                ],
                'studencheskaya' => [
                    'text' => 'Студенческая',
                    'link' => 'студенческая'
                ],
                'filevskij-park' => [
                    'text' => 'Филевский парк',
                    'link' => 'филевский-парк'
                ],
                'fili' => [
                    'text' => 'Фили',
                    'link' => 'фили'
                ],
                'ugo-zapadnaya' => [
                    'text' => 'Юго-Западная',
                    'link' => 'юго-западная'
                ],
            ],
        ],
        'szao' => [ //petrogradskij
            'ucode' => '%D1%81%D0%B7%D0%B0%D0%BE',
            'session_start' => 'szao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'СЗАО',
            'region_dat_p' => 'Северо-Западному АО',
            'region_im_p' => 'СЗАО',
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'kurkino' => [
                    'text' => 'Куркино',
                    'link' => 'куркино'
                ],
                'pokrovskoe-streshnevo' => [
                    'text' => 'Покровское-Стрешнево',
                    'link' => 'покровское-стрешнево'
                ],
                'severnoe-tushino' => [
                    'text' => 'Северное Тушино',
                    'link' => 'северное-тушино'
                ],
                'horoshevo-mnevniki' => [
                    'text' => 'Хорошево-Мневники',
                    'link' => 'хорошево-мневники'
                ],
                'uzhnoe-tushino' => [
                    'text' => 'Южное Тушино',
                    'link' => 'южное-тушино'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'volokolamskaya' => [
                    'text' => 'Волоколамская',
                    'link' => 'волоколамская'
                ],
                'mitino' => [
                    'text' => 'Митино',
                    'link' => 'митино'
                ],
                'oktyabrskoe-pole' => [
                    'text' => 'Октябрькое поле',
                    'link' => 'октябрьское-поле'
                ],
                'panfilovskaya' => [
                    'text' => 'Панфиловская',
                    'link' => 'панфиловская'
                ],
                'planernaya' => [
                    'text' => 'Планерная',
                    'link' => 'планерная'
                ],
                'pyatnitskoe-shosse' => [
                    'text' => 'Пятницкое шоссе',
                    'link' => 'пятницкое-шоссе'
                ],
                'spartak' => [
                    'text' => 'Спартак',
                    'link' => 'спартак'
                ],
                'streshnevo' => [
                    'text' => 'Стрешнево',
                    'link' => 'стрешнево'
                ],
                'strogino' => [
                    'text' => 'Строгино',
                    'link' => 'строгино'
                ],
                'shodnenskaya' => [
                    'text' => 'Сходненская',
                    'link' => 'сходненская'
                ],
                'tushinskaya' => [
                    'text' => 'Тушинская',
                    'link' => 'тушинская'
                ],
                'shchukinskaya' => [
                    'text' => 'Щукинская',
                    'link' => 'щукинская'
                ],
            ],
        ],
        'tsao' => [ //petrodvorcovyj
            'ucode' => '%D1%86%D0%B0%D0%BE',
            'session_start' => 'tsao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'ЦАО',
            'region_dat_p' => 'Центральном АО',
            'region_im_p' => 'ЦАО',
            'title_okrug_menu_place' => 'Районы',
            'okrug_menu_place' => [
                'arbat' => [
                    'text' => 'Арбат',
                    'link' => 'арбат'
                ],
                'basmannyi' => [
                    'text' => 'Басманный',
                    'link' => 'басманный'
                ],
                'zamoskvoreche' => [
                    'text' => 'Замоскворечье',
                    'link' => 'замоскворечье'
                ],
                'meshchanskij' => [
                    'text' => 'Мещанский',
                    'link' => 'мещанский'
                ],
                'presnenskij' => [
                    'text' => 'Пресненский',
                    'link' => 'пресненский'
                ],
                'hamovniki' => [
                    'text' => 'Хамовники',
                    'link' => 'хамовники'
                ],
                'yakimanka' => [
                    'text' => 'Якиманка',
                    'link' => 'якиманка'
                ],

            ],
            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'aleksandrovskij-sad' => [
                    'text' => 'Александровский сад',
                    'link' => 'александровский-сад'
                ],
                'arbatskaya' => [
                    'text' => 'Арбатская',
                    'link' => 'арбатская'
                ],
                'barrikadnaya' => [
                    'text' => 'Баррикадная',
                    'link' => 'баррикадная'
                ],
                'baumanskaya' => [
                    'text' => 'Бауманская',
                    'link' => 'бауманская'
                ],
                'belorusskaya' => [
                    'text' => 'Белорусская',
                    'link' => 'белорусская'
                ],
                'biblioteka-imeni-lenina' => [
                    'text' => 'Библиотека имени Ленина',
                    'link' => 'библиотека-имени-ленина'
                ],
                'borovitskaya' => [
                    'text' => 'Боровицкая',
                    'link' => 'боровицкая'
                ],
                'vystavochnaya' => [
                    'text' => 'Выставочная',
                    'link' => 'выставочная'
                ],
                'delovoj-tsentr' => [
                    'text' => 'Деловой центр',
                    'link' => 'деловой-центр'
                ],
                'dobryninskaya' => [
                    'text' => 'Добрыйнинская',
                    'link' => 'добрынинская'
                ],
                'dostoevskaya' => [
                    'text' => 'Достоевская',
                    'link' => 'достоевская'
                ],
                'kitai-gorod' => [
                    'text' => 'Китай-город',
                    'link' => 'китай-город'
                ],
                'komsomolskaya' => [
                    'text' => 'Комсомольская',
                    'link' => 'комсомольская'
                ],
                'krasnopresnenskaya' => [
                    'text' => 'Краснопресненская',
                    'link' => 'краснопресненская'
                ],
                'krasnoselskaya' => [
                    'text' => 'Красносельская',
                    'link' => 'красносельская'
                ],
                'krasnye-vorota' => [
                    'text' => 'Красные ворота',
                    'link' => 'красные-ворота'
                ],
                'krestyanskaya-zastava' => [
                    'text' => 'Крестьянская застава',
                    'link' => 'крестьянская-застава'
                ],
                'kropotkinskaya' => [
                    'text' => 'Кропоткинская',
                    'link' => 'кропоткинская'
                ],
                'kuznetskij-most' => [
                    'text' => 'Кузнецкий мост',
                    'link' => 'кузнецкий-мост'
                ],
                'kurskaya' => [
                    'text' => 'Курская',
                    'link' => 'курская'
                ],
                'lubyanka' => [
                    'text' => 'Лубянка',
                    'link' => 'лубянка'
                ],
                'luzhniki' => [
                    'text' => 'Лужники',
                    'link' => 'лужники'
                ],
                'marksistskaya' => [
                    'text' => 'Марксистская',
                    'link' => 'марксистская'
                ],
                'mayakovskaya' => [
                    'text' => 'Маяковская',
                    'link' => 'маяковская'
                ],
                'mezhdunarodnaya' => [
                    'text' => 'Международная',
                    'link' => 'международная'
                ],
                'mendeleevskaya' => [
                    'text' => 'Менделеевская',
                    'link' => 'менделеевская'
                ],
                'novokuznetskaya' => [
                    'text' => 'Новокузнецкая',
                    'link' => 'новокузнецкая'
                ],
                'novoslobodskaya' => [
                    'text' => 'Новослободская',
                    'link' => 'новослободская'
                ],
                'oktyabrskaya' => [
                    'text' => 'Октябрьская',
                    'link' => 'октябрьская'
                ],
                'ohotnyj-ryad' => [
                    'text' => 'Охотный Ряд',
                    'link' => 'охотный-ряд'
                ],
                'paveletskaya' => [
                    'text' => 'Павелецкая',
                    'link' => 'павелецкая'
                ],
                'park-kultury' => [
                    'text' => 'Парк культуры',
                    'link' => 'парк-культуры'
                ],
                'ploshchad-ilicha' => [
                    'text' => 'Площадь Ильича',
                    'link' => 'площадь-ильича'
                ],
                'ploshchad-revolutsii' => [
                    'text' => 'Площадь Революции',
                    'link' => 'площадь-революции'
                ],
                'polyanka' => [
                    'text' => 'Полянка',
                    'link' => 'полянка'
                ],
                'proletarskaya' => [
                    'text' => 'Пролетарская',
                    'link' => 'пролетарская'
                ],
                'prospekt-mira' => [
                    'text' => 'Проспект Мира',
                    'link' => 'проспект-мира'
                ],
                'pushkinskaya' => [
                    'text' => 'Пушкинская',
                    'link' => 'пушкинская'
                ],
                'rizhskaya' => [
                    'text' => 'Рижская',
                    'link' => 'рижская'
                ],
                'rimskaya' => [
                    'text' => 'Римская',
                    'link' => 'римская'
                ],
                'serpuhovskaya' => [
                    'text' => 'Серпуховская',
                    'link' => 'серпуховская'
                ],
                'smolenskaya' => [
                    'text' => 'Смоленская',
                    'link' => 'смоленская'
                ],
                'sportivnaya' => [
                    'text' => 'Спортивная',
                    'link' => 'спортивная'
                ],
                'sretenskij-bulvar' => [
                    'text' => 'Сретенский бульвар',
                    'link' => 'сретенский-бульвар'
                ],
                'suharevskaya' => [
                    'text' => 'Сухаревская',
                    'link' => 'сухаревская'
                ],
                'taganskaya' => [
                    'text' => 'Таганская',
                    'link' => 'таганская'
                ],
                'tverskaya' => [
                    'text' => 'Тверская',
                    'link' => 'тверская'
                ],
                'teatralnaya' => [
                    'text' => 'Театральная',
                    'link' => 'театральная'
                ],
                'tretyakovskaya' => [
                    'text' => 'Третьяковская',
                    'link' => 'третьяковская'
                ],
                'trubnaya' => [
                    'text' => 'Трубная',
                    'link' => 'трубная'
                ],
                'turgenevskaya' => [
                    'text' => 'Тургеневская',
                    'link' => 'тургеневская'
                ],
                'ulitsa-1905-goda' => [
                    'text' => 'Улица 1905 года',
                    'link' => 'улица-1905-года'
                ],
                'frunzenskaya' => [
                    'text' => 'Фрунзенская',
                    'link' => 'фрунзенская'
                ],
                'tsvetnoj-bulvar' => [
                    'text' => 'Цветной бульвар',
                    'link' => 'цветной-бульвар'
                ],
                'chehovskaya' => [
                    'text' => 'Чеховская',
                    'link' => 'чеховская'
                ],
                'chistye-prudy' => [
                    'text' => 'Чистые пруды',
                    'link' => 'чистые-пруды'
                ],
                'chkalovskaya' => [
                    'text' => 'Чкаловская',
                    'link' => 'чкаловская'
                ],
                'shelepiha' => [
                    'text' => 'Шелепиха',
                    'link' => 'шелепиха'
                ],

            ],
        ],
        'nao' => [//primorskij
            'ucode' => '%D0%BD%D0%B0%D0%BE',
            'session_start' => 'nao',
            'region_template' => '/views/region/main_region.php',
            'service_template' => '/views/service_page/region_service.php',
            'region_predl_p' => 'НАО',
            'region_dat_p' => 'Новомосковскому АО',
            'region_im_p' => 'Новомосковский АО',

            'title_metro_menu_place' => 'Метро',
            'metro_menu_place' => [
                'rumyantsevo' => [
                    'text' => 'Румянцеов',
                    'link' => 'румянцево'
                ],
                'salarevo' => [
                    'text' => 'Саларьево',
                    'link' => 'саларьево'
                ],

            ],
        ],
    ],

    'okrug_region' => [
        'beskudnikovo' => [//kolomna //Егор
            'ucode' => '%D0%B1%D0%B5%D1%81%D0%BA%D1%83%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%BE',//%D0%BA%D0%BE%D0%BB%D0%BE%D0%BC%D0%BD%D0%B0
            'session_start' => 'beskudnikovo',//kolomna
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Бескудниково',//Коломне
            'okrug_region_dat_p' => 'Бескудниково',//Коломне
            'okrug_region_im_p' => 'Бескудниково', //Коломна
            'okrug_region_distance' => '22',
            'okrug_region_delivery' => '700',
        ],
        'golovino' => [
            'ucode' => '%D0%B3%D0%BE%D0%BB%D0%BE%D0%B2%D0%B8%D0%BD%D0%BE',
            'session_start' => 'golovino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Головино',
            'okrug_region_dat_p' => 'Головино',
            'okrug_region_im_p' => 'Головино',
            'okrug_region_distance' => '19',
            'okrug_region_delivery' => '650',
        ],
        'degunino' => [
            'ucode' => '%D0%B4%D0%B5%D0%B3%D1%83%D0%BD%D0%B8%D0%BD%D0%BE',
            'session_start' => 'degunino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Дегунино',
            'okrug_region_dat_p' => 'Дегунино',
            'okrug_region_im_p' => 'Дегунино',
            'okrug_region_distance' => '16',
            'okrug_region_delivery' => '650',
        ],
        'koptevo' => [
            'ucode' => '%D0%BA%D0%BE%D0%BF%D1%82%D0%B5%D0%B2%D0%BE',
            'session_start' => 'koptevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Коптево',
            'okrug_region_dat_p' => 'Коптево',
            'okrug_region_im_p' => 'Коптево',
            'okrug_region_distance' => '13',
            'okrug_region_delivery' => '600',
        ],
        'levoberezhnyi' => [
            'ucode' => '%D0%BB%D0%B5%D0%B2%D0%BE%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D1%8B%D0%B9',
            'session_start' => 'levoberezhnyi',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Левобережном',
            'okrug_region_dat_p' => 'Левобережному',
            'okrug_region_im_p' => 'Левобережный',
            'okrug_region_distance' => '14',
            'okrug_region_delivery' => '600',
        ],
        'hovrino' => [
            'ucode' => '%D1%85%D0%BE%D0%B2%D1%80%D0%B8%D0%BD%D0%BE',
            'session_start' => 'hovrino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Ховрино',
            'okrug_region_dat_p' => 'Ховрино',
            'okrug_region_im_p' => 'Ховрино',
            'okrug_region_distance' => '16',
            'okrug_region_delivery' => '650',
        ],
        'horoshevskij' => [
            'ucode' => '%D1%85%D0%BE%D1%80%D0%BE%D1%88%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'horoshevskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Хорошевском',
            'okrug_region_dat_p' => 'Хорошевскому',
            'okrug_region_im_p' => 'Хорошевский',
            'okrug_region_distance' => '11',
            'okrug_region_delivery' => '600',
        ],
        'lianozovo' => [
            'ucode' => '%D0%BB%D0%B8%D0%B0%D0%BD%D0%BE%D0%B7%D0%BE%D0%B2%D0%BE',
            'session_start' => 'lianozovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Лианозово',
            'okrug_region_dat_p' => 'Лианозово',
            'okrug_region_im_p' => 'Лианозово',
            'okrug_region_distance' => '22',
            'okrug_region_delivery' => '700',
        ],
        'losinoostrovskij' => [
            'ucode' => '%D0%BB%D0%BE%D1%81%D0%B8%D0%BD%D0%BE%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'losinoostrovskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Лосиноостровском',
            'okrug_region_dat_p' => 'Лосиноостровскому',
            'okrug_region_im_p' => 'Лосиноостровский',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'marfino' => [
            'ucode' => '%D0%BC%D0%B0%D1%80%D1%84%D0%B8%D0%BD%D0%BE',
            'session_start' => 'marfino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Марфино',
            'okrug_region_dat_p' => 'Марфино',
            'okrug_region_im_p' => 'Марфино',
            'okrug_region_distance' => '41',
            'okrug_region_delivery' => '750',
        ],
        'ostankino' => [
            'ucode' => '%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BA%D0%B8%D0%BD%D0%BE',
            'session_start' => 'ostankino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Останкино',
            'okrug_region_dat_p' => 'Останкино',
            'okrug_region_im_p' => 'Останкино',
            'okrug_region_distance' => '72',
            'okrug_region_delivery' => '750',
        ],
        'bogorodskoe' => [
            'ucode' => '%D0%B1%D0%BE%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%BE%D0%B5',
            'session_start' => 'bogorodskoe',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Богородском',
            'okrug_region_dat_p' => 'Богородскому',
            'okrug_region_im_p' => 'Богородское',
            'okrug_region_distance' => '23',
            'okrug_region_delivery' => '700',
        ],
        'veshnyaki' => [
            'ucode' => '%D0%B2%D0%B5%D1%88%D0%BD%D1%8F%D0%BA%D0%B8',
            'session_start' => 'veshnyaki',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Вешняках',
            'okrug_region_dat_p' => 'Вешнякам',
            'okrug_region_im_p' => 'Вешняки',
            'okrug_region_distance' => '51',
            'okrug_region_delivery' => '750',
        ],
        'golyanovo' => [
            'ucode' => '%D0%B3%D0%BE%D0%BB%D1%8C%D1%8F%D0%BD%D0%BE%D0%B2%D0%BE',
            'session_start' => 'golyanovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Гольяново',
            'okrug_region_dat_p' => 'Гольяново',
            'okrug_region_im_p' => 'Гольяново',
            'okrug_region_distance' => '41',
            'okrug_region_delivery' => '750',
        ],
        'izmajlovo' => [
            'ucode' => '%D0%B8%D0%B7%D0%BC%D0%B0%D0%B9%D0%BB%D0%BE%D0%B2%D0%BE',
            'session_start' => 'izmajlovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Измайлово',
            'okrug_region_dat_p' => 'Измайлово',
            'okrug_region_im_p' => 'Измайлово',
            'okrug_region_distance' => '27',
            'okrug_region_delivery' => '750',
        ],
        'kosino-uhtomskij' => [
            'ucode' => '%D0%BA%D0%BE%D1%81%D0%B8%D0%BD%D0%BE-%D1%83%D1%85%D1%82%D0%BE%D0%BC%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'kosino-uhtomskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Косино-Ухтомском',
            'okrug_region_dat_p' => 'Косино-Ухтомскому',
            'okrug_region_im_p' => 'Косино-Ухтомский',
            'okrug_region_distance' => '55',
            'okrug_region_delivery' => '750',
        ],
        'vyhino-zhulebino' => [
            'ucode' => '%D0%B2%D1%8B%D1%85%D0%B8%D0%BD%D0%BE-%D0%B6%D1%83%D0%BB%D0%B5%D0%B1%D0%B8%D0%BD%D0%BE',
            'session_start' => 'vyhino-zhulebino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Выхино-Жулебино',
            'okrug_region_dat_p' => 'Выхино-Жулебино',
            'okrug_region_im_p' => 'Выхино-Жулебино',
            'okrug_region_distance' => '34',
            'okrug_region_delivery' => '750',
        ],
        'kapotnya' => [
            'ucode' => '%D0%BA%D0%B0%D0%BF%D0%BE%D1%82%D0%BD%D1%8F',
            'session_start' => 'kapotnya',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Капотне',
            'okrug_region_dat_p' => 'Капотне',
            'okrug_region_im_p' => 'Капотня',
            'okrug_region_distance' => '62',
            'okrug_region_delivery' => '750',
        ],
        'lefortovo' => [
            'ucode' => '%D0%BB%D0%B5%D1%84%D0%BE%D1%80%D1%82%D0%BE%D0%B2%D0%BE',
            'session_start' => 'lefortovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Лефортово',
            'okrug_region_dat_p' => 'Лефортово',
            'okrug_region_im_p' => 'Лефортово',
            'okrug_region_distance' => '27',
            'okrug_region_delivery' => '750',
        ],
        'nekrasovka' => [
            'ucode' => '%D0%BD%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D0%B2%D0%BA%D0%B0',
            'session_start' => 'nekrasovka',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Некрасовке',
            'okrug_region_dat_p' => 'Некрасовке',
            'okrug_region_im_p' => 'Некрасовка',
            'okrug_region_distance' => '62',
            'okrug_region_delivery' => '750',
        ],
        'nizhegorodskij' => [
            'ucode' => '%D0%BD%D0%B8%D0%B6%D0%B5%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B8%D0%B9',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'session_start' => 'nizhegorodskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'okrug_region_predl_p' => 'Нижегородском',
            'okrug_region_dat_p' => 'Нижегородскому',
            'okrug_region_im_p' => 'Нижегородский',
            'okrug_region_distance' => '26',
            'okrug_region_delivery' => '750',
        ],
        'uzhnoportovyi' => [
            'ucode' => '%D1%8E%D0%B6%D0%BD%D0%BE%D0%BF%D0%BE%D1%80%D1%82%D0%BE%D0%B2%D1%8B%D0%B9',
            'session_start' => 'uzhnoportovyi',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Южнопортовом',
            'okrug_region_dat_p' => 'Южнопортовому',
            'okrug_region_im_p' => 'Южнопортовый',
            'okrug_region_distance' => '29',
            'okrug_region_delivery' => '750',
        ],
        'birulevo' => [
            'ucode' => '%D0%B1%D0%B8%D1%80%D1%8E%D0%BB%D0%B5%D0%B2%D0%BE',
            'session_start' => 'birulevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Бирюлево',
            'okrug_region_dat_p' => 'Бирюлево',
            'okrug_region_im_p' => 'Бирюлево',
            'okrug_region_distance' => '46',
            'okrug_region_delivery' => '750',
        ],
        'brateevo' => [
            'ucode' => '%D0%B1%D1%80%D0%B0%D1%82%D0%B5%D0%B5%D0%B2%D0%BE',
            'session_start' => 'brateevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Братеево',
            'okrug_region_dat_p' => 'Братеево',
            'okrug_region_im_p' => 'Братеево',
            'okrug_region_distance' => '39',
            'okrug_region_delivery' => '750',
        ],
        'danilovskij' => [
            'ucode' => '%D0%B4%D0%B0%D0%BD%D0%B8%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'danilovskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Даниловском',
            'okrug_region_dat_p' => 'Даниловскому',
            'okrug_region_im_p' => 'Даниловский',
            'okrug_region_distance' => '22',
            'okrug_region_delivery' => '700',
        ],
        'moskvoreche-saburovo' => [
            'ucode' => '%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%BE%D1%80%D0%B5%D1%87%D1%8C%D0%B5-%D1%81%D0%B0%D0%B1%D1%83%D1%80%D0%BE%D0%B2%D0%BE',
            'session_start' => 'moskvoreche-saburovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Москворечье-Сабурово',
            'okrug_region_dat_p' => 'Москворечью-Сабурово',
            'okrug_region_im_p' => 'Москворечье-Сабурово',
            'okrug_region_distance' => '32',
            'okrug_region_delivery' => '750',
        ],
        'nagatino-sadovniki' => [
            'ucode' => '%D0%BD%D0%B0%D0%B3%D0%B0%D1%82%D0%B8%D0%BD%D0%BE-%D1%81%D0%B0%D0%B4%D0%BE%D0%B2%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'nagatino-sadovniki',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Нагатино-Садовниках',
            'okrug_region_dat_p' => 'Нагатино-Садовникам',
            'okrug_region_im_p' => 'Нагатино-Садовники',
            'okrug_region_distance' => '31',
            'okrug_region_delivery' => '750',
        ],
        'nagatinskij-zaton' => [
            'ucode' => '%D0%BD%D0%B0%D0%B3%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%B7%D0%B0%D1%82%D0%BE%D0%BD',
            'session_start' => 'nagatinskij-zaton',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Нагатинском затоне',
            'okrug_region_dat_p' => 'Нагатинскому затону',
            'okrug_region_im_p' => 'Нагатинский затон',
            'okrug_region_distance' => '32',
            'okrug_region_delivery' => '750',
        ],
        'orehovo-borisovo' => [
            'ucode' => '%D0%BE%D1%80%D0%B5%D1%85%D0%BE%D0%B2%D0%BE-%D0%B1%D0%BE%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%BE',
            'session_start' => 'orehovo-borisovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Орехово-Борисово',
            'okrug_region_dat_p' => 'Орехово-Борисово',
            'okrug_region_im_p' => 'Орехово-Борисово',
            'okrug_region_distance' => '36',
            'okrug_region_delivery' => '750',
        ],
        'tehnopark' => [
            'ucode' => '%D1%82%D0%B5%D1%85%D0%BD%D0%BE%D0%BF%D0%B0%D1%80%D0%BA',
            'session_start' => 'tehnopark',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Технопарке',
            'okrug_region_dat_p' => 'Технопарку',
            'okrug_region_im_p' => 'Технопарк',
            'okrug_region_distance' => '13',
            'okrug_region_delivery' => '600',
        ],
        'gagarinskij' => [
            'ucode' => '%D0%B3%D0%B0%D0%B3%D0%B0%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'gagarinskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Гагаринском',
            'okrug_region_dat_p' => 'Гагаринскому',
            'okrug_region_im_p' => 'Гагаринский',
            'okrug_region_distance' => '24',
            'okrug_region_delivery' => '700',
        ],
        'zuzino' => [
            'ucode' => '%D0%B7%D1%8E%D0%B7%D0%B8%D0%BD%D0%BE',
            'session_start' => 'zuzino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Зюзино',
            'okrug_region_dat_p' => 'Зюзино',
            'okrug_region_im_p' => 'Зюзино',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'kotlovka' => [
            'ucode' => '%D0%BA%D0%BE%D1%82%D0%BB%D0%BE%D0%B2%D0%BA%D0%B0',
            'session_start' => 'kotlovka',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Котловке',
            'okrug_region_dat_p' => 'Котловке',
            'okrug_region_im_p' => 'Котловка',
            'okrug_region_distance' => '34',
            'okrug_region_delivery' => '750',
        ],
        'obruchevskij' => [
            'ucode' => '%D0%BE%D0%B1%D1%80%D1%83%D1%87%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'obruchevskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Обручевском',
            'okrug_region_dat_p' => 'Обручевскому',
            'okrug_region_im_p' => 'Обручевский',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'severnoe-butovo' => [
            'ucode' => '%D1%81%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%BE%D0%B5-%D0%B1%D1%83%D1%82%D0%BE%D0%B2%D0%BE',
            'session_start' => 'severnoe-butovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Северном Бутово',
            'okrug_region_dat_p' => 'Северному Бутово',
            'okrug_region_im_p' => 'Северное Бутово',
            'okrug_region_distance' => '40',
            'okrug_region_delivery' => '750',
        ],
        'cheremushki' => [
            'ucode' => '%D1%87%D0%B5%D1%80%D0%B5%D0%BC%D1%83%D1%88%D0%BA%D0%B8',
            'session_start' => 'cheremushki',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Черемушках',
            'okrug_region_dat_p' => 'Черемушкам',
            'okrug_region_im_p' => 'Черемушки',
            'okrug_region_distance' => '27',
            'okrug_region_delivery' => '750',
        ],
        'uzhnoe-butovo' => [
            'ucode' => '%D1%8E%D0%B6%D0%BD%D0%BE%D0%B5-%D0%B1%D1%83%D1%82%D0%BE%D0%B2%D0%BE',
            'session_start' => 'uzhnoe-butovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Южном Бутово',
            'okrug_region_dat_p' => 'Южному Бутово',
            'okrug_region_im_p' => 'Южное Бутово',
            'okrug_region_im_p' => 'Южное Бутово',
            'okrug_region_distance' => '43',
            'okrug_region_delivery' => '750',
        ],
        'vnukovo' => [
            'ucode' => '%D0%B2%D0%BD%D1%83%D0%BA%D0%BE%D0%B2%D0%BE',
            'session_start' => 'vnukovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Внуково',
            'okrug_region_dat_p' => 'Внуково',
            'okrug_region_im_p' => 'Внуково',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'dorogomilovo' => [
            'ucode' => '%D0%B4%D0%BE%D1%80%D0%BE%D0%B3%D0%BE%D0%BC%D0%B8%D0%BB%D0%BE%D0%B2%D0%BE',
            'session_start' => 'dorogomilovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Дорогомилово',
            'okrug_region_dat_p' => 'Дорогомилово',
            'okrug_region_im_p' => 'Дорогомилово',
            'okrug_region_distance' => '18',
            'okrug_region_delivery' => '650',
        ],
        'kuntsevo' => [
            'ucode' => '%D0%BA%D1%83%D0%BD%D1%86%D0%B5%D0%B2%D0%BE',
            'session_start' => 'kuntsevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Кунцево',
            'okrug_region_dat_p' => 'Кунцево',
            'okrug_region_im_p' => 'Кунцево',
            'okrug_region_distance' => '18',
            'okrug_region_delivery' => '650',
        ],
        'mozhaiskij' => [
            'ucode' => '%D0%BC%D0%BE%D0%B6%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'mozhaiskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Можайском',
            'okrug_region_dat_p' => 'Можайскому',
            'okrug_region_im_p' => 'Можайский',
            'okrug_region_distance' => '21',
            'okrug_region_delivery' => '700',
        ],
        'novoperedelkino' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%BA%D0%B8%D0%BD%D0%BE',
            'session_start' => 'novoperedelkino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Новопеределкино',
            'okrug_region_dat_p' => 'Новопеределкино',
            'okrug_region_im_p' => 'Новопеределкино',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'ochakovo-matveevskoe' => [
            'ucode' => '%D0%BE%D1%87%D0%B0%D0%BA%D0%BE%D0%B2%D0%BE-%D0%BC%D0%B0%D1%82%D0%B2%D0%B5%D0%B5%D0%B2%D1%81%D0%BA%D0%BE%D0%B5',
            'session_start' => 'ochakovo-matveevskoe',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Очаково-Матвеевском',
            'okrug_region_dat_p' => 'Очаково-Матвеевскому',
            'okrug_region_im_p' => 'Очаково-Матвеевское',
            'okrug_region_distance' => '24',
            'okrug_region_delivery' => '700',
        ],
        'solntsevo' => [
            'ucode' => '%D1%81%D0%BE%D0%BB%D0%BD%D1%86%D0%B5%D0%B2%D0%BE',
            'session_start' => 'solntsevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Солнцево',
            'okrug_region_dat_p' => 'Солнцево',
            'okrug_region_im_p' => 'Солнцево',
            'okrug_region_distance' => '29',
            'okrug_region_delivery' => '750',
        ],
        'troparevo-nikulino' => [
            'ucode' => '%D1%82%D1%80%D0%BE%D0%BF%D0%B0%D1%80%D0%B5%D0%B2%D0%BE-%D0%BD%D0%B8%D0%BA%D1%83%D0%BB%D0%B8%D0%BD%D0%BE',
            'session_start' => 'troparevo-nikulino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Тропарево-Никулино',
            'okrug_region_dat_p' => 'Тропарево-Никулино',
            'okrug_region_im_p' => 'Тропарево-Никулино',
            'okrug_region_distance' => '30',
            'okrug_region_delivery' => '750',
        ],
        'fili-davydkovo' => [
            'ucode' => '%D1%84%D0%B8%D0%BB%D0%B8-%D0%B4%D0%B0%D0%B2%D1%8B%D0%B4%D0%BA%D0%BE%D0%B2%D0%BE',
            'session_start' => 'fili-davydkovo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Филях-Давыдково',
            'okrug_region_dat_p' => 'Филям-Давыдково',
            'okrug_region_im_p' => 'Фили-Давыдково',
            'okrug_region_distance' => '22',
            'okrug_region_delivery' => '700',
        ],
        'kurkino' => [
            'ucode' => '%D0%BA%D1%83%D1%80%D0%BA%D0%B8%D0%BD%D0%BE',
            'session_start' => 'kurkino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Куркино',
            'okrug_region_dat_p' => 'Куркино',
            'okrug_region_im_p' => 'Куркино',
            'okrug_region_distance' => '13',
            'okrug_region_delivery' => '600',
        ],
        'pokrovskoe-streshnevo' => [
            'ucode' => '%D0%BF%D0%BE%D0%BA%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B5-%D1%81%D1%82%D1%80%D0%B5%D1%88%D0%BD%D0%B5%D0%B2%D0%BE',
            'session_start' => 'pokrovskoe-streshnevo',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Покровском-Стрешнево',
            'okrug_region_dat_p' => 'Покровскому-Стрешнево',
            'okrug_region_im_p' => 'Покровское-Стрешнево',
            'okrug_region_distance' => '4',
            'okrug_region_delivery' => '550',
        ],
        'severnoe-tushino' => [
            'ucode' => '%D1%81%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%BE%D0%B5-%D1%82%D1%83%D1%88%D0%B8%D0%BD%D0%BE',
            'session_start' => 'severnoe-tushino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Северном Тушино',
            'okrug_region_dat_p' => 'Северному Тушино',
            'okrug_region_im_p' => 'Северное Тушино',
            'okrug_region_distance' => '8',
            'okrug_region_delivery' => '550',
        ],
        'horoshevo-mnevniki' => [
            'ucode' => '%D1%85%D0%BE%D1%80%D0%BE%D1%88%D0%B5%D0%B2%D0%BE-%D0%BC%D0%BD%D0%B5%D0%B2%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'horoshevo-mnevniki',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Хорошево-Мневниках',
            'okrug_region_dat_p' => 'Хорошево-Мневникам',
            'okrug_region_im_p' => 'Хорошево-Мневники',
            'okrug_region_distance' => '11',
            'okrug_region_delivery' => '600',
        ],
        'uzhnoe-tushino' => [
            'ucode' => '%D1%8E%D0%B6%D0%BD%D0%BE%D0%B5-%D1%82%D1%83%D1%88%D0%B8%D0%BD%D0%BE',
            'session_start' => 'uzhnoe-tushino',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Южном Тушино',
            'okrug_region_dat_p' => 'Южному Тушино',
            'okrug_region_im_p' => 'Южное Тушино',
            'okrug_region_distance' => '6',
            'okrug_region_delivery' => '550',
        ],
        'arbat' => [
            'ucode' => '%D0%B0%D1%80%D0%B1%D0%B0%D1%82',
            'session_start' => 'arbat',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Арбате',
            'okrug_region_dat_p' => 'Арбату',
            'okrug_region_im_p' => 'Арбат',
            'okrug_region_distance' => '16',
            'okrug_region_delivery' => '650',
        ],
        'basmannyi' => [
            'ucode' => '%D0%B1%D0%B0%D1%81%D0%BC%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9',
            'session_start' => 'basmannyi',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Басманном',
            'okrug_region_dat_p' => 'Басманному',
            'okrug_region_im_p' => 'Басманный',
            'okrug_region_distance' => '21',
            'okrug_region_delivery' => '700',
        ],
        'zamoskvoreche' => [
            'ucode' => '%D0%B7%D0%B0%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%BE%D1%80%D0%B5%D1%87%D1%8C%D0%B5',
            'session_start' => 'zamoskvoreche',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Замоскворечье',
            'okrug_region_dat_p' => 'Замоскворечью',
            'okrug_region_im_p' => 'Замоскворечье',
            'okrug_region_distance' => '21',
            'okrug_region_delivery' => '700',
        ],
        'meshchanskij' => [
            'ucode' => '%D0%BC%D0%B5%D1%89%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'meshchanskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Мещанском',
            'okrug_region_dat_p' => 'Мещанскому',
            'okrug_region_im_p' => 'Мещанский',
            'okrug_region_distance' => '16',
            'okrug_region_delivery' => '650',
        ],
        'presnenskij' => [
            'ucode' => '%D0%BF%D1%80%D0%B5%D1%81%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9',
            'session_start' => 'presnenskij',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Пресненском',
            'okrug_region_dat_p' => 'Пресненскому',
            'okrug_region_im_p' => 'Пресненский',
            'okrug_region_distance' => '14',
            'okrug_region_delivery' => '600',
        ],
        'hamovniki' => [
            'ucode' => '%D1%85%D0%B0%D0%BC%D0%BE%D0%B2%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'hamovniki',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Хамовниках',
            'okrug_region_dat_p' => 'Хамовникам',
            'okrug_region_im_p' => 'Хамовники',
            'okrug_region_distance' => '18',
            'okrug_region_delivery' => '650',
        ],
        'yakimanka' => [
            'ucode' => '%D1%8F%D0%BA%D0%B8%D0%BC%D0%B0%D0%BD%D0%BA%D0%B0',
            'session_start' => 'yakimanka',
            'region_okrug_template' => '/views/okrug_region/okrug_region.php',
            'service_template' => '/views/service_page/okrug_region_service.php',
            'okrug_region_predl_p' => 'Якиманке',
            'okrug_region_dat_p' => 'Якиманке',
            'okrug_region_im_p' => 'Якиманка',
            'okrug_region_distance' => '19',
            'okrug_region_delivery' => '650',
        ],

    ],

    'cyti_region' => [
        'dolgoprudnyi' => [ //aleksandrovskaya//Егор
            'ucode' => '%D0%B4%D0%BE%D0%BB%D0%B3%D0%BE%D0%BF%D1%80%D1%83%D0%B4%D0%BD%D1%8B%D0%B9',//%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F
            'session_start' => 'dolgoprudnyi',//aleksandrovskaya
            'region_cyti_template' => '/views/cyti_region/cyti_region.php',
            'service_template' => '/views/service_page/cyti_region_service.php',
            'cyti_region_predl_p' => 'Долгопрудном',//Александровске
            'cyti_region_dat_p' => 'Долгопрудному',//Александровском
            'cyti_region_im_p' => 'Долгопрудный',//Александровская
            'cyti_region_rod_p' => 'Долгопрудного',//
        ],
        'tyarlevo' => [
            'ucode' => '%D1%82%D1%8F%D1%80%D0%BB%D0%B5%D0%B2%D0%BE',
            'session_start' => 'tyarlevo',
            'region_cyti_template' => '/views/cyti_region/cyti_region.php',
            'service_template' => '/views/service_page/cyti_region_service.php',
            'cyti_region_predl_p' => 'Тярлеве',
            'cyti_region_dat_p' => 'Тярлеву',
            'cyti_region_im_p' => 'Тярлево',
        ],

    ],

    'metro_region' => [
        'aeroport' => [ //pushkinskaya//Егор
            'ucode' => '%D0%B0%D1%8D%D1%80%D0%BE%D0%BF%D0%BE%D1%80%D1%82', //%D0%BF%D1%83%D1%88%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F
            'session_start' => 'aeroport',//pushkinskaya
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Аэропорте',//
            'metro_region_dat_p' => 'Аэропорту',//
            'metro_region_im_p' => 'Аэропорт',//
            'metro_region_rod_p' => 'Аэропорта',//
        ],
        'baltijskaya' => [
            'ucode' => '%D0%B1%D0%B0%D0%BB%D1%82%D0%B8%D0%B9%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'baltijskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Балтийской',
            'metro_region_dat_p' => 'Балтийской',
            'metro_region_im_p' => 'Балтийская',
            'metro_region_rod_p' => 'Балтийской',
        ],
        'begovaya' => [
            'ucode' => '%D0%B1%D0%B5%D0%B3%D0%BE%D0%B2%D0%B0%D1%8F',
            'session_start' => 'begovaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Беговой',
            'metro_region_dat_p' => 'Беговой',
            'metro_region_im_p' => 'Беговая',
            'metro_region_rod_p' => 'Беговой',
        ],
        'verhnie-lihobory' => [
            'ucode' => '%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%B8%D0%B5-%D0%BB%D0%B8%D1%85%D0%BE%D0%B1%D0%BE%D1%80%D1%8B',
            'session_start' => 'verhnie-lihobory',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Верхних Лихоборах',
            'metro_region_dat_p' => 'Верхним Лихоборам',
            'metro_region_im_p' => 'Верхние Лихоборы',
            'metro_region_rod_p' => 'Верхних Лихоборов',
        ],
        'vojkovskaya' => [
            'ucode' => '%D0%B2%D0%BE%D0%B9%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'vojkovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Войковской',
            'metro_region_dat_p' => 'Войковской',
            'metro_region_im_p' => 'Войковская',
            'metro_region_rod_p' => 'Войковской',
        ],
        'dinamo' => [
            'ucode' => '%D0%B4%D0%B8%D0%BD%D0%B0%D0%BC%D0%BE',
            'session_start' => 'dinamo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Динамо',
            'metro_region_dat_p' => 'Динамо',
            'metro_region_im_p' => 'Динамо',
            'metro_region_rod_p' => 'Динамо',
        ],
        'zorge' => [
            'ucode' => '%D0%B7%D0%BE%D1%80%D0%B3%D0%B5',
            'session_start' => 'zorge',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Зорге',
            'metro_region_dat_p' => 'Зорге',
            'metro_region_im_p' => 'Зорге',
            'metro_region_rod_p' => 'Зорге',
        ],
        'koptevo' => [
            'ucode' => '%D0%BA%D0%BE%D0%BF%D1%82%D0%B5%D0%B2%D0%BE',
            'session_start' => 'koptevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Коптево',
            'metro_region_dat_p' => 'Коптево',
            'metro_region_im_p' => 'Коптево',
            'metro_region_rod_p' => 'Коптево',
        ],
        'lihobory' => [
            'ucode' => '%D0%BB%D0%B8%D1%85%D0%BE%D0%B1%D0%BE%D1%80%D1%8B',
            'session_start' => 'lihobory',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Лихоборах',
            'metro_region_dat_p' => 'Лихоборам',
            'metro_region_im_p' => 'Лихоборы',
            'metro_region_rod_p' => 'Лихоборов',
        ],
        'okruzhnaya' => [
            'ucode' => '%D0%BE%D0%BA%D1%80%D1%83%D0%B6%D0%BD%D0%B0%D1%8F',
            'session_start' => 'okruzhnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Окружной',
            'metro_region_dat_p' => 'Окружной',
            'metro_region_im_p' => 'Окружная',
            'metro_region_rod_p' => 'Окружной',
        ],
        'petrovkij-park' => [
            'ucode' => '%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA',
            'session_start' => 'petrovkij-park',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Петровском парке',
            'metro_region_dat_p' => 'Петровскому парку',
            'metro_region_im_p' => 'Петровский парк',
            'metro_region_rod_p' => 'Петровского парка',
        ],
        'petrovsko-razumovskaya' => [
            'ucode' => '%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%BE-%D1%80%D0%B0%D0%B7%D1%83%D0%BC%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'petrovsko-razumovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Петровско-Разумовской',
            'metro_region_dat_p' => 'Петровско-Разумовской',
            'metro_region_im_p' => 'Петровско-Разумовская',
            'metro_region_rod_p' => 'Петровско-Разумовской',
        ],
        'polezhaevskaya' => [
            'ucode' => '%D0%BF%D0%BE%D0%BB%D0%B5%D0%B6%D0%B0%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'polezhaevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Полежаевской',
            'metro_region_dat_p' => 'Полежаевской',
            'metro_region_im_p' => 'Полежаевская',
            'metro_region_rod_p' => 'Полежаевской',
        ],
        'rechnoj-vokzal' => [
            'ucode' => '%D1%80%D0%B5%D1%87%D0%BD%D0%BE%D0%B9-%D0%B2%D0%BE%D0%BA%D0%B7%D0%B0%D0%BB',
            'session_start' => 'rechnoj-vokzal',
            'region_cyti_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Речном вокзале',
            'metro_region_dat_p' => 'Речному вокзалу',
            'metro_region_im_p' => 'Речной вокзал',
            'metro_region_rod_p' => 'Речного вокзала',
        ],
        'seligerskaya' => [
            'ucode' => '%D1%81%D0%B5%D0%BB%D0%B8%D0%B3%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'seligerskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Селигерской',
            'metro_region_dat_p' => 'Селигерской',
            'metro_region_im_p' => 'Селигерская',
            'metro_region_rod_p' => 'Селигерской',
        ],
        'sokol' => [
            'ucode' => '%D1%81%D0%BE%D0%BA%D0%BE%D0%BB',
            'session_start' => 'sokol',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Соколе',
            'metro_region_dat_p' => 'Соколу',
            'metro_region_im_p' => 'Сокол',
            'metro_region_rod_p' => 'Сокола',
        ],
        'timiryazevkaya' => [
            'ucode' => '%D1%82%D0%B8%D0%BC%D0%B8%D1%80%D1%8F%D0%B7%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'timiryazevkaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тимирязевской',
            'metro_region_dat_p' => 'Тимирязевской',
            'metro_region_im_p' => 'Тимирязевская',
            'metro_region_rod_p' => 'Тимирязевской',
        ],
        'hovrino' => [
            'ucode' => '%D1%85%D0%BE%D0%B2%D1%80%D0%B8%D0%BD%D0%BE',
            'session_start' => 'hovrino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ховрино',
            'metro_region_dat_p' => 'Ховрино',
            'metro_region_im_p' => 'Ховрино',
            'metro_region_rod_p' => 'Ховрино',
        ],
        'horoshevo' => [
            'ucode' => '%D1%85%D0%BE%D1%80%D0%BE%D1%88%D0%B5%D0%B2%D0%BE',
            'session_start' => 'horoshevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Хорошево',
            'metro_region_dat_p' => 'Хорошево',
            'metro_region_im_p' => 'Хорошево',
            'metro_region_rod_p' => 'Хорошево',
        ],
        'horoshevskaya' => [
            'ucode' => '%D1%85%D0%BE%D1%80%D0%BE%D1%88%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'horoshevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Хорошевской',
            'metro_region_dat_p' => 'Хорошевской',
            'metro_region_im_p' => 'Хорошевская',
            'metro_region_rod_p' => 'Хорошевской',
        ],
        'cska' => [
            'ucode' => '%D1%86%D1%81%D0%BA%D0%B0',
            'session_start' => 'cska',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'ЦСКА',
            'metro_region_dat_p' => 'ЦСКА',
            'metro_region_im_p' => 'ЦСКА',
            'metro_region_rod_p' => 'ЦСКА',
        ],
        'alekseevskaya' => [
            'ucode' => '%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'alekseevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Алексеевской',
            'metro_region_dat_p' => 'Алексеевской',
            'metro_region_im_p' => 'Алексеевская',
            'metro_region_rod_p' => 'Алексеевской',
        ],
        'altufevo' => [
            'ucode' => '%D0%B0%D0%BB%D1%82%D1%83%D1%84%D1%8C%D0%B5%D0%B2%D0%BE',
            'session_start' => 'altufevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Алтуфьево',
            'metro_region_dat_p' => 'Алтуфьево',
            'metro_region_im_p' => 'Алтуфьево',
            'metro_region_rod_p' => 'Алтуфьево',
        ],
        'babushkinskaya' => [
            'ucode' => '%D0%B1%D0%B0%D0%B1%D1%83%D1%88%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'babushkinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бабушкинской',
            'metro_region_dat_p' => 'Бабушкинской',
            'metro_region_im_p' => 'Бабушкинская',
            'metro_region_rod_p' => 'Бабушкинской',
        ],
        'bibirevo' => [
            'ucode' => '%D0%B1%D0%B8%D0%B1%D0%B8%D1%80%D0%B5%D0%B2%D0%BE',
            'session_start' => 'bibirevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бибирево',
            'metro_region_dat_p' => 'Бибирево',
            'metro_region_im_p' => 'Бибирево',
            'metro_region_rod_p' => 'Бибирево',
        ],
        'botanicheskij-sad' => [
            'ucode' => '%D0%B1%D0%BE%D1%82%D0%B0%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D1%81%D0%B0%D0%B4',
            'session_start' => 'botanicheskij-sad',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ботаническом саде',
            'metro_region_dat_p' => 'Ботаническому саду',
            'metro_region_im_p' => 'Ботанический сад',
            'metro_region_rod_p' => 'Ботанического сада',
        ],
        'vdnh' => [
            'ucode' => '%D0%B2%D0%B4%D0%BD%D1%85',
            'session_start' => 'vdnh',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'ВДНХ',
            'metro_region_dat_p' => 'ВДНХ',
            'metro_region_im_p' => 'ВДНХ',
            'metro_region_rod_p' => 'ВДНХ',
        ],
        'vladykino' => [
            'ucode' => '%D0%B2%D0%BB%D0%B0%D0%B4%D1%8B%D0%BA%D0%B8%D0%BD%D0%BE',
            'session_start' => 'vladykino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Владыкино',
            'metro_region_dat_p' => 'Владыкино',
            'metro_region_im_p' => 'Владыкино',
            'metro_region_rod_p' => 'Владыкино',
        ],
        'vystavochnyi-tsentr' => [
            'ucode' => '%D0%B2%D1%8B%D1%81%D1%82%D0%B0%D0%B2%D0%BE%D1%87%D0%BD%D1%8B%D0%B9-%D1%86%D0%B5%D0%BD%D1%82%D1%80',
            'session_start' => 'vystavochnyi-tsentr',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Выставочном центре',
            'metro_region_dat_p' => 'Выставочному центру',
            'metro_region_im_p' => 'Выставочный центр',
            'metro_region_rod_p' => 'Выставочного центра',
        ],
        'dmitrovskaya' => [
            'ucode' => '%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'dmitrovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Дмитровской',
            'metro_region_dat_p' => 'Дмитровской',
            'metro_region_im_p' => 'Дмитровская',
            'metro_region_rod_p' => 'Дмитровской',
        ],
        'marina-roshcha' => [
            'ucode' => '%D0%BC%D0%B0%D1%80%D1%8C%D0%B8%D0%BD%D0%B0-%D1%80%D0%BE%D1%89%D0%B0',
            'session_start' => 'marina-roshcha',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Марьиной Роще',
            'metro_region_dat_p' => 'Марьиной Роще',
            'metro_region_im_p' => 'Марьина Роща',
            'metro_region_rod_p' => 'Марьиной Рощи',
        ],
        'medvedkovo' => [
            'ucode' => '%D0%BC%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D0%BA%D0%BE%D0%B2%D0%BE',
            'session_start' => 'medvedkovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Медведково',
            'metro_region_dat_p' => 'Медведково',
            'metro_region_im_p' => 'Медведково',
            'metro_region_rod_p' => 'Медведково',
        ],
        'otradnoe' => [
            'ucode' => '%D0%BE%D1%82%D1%80%D0%B0%D0%B4%D0%BD%D0%BE%D0%B5',
            'session_start' => 'otradnoe',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Отрадном',
            'metro_region_dat_p' => 'Отрадному',
            'metro_region_im_p' => 'Отрадное',
            'metro_region_rod_p' => 'Отрадного',
        ],
        'rostokino' => [
            'ucode' => '%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B8%D0%BD%D0%BE',
            'session_start' => 'rostokino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ростокино',
            'metro_region_dat_p' => 'Ростокино',
            'metro_region_im_p' => 'Ростокино',
            'metro_region_rod_p' => 'Ростокино',
        ],
        'savelovskaya' => [
            'ucode' => '%D1%81%D0%B0%D0%B2%D0%B5%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'savelovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Савеловской',
            'metro_region_dat_p' => 'Савеловской',
            'metro_region_im_p' => 'Савеловская',
            'metro_region_rod_p' => 'Савеловской',
        ],
        'sviblovo' => [
            'ucode' => '%D1%81%D0%B2%D0%B8%D0%B1%D0%BB%D0%BE%D0%B2%D0%BE',
            'session_start' => 'sviblovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Свиблово',
            'metro_region_dat_p' => 'Свиблово',
            'metro_region_im_p' => 'Свиблово',
            'metro_region_rod_p' => 'Свиблово',
        ],
        'teletsentr' => [
            'ucode' => '%D1%82%D0%B5%D0%BB%D0%B5%D1%86%D0%B5%D0%BD%D1%82%D1%80',
            'session_start' => 'teletsentr',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Телецентре',
            'metro_region_dat_p' => 'Телецентру',
            'metro_region_im_p' => 'Телецентр',
            'metro_region_rod_p' => 'Телецентра',
        ],
        'ulitsa-akademika-koroleva' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D0%B0%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D0%BA%D0%B0-%D0%BA%D0%BE%D1%80%D0%BE%D0%BB%D0%B5%D0%B2%D0%B0',
            'session_start' => 'ulitsa-akademika-koroleva',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице академика Королева',
            'metro_region_dat_p' => 'Улице академика Королева',
            'metro_region_im_p' => 'Улица академика Королева',
            'metro_region_rod_p' => 'Улицы академика Королева',
        ],
        'ulitsa-milashenkova' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D0%BC%D0%B8%D0%BB%D0%B0%D1%88%D0%B5%D0%BD%D0%BA%D0%BE%D0%B2%D0%B0',
            'session_start' => 'ulitsa-milashenkova',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Милашенкова',
            'metro_region_dat_p' => 'Улице Милашенкова',
            'metro_region_im_p' => 'Улица Милашенкова',
            'metro_region_rod_p' => 'Улицы Милашенкова',
        ],
        'ulitsa-sergeya-ejzenshtejna' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D1%8F-%D1%8D%D0%B9%D0%B7%D0%B5%D0%BD%D1%88%D1%82%D0%B5%D0%B9%D0%BD%D0%B0',
            'session_start' => 'litsa-sergeya-ejzenshtejna',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Сергея Эйзенштейна',
            'metro_region_dat_p' => 'Улице Сергея Эйзенштейна',
            'metro_region_im_p' => 'Улица Сергея Эйзенштейна',
            'metro_region_rod_p' => 'Улицы Сергея Эйзенштейна',
        ],
        'fonvizinskaya' => [
            'ucode' => '%D1%84%D0%BE%D0%BD%D0%B2%D0%B8%D0%B7%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'fonvizinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Фонвизинской',
            'metro_region_dat_p' => 'Фонвизинской',
            'metro_region_im_p' => 'Фонвизинская',
            'metro_region_rod_p' => 'Фонвизинской',
        ],
        'andronovka' => [
            'ucode' => '%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0',
            'session_start' => 'andronovka',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Андроновке',
            'metro_region_dat_p' => 'Андроновке',
            'metro_region_im_p' => 'Андроновка',
            'metro_region_rod_p' => 'Андроновки',
        ],
        'belokamennaya' => [
            'ucode' => '%D0%B1%D0%B5%D0%BB%D0%BE%D0%BA%D0%B0%D0%BC%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F',
            'session_start' => 'belokamennaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Белокаменной',
            'metro_region_dat_p' => 'Белокаменной',
            'metro_region_im_p' => 'Белокаменная',
            'metro_region_rod_p' => 'Белокаменной',
        ],
        'bulvar-rokossovskogo' => [
            'ucode' => '%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80-%D1%80%D0%BE%D0%BA%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE',
            'session_start' => 'bulvar-rokossovskogo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бульваре Рокоссовского',
            'metro_region_dat_p' => 'Бульвару Рокоссовского',
            'metro_region_im_p' => 'Бульвар Рокоссовского',
            'metro_region_rod_p' => 'Бульвара Рокоссовского',
        ],
        'izmailovskaya' => [
            'ucode' => '%D0%B8%D0%B7%D0%BC%D0%B0%D0%B9%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'izmailovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Измайловской',
            'metro_region_dat_p' => 'Измайловской',
            'metro_region_im_p' => 'Измайловская',
            'metro_region_rod_p' => 'Измайловской',
        ],
        'lokomotiv' => [
            'ucode' => '%D0%BB%D0%BE%D0%BA%D0%BE%D0%BC%D0%BE%D1%82%D0%B8%D0%B2',
            'session_start' => 'lokomotiv',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Локомотиве',
            'metro_region_dat_p' => 'Локомотиву',
            'metro_region_im_p' => 'Локомотив',
            'metro_region_rod_p' => 'Локомотива',
        ],
        'novogireevo' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D0%B3%D0%B8%D1%80%D0%B5%D0%B5%D0%B2%D0%BE',
            'session_start' => 'novogireevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новогиреево',
            'metro_region_dat_p' => 'Новогиреево',
            'metro_region_im_p' => 'Новогиреево',
            'metro_region_rod_p' => 'Новогиреево',
        ],
        'novokosino' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D0%BA%D0%BE%D1%81%D0%B8%D0%BD%D0%BE',
            'session_start' => 'novokosino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новокосино',
            'metro_region_dat_p' => 'Новокосино',
            'metro_region_im_p' => 'Новокосино',
            'metro_region_rod_p' => 'Новокосино',
        ],
        'partizanskaya' => [
            'ucode' => '%D0%BF%D0%B0%D1%80%D1%82%D0%B8%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'partizanskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Партизанской',
            'metro_region_dat_p' => 'Партизанской',
            'metro_region_im_p' => 'Партизанская',
            'metro_region_rod_p' => 'Партизанской',
        ],
        'pervomaiskaya' => [
            'ucode' => '%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%BC%D0%B0%D0%B9%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'pervomaiskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Первомайской',
            'metro_region_dat_p' => 'Первомайской',
            'metro_region_im_p' => 'Первомайская',
            'metro_region_rod_p' => 'Первомайской',
        ],
        'perovo' => [
            'ucode' => '%D0%BF%D0%B5%D1%80%D0%BE%D0%B2%D0%BE',
            'session_start' => 'perovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Перово',
            'metro_region_dat_p' => 'Перово',
            'metro_region_im_p' => 'Перово',
            'metro_region_rod_p' => 'Перово',
        ],
        'preobrazhenskaya-poshchad' => [
            'ucode' => '%D0%BF%D1%80%D0%B5%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F-%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C',
            'session_start' => 'preobrazhenskaya-poshchad',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Преображенской площади',
            'metro_region_dat_p' => 'Преображенской площади',
            'metro_region_im_p' => 'Преображенская площадь',
            'metro_region_rod_p' => 'Преображенской площади',
        ],
        'semenovskaya' => [
            'ucode' => '%D1%81%D0%B5%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'semenovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Семеновской',
            'metro_region_dat_p' => 'Семеновской',
            'metro_region_im_p' => 'Семеновская',
            'metro_region_rod_p' => 'Семеновской',
        ],
        'sokolinaya-gora' => [
            'ucode' => '%D1%81%D0%BE%D0%BA%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0%D1%8F-%D0%B3%D0%BE%D1%80%D0%B0',
            'session_start' => 'sokolinaya-gora',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Соколиной Горе',
            'metro_region_dat_p' => 'Соколиной Горе',
            'metro_region_im_p' => 'Соколиная Гора',
            'metro_region_rod_p' => 'Соколиной Горе',
        ],
        'sokolniki' => [
            'ucode' => '%D1%81%D0%BE%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'sokolniki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Сокольниках',
            'metro_region_dat_p' => 'Сокольникам',
            'metro_region_im_p' => 'Сокольники',
            'metro_region_rod_p' => 'Сокольников',
        ],
        'cherkizovskaya' => [
            'ucode' => '%D1%87%D0%B5%D1%80%D0%BA%D0%B8%D0%B7%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'cherkizovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Черкизовской',
            'metro_region_dat_p' => 'Черкизовской',
            'metro_region_im_p' => 'Черкизовская',
            'metro_region_rod_p' => 'Черкизовской',
        ],
        'shosse-entuziastov' => [
            'ucode' => '%D1%88%D0%BE%D1%81%D1%81%D0%B5-%D1%8D%D0%BD%D1%82%D1%83%D0%B7%D0%B8%D0%B0%D1%81%D1%82%D0%BE%D0%B2',
            'session_start' => 'shosse-entuziastov',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Шоссе Энтузиастов',
            'metro_region_dat_p' => 'ЧШоссе Энтузиастов',
            'metro_region_im_p' => 'Шоссе Энтузиастов',
            'metro_region_rod_p' => 'Шоссе Энтузиастов',
        ],
        'shchelkovskaya' => [
            'ucode' => '%D1%89%D0%B5%D0%BB%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'shchelkovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Щелковской',
            'metro_region_dat_p' => 'Щелковской',
            'metro_region_im_p' => 'Щелковская',
            'metro_region_rod_p' => 'Щелковской',
        ],
        'elektrozavodskaya' => [
            'ucode' => '%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'elektrozavodskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Электрозаводской',
            'metro_region_dat_p' => 'Электрозаводской',
            'metro_region_im_p' => 'Электрозаводская',
            'metro_region_rod_p' => 'Электрозаводской',
        ],
        'aviamotornaya' => [
            'ucode' => '%D0%B0%D0%B2%D0%B8%D0%B0%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%BD%D0%B0%D1%8F',
            'session_start' => 'aviamotornaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Авиамоторной',
            'metro_region_dat_p' => 'Авиамоторной',
            'metro_region_im_p' => 'Авиамоторная',
            'metro_region_rod_p' => 'Авиамоторной',
        ],
        'bratislavskaya' => [
            'ucode' => '%D0%B1%D1%80%D0%B0%D1%82%D0%B8%D1%81%D0%BB%D0%B0%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'bratislavskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Братиславской',
            'metro_region_dat_p' => 'Братиславской',
            'metro_region_im_p' => 'Братиславская',
            'metro_region_rod_p' => 'Братиславской',
        ],
        'volgogradskij-prospekt' => [
            'ucode' => '%D0%B2%D0%BE%D0%BB%D0%B3%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'volgogradskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Волгоградском проспекте',
            'metro_region_dat_p' => 'Волгоградскому проспекту',
            'metro_region_im_p' => 'Волгоградский проспект',
            'metro_region_rod_p' => 'Волгоградского проспекта',
        ],
        'volzhskaya' => [
            'ucode' => '%D0%B2%D0%BE%D0%BB%D0%B6%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'volzhskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Волжской',
            'metro_region_dat_p' => 'Волжской',
            'metro_region_im_p' => 'Волжская',
            'metro_region_rod_p' => 'Волжской',
        ],
        'dubrovka' => [
            'ucode' => '%D0%B4%D1%83%D0%B1%D1%80%D0%BE%D0%B2%D0%BA%D0%B0',
            'session_start' => 'dubrovka',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Дубровке',
            'metro_region_dat_p' => 'Дубровке',
            'metro_region_im_p' => 'Дубровка',
            'metro_region_rod_p' => 'Дубровки',
        ],
        'zhulebino' => [
            'ucode' => '%D0%B6%D1%83%D0%BB%D0%B5%D0%B1%D0%B8%D0%BD%D0%BE',
            'session_start' => 'zhulebino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Жулебино',
            'metro_region_dat_p' => 'Жулебино',
            'metro_region_im_p' => 'Жулебино',
            'metro_region_rod_p' => 'Жулебино',
        ],
        'kozhuhovskaya' => [
            'ucode' => '%D0%BA%D0%BE%D0%B6%D1%83%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kozhuhovskaya',
            'region_cyti_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кожуховской',
            'metro_region_dat_p' => 'Кожуховской',
            'metro_region_im_p' => 'Кожуховская',
            'metro_region_rod_p' => 'Кожуховской',
        ],
        'kotelniki' => [
            'ucode' => '%D0%BA%D0%BE%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'kotelniki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Котельниках',
            'metro_region_dat_p' => 'Котельникам',
            'metro_region_im_p' => 'Котельники',
            'metro_region_rod_p' => 'Котельников',
        ],
        'kuzminki' => [
            'ucode' => '%D0%BA%D1%83%D0%B7%D1%8C%D0%BC%D0%B8%D0%BD%D0%BA%D0%B8',
            'session_start' => 'kuzminki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кузьминках',
            'metro_region_dat_p' => 'Кузьминкам',
            'metro_region_im_p' => 'Кузьминки',
            'metro_region_rod_p' => 'Кузьминок',
        ],
        'lermontovskij-prospekt' => [
            'ucode' => '%D0%BB%D0%B5%D1%80%D0%BC%D0%BE%D0%BD%D1%82%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'lermontovskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Лермонтовском проспекте',
            'metro_region_dat_p' => 'Лермонтовскому проспекту',
            'metro_region_im_p' => 'Лермонтовский проспект',
            'metro_region_rod_p' => 'Лермонтовского проспекта',
        ],
        'lublino' => [
            'ucode' => '%D0%BB%D1%8E%D0%B1%D0%BB%D0%B8%D0%BD%D0%BE',
            'session_start' => 'lublino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Люблино',
            'metro_region_dat_p' => 'Люблино',
            'metro_region_im_p' => 'Люблино',
            'metro_region_rod_p' => 'Люблино',
        ],
        'marino' => [
            'ucode' => '%D0%BC%D0%B0%D1%80%D1%8C%D0%B8%D0%BD%D0%BE',
            'session_start' => 'marino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Марьино',
            'metro_region_dat_p' => 'Марьино',
            'metro_region_im_p' => 'Марьино',
            'metro_region_rod_p' => 'Марьино',
        ],
        'nizhegorodskaya' => [
            'ucode' => '%D0%BD%D0%B8%D0%B6%D0%B5%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'nizhegorodskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Нижегородской',
            'metro_region_dat_p' => 'Нижегородской',
            'metro_region_im_p' => 'Нижегородская',
            'metro_region_rod_p' => 'Нижегородской',
        ],
        'novohohlovskaya' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D1%85%D0%BE%D1%85%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'novohohlovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новохохловской',
            'metro_region_dat_p' => 'Новохохловской',
            'metro_region_im_p' => 'Новохохловская',
            'metro_region_rod_p' => 'Новохохловской',
        ],
        'pechatniki' => [
            'ucode' => '%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'pechatniki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Печатниках',
            'metro_region_dat_p' => 'Печатникам',
            'metro_region_im_p' => 'Печатники',
            'metro_region_rod_p' => 'Печатников',
        ],
        'ryazanskij-prospekt' => [
            'ucode' => '%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'ryazanskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Рязанском проспекте',
            'metro_region_dat_p' => 'Рязанскому проспекту',
            'metro_region_im_p' => 'Рязанский проспект',
            'metro_region_rod_p' => 'Рязанского проспекта',
        ],
        'tekstilshchiki' => [
            'ucode' => '%D1%82%D0%B5%D0%BA%D1%81%D1%82%D0%B8%D0%BB%D1%8C%D1%89%D0%B8%D0%BA%D0%B8',
            'session_start' => 'tekstilshchiki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Текстильщиках',
            'metro_region_dat_p' => 'Текстильщикам',
            'metro_region_im_p' => 'Текстильщики',
            'metro_region_rod_p' => 'Текстильщиков',
        ],
        'ugreshskaya' => [
            'ucode' => '%D1%83%D0%B3%D1%80%D0%B5%D1%88%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'ugreshskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Угрешской',
            'metro_region_dat_p' => 'Угрешской',
            'metro_region_im_p' => 'Угрешская',
            'metro_region_rod_p' => 'Угрешской',
        ],
        'avtozavodskaya' => [
            'ucode' => '%D0%B0%D0%B2%D1%82%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'avtozavodskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Автозаводской',
            'metro_region_dat_p' => 'Автозаводской',
            'metro_region_im_p' => 'Автозаводская',
            'metro_region_rod_p' => 'Автозаводской',
        ],
        'alma-atinskaya' => [
            'ucode' => '%D0%B0%D0%BB%D0%BC%D0%B0-%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'alma-atinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Алма-Атинской',
            'metro_region_dat_p' => 'Алма-Атинской',
            'metro_region_im_p' => 'Алма-Атинская',
            'metro_region_rod_p' => 'Алма-Атинской',
        ],
        'annino' => [
            'ucode' => '%D0%B0%D0%BD%D0%BD%D0%B8%D0%BD%D0%BE',
            'session_start' => 'annino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Аннино',
            'metro_region_dat_p' => 'Аннино',
            'metro_region_im_p' => 'Аннино',
            'metro_region_rod_p' => 'Аннино',
        ],
        'borisovo' => [
            'ucode' => '%D0%B1%D0%BE%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%BE',
            'session_start' => 'borisovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Борисово',
            'metro_region_dat_p' => 'Борисово',
            'metro_region_im_p' => 'Борисово',
            'metro_region_rod_p' => 'Борисово',
        ],
        'varshavskaya' => [
            'ucode' => '%D0%B2%D0%B0%D1%80%D1%88%D0%B0%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'varshavskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Варшавской',
            'metro_region_dat_p' => 'Варшавской',
            'metro_region_im_p' => 'Варшавская',
            'metro_region_rod_p' => 'Варшавской',
        ],
        'verhnie-kotly' => [
            'ucode' => '%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%B8%D0%B5-%D0%BA%D0%BE%D1%82%D0%BB%D1%8B',
            'session_start' => 'verhnie-kotly',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Верхних Котлах',
            'metro_region_dat_p' => 'Верхним Котлам',
            'metro_region_im_p' => 'Верхние Котлы',
            'metro_region_rod_p' => 'Верхних Котлов',
        ],
        'domodedovskaya' => [
            'ucode' => '%D0%B4%D0%BE%D0%BC%D0%BE%D0%B4%D0%B5%D0%B4%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'domodedovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Домодедовской',
            'metro_region_dat_p' => 'Домодедовской',
            'metro_region_im_p' => 'Домодедовская',
            'metro_region_rod_p' => 'Домодедовской',
        ],
        'zil' => [
            'ucode' => '%D0%B7%D0%B8%D0%BB',
            'session_start' => 'zil',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'ЗИЛе',
            'metro_region_dat_p' => 'ЗИЛу',
            'metro_region_im_p' => 'ЗИЛ',
            'metro_region_rod_p' => 'ЗИЛа',
        ],
        'zyablikovo' => [
            'ucode' => '%D0%B7%D1%8F%D0%B1%D0%BB%D0%B8%D0%BA%D0%BE%D0%B2%D0%BE',
            'session_start' => 'zyablikovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Зябликово',
            'metro_region_dat_p' => 'Зябликово',
            'metro_region_im_p' => 'Зябликово',
            'metro_region_rod_p' => 'Зябликово',
        ],
        'kantemirovskaya' => [
            'ucode' => '%D0%BA%D0%B0%D0%BD%D1%82%D0%B5%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kantemirovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кантемировской',
            'metro_region_dat_p' => 'Кантемировской',
            'metro_region_im_p' => 'Кантемировская',
            'metro_region_rod_p' => 'Кантемировской',
        ],
        'kashirskaya' => [
            'ucode' => '%D0%BA%D0%B0%D1%88%D0%B8%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kashirskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Каширской',
            'metro_region_dat_p' => 'Каширской',
            'metro_region_im_p' => 'Каширская',
            'metro_region_rod_p' => 'Каширской',
        ],
        'kolomenskaya' => [
            'ucode' => '%D0%BA%D0%BE%D0%BB%D0%BE%D0%BC%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kolomenskayaa',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Коломенской',
            'metro_region_dat_p' => 'Коломенской',
            'metro_region_im_p' => 'Коломенская',
            'metro_region_rod_p' => 'Коломенской',
        ],
        'krasnogvardeiskaya' => [
            'ucode' => '%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B3%D0%B2%D0%B0%D1%80%D0%B4%D0%B5%D0%B9%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'krasnogvardeiskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Красногвардейской',
            'metro_region_dat_p' => 'Красногвардейской',
            'metro_region_im_p' => 'Красногвардейская',
            'metro_region_rod_p' => 'Красногвардейской',
        ],
        'krymskaya' => [
            'ucode' => '%D0%BA%D1%80%D1%8B%D0%BC%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'krymskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Крымской',
            'metro_region_dat_p' => 'Крымской',
            'metro_region_im_p' => 'Крымская',
            'metro_region_rod_p' => 'Крымской',
        ],
        'lesoparkovaya' => [
            'ucode' => '%D0%BB%D0%B5%D1%81%D0%BE%D0%BF%D0%B0%D1%80%D0%BA%D0%BE%D0%B2%D0%B0%D1%8F',
            'session_start' => 'lesoparkovaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Лесопарковой',
            'metro_region_dat_p' => 'Лесопарковой',
            'metro_region_im_p' => 'Лесопарковая',
            'metro_region_rod_p' => 'Лесопарковой',
        ],
        'nagatinskaya' => [
            'ucode' => '%D0%BD%D0%B0%D0%B3%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'nagatinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Нагатинской',
            'metro_region_dat_p' => 'Нагатинской',
            'metro_region_im_p' => 'Нагатинская',
            'metro_region_rod_p' => 'Нагатинской',
        ],
        'nagornaya' => [
            'ucode' => '%D0%BD%D0%B0%D0%B3%D0%BE%D1%80%D0%BD%D0%B0%D1%8F',
            'session_start' => 'nagornaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Нагорной',
            'metro_region_dat_p' => 'Нагорной',
            'metro_region_im_p' => 'Нагорная',
            'metro_region_rod_p' => 'Нагорной',
        ],
        'orehovo' => [
            'ucode' => '%D0%BE%D1%80%D0%B5%D1%85%D0%BE%D0%B2%D0%BE',
            'session_start' => 'orehovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Орехово',
            'metro_region_dat_p' => 'Орехово',
            'metro_region_im_p' => 'Орехово',
            'metro_region_rod_p' => 'Орехово',
        ],
        'prazhskaya' => [
            'ucode' => '%D0%BF%D1%80%D0%B0%D0%B6%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'prazhskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Пражской',
            'metro_region_dat_p' => 'Пражской',
            'metro_region_im_p' => 'Пражская',
            'metro_region_rod_p' => 'Пражской',
        ],
        'tulskaya' => [
            'ucode' => '%D1%82%D1%83%D0%BB%D1%8C%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'tulskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тульской',
            'metro_region_dat_p' => 'Тульской',
            'metro_region_im_p' => 'Тульская',
            'metro_region_rod_p' => 'Тульской',
        ],
        'ulitsa-akademika-yangelya' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D0%B0%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D0%BA%D0%B0-%D1%8F%D0%BD%D0%B3%D0%B5%D0%BB%D1%8F',
            'session_start' => 'ulitsa-akademika-yangelya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Академика Янгеля',
            'metro_region_dat_p' => 'Улице Академика Янгеля',
            'metro_region_im_p' => 'Улица Академика Янгеля',
            'metro_region_rod_p' => 'Улицы Академика Янгеля',
        ],
        'tsaritsyno' => [
            'ucode' => '%D1%86%D0%B0%D1%80%D0%B8%D1%86%D1%8B%D0%BD%D0%BE',
            'session_start' => 'tsaritsyno',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Царицыно',
            'metro_region_dat_p' => 'Царицыно',
            'metro_region_im_p' => 'Царицыно',
            'metro_region_rod_p' => 'Царицыно',
        ],
        'chertanovskaya' => [
            'ucode' => '%D1%87%D0%B5%D1%80%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'chertanovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Чертановской',
            'metro_region_dat_p' => 'Чертановской',
            'metro_region_im_p' => 'Чертановская',
            'metro_region_rod_p' => 'Чертановской',
        ],
        'shabolovskaya' => [
            'ucode' => '%D1%88%D0%B0%D0%B1%D0%BE%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'shabolovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Шаболовской',
            'metro_region_dat_p' => 'Шаболовской',
            'metro_region_im_p' => 'Шаболовская',
            'metro_region_rod_p' => 'Шаболовской',
        ],
        'shipilovskaya' => [
            'ucode' => '%D1%88%D0%B8%D0%BF%D0%B8%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'shipilovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Шипиловской',
            'metro_region_dat_p' => 'Шипиловской',
            'metro_region_im_p' => 'Шипиловская',
            'metro_region_rod_p' => 'Шипиловской',
        ],
        'uzhnaya' => [
            'ucode' => '%D1%8E%D0%B6%D0%BD%D0%B0%D1%8F',
            'session_start' => 'uzhnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Южной',
            'metro_region_dat_p' => 'Южной',
            'metro_region_im_p' => 'Южная',
            'metro_region_rod_p' => 'Южной',
        ],
        'akademicheskaya' => [
            'ucode' => '%D0%B0%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'akademicheskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Академической',
            'metro_region_dat_p' => 'Академической',
            'metro_region_im_p' => 'Академическая',
            'metro_region_rod_p' => 'Академической',
        ],
        'belyaevo' => [
            'ucode' => '%D0%B1%D0%B5%D0%BB%D1%8F%D0%B5%D0%B2%D0%BE',
            'session_start' => 'belyaevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Беляево',
            'metro_region_dat_p' => 'Беляево',
            'metro_region_im_p' => 'Беляево',
            'metro_region_rod_p' => 'Беляево',
        ],
        'bitcevskij-park' => [
            'ucode' => '%D0%B1%D0%B8%D1%82%D1%86%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA',
            'session_start' => 'bitcevskij-park',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Битцевском парке',
            'metro_region_dat_p' => 'Битцевскому парку',
            'metro_region_im_p' => 'Битцевский парк',
            'metro_region_rod_p' => 'Битцевского парка',
        ],
        'bulvar-admirala-ushakova' => [
            'ucode' => '%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80-%D0%B0%D0%B4%D0%BC%D0%B8%D1%80%D0%B0%D0%BB%D0%B0-%D1%83%D1%88%D0%B0%D0%BA%D0%BE%D0%B2%D0%B0',
            'session_start' => 'bulvar-admirala-ushakova',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бульваре Адмирала Ушакова',
            'metro_region_dat_p' => 'Бульвару Адмирала Ушакова',
            'metro_region_im_p' => 'Бульвар Адмирала Ушакова',
            'metro_region_rod_p' => 'Бульвара Адмирала Ушакова',
        ],
        'belyaevo' => [
            'ucode' => '%D0%B1%D0%B5%D0%BB%D1%8F%D0%B5%D0%B2%D0%BE',
            'session_start' => 'belyaevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Беляево',
            'metro_region_dat_p' => 'Беляево',
            'metro_region_im_p' => 'Беляево',
            'metro_region_rod_p' => 'Беляево',
        ],
        'bulvar-dmitriya-donskogo' => [
            'ucode' => '%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80-%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D1%8F-%D0%B4%D0%BE%D0%BD%D1%81%D0%BA%D0%BE%D0%B3%D0%BE',
            'session_start' => 'bulvar-dmitriya-donskogo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бульваре Дмитрия Донского',
            'metro_region_dat_p' => 'Бульвару Дмитрия Донского',
            'metro_region_im_p' => 'Бульвар Дмитрия Донского',
            'metro_region_rod_p' => 'Бульвара Дмитрия Донского',
        ],
        'buninskaya-alleya' => [
            'ucode' => '%D0%B1%D1%83%D0%BD%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F-%D0%B0%D0%BB%D0%BB%D0%B5%D1%8F',
            'session_start' => 'buninskaya-alleya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бунинской аллее',
            'metro_region_dat_p' => 'Бунинской аллее',
            'metro_region_im_p' => 'Бунинская аллея',
            'metro_region_rod_p' => 'Бунинской аллеи',
        ],
        'vorobevy-gory' => [
            'ucode' => '%D0%B2%D0%BE%D1%80%D0%BE%D0%B1%D1%8C%D0%B5%D0%B2%D1%8B-%D0%B3%D0%BE%D1%80%D1%8B',
            'session_start' => 'vorobevy-gory',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Воробьевых горах',
            'metro_region_dat_p' => 'Воробьевым горам',
            'metro_region_im_p' => 'Воробьевы горы',
            'metro_region_rod_p' => 'Воробьевых гор',
        ],
        'kaluzhskaya' => [
            'ucode' => '%D0%BA%D0%B0%D0%BB%D1%83%D0%B6%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kaluzhskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Калужской',
            'metro_region_dat_p' => 'Калужской',
            'metro_region_im_p' => 'Калужская',
            'metro_region_rod_p' => 'Калужской',
        ],
        'kahovskaya' => [
            'ucode' => '%D0%BA%D0%B0%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kahovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Каховской',
            'metro_region_dat_p' => 'Каховской',
            'metro_region_im_p' => 'Каховская',
            'metro_region_rod_p' => 'Каховской',
        ],
        'konkovo' => [
            'ucode' => '%D0%BA%D0%BE%D0%BD%D1%8C%D0%BA%D0%BE%D0%B2%D0%BE',
            'session_start' => 'konkovo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Коньково',
            'metro_region_dat_p' => 'Коньково',
            'metro_region_im_p' => 'Коньково',
            'metro_region_rod_p' => 'Коньково',
        ],
        'leninskij-prospekt' => [
            'ucode' => '%D0%BB%D0%B5%D0%BD%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'leninskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ленинском проспекте',
            'metro_region_dat_p' => 'Ленинскому проспекту',
            'metro_region_im_p' => 'Ленинский проспект',
            'metro_region_rod_p' => 'Ленинского проспекта',
        ],
        'lomonosovskij-prospekto' => [
            'ucode' => '%D0%BB%D0%BE%D0%BC%D0%BE%D0%BD%D0%BE%D1%81%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'lomonosovskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ломоносовском проспекте',
            'metro_region_dat_p' => 'Ломоносовскому проспекту',
            'metro_region_im_p' => 'Ломоносовский проспект',
            'metro_region_rod_p' => 'Ломоносовского проспекта',
        ],
        'nahimovskij-prospekt' => [
            'ucode' => '%D0%BD%D0%B0%D1%85%D0%B8%D0%BC%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82',
            'session_start' => 'nahimovskij-prospekt',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Нахимовском проспекте',
            'metro_region_dat_p' => 'Нахимовскому проспекту',
            'metro_region_im_p' => 'Нахимовский проспект',
            'metro_region_rod_p' => 'Нахимовского проспекта',
        ],
        'novoyasenevskaya' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D1%8F%D1%81%D0%B5%D0%BD%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'novoyasenevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новоясеневской',
            'metro_region_dat_p' => 'Новоясеневской',
            'metro_region_im_p' => 'Новоясеневская',
            'metro_region_rod_p' => 'Новоясеневской',
        ],
        'novye-cheremushki' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D1%8B%D0%B5-%D1%87%D0%B5%D1%80%D0%B5%D0%BC%D1%83%D1%88%D0%BA%D0%B8',
            'session_start' => 'novye-cheremushki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новых Черемушках',
            'metro_region_dat_p' => 'Новым Черемушкам',
            'metro_region_im_p' => 'Новые Черемушки',
            'metro_region_rod_p' => 'Новых Черемушек',
        ],
        'ploshchad-gagarina' => [
            'ucode' => '%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C-%D0%B3%D0%B0%D0%B3%D0%B0%D1%80%D0%B8%D0%BD%D0%B0',
            'session_start' => 'ploshchad-gagarina',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Площади Гагарина',
            'metro_region_dat_p' => 'Площади Гагарина',
            'metro_region_im_p' => 'Площадь Гагарина',
            'metro_region_rod_p' => 'Площади Гагарина',
        ],
        'profsoyuznaya' => [
            'ucode' => '%D0%BF%D1%80%D0%BE%D1%84%D1%81%D0%BE%D1%8E%D0%B7%D0%BD%D0%B0%D1%8F',
            'session_start' => 'profsoyuznaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Профсоюзной',
            'metro_region_dat_p' => 'Профсоюзной',
            'metro_region_im_p' => 'Профсоюзная',
            'metro_region_rod_p' => 'Профсоюзной',
        ],
        'sevastopolskaya' => [
            'ucode' => '%D1%81%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'sevastopolskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Севастопольской',
            'metro_region_dat_p' => 'Севастопольской',
            'metro_region_im_p' => 'Севастопольская',
            'metro_region_rod_p' => 'Севастопольской',
        ],
        'teplyj-stan' => [
            'ucode' => '%D1%82%D0%B5%D0%BF%D0%BB%D1%8B%D0%B9-%D1%81%D1%82%D0%B0%D0%BD',
            'session_start' => 'teplyj-stan',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Теплом Стане',
            'metro_region_dat_p' => 'Теплому Стану',
            'metro_region_im_p' => 'Теплый Стан',
            'metro_region_rod_p' => 'Теплого Стана',
        ],
        'troparevo' => [
            'ucode' => '%D1%82%D1%80%D0%BE%D0%BF%D0%B0%D1%80%D0%B5%D0%B2%D0%BE',
            'session_start' => 'troparevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тропарево',
            'metro_region_dat_p' => 'Тропарево',
            'metro_region_im_p' => 'Тропарево',
            'metro_region_rod_p' => 'Тропарево',
        ],
        'ulitsa-gorchakova' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D0%B3%D0%BE%D1%80%D1%87%D0%B0%D0%BA%D0%BE%D0%B2%D0%B0',
            'session_start' => 'ulitsa-gorchakova',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Горчакова',
            'metro_region_dat_p' => 'Улице Горчакова',
            'metro_region_im_p' => 'Улица Горчакова',
            'metro_region_rod_p' => 'Улицы Горчакова',
        ],
        'ulitsa-skobelevskaya' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D1%81%D0%BA%D0%BE%D0%B1%D0%B5%D0%BB%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'ulitsa-skobelevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Скобелевской',
            'metro_region_dat_p' => 'Улице Скобелевской',
            'metro_region_im_p' => 'Улица Скобелевская',
            'metro_region_rod_p' => 'Улицы Скобелевской',
        ],
        'ulitsa-starokochalovskaya' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-%D1%81%D1%82%D0%B0%D1%80%D0%BE%D0%BA%D0%BE%D1%87%D0%B0%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'ulitsa-starokochalovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице Старокочаловской',
            'metro_region_dat_p' => 'Улице Старокочаловской',
            'metro_region_im_p' => 'Улица Старокочаловская',
            'metro_region_rod_p' => 'Улицы Старокочаловской',
        ],
        'universitet' => [
            'ucode' => '%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82',
            'session_start' => 'universitet',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Университете',
            'metro_region_dat_p' => 'Университету',
            'metro_region_im_p' => 'Университет',
            'metro_region_rod_p' => 'Университета',
        ],
        'yasenevo' => [
            'ucode' => '%D1%8F%D1%81%D0%B5%D0%BD%D0%B5%D0%B2%D0%BE',
            'session_start' => 'yasenevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Ясенево',
            'metro_region_dat_p' => 'Ясенево',
            'metro_region_im_p' => 'Ясенево',
            'metro_region_rod_p' => 'Ясенево',
        ],
        'bagrationovskaya' => [
            'ucode' => '%D0%B1%D0%B0%D0%B3%D1%80%D0%B0%D1%82%D0%B8%D0%BE%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'bagrationovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Багратионовской',
            'metro_region_dat_p' => 'Багратионовской',
            'metro_region_im_p' => 'Багратионовская',
            'metro_region_rod_p' => 'Багратионовской',
        ],
        'kievskaya' => [
            'ucode' => '%D0%BA%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kievskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Киевской',
            'metro_region_dat_p' => 'Киевской',
            'metro_region_im_p' => 'Киевская',
            'metro_region_rod_p' => 'Киевской',
        ],
        'krylatskoe' => [
            'ucode' => '%D0%BA%D1%80%D1%8B%D0%BB%D0%B0%D1%82%D1%81%D0%BA%D0%BE%D0%B5',
            'session_start' => 'krylatskoe',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Крылатском',
            'metro_region_dat_p' => 'Крылатскому',
            'metro_region_im_p' => 'Крылатское',
            'metro_region_rod_p' => 'Крылатского',
        ],
        'kuntsevskaya' => [
            'ucode' => '%D0%BA%D1%83%D0%BD%D1%86%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kuntsevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кунцевской',
            'metro_region_dat_p' => 'Кунцевской',
            'metro_region_im_p' => 'Кунцевская',
            'metro_region_rod_p' => 'Кунцевской',
        ],
        'kutuzovskaya' => [
            'ucode' => '%D0%BA%D1%83%D1%82%D1%83%D0%B7%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kutuzovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кутузовской',
            'metro_region_dat_p' => 'Кутузовской',
            'metro_region_im_p' => 'Кутузовская',
            'metro_region_rod_p' => 'Кутузовской',
        ],
        'minskaya' => [
            'ucode' => '%D0%BC%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'minskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Минской',
            'metro_region_dat_p' => 'Минской',
            'metro_region_im_p' => 'Минская',
            'metro_region_rod_p' => 'Минской',
        ],
        'molodezhnaya' => [
            'ucode' => '%D0%BC%D0%BE%D0%BB%D0%BE%D0%B4%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F',
            'session_start' => 'molodezhnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Молодежной',
            'metro_region_dat_p' => 'Молодежной',
            'metro_region_im_p' => 'Молодежная',
            'metro_region_rod_p' => 'Молодежной',
        ],
        'park-pobedy' => [
            'ucode' => '%D0%BF%D0%B0%D1%80%D0%BA-%D0%BF%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B',
            'session_start' => 'park-pobedy',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Парке Победы',
            'metro_region_dat_p' => 'Парку Победы',
            'metro_region_im_p' => 'Парк Победы',
            'metro_region_rod_p' => 'Парка Победы',
        ],
        'pionerskaya' => [
            'ucode' => '%D0%BF%D0%B8%D0%BE%D0%BD%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'pionerskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Пионерской',
            'metro_region_dat_p' => 'Пионерской',
            'metro_region_im_p' => 'Пионерская',
            'metro_region_rod_p' => 'Пионерской',
        ],
        'prospekt-vernadskogo' => [
            'ucode' => '%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82-%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D0%B4%D1%81%D0%BA%D0%BE%D0%B3%D0%BE',
            'session_start' => 'prospekt-vernadskogo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Проспекта Вернадского',
            'metro_region_dat_p' => 'Проспекту Вернадского',
            'metro_region_im_p' => 'Проспект Вернадского',
            'metro_region_rod_p' => 'Проспекта Вернадского',
        ],
        'ramenki' => [
            'ucode' => '%D1%80%D0%B0%D0%BC%D0%B5%D0%BD%D0%BA%D0%B8',
            'session_start' => 'ramenki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Раменках',
            'metro_region_dat_p' => 'Раменкам',
            'metro_region_im_p' => 'Раменки',
            'metro_region_rod_p' => 'Раменок',
        ],
        'slavyanskij-bulvar' => [
            'ucode' => '%D1%81%D0%BB%D0%B0%D0%B2%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80',
            'session_start' => 'slavyanskij-bulvar',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Славянском бульваре',
            'metro_region_dat_p' => 'Славянскому бульвару',
            'metro_region_im_p' => 'Славянский бульвар',
            'metro_region_rod_p' => 'Славянского бульвара',
        ],
        'studencheskaya' => [
            'ucode' => '%D1%81%D1%82%D1%83%D0%B4%D0%B5%D0%BD%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'studencheskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Студенческой',
            'metro_region_dat_p' => 'Студенческой',
            'metro_region_im_p' => 'Студенческая',
            'metro_region_rod_p' => 'Студенческой',
        ],
        'filevskij-park' => [
            'ucode' => '%D1%84%D0%B8%D0%BB%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA',
            'session_start' => 'filevskij-park',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Филевском парке',
            'metro_region_dat_p' => 'Филевскому парку',
            'metro_region_im_p' => 'Филевский парк',
            'metro_region_rod_p' => 'Филевского парка',
        ],
        'fili' => [
            'ucode' => '%D1%84%D0%B8%D0%BB%D0%B8',
            'session_start' => 'fili',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Филях',
            'metro_region_dat_p' => 'Филям',
            'metro_region_im_p' => 'Фили',
            'metro_region_rod_p' => 'Филей',
        ],
        'ugo-zapadnaya' => [
            'ucode' => '%D1%8E%D0%B3%D0%BE-%D0%B7%D0%B0%D0%BF%D0%B0%D0%B4%D0%BD%D0%B0%D1%8F',
            'session_start' => 'ugo-zapadnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Юго-Западной',
            'metro_region_dat_p' => 'Юго-Западной',
            'metro_region_im_p' => 'Юго-Западная',
            'metro_region_rod_p' => 'Юго-Западной',
        ],
        'volokolamskaya' => [
            'ucode' => '%D0%B2%D0%BE%D0%BB%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%D0%BC%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'volokolamskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Волоколамской',
            'metro_region_dat_p' => 'Волоколамской',
            'metro_region_im_p' => 'Волоколамская',
            'metro_region_rod_p' => 'Волоколамской',
        ],
        'mitino' => [
            'ucode' => '%D0%BC%D0%B8%D1%82%D0%B8%D0%BD%D0%BE',
            'session_start' => 'mitino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Митино',
            'metro_region_dat_p' => 'Митино',
            'metro_region_im_p' => 'Митино',
            'metro_region_rod_p' => 'Митино',
        ],
        'oktyabrskoe-pole' => [
            'ucode' => '%D0%BE%D0%BA%D1%82%D1%8F%D0%B1%D1%80%D1%8C%D1%81%D0%BA%D0%BE%D0%B5-%D0%BF%D0%BE%D0%BB%D0%B5',
            'session_start' => 'oktyabrskoe-pole',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Октябрьском поле',
            'metro_region_dat_p' => 'Октябрьскому полю',
            'metro_region_im_p' => 'Октябрьское поле',
            'metro_region_rod_p' => 'Октябрьского поля',
        ],
        'panfilovskaya' => [
            'ucode' => '%D0%BF%D0%B0%D0%BD%D1%84%D0%B8%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'panfilovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Панфиловской',
            'metro_region_dat_p' => 'Панфиловской',
            'metro_region_im_p' => 'Панфиловская',
            'metro_region_rod_p' => 'Панфиловской',
        ],
        'planernaya' => [
            'ucode' => '%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%80%D0%BD%D0%B0%D1%8F',
            'session_start' => 'planernaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Планерной',
            'metro_region_dat_p' => 'Планерной',
            'metro_region_im_p' => 'Планерная',
            'metro_region_rod_p' => 'Планерной',
        ],
        'pyatnitskoe-shosse' => [
            'ucode' => '%D0%BF%D1%8F%D1%82%D0%BD%D0%B8%D1%86%D0%BA%D0%BE%D0%B5-%D1%88%D0%BE%D1%81%D1%81%D0%B5',
            'session_start' => 'pyatnitskoe-shosse',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Пятницком шоссе',
            'metro_region_dat_p' => 'Пятницкому шоссе',
            'metro_region_im_p' => 'Пятницкое шоссе',
            'metro_region_rod_p' => 'Пятницкого шоссе',
        ],
        'spartak' => [
            'ucode' => '%D1%81%D0%BF%D0%B0%D1%80%D1%82%D0%B0%D0%BA',
            'session_start' => 'spartak',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Спартаке',
            'metro_region_dat_p' => 'Спартаку',
            'metro_region_im_p' => 'Спартак',
            'metro_region_rod_p' => 'Спартака',
        ],
        'streshnevo' => [
            'ucode' => '%D1%81%D1%82%D1%80%D0%B5%D1%88%D0%BD%D0%B5%D0%B2%D0%BE',
            'session_start' => 'streshnevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Стрешнево',
            'metro_region_dat_p' => 'Стрешнево',
            'metro_region_im_p' => 'Стрешнево',
            'metro_region_rod_p' => 'Стрешнево',
        ],
        'strogino' => [
            'ucode' => '%D1%81%D1%82%D1%80%D0%BE%D0%B3%D0%B8%D0%BD%D0%BE',
            'session_start' => 'strogino',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Строгино',
            'metro_region_dat_p' => 'Строгино',
            'metro_region_im_p' => 'Строгино',
            'metro_region_rod_p' => 'Строгино',
        ],
        'shodnenskaya' => [
            'ucode' => '%D1%81%D1%85%D0%BE%D0%B4%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'shodnenskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Сходненской',
            'metro_region_dat_p' => 'Сходненской',
            'metro_region_im_p' => 'Сходненская',
            'metro_region_rod_p' => 'Сходненской',
        ],
        'tushinskaya' => [
            'ucode' => '%D1%82%D1%83%D1%88%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'tushinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тушинской',
            'metro_region_dat_p' => 'Тушинской',
            'metro_region_im_p' => 'Тушинская',
            'metro_region_rod_p' => 'Тушинской',
        ],
        'shchukinskaya' => [
            'ucode' => '%D1%89%D1%83%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'shchukinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Щукинской',
            'metro_region_dat_p' => 'Щукинской',
            'metro_region_im_p' => 'Щукинская',
            'metro_region_rod_p' => 'Щукинской',
        ],
        'aleksandrovskij-sad' => [
            'ucode' => '%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D1%81%D0%B0%D0%B4',
            'session_start' => 'aleksandrovskij-sad',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Александровском саде',
            'metro_region_dat_p' => 'Александровскому саду',
            'metro_region_im_p' => 'Александровский сад',
            'metro_region_rod_p' => 'Александровскогр сада',
        ],
        'arbatskaya' => [
            'ucode' => '%D0%B0%D1%80%D0%B1%D0%B0%D1%82%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'arbatskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Арбатской',
            'metro_region_dat_p' => 'Арбатской',
            'metro_region_im_p' => 'Арбатская',
            'metro_region_rod_p' => 'Арбатской',
        ],
        'barrikadnaya' => [
            'ucode' => '%D0%B1%D0%B0%D1%80%D1%80%D0%B8%D0%BA%D0%B0%D0%B4%D0%BD%D0%B0%D1%8F',
            'session_start' => 'barrikadnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Баррикадной',
            'metro_region_dat_p' => 'Баррикадной',
            'metro_region_im_p' => 'Баррикадная',
            'metro_region_rod_p' => 'Баррикадной',
        ],
        'baumanskaya' => [
            'ucode' => '%D0%B1%D0%B0%D1%83%D0%BC%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'baumanskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Бауманской',
            'metro_region_dat_p' => 'Бауманской',
            'metro_region_im_p' => 'Бауманская',
            'metro_region_rod_p' => 'Бауманской',
        ],
        'belorusskaya' => [
            'ucode' => '%D0%B1%D0%B5%D0%BB%D0%BE%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'belorusskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Белорусской',
            'metro_region_dat_p' => 'Белорусской',
            'metro_region_im_p' => 'Белорусская',
            'metro_region_rod_p' => 'Белорусской',
        ],
        'biblioteka-imeni-lenina' => [
            'ucode' => '%D0%B1%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0-%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-%D0%BB%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0',
            'session_start' => 'biblioteka-imeni-lenina',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Библиотеке имени Ленина',
            'metro_region_dat_p' => 'Библиотеке имени Ленина',
            'metro_region_im_p' => 'Библиотека имени Ленина',
            'metro_region_rod_p' => 'Библиотеки имени Ленина',
        ],
        'borovitskaya' => [
            'ucode' => '%D0%B1%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%86%D0%BA%D0%B0%D1%8F',
            'session_start' => 'borovitskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Боровицкой',
            'metro_region_dat_p' => 'Боровицкой',
            'metro_region_im_p' => 'Боровицкая',
            'metro_region_rod_p' => 'Боровицкой',
        ],
        'vystavochnaya' => [
            'ucode' => '%D0%B2%D1%8B%D1%81%D1%82%D0%B0%D0%B2%D0%BE%D1%87%D0%BD%D0%B0%D1%8F',
            'session_start' => 'vystavochnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Выставочной',
            'metro_region_dat_p' => 'Выставочной',
            'metro_region_im_p' => 'Выставочная',
            'metro_region_rod_p' => 'Выставочной',
        ],
        'delovoj-tsentr' => [
            'ucode' => '%D0%B4%D0%B5%D0%BB%D0%BE%D0%B2%D0%BE%D0%B9-%D1%86%D0%B5%D0%BD%D1%82%D1%80',
            'session_start' => 'delovoj-tsentr',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Деловом центре',
            'metro_region_dat_p' => 'Деловому центру',
            'metro_region_im_p' => 'Деловой центр',
            'metro_region_rod_p' => 'Делового центра',
        ],
        'dobryninskaya' => [
            'ucode' => '%D0%B4%D0%BE%D0%B1%D1%80%D1%8B%D0%BD%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'dobryninskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Добрынинской',
            'metro_region_dat_p' => 'Добрынинской',
            'metro_region_im_p' => 'Добрынинская',
            'metro_region_rod_p' => 'Добрынинской',
        ],
        'dostoevskaya' => [
            'ucode' => '%D0%B4%D0%BE%D1%81%D1%82%D0%BE%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'dostoevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Достоевской',
            'metro_region_dat_p' => 'Достоевской',
            'metro_region_im_p' => 'Достоевская',
            'metro_region_rod_p' => 'Достоевской',
        ],
        'kitai-gorod' => [
            'ucode' => '%D0%BA%D0%B8%D1%82%D0%B0%D0%B9-%D0%B3%D0%BE%D1%80%D0%BE%D0%B4',
            'session_start' => 'kitai-gorod',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Китай-городе',
            'metro_region_dat_p' => 'Китай-городу',
            'metro_region_im_p' => 'Китай-город',
            'metro_region_rod_p' => 'Китай-города',
        ],
        'komsomolskaya' => [
            'ucode' => '%D0%BA%D0%BE%D0%BC%D1%81%D0%BE%D0%BC%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'komsomolskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Комсомольской',
            'metro_region_dat_p' => 'Комсомольской',
            'metro_region_im_p' => 'Комсомольская',
            'metro_region_rod_p' => 'Комсомольской',
        ],
        'krasnopresnenskaya' => [
            'ucode' => '%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%BF%D1%80%D0%B5%D1%81%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'krasnopresnenskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Краснопресненской',
            'metro_region_dat_p' => 'Краснопресненской',
            'metro_region_im_p' => 'Краснопресненская',
            'metro_region_rod_p' => 'Краснопресненской',
        ],
        'krasnoselskaya' => [
            'ucode' => '%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'krasnoselskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Красносельской',
            'metro_region_dat_p' => 'Красносельской',
            'metro_region_im_p' => 'Красносельская',
            'metro_region_rod_p' => 'Красносельской',
        ],
        'krasnye-vorota' => [
            'ucode' => '%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B5-%D0%B2%D0%BE%D1%80%D0%BE%D1%82%D0%B0',
            'session_start' => 'krasnye-vorota',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Красных воротах',
            'metro_region_dat_p' => 'Красным воротам',
            'metro_region_im_p' => 'Красные ворота',
            'metro_region_rod_p' => 'Красных ворот',
        ],
        'krestyanskaya-zastava' => [
            'ucode' => '%D0%BA%D1%80%D0%B5%D1%81%D1%82%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F-%D0%B7%D0%B0%D1%81%D1%82%D0%B0%D0%B2%D0%B0',
            'session_start' => 'krestyanskaya-zastava',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Крестьянской заставе',
            'metro_region_dat_p' => 'Крестьянской заставе',
            'metro_region_im_p' => 'Крестьянская застава',
            'metro_region_rod_p' => 'Крестьянской заставы',
        ],
        'kropotkinskaya' => [
            'ucode' => '%D0%BA%D1%80%D0%BE%D0%BF%D0%BE%D1%82%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kropotkinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кропоткинской',
            'metro_region_dat_p' => 'Кропоткинской',
            'metro_region_im_p' => 'Кропоткинская',
            'metro_region_rod_p' => 'Кропоткинской',
        ],
        'kuznetskij-most' => [
            'ucode' => '%D0%BA%D1%83%D0%B7%D0%BD%D0%B5%D1%86%D0%BA%D0%B8%D0%B9-%D0%BC%D0%BE%D1%81%D1%82',
            'session_start' => 'kuznetskij-most',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Кузнецком мосте',
            'metro_region_dat_p' => 'Кузнецкому мосту',
            'metro_region_im_p' => 'Кузнецкий мост',
            'metro_region_rod_p' => 'Кузнецкого моста',
        ],
        'kurskaya' => [
            'ucode' => '%D0%BA%D1%83%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'kurskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Курской',
            'metro_region_dat_p' => 'Курской',
            'metro_region_im_p' => 'Курская',
            'metro_region_rod_p' => 'Курской',
        ],
        'lubyanka' => [
            'ucode' => '%D0%BB%D1%83%D0%B1%D1%8F%D0%BD%D0%BA%D0%B0',
            'session_start' => 'lubyanka',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Лубянке',
            'metro_region_dat_p' => 'Лубянке',
            'metro_region_im_p' => 'Лубянка',
            'metro_region_rod_p' => 'Лубянки',
        ],
        'luzhniki' => [
            'ucode' => '%D0%BB%D1%83%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8',
            'session_start' => 'luzhniki',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Лужниках',
            'metro_region_dat_p' => 'Лужникам',
            'metro_region_im_p' => 'Лужники',
            'metro_region_rod_p' => 'Лужников',
        ],
        'marksistskaya' => [
            'ucode' => '%D0%BC%D0%B0%D1%80%D0%BA%D1%81%D0%B8%D1%81%D1%82%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'marksistskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Марксистской',
            'metro_region_dat_p' => 'Марксистской',
            'metro_region_im_p' => 'Марксистская',
            'metro_region_rod_p' => 'Марксистской',
        ],
        'mayakovskaya' => [
            'ucode' => '%D0%BC%D0%B0%D1%8F%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'mayakovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Маяковской',
            'metro_region_dat_p' => 'Маяковской',
            'metro_region_im_p' => 'Маяковская',
            'metro_region_rod_p' => 'Маяковской',
        ],
        'mezhdunarodnaya' => [
            'ucode' => '%D0%BC%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D0%B0%D1%8F',
            'session_start' => 'mezhdunarodnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Международной',
            'metro_region_dat_p' => 'Международной',
            'metro_region_im_p' => 'Международная',
            'metro_region_rod_p' => 'Международной',
        ],
        'mendeleevskaya' => [
            'ucode' => '%D0%BC%D0%B5%D0%BD%D0%B4%D0%B5%D0%BB%D0%B5%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'mendeleevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Менделеевской',
            'metro_region_dat_p' => 'Менделеевской',
            'metro_region_im_p' => 'Менделеевская',
            'metro_region_rod_p' => 'Менделеевской',
        ],
        'novokuznetskaya' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D0%BA%D1%83%D0%B7%D0%BD%D0%B5%D1%86%D0%BA%D0%B0%D1%8F',
            'session_start' => 'novokuznetskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новокузнецкой',
            'metro_region_dat_p' => 'Новокузнецкой',
            'metro_region_im_p' => 'Новокузнецкая',
            'metro_region_rod_p' => 'Новокузнецкой',
        ],
        'novoslobodskaya' => [
            'ucode' => '%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D0%BB%D0%BE%D0%B1%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'novoslobodskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Новослободской',
            'metro_region_dat_p' => 'Новослободской',
            'metro_region_im_p' => 'Новослободская',
            'metro_region_rod_p' => 'Новослободской',
        ],
        'oktyabrskaya' => [
            'ucode' => '%D0%BE%D0%BA%D1%82%D1%8F%D0%B1%D1%80%D1%8C%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'oktyabrskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Октябрьской',
            'metro_region_dat_p' => 'Октябрьской',
            'metro_region_im_p' => 'Октябрьская',
            'metro_region_rod_p' => 'Октябрьской',
        ],
        'ohotnyj-ryad' => [
            'ucode' => '%D0%BE%D1%85%D0%BE%D1%82%D0%BD%D1%8B%D0%B9-%D1%80%D1%8F%D0%B4',
            'session_start' => 'ohotnyj-ryad',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Охотном Ряде',
            'metro_region_dat_p' => 'Охотному Ряду',
            'metro_region_im_p' => 'Охотный Ряд',
            'metro_region_rod_p' => 'Охотного Ряда',
        ],
        'paveletskaya' => [
            'ucode' => '%D0%BF%D0%B0%D0%B2%D0%B5%D0%BB%D0%B5%D1%86%D0%BA%D0%B0%D1%8F',
            'session_start' => 'paveletskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Павелецкой',
            'metro_region_dat_p' => 'Павелецкой',
            'metro_region_im_p' => 'Павелецкая',
            'metro_region_rod_p' => 'Павелецкой',
        ],
        'park-kultury' => [
            'ucode' => '%D0%BF%D0%B0%D1%80%D0%BA-%D0%BA%D1%83%D0%BB%D1%8C%D1%82%D1%83%D1%80%D1%8B',
            'session_start' => 'park-kultury',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Парке культуры',
            'metro_region_dat_p' => 'Парку культуры',
            'metro_region_im_p' => 'Парк культуры',
            'metro_region_rod_p' => 'Парка культуры',
        ],
        'ploshchad-ilicha' => [
            'ucode' => '%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C-%D0%B8%D0%BB%D1%8C%D0%B8%D1%87%D0%B0',
            'session_start' => 'ploshchad-ilicha',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Площади Ильича',
            'metro_region_dat_p' => 'Площади Ильича',
            'metro_region_im_p' => 'Площадь Ильича',
            'metro_region_rod_p' => 'Площади Ильича',
        ],
        'ploshchad-revolutsii' => [
            'ucode' => '%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C-%D1%80%D0%B5%D0%B2%D0%BE%D0%BB%D1%8E%D1%86%D0%B8%D0%B8',
            'session_start' => 'ploshchad-revolutsii',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Площади Революции',
            'metro_region_dat_p' => 'Площади Революции',
            'metro_region_im_p' => 'Площадь Революции',
            'metro_region_rod_p' => 'Площади Революции',
        ],
        'polyanka' => [
            'ucode' => '%D0%BF%D0%BE%D0%BB%D1%8F%D0%BD%D0%BA%D0%B0',
            'session_start' => 'polyanka',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Полянке',
            'metro_region_dat_p' => 'Полянке',
            'metro_region_im_p' => 'Полянка',
            'metro_region_rod_p' => 'Полянки',
        ],
        'proletarskaya' => [
            'ucode' => '%D0%BF%D1%80%D0%BE%D0%BB%D0%B5%D1%82%D0%B0%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'proletarskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Пролетарской',
            'metro_region_dat_p' => 'Пролетарской',
            'metro_region_im_p' => 'Пролетарская',
            'metro_region_rod_p' => 'Пролетарской',
        ],
        'prospekt-mira' => [
            'ucode' => '%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82-%D0%BC%D0%B8%D1%80%D0%B0',
            'session_start' => 'prospekt-mira',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Проспекте Мира',
            'metro_region_dat_p' => 'Проспекту Мира',
            'metro_region_im_p' => 'Проспект Мира',
            'metro_region_rod_p' => 'Проспекта Мира',
        ],
        'pushkinskaya' => [
            'ucode' => '%D0%BF%D1%83%D1%88%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'pushkinskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Пушкинской',
            'metro_region_dat_p' => 'Пушкинской',
            'metro_region_im_p' => 'Пушкинская',
            'metro_region_rod_p' => 'Пушкинской',
        ],
        'rizhskaya' => [
            'ucode' => '%D1%80%D0%B8%D0%B6%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'rizhskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Рижской',
            'metro_region_dat_p' => 'Рижской',
            'metro_region_im_p' => 'Рижская',
            'metro_region_rod_p' => 'Рижской',
        ],
        'rimskaya' => [
            'ucode' => '%D1%80%D0%B8%D0%BC%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'rimskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Римской',
            'metro_region_dat_p' => 'Римской',
            'metro_region_im_p' => 'Римская',
            'metro_region_rod_p' => 'Римской',
        ],
        'serpuhovskaya' => [
            'ucode' => '%D1%81%D0%B5%D1%80%D0%BF%D1%83%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'serpuhovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Серпуховской',
            'metro_region_dat_p' => 'Серпуховской',
            'metro_region_im_p' => 'Серпуховская',
            'metro_region_rod_p' => 'Серпуховской',
        ],
        'smolenskaya' => [
            'ucode' => '%D1%81%D0%BC%D0%BE%D0%BB%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'smolenskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Смоленской',
            'metro_region_dat_p' => 'Смоленской',
            'metro_region_im_p' => 'Смоленская',
            'metro_region_rod_p' => 'Смоленская',
        ],
        'sportivnaya' => [
            'ucode' => '%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F',
            'session_start' => 'sportivnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Спортивной',
            'metro_region_dat_p' => 'Спортивной',
            'metro_region_im_p' => 'Спортивная',
            'metro_region_rod_p' => 'Спортивной',
        ],
        'sretenskij-bulvar' => [
            'ucode' => '%D1%81%D1%80%D0%B5%D1%82%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80',
            'session_start' => 'sretenskij-bulvar',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Сретенском бульваре',
            'metro_region_dat_p' => 'Сретенскому бульвару',
            'metro_region_im_p' => 'Сретенский бульвар',
            'metro_region_rod_p' => 'Сретенского бульвара',
        ],
        'suharevskaya' => [
            'ucode' => '%D1%81%D1%83%D1%85%D0%B0%D1%80%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'suharevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Сухаревской',
            'metro_region_dat_p' => 'Сухаревской',
            'metro_region_im_p' => 'Сухаревская',
            'metro_region_rod_p' => 'Сухаревской',
        ],
        'taganskaya' => [
            'ucode' => '%D1%82%D0%B0%D0%B3%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'taganskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Таганской',
            'metro_region_dat_p' => 'Таганской',
            'metro_region_im_p' => 'Таганская',
            'metro_region_rod_p' => 'Таганской',
        ],
        'tverskaya' => [
            'ucode' => '%D1%82%D0%B2%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'tverskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тверской',
            'metro_region_dat_p' => 'Тверской',
            'metro_region_im_p' => 'Тверская',
            'metro_region_rod_p' => 'Тверской',
        ],
        'teatralnaya' => [
            'ucode' => '%D1%82%D0%B5%D0%B0%D1%82%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F',
            'session_start' => 'teatralnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Театральной',
            'metro_region_dat_p' => 'Театральной',
            'metro_region_im_p' => 'Театральная',
            'metro_region_rod_p' => 'Театральной',
        ],
        'tretyakovskaya' => [
            'ucode' => '%D1%82%D1%80%D0%B5%D1%82%D1%8C%D1%8F%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'tretyakovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Третьяковской',
            'metro_region_dat_p' => 'Третьяковской',
            'metro_region_im_p' => 'Третьяковская',
            'metro_region_rod_p' => 'Третьяковской',
        ],
        'trubnaya' => [
            'ucode' => '%D1%82%D1%80%D1%83%D0%B1%D0%BD%D0%B0%D1%8F',
            'session_start' => 'trubnaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Трубной',
            'metro_region_dat_p' => 'Трубной',
            'metro_region_im_p' => 'Трубная',
            'metro_region_rod_p' => 'Трубной',
        ],
        'turgenevskaya' => [
            'ucode' => '%D1%82%D1%83%D1%80%D0%B3%D0%B5%D0%BD%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'turgenevskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Тургеневской',
            'metro_region_dat_p' => 'Тургеневской',
            'metro_region_im_p' => 'Тургеневская',
            'metro_region_rod_p' => 'Тургеневской',
        ],
        'ulitsa-1905-goda' => [
            'ucode' => '%D1%83%D0%BB%D0%B8%D1%86%D0%B0-1905-%D0%B3%D0%BE%D0%B4%D0%B0',
            'session_start' => 'ulitsa-1905-goda',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Улице 1905 года',
            'metro_region_dat_p' => 'Улице 1905 года',
            'metro_region_im_p' => 'Улица 1905 года',
            'metro_region_rod_p' => 'Улицы 1905 года',
        ],
        'frunzenskaya' => [
            'ucode' => '%D1%84%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'frunzenskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Фрунзенской',
            'metro_region_dat_p' => 'Фрунзенской',
            'metro_region_im_p' => 'Фрунзенская',
            'metro_region_rod_p' => 'Фрунзенской',
        ],
        'tsvetnoj-bulvar' => [
            'ucode' => '%D1%86%D0%B2%D0%B5%D1%82%D0%BD%D0%BE%D0%B9-%D0%B1%D1%83%D0%BB%D1%8C%D0%B2%D0%B0%D1%80',
            'session_start' => 'tsvetnoj-bulvar',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Цветном бульваре',
            'metro_region_dat_p' => 'Цветному бульвару',
            'metro_region_im_p' => 'Цветной бульвар',
            'metro_region_rod_p' => 'Цветного бульвара',
        ],
        'chehovskaya' => [
            'ucode' => '%D1%87%D0%B5%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'chehovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Чеховской',
            'metro_region_dat_p' => 'Чеховской',
            'metro_region_im_p' => 'Чеховская',
            'metro_region_rod_p' => 'Чеховской',
        ],
        'chistye-prudy' => [
            'ucode' => '%D1%87%D0%B8%D1%81%D1%82%D1%8B%D0%B5-%D0%BF%D1%80%D1%83%D0%B4%D1%8B',
            'session_start' => 'chistye-prudy',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Чистых прудах',
            'metro_region_dat_p' => 'Чистым прудам',
            'metro_region_im_p' => 'Чистые пруды',
            'metro_region_rod_p' => 'Чистых прудов',
        ],
        'chkalovskaya' => [
            'ucode' => '%D1%87%D0%BA%D0%B0%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F',
            'session_start' => 'chkalovskaya',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Чкаловской',
            'metro_region_dat_p' => 'Чкаловской',
            'metro_region_im_p' => 'Чкаловская',
            'metro_region_rod_p' => 'Чкаловской',
        ],
        'shelepiha' => [
            'ucode' => '%D1%88%D0%B5%D0%BB%D0%B5%D0%BF%D0%B8%D1%85%D0%B0',
            'session_start' => 'shelepiha',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Шелепихе',
            'metro_region_dat_p' => 'Шелепихе',
            'metro_region_im_p' => 'Шелепиха',
            'metro_region_rod_p' => 'Шелепихи',
        ],
        'rumyantsevo' => [
            'ucode' => '%D1%80%D1%83%D0%BC%D1%8F%D0%BD%D1%86%D0%B5%D0%B2%D0%BE',
            'session_start' => 'rumyantsevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Румянцево',
            'metro_region_dat_p' => 'Румянцево',
            'metro_region_im_p' => 'Румянцево',
            'metro_region_rod_p' => 'Румянцево',
        ],
        'salarevo' => [
            'ucode' => '%D1%81%D0%B0%D0%BB%D0%B0%D1%80%D1%8C%D0%B5%D0%B2%D0%BE',
            'session_start' => 'salarevo',
            'metro_region_template' => '/views/metro_region/metro_region.php',
            'service_template' => '/views/service_page/metro_region_service.php',
            'metro_region_predl_p' => 'Саларьево',
            'metro_region_dat_p' => 'Саларьево',
            'metro_region_im_p' => 'Саларьево',
            'metro_region_rod_p' => 'Саларьево',
        ],

    ],

    'main_menu_place' => [
        'moskva' => [//sankt-peterburg
            'text' => 'Москва',//Санкт-Петербург
            'link' => ''
        ],
        'dolgoprudnyi' => [//aleksandrovskaya
            'text' => 'Долгопрудный',//Александровская
            'link' => 'долгопрудный'//александровская
        ],
        'aprelevka' => [
            'text' => 'Апрелевка',
            'link' => 'апрелевка'
        ],
        'balashiha' => [
            'text' => 'Балашиха',
            'link' => 'балашиха'
        ],
        'vidnoe' => [
            'text' => 'Видное',
            'link' => 'видное'
        ],
        'dedovsk' => [
            'text' => 'Дедовск',
            'link' => 'дедовск'
        ],
        'dzerjinskij' => [
            'text' => 'Дзержинский',
            'link' => 'дзержинский'
        ],
        'domodedovo' => [
            'text' => 'Домодедово',
            'link' => 'домодедово'
        ],
        'zhukovskij' => [
            'text' => 'Жуковский',
            'link' => 'жуковский'
        ],
        'zelenograd' => [
            'text' => 'Зеленоград',
            'link' => 'зеленоград'
        ],
        'korolev' => [
            'text' => 'Королев',
            'link' => 'королев'
        ],
        'kotelniki' => [
            'text' => 'Котельники',
            'link' => 'котельники'
        ],
        'krasnogorsk' => [
            'text' => 'Красногорск',
            'link' => 'красногорск'
        ],
        'myakinino' => [
            'text' => 'Мякинино',
            'link' => 'мякинино'
        ],
        'lobnya' => [
            'text' => 'Лобня',
            'link' => 'лобня'
        ],
        'lytkarino' => [
            'text' => 'Лыткарино',
            'link' => 'лыткарино'
        ],
        'lubertsy' => [
            'text' => 'Люберцы',
            'link' => 'люберцы'
        ],
        'mytishchi' => [
            'text' => 'Мытищи',
            'link' => 'мытищи'
        ],
        'nahabino' => [
            'text' => 'Нахабино',
            'link' => 'нахабино'
        ],
        'odintsovo' => [
            'text' => 'Одинцово',
            'link' => 'одинцово'
        ],
        'podolsk' => [
            'text' => 'Подольск',
            'link' => 'подольск'
        ],
        'ramenskoe' => [
            'text' => 'Раменское',
            'link' => 'раменское'
        ],
        'reutov' => [
            'text' => 'Реутов',
            'link' => 'реутов'
        ],
        'troitsk' => [
            'text' => 'Троицк',
            'link' => 'троицк'
        ],
        'himki' => [
            'text' => 'Химки',
            'link' => 'химки'
        ],
        'shchelkovo' => [
            'text' => 'Щелково',
            'link' => 'щелково'
        ],
        'shcherbinka' => [
            'text' => 'Щербинка',
            'link' => 'щербинка'
        ],
    ],

    'comment' => [
        'update_comment' => [
            'ucode' => 'update_comment',
        ],
        'formation_comment' => [
            'ucode' => 'formation_comment',
        ],
        'formation_action_comment' => [
            'ucode' => 'formation_action_comment',
        ],
    ],

    'variable_1' => 'Бетон', //'Выездной шиномонтаж',//$переменная1 //Эвакуатор
    'variable_2' => 'бетон', //'Выездного шиномонтажа',//$переменная2 //Эвакуатора
    'variable_3' => 'Бетон', //'выездной шиномонтаж',//$переменная3 //эвакуатор

    'beton_price' => [
        'graviy' => [
            'B7.5B100' => [
                'name' => 'В7,5 П4 F100 W4 | М100',
                'price' => '2617'
            ],
            'B12.5M150' => [
                'name' => 'В12,5 П4 F100 W4 | М150',
                'price' => '2773'
            ],
            'B15M200' => [
                'name' => 'В15 П4 F100 W4 | М200',
                'price' => '2884'
            ],
            'B20M250' => [
                'name' => 'В20 П4 F150 W6 | М250',
                'price' => '3269'
            ],
            'B22.5M300' => [
                'name' => 'В22,5 П4 F200 W8 | М300',
                'price' => '3405'
            ],
            'B25M350' => [
                'name' => 'В25 П4 F200 W8 | М350',
                'price' => '3545'
            ],
            'B30M400' => [
                'name' => 'В30 П4 F300 W12 | М400',
                'price' => '3721'
            ],
        ],
        'granit' => [
            'B7.5B100' => [
                'name' => 'В7,5 П4 F100 W4 | М100',
                'price' => '3099'
            ],
            'B12.5M150' => [
                'name' => 'В12,5 П4 F100 W4 | М150',
                'price' => '3258'
            ],
            'B15M200' => [
                'name' => 'В15 П4 F100 W4 | М200',
                'price' => '3376'
            ],
            'B20M250' => [
                'name' => 'В20 П4 F150 W6 | М250',
                'price' => '3688'
            ],
            'B22.5M300' => [
                'name' => 'В22,5 П4 F200 W8 | М300',
                'price' => '3834'
            ],
            'B25M350' => [
                'name' => 'В25 П4 F200 W8 | М350',
                'price' => '3951'
            ],
            'B30M400' => [
                'name' => 'В30 П4 F300 W12 | М400',
                'price' => '4110'
            ],
        ],
        'keramzitobeton' => [
            'B7.5B100' => [
                'name' => 'Керамзитобетон В7,5 | М100',
                'price' => '2005'
            ],
            'B12.5M150' => [
                'name' => 'Керамзитобетон В12,5 | М150',
                'price' => '2082'
            ],
            'B15M200' => [
                'name' => 'Керамзитобетон В15 | М200',
                'price' => '2274'
            ],
            'B20M250' => [
                'name' => 'Керамзитобетон В20 | М250',
                'price' => '2514'
            ],
            'B22.5M300' => [
                'name' => 'Керамзитобетон В22,5 | М300',
                'price' => '2719'
            ],
        ],
        'toschiy' => [
            'B7.5B100' => [
                'name' => 'В7,5 Ж4 Тощий | М100',
                'price' => '1988'
            ],
            'B12.5M150' => [
                'name' => 'В12,5 Ж4 Тощий | М150',
                'price' => '2108'
            ],
            'B15M200' => [
                'name' => 'В15 Ж4 Тощий | М200',
                'price' => '2252'
            ],
            'B20M250' => [
                'name' => 'В20 Ж4 Тощий | М250',
                'price' => '2372'
            ],
        ],
        'rastvor' => [
            'B7.5B100' => [
                'name' => 'Раствор В7,5 | М100',
                'price' => '2213'
            ],
            'B12.5M150' => [
                'name' => 'Раствор В12,5 | М150',
                'price' => '2375'
            ],
            'B15M200' => [
                'name' => 'Раствор В15 | М200',
                'price' => '2564'
            ],
            'B20M250' => [
                'name' => 'Раствор В20 | М250',
                'price' => '2729'
            ],
        ],
        'smes' => [
            'B7.5B100' => [
                'name' => 'ЦПС В7,5 | М100',
                'price' => '2187'
            ],
            'B12.5M150' => [
                'name' => 'ЦПС В12,5 | М150',
                'price' => '2473'
            ],
            'B15M200' => [
                'name' => 'ЦПС В15 | М200',
                'price' => '2757'
            ],
        ],
    ],

    'price_km' => '50',

    'cache_path' => '/cache',
    'cache_time' => '5',//php кеширование, задается в секундах

    'number_specialist' => '2', //


    'main_city' => 'Москва',//Санкт-Петербург
    'main_city_short' => 'Мск',//СПб
    'main_city_rod_p' => 'Москвы',//Санкт-Петербурга
    'main_city_dat_p' => 'Москве',//Санкт-Петербургу
    'main_city_predl_p' => 'Москве',//Санкт-Петербурге

//    'img1_main'=>'/img/bg.png',//фоновое изображение для гл. страницы
    'img1_main' => '/img/bg002.jpg',//фоновое изображение для гл. страницы
    'img1_gorod' => '/img/bg-inner.jpg',//фоновое изображение города
    'img1_raion' => '/img/bg-inner.jpg',//фоновое изображение района
    'img1_okrug' => '/img/bg-inner.jpg',//фоновое изображение округа
    'img1_metro' => '/img/bg-inner.jpg',//фоновое изображение метро
    'img_service' => '/img/bg-inner.jpg',//фоновое изображение услуги

    'tel' => '+7 499 490 59 22', //телефон – вставляется во все места, где есть номер телефона
    'telhref' => '+74994905922', //телефон, который прописывается в атрибуте href для того, чтобы номер был кликабельным со смартфонов (вставляется во все атрибуты href для номера телефона)

    'brand' => 'ГлавМонолит',

    'obshay_peremennay' => 'общая переменная',

    'dispecher_img' => 'img/girl3.png',
    'dispecher_img_text' => 'Диспетчер Светлана:<br>"Отвечу на любые Ваши <br>вопросы',

//Москва
    'gorod_predl_p_moskva' => 'Москве',//$gorod_predl_p
    'gorod_dat_p_moskva' => 'Москве',//$gorod_dat_p
    'gorod_im_p_moskva' => 'Москва',//$gorod_im_p
    'gorod_iframe_moskva' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_moskva' => '55.753215, 37.622504',

  //Апрелевка
    'gorod_predl_p_aprelevka' => 'Апрелевке',//$gorod_predl_p
    'gorod_dat_p_aprelevka' => 'Апрелевке',//$gorod_dat_p
    'gorod_im_p_aprelevka' => 'Апрелевка',//$gorod_im_p
    'gorod_iframe_aprelevka' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6NHbsD" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_aprelevka' => '55.545166, 37.073220',


  //Балашиха
    'gorod_predl_p_balashiha' => 'Балашихе',//$gorod_predl_p
    'gorod_dat_p_balashiha' => 'Балашихе',//$gorod_dat_p
    'gorod_im_p_balashiha' => 'Балашиха',//$gorod_im_p
    'gorod_iframe_balashiha' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6ZWdgA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_balashiha' => '55.796339, 37.938199',


  //Дедовск
    'gorod_predl_p_dedovsk' => 'Дедовске',//$gorod_predl_p
    'gorod_dat_p_dedovsk' => 'Дедовску',//$gorod_dat_p
    'gorod_im_p_dedovsk' => 'Дедовск',//$gorod_im_p
    'gorod_iframe_dedovsk' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6GR7WB" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_dedovsk' => '55.859984, 37.120669',


  //Видное
    'gorod_predl_p_vidnoe' => 'Видном',//$gorod_predl_p
    'gorod_dat_p_vidnoe' => 'Видному',//$gorod_dat_p
    'gorod_im_p_vidnoe' => 'Видное',//$gorod_im_p
    'gorod_iframe_vidnoe' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6KQSPD" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_vidnoe' => '55.557174, 37.708644',

  //Дзержинский
    'gorod_predl_p_dzerzhinskij' => 'Дзержинском',//$gorod_predl_p
    'gorod_dat_p_dzerzhinskij' => 'Дзержинском',//$gorod_dat_p
    'gorod_im_p_dzerzhinskij' => 'Дзержинский',//$gorod_im_p
    'gorod_iframe_dzerzhinskij' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6KrdHC" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_dzerzhinskij' => '55.630960, 37.849679',


  //Долгопрудный
    'gorod_predl_p_dolgoprudnyj' => 'Долгопрудном',//$gorod_predl_p
    'gorod_dat_p_dolgoprudnyj' => 'Долгопрудному',//$gorod_dat_p
    'gorod_im_p_dolgoprudnyj' => 'Долгопрудный',//$gorod_im_p
    'gorod_iframe_dolgoprudnyj' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6KdglA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_dolgoprudnyj' => '55.933620, 37.514401',


  //Жуковский
    'gorod_predl_p_zhukovskij' => 'Жуковском',//$gorod_predl_p
    'gorod_dat_p_zhukovskij' => 'Жуковскому',//$gorod_dat_p
    'gorod_im_p_zhukovskij' => 'Жуковский',//$gorod_im_p
    'gorod_iframe_zhukovskij' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6OfFKA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_zhukovskij' => '55.597780, 38.119497',


  //Домодедово
    'gorod_predl_p_domodedovo' => 'Домодедово',//$gorod_predl_p
    'gorod_dat_p_domodedovo' => 'Домодедово',//$gorod_dat_p
    'gorod_im_p_domodedovo' => 'Домодедово',//$gorod_im_p
    'gorod_iframe_domodedovo' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6Oh6HD" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_domodedovo' => '55.437112, 37.768049',

  //Зеленоград
    'gorod_predl_p_zelenograd' => 'Зеленограде',//$gorod_predl_p
    'gorod_dat_p_zelenograd' => 'Зеленограду',//$gorod_dat_p
    'gorod_im_p_zelenograd' => 'Зеленоград',//$gorod_im_p
    'gorod_iframe_zelenograd' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6Sw5dC" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_zelenograd' => '55.991893, 37.214382',

  //Королев
    'gorod_predl_p_korolev' => 'Королеве',//$gorod_predl_p
    'gorod_dat_p_korolev' => 'Королеву',//$gorod_dat_p
    'gorod_im_p_korolev' => 'Королев',//$gorod_im_p
    'gorod_iframe_korolev' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6WqhKA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_korolev' => '55.922212, 37.854629',

  //Красногорск
    'gorod_predl_p_krasnogorsk' => 'Красногорске',//$gorod_predl_p
    'gorod_dat_p_krasnogorsk' => 'Красногорску',//$gorod_dat_p
    'gorod_im_p_krasnogorsk' => 'Красногорск',//$gorod_im_p
    'gorod_iframe_krasnogorsk' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg6WWetB" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_krasnogorsk' => '55.831099, 37.330192',

  //Котельники
    'gorod_predl_p_kotelniki' => 'Котельниках',//$gorod_predl_p
    'gorod_dat_p_kotelniki' => 'Котельникам',//$gorod_dat_p
    'gorod_im_p_kotelniki' => 'Котельники',//$gorod_im_p
    'gorod_iframe_kotelniki' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg60ESoC" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_kotelniki' => '55.659840, 37.863199',

  //Лобня
    'gorod_predl_p_lobnya' => 'Лобне',//$gorod_predl_p
    'gorod_dat_p_lobnya' => 'Лобне',//$gorod_dat_p
    'gorod_im_p_lobnya' => 'Лобня',//$gorod_im_p
    'gorod_iframe_lobnya' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg68b6dD" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_lobnya' => '56.012053, 37.475082',

  //Лыткарино
    'gorod_predl_p_lytkarino' => 'Лыткарино',//$gorod_predl_p
    'gorod_dat_p_lytkarino' => 'Лыткарино',//$gorod_dat_p
    'gorod_im_p_lytkarino' => 'Лыткарино',//$gorod_im_p
    'gorod_iframe_lytkarino' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqg68wFkC" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_lytkarino' => '55.577856, 37.998470',

  //Мытищи
    'gorod_predl_p_mytishchi' => 'Мытищах',//$gorod_predl_p
    'gorod_dat_p_mytishchi' => 'Мытищам',//$gorod_dat_p
    'gorod_im_p_mytishchi' => 'Мытищи',//$gorod_im_p
    'gorod_iframe_mytishchi' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbIxVpB" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_mytishchi' => '55.910503, 37.736330',

  //Люберцы
    'gorod_predl_p_lyubercy' => 'Люберцах',//$gorod_predl_p
    'gorod_dat_p_lyubercy' => 'Люберцам',//$gorod_dat_p
    'gorod_im_p_lyubercy' => 'Люберцы',//$gorod_im_p
    'gorod_iframe_lyubercy' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbMfg1A" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_lyubercy' => '55.676494, 37.898116',

  //Нахабино
    'gorod_predl_p_nahabino' => 'Нахабино',//$gorod_predl_p
    'gorod_dat_p_nahabino' => 'Нахабино',//$gorod_dat_p
    'gorod_im_p_nahabino' => 'Нахабино',//$gorod_im_p
    'gorod_iframe_nahabino' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbMdxwA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_nahabino' => '55.847149, 37.180138',

  //Одинцово
    'gorod_predl_p_odincovo' => 'Одинцово',//$gorod_predl_p
    'gorod_dat_p_odincovo' => 'Одинцово',//$gorod_dat_p
    'gorod_im_p_odincovo' => 'Одинцово',//$gorod_dat_p
    'gorod_iframe_odincovo' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbQqzDD" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_odincovo' => '55.678895, 37.263870',

  //Раменское
    'gorod_predl_p_ramenskoe' => 'Раменском',//$gorod_predl_p
    'gorod_dat_p_ramenskoe' => 'Раменскому',//$gorod_dat_p
    'gorod_im_p_ramenskoe' => 'Раменское',//$gorod_im_p
    'gorod_iframe_ramenskoe' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbQg93D" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_ramenskoe' => '55.567326, 38.225840',

  //Подольск
    'gorod_predl_p_podolsk' => 'Подольске',//$gorod_predl_p
    'gorod_dat_p_podolsk' => 'Подольску',//$gorod_dat_p
    'gorod_im_p_podolsk' => 'Подольск',//$gorod_im_p
    'gorod_iframe_podolsk' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbUA6CA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_podolsk' => '55.431177, 37.544737',

  //Реутов
    'gorod_predl_p_reutov' => 'Реутове',//$gorod_predl_p
    'gorod_dat_p_reutov' => 'Реутову',//$gorod_dat_p
    'gorod_im_p_reutov' => 'Реутов',//$gorod_im_p
    'gorod_iframe_reutov' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbUrc-B" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_reutov' => '55.760515, 37.855141',

  //Троицк
    'gorod_predl_p_troick' => 'Троицке',//$gorod_predl_p
    'gorod_dat_p_troick' => 'Троицку',//$gorod_dat_p
    'gorod_im_p_troick' => 'Троицк',//$gorod_im_p
    'gorod_iframe_troick' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbUrc-B" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_troick' => '55.485469, 37.305327',

  //Щелково
    'gorod_predl_p_shchelkovo' => 'Щелково',//$gorod_predl_p
    'gorod_dat_p_shchelkovo' => 'Щелково',//$gorod_dat_p
    'gorod_im_p_shchelkovo' => 'Щелково',//$gorod_im_p
    'gorod_iframe_shchelkovo' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgb4hmXA" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_shchelkovo' => '55.923387, 37.978399',

  //Химки
    'gorod_predl_p_himki' => 'Химках',//$gorod_predl_p
    'gorod_dat_p_himki' => 'Химкам',//$gorod_dat_p
    'gorod_im_p_himki' => 'Химки',//$gorod_im_p
    'gorod_iframe_himki' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbYgz~A" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_himki' => '55.888775, 37.430319',

  //Щербинка
    'gorod_predl_p_shcherbinka' => 'Щербинке',//$gorod_predl_p
    'gorod_dat_p_shcherbinka' => 'Щербинке',//$gorod_dat_p
    'gorod_im_p_shcherbinka' => 'Щербинка',//$gorod_im_p
    'gorod_iframe_shcherbinka' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgb4erdB" width="775" height="241" frameborder="0"></iframe>',
    'gorod_koordinaty_shcherbinka' => '55.435411, 37.649400',

  //ОКРУГА МОСКВЫ
  //САО - Северный административный округ
    'okrug_predl_p_sao' => 'Северном административном округе',//$okrug_predl_p
    'okrug_dat_p_sao' => 'Северному административному округу',//$okrug_dat_p
    'okrug_im_p_sao' => 'Северный административный округ',//$okrug_im_p
    'okrug_sao' => 'САО',//$okrug
    'gorod_iframe_sao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_sao' => '55.435411, 37.649400',

  //ЮВАО - Юго-Восточный административный округ
    'okrug_predl_p_uvao' => 'Юго-Восточном административном округе',//$okrug_predl_p
    'okrug_dat_p_uvao' => 'Юго-Восточному административному округу',//$okrug_dat_p
    'okrug_im_p_uvao' => 'Юго-Восточный административный округ',//$okrug_im_p
    'okrug_uvao' => 'ЮВАО',//$okrug
    'gorod_iframe_uvao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_uvao' => '55.435411, 37.649400',

  //ЗАО - Западный административный округ
    'okrug_predl_p_zao' => 'Западном административном округе',//$okrug_predl_p
    'okrug_dat_p_zao' => 'Западному административному округу',//$okrug_dat_p
    'okrug_im_p_zao' => 'Западный административный округ',//$okrug_im_p
    'okrug_zao' => 'ЗАО',//$okrug
    'gorod_iframe_zao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_zao' => '55.435411, 37.649400',

  //СВАО - Северо-Восточный административный округ
    'okrug_predl_p_svao' => 'Северо-Восточном административном округе',//$okrug_predl_p
    'okrug_dat_p_svao' => 'Северо-Восточному административному округу',//$okrug_dat_p
    'okrug_im_p_svao' => 'Северо-Восточный административный округ',//$okrug_im_p
    'okrug_svao' => 'СВАО',//$okrug
    'gorod_iframe_svao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_svao' => '55.435411, 37.649400',

  //ЮАО - Южный административный округ
    'okrug_predl_p_uao' => 'Южном административном округе',//$okrug_predl_p
    'okrug_dat_p_uao' => 'Южному административному округу',//$okrug_dat_p
    'okrug_im_p_uao' => 'Южный административный округ',//$okrug_im_p
    'okrug_uao' => 'ЮАО',//$okrug
    'gorod_iframe_uao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_uao' => '55.435411, 37.649400',

  //СЗАО - Северо-Западный административный округ
    'okrug_predl_p_szao' => 'Северо-Западном административном округе',//$okrug_predl_p
    'okrug_dat_p_szao' => 'Северо-Западному административному округу',//$okrug_dat_p
    'okrug_im_p_szao' => 'Северо-Западный административный округ',//$okrug_im_p
    'okrug_szao' => 'СЗАО',//$okrug
    'gorod_iframe_szao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_szao' => '55.435411, 37.649400',

  //ВАО - Восточный административный округ
    'okrug_predl_p_vao' => 'Восточном административном округе',//$okrug_predl_p
    'okrug_dat_p_vao' => 'Восточному административному округу',//$okrug_dat_p
    'okrug_im_p_vao' => 'Восточный административный округ',//$okrug_im_p
    'okrug_vao' => 'ВАО',//$okrug
    'gorod_iframe_vao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_vao' => '55.435411, 37.649400',

  //ЮЗАО - Юго-Западный административный округ
    'okrug_predl_p_uzao' => 'Юго-Западном административном округе',//$okrug_predl_p
    'okrug_dat_p_uzao' => 'Юго-Западному административному округу',//$okrug_dat_p
    'okrug_im_p_uzao' => 'Юго-Западный административный округ',//$okrug_im_p
    'okrug_uzao' => 'ЮЗАО',//$okrug
    'gorod_iframe_uzao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_uzao' => '55.435411, 37.649400',

  //ЦАО - Центральный административный округ
    'okrug_predl_p_cao' => 'Центральном административном округе',//$okrug_predl_p
    'okrug_dat_p_cao' => 'Центральному административному округу',//$okrug_dat_p
    'okrug_im_p_cao' => 'Центральный административный округ',//$okrug_im_p
    'okrug_cao' => 'ЦАО',//$okrug
    'gorod_iframe_cao' => '<iframe src="https://yandex.ru/map-widget/v1/-/CBqgbFVcxC" width="775" height="241" frameborder="0"></iframe>',
    'okrug_koordinaty_cao' => '55.435411, 37.649400',


);

?>