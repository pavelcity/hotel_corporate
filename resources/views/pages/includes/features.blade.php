<div class="about_wrap">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<div class="wrapLeftRight">

				<div class="leftPart">
					@foreach($features as $ficha)
							<div class="item_about">
									<img src="{{ $ficha->pic }}" alt="">
									<div class="title_about">{{ $ficha->title ?? '8 лет на рынке' }}</div>		
									<div class="descr">{{ $ficha->descr ?? 'В гостиничном бизнесе мы уже не первый год. Поверьте, отдых у нас будет не забываемым!' }}</div>
							</div>
						@endforeach
				</div>


				@if(false)
					<div class="rightPart">
						<h3>{{ $about->title ?? 'О нас ' }}</h3>
						{!! $about->descr ?? 'Наш отель - это место для комфортного проживания в современных условиях по привлекательной цене. Каждого нашего гостя ждет высококлассный сервис, направленный на удовлетворение пожеланий к отдыху и комфорту.' !!}
					</div>
				@endif


				</div>


			</div>
		</div>


	</div>
</div>