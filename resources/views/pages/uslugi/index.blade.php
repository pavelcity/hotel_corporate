@extends('layouts.site')
@section('title', 'Услуги')





@section('content')





 
<div class="insideMarginTop"></div>

{{-- wrap_nomera --}}
<div class="wrap_nomera">
	<div class="container-xxl">

		<div class="row">
			<div class="col">
				<h2 class="razdelTitle">{{ $uslugi->title ?? 'Услуги нашего отеля' }} </h2>
				<div class="razdelDescr">{!! $uslugi->descr ?? 'Характерной чертой всех видов гостиничного обслуживания предоставляемых заведением, является следующее: постоялец гостиницы не имеет право собственности на товар, которым пользуется, поэтому он оценивает качество работы отеля по совокупности впечатлений. Неотделимость производства от потребителя – это повышенная ответственность администрации гостиницы. Иными словами, если все виды обслуживания, кроме одного, устроили клиента – его мнение об отеле существенно занижается. Это не содействует воплощению маркетинговой стратегии предприятия, поэтому в организации гостиничного бизнеса основной упор делается на подборе квалифицированного персонала.

					Расширение и внедрение новых опций производится на основе тестирования. Посетителям на выезде предлагается заполнить анкету, где они оставляют мнение о качестве обслуживания, свои мнения и пожелания по улучшению качества обслуживания.
					' !!}</div>
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


