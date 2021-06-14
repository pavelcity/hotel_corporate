<div class="politics_modal">
	<div class="wrap_politics">
		<a href="#" class="closePolitics"><img src="{{ asset('img/close.svg') }}" alt=""></a>

		<div class="title">Политика конфиденциальности</div>
		
		<div class="texts_wrap">
			{!! $profile->politics ?? 'нет данных' !!}
		</div>


	</div>
</div>