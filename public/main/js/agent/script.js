continueOnboardingHouseOwner();


let onboardingBtnStudent = document.getElementById("continueOnboardingStudent"),
  secondPart = document.getElementById("secondPart"),
  firstPart = document.getElementById("firstPart"),
  thirdPart = document.getElementById("thirdPart"),
  fourthPart = document.getElementById("fourthPart"),
  submitBtn = document.getElementById("submitBtn"),
  submitBtnHouseOwner = document.getElementById("submitBtnHouseOwner"),
  consentContainer = document.getElementById("consentContainer"),
  iconContainer = document.getElementById("iconContainer"),
  subTitle = document.getElementById("subTitle"),
  onboardTitle = document.getElementById("onboardTitle");


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

inputVer();

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


function continueOnboardingHouseOwner() {
  $("#continueOnboardingHouseOwner").click(function () {
    // What to happen to first part
    firstPart.classList.add("displayNone");

    // What to happen to second part
    secondPart.classList.remove("displayNone");
    secondPart.classList.add("slideInUp");

    // What to do to onboarding btn
    // onboardingBtn.classList.add("fadeOutUp");


    // What to happen when onboarding button is clicked
    // Change onboardTitle text
    onboardTitle.innerText = "Confirm your number";

    // Change subTitle text
    // subTitle.innerText = `Enter 4 digit code sent to ${numInput}`;

    // What to do to submit btn
    // submitBtn.classList.remove("displayNone");

    //What to do to consent container
    consentContainer.classList.add("displayNone"); //hide sign up consent container

    //What to do to icon container
    iconContainer.classList.add("displayNone"); //hide icon container

    continueAfterNumber();

  });

}

function continueAfterNumber() {
  $("#continueAfterNumber").click(function () {
    // What to happen to second part
    secondPart.classList.add("displayNone");

    // What to happen to third part
    thirdPart.classList.remove("displayNone");
    thirdPart.classList.add("slideInUp");


    // What to happen when onboarding button is clicked
    // Change onboardTitle text
    onboardTitle.innerText = "Set up your password to continue";


    // Change subTitle text
    subTitle.innerText = ``;

    continueOnboardingAfterPass();
  });
}


function continueOnboardingAfterPass() {
  $("#continueOnboardingAfterPass").click(function () {
    // What to happen to second part
    thirdPart.classList.add("displayNone");

    // What to happen to third part
    fourthPart.classList.remove("displayNone");
    fourthPart.classList.add("slideInUp");

    // What to happen when onboarding button is clicked
    // Change onboardTitle text
    onboardTitle.innerText = "Upload a photo";

    // Change subTitle text
    subTitle.innerText = `We will need a clear photo of you to verify your account`;

    // Show submit btn
    submitBtnHouseOwner.classList.remove("displayNone");
  });
}