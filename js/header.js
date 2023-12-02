const hamburger = document.querySelector(".nav .hamburger");
const mobileNav = document.querySelector(".mobile__nav");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    mobileNav.classList.toggle("open");
});