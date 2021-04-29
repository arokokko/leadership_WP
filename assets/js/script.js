

$(document).ready(function(){
	const contactsWrapper = document.querySelector('.footer__contacts-wrapper');
	const mapTriggers = contactsWrapper.querySelectorAll('[data-modal=map]');
	const mapDestination = document.querySelector('#google_map');
	const thanks = document.querySelector('#thanks');
	const elemForCopy = document.querySelector('.footer__mail-forcopy');
	const copyEmail = document.querySelector(".footer__mail-copy");
	

	// maps
	function showMap() {
		contactsWrapper.addEventListener('click', (e) => {
			e.preventDefault();
			const target = e.target;
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

	// modal map appear
	$('[data-modal=map]').on('click', function(){
		$('.overlay, #map').fadeIn('slow');
		showMap();
	});

	// cookie 
	const cookieStorage = {
		getItem: (key) => {
			const cookies = document.cookie
							.split(";")
							.map(elem => elem.split("="))
							.reduce((acc, [key, value]) => ({...acc, [key.trim()] : value}), {});
			
			return cookies[key];
		},
		setItem: (key, value) => {
			document.cookie = `${key}=${value};max-age=31536000`;
		}
	};
	const storageType = cookieStorage;
	const consentType = "cookie_consent";
	const cookiePopup = document.querySelector('#cookie');

	function showCookiePopup() {
		if(!storageType.getItem(consentType)) {
			cookiePopup.classList.remove('hide');
		}
	}

	function saveToStorage() {
		storageType.setItem(consentType, 'yes');
	} 

	showCookiePopup();

	// cookie modal disappear
	$('[data-modal=cookie]').on('click', function(){
		saveToStorage();
		$('#cookie').fadeOut('slow');
	});

	// tabs
	$('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
		$(this)
		  .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
		  .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq($(this).index()).addClass('catalog__content_active');
	});

	// switch forward and back in cards
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
			$('#hidden_field').val(descr);
			$('.overlay, #order').fadeIn('slow');
        });

  	});

	// close modal window
	$('.modal__close').on('click', function() {
		$('.overlay, #consultation, #question, #order, #thanks, #map').fadeOut();
		cleanIframe();
	});

	// close modal window with click by empty field
	$(window).on('click', function(e) {
        if (e.target.classList.contains('overlay')) {
            $('.overlay, #consultation, #question, #thanks, #order, #map').fadeOut();
			cleanIframe();
        }
	});
	
	// send messages
	$('form').submit(function(e) {               
		e.preventDefault();                      
		$.ajax({                                   
			type: 'POST',                         
			url: '/wp-content/themes/leadership/assets/mailer/smart.php',              
			data: $(this).serialize()             
		}).done(function() {
			$(this).find("input").val("");     
			$('#consultation, #question, #order').fadeOut();
			addScriptGoogle();
			$('.overlay, #thanks').fadeIn('slow');
			$('form').trigger('reset');        
		});
		return false;
	});
	

	// appear and disappear icon to scroll up
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

	// google metrica
	function addScriptGoogle() {
		if(document.querySelector('.googleScript')) {
			return;
		} else {
			const script = document.createElement('script');
			script.classList.add('googleScript');
			script.type = 'text/javascript';
			script.innerHTML = "gtag('event', 'conversion', {'send_to': 'AW-379395261/Ota3CLO-u4sCEL259LQB'})";
			thanks.appendChild(script);
		}
	}

	// copy email to clipboard
	function getCopy() {
		const range = document.createRange();
		range.selectNode(elemForCopy);
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(range);
		document.execCommand('copy');
		window.getSelection().removeAllRanges();
		copyEmail.textContent = "copied";
		setTimeout(() => {
			copyEmail.textContent = "copy the email";
		}, 1000);
	}

	copyEmail.addEventListener('click', (e) => {
		e.preventDefault();
		getCopy();
	});

});





