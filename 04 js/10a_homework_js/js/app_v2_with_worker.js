const list = document.querySelector("ol");
let data = [];

const fetchData = async () => {
  try {
    const response = await axios.get(
      "https://jsonplaceholder.typicode.com/todos"
    );

    data = response.data;
  } catch (error) {
    console.error(error);
  }
  console.log(data);
};

const sortItem = () => {
  let worker = new Worker("js/worker_v2_with_map.js");
  worker.postMessage(data);

  worker.addEventListener("message", (event) => {
    list.innerHTML = event.data.join("");
  });
};

window.addEventListener("load", async () => {
  await fetchData();

  let rawData = new Worker("js/raw_data.js");

  rawData.postMessage(data);

  rawData.addEventListener("message", (event) => {
    list.innerHTML = event.data.join("");
  });
});
