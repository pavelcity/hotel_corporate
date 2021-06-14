
<div class="overlay_left"></div>

<div class="left_nav">
	<div class="wrap_left">
		<a href="#" class="closeLeft"><img src="{{ asset('img/close.svg') }}" alt=""></a>

		<a href="{{ route('home.page') }}" class="logo"><img src="{{ asset($profile->logo ?? 'img/logo2.svg') }}" alt=""></a>
		{{-- <a href="#" class="logo"><img src="{{ 'img/logo2.svg' }}" alt=""></a> --}}

		<ul class="menu">
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
	</div>
</div>