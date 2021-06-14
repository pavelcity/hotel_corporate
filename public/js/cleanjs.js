'use strict'

document.addEventListener('DOMContentLoaded', () => {


	try {
		let topBaner = document.querySelector('.topBaner');
		let banerWidth = topBaner.clientHeight;


		let topNav = document.querySelector('.top_nav');
		let topNavHeight = topNav.clientHeight;

		window.addEventListener('scroll', () => {
			topNav.classList.toggle('stick', window.scrollY > banerWidth - topNavHeight);
		});
	} catch (e) {
		console.log(e);
	}











});