<!-- nicely -->
<section class="nicely bg_red">
    <div class="links">
        <div class="links__wrapper">

            <?php if(isset($content['region'][$_SESSION['region']]['okrug_menu_place'])) { ?>
                <div class="district">
                    <div class="links__title"><?php $content['region'][$_SESSION['region']]['title_okrug_menu_place'] ?></div>
                    <div class="links__title">Районы</div>

                    <ul class="links__list">
                        <?php
                        foreach ($content['region'][$_SESSION['region']]['okrug_menu_place'] as $item)
                        {
                            if (isset($content['domens'][$_SESSION['domen']]['main_menu_region']['part1'][$_SESSION['region']]['link'])){
                                echo '<li class="links__item"><a class="links__link" href="/'.$content['domens'][$_SESSION['domen']]['main_menu_region']['part1'][$_SESSION['region']]['link'].'/'.$item['link'].'/">'.$item['text'].'</a></li>';
                            }
                            if (isset($content['domens'][$_SESSION['domen']]['main_menu_region']['part2'][$_SESSION['region']]['link'])){
                                echo '<li class="links__item"><a class="links__link" href="/'.$content['domens'][$_SESSION['domen']]['main_menu_region']['part2'][$_SESSION['region']]['link'].'/'.$item['link'].'/">'.$item['text'].'</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- nicely END -->