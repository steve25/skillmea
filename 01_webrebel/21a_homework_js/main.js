(function ($) {
  let url = window.location.href;
  url = url.substring(0, url.lastIndexOf("/")) + "/";
  let page = "gallery1";

  // click event
  $("li").click(function (e) {
    e.preventDefault();
    if (page == e.target.innerText.replace(/\s+/g, "")) return;
    page = e.target.innerText.replace(/\s+/g, "");

    loadGallery(page);
    $(this).addClass("selected").siblings().removeClass("selected");
  });

  // ajax load
  function loadGallery(page) {
    $.ajax({
      url: url + page + ".html",

      success: function (result) {
        $("#gallery").html(result);
      },
    });
    return this;
  }

  loadGallery(page);
})(jQuery);
