<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
      (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    for (var j = 0; j < document.scripts.length; j++) {
      if (document.scripts[j].src === r) {
        return;
      }
    }
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
  })
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(97127111, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true
  });
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/97127111" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<header class="header">
  <div class="container">
    <div class="logo"><a href="/">Бетон. Москва</a></div>
    <div class="work_time">Работаем круглосуточно</div>
    <div class="phone">
      <strong><a class="tel-a" href="tel:<?= $content['telhref'] ?>"><?= $content['tel'] ?></a></strong>
      <span class="call_order">
        <a href="#callback-modal" class="popup-modal link link_border" data-title="Заказать звонок">Заказать звонок</a>
      </span>
    </div>
  </div>
</header>

<style>
  .white-popup-block {
    display: flex;
    flex-direction: column;
    max-width: 500px;
    align-items: center;
    justify-content: center;
    padding: 50px 65px;
    text-align: center;
  }

  .white-popup-block h3 {
    padding: 0 0 25px 0;
    margin: 0;
    font-size: 30px;
  }

  .white-popup-block p {
    font-size: 17px;
  }

  .white-popup-block label,
  .white-popup-block .label {
    text-align: left;
    font-size: 13px;
  }

  .mfp-close {
    top: 4%;
    right: 2%;
  }

  .form-b {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .6);
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    z-index: 11;
  }


  .form-b__content {
    background: #ffffff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    max-width: 500px;
    align-items: center;
    justify-content: center;
    padding: 50px 65px;
    text-align: center;

    -webkit-box-shadow: 4px 15px 24px 0px rgba(34, 60, 80, 0.2);
    -moz-box-shadow: 4px 15px 24px 0px rgba(34, 60, 80, 0.2);
    box-shadow: 4px 15px 24px 0px rgba(34, 60, 80, 0.2);
  }

  .form-b h3 {
    padding: 25px 0;
    margin: 0;
    font-size: 30px;
  }

  .form-b p {
    font-size: 16px;
  }

  .display-visible {
    visibility: visible;
    opacity: 1;
  }

  .white-popup-block .btn,
  .form-b .btn {
    width: 100%;
    margin-bottom: 0;
  }

  .form-d__name {
    display: block;
    font-weight: 700;
    font-size: 18px;
    color: #3181e4;
  }

  .modal-open {
    overflow: hidden;
  }

  .select-block select option {
    color: #adacac;
  }

  .form-d__conent textarea,
  .form-b__content textarea,
  #calculate-shipping textarea {
    height: 90px;
  }


  .review-beton__rating {
    text-align: left;
    margin-bottom: 12px;
  }

  #review-beton .review-rating {
    position: relative;
    font-size: 20px;
    display: inline-block;
  }

  #review-beton .review-rating::before {
    content: "★★★★★";
    display: block;
  }

  #review-beton .review-rating__items {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: row-reverse;
    overflow: hidden;
  }

  #review-beton .rating__item {
    position: absolute;
    width: 0%;
    height: 0%;
    opacity: 0;
    visibility: hidden;
    top: 0;
    left: 0;
  }

  #review-beton .rating__label {
    flex: 0 0 20%;
    height: 100%;
    cursor: pointer;
    color: #c8c8c8;

    margin-bottom: 0px;
    padding-left: 0px;
  }


  #review-beton .rating__label::after,
  #review-beton .rating__label::before {
    border: none !important;
  }

  .rating__label::after {
    display: none !important;
  }

  #review-beton .rating__label::before {
    content: "★";
    display: block;
    transition: color .3s ease 0s;
    font-size: 20px;
    top: 0;
    width: auto;
    height: auto;
  }

  .rating__item:checked:checked,
  .rating__item:checked~.rating__label {
    color: #ffb94a !important;
  }

  #review-beton .rating__label:hover,
  #review-beton .rating__label:hover~.rating__label,
  #review-beton .rating__label:checked~.rating__label:hover {
    color: #ffb94a !important;
  }
</style>

<!-- modals -->
<div id="callback-modal" class="mfp-hide white-popup-block">
  <h3>Заказать звонок</h3>
  <p>Оставьте номер телефона и мы свяжемся с Вами в ближайшее время</p>
  <form action="send.php" id="header-sender-r" method="POST" data-validate="true">
    <label for="">Номер телефона *</label>
    <input type="text" name="tel" class="phone phone-req" placeholder="" data-parsley-type="digits" required="">
    <input type="checkbox" name="checkGroup[]" id="checkGroup-1" value="1" required="" checked><label for="checkGroup-1">Я принимаю Условия пользования сайтом и условия
      <a href="#">Политики конфиденциальности</a></label>
    <!--    <button class="btn" type="button">Заказать</button>-->
    <button class="btn" name="send" type="submit">Заказать</button>
  </form>
  <button title="Закрыть" type="button" class="mfp-close"><img src="/img/icons/close-popup.png" alt="Закрыть" /></button>
