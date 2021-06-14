@extends('layouts.site')
@section('title', 'Product')




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
			</div>
		</div>

 
		






		<div class="row">

			@foreach($products as $product) 

 

			<div class="col-lg-4 col-md-6">
					<a href="{{ route('product.detail', $product->id) }}" 
						class="item_nomera">
						<img src="{{ asset($product->avatar ?? 'uploads/not_image.jpg') }}" alt="">
						<div class="textPart">
							<div class="titleNomer">{{ $product->title ?? 'no-data' }}</div>
							<div class="descrNomer">{{ $product->short ?? 'no-data' }}</div>
							<div class="price">от <span>{{ $product->price ?? 'no-data' }}</span> ₽/сут</div>
						</div>
					</a>


					
					@if(false)
						<a href="#" class="zakazThisNomer" 
						data-nomer="{{ $product->title ?? 'no-data' }}" 
						data-picurl="{{ asset($product->avatar) }}"
						data-price="{{ $product->price ?? 'no-data' }} ₽/сут"
						data-bigdescr="{{ $product->short ?? 'no-data' }}"
						data-btbooking>Заказать</a>
					@endif

					<a href="{{ route('product.detail', $product->id) }}"  class="seeNomer">Подробнее</a>
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


