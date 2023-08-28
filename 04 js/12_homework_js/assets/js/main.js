const newWhoPreview = document.getElementById("newWhoPreview");
const newWhoInput = document.getElementById("newWhoInput");
const newWatPreview = document.getElementById("newWatPreview");
const newWatInput = document.getElementById("newWatInput");
const dudes = document.getElementById("dudes");

let li = document.createElement("li");

const submitForm = document.getElementById("submitForm");

const coolnes = document.getElementById("coolnes");

let characters = [];

/**
 *  Dudes preview
 */

newWhoInput.addEventListener("input", () => {
  newWhoPreview.innerText = newWhoInput.value;
});

newWatInput.addEventListener("input", () => {
  newWatPreview.innerText = newWatInput.value;
});

/**
 * Clear inputs and preview
 */

const clear = () => {
  newWhoInput.value = "";
  newWatInput.value = "";
  newWhoPreview.innerText = "";
  newWatPreview.innerText = "";
  newWhoInput.focus();
};

/**
 * Onload fetsch and create characters
 */

window.onload = async () => {
  await fetchCharacters();

  initDudes();
};

/**
 * Fetch data and call dude render
 */

const fetchCharacters = async () => {
  //**
  // From internet
  //*/

  // try {
  //   let response = await fetch(
  //     "https://gist.githubusercontent.com/yablko/035b44dd8d63d586e6763872beb3547e/raw/0f3d18326492a6670bc259a78a98e4c702059d81/dudes.json"
  //   );
  //   response = await response.json();
  //   characters = response;
  // } catch (error) {
  //   console.error(error);
  // }

  /**
   * From local
   */

  characters = JSON.parse(localStorage.getItem("characters"));

  //**
  //  If not setted characters, create them
  //*/
  if (characters == null) {
    characters = [
      {
        id: 1,
        who: "Finn the Human",
        wat: "A silly kid who wants to become a great hero one day.",
        cool: 9,
      },
      {
        id: 2,
        who: "Jake the Dog",
        wat: "Finn's best friend is a wise, old dog with a big heart.",
        cool: 42,
      },
      {
        id: 3,
        who: "Ice King",
        wat: "Armed with a magic crown and an icy heart.",
        cool: 0,
      },
      {
        id: 4,
        who: "Princess Bubblegum",
        wat: "A millionaire nerd enthusiast.",
        cool: 24,
      },
      {
        id: 5,
        who: "Marcy the Vampire",
        wat: "Marceline is a wild rocker girl.",
        cool: 9,
      },
    ];

    storeCharacters(characters);
  }

  characters = characters.sort((a, b) => {
    return a.id - b.id;
  });
};

/**
 * Render dude list
 */

const initDudes = (value) => {
  dudes.innerHTML = "";
  characters.forEach((dude) => {
    let li = document.createElement("li");
    li.innerHTML = `<a class="ctrl" onclick="deleteDude(${dude.id})">x</a>
    
    <article>
    ${dude.who}
    <span>${dude.wat}</span>
    </article>
    
    <input class="ctrl coolnesInput" type="number" value="${dude.cool}" onchange="updateCoolnes(${dude.id})" />`;

    if (dude.cool > 50) li.children[1].classList.add("gold");
    if (dude.cool < 10) li.children[1].classList.add("faded");

    if (value !== "delete") {
      li.classList.add("dude", "animate__animated", "animate__zoomInDown");
    }
    li.dataset.id = dude.id;
    dudes.append(li);
  });
};

/**
 * Render dude list
 */

const createDude = () => {
  const dude = characters.filter(
    (character) =>
      character.id === Math.max(...characters.map((character) => character.id))
  );
  li.innerHTML = `<a class="ctrl" onclick="deleteDude(${dude[0].id})">x</a>
    
    <article>
    ${dude[0].who}
    <span>${dude[0].wat}</span>
    </article>
    
    <input class="ctrl coolnesInput" type="number" value="15" onchange="updateCoolnes(${dude[0].id})" />`;

  li.classList.add("dude", "animate__animated", "animate__zoomInDown");
  dudes.append(li);
};

/**
 * Submit form
 */

submitForm.addEventListener("keydown", (event) => {
  if (event.key == "Enter") {
    characters.push({
      id: Math.max(...characters.map((character) => character.id)) + 1,
      who: newWhoInput.value,
      wat: newWatInput.value,
      cool: 15,
    });
    storeCharacters(characters);
    createDude();
    clear();
  }
});

/**
 * Delete dude
 */

const deleteDude = (id) => {
  const list = document.querySelector(`[data-id="${id}"]`);

  list.classList.add("animate__zoomOutDown");

  setTimeout(() => {
    initDudes("delete");
  }, 1000);

  characters = characters.filter((dude) => dude.id !== id);
  storeCharacters(characters);
};

/**
 * Coolnes
 */

const storeCharacters = (characters) => {
  localStorage.setItem("characters", JSON.stringify(characters));
};

const updateCoolnes = (id, value) => {
  const dude = document.querySelector(`[data-id="${id}"]`);

  dude.classList.remove("animate__animated", "animate__zoomInDown");

  const coolnesInput = document.querySelectorAll(".coolnesInput");
  const index = characters.findIndex((dude) => dude.id == id);

  if (+coolnesInput[index].value > 50) {
    dude.children[1].classList.add("gold");
  } else {
    dude.children[1].classList.remove("gold");
  }
  if (+coolnesInput[index].value < 10) {
    dude.children[1].classList.add("faded");
  } else {
    dude.children[1].classList.remove("faded");
  }

  characters[index].cool = +coolnesInput[index].value;
  storeCharacters(characters);
};
