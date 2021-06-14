<!--sidebar-wrapper-->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div class="">
			<img src="{{ asset('adminka/assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
		</div>
		<div>
			<h4 class="logo-text">Отель</h4>
		</div>
		<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
		</a>
	</div>
	<!--navigation-->


	<ul class="metismenu" id="menu">

		<li>
			<a href="{{ route('home.page') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-arrow-from-right"></i>
				</div>
				<div class="menu-title">Перейти на сайт</div>
			</a>
		</li>



		<li class="menu-label">Номера</li>
		<li class="{{ Request::is('toenter/product*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.product.home') }}">
				<div class="parent-icon text-danger"><i class="bx bx-hotel"></i>
				</div>
				<div class="menu-title text-danger">Номера-комнаты</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/slide*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.slide.home') }}">
				<div class="parent-icon text-danger"><i class="bx bx-camera-home"></i>
				</div>
				<div class="menu-title text-danger">Фото номеров</div>
			</a>
		</li>








	
	 
		<li class="menu-label">Админ-панель</li>
	
		<li class="{{ Request::is('toenter') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-home-alt"></i>
				</div>
				<div class="menu-title">Главная</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/profile*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.profile.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-slider-alt"></i>
				</div>
				<div class="menu-title">Профиль</div>
			</a>
		</li>


		<li class="{{ Request::is('toenter/features*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.features.home') }}">
				<div class="parent-icon icon-color-13"><i class="bx bx-brush"></i>
				</div>
				<div class="menu-title">Преимущества</div>
			</a>
		</li>

	
		{{-- <li class="{{ Request::is('toenter/baner*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.baner.home') }}">
				<div class="parent-icon icon-color-13"><i class="bx bx-bulb"></i>
				</div>
				<div class="menu-title">Банер</div>
			</a>
		</li> --}}

		

		@if(false)
		<li class="{{ Request::is('toenter/room*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.room.home') }}">
				<div class="parent-icon icon-color-7"><i class="bx bx-hotel"></i>
				</div>
				<div class="menu-title">Номера</div>
			</a>
		</li>
		@endif

		<li class="{{ Request::is('toenter/about*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.about.home') }}">
				<div class="parent-icon icon-color-4"><i class="bx bx-like"></i>
				</div>
				<div class="menu-title">О нас</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/photogallery*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.photogallery.home') }}">
				<div class="parent-icon icon-color-2"><i class="bx bx-camera"></i>
				</div>
				<div class="menu-title">Фотогалерея</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/uslugi*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.uslugi.home') }}">
				<div class="parent-icon icon-color-7"><i class="bx bx-camera"></i>
				</div>
				<div class="menu-title">Услуги</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/meta*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.meta.home') }}">
				<div class="parent-icon icon-color-3"><i class="bx bx-at"></i>
				</div>
				<div class="menu-title">Meta-данные</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/contact*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.contact.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-book-reader"></i>
				</div>
				<div class="menu-title">Контакты</div>
			</a>
		</li>

		<li class="{{ Request::is('toenter/orderutp*') ? 'mm-active' : '' }}">
			<a href="{{ route('admin.orderutp.home') }}">
				<div class="parent-icon icon-color-13"><i class="bx bx-coin"></i>
				</div>
				<div class="menu-title">Заявки</div>
			</a>
		</li>



		

	</ul>
	<!--end navigation-->

	
	

</div>
<!--end sidebar-wrapper-->