@extends('layouts.admin')
@section('title', 'Админ-панель')



@section('content')

		
			{{-- breadcrumb --}}
			<div class="row">
				<div class="col-12">
					<div class="card radius-15">
						<div class="card-body">
							<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
								<div class="breadcrumb-title pr-3">Главная</div>
								<div class="pl-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">Главная</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- breadcrumb end --}}


					<div class="row">



						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.product.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-danger">Номера, комнаты</h4>
											<p class="mb-0">настроить</p>
										</div>
										<div class="widgets-icons bg-danger text-white "><i class='bx bx-hotel'></i>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.slide.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-danger">Фото номеров</h4>
											<p class="mb-0">добавить</p>
										</div>
										<div class="widgets-icons bg-danger text-white "><i class='bx bx-camera-home'></i>
										</div>
									</div>
								</div>
							</a>
						</div>








						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.profile.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold">Профиль отеля</h4>
											<p class="mb-0">фото банера, название, телефоны</p>
										</div>
										<div class="widgets-icons bg-primary text-white "><i class='bx bx-slider-alt'></i>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.features.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-secondary">Преимущества</h4>
											<p class="mb-0">Изменить</p>
										</div>
										<div class="widgets-icons bg-secondary text-white "><i class='bx bx-brush'></i>
										</div>
									</div>
								</div>
							</a>
						</div>
						

						{{-- <div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.baner.home') }}" class="card radius-15 ">
								<div class="card-body ">
									<div class="media align-items-center ">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-secondary">Банер сайта</h4>
											<p class="mb-0">Изменить</p>
										</div>
										<div class="widgets-icons bg-secondary text-white "><i class='bx bx-bulb'></i>
										</div>
									</div>
								</div>
							</a>
						</div> --}}


						@if(false)
						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.room.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">Номера</h4>
											<p class="mb-0">добавить/изменить номер</p>
										</div>
										<div class="widgets-icons bg-info text-white "><i class='bx bx-hotel'></i>
										</div>
									</div>
								</div>
							</a>
						</div>
						@endif




						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.about.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-warning">О нас</h4>
											<p class="mb-0">Изменить</p>
										</div>
										<div class="widgets-icons bg-warning text-white "><i class='bx bx-like'></i>
										</div>
									</div>
								</div>
							</a>
						</div>

						

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.uslugi.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">Услуги</h4>
											<p class="mb-0">Изменить</p>
										</div>
										<div class="widgets-icons bg-info text-white "><i class='bx bx-like'></i>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.photogallery.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-danger">Фотогалерея</h4>
											<p class="mb-0">Изменить</p>
										</div>
										<div class="widgets-icons bg-danger text-white"><i class='bx bx-camera'></i>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.meta.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-success">Meta-данные </h4>
											<p class="mb-0">(seo) | настроить</p>
										</div>
										<div class="widgets-icons bg-success text-white"><i class='bx bx-at'></i>
										</div>
									</div>
								</div>
							</a>
						</div>

 

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.contact.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-primary">Контакты </h4>
											<p class="mb-0">страница</p>
										</div>
										<div class="widgets-icons bg-primary text-white"><i class='bx bx-book-reader'></i>
										</div>
									</div>
								</div>
							</a>
						</div>



						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('admin.orderutp.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-muted">Заявки </h4>
											<p class="mb-0">общая форма или заявка на номер</p>
										</div>
										<div class="widgets-icons bg-muted text-muted"><i class='bx bx-coin'></i>
										</div>
									</div>
								</div>
							</a>
						</div>


						

						

		
					</div>
			
		

	

	


@endsection