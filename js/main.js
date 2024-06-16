const hamburger = document.querySelector("#hamburger");
const menu = document.querySelector("#menu");
const faSolid = document.querySelector(".fa-solid");
const hLink = document.querySelectorAll(".h-link");

hamburger.addEventListener("click", () => {
  menu.classList.toggle("hidden");
  faSolid.classList.toggle("fa-xmark");
});

hLink.forEach((link) => {
  link.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    faSolid.classList.toggle("fa-xmark");
  });
});

// change background header
const scrollHeader = () => {
  const header = document.getElementById("header");
  if (this.scrollY >= 50) {
    header.classList.add("border-b", "border-color-secondary");
  } else {
    header.classList.remove("border-b", "border-color-secondary");
  }
};
window.addEventListener("scroll", scrollHeader);

// scroll reveal animations
document.addEventListener("DOMContentLoaded", function () {
  console.log("DOMContentLoaded event fired!");
  const sr = ScrollReveal({
    origin: "top",
    distance: "60px",
    duration: 3000,
    delay: 100,
  });

  // home
  sr.reveal(".home-p-ani", { origin: "left" });
  sr.reveal(".home-img-ani", { origin: "right" });
  //about
  sr.reveal(".about-img-ani", { origin: "left" });
  sr.reveal(".about-p-ani", { origin: "right" });
  // event
  sr.reveal(".event-search-ani");
  sr.reveal(".event-ani", { origin: "bottom" });
});
