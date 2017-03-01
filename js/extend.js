!function ($) {

	$(document).foundation();


	$('.multiple-items').slick({
		dots: true,
		arrows: false,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3
	});

	$('.single-item').slick({
		dots: false,
		arrows: false,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});


	$('.tribe-bar-disabled').remove();



	var hero = $('header');
$(window).scroll(function() {
    var scroll = $('header').offset().top; // look at this

    if (scroll >= 100) {
        hero.addClass('hidden');
    } else {
        hero.removeClass('hidden');

    }
});


$('.workshop-count').appendTo('header .workshop-link');


}(window.jQuery);