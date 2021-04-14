

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
		$('.overlay, #consultation').fadeIn('slow');
	});

	$('[data-modal=question]').on('click', function(){
		$('.overlay, #question').fadeIn('slow');
	});


	$('.card_btn').each(function(i) {

        $(this).on('click', function() {
            let descr = $('.card__subtitle').eq(i).text();
            $('#order .modal__descr').text(descr);
			$('.overlay, #order').fadeIn('slow');
        });

  	});

	$('.modal__close').on('click', function() {
		$('.overlay, #consultation, #question, #order, #thanks').fadeOut();
	});

	// закрытие модального окна щелчком по пустому полю
	$(window).on('click', function(e) {
        if (e.target.classList.contains('overlay')) {
            $('.overlay, #consultation, #question, #thanks, #order').fadeOut();
        }
	});
	
	// отправка писем
	$('form').submit(function(e) {               
		e.preventDefault();                      
		$.ajax({                                   
			type: 'POST',                         
			url: '/wp-content/themes/leadership/assets/mailer/smart.php',              
			data: $(this).serialize()             
		}).done(function() {
			$(this).find("input").val("");     
			$('#consultation, #question, #order').fadeOut();
			$('.overlay, #thanks').fadeIn('slow');
			$('form').trigger('reset');        
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


	// setTimeout(getMap, 3000);
	
	// function getMap() {
	// 	document.getElementById('map').src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7798.40626024172!2d109.18995827436449!3d12.234521203319698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067abd48056bb%3A0xcbba08a13cd1b44b!2sLeadership%20TSC!5e0!3m2!1sru!2s!4v1617514419581!5m2!1sru!2s" ;
	// }
	

	

});





