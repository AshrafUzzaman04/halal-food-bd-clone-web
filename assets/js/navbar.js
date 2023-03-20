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
  document.getElementById("ul").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
  document.getElementById("mySidepanel").style.opacity = "0";
  document.getElementById("mySidepanel").style.visibility = "hidden";
  document.getElementById("ul").style.display = "none";
}

// =============================
// <!-- navigaiton bar toggle -->
// =============================

$(".dropdown").click(function () {
  var x = $(this).parent("li").children(".dropdown-child").css("display");
  if (x == "none") {
    $(this).parent("li").children(".dropdown-child").css("display", "block");
  } else {
    $(this).parent("li").children(".dropdown-child").css("display", "none");
  }
});
