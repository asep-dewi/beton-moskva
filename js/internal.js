  var accordion = function () {
    $('.accordion').accordion({controlElement: '.accordion__head', contentElement: '.accordion__desc'});
  };
  $(window).on('load', function () {
    accordion();
  });


$(document).ready(function () {
  $(function () {
    $("span.icon-menu").click(function () {
      $(this).parent('.container').find('ul').slideToggle(300);
      $(this).toggleClass("active");
      return false;
    });
  });
  $(function () {
    $(".menu__filter-btn").click(function () {
      $('.filter__menu').slideToggle(300);
      $(this).toggleClass("active");
      return false;
    });
  });
  var TabSwitcher = function () {
    var self = this, tabs = $('.tabs');
    tabs.each(function () {
      $(this).find('.tabs__link.is-active').next().addClass('is-open');
    });
    tabs.on('click', '.tabs__link', function (event) {
      self.open($(this), event);
    });
    $(document).on('click', '[data-tab-open]', function (event) {
      var tabElem = $(this).data('tab-open');
      self.open($(tabElem), event);
      if ($(this).data('popup') == undefined) {
        return false;
      }
    });
    self.open = function (elem, event) {
      if (!elem.hasClass('is-active')) {
        event.preventDefault();
        var parentTabs = elem.closest(tabs);
        parentTabs.find('.is-open').removeClass('is-open');
        elem.next().toggleClass('is-open');
        parentTabs.find('.is-active').removeClass('is-active');
        elem.addClass('is-active');
      } else {
        event.preventDefault();
      }
    };
  };
  var tabSwitcher = new TabSwitcher();

});
$(function () {
  $('.popup-modal').magnificPopup({type: 'inline', preloader: false, focus: '.phone', modal: true});
  $(document).on('click', '.mfp-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
});
$('.popup-modal').click(function () {
  var puptitle = $(this).attr("data-title");
  $("#callback-modal h3").text(puptitle);
});
// $(".phone").mask("+7 (999) 999-99-99");
$('.carousel-inner').slick({centerMode: true, centerPadding: '0', slidesToShow: 1});
$("#heavy-beton").click(function (e) {
  e.preventDefault();
  $("#light-beton").removeClass("active");
  $("#heavy-beton").addClass("active");
  $(".beton-views2").hide();
  $(".beton-views").fadeIn();
});
$("#light-beton").click(function (e) {
  e.preventDefault();
  $("#heavy-beton").removeClass("active");
  $("#light-beton").addClass("active");
  $(".beton-views").hide();
  $(".beton-views2").fadeIn();
});
$(".filter-ckick,.choices__inner").click(function () {
  $(this).toggleClass("active");
  var datablock = $(this).attr("data-block");
  $("#" + datablock).toggle();
});
$(document).ready(function () {
  $(".video_wrapper").click(function () {
    var a = $(this).attr("data-youtube");
    $(this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1" frameborder="0" class="video_testimonial" allowfullscreen></iframe>')
  });

  jQuery(function ($) {
    $(document).mouseup(function (e) {
      var div = $(".choices__inner");
      if (!div.is(e.target)
        && div.has(e.target).length === 0) {
        div.removeClass('active');
      }
    });
  });

  // FancyBox
  $(".fancybox").fancybox();

  // document.querySelectorAll('.accordion__head').forEach((item) => {
  //   item.addEventListener('click', () => {
  //     item.nextElementSibling.style = '100%';
  //     console.log(item.nextElementSibling);
  //   });
  // })

  $('a.popup-modal--price').on("click", function (e) {
    e.preventDefault();
  });
  $('a.order-beton-click').on("click", function (e) {
    e.preventDefault();
  });
  $('.block__changeotz a.popup-modal').on("click", function (e) {
    e.preventDefault();
  });
  $('#calculate-shipping a.popup-modal').on("click", function (e) {
    e.preventDefault();
  });



  if ($('#calc1').length) {
    let tab = function () {
      let tabNav = document.querySelectorAll('.tabs2-nav__item');
      let tabContent = document.querySelectorAll('.tab2');
      let tabName;

      tabNav.forEach(item => {
        item.addEventListener('click', selectTabNav);
      });

      function selectTabNav() {
        tabNav.forEach(item => {
          item.classList.remove('is-active');
        });
        this.classList.add('is-active');

        tabName = this.getAttribute('data-tab-name');
        selectTabContent(tabName);
      }

      function selectTabContent(tabName) {
        tabContent.forEach(item => {
          item.classList.contains(tabName) ? item.classList.add('is-active') : item.classList.remove('is-active');
        });
      }
    };

    tab();


    let container_content = document.querySelector('.tabs2__content');
    let resultWeight = document.querySelector('#input_calc_weight');
    let resultTotal = document.querySelector('#input_calc_total');

    let input_calc_total = document.querySelector('#input_calc_total');
    let input_calc_weight = document.querySelector('#input_calc_weight');

    let inputs_result = document.querySelectorAll('input.input__calc1');
    inputs_result.forEach((el) => {
      el.setAttribute('readonly', 'true');

    });


    container_content.addEventListener('click', (e) => {

      let target = e.target;

      let price = parseInt(target.parentNode.parentNode.parentNode.querySelector('li:nth-child(3)').textContent);
      console.log(price);
      /*// на самом деле тут мы берем первый элемент по этому пути*/


      if (target.classList.contains('number-minus')) {

        /*target.nextSibling.addEventListener("input", (e) => {
          resultWeight.textContent = target.nextSibling.value + 5;
        });*/

        if (target.nextSibling.value > 0) {
          target.nextSibling.value = Number(target.nextSibling.value) - 1;
          resultWeight.textContent = Number(resultWeight.textContent) - 1;

          resultTotal.textContent = Number(resultTotal.textContent) - price;

          input_calc_weight.value = Number(input_calc_weight.value) - 1;
          input_calc_total.value = Number(input_calc_total.value) - price;
        }
      }

      if (target.classList.contains('number-plus')) {

        target.previousSibling.addEventListener("input", (e) => {
          resultWeight.textContent = target.previousSibling.value;
        });

        target.previousSibling.value = Number(target.previousSibling.value) + 1;
        resultWeight.textContent = Number(resultWeight.textContent) + 1;
        resultTotal.textContent = Number(resultTotal.textContent) + price;

        input_calc_weight.value = Number(input_calc_weight.value) + 1;
        input_calc_total.value = Number(input_calc_total.value) + price;

      }

    });
  }



let calcInputs = document.querySelectorAll('.num');
let resultWeight = document.querySelector('#input_calc_weight');
let resultEnd = document.querySelector('#input_calc_total');

calcInputs.forEach(function(input) {
  input.oninput = function() {
    let price = input.getAttribute("data-price");
    let inputValue = input.value * 1;
    resultWeight.value = inputValue.toFixed(0);
    let totalPrice = inputValue * price;
    resultEnd.value = totalPrice.toFixed(0);
  };
});







  if ($('#header-sender-r').length) {
    $("#header-sender-r").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          $.magnificPopup.close();
          t.tel.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');

        }
      });
    });
  }

  if ($('#form-hard-to-count').length) {
    $("#form-hard-to-count").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          t.tel.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('.order-beton-click').length) {
    document.querySelector('.order-beton-click').addEventListener('click', () => {
      document.querySelector('.order-beton').classList.add('display-visible');

      $("#order-beton-r").submit(function (e) {
        e.preventDefault();
        let t = this;
        console.log('t: ', t);

        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
          type: 'POST', //Метод отправки
          url: '/send.php', //путь до php фаила отправителя
          data: form_data,
          success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
            document.querySelector('.order-beton').classList.remove('display-visible');
            document.querySelector('body').classList.remove('modal-open');
            t.tel.value = "";
            t.name.value = "";
            //
            document.querySelector('.form-b--success').classList.add('display-visible');
            console.log('send');

          }
        });
      });
    });
  }

  let all_popup = document.querySelectorAll('.popup-modal--price');
  all_popup.forEach((item) => {
    item.addEventListener('click', (e) => {
      let targetBlock = e.target.parentNode.parentNode;
      let order_beton = document.querySelector('#order-beton-detail');
      order_beton.querySelector('h3 span').innerHTML = targetBlock.children[0].textContent.trim();


      $("#order-beton-d").submit(function (e) {
        e.preventDefault();
        let t = this;

        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
          type: 'POST', //Метод отправки
          url: '/send.php', //путь до php фаила отправителя
          data: form_data,
          success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
            $.magnificPopup.close();
            t.tel.value = "";

            document.querySelector('.form-b--success').classList.add('display-visible');
            console.log('send');
          }
        });
      });
    })
  });

  if ($('#lower-price').length) {
    $("#lower-price").submit(function (e) {
      e.preventDefault();
      let t = this;

      //email_adress__id
      //email_adress__hidden

      var form_data = $(this).serialize(); //собераем все данные из формы

      let random_str = Math.random().toString(36).substring(7);
      form_data = form_data +'&bonus_code=' + random_str;
      console.log('form_data: ', form_data);


      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          // t.email_adress.value = "";

          // document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send2forClient.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          t.email_adress.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
        }
      });
    });
  }

  if ($('#order-beton-3').length) {
    $("#order-beton-3").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          t.tel.value = "";
          t.name.value = "";
          t.beton_volume.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('#order-beton-calc').length) {
    $("#order-beton-calc").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          t.tel.value = "";
          document.querySelector('#order-beton-calc #input_calc_weight').value = 0;
          document.querySelector('#order-beton-calc #input_calc_total').value = 0;

          let oll_inputs = document.querySelectorAll('input.num');
          oll_inputs.forEach((el) => {
            el.value = 0;

          });

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('#order-beton-questions').length) {
    $("#order-beton-questions").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          t.tel.value = "";
          t.name.value = "";
          t.text_question.value = "";
          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('#review-beton-d').length) {
    $("#review-beton-d").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          $.magnificPopup.close();
          t.tel.value = "";
          t.text_review.value = "";
          t.email_adress.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('#calculate-shipping-r').length) {
    $("#calculate-shipping-r").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          $.magnificPopup.close();
          t.tel.value = "";
          t.name.value = "";
          t.comment.value = "";

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  if ($('#form__calc-be').length) {
    $("#form__calc-be").submit(function (e) {
      e.preventDefault();
      let t = this;

      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
        type: 'POST', //Метод отправки
        url: '/send.php', //путь до php фаила отправителя
        data: form_data,
        success: function (data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
          $.magnificPopup.close();
          t.tel.value = "";

          console.log(t.select_beton.value);
          console.log(t.select_massa.value);
          console.log(t.select_marka.value);
          t.select_beton.value;
          t.select_massa.value;
          t.select_marka.value;

          document.querySelector('.form-b--success').classList.add('display-visible');
          console.log('send');
        }
      });
    });
  }

  
