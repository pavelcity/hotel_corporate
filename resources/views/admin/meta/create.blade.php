@extends('layouts.admin')
@section('title', 'Админка Мета-данные (seo) | Создание')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Создать Мета-данные (seo)</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.meta.home') }}">Мета-данные (seo)</a></li>
								<li class="breadcrumb-item active" aria-current="page">Создание Мета-данных (seo)</li>
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
			<h3>Создание Мета-данные (seo)</h3>
			<a href="{{ route('admin.meta.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>





<div class="card radius-15">
	<div class="card-body">
	
		<form action="{{ route('admin.meta.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf

			<div class="mb-3">
				<label for="keywords">Ключевые слова </label>
				<input class="form-control @error('keywords') error_line @enderror" id="keywords" name="keywords" type="text" placeholder="" value="{{ old('keywords') }}">
				@error('keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-3">
				<label for="description">Описание</label>
				<input class="form-control @error('description') error_line @enderror" id="description" name="description" type="text" placeholder="" value="{{ old('description') }}">
				@error('description')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="author">Автор</label>
				<input class="form-control @error('author') error_line @enderror" id="author" name="author" type="text" placeholder="" value="{{ old('author') }}">
				@error('author')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="ogtitle">og:title</label>
				<input class="form-control @error('ogtitle') error_line @enderror" id="ogtitle" name="ogtitle" type="text" placeholder="" value="{{ old('ogtitle') }}">
				@error('ogtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

 






			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('admin.meta.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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