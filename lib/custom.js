jQuery(document).ready(function($){

	$('.slider .owl-carousel').owlCarousel({
		items: 1,
		dots: true,
		nav: true,
		navText: ["<img src='http://localhost/homelife/wp-content/themes/homelife/images/icons/icon-back.png'>","<img src='http://localhost/homelife/wp-content/themes/homelife/images/icons/icon-next.png'>"],
		center: true,
		loop: true,
		stagePadding: 0,
		smartSpeed: 450,
		mouseDrag: true
	});

	$('.hamburger').click(function(){
		$(this).toggleClass('hamburger--open');
		$('.mobile-menu').slideToggle('300');
	});

});