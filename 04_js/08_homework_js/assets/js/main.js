//**
//
// PIMPED in Lesson 12
//
//*/

console.log("Watch this in Lesson 12 :)");

const newWhoPreview = document.getElementById("newWhoPreview");
const newWhoInput = document.getElementById("newWhoInput");
const newWatPreview = document.getElementById("newWatPreview");
const newWatInput = document.getElementById("newWatInput");

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
    createDudes();
    clear();
  }
});

/**
 * Delete dude
 */

const deleteDude = (id) => {
  characters = characters.filter((dude) => dude.id !== id);
  createDudes();
};

/**
 * Fetch data and call dude render
 */

window.onload = async () => {
  const fetchCharacters = async () => {
    try {
      let response = await fetch(
        "https://gist.githubusercontent.com/yablko/035b44dd8d63d586e6763872beb3547e/raw/0f3d18326492a6670bc259a78a98e4c702059d81/dudes.json"
      );
      response = await response.json();

      characters = response;
    } catch (error) {
      console.error(error);
    }
  };

  await fetchCharacters();

  createDudes();
};

/**
 * Render dude list
 */

const createDudes = () => {
  document.getElementById("dude").innerHTML = "";
  characters.forEach((dude) => {
    let li = document.createElement("li");
    li.classList.add("dude");
    li.innerHTML = `<a class="ctrl" onclick="deleteDude(${dude.id})">x</a>
    
    <article :class="{ faded: dude.cool < 10, gold: dude.cool > 50 }">
    ${dude.who}
    <span>${dude.wat}</span>
    </article>
    
    <input class="ctrl coolnesInput" type="number" value="${dude.cool}" onchange="updateCoolnes(${dude.id})" />`;

    document.getElementById("dude").appendChild(li);
  });
};

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
 * Coolnes
 */

const updateCoolnes = (id) => {
  const coolnesInput = document.querySelectorAll(".coolnesInput");

  const index = characters.findIndex((dude) => dude.id == id);
  characters[index].cool = +coolnesInput[index].value;
  console.table(characters);
};
