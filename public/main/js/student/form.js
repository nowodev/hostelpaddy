continueToAmenities();

let onboardingBtnStudent = document.getElementById("continueOnboardingStudent"),
    firstPart = document.getElementById("personal-details"),
    secondPart = document.getElementById("amenities"),
    thirdPart = document.getElementById("choice"),
    fourthPart = document.getElementById("photos"),
    fifthPart = document.getElementById("payment"),

    bullet1 = document.getElementById("bullet1"),
    bullet2 = document.getElementById("bullet2"),
    bullet3 = document.getElementById("bullet3"),
    bullet4 = document.getElementById("bullet4"),
    bullet5 = document.getElementById("bullet5"),


    submitBtn = document.getElementById("submitBtn"),
    submitBtnHouseOwner = document.getElementById("submitBtnHouseOwner"),
    consentContainer = document.getElementById("consentContainer"),
    iconContainer = document.getElementById("iconContainer"),
    subTitle = document.getElementById("subTitle"),
    onboardTitle = document.getElementById("onboardTitle");


// Going back/ clicking on back button
function back() {
    secondPart.classList.add("displayNone");

    firstPart.classList.remove("displayNone");
    firstPart.classList.add("slideInLeft");

    bullet2.classList.remove("text-info");
    bullet2.classList.add("text-black-50");
}

function continueToAmenities() {
    $("#continueToAmenities").click(function () {
        firstPart.classList.add("displayNone");

        secondPart.classList.remove("displayNone");
        secondPart.classList.add("slideInRight");

        bullet2.classList.remove("text-black-50");
        bullet2.classList.add("text-info");

        continueToChoice();
    });
}

function continueToChoice() {
    $("#continueToChoice").click(function () {
        secondPart.classList.add("displayNone");


        thirdPart.classList.remove("displayNone");
        thirdPart.classList.add("slideInUp");

        continueToPhotos();
    });
}

function continueToPhotos() {
    $("#continueToPhotos").click(function () {
        thirdPart.classList.add("displayNone");


        fourthPart.classList.remove("displayNone");
        fourthPart.classList.add("slideInUp");

        continueToPayment();
    });
}

function continueToPayment() {
    $("#continueToPayment").click(function () {
        fourthPart.classList.add("displayNone");


        fifthPart.classList.remove("displayNone");
        fifthPart.classList.add("slideInUp");
    });
}