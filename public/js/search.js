const userDataTemplate = document.querySelector("[data-template]");
const userCardContainer = document.querySelector("[data-user-cards-container]");
const searchInput = document.querySelector("[data-search]");

let users = [];

searchInput.addEventListener("input", (e) => {
    const value = e.target.value.toLowerCase();
    users.forEach((user) => {
        const isVisible =
            user.name.toLowerCase().includes(value) ||
            user.email.toLowerCase().includes(value);
        user.element.classList.toggle("hide", !isVisible);
    });
});

fetch("https://jsonplaceholder.typicode.com/users")
    .then((res) => res.json())
    .then((data) => {
        users = data.map((user) => {
            const card = userDataTemplate.content.cloneNode(true).children[0];
            const header = card.querySelector("[data-name]");
            const body = card.querySelector("[data-email]");
            header.textContent = user.name;
            body.textContent = user.email;
            userCardContainer.append(card);
            return { name: user.name, email: user.email, element: card };
        });
    });
