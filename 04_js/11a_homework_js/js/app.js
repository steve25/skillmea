"use strict";

const toggleAnim = document.querySelector(".toggle-anim"),
  balls = document.getElementsByClassName("ball");
let animating = false;

var animation = anime({
  targets: ".ball",
  keyframes: [
    { translateX: 200 },
    { translateY: 200 },
    { translateX: 0 },
    { translateY: 0 },
  ],
  backgroundColor: "#FFF",
  loop: true,
  autoplay: false,
  duration: 4000,
  easing: "easeOutExpo",
});

toggleAnim.addEventListener("click", () => {
  animating = !animating;
  toggleAnim.textContent = animating ? "Stop Animation" : "Start Animation";

  if (animating) {
    animation.play();
  } else {
    animation.pause();
  }

  // for (const ball of balls) {
  //   ball.className = animating ? "ball ball-running" : "ball";
  // }
});

// len aby sa poposuvali, aby si videl ze ich je tam kopa
for (let i = 0; i < balls.length; i++) {
  const ball = balls[i];

  // // ball.style.top  = i * 3 + 'px';
  // ball.style.left = i * 3 + "px";
}

// Zadanie 11
// 1) Sprav animáciu z videa 107 cez anime.js.
// Aby Paľo chodil do štvorca.

// 1.5) Napíš môj kód zo 124 krajšie a sprav krajšiu animáciu padania.
// Toto je extrém subjektívna úloha.

// 2) Sprav hru.
// Aby tam lietalo niekoľko Palinov.
// Mierne náhodne sa rozmiestnia, nech nie sú na sebe. Budú sa hýbať inou rýchlosťou, kmitať inou frekvenciou, na každého môžeš kliknúť.

// Keď zomrie, zvýšiš skóre.
// Nie že by sme chceli, aby Palino zomrel. Spravil predsa najlepší slovenský klip.
// Každopádne budeš počítať skóre a budeš ho okamžite updatovať na stránke a keď zomrie posledný, napíšeš, že si vyhral.

// Použiješ anime.js a detaily sú na tebe.
