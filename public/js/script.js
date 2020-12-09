/* Pojawianie się elementów podczas scrolowania */
window.onscroll = function () {
  animationShow();
};

function animationShow() {
  // Pojawianie się elementów podczas skrolowania
  //
  //
  var scroll =
    window.requestAnimationFrame ||
    // IE Fallback
    function (callback) {
      window.setTimeout(callback, 1000 / 60);
    };

  var elementsToShow = document.querySelectorAll(".show-on-scroll");

  Array.prototype.forEach.call(elementsToShow, function (element) {
    if (isElementInViewport(element)) {
      element.classList.add("is-visible");
      $(element).removeClass("show-on-scroll");
    }
  });

  // Helper function from: http://stackoverflow.com/a/7557433/274826
  function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0 && rect.bottom >= 0) ||
      (rect.bottom >=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <=
          (window.innerHeight || document.documentElement.clientHeight)) ||
      (rect.top >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight))
    );
  }
}

////////         Sprawdzanie poprawności maila

var errorEmail = 0;
var errorText = 0;
var errorTitle = 0;

// Email
document.getElementById("email").addEventListener("focusout", function () {
  errorEmail = 0;
  let email = document.forms["emailSend"]["email"].value;

  if (email == "") {
    document.getElementById("emailValid").innerHTML =
      "Brak podanego maila.<br>";
    errorEmail = 1;
  } else {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email.match(mailformat)) {
      document.getElementById("emailValid").innerHTML =
        "Błędny format maila. <br>";
      errorEmail = 1;
    }
  }
  if (errorEmail == 1) {
    document.getElementById("email").style.borderColor = "red";
    document.getElementById("emailValid").style.display = "block";
  } else {
    document.getElementById("email").style.borderColor = "lightgray";
    document.getElementById("emailValid").style.display = "none";
    document.getElementById("emailValid").innerHTML = "";
  }
});

// Title
document.getElementById("title").addEventListener("focusout", function () {
  errorTitle = 0;
  let title = document.forms["emailSend"]["title"].value;

  if (title == "") {
    document.getElementById("titleValid").innerHTML = "Brak tytułu maila.<br>";
    errorTitle = 1;
  } else {
    if (title.length <= 3) {
      document.getElementById("titleValid").innerHTML =
        "Zbyt krótka treść wiadomości.<br>";
      errorTitle = 1;
    }
  }
  if (errorTitle == 1) {
    document.getElementById("title").style.borderColor = "red";
    document.getElementById("titleValid").style.display = "block";
  } else {
    document.getElementById("title").style.borderColor = "lightgray";
    document.getElementById("titleValid").style.display = "none";
    document.getElementById("titleValid").innerHTML = "";
  }
});

// Text
document.getElementById("text").addEventListener("focusout", function () {
  errorText = 0;
  let name = document.forms["emailSend"]["text"].value;

  if (name == "") {
    document.getElementById("textValid").innerHTML =
      "Mail powinien posiadać treść.<br>";
    errorText = 1;
  } else {
    if (name.length <= 10) {
      document.getElementById("textValid").innerHTML =
        "Zbyt krótka treść wiadomości.<br>";
      errorText = 1;
    }
  }
  if (errorText == 1) {
    document.getElementById("text").style.borderColor = "red";
    document.getElementById("textValid").style.display = "block";
  } else {
    document.getElementById("text").style.borderColor = "lightgray";
    document.getElementById("textValid").style.display = "none";
    document.getElementById("textValid").innerHTML = "";
  }
});

// Sprawdzanie formularza przed wysłaniem
document.getElementById("submit").addEventListener("click", function () {
  if (
    document.forms["emailSend"]["text"].value == "" ||
    document.forms["emailSend"]["title"].value == "" ||
    document.forms["emailSend"]["email"].value == ""
  ) {
    document.getElementById("submit").disabled = true;
    document.getElementById("textValid").style.display = "block";
    document.getElementById("textValid").innerHTML =
      "Wszystkie pola należy wypełnić poprawnie. <br>";
    setTimeout(() => {
      document.getElementById("submit").disabled = false;
    }, 1000);
    setTimeout(() => {
      document.getElementById("textValid").style.display = "none";
    }, 5000);
  } else {
    document.getElementById("submit").disabled = false;
  }
});
