
const inputs = document.querySelectorAll(".input"); //select all input elements
//function to focus elements
function focusFunc() {
  let parent = this.parentNode;//grab input container
  parent.classList.add("focus");
}
//funtion to blur elements
function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") { //error handler to make sure the label doesnt overlap user inputs
    parent.classList.remove("focus");
  }
}
//add focus and blur elements to each input
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
