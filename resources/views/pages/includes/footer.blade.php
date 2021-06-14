<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="footer_wrap">

					<ul class="logo_part">
						<li><a href="{{ route('home.page') }}" class="logo"><img src="{{ asset($profile->logo ?? 'img/logo2.svg') }}" alt=""></a></li>
						<li>{{ $profile->subtitle ?? 'Качественный отдых по лучшей цене' }}</li>
					</ul>
 
 
					<ul class="left_bottom">
						<li><a class="{{ Request::is('/') ? 'active' : '' }} " href="{{ route('home.page') }}">Главная</a></li>
						<li><a class="{{ Request::is('about*') ? 'active' : '' }}" href="{{ route('about.home') }}">О нас</a></li>

						@if(false)
						<li><a class="{{ Request::is('rooms*') ? 'active' : '' }}" href="{{ route('rooms.home') }}">Номера</a></li>
						@endif

						<li><a class="{{ Request::is('product*') ? 'active' : '' }}" href="{{ route('product.home') }}">Номера</a></li>

						<li><a class="{{ Request::is('uslugi*') ? 'active' : '' }}" href="{{ route('uslugi.home') }}">Услуги</a></li>
						<li><a class="{{ Request::is('photogallery*') ? 'active' : '' }}" href="{{ route('photogallery.home') }}">Фотогалерея</a></li>
						<li><a class="{{ Request::is('contact*') ? 'active' : '' }}" href="{{ route('contact.home') }}">Контакты</a></li>
					</ul>



					<ul class="infos">
						<li><a href="tel:{{ $profile->phone ?? '88007778899' }}">{{ $profile->phone ?? '88007778899' }}</a></li>
						<li><a href="mailto:{{ $profile->email ?? 'test@mail.ru' }}">{{ $profile->email ?? 'test@mail.ru' }}</a></li>
						<li><a href="{{ route('politics.usloviaborny') }}" class="uslBrony">Условия бронирования номеров</a></li>
						<li><a href="{{ route('politics.confidenc') }}" class="confi">Политика конфиденциальности</a></li>
					</ul>



					<ul class="social">
						<li><a href="tel:{{ $profile->phone ?? '8 800 999-99-99' }}"><img src="{{ asset('img/tel.svg') }}" alt=""></a></li>
						<li><a href="#"><img src="{{ asset('img/w.svg') }}" alt=""></a></li>
						<li><a href="#"><img src="{{ asset('img/t.svg') }}" alt=""></a></li>
					</ul>

				</div>


			</div>
		</div>
	</div>
</div>




@include('pages/includes/modal_nomer')
@include('pages/includes/left_nav')
@include('pages/includes/uslovia_brony_modal')
@include('pages/includes/politics_modal')