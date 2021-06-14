@extends('layouts.admin')
@section('title', 'Админка Slide | Создание')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Создать </div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.slide.home') }}">Слайд</a></li>
								<li class="breadcrumb-item active" aria-current="page">Создать Слайд</li>
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
			<h3>Создать слайд</h3>
			<a href="{{ route('admin.slide.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>

 



<div class="card radius-15">
	<div class="card-body">
	
		<form action="{{ route('admin.slide.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


			



			<div class=" mb-3">
				<label for="product_id">Привяжите фото к номеру</label>
				<select class="custom-select @error('product_id') error_line @enderror" name="product_id" id="product_id">
					<option selected disabled value="">Выберите номер отеля, к которой будет прикреплено фото</option>
					@foreach ($products as $product)
					<option value="{{ $product->id }}">{{ $product->title }}</option>
					@endforeach
				</select>
				@error('product_id')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



		
			<br>












			<div class="mb-3">
				<label for="title">Название слайда</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ old('title') }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

 







			<div class="mt-4">
				<img id="showPic" style="width: 500px; margin-bottom:30px;" src="{{ asset('uploads/not_image.jpg') }}" alt="">
			</div>





			@error('slide')
			<p style="color:red; font-size:12px;">{{ $message }}</p>
			@enderror
			<div class="input-group mb-5 mt-5">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото номера</span>
				</div>


				<div class="custom-file">
					<input type="file" name="slide" class="custom-file-input" id="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>



	




  





			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('admin.slide.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
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
@endpush


@endsection