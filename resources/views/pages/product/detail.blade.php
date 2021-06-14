@extends('layouts.site')
@section('title', 'Product детальная')

 

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/jquery.ui.datepicker.mobile.css') }}">
@endpush

@push('styles')
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
@endpush




@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush


@section('content')





<div class="insideMarginTop"></div>

{{-- wrap_nomera --}}
<div class="wrap_nomera" >
	<div class="container-xxl">

		<div class="row">
			<div class="col-12">
				<a href="{{ route('product.home') }}" class="seeNomer">Назад</a>
				<h2 class="razdelTitle">{{ $product->title }}</h2>
				@if(false)
				<div class="razdelDescr">Цена: {{ $product->price }} ₽/ночь</div>
				@endif
			</div>
		</div>




 
		
		<div class="detailPageWrap">

			<div class="leftPart">

				<div class="galeryWrap">
					<img src="{{ asset($product->slide) }}" alt="">
				</div>

				{{-- @foreach($product->slides as $slide)
				<img src="{{ asset($slide->slide) ?? 'no-data' }}" alt="">
				@endforeach --}}

				@if(false)
				<div class="fotorama" data-nav="thumbs">
					@foreach($product->slides as $slide)
					<img src="{{ asset($slide->slide ?? 'uploads/not_image.jpg')  }}" alt="">
					@endforeach
				</div>
				@endif


				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						@foreach($product->slides as $slide)
						<div class="swiper-slide">
							<img  src="{{ asset($slide->slide ?? 'uploads/not_image.jpg')  }}" alt="">
						</div>
						@endforeach	
					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>
				
					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				
					<!-- If we need scrollbar -->
					<div class="swiper-scrollbar"></div>
				</div>




				<br>
				<br>
				<br>
				<br>

				<div class="detailPrice">от <span>{{ $product->price }}</span> ₽/сут</div>

				<div class="detailShort">{{ $product->short }}</div>
						
				

				<ul class="inNomer">
					<span>В номере:</span>

					@if($product->is_wifi)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/01_wifi.svg') }}" alt="" /> 
						</div>
						Wi-Fi
					</li>
					@endif

					@if($product->is_conditioner)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/02_air.svg') }}" alt="" /> 
						</div>
						Кондиционер
					</li>
					@endif


					@if($product->is_holodilnik)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/03_holodilnik.svg') }}" alt="" /> 
						</div>
						Холодильник
					</li>
					@endif


					@if($product->is_obedennytable)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/04_table.svg') }}" alt="" /> 
						</div>
						Обеденный стол
					</li>
					@endif


					@if($product->is_sofa)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/05_2_sofa.svg') }}" alt="" /> 
						</div>
						Диван
					</li>
					@endif


					@if($product->is_tv)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/06_tv.svg') }}" alt="" /> 
						</div>
						Телевизор
					</li>
					@endif



					@if($product->is_table)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/07_2_desk.svg') }}" alt="" /> 
						</div>
						Стол
					</li>
					@endif


					@if($product->is_tarelki)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/08_posuda.svg') }}" alt="" /> 
						</div>
						Посуда
					</li>
					@endif


					@if($product->is_bar)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/09_bar.svg') }}" alt="" /> 
						</div>
						Мини-бар
					</li>
					@endif


					@if($product->is_sputniktv)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/10_sputn_tv.svg') }}" alt="" /> 
						</div>
						Спутниковое ТВ
					</li>
					@endif


					@if($product->is_saife)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/11_saif.svg') }}" alt="" /> 
						</div>
						Сейф
					</li>
					@endif


					@if($product->is_garderob)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/12_garderob.svg') }}" alt="" /> 
						</div>
						Гардероб
					</li>
					@endif



					@if($product->is_utug)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/13_iron.svg') }}" alt="" /> 
						</div>
						Утюг
					</li>
					@endif


					@if($product->is_gladilka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/14_ironing-board.png') }}" alt="" /> 
						</div>
						Гладильная доска
					</li>
					@endif


					@if($product->is_kofemachina)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/15_coffee.svg') }}" alt="" /> 
						</div>
						Кофемашина
					</li>
					@endif


					@if($product->is_otoplenie)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/16_radiator.svg') }}" alt="" /> 
						</div>
						Отопление
					</li>
					@endif


					@if($product->is_kover)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/17_rug.svg') }}" alt="" /> 
						</div>
						Ковер
					</li>
					@endif


					@if($product->is_kattle)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/18_teapot.svg') }}" alt="" /> 
						</div>
						Чайник
					</li>
					@endif



					@if($product->is_rosetka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/19_electrical.svg') }}" alt="" /> 
						</div>
						Розетки
					</li>
					@endif



					@if($product->is_kitchen)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/20_kushnya.svg') }}" alt="" /> 
						</div>
						Кухня
					</li>
					@endif


					@if($product->is_stiralka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/21_stiralka.svg') }}" alt="" /> 
						</div>
						Стиральная машина
					</li>
					@endif


					@if($product->is_mikrovolnovka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/22_microwave.svg') }}" alt="" /> 
						</div>
						Микроволновка
					</li>
					@endif


					@if($product->is_posudomoika)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/23_dishwasher.svg') }}" alt="" /> 
						</div>
						Посудомоечная машина
					</li>
					@endif


					@if($product->is_electrplitka)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/24_electric-stove.svg') }}" alt="" /> 
						</div>
						Электрическая плита
					</li>
					@endif


					@if($product->is_gostugolok)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/25_rounded_corner.svg') }}" alt="" /> 
						</div>
						Гостинный уголок
					</li>
					@endif


					@if($product->is_kamin)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/26_fireplace.svg') }}" alt="" /> 
						</div>
						Камин
					</li>
					@endif



					@if($product->is_terassa)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/27_terrace.svg') }}" alt="" /> 
						</div>
						Терасса
					</li>
					@endif



					@if($product->is_selfbasein)
					<li> 
						<div class="imgPlace">
							<img class="pict" src="{{ asset('img/detail_pict/28_pool.svg') }}" alt="" /> 
						</div>
						Бассейн
					</li>
					@endif


				</ul>


				<div class="detailDescr">{!! $product->descr ?? 'подробное описание' !!}</div>

			</div>
		



 

			<div class="rightPart">
					

						<div class="titleBronDetail">Забронировать этот номер</div>
					
						<form id="bookNomerDetail" class="bookModalNomerDetail" action="{{ route('rooms.ordernomer') }}" method="post" autocomplete="off">
							@csrf

							<input type="hidden" name="whatForm" value="HotelCorporate | Бронирование номера | детальная страница">
							<input type="hidden" name="whatNomer" class="whatNomer" value="{{ $product->title }}">

	
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




@push('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
@endpush




@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
	const swiper = new Swiper('.swiper-container', {
	spaceBetween: 30,
	effect: 'cube',
	grabCursor: true,
	cubeEffect: {
		shadow: true,
		slideShadows: true,
		shadowOffset: 20,
		shadowScale: 0.94,
	},



	loop: true,
	direction: 'horizontal',
  speed: 400,
  spaceBetween: 100,
	navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
			type: 'progressbar',
		},
		// cssMode: true,
});
</script>

@endpush



@endsection


