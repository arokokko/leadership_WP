

$(document).ready(function(){
	const contactsWrapper = document.querySelector('.footer__contacts-wrapper');
	const mapTriggers = contactsWrapper.querySelectorAll('[data-modal=map]');
	const mapDestination = document.querySelector('#google_map');

	// функция загрузки и показа карты
	showMap();
	function showMap() {

		contactsWrapper.addEventListener('click', ({target}) => {
			if(target.hasAttribute('data-src')) {
				mapTriggers.forEach((item) => {
					if(item === target) {
						mapDestination.src = item.getAttribute('data-src');
					}
				});
			}
			return; 
		});
	}

	function cleanIframe() {
		mapDestination.src = "";
	}

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

	$('[data-modal=map]').on('click', function(){
		$('.overlay, #map').fadeIn('slow');
	});


	$('.card_btn').each(function(i) {

        $(this).on('click', function() {
            let descr = $('.card__subtitle').eq(i).text();
            $('#order .modal__descr').text(descr);
			$('#hidden_field').val(descr);
			$('.overlay, #order').fadeIn('slow');
        });

  	});

	// закрытие модального окна
	$('.modal__close').on('click', function() {
		$('.overlay, #consultation, #question, #order, #thanks, #map').fadeOut();
		cleanIframe();
	});

	// закрытие модального окна щелчком по пустому полю
	$(window).on('click', function(e) {
        if (e.target.classList.contains('overlay')) {
            $('.overlay, #consultation, #question, #thanks, #order, #map').fadeOut();
			cleanIframe();
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


	

});





