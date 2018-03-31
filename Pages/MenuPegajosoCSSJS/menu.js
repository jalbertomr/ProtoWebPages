var menu = document.getElementById('menu');
var altura = menu.offsetTop;

window.addEventListener('scroll', function () {
	"use strict";
	if (window.pageYOffset > altura) {
		menu.classList.add('fixed');
	} else {
		menu.classList.remove('fixed');
	}
});