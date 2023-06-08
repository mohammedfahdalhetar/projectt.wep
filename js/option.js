
const buttons = document.getElementsByClassName("button");
for (let button of buttons) {
  button.addEventListener("click", function() {
    for (let btn of buttons) {
      btn.style.display = "none"; 
    }
    
    button.nextElementSibling.style.display = "block";
  });
}

const forms = document.getElementsByTagName("form");
const exits = document.querySelectorAll("#exit");
const back= document.getElementById("back");

    for (let exit of exits) {
      exit.addEventListener("click", function() {
        for (let form of forms) {
          form.style.display = "none";
          back.style.display = "none";

        }
        for (let button of buttons) {    
          button.style.display = "inline-block";
        }
      })
    } 