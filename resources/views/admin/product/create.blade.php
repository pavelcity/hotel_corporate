@extends('layouts.admin')
@section('title', 'Админка номер | Создание')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Создать номер</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.product.home') }}">Номер</a></li>
								<li class="breadcrumb-item active" aria-current="page">Создать номер</li>
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
			<h3>Создать номер</h3>
			<a href="{{ route('admin.product.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>





<div class="card radius-15">
	<div class="card-body"> 
	
		<form action="{{ route('admin.product.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf

			<div class="mb-3">
				<label for="title">Создать номер *</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ old('title') }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

 


			<div class="mb-3">
				<label for="short">Короткое описание *</label>
				<input class="form-control @error('short') error_line @enderror" id="short" name="short" type="text" placeholder="" value="{{ old('short') }}">
				@error('short')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

 




			

			@if(true)

			<div class="mb-3">
				<label for="price">Цена *</label>
				<input class="form-control @error('price') error_line @enderror" id="price" name="price" type="text" placeholder="" value="{{ old('price') }}">
				@error('price')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>






			<div class="form-group mb-3">
				<label for="summernote">Детальное описание</label>
				<textarea id="summernote" name="descr" class="form-control" rows="10" cols="3">{{ old('descr') }}</textarea>
			</div>





			<div class="mt-4">
				<img id="showPic" style="width: 500px; margin-bottom:30px;" src="{{ asset('uploads/not_image.jpg') }}" alt="">
			</div>




			<div class="input-group mb-5 mt-5">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото номера</span>
				</div>
				<div class="custom-file">
					<input type="file" name="avatar" class="custom-file-input" id="avatar" aria-describedby="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>
				@error('avatar')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror


				<hr>
				<div class="mb-0">
					<h6>В номере</h6>
				</div>


				<br>
				<div class="wrapVnomere">

					<div class="custom-control custom-switch  mb-3">
						<input class="custom-control-input" name="is_wifi" type="checkbox" value="1" id="wifi">
						<label class="custom-control-label" for="wifi">Wi-Fi</label>
					</div>

					<div class="custom-control custom-switch  mb-3">
						<input class="custom-control-input" name="is_saife" type="checkbox" value="1" id="is_saife">
						<label class="custom-control-label" for="is_saife">Сейф</label>
					</div>

					<div class="custom-control custom-switch mb-3">
						<input class="custom-control-input" name="is_conditioner" type="checkbox" value="1" id="is_conditioner">
						<label class="custom-control-label" for="is_conditioner">Кондиционер</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_bar" value="1" id="is_bar">
						<label class="custom-control-label" for="is_bar">Мини-бар</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_tv" value="1" id="is_tv">
						<label class="custom-control-label" for="is_tv">Телевизор</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_garderob" value="1" id="is_garderob">
						<label class="custom-control-label" for="is_garderob">Гардероб</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_utug" value="1" id="is_utug">
						<label class="custom-control-label" for="is_utug">Утюг</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_gladilka" value="1" id="is_gladilka">
						<label class="custom-control-label" for="is_gladilka">Гладильная доска</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_otoplenie" value="1" id="is_otoplenie">
						<label class="custom-control-label" for="is_otoplenie">Отопление</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_kover" value="1" id="is_kover">
						<label class="custom-control-label" for="is_kover">Ковер</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_kattle" value="1" id="is_kattle">
						<label class="custom-control-label" for="is_kattle">Чайник</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_table" value="1" id="is_table">
						<label class="custom-control-label" for="is_table">Стол</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_sputniktv" value="1" id="is_sputniktv">
						<label class="custom-control-label" for="is_sputniktv">Спутниковое ТВ</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_rosetka" value="1" id="is_rosetka">
						<label class="custom-control-label" for="is_rosetka">Розетки</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_kitchen" value="1" id="is_kitchen">
						<label class="custom-control-label" for="is_kitchen">Кухня</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_stiralka" value="1" id="is_stiralka">
						<label class="custom-control-label" for="is_stiralka">Стиральная машина</label>
					</div>

					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_holodilnik" value="1" id="is_holodilnik">
						<label class="custom-control-label" for="is_holodilnik">Холодильник</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_kofemachina" value="1" id="is_kofemachina">
						<label class="custom-control-label" for="is_kofemachina">Кофемашина</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_mikrovolnovka" value="1" id="is_mikrovolnovka">
						<label class="custom-control-label" for="is_mikrovolnovka">Микроволновка</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_tarelki" value="1" id="is_tarelki">
						<label class="custom-control-label" for="is_tarelki">Посуда</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_posudomoika" value="1" id="is_posudomoika">
						<label class="custom-control-label" for="is_posudomoika">Посудомоечная машина</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_electrplitka" value="1" id="is_electrplitka">
						<label class="custom-control-label" for="is_electrplitka">Электрическая плита</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_obedennytable" value="1" id="is_obedennytable">
						<label class="custom-control-label" for="is_obedennytable">Обеденный стол</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_sofa" value="1" id="is_sofa">
						<label class="custom-control-label" for="is_sofa">Диван</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_gostugolok" value="1" id="is_gostugolok">
						<label class="custom-control-label" for="is_gostugolok">Гостинный уголок</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_kamin" value="1" id="is_kamin">
						<label class="custom-control-label" for="is_kamin">Камин</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_terassa" value="1" id="is_terassa">
						<label class="custom-control-label" for="is_terassa">Терасса</label>
					</div>


					<div class="custom-control custom-switch  form-check-inline mb-3">
						<input type="checkbox" class="custom-control-input" name="is_selfbasein" value="1" id="is_selfbasein">
						<label class="custom-control-label" for="is_selfbasein">Бассейн</label>
					</div>

				</div>

				@endif

				<br>
				<hr>
  





			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('admin.product.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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