</div>

<!-- success -->
<div class="form-b form-b--success">
  <div class="form-b__content">
    <div>
      <img src="/img/icons/succsess-g.png" alt="Заявка отправлена">
    </div>
    <h3>Спасибо!</h3>
    <p>Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время для уточнения деталей</p>
    <button title="Закрыть" type="button" class="mfp-close success__close"><img src="/img/icons/close-popup.png" alt="Закрыть" />
    </button>
  </div>
</div>
<!-- success END -->

<!-- modal order beton -->
<div id="order-beton-p" class="form-b order-beton">
  <div class="form-b__content">
    <h3>Заказать бетон</h3>
    <p>Оставьте номер телефона и мы свяжемся с Вами в ближайшее время</p>
    <form action="send.php" id="order-beton-r" method="POST" data-validate="true">
      <input type="text" name="name" class="input-name" placeholder="Ваше имя" data-parsley-type="digits">
      <input type="text" name="tel" class="phone phone-req" placeholder="Ваш телефон" data-parsley-type="digits" required="">
      <textarea placeholder="Комментарий к заказу"></textarea>
      <input type="checkbox" name="checkGroup[]" id="checkGroup-1" value="1" required="" checked><label for="checkGroup-1">Я принимаю Условия пользования сайтом и условия
        <a href="#">Политики конфиденциальности</a></label>
      <!--    <button class="btn" type="button">Заказать</button>-->
      <button class="btn" name="send" type="submit">Заказать</button>
    </form>
    <button title="Закрыть" type="button" class="mfp-close success__close"><img src="/img/icons/close-popup.png" alt="Закрыть" />
    </button>
  </div>
</div>
<!-- modal order beton END  -->

<!-- modal order beton detail -->
<div id="order-beton-detail" class="mfp-hide white-popup-block">
  <div class="form-d__conent">
    <h3>Заказать бетон <span class="form-d__name"></span></h3>
    <p>Оставьте номер телефона и мы свяжемся с Вами в ближайшее время</p>
    <form action="send.php" id="order-beton-d" method="POST" data-validate="true">
      <input type="text" name="tel" class="phone phone-req" placeholder="Ваш телефон" data-parsley-type="digits" required="">
      <input type="checkbox" name="checkGroup[]" id="checkGroup-2" value="1" required="" checked><label for="checkGroup-1">Я принимаю Условия пользования сайтом и условия
        <a href="#">Политики конфиденциальности</a></label>

      <button class="btn" name="send" type="submit">Заказать</button>
    </form>
    <button title="Закрыть" type="button" class="mfp-close"><img src="/img/icons/close-popup.png" alt="Закрыть" /></button>
  </div>
</div>
<!-- modal order beton detail END -->

<!-- modal review -->
<div id="review-beton" class="mfp-hide white-popup-block">
  <div class="form-d__conent">
    <h3>Оставить отзыв</h3>
    <p>Поделитесь впечатлениями о нашей работе. Ваше мнение очень важно для нас.</p>
    <form action="send.php" id="review-beton-d" method="POST" data-validate="true">
      <input type="text" name="name" class="input-name" placeholder="Ваше имя*" data-parsley-type="digits" required="">

      <input type="text" name="tel" class="phone phone-req" placeholder="Ваш телефон (необязательно)" data-parsley-type="digits">
      <input type="text" name="email_adress" class="email_adress" placeholder="Ваш e-mail (необязательно)" data-parsley-type="digits">

      <div class="review-beton__rating">
        <span>Ваша оценка:</span>
        <div class="review-rating">
          <div class="review-rating__items">
            <input type="radio" id="review-rating__5" class="rating__item" name="review-rating" value="5">
            <label for="review-rating__5" class="rating__label"></label>
            <input type="radio" id="review-rating__4" class="rating__item" name="review-rating" value="4">
            <label for="review-rating__4" class="rating__label"></label>
            <input type="radio" id="review-rating__3" class="rating__item" name="review-rating" value="3">
            <label for="review-rating__3" class="rating__label"></label>
            <input type="radio" id="review-rating__2" class="rating__item" name="review-rating" value="2">
            <label for="review-rating__2" class="rating__label"></label>
            <input type="radio" id="review-rating__1" class="rating__item" name="review-rating" value="1">
            <label for="review-rating__1" class="rating__label"></label>
          </div>
        </div>
      </div>

      <textarea name="text_review" placeholder="Текст отзывы"></textarea>
      <input type="checkbox" name="checkGroup[]" id="checkGroup-3" value="1" required="" checked><label for="checkGroup-1">Я принимаю Условия пользования сайтом и условия
        <a href="#">Политики конфиденциальности</a></label>

      <button class="btn" name="send" type="submit">Отправить</button>
    </form>
    <button title="Закрыть" type="button" class="mfp-close"><img src="/img/icons/close-popup.png" alt="Закрыть" /></button>
  </div>
