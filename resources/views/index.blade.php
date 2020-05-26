@extends('layouts.public')

@section('content')
	<div class="filter-panel">
		<div class="container">
			<div class="row">
				<div class="panel col">
					<div class="left">
						<a href="#" class="switch-filter open">Filter (4)</a>
					</div>

					<a class="reset-filter" href="#">Reset filter</a>					
				</div>
			</div>

			<form id="filter" class="filter row" style="display: none;" action="#" method="get" data-type="ajax{{-- http --}}">
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-age-from">Возраст</label>
					<div class="range">
						<input id="input-age-from" class="range-from" type="number" min="18" max="33" placeholder="from 18" name="age[from]">
						<input class="range-to" type="number" min="18" max="33" placeholder="to 33" name="age[to]">
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-nationality">Национальность</label>
					<div class="select">
						<select name="nationality" id="input-nationality">
							<option value="all" selected>Все</option>
							<option value="russian">Russian</option>
							<option value="asian">Asian</option>
							<option value="black-women">Black Women</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-range-from">Стоимость</label>
					<div class="range">
						<input id="input-range-from" class="range-from" type="number" placeholder="from 500" min="500" max="100000" name="price[from]">
						<input class="range-to" type="number" placeholder="to 100000" min="500" max="100000" name="price[to]">
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-search">Search</label>
					<div class="search">
						<input id="input-search" class="search-input" type="text" placeholder="Enter a name" name="search">
						<span class="search-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-height">Рост</label>
					<div class="range">
						<input id="input-height" class="range-from" type="text" placeholder="from 100" min="100" max="200" name="height[from]">
						<input class="range-to" type="text" placeholder="to 200"min="100" max="200" name="height[to]">
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-hair-color">Цвет волос</label>
					<div class="select">
						<select name="hair_color" id="input-hair-color">
							<option value="all" selected>Все</option>
							<option value="brunette">Брюнетки</option>
							<option value="blonde">Блондинки</option>
							<option value="brown">Шатенки</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-1">
					<label for="input-rating-from">Рейтинг</label>
					<div class="range">
						<input id="input-rating-from" class="range-from" type="text" placeholder="from 1" min="1" max="5" name="rating[from]">
						<input class="range-to" type="text" placeholder="to 5" min="1" max="5" name="rating[to]">
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-10 order-md-8 order-lg-2">
					<label for="input-service">Service</label>
					<div class="select">
						<select id="input-service">
							<option disabled selected>Select</option>
							<option value="group-sex">Group sex</option>
							<option value="anal">Anal</option>
							<option value="oral">Oral</option>
							<option value="classic-sex">Classic sex</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-3">
					<label for="input-weight-from">Вес</label>
					<div class="range">
						<input id="input-weight-from" class="range-from" type="text" placeholder="from 20" min="20" max="150" name="weight[from]">
						<input id="input-weight-to" class="range-to" type="text" placeholder="to 150" min="20" max="150" name="weight[to]">
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-4">
					<label for="input-eye-color">Цвет глаз</label>
					<div class="select">
						<select name="eye_color" id="input-eye-color">
							<option value="all">Любой</option>
							<option value="hazel">Карие</option>
							<option value="blue">Голубые</option>
							<option value="green">Зеленые</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-5">
					<label for="">Сейчас доступна</label>
					<div class="select">
						<select name="" id="">
							<option value="yes" selected>Да</option>
							<option value="no">Нет</option>
							<option value="not-importnant">Не важно</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-10 order-md-10 order-lg-6 selected-services">
					{{-- <div class="service">
						<span class="service-name">Group sex</span>
						<span class="close"></span>
						<input type="hidden" name="services[]" value="group-sex">
					</div> --}}
				</div>
				<div class="col-md-4 col-lg-3 order-7">
					<label for="input-breast-size">Размер груди</label>
					<div class="select">
						<select name="breast_size" id="input-breast-size">
							<option value="all" selected>Любой</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-8">
					<label for="input-language">Языки</label>
					<div class="select">
						<select name="language" id="input-language">
							<option value="all" selected>Любой</option>
							<option value="russian">Русский</option>
							<option value="chinese">Китайский</option>
							<option value="ukrainian">Украинский</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-9">
					<label for="input-only-new">Только новые</label>
					<div class="select">
						<select name="new" id="input-only-new">
							<option value="all" selected>Любые</option>
							<option value="yes">Да</option>
							<option value="no">Нет</option>
						</select>
						<span class="select-icon"></span>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 order-10">
					<label for="">&nbsp;</label>
					<button class="btn btn-white form-control" type="submit">Apply</button>
				</div>




				{{-- диапазон --}}
				{{-- <div class="col-md-3">
					<div class="range">
						<input class="range-from" type="text" placeholder="from">
						<input class="range-to" type="text" placeholder="to">
					</div>
				</div> --}}
				{{-- текстовое поле - поиск --}}
				{{-- <div class="col-md-3">
					<div class="search">
						<input class="search-input" type="text" placeholder="Enter a name">
						<span class="search-icon"></span>
					</div>
				</div> --}}
				{{-- выпадающий список --}}
				{{-- <div class="col-md-3">
					<div class="select">
						<select name="" id="">
						</select>
						<span class="select-icon"></span>
					</div>
				</div> --}}
			</form>
		</div>
	</div>

	<div class="container">
		<div class="count-girls">Girls 352</div>
		<div id="items" class="items row">

			@for ($i = 0; $i < 10; $i++)
				<div class="item col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="#">
						<div class="img" style="background-image: url(/img/test-girl.png)"></div>
						<div class="name">Kalika, 21</div>
						<div class="params">
							<span class="price">£ 50 - 1 hour</span>
							<span class="ration">
								<img src="/img/star.svg">
								<span>5.0</span>
							</span>
						</div>
						
						<div class="skills">
							<span>Group Sex</span>
							<span>Anal</span>
							<span>Oral</span>
							<span>jyjvv</span>
						</div>
					</a>
				</div>

			@endfor
		</div>
		<div class="row">
			<div class="col-12 show-more">
				<button class="btn btn-transparent">Show more</button>
			</div>
		</div>
	</div>
@endsection