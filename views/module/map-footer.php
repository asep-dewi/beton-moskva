<section class="block block__map">
  <div id="map"></div>
  <div class="container">
    <div class="block__map__frame">
      <p><strong>Наш адрес:</strong> 125424, г. Москва, ул. Летная, 98</p>
      <p><strong>Номер телефона:</strong> <?= $content['tel'] ?></p>
      <p><strong class="fz-18">Работаем круглосуточно!</strong></p>
    </div>
  </div>
</section>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
  ymaps.ready(init);
  var myMap,
    myPlacemark;

  function init() {
    myMap = new ymaps.Map("map", {
      center: [55.825310, 37.418694],
      zoom: 12,
      controls: []
    });

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: '',
      balloonContent: ''
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      // iconImageHref: '/img/icons/map.png',
      // Размеры метки.
      iconImageSize: [40, 43],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
    });

    myMap.geoObjects.add(myPlacemark);
  }
</script>