continueOnboardingStudent();
continueOnboardingHouseOwner();

let onboardingBtnStudent = document.getElementById("continueOnboardingStudent"),
  secondPart = document.getElementById("secondPart"),
  firstPart = document.getElementById("firstPart"),
  submitBtn = document.getElementById("submitBtn"),
  submitBtnHouseOwner = document.getElementById("submitBtnHouseOwner"),
  consentContainer = document.getElementById("consentContainer"),
  iconContainer = document.getElementById("iconContainer");

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

// start verification if all input are filled
function inputVer() {
  let nameInput = document.getElementById("name").value.trim(),
    emailInput = document.getElementById("email").value.trim(),
    numInput = document.getElementById("num").value.trim(),
    pwdInput = document.getElementById("pwd").value.trim(),
    userStateInput = document.getElementById("userState").value.trim(),
    onboardingBtn = document.getElementById("continueOnboarding"),
    secondPart = document.getElementById("secondPart"),
    firstPart = document.getElementById("firstPart");



  if (nameInput && emailInput && numInput && pwdInput && userStateInput ===
    "") {
    // if these inputs ain't empty

    onboardingBtn.classList.remove("disabled-state");
    onboardingBtn.classList.add("enabled-state");
  }

  console.log(userStateInput);

  onboardingBtn.click(function () {
    secondPart.classList.remove("displayNone");
    firstPart.classList.add("displayNone");
  })
}

// inputVer();

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

function continueOnboardingStudent() {
  $("#continueOnboardingStudent").click(function () {
    // What to happen to first part
    firstPart.classList.add("displayNone");

    // What to happen to second part
    secondPart.classList.remove("displayNone");
    secondPart.classList.add("slideInUp");

    // What to do to onboarding btn
    onboardingBtnStudent.classList.add("displayNone");

    // What to do to submit btn
    submitBtn.classList.remove("displayNone");
  });
}

function continueOnboardingHouseOwner() {
  $("#continueOnboardingHouseOwner").click(function () {
    // What to happen to first part
    firstPart.classList.add("displayNone");

    // What to happen to second part
    secondPart.classList.remove("displayNone");
    secondPart.classList.add("slideInUp");

    // What to do to onboarding btn
    // onboardingBtn.classList.add("fadeOutUp");

    // Second part for house agent/owner
    let subTitle = document.getElementById("subTitle"),
      onboardTitle = document.getElementById("onboardTitle");

    // What to happen when onboarding button is clicked
    // Change onboardTitle text
    onboardTitle.innerText = "Confirm your number";

    // Change subTitle text
    subTitle.innerText = `Enter 4 digit code sent to ${numInput}`;

    // What to do to submit btn
    // submitBtn.classList.remove("displayNone");

    //What to do to consent container
    consentContainer.classList.add("displayNone"); //hide sign up consent container

    //What to do to icon container
    iconContainer.classList.add("displayNone"); //hide icon container
  });
}