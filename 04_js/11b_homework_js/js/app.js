const balls = document.querySelectorAll(".ball"),
  score = document.getElementById("score");

let scoreCount = balls.length;

let mover = null;

score.innerText = scoreCount;

const runAnimation = () => {
  mover = anime({
    targets: ".ball",
    translateX: {
      value: () => {
        return anime.random(0, 600);
      },
      duration: () => {
        return anime.random(750, 3500);
      },
    },
    translateY: {
      value: () => {
        return anime.random(0, 800);
      },
      duration: () => {
        return anime.random(750, 3500);
      },
    },

    complete: runAnimation,
  });
};

runAnimation();

balls.forEach((ball) => {
  ball.addEventListener("click", () => {
    mover = anime({
      targets: ball,
      rotate: "2turn",
      opacity: [{ value: 0, duration: 1000 }],

      complete: function () {
        removePalino();
        ball.style.display = "none";
        ball.remove();
      },
    });
  });
});

const removePalino = () => {
  scoreCount--;
  score.innerText = scoreCount;
  if (scoreCount === 0) alert("Vyhral si, minul si všetkých Palinov");
};
