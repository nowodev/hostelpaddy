
// Authentication pages
function togglePass() {
  let pwd = document.getElementById("pwd"),
    displayText = document.getElementById("hidePass");
  if (pwd.type === "password") {
    pwd.type = "text";
    displayText.innerText = "Hide";
  } else {
    pwd.type = "password";
    displayText.innerText = "Show";
  }
}

// Going back/ clicking on back button
function back() {
  window.history.back();
}


// Authentication pages
function togglePass() {
  let pwd = document.getElementById("pwd"),
    displayText = document.getElementById("hidePass");
  if (pwd.type === "password") {
    pwd.type = "text";
    displayText.innerText = "Hide";
  } else {
    pwd.type = "password";
    displayText.innerText = "Show";
  }
}