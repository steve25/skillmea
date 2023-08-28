(function ($) {
  const url =
    window.location.href.substring(0, window.location.href.lastIndexOf("/")) +
    "/";

  let page = 1;

  $(window).scroll(function () {
    if (
      $(window).scrollTop() >=
      $(document).height() - $(window).height() - 100
    ) {
      switch (page) {
        case 1:
          page = 2;
          loadGallery(page);
          break;
        case 2:
          page = 3;
          loadGallery(page);
          break;
      }
    }
  });

  // ajax load
  function loadGallery(page) {
    $.ajax({
      url: url + "gallery-" + page + ".html",

      success: function (result) {
        $("#gallery").append(result);
      },
    });
    return this;
  }

  loadGallery(page);
})(jQuery);
