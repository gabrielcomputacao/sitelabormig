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

/* accordion */

const answers = document.querySelectorAll(".topic-answers");
const topicAnswers = document.querySelectorAll(".answer-topic");

for (let index = 0; index < answers.length; index++) {
  answers[index].addEventListener("click", () => {
    topicAnswers[index].classList.toggle("topic-invisible");
  });
}
