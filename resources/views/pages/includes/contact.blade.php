<div class="contact" id="contact" style="background-image: url({{ asset($profile->baner ?? 'formap.jpg') }})">
	<div class="container"> 

		<div class="allContainerWrap">

			<div class="row">
				<div class="col">
					<h2 class="razdelTitle">Контакты</h2>
					<div class="razdelDescr">Звоните, проконсультируем, подберем лучшие варианты</div>
				</div>
			</div>


			<div class="row">

				<div class="col-md-6 col-12">
					<div class="contact_wrap">

						<form id="bottomForm" class="bottomForm" autocomplete="off">

							<input type="hidden" name="whatForm"  value="HotelCorporate | Контакты (форма)">

							<input type="text" name="name" placeholder="Имя*" required>
							<input type="text" name="email" placeholder="E-mail*" required>
							<input type="text" name="phone" id="phone2" placeholder="Телефон*" required>
							<textarea name="message" placeholder="Короткое сообщение"></textarea>

							<div class="contactCheck">
								<input type="checkbox" class="form-check-input" id="agreement33" required>
								<label class="form-check-label" for="agreement33">Я прочитал (а) и соглашаюсь с <a href="{{ route('politics.confidenc') }}">политикой конфиденциальности</a></label>
							</div>
							
							<button class="go">Отправить</button>
						</form>
					</div>
				</div>

				<div class="col-md-6 col-12">
					<div class="map_wrap">
						{!! $profile->map ?? '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A15c6d1168b7a6517d0e8ac1fe336b93b650a04320827ea4d0d125679be28aa57&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>' !!}
					</div>
				</div>


			</div>

		</div>



	</div>
</div>