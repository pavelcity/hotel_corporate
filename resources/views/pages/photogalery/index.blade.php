@extends('layouts.site')
@section('title', 'фотогалерея')





@section('content')





 

<div class="insideMarginTop"></div>

{{-- gallery_part --}}
<div class="gallery_part ">
	<div class="container-xxl">

		<div class="row">
			<div class="col">
				<h2 class="razdelTitle">Фотогалерея</h2>
				<div class="razdelDescr">Мы долго строили свою репутацию и теперь можем с гордостью утверждать - нам доверяют!</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="gallery_wrap">
					<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-fit="cover">
						
						@foreach ($photos as $photo)
							<img src="{{ asset($photo->pic) }}" alt="{{ $photo->title }}">
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- gallery_part end --}}


{{-- @include('pages.includes.recallme_block') --}}
@include('pages.includes.contact')




@push('scripts')
<script src="{{ asset('js/order.js') }}"></script>
@endpush


@endsection


