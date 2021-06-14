<div class="modalBookNomer">
	<div class="okoshkoBook">

		<div class="insideBook">
			<a href="#" class="closeBookModalBt"><img src="{{ asset('img/close.svg') }}" alt=""></a>



			<div class="wrapInfo">

				 

				<div class="leftPart">

					
 
					<img class="leftPic" src="https://images.unsplash.com/photo-1580876206701-30de22e5326c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80" alt="">

					<div class="titleRoom">Номер +</div>
					

					<p class="modalDescr">описание номера</p>
					
				</div>
 
 


				<div class="rightPart">
					<div class="dayPrice">1200</div>
					<div class="titleBron">Забронировать этот номер</div>
					
					<form id="bookModalNomer" class="bookModalNomer" action="{{ route('orderutpdata.store') }}" method="post" autocomplete="off">
						@csrf

						<input type="hidden" name="whatForm" value="HotelCorporate | Бронирование номера | модальное окно">
						<input type="hidden" name="whatNomer" class="whatNomer" value="">

						<div class="wrapDates">
							<div class="inputInside insideEnter">
								<label for="date">Дата заезда:</label>
								<input type="date" name="dateenter"  id="date" value="" required />	
							</div>

							<div class="inputInside">
								<label for="out">Дата выезда:</label>
								<input type="date" name="dateout" id="out" value="" required />	
							</div>
						</div>

						<div class="itemModal">
							<label for="adult2">Взрослых</label>
							<select name="adult" class="custom-select adultSelect" id="adult2" style="@error('adult') border:1px solid red; @enderror">
								<option selected disabled value="">Выберите</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7 и более</option>
							</select>
						</div>
			
						<div class="itemModal">
							<label for="children2">Детей</label>
							<select name="children" class="custom-select adultChildren" id="children2" style="@error('children') border:1px solid red; @enderror">
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

						<div class="itemModal">
							<label for="name">Имя</label>
							<input id="name" type="text" name="name" style="@error('name') border:1px solid red; @enderror" required placeholder="Как Вас зовут">
						</div>
			
			
						<div class="itemModal">
							<label for="phone8">Телефон</label>
							<input type="text" id="phone8" name="phone" placeholder="введите номер" style="@error('phone7') border:1px solid red; @enderror" required>
						</div>

						<div class="itemYes">
							<input type="checkbox" class="form-check-input" id="agreement2" required>
							<label class="form-check-label" for="agreement2">Я прочитал (а) и соглашаюсь с <a href="{{ route('politics.confidenc') }}">политикой конфиденциальности</a></label>
						</div>


						<button class="sendBooking" type="submit">отправить</button>
					</form>
				</div>

				


			

			</div>
			

		</div>



	</div>
</div>