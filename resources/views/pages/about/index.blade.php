@extends('layouts.site')
@section('title', 'О нас')





@section('content')





  
<div class="insideMarginTop"></div>

{{-- wrap_nomera --}}
<div class="wrap_nomera">
	<div class="container-xxl">

		<div class="row">
			<div class="col">
				<h2 class="razdelTitle">{{ $about->title }}</h2>
				<div class="razdelDescr">{!! $about->descr !!}</div>
			</div>
		</div>

	</div>

</div>
{{-- wrap_nomera end --}}




{{-- @include('pages.includes.recallme_block') --}}
@include('pages.includes.contact')









{{-- @include('pages/includes/modal_nomer') --}}
{{-- @include('pages/includes/left_nav') --}}
{{-- @include('pages/includes/uslovia_brony_modal') --}}
{{-- @include('pages/includes/politics_modal') --}}



@push('scripts')
<script src="{{ asset('js/order.js') }}"></script>
@endpush





@endsection


