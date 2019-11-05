/* Demo JS File */
$(document).ready(function() {

	//member menu, always set the menu as 'show'
	$(window).resize(function(){
		if($( window ).width() > 767){
			$('#account_menu').addClass('show');
		}
	});

// Returns width of HTML document
// $( document ).width();)

	/***************** NAV Menu  ******************/
	$(function() {
		$('.navbar-toggler').on('click', function(){
			var $header = $('.header'),
				$html = $('html');
			if ($header.hasClass('active')){
				$header.removeClass('active');
				$html.removeClass('open-nav');
			} else {
				$header.addClass('active');
				$html.addClass('open-nav');
			}

			// close the user popup panel
			$('.navbar-user').removeClass('active');
			$('.user-toggle').removeClass('active');

		});


		/***************** Member Icon  ******************/
		$('.member-icon').on('click', function(){
			var $icon = $('.member-icon');
			if ($icon.hasClass('active')){
				$icon.removeClass('active');
				// $toggler.css('display', 'none');				// $html.removeClass('open-nav');
			} else {
				$icon.addClass('active');
				// $toggler.show();
				// $html.addClass('open-nav');
			}
		})

		/***************** NAV Product  ******************/
		$('.product-nav-toggler').on('click', function(){
			var $toggler = $('.product-nav-collapse');
			var $icon = $('.product-nav-icon');
			if ($toggler.hasClass('active')){
				$toggler.removeClass('active');
				$icon.removeClass('active');
				// $toggler.css('display', 'none');				// $html.removeClass('open-nav');
			} else {
				$toggler.addClass('active');
				$icon.addClass('active');
				// $toggler.show();
				// $html.addClass('open-nav');
			}
		});
		// mobile used, check which page user clicked
		$('.nav-product').children().each(function(idx, val){
			var $target = $(this).find('a');
			if($target.attr('href') == window.location.pathname){
				$target.addClass('active');
			}else{
				$target.removeClass('active');
			}
		});

		/***************** user popup panel  ******************/
		var $user_target = $('.user-toggle');
		$user_target.on('mouseenter', function(){
			$('.navbar-user').addClass('active');
			$('.user-toggle').addClass('active');
			$chk_user_target = true;

			var $header = $('.header'),
			$html = $('html');
			if ($header.hasClass('active')){
				$header.removeClass('active');
				$html.removeClass('open-nav');
			}
		}).on('mouseleave', function(){
			// $('.navbar-user').removeClass('active');
			// $('.user-toggle').removeClass('active');
		});
		$('.user-header .close').on('click', function(){
			$('.navbar-user').removeClass('active');
			$('.user-toggle').removeClass('active');
			$chk_user_target = false;
		});
		$('.navbar-user').on('mouseleave', function(){
			$('.navbar-user').removeClass('active');
			$('.user-toggle').removeClass('active');
		});

		// $('.user-toggle,.user-header .close').on('click', function(event){
		// 	// if(!event.target.hasClass('user-content')){
		// 		var $userpanel = $('.user-toggle');
		// 		if($userpanel.hasClass('active')){
		// 			$userpanel.removeClass('active');
		// 			$('#overlay').css('display', 'none');
		// 		}else{
		// 			$userpanel.addClass('active');
		// 			$('#overlay').show();
		// 		}
		// 		$('.navbar-user').toggle();
		//
		// 		var $header = $('.header'),
		// 			$html = $('html');
		// 		if ($header.hasClass('active')){
		// 			$header.removeClass('active');
		// 			$html.removeClass('open-nav');
		// 		}
		//
		// 	// }
		// });
		// $('#overlay').on('click', function(){
		// 	var $userpanel = $('.user-toggle');
		// 	if($userpanel.hasClass('active')){
		// 		$userpanel.removeClass('active');
		// 	}else{
		// 		$userpanel.addClass('active');
		// 	}
		// 	$('.navbar-user').toggle();
		//
		// 	var $header = $('.header'),
		// 		$html = $('html');
		// 	if ($header.hasClass('active')){
		// 		$header.removeClass('active');
		// 		$html.removeClass('open-nav');
		// 	}
		//
		// 	$('#overlay').css('display', 'none');
		// })

		$('.tab-product-support nav>a').on('click', function(e) {
			// if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
				e.preventDefault();
				var target = $(this.hash),
					$header = $('.header');
				if (target.length) {
					$('html,body').stop().animate({
						scrollTop: target.offset().top
					}, 600);
					return false;
				}
			// }
		});

		$('.an-scroll').on('click', function(e) {
			var target = $(this).parents('section').next('section');
			$('html,body').stop().animate({
				scrollTop: target.offset().top
			}, 600);
			return false;
		});

		$('.btn-gotop').on('click', function(e) {
			$('html,body').stop().animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});

	/***************** Spec Color  ******************/
	$(function() {
		$('.spec-color-list').delegate('li', 'click', function(e){
			if ($(this).hasClass('active')) return;

			var $list = $(e.delegateTarget),
				$img = $list.siblings('img'),
				$item = $list.find('li');

			$item.removeClass('active');
			$(this).addClass('active');
			$img.attr('src', $(this).data('image'));
		});
	});

	/***************** Form  ******************/
	$(function() {
		$('.email-subscription-form').on('submit', function(e){
			e.preventDefault();

			var form = $(this).serializeArray();
			this.reset();

			if(!$.isEmptyObject(form)) {
				$.post('/subscription', form);
			}

			alert('感謝您的訂閱!');
		});
	});

});
