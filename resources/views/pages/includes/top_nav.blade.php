<div class="top_nav" id="onTop">
	<div class="container-fluid">
		<div class="row">
			<div class="col">

				<div class="wrap_top_nav">
					<a href="{{ route('home.page') }}" class="logo"><img src="{{ asset($profile->logo ?? 'img/logo2.svg') }}" alt=""></a>

					<a href="#" class="humb"><img src="{{ asset('img/menu_one.svg') }}" alt=""></a>
 
					<ul class="top_menu">
						<li><a href="#homme" id="homme"></a></li>
						<li><a class="{{ Request::is('/') ? 'active_menu' : '' }} " href="{{ route('home.page') }}">Главная</a></li>
						<li><a class="{{ Request::is('about*') ? 'active_menu' : '' }}" href="{{ route('about.home') }}">О нас</a></li>
						
						@if(false)
						<li><a class="{{ Request::is('rooms*') ? 'active_menu' : '' }}" href="{{ route('rooms.home') }}">Номера</a></li>
						@endif

						<li><a class="{{ Request::is('product*') ? 'active_menu' : '' }}" href="{{ route('product.home') }}">Номера</a></li>
						<li><a class="{{ Request::is('uslugi*') ? 'active_menu' : '' }}" href="{{ route('uslugi.home') }}">Услуги</a></li>
						<li><a class="{{ Request::is('photogallery*') ? 'active_menu' : '' }}" href="{{ route('photogallery.home') }}">Фотогалерея</a></li>
						<li><a class="{{ Request::is('contact*') ? 'active_menu' : '' }}" href="{{ route('contact.home') }}">Контакты</a></li>
					</ul>

					<ul class="phones">
						<li><a href="tel:{{ $profile->phone ?? '8 800 888-99-77' }}" class="recallMeTop hiddenTopPhone">{{ $profile->phone ?? '8 800 888-99-77' }}</a></li>
						<li><a href="javasript:void(0);" class="recallMeTop">Обратный звонок</a></li>
					</ul>
				</div>


			</div>
		</div>
	</div>
</div>