(function ($) {
	$(function () {
		function update() {
			var width = $(window).width();
			var height = $(window).height();
			$('.modal-fluid').css({
				width: width * 0.8,
				marginLeft: -(width * 0.4)
			});
			$('.modal-fluid .modal-body').css({
				maxHeight: (height * 0.8) - 136
			});
			$('.modal-fluid').each(function () {
				$(this).css({
					marginTop: -($(this).height() / 2),
				});
			});
		}
		$(window).resize(update);
		update();
	});
}(window.jQuery));