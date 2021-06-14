'use strict';

document.addEventListener('DOMContentLoaded', () => {



	// отправка данных брони из главного модуля брони
	try {

		let formBroni = document.querySelector('#formBroni');
		let modulWrapForm = document.querySelector('#modulWrapForm');
		let bottomForm = document.querySelector('#bottomForm');

		function postData(form) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						// hidefunc();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}


		postData(formBroni);
		postData(modulWrapForm);
		postData(bottomForm);

	} catch (e) {
		console.log(e);
	}





	// отправка данных брони из модального окна
	try {

		let bookModalNomer = document.querySelector('#bookModalNomer');

		let modalBookNomer = document.querySelector('.modalBookNomer');
		// #close 
		function hideModalBookModal() {
			modalBookNomer.classList.remove('modalBookNomerActive');
			document.body.style.overflow = '';
		}

		function postData(form, hidefunc) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						hidefunc();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(bookModalNomer, hideModalBookModal);

	} catch (e) {
		console.log(e);
	}






	// отправка данных брони из детальной страницы
	try {

		let bookNomerDetail = document.querySelector('#bookNomerDetail');


		function postData(form) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						// hidefunc();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(bookNomerDetail);


	} catch (e) {
		console.log(e);
	}






	// отправка данных страница контакты
	try {
		let bottomForm = document.querySelector('#bottomForm');

		function postData(form) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						// hidefunc();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(bottomForm);

	} catch (e) {
		console.log(e);
	}





});
