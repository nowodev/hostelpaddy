continueToAmenities();

let firstPart = document.getElementById("property-details"),
    secondPart = document.getElementById("amenities"),
    thirdPart = document.getElementById("rules"),
    fourthPart = document.getElementById("photos"),
    fifthPart = document.getElementById("payment"),

    bullet1 = document.getElementById("bullet1"),
    bullet2 = document.getElementById("bullet2"),
    bullet3 = document.getElementById("bullet3"),
    bullet4 = document.getElementById("bullet4"),
    bullet5 = document.getElementById("bullet5"),

    title1 = document.getElementById("title1"),
    subtitle1 = document.getElementById("subtitle1"),
    title2 = document.getElementById("title2"),
    subtitle2 = document.getElementById("subtitle2"),
    title3 = document.getElementById("title3"),
    subtitle3 = document.getElementById("subtitle3"),
    title4 = document.getElementById("title4"),
    subtitle4 = document.getElementById("subtitle4");


// Clicking on back buttons
function backToDetails() {
    secondPart.classList.add("displayNone");

    firstPart.classList.remove("displayNone");
    firstPart.classList.add("slideInLeft");

    bullet2.classList.remove("text-info");
    bullet2.classList.add("text-black-50");
}

function backToAmenities() {
    thirdPart.classList.add("displayNone");

    secondPart.classList.remove("displayNone");
    secondPart.classList.add("slideInRight");

    bullet3.classList.remove("text-info");
    bullet3.classList.add("text-black-50");
}

function backToRules() {
    fourthPart.classList.add("displayNone");

    thirdPart.classList.remove("displayNone");
    thirdPart.classList.add("slideInRight");

    bullet4.classList.remove("text-info");
    bullet4.classList.add("text-black-50");
}

function backToPhotos() {
    fifthPart.classList.add("displayNone");

    fourthPart.classList.remove("displayNone");
    fourthPart.classList.add("slideInRight");

    bullet5.classList.remove("text-info");
    bullet5.classList.add("text-black-50");
}

// clicking on continue buttons
function continueToAmenities() {
    $("#continueToAmenities").click(function () {
        firstPart.classList.add("displayNone");

        secondPart.classList.remove("displayNone");
        secondPart.classList.add("slideInRight");

        bullet2.classList.remove("text-black-50");
        bullet2.classList.add("text-info");

        title1.innerText = "Amenities";
        subtitle1.innerText = "In order to list your hostel, we need you to provide some information on the property.";

        continueToRules();
    });
}

function continueToRules() {
    $("#continueToRules").click(function () {
        secondPart.classList.add("displayNone");

        thirdPart.classList.remove("displayNone");
        thirdPart.classList.add("slideInRight");

        bullet3.classList.remove("text-black-50");
        bullet3.classList.add("text-info");

        title2.innerText = "Rules";
        subtitle2.innerText = "In order to list your hostel, we need you to provide some information on the property.";

        continueToPhotos();
    });
}

function continueToPhotos() {
    $("#continueToPhotos").click(function () {
        thirdPart.classList.add("displayNone");

        fourthPart.classList.remove("displayNone");
        fourthPart.classList.add("slideInRight");

        bullet4.classList.remove("text-black-50");
        bullet4.classList.add("text-info");

        title3.innerText = "Photos & video";
        subtitle3.innerText = "In order to list your hostel, we need you to provide some information on the property.";

        continueToPayment();
    });
}

function continueToPayment() {
    $("#continueToPayment").click(function () {
        fourthPart.classList.add("displayNone");

        fifthPart.classList.remove("displayNone");
        fifthPart.classList.add("slideInRight");

        bullet5.classList.remove("text-black-50");
        bullet5.classList.add("text-info");

        title4.innerText = "Payment";
        subtitle4.innerText = "Make payment to finish your hostel property listing. We do not store your card details.";
    });
}