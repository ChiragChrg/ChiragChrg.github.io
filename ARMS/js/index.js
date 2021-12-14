const TeacherLogin = document.getElementById("loginT");
const StudentLogin = document.getElementById("loginS");
const LogoT = document.querySelector(".logoT");
const LogoS = document.querySelector(".logoS");

const TCAgree = document.querySelector(".TCAgree");
const RegSubmit = document.querySelector(".RegSubmit");

// Switching Visibility of the Login form
// var showFormT = () => {
//   TeacherLogin.style.display = "block";
//   StudentLogin.style.display = "none";
//   LogoT.style.display = "none";
//   LogoS.style.display = "block";
// };

// var showFormS = () => {
//   StudentLogin.style.display = "block";
//   TeacherLogin.style.display = "none";
//   LogoT.style.display = "block";
//   LogoS.style.display = "none";
// };

var matchPassword = () => {
  var password = document.getElementById("password").value;
  var ConfirmPassword = document.getElementById("confirm").value;
  var Alert = document.querySelector(".alert");

  if (password === ConfirmPassword) {
    Alert.innerHTML = "";
    Alert.style.display = "none";
  } else {
    Alert.style.display = "block";
    Alert.innerHTML = "Passwords do not match. Please try again.";
  }
};

var checkTC = () => {
  if (TCAgree.checked) RegSubmit.disabled = false;
  else RegSubmit.disabled = true;
};
