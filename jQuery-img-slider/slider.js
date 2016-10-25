(function($){
	var sliderUL = $('div.slider').children('ul') ,
	 imgs = sliderUL.find('img'),
	imgWidth = imgs.first().width(),
	imgLength = imgs.length;
	curImg = 1;
	totalImgesWidth = imgLength * imgWidth;
	$('button').on('click',function(event) {
		var direction = $(this).data('dir');		
		(direction == 'next') ? ((curImg < 4)? ++curImg : curImg = 1 ):((curImg > 1) ? --curImg : curImg = 4);
		sliderUL.animate({
			'margin-left': -(curImg-1)*600,
		});
		console.log(curImg);
	});
})(jQuery);