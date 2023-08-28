(function($) {

	var galleries = $('.gallery-set'),
		menuLinks = $('.controls a');

	// skryjeme vsetky galerie, okrem prvej
	galleries.not(':first').hide();

	// po kliknuti na link ideme robit veci
	menuLinks.on('click', function(event) {

		// ked sa pozrieme do HTML, vidime, ze hodnota href linku sa rovna idcku prislusnej sekcie
		var id = $(this).attr('href');

		// skryjeme galerie
		galleries.hide();

		// kedze href je rovny idcku galeriu, mozeme ju podla neho vytiahnut a nechat zobrazit
		// toto je to iste, ako keby sme napisali napr. $('#video').fadeIn();
		$(id).fadeIn();

		// klasika
		event.preventDefault();

	});

})(jQuery);