</div>
<!-- mmodal review END -->


<!-- calculate shipping cost -->
<div id="calculate-shipping" class="mfp-hide white-popup-block">
  <div>
    <h3>Рассчитать стоимость доставки</h3>
    <p>Оставьте номер телефона и мы свяжемся с Вами в ближайшее время</p>
    <form action="send.php" id="calculate-shipping-r" method="POST" data-validate="true">
      <input type="text" name="name" class="input-name" placeholder="Ваше имя" data-parsley-type="digits">
      <input type="text" name="tel" class="phone phone-req" placeholder="Ваш телефон" data-parsley-type="digits" required="">
      <textarea name="comment" placeholder="Комментарий"></textarea>
      <input type="checkbox" name="checkGroup[]" id="checkGroup-1" value="1" required="" checked><label for="checkGroup-1">Я принимаю Условия пользования сайтом и условия
        <a href="#">Политики конфиденциальности</a></label>
      <!--    <button class="btn" type="button">Заказать</button>-->
      <button class="btn" name="send" type="submit">Рассчитать стоимость</button>
    </form>
    <button title="Закрыть" type="button" class="mfp-close success__close"><img src="/img/icons/close-popup.png" alt="Закрыть" />
    </button>
  </div>
</div>
<!-- calculate shipping cost END  -->

<script>
  // window.addEventListener('scroll', (e) => {
  //   let height_top = window.innerHeight;
  //     console.log(window.pageYOffset);
  // }, false);
  // function raz() {
  //   var rect = div.getBoundingClientRect();
  //   div.innerHTML = 'top: ' + rect.top + '<br>right: ' + rect.right + '<br>bottom: ' + rect.bottom + '<br>left: ' + rect.left + '<br>width: ' + rect.width + '<br>height: ' + rect.height;
  // }
</script>

<!-- /modals -->

<nav class="menu">
  <div class="container">
    <ul>
      <li><a href="/о-компании/">О компании</a></li>
      <li><a href="/производство/">Производство</a></li>
      <li><a href="/цены/">Цены</a></li>
      <li><a href="/скидки/">Скидки</a></li>
      <li><a href="/калькулятор/">Калькулятор</a></li>
      <li><a href="/где-купить/">Где купить</a></li>
      <li><a href="/доставка/">Доставка</a></li>
      <li><a href="/оплата/">Оплата</a></li>
      <li><a href="/гарантии/">Гарантии</a></li>
      <li><a href="/контакты/">Контакты</a></li>
    </ul>
    <span class="menu__filter-btn"><i class="icon-menu"></i><strong>Подобрать бетон</strong></span>
    <span class="icon-menu"></span>
  </div>
</nav>


<section class="filter">
  <div class="container">
    <div class="filter__frame">
      <div class="filter__title">
        <strong>Подобрать бетон:</strong>
      </div>
      <div class="filter__menu">
        <ul>
          <li class="parent"><a href="#" class="filter-ckick" data-block="filter1">По классу и марке прочности</a>
            <div class="filter-block" id="filter1">
              <a href="/в7,5-м100/">В7,5 М100</a>
              <a href="/в12,5-м150/">В12,5 М150</a>
              <a href="/в15-м200/">В15 М200</a>
              <a href="/в20-м250/">В20 М250</a>
              <a href="/в22,5-м300/">В22,5 М300</a>
              <a href="/в25-м350/">В25 М350</a>
              <a href="/в30-м400/">В30 М400</a>

            </div>
          </li>
          <li class="parent"><a href="#" class="filter-ckick" data-block="filter2">По назначению</a>
            <div class="filter-block" id="filter2">
              <a href="/обычный/">Общестроительный</a>
              <!--              <a href="/специальный/">Специальный</a>-->
            </div>
          </li>
          <li class="parent"><a href="#" class="filter-ckick" data-block="filter3">По содержанию вяжущего вещества</a>
            <div class="filter-block" id="filter3">
              <a href="/товарный/">Товарный</a>
              <a href="/тощий/">Тощий</a>
              <!--              <a href="/жирный/">Жирный</a>-->
            </div>
          </li>
          <li class="parent"><a href="#" class="filter-ckick" data-block="filter4">По объемной массе</a>
            <div class="filter-block" id="filter4">
              <!--              <a href="/особо-тяжелый/">Особо тяжелый</a>-->
              <a href="/тяжелый/">Тяжелый</a>
              <a href="/легкий/">Легкий</a>
              <!--              <a href="/особо-легкий/">Особо легкий</a>-->
            </div>
          </li>
          <li class="more"><a href="#" class="filter-ckick" data-block="filter5">Еще</a>
            <div class="filter-block fb5" id="filter5">
              <a href="/особенности-при-работе-с-бетоном/">Особенности при работе</a>
              <!--              <a href="#">2 пункт</a>-->
              <!--              <a href="#">3пункт</a>-->
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>