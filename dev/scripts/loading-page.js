
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("spinner").style.display = "none";
  document.getElementById("main").style.display = "block";
}
