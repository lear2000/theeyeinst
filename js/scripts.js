jQuery(document).ready(function($) {
	//mobile nav
	let mql = window.matchMedia('(max-width: 1024px)');
	if (mql.matches) {
	$('.burger').click(function(event) {
			event.preventDefault();
			$(this).toggleClass('is-active');
			$('.nav-bottom, body').toggleClass('is-active');
			//reset menu
			$('.menu-item-has-children .nav-plus, .sub-menu').removeClass('is-active');

	});
		//child
		$('.menu-item-has-children > .nav-plus').click(function(event) {
			event.preventDefault();
			$(this).toggleClass('is-active');
			$(this).next('.sub-menu').toggleClass('is-active');
		});
	} //mql
})