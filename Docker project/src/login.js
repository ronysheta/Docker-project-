// Login Script

const usernameField = document.querySelector("#username");
const passwordField = document.querySelector("#password");
const button = document.querySelector(".submit");
console.log(button);

const username = "admin",
  password = "1234";

button.addEventListener("click", (e) => {
  e.preventDefault(); // preventing submit functionallity
  if (usernameField.value === username && passwordField.value === password) {
    window.location.assign("./page2.php");
  } else {
    alert("Either the username or password is wrong, please try again.");
  }
});
