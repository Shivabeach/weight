/** @format */

$(function () {
	'use strict';
	$('form#ajax').on('submit', function () {
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function (index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			data[name] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function (response) {
				location.reload();
				$('#display')
					.html(response)
					.delay(8000)
					.fadeOut(slow);
			},
		});
		return false;
	});
});

$(function () {
	$('.highlight')
		.parent()
		.css({ 'background-color': '#d8cdd3', border: '1px solid #803e27' });
});
