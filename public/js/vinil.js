'use strict';

document.addEventListener('DOMContentLoaded', (e) => {


	// на главной странице показываем модалку быстрого заказа номера

	try {

		let bookNomerBt = document.querySelectorAll('[data-btbooking]');
		let modalBookNomer = document.querySelector('.modalBookNomer');
		let closeBookModalBt = document.querySelector('.closeBookModalBt');
		let leftPic = document.querySelector('.leftPic');
		let titleRoom = document.querySelector('.titleRoom');
		let dayPrice = document.querySelector('.dayPrice');
		let modalDescr = document.querySelector('.modalDescr');
		let whatNomer = document.querySelector('.whatNomer');





		// #show
		function showModalBookModal() {
			modalBookNomer.classList.add('modalBookNomerActive');
			document.body.style.overflow = 'hidden';
		}

		bookNomerBt.forEach(function (e) {
			e.addEventListener('click', function (e) {
				e.preventDefault();
				showModalBookModal();

				let picNomera = this.getAttribute('data-picurl');
				leftPic.setAttribute('src', picNomera);

				let titleNomera = this.getAttribute('data-nomer');
				titleRoom.textContent = titleNomera;

				let curentPrice = this.getAttribute('data-price');
				dayPrice.textContent = curentPrice;

				let bigDescrNomera = this.getAttribute('data-bigdescr');
				modalDescr.innerHTML = bigDescrNomera;

				whatNomer.value = titleNomera;


			});
		});




		// #close 
		function hideModalBookModal() {
			modalBookNomer.classList.remove('modalBookNomerActive');
			document.body.style.overflow = '';
		}

		closeBookModalBt.addEventListener('click', (e) => {
			e.preventDefault();
			hideModalBookModal();
		});

		modalBookNomer.addEventListener('click', (e) => {
			if (e.target === modalBookNomer && modalBookNomer.classList.contains('modalBookNomerActive')) {
				hideModalBookModal();
			}
		});

		document.addEventListener('keydown', (e) => {
			if (e.code === 'Escape' && modalBookNomer.classList.contains('modalBookNomerActive')) {
				hideModalBookModal();
			}
		});

	} catch (e) {
		console.log('модалка номера has mistake' + e);
	}



});