(function ($) {
  /*
   * LIGHTBOX
   */

  const spinner = $(".spinner");

  // vytvorime overlay
  var gallery = $(".gallery"), // najdeme galeriu
    overlay = $("<div/>", { id: "overlay" }); // vyrobime prazdny div id="overlay"

  // prilepime ho na spodok stranky, skryjeme
  overlay.appendTo("body").hide();

  // na galeriu pripneme plosticu, event listener
  // ktory bude nacuvat, ci sme neklikli na na a element spadajuci do gallery
  // listener nepripneme na jednotlive obrazky, pretoze budeme dalsie obrazky nacitavat cez ajax
  // a teda potrebujeme aby lightbox fungoval na vsetky a spadajuce do gallery, aj novo vzniknute
  gallery.on("click", "a", function (event) {
    spinner.show();

    var href =
        //"http://www.spitzer.caltech.edu/uploaded_files/images/0006/3034/ssc2008-11a12_Huge.jpg",
        $(this).attr("href"), // ziskame adresu velkeho obrazka
      image = $("<img>", { src: href, alt: "learn2code" }); // vytvorime img z velkej adresy

    // TODO: tu zobrazime loading ikonku

    // TU NASTALA ZMENA
    // toto sice nie je celkom tradicny ajax, avsak je to pohodicka
    // az ked na obrazku nastane event load, cize obrazok sa uspesne nacita, zobrazime overlay s nim
    image.on("load", function () {
      // pripneme obrazok na overlay a zobrazime ho
      overlay.html(image).show();
      spinner.hide();
      // TODO:
      // nechame zmiznut loading ikonku
    });

    event.preventDefault();
  });

  // skryjeme overlay
  overlay.on("click", function () {
    overlay.hide();
  });

  // aby sa dal zavriet escapom
  $(document).on("keyup", function (event) {
    if (event.which === 27) overlay.hide();
  });

  ////////////
  // menu load
  ////////////////
  // $(".controls li a").on("click", function (e) {
  //   e.preventDefault();

  //   $(this).parent().addClass("selected").siblings().removeClass("selected");

  //   spinner.show();

  //   link = this.pathname.split("/").pop();

  //   $(".gallery").load(link, function () {
  //     spinner.hide();
  //   });
  // });

  /////////////
  // menu get
  ////////////////
  // $(".controls li a").on("click", function (e) {
  //   e.preventDefault();

  //   $(this).parent().addClass("selected").siblings().removeClass("selected");

  //   spinner.show();

  //   link = this.pathname.split("/").pop();

  //   $.get(link, function (data) {
  //     $(".gallery").html(data);
  //     spinner.hide();
  //   });
  // });

  /////////////
  // menu ajax
  ////////////////
  $(".controls li a").on("click", function (e) {
    e.preventDefault();

    $(this).parent().addClass("selected").siblings().removeClass("selected");

    spinner.show();

    const link = this.pathname.split("/").pop();
    const hash = this.hash;
    let stop = false;

    $.ajax({
      url: link,
    })
      .done(function (data) {
        $(".gallery .gallery-set").each(function () {
          const eachData = $(this).attr("id");

          if ("#" + eachData === hash) stop = true;
        });

        spinner.hide();

        $(hash).show().siblings().hide();
        if (stop) return;

        $(".gallery").prepend(data);
        $(".gallery-set").not(hash).hide();
      })
      .fail(function () {
        console.err("FAIL");
      })
      .always(function () {
        console.log("ALWAYS");
      });
  });
})(jQuery);
