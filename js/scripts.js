jQuery(document).ready(function ($) {
	$('.reviews-slider').owlCarousel({
		loop:true,
		margin: 109,
		nav:true,
		dots: true,
		items: 2,
		autoHeight: true,
		center: true,
		responsive:{
			0:{
				items: 1,
				margin: 0,
			},
			992:{
				items: 2,
				margin: 109,
			}
		}
	});

	$('.faq-item-open').click(function () {
		$(this).toggleClass('active').parent().next('.faq-item-description').slideToggle('fast');
	});

	$("a[href^='#']").on("click", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
	});

	$.fn.isInViewport = function() {
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();

		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();

		return elementBottom > viewportTop && elementTop < viewportBottom - 200;
	};

	function animation() {
		$('.animation').each(function () {
			if ($(this).isInViewport()) {
				$(this).addClass('animation-on');
			} else {
				$(this).removeClass('animation-on');
			}
		});
	}

	animation();

	$(window).scroll(function() {
		animation();
	});
});