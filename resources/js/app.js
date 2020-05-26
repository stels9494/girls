require('./bootstrap');



$(document).ready(function () {

	/* проверка доступности контента по возрасту из кук */
	if ($.cookie('available'))
	{
		console.log('больше 18');
		$('#available-age').addClass('d-none');
	}else{
		console.log('меньше 18');
		$('#available-age').removeClass('d-none');
	}

	

		$('.slider > .photos').slick({

			// normal options...
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			// arrows: true,
			// draggable: false,
			nextArrow: $('#next-photo'),
			prevArrow: $('#prev-photo'),
			// the magic
			// responsive: [{
			// 	breakpoint: 720,
			// 	// settings: "unslick"
			// 	settings: {
			// 		slidesToShow: 1,
			// 		slidesToScroll: 2,
			// 		arrows: false
			// 	}
			// }]

			//}, {

			//     breakpoint: 600,
			//     settings: {
			//       slidesToShow: 2,
			//       dots: true
			//     }

			//   }, {

			//     breakpoint: 300,
			//     settings: "unslick" // destroys slick

			// }]
		});

	/* клик на "мне есть 18" */
	$('#adult').click(function (e) {
		$('#available-age').remove();
		$.cookie('available', 1);
	});

	/* клик на "мне меньше 18" */
	$('#minor').click(function (e) {
		$(this).closest('.question').addClass('d-none').siblings('.message').removeClass('d-none');
	});

	/* нажатие на фильтр */
	$('.switch-filter').click(function (e) {
		if ($(this).hasClass('open'))
		{
			$(this).removeClass('open');
			$(this).parents('.filter-panel').find('.filter').slideDown();
		} else {
			$(this).addClass('open');
			$(this).parents('.filter-panel').find('.filter').slideUp();
		}
		e.preventDefault();
	});

	/* сбросить фильтр */
	$('.reset-filter').click(function (e) {
		e.preventDefault();
		$('.filter-panel .filter input').val('');
		$('.filter-panel .filter select option:first-child').prop('selected', true);
	});

	/* фильтр */
	$('form.filter').submit(function (e) {
		var type = $(this).data('type');
		if (type == 'ajax')
		{
			e.preventDefault();
			console.log('ajax');
			$(this).ajaxSubmit({
				target: $('.items')
			});
		} else if (type == 'http') {
			console.log('http');
		}
	});

	/* еще девочки */
	$('#show-more').submit(function (e) {
		e.preventDefault();
		$(this).ajaxSubmit({
			success: function (data) {
				console.log('asdasd');
				$('.items').append(data);
			}
		});
	});

	/* запросить еще отзывы */
	$('#get-feedbacks').submit(function (e) {
		e.preventDefault();
		$(this).ajaxSubmit({
			success: function(data) {
				$('.reviews').append(data);
			}
		});
	});

	/* удаление выбранной услуги */
	$('.selected-services').on('click', '.service', function (e) {
			e.preventDefault();
			var serviceName = $(this).find('.service-name').html();
			var serviceValue = $(this).find('input').val();
			$(this).remove();
			$('#input-service').append('<option value="'+serviceValue+'">'+serviceName+'</option>');
	});

	$('#input-service').change(function (e) {
		var serviceName = $(this).find('option:selected').html();
		var serviceValue = $(this).val();
		var serviceHtml = "<div class='service'><span class='service-name'>"+serviceName+"</span><span class='close'></span><input type='hidden' name='services[]' value='"+serviceValue+"'/></div>";
		$('.selected-services').append(serviceHtml);
		$(this).find('option:selected').remove();
		$(this).find('option:first-child').prop('selected', true);
	});

	/* добавить в избранные */
	$('.add-favorite').click(function (e) {
		e.preventDefault();
		if ($(this).hasClass('in-favorite')) {
			$(this).removeClass('in-favorite');
		} else {
			$(this).addClass('in-favorite');
		}
	});
})