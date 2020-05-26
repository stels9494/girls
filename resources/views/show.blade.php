@extends('layouts.public')

@section('content')
	<section id="show-main">
		<button class="btn btn-white btn-back">
			<img src="/img/arrow-back.svg">
			<span class="d-none d-md-inline">Back</span>
		</button>
		<div class="slider">
			<div class="photos">
				<div class="photo" style="background-image: url(/img/test-girl-2.png)"></div>
				<div class="photo" style="background-image: url(/img/test-girl-2.png)"></div>
				<div class="photo" style="background-image: url(/img/test-girl-2.png)"></div>
				<div class="photo" style="background-image: url(/img/test-girl-2.png)"></div>
			</div>
			<div class="buttons">
				<button id="prev-photo" class="prev" type="button"><img src="/img/arrow-left-dark.svg"></button>
				<button id="next-photo" class="next" type="button"><img src="/img/arrow-left-dark.svg"></button>
			</div>
		</div>
		<div class="description container">
			<div class="row">
				<div class="col-12 name">Alina Morder, 19</div>
				<div class="col-12 available">Available</div>
				<div class="col-6 stars">
					<img src="/img/star.svg">
					<img src="/img/star.svg">
					<img src="/img/star.svg">
					<img src="/img/star.svg">
					<img src="/img/star.svg">
					<span>5.0</span>
				</div>
				<div class="col-6 favorite">
					<button class="add-favorite" type="button"></button>
				</div>
				<div class="col-12 description">
					Description
				</div>

				<div class="col-12 col-lg-6 props">
					<div>Growth: 150 cm</div>
					<div>Weight: 100kg</div>
					<div>Size of the breast: 6</div>
					<div>Nationality: Kazashka</div>
				</div>
				<div class="col-12 col-lg-6 props">
					<div>Hair color: blonde</div>
					<div>Eye color: blue</div>
					<div>Languages: Russian, English</div>
				</div>

				<div class="col-12 price">
					Price
				</div>

				<div class="col-12">
					<div class="price-list">
						<div class="left">
							<div class="price">
								<span class="key">1 hour:</span>
								<span class="value">5 £</span>
							</div>
							<div class="price">
								<span class="key">2 hour:</span>
								<span class="value">5 £</span>
							</div>
							<div class="price">
								<span class="key">Lunch:</span>
								<span class="value">2 £</span>
							</div>
						</div>
						<div class="right">
							<div class="price">
								<span class="key">Extension:</span>
								<span class="value">2 £</span>
							</div>
							<div class="price">
								<span class="key">All night:</span>
								<span class="value">20 £</span>
							</div>
						</div>
						<div class="order">
							<button class="btn btn-red form-control">Order</button>
						</div>
					</div>
				</div>

				<div class="col-12 service">
					Service
				</div>

				<div class="skills col-12">
					<span>Group sex</span>
					<span>Anal</span>
					<span>Oral</span>
				</div>
			</div>
		</div>
	</section>
	<section id="feedback">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 title-block">Feedback</div>
				<div class="col-12 col-md-6 btn-review-block">
					<button class="btn btn-transparent">Review</button>
				</div>
				<div class="col-12 reviews">
					<div class="review-block">
						<div class="name">Alex</div>
						<div class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</div>
					<div class="review-block">
						<div class="name">Stefan</div>
						<div class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
					</div>
					<div class="review-block">
						<div class="name">Noah</div>
						<div class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
					</div>
				</div>
				<div class="col-12 text-center btn-all-block">
					<button class="all btn btn-transparent">All</button>
				</div>
			</div>
		</div>
	</section>
@endsection