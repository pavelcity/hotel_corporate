<div class="recall_me_wrap" style="background-image: url(01.jpg)">
	<div class="title_recall">Заказать обратный звонок</div>
	<div class="modul_wrap">
		<form id="modulWrapForm" class="modulWrapForm">

			<input type="hidden" name="whatForm"  value="HotelCorporate | Заказать обратный звонок">
			
			<div class="inputButton">
				<input type="text" id="phone" name="phone" placeholder="Телефон" required>
				<button class="go" type="submit">Отправить</button>
			</div>

			<div class="recallCheck">
				<input type="checkbox" class="form-check-input" id="agreement3" required>
				<label class="form-check-label" for="agreement3">Я прочитал (а) и соглашаюсь с <a href="{{ route('politics.confidenc') }}">политикой конфиденциальности</a></label>
			</div>

		</form>
	</div>
</div>