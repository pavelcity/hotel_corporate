@extends('layouts.site')
@section('title', 'Номера')




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
			<div class="col">
				<h2 class="razdelTitle">Наши номера</h2>
				<div class="razdelDescr">Мы создаём уютный интерьер, окружаем гостя заботой и продумываем все детали, чтобы наша гостиница становилась любимым местом отдыха наших клиентов.</div>
			</div>
		</div>

 
		






		<div class="row">

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

		</div>



	</div>

</div>
{{-- wrap_nomera end --}}










{{-- @include('pages.includes.recallme_block') --}}
@include('pages.includes.contact')



{{-- modalBookNomer --}}
@include('pages.includes.modalBookNomer')
{{-- modalBookNomer end --}}







@push('scripts')


<script>
	//reset type=date inputs to text
	$( document ).bind( "mobileinit", function(){
		$.mobile.page.prototype.options.degradeInputs.date = true;
	});	
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


