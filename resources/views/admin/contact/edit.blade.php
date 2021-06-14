@extends('layouts.admin')
@section('title', 'Админка Контакты')





@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">редактировать Контакты</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.contact.home') }}">Контакты</a></li>
								<li class="breadcrumb-item active" aria-current="page">редактировать Контакты</li>
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
			<h3>Контакты (создать)</h3>
			<a href="{{ route('admin.contact.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>


 


<div class="card radius-15">
	<div class="card-body">
	
		<form action="{{ route('admin.contact.update', $contact->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf

			<div class="mb-3">
				<label for="title">Заголовок *</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ $contact->title }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>




			<div class="mb-5">
				<label for="summernote">Текст услуги *</label>
				<textarea id="summernote" name="descr" class="form-control" rows="6" cols="3">{{ $contact->descr }}</textarea>
				@error('descr')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>









			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Сохранить</button>
			<a href="{{ route('admin.uslugi.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

		</form>



	</div>
</div>











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