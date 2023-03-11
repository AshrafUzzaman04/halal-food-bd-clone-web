// =============================
// navbar window scroll events
// =============================

window.onscroll = function () {
  scrollFunction();
};

var navbar = document.getElementById("navbar");
var mainLogo = document.getElementById("mainLogo");
var sticky = navbar.offsetTop;

function scrollFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.style.position = "fixed";
    navbar.style.top = "0";
    mainLogo.style.maxHeight = "70px";
  } else {
    navbar.style.position = "relative";
    mainLogo.style.maxHeight = "85px";
  }
}

// =============================
// open & close mobile side manubar
// =============================

function openNav() {
  document.getElementById("mySidepanel").style.width = "260px";
  document.getElementById("mySidepanel").style.opacity = "1";
  document.getElementById("mySidepanel").style.visibility = "visible";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
  document.getElementById("mySidepanel").style.opacity = "0";
  document.getElementById("mySidepanel").style.visibility = "hidden";
}

// =============================
// <!-- navigaiton bar toggle -->
// =============================

$(".dropdown").click(function () {
  var x = $(this).children(".dropdown-child").css("display");
  if (x == "none") {
    $(this).children(".dropdown-child").css("display", "block");
  } else {
    $(this).children(".dropdown-child").css("display", "none");
  }
});
