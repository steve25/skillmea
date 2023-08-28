"use strict";

/*  !!!

		[ todo: ]
		- prerobit na localStorage
		- spravit 'clean' verziu bez js a mozno css hover efektov?
			a bez .desaturate classu?

	*/

// najdeme vsetkych dvoch sexosov
var dudes = document.querySelectorAll(".contact-form img"),
  dudes = Array.from(dudes); // zmine nodelist na array

// aby sme mohli cyklom kazdemu pridat event listeners
dudes.forEach(function (dude) {
  // po kliknuti zdviheme skore
  dude.addEventListener("click", function (event) {
    let scoreElement = this.nextElementSibling,
      score = Number(scoreElement.textContent);

    score = score + 1;
    scoreElement.textContent = score;
  });

  // ked vojdem na jedneho, druhy zbledne
  dude.addEventListener("mouseover", function (event) {
    toggleDudeStyle(event);
  });
  // ked vyjdem z jedneho, zmizne zblednutie
  dude.addEventListener("mouseout", function (event) {
    toggleDudeStyle(event);
  });

  const toggleDudeStyle = (event) => {
    let index = null;
    if (event.target.id === "mitch") {
      index = 1;
    } else {
      index = 0;
    }

    let otherDude = _.without(dudes, this)[index];
    otherDude.classList.toggle("desaturate");
  };
});

// ULOHA b;

const number = 15321.35;

const formatPrice = (number) => {
  console.log(
    number.toLocaleString("sk-SK", { style: "currency", currency: "EUR" })
  );
};

formatPrice(number);

// ULOHA c;

var price = 124.13;
var discount = 13; // tym myslim akoze 13% zlava

const fixPrice = (price, discount) => {
  formatPrice(price - price / discount);
};

fixPrice(price, discount);
