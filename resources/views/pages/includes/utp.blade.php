







<div class="topBaner" style="background-image: url({{ asset($profile->baner ?? 'baner5.jpg') }})">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="utpBaner">
					<div class="insedeBaner">
						<div class="titleUtp">{{ $profile->title ?? 'Resort Sochi Hotel' }}</div>
					<div class="subTitle">{{ $profile->subtitle ?? 'Отдых на южном берегу Крыма' }} </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- <img src="{{ asset('baner5.jpg') }}" alt=""> --}}
</div>










 


			{{-- id="choise_enter" --}}
			@if(false)
			<form action="{{ route('orderutpdata.store') }}"  method="post" autocomplete="off">
				@csrf

				<div class="bronTitle">Бронирование номера</div>

				<div class="choise_panel">

					

					<div class="calendar_block">

						<div class="form-group">
							<label for="date">Дата заезда</label>
							<input class="result form-control" name="dateenter" type="text" id="date" placeholder="Выберите дату" style="@error('dateenter') border:1px solid red; @enderror">
						</div>

						<div class="form-group">
							<label for="date2">Дата выезда</label>
							<input class="result form-control" name="dateout" type="text" id="date2" placeholder="Выберите дату" placeholder="Выберите дату" style="@error('dateout') border:1px solid red; @enderror">
						</div>

					</div>




					
					<div class="choise_block">

						<div class="form-group">
							<label for="adult">Взрослых</label>
							<select name="adult" class="custom-select" id="adult" style="@error('adult') border:1px solid red; @enderror">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7 и более</option>
							</select>
						</div>

						<div class="form-group">
							<label for="children">Детей</label>
							<select name="children" class="custom-select" id="children" style="@error('children') border:1px solid red; @enderror">
								<option selected disabled value="">Выберите</option>
								<option value="нет">нет</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7 и более</option>
							</select>
						</div>


				</div>

				<div class="people_block">
					<div class="form-group">
						<label for="name">Имя</label>
						<input type="text" id="name" name="name" placeholder="Имя" style="@error('name') border:1px solid red; @enderror">
					</div>

					<div class="form-group">
						<label for="phone7">Телефон</label>
						<input type="text" id="phone7" name="phone" placeholder="Телефон" style="@error('phone7') border:1px solid red; @enderror">
					</div>
				</div>

			


				</div>

				<button class="go" type="submit">Отправить</button>
				
			</form>
			{{-- choise_panel end --}}
			@endif