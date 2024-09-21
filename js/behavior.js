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

const atuacao = document.querySelector("#atuacao");
const areas_atuacao = document.querySelector(".areas_atuacao");

atuacao.addEventListener("click", (event) => {
  areas_atuacao.classList.toggle("submenu-invi");
  event.stopPropagation();
});

document.addEventListener("click", function (event) {
  if (
    !areas_atuacao.classList.contains("submenu-invi") &&
    !areas_atuacao.contains(event.target) &&
    event.target !== areas_atuacao
  ) {
    areas_atuacao.classList.add("submenu-invi");
  }
});
