

const dummyData = [
    {
        id: 1,
        name: "Leanne Graham",
        email: "Sincere@april.biz",
        age: 20,
        city: "Gwenborough",
    },
    {
        id: 2,
        name: "John Doe",
        email: "john.doe@example.com",
        age: 30,
        city: "New York",
    },
    {
        id: 3,
        name: "Mike Johnson",
        email: "mike.johnson@example.com",
        age: 35,
        city: "Chicago",
    },
    {
        id: 4,
        name: "Ervin Howell",
        email: "Shanna@melissa.tv",
        age: 30,
        city: "Wisokyburgh",
    },
    {
        id: 5,
        name: "Clementine Bauch",
        email: "Nathan@yesenia.net",
        age: 20,
        city: "McKenziehaven",
    },
];

function displayCards(data) {
    const container = document.getElementById("cards-container");
    container.innerHTML = "";
    data.forEach((item) => {
        const card = document.createElement("div");
        card.className =
            "p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700";
        card.innerHTML = `
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#"data-name>Name: ${item.name}</a></h2>
        <p class="mb-1 font-light text-gray-500 dark:text-gray-400 line-clamp-3" data-email>Email: ${item.email}</p>
        <p class="mb-1 font-light text-gray-500 dark:text-gray-400 line-clamp-3" data-email>Age: ${item.age}</p>
        <p class="mb-1 font-light text-gray-500 dark:text-gray-400 line-clamp-3" data-email>City: ${item.city}</p>
        
        `;
        container.appendChild(card);
    });
}

displayCards(dummyData);

document.getElementById("search").addEventListener("input", function (event) {
    const searchText = event.target.value.toLowerCase();
    const filteredData = dummyData.filter(
        (item) => item.name.toLowerCase().includes(searchText) ||
        item.email.toLowerCase().includes(searchText) ||
        item.city.toLowerCase().includes(searchText)
    );
    displayCards(filteredData);
});
