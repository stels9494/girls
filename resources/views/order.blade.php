@extends('layouts.public')

@section('content')
	<section id="order">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<a href="/show" class="back">
						<img src="/img/arrow-back-white.svg">
						<span>Back</span>						
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-md-left title">
					Reservation Form
				</div>
			</div>
			<form id="reservation-form" class="row" action="/reservation" method="post">
				@csrf
				<div class="col-12 inputs">
					<div class="row">

						<div class="col-12 col-md-4">
							<label for="input-name">Your name (nick)</label>
							<input id="input-name" name="name" class="form-control" type="text" placeholder="name" required>
						</div>
						<div class="col-12 col-md-4">
							<label for="input-month">Month</label>
							<div class="select">
								<select id="input-month" name="month" required>
									<option disabled selected>Month</option>
									<option value="1">Январь</option>
									<option value="2">Февраль</option>
									<option value="3">Март</option>
									<option value="4">Апрель</option>
									<option value="5">Май</option>
									<option value="6">Июнь</option>
									<option value="7">Июль</option>
									<option value="8">Август</option>
									<option value="9">Сентябрь</option>
									<option value="10">Октябрь</option>
									<option value="11">Ноябрь</option>
									<option value="12">Декабрь</option>
								</select>
								<span class="select-icon"></span>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<label for="input-street">Address</label>
							<input id="input-street" name="street" class="form-control" type="text" placeholder="address" required>
						</div>
						<div class="col-12 col-md-4">
							<label for="input-promo">Enter promotional code</label>
							<input id="input-promo" class="form-control" name="promo" type="text" placeholder="Promo code">
						</div>
						<div class="col-12 col-md-4">
							<label for="input-day">Day</label>
							<div class="select">
								<select id="input-day" name="day" required>
									<option disabled selected>Day</option>
									@for($i = 1; $i <= 31; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
								<span class="select-icon"></span>
							</div>
							<label for="input-time">Time</label>
							<div class="select">
								<select id="input-time" name="time" required>
									<option disabled selected>Time</option>
									@for($i = 1; $i <= 24; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
								<span class="select-icon"></span>
							</div>
						</div>

						<div class="col-12 col-md-4">
							<label for="input-Requirements">Special Requirements</label>
							<textarea id="input-Requirements" class="form-control" name="Requirements" cols="30" rows="5" placeholder="Text"></textarea>
						</div>
						<div class="col-12 col-md-4 offset-md-4">
							<label for="input-duration">Duration</label>
							<div class="select">
								<select id="input-duration" name="duration">
									<option disabled selected>Duration</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="night">Ночь</option>
								</select>
								<span class="select-icon"></span>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="row step-block">
				<div class="col-12 col-md-6 left">
					<div class="img" style="background-image: url(/img/test-girl.png);"></div>
					<div class="info">
						<span class="name">Alina Morder, 19</span>
						<span class="available">Available</span>
					</div>
				</div>
				<div class="col-12 col-md-6 right">
					<div>
						<span class="total">Total: £ 200</span>
						<button class="next-step btn btn-white" type="submit">Next <img src="/img/arrow-back.svg"/></button>
					</div>
				</div>
			</div>


		</div>
	</section>
@endsection