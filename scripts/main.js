//movie description caret down icon
document.querySelectorAll(".card-description").forEach(function (e) {
  e.addEventListener("click", function () {
    this.querySelector(".fa-caret-down").classList.toggle("fas-toggle");
  });
});

// arrow up
const arrow = document.querySelector("#arrowup");

window.addEventListener("scroll", () => {
  if (window.scrollY >= window.innerHeight / 2) {
    arrow.classList.add("arrow-active");
  } else {
    arrow.classList.remove("arrow-active");
  }
});

arrow.addEventListener("click", () => {
  window.scroll({
    top: 0,
    behavior: "smooth",
  });
});

//select current menu Item and add active class
var path = window.location.pathname;
var page = path.split("/").pop();
console.log(page);

document.getElementById(page).classList.add("active");

// timeout for alerts
function closeAlert() {
  document.querySelector("#alert").style.display = " none";
}
// close the div in 3 secs
window.setTimeout(closeAlert, 4000);
