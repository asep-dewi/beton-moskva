<section class="block block__calc">
  <div class="container">
    <div class="row">
      <div class="col-md-7 calc-f-block">
        <form id="form__calc-be" action="#" class="form__calc">
          <div class="pad-lrt-40">
            <h2>Калькулятор бетона</h2>
            <p class="fz-22">Рассчитайте стоимость бетона <?= $content['service'][$_SESSION['service']]['service_11'] ?> с доставкой</p>
          </div>
          <div class="box__info">
            <p class="f8f9 pad-40">Так как большинство бетонных конструкций имеют сложную геометрическую форму, расчет их объема можно облегчить, применяя разбивку всей конструкции на более простые детали. Армирующие элементы обычно составляют 5 — 10% общего объема заливки, эту погрешность можно отнести к монтажным потерям.</p>
          </div>
          <div class="pad-lrb-40">
            <div class="row">
              <div class="col-md-6">
                <div class="select-block js-choice-first">
                  <select class="js-choice " name="select_beton" data-placeholder="Выберите бетон">
                    <option selected="">Выберите бетон</option>

                    <option value="Тяжелый бетон (гравий/гранит)">Тяжелый бетон (гравий/гранит)</option>
                    <option value="Легкий бетон (керамзит)">Легкий бетон (керамзит)</option>
                    <option value="Тощий бетон (дорожный)">Тощий бетон (дорожный)</option>
                    <option value="Цементный раствор">Цементный раствор</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="select-block">
                  <input type="text" name="select_massa" placeholder="Объем, м3">

                </div>
              </div>
              <div class="col-md-6">
                <div class="select-block">
                  <select class="js-choice" name="select_marka">
                    <option>Выберите марку прочности</option>
                    <option value="В7,5 М100">В7,5 М100</option>
                    <option value="В12,5 М150">В12,5 М150</option>
                    <option value="В15 М200">В15 М200</option>
                    <option value="В20 М250">В20 М250</option>
                    <option value="В22,5 М300">В22,5 М300</option>
                    <option value="В25 М350">В25 М350</option>
                    <option value="В30 М400">В30 М400</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <input type="text" name="tel" class="phone phone-req" placeholder="Ваш телефон" data-parsley-type="digits" required="">
                <!--                <input type="text" value="ул. Зои и Александра Космодем..">-->
              </div>
              <div class="col-md-12">
                <input type="checkbox" name="check" id="ch-1" value="1" required checked>
                <label for="ch-1">Я принимаю Условия пользования сайтом и условия Политики конфиденциальности</label>
              </div>
              <div class="col-md-6">
                <div class="box__delivery">Гарантируем доставку <br>дешевле, чем где-либо!</div>
              </div>
              <div class="col-md-6">
                <button class="btn">Рассчитать</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>