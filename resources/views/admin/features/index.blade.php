@extends('layouts.admin')
@section('title', 'Админка Преимущества')




@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Преимущества</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Преимущества</li>
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
		<div class="create_button_wrap">
			<h3>Преимущества </h3>
			<a href="{{ route('admin.features.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a>
		</div>
	</div>
</div>
<br>




 


<div class="card radius-15">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table mb-0">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Заголовок</th>
						<th scope="col">Картинка</th>
						<th style="width: 200px;"></th>
					</tr>
				</thead>

				<tbody>

					@php
						$i = 1;
					@endphp

					@foreach($features as $ficha)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $ficha->title }}</td>
						<td><img width="30" src="{{ asset($ficha->pic ?? 'нет картинки') }}" alt=""></td>

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('admin.features.edit', $ficha->id) }}" type="button" class="btn btn-sm btn-info">редактировать</a>
								<a href="{{ route('admin.features.delete', $ficha->id) }}" onclick="return confirm('удалить?')" type="button" class="btn btn-sm btn-outline-danger">удалить</a>
							</div>
						</td>
					</tr>
					@endforeach
		



				</tbody>


			</table>
		</div>
	</div>
</div>






@endsection