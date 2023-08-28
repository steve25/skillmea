addEventListener("message", (event) => {
  let items = [];
  console.log(event.data);
  // split into separate words
  event.data.forEach((item) => {
    let words = item.title.split(" ");
    items = items.concat(words);
  });

  items = items.map((name) => `<li>${name}</li>`);

  let result = [];

  items.forEach((name) => {
    result.push(`<li>${name}</li>`);
  });

  // send them home
  postMessage(result);
});
