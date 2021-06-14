@extends('layouts.site')
@section('title', 'Корпоративный | Главная отель')
 


@push('styles')
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/jquery.ui.datepicker.mobile.css') }}">
@endpush



@section('content')






{{-- utp_wrap --}}
	@include('pages.includes.utp')
{{-- utp_wrap end --}}







{{-- modulBroniWrap --}}
<section class="modulBroniWrap">
	<div class="titleBroni">Бронирование номера</div>

	<form id="formBroni" class="formBroni" action="{{ route('orderutpdata.store') }}"  method="post" autocomplete="off" >
		@csrf


		<input type="hidden" name="whatForm"  value="HotelCorporate | Бронирование номера | главный модуль">

		<div class="wrapInside">

			<div class="item bigCalendarHidden">
				<label for="dataEnter">Даты бронирования</label>
				<input id="dataEnter" type="text" name="dateentertwo" placeholder="дней" style="@error('dateenter') border:1px solid red; @enderror" >
			</div>



			<div class="item boroniHiddenEnter">
				<div class="inputInside ">
					<label for="date2">Дата заезда:</label>
					<input type="date" name="dateenter"  id="date2" value=""  />	
				</div>
			</div>

			<div class="item boroniHiddenOut">
				<div class="inputInside ">
					<label for="out">Дата выезда:</label>
					<input type="date" name="dateout" id="out" value=""  />	
				</div>
			</div>



			<div class="item">
				<label for="adult">Взрослых</label>
				<select name="adult" class="custom-select adultSelect" id="adult" style="@error('adult') border:1px solid red; @enderror">
					<option selected disabled value="">Выберите</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7 и более</option>
				</select>
			</div>

			<div class="item">
				<label for="children">Детей</label>
				<select name="children" class="custom-select adultChildren" id="children" style="@error('children') border:1px solid red; @enderror">
					<option selected disabled value="">Выберите</option>
					<option value="нет">нет</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7 и более</option>
				</select>
			</div>

			<div class="item">
				<label for="name">Имя</label>
				<input id="name" type="text" name="name" style="@error('name') border:1px solid red; @enderror" required placeholder="Как Вас зовут">
			</div>


			<div class="item">
				<label for="phone7">Телефон</label>
				<input type="text" id="phone7" name="phone" placeholder="введите номер" style="@error('phone7') border:1px solid red; @enderror" required>
			</div>

		</div>

		<button class="goBroniBt" type="submit">Отправить</button>
		
		<div class="politicsCheck">
			<input type="checkbox" class="form-check-input" id="agreement" required>
			<label class="form-check-label" for="agreement">Я прочитал (а) и соглашаюсь с <a href="{{ route('politics.confidenc') }}">политикой конфиденциальности</a></label>
		</div>


	</form>

</section>
{{-- modulBroniWrap --}}










{{-- features_wrap --}}
@include('pages.includes.features')
{{-- features_wrap end --}}







{{-- wrap_nomera --}}
<div class="wrap_nomera" id="nomera">
	<div class="container">

		<div class="row">
			<div class="col">
				<h2 class="razdelTitle">Номера</h2>
				<div class="razdelDescr">Мы создаём уютный интерьер, окружаем гостя заботой и продумываем все детали, чтобы наша гостиница становилась любимым местом отдыха наших клиентов.</div>
			</div>
		</div>

 
		<div class="row">

			@if(false)
			@foreach($rooms as $room)
			<div class="col-lg-6 col-md-6">
					<a href="{{ route('rooms.detail', $room->slug) }}" 
						class="item_nomera">
						<img src="{{ asset($room->avatar) }}" alt="">
						<div class="textPart">
							<div class="titleNomer">{{ $room->title }}</div>
							<div class="descrNomer">{{ $room->short }}</div>
							<div class="price">от <span>{{ $room->price }}</span> ₽/сут</div>
						</div>
					</a>

					<a href="#" class="zakazThisNomer" 
					data-nomer="{{ $room->title }}" 
					data-picurl="{{ asset($room->avatar) }}"
					data-price="{{ $room->price }} ₽/сут"
					data-bigdescr="{{ $room->short }}"
					data-btbooking>Заказать</a>

					<a href="{{ route('rooms.detail', $room->slug) }}"  class="seeNomer">Подробнее</a>
			</div>
			@endforeach
			@endif


			@foreach($products as $product)
			<div class="col-lg-6 col-md-6">
					<a href="{{ route('product.detail', $product->id) }}" 
						class="item_nomera">
						<img src="{{ asset($product->avatar) }}" alt="">
						<div class="textPart">
							<div class="titleNomer">{{ $product->title }}</div>
							<div class="descrNomer">{{ $product->short }}</div>
							<div class="price">от <span>{{ $product->price }}</span> ₽/сут</div>
						</div>
					</a>

					<a href="{{ route('product.detail', $product->id) }}"  class="seeNomer">Подробнее</a>
			</div>
			@endforeach

		</div>

		<div class="row">
			<div class="col-12">
				<a href="{{ route('product.home') }}" class="seeAllRooms">Смотреть все номера</a>
			</div>
		</div>



	</div>

