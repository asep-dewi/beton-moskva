<footer class="footer">
  <div class="container">
    <a href="#callback-modal" class="popup-modal btn btn_order" data-title="Заказать бетон">заказать бетон</a>
    <div class="footer__block">
      <div class="phone">
        <strong><a class="tel-a" href="tel:<?= $content['telhref'] ?>"><?= $content['tel'] ?></a></strong>
        <span class="call_order">
          <a href="#callback-modal" class="popup-modal link link_border" data-title="Заказать звонок">Заказать звонок</a>
        </span>
      </div>
    </div>
    <div class="footer__block">
      <div class="copyr">
        <p>&copy; <?php
                  $currentYear = date("Y");
                  echo $currentYear; ?> Бетон.Москва - производство и доставка бетона <?= $content['brand'] ?> (Glavmonolit)</p>
      </div>
    </div>
  </div>
</footer>