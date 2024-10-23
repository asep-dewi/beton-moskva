<!-- nicely -->
<section class="nicely bg_red">
  <div class="links">
    <div class="links__wrapper">

      <div class="links__title">Бетон</div>

      <ul class="links__list">
        <li class="links__item"><a class="links__link" href="/обычный/">Общестроительный</a></li>
        <li class="links__item"><a class="links__link" href="/товарный/">Товарный</a></li>
        <li class="links__item"><a class="links__link" href="/тощий/">Тощий</a></li>
        <li class="links__item"><a class="links__link" href="/тяжелый/">Тяжелый</a></li>
        <li class="links__item"><a class="links__link" href="/легкий/">Легкий</a></li>
      </ul>

      <ul class="links__list">
        <li class="links__item"><a class="links__link" href="/в7,5-м100/">В7,5 М100</a></li>
        <li class="links__item"><a class="links__link" href="/в12,5-м150/">В12,5 М150</a></li>
        <li class="links__item"><a class="links__link" href="/в15-м200/">В15 М200</a></li>
        <li class="links__item"><a class="links__link" href="/в20-м250/">В20 М250</a></li>
        <li class="links__item"><a class="links__link" href="/в22,5-м300/">В22,5 М300</a></li>
        <li class="links__item"><a class="links__link" href="/в25-м350/">В25 М350</a></li>
        <li class="links__item"><a class="links__link" href="/в30-м400/">В30 М400</a></li>
      </ul>

    </div>
  </div>

  <div class="links">
    <div class="links__wrapper">
      <div class="links__title">Города</div>
      <ul class="links__list">
        <?php
        foreach ($content['main_menu_place'] as $item) {

          if ($item['link'] <> 'null') {
            if ($item['link']) {
              $link = 'https://' . $item['link'] . '.' . $content['main_domen'];
            } else {
              $link = 'https://' . $content['main_domen'];
            }
            echo '<li class="links__item"><a class="links__link" href="' . $link . '">' . $item['text'] . '</a></li>';
          }
        }
        ?>
      </ul>
    </div>
  </div>
</section>
<!-- nicely END -->