</div>
{{-- wrap_nomera end --}}






{{-- recall_me_wrap --}}
	@include('pages.includes.recallme_block')
{{-- recall_me_wrap end --}}





















{{-- gallery_part --}}
<div class="gallery_part" id="galleryPart">
	<div class="container">

		<div class="row">
			<div class="col">
				<h2 class="razdelTitle">Фотогалерея</h2>
				<div class="razdelDescr">Мы долго строили свою репутацию и теперь можем с гордостью утверждать - нам доверяют!</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="gallery_wrap">
					<div class="fotorama" 
							data-ratio="16/9"
							data-keyboard="true"
							data-nav="thumbs" 
							data-allowfullscreen="true">
						
						@foreach ($hotels_pics as $photo)
							<img src="{{ asset($photo->pic) }}" alt="{{ $photo->title }}">
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- gallery_part end --}}


 




{{-- contact --}}
 @include('pages.includes.contact')
{{-- contact end --}}







{{-- modalBookNomer --}}
@include('pages.includes.modalBookNomer')
{{-- modalBookNomer end --}}












@push('scripts')
<script>
	$("#phone4").mask("8 (999) 999 99 99");
	$("#phone7").mask("8 (999) 999 99 99");
</script>

<script>
	//reset type=date inputs to text
	$( document ).bind( "mobileinit", function(){
		$.mobile.page.prototype.options.degradeInputs.date = true;
	});	
</script>




	<script>
		// let hdpkr = new HotelDatepicker(document.getElementById('input-id'), options);
		try{
			let dataEnter = document.getElementById('dataEnter');
			let modalDateEnter = document.getElementById('modalDateEnter');
			let datepicker = new HotelDatepicker(dataEnter,{
				format: 'DD-MM-YYYY',
				startOfWeek: 'monday',
				autoClose: true,
				showTopbar: true,
				moveBothMonths: true,
				i18n: {
						selected: 'Время пребывания:',
						night: 'Ночь',
						nights: 'Ночей',
						button: 'Закрыть',
						'checkin-disabled': 'Регистрация отключена ',
						'checkout-disabled': 'Выезд отключен ',
						'day-names-short': ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
						'day-names': ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
						'month-names-short': ['Янв', 'Февр', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Ноя', 'Дек'],
						'month-names': ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
						'error-more': 'Д\'диапазон дат не должен превышать 1 ночь ',
						'error-more-plural': 'Д\'диапазон дат должен быть не более %d ночей',
						'error-less': 'Д\'диапазон дат не должен быть меньше 1 ночи ',
						'error-less-plural': 'Д\'диапазон дат должен быть не менее %d ночей ',
						'info-more': 'Выберите даты размещения',
						'info-more-plural': 'Выберите диапазон дат больше %d ночей ',
						'info-range': 'Выберите диапазон дат от %d до %d ночей',
						'info-default': 'Пожалуйста, выберите диапазон дат '
				}
			});
		} catch(err) {
			console.log(err);
		}


	</script>



	<script src="{{ asset('js/select2.min.js') }}"></script>

	<script>
		try{
				$('.adultSelect').select2({
				placeholder: "Сколько вас",
				maximumSelectionLength:2,
				language: "ru",
				tags: true,
				allowClear: true,
				// multiple: true
			});
		} catch (err) {
			console.log(err);
		}
		
	</script>

<script>
	try {
			$('.adultChildren').select2({
			placeholder: "Детей",
			maximumSelectionLength: 2,
			language: "ru",
			tags: true,
			placeholder: "Выберите",
			allowClear: true
		});
	} catch (err) {
		console.log(err);
	}

</script>


<script src="{{ asset('js/vinil.js') }}"></script>



@endpush



@push('scripts')
<script src="{{ asset('js/order.js') }}"></script>
@endpush













@endsection


