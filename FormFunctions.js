function updateError(str) {
  document.getElementsByClassName("error")[0].innerHTML = str;
}

function success() {
  document.getElementsByClassName("form")[0].style.display = "none";
  document.getElementsByClassName("success")[0].style.display = "block";
}
