$(document).ready(function(){$(function(){$("span.icon-menu").click(function(){$(this).parent('.container').find('ul').slideToggle(300);$(this).toggleClass("active");return false;});});$(function(){$(".menu__filter-btn").click(function(){$('.filter__menu').slideToggle(300);$(this).toggleClass("active");return false;});});var TabSwitcher=function(){var self=this,tabs=$('.tabs');tabs.each(function(){$(this).find('.tabs__link.is-active').next().addClass('is-open');});tabs.on('click','.tabs__link',function(event){self.open($(this),event);});$(document).on('click','[data-tab-open]',function(event){var tabElem=$(this).data('tab-open');self.open($(tabElem),event);if($(this).data('popup')==undefined){return false;}});self.open=function(elem,event){if(!elem.hasClass('is-active')){event.preventDefault();var parentTabs=elem.closest(tabs);parentTabs.find('.is-open').removeClass('is-open');elem.next().toggleClass('is-open');parentTabs.find('.is-active').removeClass('is-active');elem.addClass('is-active');}else{event.preventDefault();}};};var tabSwitcher=new TabSwitcher();var accordion=function(){$('.accordion').accordion({controlElement:'.accordion__head',contentElement:'.accordion__desc'});};$(window).on('load',function(){accordion();});});$(function(){$('.popup-modal').magnificPopup({type:'inline',preloader:false,focus:'.phone',modal:true});$(document).on('click','.mfp-close',function(e){e.preventDefault();$.magnificPopup.close();});});$('.popup-modal').click(function(){var puptitle=$(this).attr("data-title");$("#callback-modal h3").text(puptitle);});$(".phone").mask("+7 (999) 999-99-99");$('.carousel-inner').slick({centerMode:true,centerPadding:'0',slidesToShow:1});$("#heavy-beton").click(function(e){e.preventDefault();$("#light-beton").removeClass("active");$("#heavy-beton").addClass("active");$(".beton-views2").hide();$(".beton-views").fadeIn();});$("#light-beton").click(function(e){e.preventDefault();$("#heavy-beton").removeClass("active");$("#light-beton").addClass("active");$(".beton-views").hide();$(".beton-views2").fadeIn();});$(".filter-ckick,.select-block").click(function(){$(this).toggleClass("active");var datablock=$(this).attr("data-block");$("#"+datablock).toggle();});
$(document).ready(function(){
	$(".video_wrapper").click(function () {
        var a = $(this).attr("data-youtube");
        $(this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1" frameborder="0" class="video_testimonial" allowfullscreen></iframe>')
    });

    jQuery(function($){
		$(document).mouseup(function (e){
			var div = $(".select-block");
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

});