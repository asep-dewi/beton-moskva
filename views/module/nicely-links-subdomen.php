<!-- nicely -->
<section class="nicely bg_red">
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