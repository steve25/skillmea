// $(function () {
//   var header = $(".post-header"), // toto najde .post-header
//     nadpis = header.find(".post-title"); // toto v headeri najde .post-title

//   // na to, aby na element fungovala zmena hodnoty "left", potrebu nadpis mat nastaveny position
//   nadpis.css({ position: "relative" });

//   // toto je jednoducha verzia, kde nadpis iba odleti doprava o 200px a trva mu to 1 sekundu
//   // nadpis.animate({ left: 200 }, 1000);

//   // toto je vymakanejsia verzia, kde vyleti az ked klikneme na header
//   // a odleti doprava o sirku stranku
//   // a trva mu to 2 sekundy
//   header.on("click", function () {
//     nadpis.animate({ left: $("body").width() }, 2000).fadeOut();
//   });

//   $("#odpal").on("click", function () {
//     $("#loading").removeClass("hide");

//     // setTimeout(() => {
//     //   $("#loading").addClass("hide");
//     // }, 2000);

//     $(this).animate({ left: 200 }, 5000, function () {
//       $("#loading").addClass("hide");
//     });
//   });
// });

$(function () {
  var header = $(".post-header"), // toto najde .post-header
    nadpis = header.find(".post-title"); // toto v headeri najde .post-title

  // na to, aby na element fungovala zmena hodnoty "left", potrebu nadpis mat nastaveny position
  nadpis.css({ position: "relative" });

  // toto je jednoducha verzia, kde nadpis iba odleti doprava o 200px a trva mu to 1 sekundu
  // nadpis.animate({ left: 200 }, 1000);

  // toto je vymakanejsia verzia, kde vyleti az ked klikneme na header
  // a odleti doprava o sirku stranku
  // a trva mu to 2 sekundy
  header.on("click", function () {
    nadpis.animate({ left: $("body").width() }, 2000).fadeOut();
  });
});

$(".menu.controls li a").on("click", function (e) {
  e.preventDefault();

  that = $(this.hash);

  $(".gallery-set").fadeOut(500);
  that.fadeIn(500);

  $(".menu.controls li").removeClass("selected");
  $(this).parent().addClass("selected");
});
