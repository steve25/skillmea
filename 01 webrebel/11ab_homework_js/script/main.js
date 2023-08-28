let number = null;

const getNumber = () => {
  console.log(number * 3);
};

const setNumber = () => {
  return (number = prompt("Daj mi číslo"));
};

const start = () => {
  setNumber();
  getNumber();
};

start();

// ------------------------------

$("ul li:nth-child(3)").css({ color: "blue" });
$("ul li:last-child").css({
  color: "purple",
  fontWeight: "bolder",
  backgroundColor: "yellow",
});

$("#list li").on("click", function () {
  $(this).toggleClass("oznaceny");
});
