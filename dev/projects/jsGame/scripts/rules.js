
const btnStart = document.getElementById("button-start");
const btnRules = document.getElementById("button-rules");

const rules = document.getElementById("rules");
const music = document.getElementById("music");

//music
document.addEventListener("DOMContentLoaded", function (event) {
  music.play();
});

//buttons
btnRules.addEventListener("click", openRules);

function openRules() {
  if (rules.style.display == 'block') {
    rules.style.display = 'none';
  }
  else
    rules.style.display = 'block';
}

// btnStart.addEventListener("click", openGame)

// function openGame() {
//   window.open("game.html");
// }

