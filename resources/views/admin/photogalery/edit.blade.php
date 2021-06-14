@extends('layouts.admin')
@section('title', 'Админка Фотогалерея | Создание')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Редактировать Фотогалерею</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.photogallery.home') }}">Фотогалерея</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактирование Фотогалереи</li>
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
	<div class="col-12">
		<div style="display: flex; justify-content:space-between; align-items:center;">
			<h3>Редактирование Фотогалереи</h3>
			<a href="{{ route('admin.photogallery.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>





<div class="card radius-15">
	<div class="card-body">
	
		<form action="{{ route('admin.photogallery.update', $photo->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


			<input type="hidden" name="old_pic" value="{{ $photo->pic }}">


			<div class="mb-3">
				<label for="title">Название фото</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ $photo->title }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<img width="400" src="{{ asset($photo->pic) }}" alt="">
			</div>



			<div class="input-group mb-5">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Изменить фото</span>
				</div>
				<div class="custom-file">
					<input type="file" name="pic" class="custom-file-input" id="pic" aria-describedby="pic">
					<label class="custom-file-label" for="pic">Выберите файл</label>
				</div>
			</div>
				@error('pic')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror

			






			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Сохранить</button>
			<a href="{{ route('admin.photogallery.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

		</form>



	</div>
</div>









@push('scripts')
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script>
		$("#phone").mask("8 (999) 999 99 99");
	</script>
@endpush

@push('scripts')
	<script>
		$(document).ready(function(){
			$('#pic').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	
@endpush


@endsection