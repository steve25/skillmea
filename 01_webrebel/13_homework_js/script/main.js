$(function () {
  $("body").on("keydown", function (e) {
    let direction = {};
    switch (e.key) {
      case "ArrowUp":
        direction = { top: "-=30" };
        break;
      case "ArrowDown":
        direction = { top: "+=30" };
        break;
      case "ArrowLeft":
        direction = { left: "-=30" };
        break;
      case "ArrowRight":
        direction = { left: "+=30" };
        break;
    }
    $("#kocka").animate(direction, 50);
  });

  $("#button").on("click", function () {
    for (let i = 0; i <= 100; i++) {
      setTimeout(() => {
        $("#progress-bar").css("width", i + "%");
      }, 100 * i);
    }
  });
});
