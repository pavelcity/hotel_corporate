@extends('layouts.admin')
@section('title', 'Админка Профиль | Создание')


{{-- @push('styles')
	<link rel="stylesheet" href="{{ asset('adminka/admin_additional.css') }}">
@endpush --}}



@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Создать профиль</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.profile.home') }}">Профиль</a></li>
								<li class="breadcrumb-item active" aria-current="page">Создать профиль</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- breadcrumb end --}}

@if(false)
<div class="row">
	<div class="col-12">
		<h3>Профиль пользователя</h3>
		<ul>
			<li>Имя: {{ Auth::user()->name }}</li>
			<li>email: {{ Auth::user()->email }}</li>
		</ul>
	</div>
</div>
<hr>
@endif



<div class="row">
	<div class="col-12">
		<div style="display: flex; justify-content:space-between; align-items:center;">
			<h3>Создание профиля отеля</h3>
			<a href="{{ route('admin.profile.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>



<div class="card radius-15">
	<div class="card-body">
	
		<form action="{{ route('admin.profile.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf




			<div class="mt-4">
				<img id="showLogo" style="width: 150px; margin-bottom:30px;" src="{{ (!empty($profile->logo)) ? asset('uploads/utp/'.$profile->logo) : asset('uploads/not_image.jpg') }}" alt="">
			</div>



			<div class="input-group mb-3">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Загрузите логотип</span>
				</div>
				<div class="custom-file">
					<input type="file" name="logo" class="custom-file-input " id="logo" aria-describedby="pic">
					<label class="custom-file-label" for="logo">Выберите лого</label>
				</div>
			</div>
				@error('logo')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror









			<div class="mb-3">
				<label for="hotelname">Название отеля *</label>
				<input class="form-control @error('title') error_line @enderror" id="hotelname" name="title" type="text" placeholder="" value="{{ old('title') }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>




			<div class="mb-3">
				<label for="subtitle">Подзаголовок на банере </label>
				<input class="form-control @error('subtitle') error_line @enderror" id="subtitle" name="subtitle" type="text" placeholder="" value="{{ old('subtitle') }}">
				@error('subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-3">
				<label for="phone">Телефон </label>
				<input class="form-control @error('phone') error_line @enderror" id="phone" name="phone" type="text" placeholder="" value="{{ old('phone') }}">
				@error('phone')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-3">
				<label for="phonetwo">Второй телефон (при необходимости)</label>
				<input class="form-control @error('phonetwo') error_line @enderror" id="phonetwo" name="phonetwo" type="text" placeholder="" value="{{ old('phonetwo') }}">
				@error('phonetwo')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="phonefortelegram">Телефон для телеграм (при необходимости)</label>
				<input class="form-control @error('phonefortelegram') error_line @enderror" id="phonefortelegram" name="phonefortelegram" type="text" placeholder="" value="{{ old('phonefortelegram') }}">
				@error('phonefortelegram')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-3">
				<label for="email">E-mail </label>
				<input class="form-control @error('email') error_line @enderror" id="email" name="email" type="text" placeholder="" value="{{ old('email') }}">
				@error('email')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-5">
				<label for="adress">Адрес </label>
				<input class="form-control @error('adress') error_line @enderror" id="adress" name="adress" type="text" placeholder="" value="{{ old('adress') }}">
				@error('adress')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="form-group mb-3">
<label for="map">Код Iframe карты яндекс &nbsp; <a href="https://yandex.ru/map-constructor/" target="_blank">Конструктор карт яндекс</a> &nbsp; Вставьте код iframe</label>
				<textarea id="map" name="map" class="form-control" rows="5" cols="3">{{ old('map') }}</textarea>
			</div>
			@error('map')
				<p style="color:red; font-size:12px;">{{ $message }}</p>
			@enderror
 





			<div class="mt-4">
				<img id="showPic" style="width: 400px; margin-bottom:30px;" src="{{ (!empty($profile->baner)) ? asset('uploads/utp/'.$profile->baner) : asset('uploads/not_image.jpg') }}" alt="">
			</div>



			<div class="input-group mb-5">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Загрузите фото банера</span>
				</div>
				<div class="custom-file">
					<input type="file" name="baner" id="baner" class="custom-file-input" id="baner" aria-describedby="pic">
					<label class="custom-file-label" for="baner">Выберите файл</label>
				</div>
			</div>
				@error('baner')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror





				<div class="form-group mb-5">
					<label>Условия бронирования номера</label>
					<textarea id="summernote" class="form-control" name="usloviabrony" rows="10" cols="3">{{ old('usloviabrony') }}</textarea>
				</div>	
				@error('usloviabrony')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror



				<div class="form-group mb-3 mt-5">
					<label>Политика конфиденциальности</label>
					<textarea id="politics" class="form-control" name="politics" rows="10" cols="3">{{ old('politics') }}</textarea>
				</div>
				@error('politics')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror





			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('admin.profile.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

		</form>



	</div>
</div>









@push('scripts')
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script>
		$("#phone").mask("8 (999) 999 99 99");
		$("#phonetwo").mask("8 (999) 999 99 99");
		$("#phonefortelegram").mask("8 (999) 999 99 99");
	</script>
@endpush


@push('scripts')
	<script>
		$(document).ready(function(){
			$('#baner').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	

<script>
	$(document).ready(function(){
		$('#logo').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showLogo').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	
@endpush


 



@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
<script type="text/javascript">
	$('#politics').summernote({
			height: 400
	});
</script>
@endpush


@endsection