'use strict';

document.addEventListener('DOMContentLoaded', () => {

	$("#phone").mask("8 (999) 999 99 99");
	$("#phone2").mask("8 (999) 999 99 99");
	$("#phone8").mask("8 (999) 999 99 99");
	$("#phone9").mask("8 (999) 999 99 99");










	// показываем левое мобильное меню
	$('.humb').on('click', function (e) {
		e.preventDefault();
		console.log('humb');

		$('.overlay_left').addClass('overlay_leftActive');

		setTimeout(() => {
			$('.left_nav').addClass('left_navActive');
		}, 200);
	});



	$('.overlay_left, .closeLeft').on('click', function (e) {
		e.preventDefault();

		$('.left_nav').removeClass('left_navActive');

		setTimeout(() => {
			$('.overlay_left').removeClass('overlay_leftActive');
		}, 200);
	});



	let humb = document.querySelector('.humb');
	humb.addEventListener('click', (e) => {
		e.preventDefault();
	});

});