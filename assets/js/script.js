

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

	// calculate width of scroll line 
	// function calcScroll() {                               
	// 	let div = document.createElement('div');

	// 	div.style.width = '50px';
	// 	div.style.height = '50px';
	// 	div.style.overflowY = 'scroll';
	// 	div.style.visibility = 'hidden';

	// 	document.body.appendChild(div);
	// 	let scrollWidht = div.offsetWidth - div.clientWidth;

	// 	return scrollWidht;
	// }
	// scroll line width

	// const scroll = calcScroll();   
	            

	// const scroll = calcScroll();              


	$('[data-modal=consultation]').on('click', function(){
		$('.overlay, #consultation').fadeIn('slow'); 
		// $('body').css('overflow', 'hidden');
		// $('body').css('margin-right', `${scroll}px`);
		
	});

	$('[data-modal=question]').on('click', function(){
		$('.overlay, #question').fadeIn('slow');
		// $('body').css('overflow', 'hidden');
		// $('body').css('margin-right', `${scroll}px`);
		
	});
	

	$('.card_btn').each(function(i) {

        $(this).on('click', function() {
            let descr = $('.card__subtitle').eq(i).text();
            $('#order .modal__descr').text(descr);
			$('.overlay, #order').fadeIn('slow'); 
			// $('body').css('overflow', 'hidden');
			// $('body').css('margin-right', `${scroll}px`);
        });

  	});

	$('.modal__close').on('click', function() {
		$('.overlay, #consultation, #question, #order, #thanks').fadeOut(); 
		// $('body').css('overflow', 'visible');
		// $('body').css('margin-right', `0px`);
	});

	// закрытие модального окна щелчком по пустому полю
	$(window).on('click', function(e) {
        if (e.target.classList.contains('overlay')) {
            $('.overlay, #consultation, #question, #thanks, #order').fadeOut(); 
			// $('body').css('overflow', 'visible');
			// $('body').css('margin-right', `0px`);
			
        }
	});
	

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
		$('html,body').animate({ scrollTop: $(__href).offset().top }, 1000);
	});

	setTimeout(function(){
		document.getElementById('map').src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.0890137565843!2d24.13462201519957!3d56.964407705363364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb5269ce9db%3A0x9285344dd284540b!2zQ8STc3UgaWVsYSA1YiwgVmlkemVtZXMgcHJpZWvFoXBpbHPEk3RhLCBSxKtnYSwgTFYtMTAxMiwg0JvQsNGC0LLQuNGP!5e0!3m2!1sru!2s!4v1590760020557!5m2!1sru!2s';
	  },3000);
	
});

