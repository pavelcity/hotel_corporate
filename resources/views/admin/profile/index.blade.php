@extends('layouts.admin')
@section('title', 'Админка Профиль')

 


@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Профиль</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Профиль</li>
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
		<div class="create_button_wrap">
			<h3>Профиль отеля </h3>

			@php
				$res = count($profile)
			@endphp

			@if($res != 1 )
				<a href="{{ route('admin.profile.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a>
			@endif

			{{-- <a href="{{ route('admin.profile.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a> --}}
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
						<th scope="col">Название</th>
						<th scope="col">Банер</th>
						<th style="width: 200px;"></th>
					</tr>
				</thead>

				<tbody>
					@foreach ($profile as $i => $prof)
						<tr>
						<th scope="row">{{ $i+1 }}</th>
						<td>{{ $prof->title }}</td>
						<td><img width="100" src="{{ asset($prof->baner) }}" alt=""></td>

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('admin.profile.edit', $prof->id) }}" type="button" class="btn btn-sm btn-info">редактировать</a>
								<a href="{{ route('admin.profile.delete', $prof->id) }}" onclick="return confirm('удалить?')" type="button" class="btn btn-sm btn-outline-danger">удалить</a>
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