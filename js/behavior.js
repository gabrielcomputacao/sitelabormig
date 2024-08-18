const menusMobile = document.querySelector(".header-menu-mobile");
const navbar = document.querySelector(".navbar");

navbar.addEventListener("click", () => {
  let isInvisible = menusMobile.classList.contains("invisible");
  if (isInvisible) {
    menusMobile.classList.remove("invisible");
    isInvisible = false;
  } else {
    menusMobile.classList.add("invisible");
    isInvisible = true;
  }
});