//

  document.querySelectorAll('.success__close').forEach(item => {
    item.addEventListener('click', (e) => {
      document.querySelector('.form-b--success').classList.remove('display-visible');
      document.querySelector('.order-beton').classList.remove('display-visible');
      // document.querySelector('.review-beton').classList.remove('display-visible');
    });
  });

  $('.phone-req').mask("+7 (999) 999-99-99");
  $('.phone-req-2').mask("+7 (999) 999-99-99");
  // $('.phone-req').inputmask({"mask": "+7 (999) 99-99-999"}); //specifying options


  /*function orderNum() {
    const count = document.querySelector('.order-number');
    let hour = new Date().getHours();
    let number = 2 + hour;

    count.innerHTML = `${number} раз`;
  }
  if ($('.order-number').length) {
    orderNum();
  }*/

 





});

function orderNum() {
  const count = document.querySelector('.order-number');
  let currentTime = new Date();
  let hour = currentTime.getHours();

  if (hour >= 8 && hour <= 17) {
    let randomNumber = Math.floor(Math.random() * 2) + 1;
    let number = hour - 7 + randomNumber;
    let pluralSuffix = '';

    if (number === 1) {
      pluralSuffix = '';
    } else if (number >= 2 && number <= 4) {
      pluralSuffix = 'а';
    } else {
      pluralSuffix = '';
    }

    count.innerHTML = `${number} раз${pluralSuffix}`;
  } else {
    count.innerHTML = Math.floor(Math.random() * 9) + 9 + ' раз';
  }
}

// Вызов функции orderNum каждый час
setInterval(orderNum, 60 * 60 * 1000);

// Вызов функции orderNum при загрузке страницы
window.addEventListener('DOMContentLoaded', orderNum);
















