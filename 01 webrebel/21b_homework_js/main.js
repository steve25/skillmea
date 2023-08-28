(function ($) {
  const url =
    window.location.href.substring(0, window.location.href.lastIndexOf("/")) +
    "/";

  let page = 1;

  // click event
  $("li").click(function (e) {
    e.preventDefault();

    switch (page) {
      case 1:
        page = 2;
        $(this).siblings().removeClass("disabled");
        break;
      case 2:
        page = e.target.innerText == "next" ? 1 : 3;
        $(this).addClass("disabled").siblings().removeClass("disabled");
        break;
      case 3:
        page = 2;
        $(this).siblings().removeClass("disabled");
        break;

      default:
        break;
    }

    loadGallery(page);
  });

  // ajax load
  function loadGallery(page) {
    $.ajax({
      url: url + "gallery-" + page + ".html",

      success: function (result) {
        $("#gallery").html(result);
      },
    });
    return this;
  }

  loadGallery(page);
})(jQuery);
