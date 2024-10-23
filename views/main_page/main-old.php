<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />

	<title>Вызвать <?= $content['variable_2'] ?> в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?> дешево, низкие цены на услуги 👍. Заказать эвакуацию автомобиля Мск и Московская область недорого, круглосуточно.</title>
	<meta name="description" content="Предлагаем услуги <?= $content['variable_2'] ?> недорого по доступным ценам в <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?>, работаем 24 часа. Подача эвакуатора по <?= $content['domens'][$_SESSION['domen']]['gorod_predl_p'] ?> от 30 минут.">
	<meta name='keywords' content="<?= $content['variable_1'] ?>, <?= $content['domens'][$_SESSION['domen']]['gorod_im_p'] ?>, недорого" />

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
	<!--  <link rel="icon" href="/favicon.ico" type="image/x-icon">-->
</head>

<body>
	<!--header-->
	<?php include(ROOT . '/views/module3/header.php'); ?>
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
					<span class="first-screen__logo">Недорогой <?php echo $content['variable_1']; ?></span>
					<span class="first-screen__slogan">в Москве и МО</span>
					<!--          <span class="first-screen__slogan">по России, Москве,<br> Подмосковью.</span>-->
				</h1>


				<p class="first-screen__town">Ваш город: <a href="javascript:;" onclick="open_popups('#popup_city')" class="first-screen__town_name" id="first-screen__town_name"><?= $content['domens'][$_SESSION['domen']]['current_city'] ?></a></p>
				<p class="first-screen__button"><button type="button" class="btn btn_red" onclick="open_section_popup('#first-screen__popup')">Оставить заявку</button></p>
			</div>
			<div class="first-screen__address">
				<p class="fz22">Москва </p>
				<!--<p class="fz14">Бумажный проезд, 14с2</p>-->
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
				<form action="" method="post" id="first_screen_form">
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

	<!-- avtopark -->
	<?php include(ROOT . '/views/module3/plsahka.php'); ?>
	<!-- avtopark END-->

	<!-- avtopark -->

	<!-- avtopark -->
	<section class="avtopark" id="prices">
		<div class="container">
			<div class="heading-block heading-block2 flex_between items_vcenter">
				<h2>Наш автопарк</h2>
				<div class="heading-block__description">У нас есть эвакуаторы со сдвижными и стационарными платформами, с лебедками и кранами-манипуляторами. Быстро предоставим технику для перевозки мотоцикла или автомобиля любого класса и с любыми неисправностями.</div>
			</div>

			<?php include(ROOT . '/views/module3/prices-main.php'); ?>


		</div>
	</section>
	<!-- avtopark END-->
	<!-- avtopark END-->

	<!--calculator-->
	<?php include(ROOT . '/views/module3/calculator-main.php'); ?>
	<!--calculator END-->


	<!--what-we-offer-->
	<?php include(ROOT . '/views/module3/what-we-offer.php'); ?>
	<!--what-we-offer END-->

	<!--why-choice-->
	<?php include(ROOT . '/views/module3/about-main.php'); ?>
	<!--why-choice END-->

	<!--cargo-->
	<?php include(ROOT . '/views/module3/cargo.php'); ?>
	<!--cargo END-->

	<!-- know-avto -->
	<!--    --><?php //include(ROOT.'/views/module3/know-avto.php');
				?>
	<!-- know-avto END-->



	<!--no-time-->
	<?php include(ROOT . '/views/module3/no-time.php'); ?>
	<!--no-time END-->

	<!-- how-we-work -->
	<?php include(ROOT . '/views/module3/how-we-work.php'); ?>
	<!-- section END -->

	<!-- examples -->
	<?php include(ROOT . '/views/module3/examples.php'); ?>
	<!-- examples END -->

	<!-- only-us -->
	<?php include(ROOT . '/views/module3/only-us.php'); ?>
	<!-- only-us END -->

	<!-- days-service -->
	<!--    --><?php //include(ROOT.'/views/module3/days-service-main.php');
				?>
	<!-- days-service END -->

	<!-- reviews -->
	<section class="reviews">
		<div class="container">
			<div class="reviews__text">
				<h2>Уже 10 лет нам доверяют более <span class="wh_sp">12 000</span> клиентов</h2>
				<p>Мы прислушиваемся к каждому отзыву. Благодаря этому, улучшаем сервис и расширяем количество услуг.</p>
				<p><button type="button" class="btn btn_blue btn-sm" onclick="open_section_popup('#reviews__popup')">Оставить отзыв</button></p>
			</div>

			<div class="slick-slider reviews__slider" id="reviews__slider">

				<!--                --><?php //foreach ($comment as $item) {
										//                $page = explode('/', $item['page']);
										//                
										?>
				<!--                --><?php //if (($page[0] == $_SESSION['domen']) and ($page[1] == 'null')) { 
										?>

				<div class="reviews__item ">
					<div class="flex_between">
						<div class="reviews__item-img">
							<picture>
								<!--                                <source srcset="--><? //= $item['photo_user'] 
																						?><!--" type="image/webp">-->
								<source srcset="/img/otz/w1.jpg" type="image/webp">
								<!--                                <img src="--><? //= $item['photo_user'] 
																					?><!--" alt="">-->
								<img src="/img/otz/w1.jpg" alt="">
							</picture>
						</div>
						<div class="reviews__item-cont">
							<!--                            <p class="reviews__item-name">--><? //= $item['name'] 
																								?><!--</p>-->
							<p class="reviews__item-name">Кристина</p>
							<p class="reviews__item-date">12.12.2016 г.</p>
							<div class="reviews__item-table flex">
								<div>
									<div class="reviews__item-tr">Достоинства:</div>
									<!--                                    <div class="reviews__item-td">--><? //= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['dostoinstva']) 
																												?><!--</div>-->
									<div class="reviews__item-td">низкая цена, быстрая подача</div>
								</div>
								<div>
									<div class="reviews__item-tr">Недостатки:</div>
									<!--                                    <div class="reviews__item-td">--><? //= str_replace("^gorod$", $content["domens"][$_SESSION["domen"]]["gorod_predl_p"], $item['nedostatki']) 
																												?><!--</div>-->
									<div class="reviews__item-td">нет</div>
								</div>
							</div>
							<p class="reviews__item-text">Заказывала в этой службе эвакуатор для перевозки Nissan Murano в автосервис. Выбирала исключительно по ценам. Обслуживанием осталась довольна. Самое главное, что озвученная цена после выгрузки машины не изменилась, а также – что не пришлось долго дожидаться эвакуатора. От звонка для приезда машины прошло не больше получаса, и это в час-пик. Рекомендую.</p>
						</div>
					</div>
				</div>
				<!--                    --><?php //} 
											?>
				<!--                --><?php //} 
										?>
				<div class="reviews__item ">
					<div class="flex_between">
						<div class="reviews__item-img">
							<picture>
								<source srcset="/img/otz/m3.jpg" type="image/webp">
								<img src="/img/otz/m3.jpg" alt="">
							</picture>
						</div>
						<div class="reviews__item-cont">

							<p class="reviews__item-name">Олег</p>
							<p class="reviews__item-date">12.12.2016 г.</p>
							<div class="reviews__item-table flex">
								<div>
									<div class="reviews__item-tr">Достоинства:</div>
									<div class="reviews__item-td">аккуратная погрузка, хороший тариф, быстро</div>
								</div>
								<div>
									<div class="reviews__item-tr">Недостатки:</div>
									<div class="reviews__item-td">не обнаружил</div>
								</div>
							</div>
							<p class="reviews__item-text">Спасибо большое за оперативную и профессиональную помощь! Эвакуатора ждал примерно 20 минут, и это невероятно быстро для Москвы. Погрузка заняла не больше 5 минут. При этом никаких повреждений на машине не обнаружил – все очень аккуратно. Вдвойне приятно, что цена оказалась существенно ниже того, на что я рассчитывал. Еще раз благодарю!</p>
						</div>
					</div>
				</div>

				<div class="reviews__item ">
					<div class="flex_between">
						<div class="reviews__item-img">
							<picture>
								<source srcset="/img/otz/m1.jpg" type="image/webp">
								<img src="/img/otz/m1.jpg" alt="">
							</picture>
						</div>
						<div class="reviews__item-cont">

							<p class="reviews__item-name">Михаил</p>
							<p class="reviews__item-date">12.12.2016 г.</p>
							<div class="reviews__item-table flex">
								<div>
									<div class="reviews__item-tr">Достоинства:</div>
									<div class="reviews__item-td">быстрое прибытие, приятное обслуживание, хороший эвакуатор</div>
								</div>
								<div>
									<div class="reviews__item-tr">Недостатки:</div>
									<div class="reviews__item-td">нет</div>
								</div>
							</div>
							<p class="reviews__item-text">Нужно было успеть в сервис до закрытия, вызвал в этой фирме эвакуатор. Попросил как можно быстрее. В итоге, максимум через полчаса моя машина уже стояла на эвакуаторе. До сервиса доехали быстро, но водитель не лихачил, вел аккуратно. До закрытия успели. Считаю, что обслуживание отличное, да еще и по таким тарифам. </p>
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

	<!-- nicely -->
	<section class="nicely bg_red">
		<div class="container flex_between">
			<div class="nicely__perc">
				10 <sup>%</sup>
			</div>
			<div class="nicely__cont">
				<h2>А еще мы приготовили<br> для Вас кое-что приятное</h2>
				<p>Получите дополнительную 10% скидку на любую услугу,<br>
					воспользовавшись персональным купоном.</p>
				<div class="nicely__form">
					<form action="" method="post" id="nicely__form" class="flex_between " novalidate="novalidate">
						<input type="hidden" name="subject" value="Купон">
						<div class="nicely__left">
							<input type="email" name="mail" class="input input-border" placeholder="Ваш e-mail">
						</div>
						<button type="submit" class="btn btn_white btn_short btn_short_r"></button>
					</form>
				</div>
				<p class="nicely__message">Купон будет отправлен на Вашу электронную почту в течение 3 минут.</p>
				<p class="nicely__info">Во время заказа на нашем сайте или по телефону <a href="tel:<?= $content['telhref'] ?>" class="tel"><?= $content['tel'] ?></a>, сообщите номер купона менеджеру и получите дополнительную скидку.</p>
			</div>
		</div>
	</section>
	<!-- nicely END -->

	<!-- nicely -->
	<?php include(ROOT . '/views/module3/nicely-links-main.php'); ?>
	<!-- nicely END -->



	<!--footer-->
	<?php include(ROOT . '/views/module3/footer.php'); ?>
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
	<script src="/js/gruz_calc.min.js?1"></script>
	<script src="/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
</body>

</html>