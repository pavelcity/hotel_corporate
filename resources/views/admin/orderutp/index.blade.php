@extends('layouts.admin')
@section('title', 'Админка Заявки')




@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Заявки</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Заявки</li>
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
			<h3>Заявки </h3>

			{{-- @php 
				$reuslt = count($orders)
			@endphp

			@if($reuslt != 1)
			<a href="{{ route('admin.meta.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a>
			@endif --}}



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
						<th scope="col">Дата заявки</th>
						<th scope="col">Имя</th>
						<th scope="col">Телефон</th>
						<th scope="col">Дата заезда</th>
						<th scope="col">Дата выезда</th>
						<th scope="col">Взрослых</th>
						<th scope="col">Детей</th>
						<th scope="col">Статус</th>
						{{-- <th style="width: 200px;"></th> --}}
					</tr>
				</thead>

				<tbody>

					@php
						$i = 1;
					@endphp

					@foreach($orders as $order)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $order->created_at }}</td>
						<td>{{ $order->name }}</td>
						<td>{{ $order->phone }}</td>
						<td>{{ $order->dateenter }}</td>
						<td>{{ $order->dateout }}</td>
						<td>{{ $order->adult }}</td>
						<td>{{ $order->children }}</td>
						<td><span class="badge badge-warning badge-pill">new</span></td>

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								{{-- <a href="#" type="button" class="btn btn-sm btn-info">Посмотреть</a> --}}
								{{-- <a href="#" onclick="return confirm('удалить?')" type="button" class="btn btn-sm btn-outline-danger">удалить</a> --}}
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