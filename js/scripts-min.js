jQuery(document).ready((function(e){if(window.matchMedia("(max-width: 1024px)").matches){e(".burger").click((function(t){t.preventDefault(),e(this).toggleClass("is-active"),e(".nav-bottom, body").toggleClass("is-active"),e(".menu-item-has-children .nav-plus, .sub-menu").removeClass("is-active")})),e(".menu-item-has-children > .nav-plus").click((function(t){t.preventDefault(),e(this).toggleClass("is-active"),e(this).next(".sub-menu").toggleClass("is-active")}));let t=0,i=!1;document.addEventListener("scroll",(function(s){t=window.scrollY,i||(window.requestAnimationFrame((function(){t>200?e(".sticky-bar").addClass("is-active"):e(".sticky-bar").removeClass("is-active"),i=!1})),i=!0)}))}}));