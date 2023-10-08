let bars = document.querySelector(".bars");
let links = document.querySelector(".links");

let avatar = document.querySelector(".avatar");
let userMenu = document.querySelector(".user-menu");

let userMenuDisplay = window.getComputedStyle(userMenu);

avatar.addEventListener("click", () => {
    if (userMenuDisplay.display === "none") {
        userMenu.style.display = "flex";
    } else {
        userMenu.style.display = "none";
    }
});

bars.onclick = () => {
    links.classList.toggle("active");
    bars.classList.toggle("active");
};

