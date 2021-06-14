@extends('layouts.site')
@section('title', 'Номер детальная')



@push('styles')
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/jquery.ui.datepicker.mobile.css') }}">
@endpush
 


@section('content')





<div class="insideMarginTop"></div>

{{-- wrap_nomera --}}
<div class="wrap_nomera" >
	<div class="container-xxl">

		<div class="row">
			<div class="col-12">
				<a href="{{ route('rooms.home') }}" class="seeNomer">Назад</a>
				<h2 class="razdelTitle">{{ $room->title }}</h2>
				@if(false)
				<div class="razdelDescr">Цена: {{ $room->price }} ₽/ночь</div>
				@endif
			</div>
		</div>





 
		
		<div class="detailPageWrap">

			<div class="leftPart">

				<div class="galeryWrap">
					<img src="{{ asset($room->avatar) }}" alt="">
				</div>

				<div class="detailPrice">от <span>{{ $room->price }}</span> ₽/сут</div>

				<div class="detailShort">{{ $room->short }}</div>
						
				

				<ul class="inNomer">
					<span>В номере:</span>

					@if($room->is_wifi)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/01_wifi.svg') }}" alt="" /> 
						</div>
						Wi-Fi
					</li>
					@endif

					@if($room->is_conditioner)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/02_air.svg') }}" alt="" /> 
						</div>
						Кондиционер
					</li>
					@endif


					@if($room->is_holodilnik)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/03_holodilnik.svg') }}" alt="" /> 
						</div>
						Холодильник
					</li>
					@endif


					@if($room->is_obedennytable)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/04_table.svg') }}" alt="" /> 
						</div>
						Обеденный стол
					</li>
					@endif


					@if($room->is_sofa)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/05_2_sofa.svg') }}" alt="" /> 
						</div>
						Диван
					</li>
					@endif


					@if($room->is_tv)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/06_tv.svg') }}" alt="" /> 
						</div>
						Телевизор
					</li>
					@endif



					@if($room->is_table)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/07_2_desk.svg') }}" alt="" /> 
						</div>
						Стол
					</li>
					@endif


					@if($room->is_tarelki)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/08_posuda.svg') }}" alt="" /> 
						</div>
						Посуда
					</li>
					@endif


					@if($room->is_bar)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/09_bar.svg') }}" alt="" /> 
						</div>
						Мини-бар
					</li>
					@endif


					@if($room->is_sputniktv)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/10_sputn_tv.svg') }}" alt="" /> 
						</div>
						Спутниковое ТВ
					</li>
					@endif


					@if($room->is_saife)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/11_saif.svg') }}" alt="" /> 
						</div>
						Сейф
					</li>
					@endif


					@if($room->is_garderob)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/12_garderob.svg') }}" alt="" /> 
						</div>
						Гардероб
					</li>
					@endif



					@if($room->is_utug)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/13_iron.svg') }}" alt="" /> 
						</div>
						Утюг
					</li>
					@endif


					@if($room->is_gladilka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/14_ironing-board.png') }}" alt="" /> 
						</div>
						Гладильная доска
					</li>
					@endif


					@if($room->is_kofemachina)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/15_coffee.svg') }}" alt="" /> 
						</div>
						Кофемашина
					</li>
					@endif


					@if($room->is_otoplenie)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/16_radiator.svg') }}" alt="" /> 
						</div>
						Отопление
					</li>
					@endif


					@if($room->is_kover)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/17_rug.svg') }}" alt="" /> 
						</div>
						Ковер
					</li>
					@endif


					@if($room->is_kattle)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/18_teapot.svg') }}" alt="" /> 
						</div>
						Чайник
					</li>
					@endif



					@if($room->is_rosetka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/19_electrical.svg') }}" alt="" /> 
						</div>
						Розетки
					</li>
					@endif



					@if($room->is_kitchen)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/20_kushnya.svg') }}" alt="" /> 
						</div>
						Кухня
					</li>
					@endif


					@if($room->is_stiralka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/21_stiralka.svg') }}" alt="" /> 
						</div>
						Стиральная машина
					</li>
					@endif


					@if($room->is_mikrovolnovka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/22_microwave.svg') }}" alt="" /> 
						</div>
						Микроволновка
					</li>
					@endif


					@if($room->is_posudomoika)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/23_dishwasher.svg') }}" alt="" /> 
						</div>
						Посудомоечная машина
					</li>
					@endif


					@if($room->is_electrplitka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/24_electric-stove.svg') }}" alt="" /> 
						</div>
						Электрическая плита
					</li>
					@endif


					@if($room->is_gostugolok)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/25_rounded_corner.svg') }}" alt="" /> 
						</div>
						Гостинный уголок
					</li>
					@endif


					@if($room->is_kamin)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/26_fireplace.svg') }}" alt="" /> 
						</div>
						Камин
					</li>
					@endif



					@if($room->is_terassa)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/27_terrace.svg') }}" alt="" /> 
						</div>
						Терасса
					</li>
					@endif



					@if($room->is_selfbasein)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/28_pool.svg') }}" alt="" /> 
						</div>
						Бассейн
					</li>
					@endif


				</ul>


				<div class="detailDescr">{!! $room->descr ?? 'подробное описание' !!}</div>

			</div>
		



 

			<div class="rightPart">
					

						<div class="titleBronDetail">Забронировать этот номер</div>
					
						<form id="bookNomerDetail" class="bookModalNomerDetail" action="{{ route('rooms.ordernomer') }}" method="post" autocomplete="off">
							@csrf

							<input type="hidden" name="whatForm" value="HotelCorporate | Бронирование номера | детальная страница">
							<input type="hidden" name="whatNomer" class="whatNomer" value="{{ $room->title }}">

	
							<div class="wrapDates">
								<div class="inputInside insideEnter">
									<label for="date">Дата заезда:</label>
									<input type="date" name="dateenter"  id="date" value="" required />	
								</div>
	
								<div class="inputInside">
									<label for="out">Дата выезда:</label>
									<input type="date" name="dateout" id="out" value="" required />	
								</div>
							</div>
	
							<div class="itemDetail">
								<label for="adult3">Взрослых</label>
								<select name="adult" class="custom-select adultSelect3" id="adult3" style="@error('adult') border:1px solid red; @enderror">
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
				
							<div class="itemDetail">
								<label for="children3">Детей</label>
								<select name="children" class="custom-select children3" id="children3" style="@error('children') border:1px solid red; @enderror">
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
	
							<div class="itemDetail">
								<label for="name">Имя</label>
								<input id="name" type="text" name="name" style="@error('name') border:1px solid red; @enderror" required placeholder="Как Вас зовут">
							</div>
				
				
							<div class="itemDetail">
								<label for="phone8">Телефон</label>
								<input type="text" id="phone9" name="phone" placeholder="введите номер" style="@error('phone7') border:1px solid red; @enderror" required>
							</div>
	
							<div class="itemYes">
								<input type="checkbox" class="form-check-input" id="agreement2" required>
								<label class="form-check-label" for="agreement2">Я прочитал (а) и соглашаюсь с <a href="{{ route('politics.confidenc') }}">политикой конфиденциальности</a></label>
							</div>
	
	
							<button class="sendBooking" type="submit">Забронировать</button>
						</form>




					

			</div>

		</div>
			

		






	</div>

</div>
{{-- wrap_nomera end --}}










@include('pages.includes.contact')




@push('scripts')
	<script src="{{ asset('js/order.js') }}"></script>
@endpush





@push('scripts')

	<script>
		//reset type=date inputs to text
		$( document ).bind( "mobileinit", function(){
			$.mobile.page.prototype.options.degradeInputs.date = true;
		});	
	</script>



	<script src="{{ asset('js/select2.min.js') }}"></script>

	

	<script>

		try {
			$('.adultSelect3').select2({
				placeholder: "Сколько вас",
				maximumSelectionLength:2,
				language: "ru",
				tags: true,
				allowClear: true,
			});
		} catch (e) {
			console.log('select adilt');
		}
			


		try {
			$('.children3').select2({
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
@endpush






@endsection


