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

		//sticky bar
		let lastKnownScrollPosition = 0;
		let ticking = false;

		function doSomethingscolly(scrollPos) {
		  // Do something with the scroll position
		  if (scrollPos > 200) {
		  	$('.sticky-bar').addClass('is-active')
		  } else {
		  	$('.sticky-bar').removeClass('is-active')
		  }
		}

		document.addEventListener('scroll', function(e) {
		  lastKnownScrollPosition = window.scrollY;

		  if (!ticking) {
		    window.requestAnimationFrame(function() {
		      doSomethingscolly(lastKnownScrollPosition);
		      ticking = false;
		    });

		    ticking = true;
		  }
		});


	} //mql
})