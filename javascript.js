var AA1 = document.getElementById("IDAA1");
var BB1 = document.getElementById("IDBB1");
var CC1 = document.getElementById("IDCC1");


BB1.onclick = openNav;
CC1.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  AA1.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  AA1.classList.remove("active");
}