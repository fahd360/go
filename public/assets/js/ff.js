let photoForm = document.querySelector(".add-photo");

// let img = document.querySelector(".uplouded-img");
let img = document.createElement("img");
img.className = "uplouded-img";

let uploadLabel = document.getElementById("upload-label");

let input = document.getElementById("file");

let popUps = document.querySelectorAll(".pop-up");
let trashs = Array.from(document.querySelectorAll(".trash"));

input.addEventListener("change", () => {
    uploadLabel.style.display = "none";
    photoForm.prepend(img);
    img.src = URL.createObjectURL(input.files[0]);
})

trashs.forEach(e => {
    e.addEventListener("click",() => {
        // popUps[trashs.indexOf(e)].style.display = "flex";
        if (window.getComputedStyle(popUps[trashs.indexOf(e)]).display === "none") {
            popUps[trashs.indexOf(e)].style.display = "flex";
        } else {
            popUps[trashs.indexOf(e)].style.display = "none";
        }
    })
});
