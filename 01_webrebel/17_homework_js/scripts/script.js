$(function () {
  $("#menu li a").on("click", function (e) {
    e.preventDefault();

    const link = $(this).attr("href");
    let stop = false;

    // $('#clanok').load(link + ' .load-clanok')

    $.get(link, function (data) {
      $(".load-clanok").each(function () {
        const eachData = $(this).data("clanok");

        if (eachData === link) stop = true;
      });

      if (stop) return;

      // for (let i = 0; i < eachDataset.length; i++) {
      //   const eachData = eachDataset[i].dataset.clanok;
      //   if (eachData === link) return;
      // }

      clanok = $(data).find(".load-clanok");
      $("#clanok").append(clanok);
    });
  });
});
