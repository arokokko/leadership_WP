

$(document).ready(function(){

	// tabs
	$('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
		$(this)
		  .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
		  .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq($(this).index()).addClass('catalog__content_active');
	});

	// переключатели подробнее и назад в карточках
	function toggleSlide(item) {
		$(item).each(function(i) {
			$(this).on('click', function(e) {
				e.preventDefault();
				$('.card__content').eq(i).toggleClass('card__content_active');
				$('.card__info').eq(i).toggleClass('card__info_active');
			});
		});
	}
	
	toggleSlide('.card__more');
	toggleSlide('.card__goback');

	// Modal windows

	$('[data-modal=consultation]').on('click', function(){
		$('.overlay, #consultation').fadeIn('slow', function() {
			$('body').css('overflow', 'hidden');
		});
	});

	$('[data-modal=question]').on('click', function(){
		$('.overlay, #question').fadeIn('slow', function() {
			$('body').css('overflow', 'hidden');
		});
	});
	
	// $('.card_btn').each(function(i) {
	// 	$(this).on('click', function() {
	// 		$('#order .modal__descr').text($('.card__subtitle').eq(i).text());
	// 		$('.overlay, #order').fadeIn('slow');
	// 	});
	// });

	$('.card_btn').each(function(i) {

        $(this).on('click', function() {
            let descr = $('.card__subtitle').eq(i).text();
            $('#order .modal__descr').text(descr);
			$('.overlay, #order').fadeIn('slow');
        });

  	});

	$('.modal__close').on('click', function() {
		$('.overlay, #consultation, #question, #order, #thanks').fadeOut('fast', function() {
			$('body').css('overflow', 'visible');
		});
	});

	// закрытие модального окна щелчком по пустому полю
	$(window).on('click', function(e) {
        if (e.target.classList.contains('overlay')) {
            $('.overlay, #consultation, #question, #thanks, #order').fadeOut('fast', function() {
				$('body').css('overflow', 'visible');
			});
        }
	});
	
	//validate
	function valideForms(form) {
		$(form).validate({
			rules: {                
				name: "required",
				phone: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: "Please input your name",
				phone: "Please input your phone number",
				email: {
					required: "Please input your email",
					email: "Email should be in format name@domain.com"
				}
			}
		});
	}
	valideForms('#consultation-form');
	valideForms('#consultation form');
	valideForms('#order form');
	valideForms('#question form');


	// отправка писем
	$('form').submit(function(e) {               /* обращаемся ко всем form */
		e.preventDefault();                      /* убираем стандартные действия браузера - перезагрузку */
		$.ajax({                                   /* обращаемся к ajax в jqery */
			type: 'POST',                         /* говорим что будем отправлять данные на сервер */
			url: '/wp-content/themes/leadership/assets/mailer/smart.php',               /*  говорим куда будем отправлять */
			data: $(this).serialize()             /* указываем какие данные отправляем и обрабатываем их для сервера */
		}).done(function() {
			$(this).find("input").val("");     /* value всех input устанавливаем в пустую строку */
			$('#consultation, #question, #order').fadeOut();
			$('.overlay, #thanks').fadeIn('slow');
			$('form').trigger('reset');        /* перезагружаем все form */
		});
		return false;
	});

	//появление и исчезание иконки для скрола страницы вверх
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1300) {
			$('.pageup').fadeIn('slow');
		} else {
			$('.pageup').fadeOut();
		}
	});

	//smooth scroll
	$("a[href='#up']").click(function(){
		const _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top}, 1000);
		return false;
	});

	
	$('a[href="#catal"]').on('click', function(e){
		e.preventDefault();
		const __href = $(this).attr('href');
		$('html,body').animate({ scrollTop: $(__href).offset().top - 50 }, 1000);
	});

	$('a[href="#main"]').on('click', function(e){
		e.preventDefault();
		const __href = $(this).attr('href');
		$('html,body').animate({ scrollTop: $(__href).offset().top - 50 }, 1000);
	});
	

	//скрипт для анимаций
	new WOW().init();
});





