let first = null;
let second = null;

const firstInputHandle = () => {
  first = prompt("Zadaj prosím prvé číslo");
  if (isNaN(first) || !first) {
    alert();
    firstInputHandle();
  }
  return first;
};

const secondInputHandle = () => {
  second = prompt("Zadaj prosím druhé číslo");
  if (isNaN(second) || !second) {
    alert();
    secondInputHandle();
  }
  return second;
};

const alert = () => {
  window.alert("Musí to byť číslo");
};

const start = () => {
  firstInputHandle();
  secondInputHandle();
  let result = parseInt(first) + parseInt(second);
  result += result % 2 == 0 ? " (parne)" : " (neparne)";

  $("h2").text(result);
};

// result = first + second;

$("#button").on("click", () => {
  start();
});
