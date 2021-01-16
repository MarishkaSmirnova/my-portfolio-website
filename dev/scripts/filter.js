filterSelection("all")

function filterSelection(projectTool) {
  var project, i;
  project = document.getElementsByClassName("filterDiv");   //div with project on the left
  if (projectTool == "all") projectTool = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < project.length; i++) {
    removeClass(project[i], "show");
    if (project[i].className.indexOf(projectTool) > -1) addClass(project[i], "show");
  }
}

// Show filtered elements
function addClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");  
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function removeClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");   
  arr2 = name.split(" "); 
  for (i = 0; i < arr2.length; i++) {  
    while (arr1.indexOf(arr2[i]) > -1) {   
      arr1.splice(arr1.indexOf(arr2[i]), 1);  
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
var btns = document.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}