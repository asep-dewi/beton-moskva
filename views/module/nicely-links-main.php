<!-- nicely -->


<div class="links-footer">

  <div class="links-footer__box">
    <p class="links-footer__title">Города</p>
    <ul class="links-footer__list">
      <?php
      foreach ($content['main_menu_place'] as $item) {

        if ($item['link'] <> 'null') {
          if ($item['link']) {
            $link = 'https://' . $item['link'] . '.' . $content['main_domen'];
          } else {
            $link = 'https://' . $content['main_domen'];
          }
          echo '<li  class="links-footer__item"><a href="' . $link . '">' . $item['text'] . '</a></li>';
        }
      }
      ?>
    </ul>
  </div>


  <div class="links-footer__box">
    <?php if (isset($content['domens'][$_SESSION['domen']]['main_menu_region'])) { ?>
      <p class="links-footer__title"><?= $content['domens'][$_SESSION['domen']]['title_main_menu_region'] ?></p>
      <?php if (isset($content['domens'][$_SESSION['domen']]['main_menu_region']['part1'])) { ?>
        <ul class="links-footer__list">
          <?php foreach ($content['domens'][$_SESSION['domen']]['main_menu_region']['part1'] as $item) {
            echo '<li class="links-footer__item"><a href="/' . $item['link'] . '/">' . '' . $item['text'] . '</a></li>';
          } ?>
          <?php foreach ($content['domens'][$_SESSION['domen']]['main_menu_region']['part2'] as $item) {
            echo '<li class="links-footer__item"><a href="/' . $item['link'] . '/">' . '' . $item['text'] . '</a></li>';
          } ?>
        </ul>
      <?php } ?>
    <?php } ?>
  </div>

  <div class="links-footer__box">
    <p class="links-footer__title">Бетон</span></p>
<!--    <p class="links-footer__title">Бетон по классу <span style="display: block">и марке прочности</span></p>-->
    <ul class="links-footer__list links-footer__list--block">
      <li class="links__item"><a class="links__link" href="/обычный/">Общестроительный</a></li>
      <li class="links__item"><a class="links__link" href="/товарный/">Товарный</a></li>
      <li class="links__item"><a class="links__link" href="/тощий/">Тощий</a></li>
      <li class="links__item"><a class="links__link" href="/тяжелый/">Тяжелый</a></li>
      <li class="links__item"><a class="links__link" href="/легкий/">Легкий</a></li>
      <hr>
      <li class="links-footer__item"><a href="/в7,5-м100/">Бетон В7,5 М100</a></li>
      <li class="links-footer__item"><a href="/в12,5-м150/">Бетон В12,5 М150</a></li>
      <li class="links-footer__item"><a href="/в15-м200/">Бетон В15 М200</a></li>
      <li class="links-footer__item"><a href="/в20-м250/">Бетон В20 М250</a></li>
      <li class="links-footer__item"><a href="/в22,5-м300/">Бетон В22,5 М300</a></li>
      <li class="links-footer__item"><a href="/в25-м350/">Бетон В25 М350</a></li>
      <li class="links-footer__item"><a href="/в30-м400/">Бетон В30 М400</a></li>
      </ul>
    </ul>
  </div>

</div>
<!-- nicely END -->