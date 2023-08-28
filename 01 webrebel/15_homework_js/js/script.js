(function($) {

	// spustime slider, bude spraveny tak, ze tam mozeme poslat selektor
	// aby keby v html mame covery v inom elemente alebo v elemente s inym classom, stale to fungovalo
	Slider.init({
		selector: '.cover'
	});


	// ikona vlavo zobrazi predosly
	$('.prev').on('click', function() {
		Slider.prev();
	});

	// ikona vpravo zobrazi nasledovny
	$('.next').on('click', function() {
		Slider.next();
	});

	
	// mozeme spravit aj ovladanie sipkami na klavesnici
	$(document).on('keydown', function(event) {
		
		// to || znamena "alebo", cize pouzije sa keyCode alebo which, podla toho, co existuje
		var keyCode = event.keyCode || event.which, 
      		arrow = {left: 37, up: 38, right: 39, down: 40 };

		switch(event.which) {
			case arrow.left: 
				Slider.prev();
				break;
			case arrow.right:
				Slider.next();
				break;
		}

	});

})(jQuery);