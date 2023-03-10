// navbar window scroll events

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 150 ||
    document.documentElement.scrollTop > 150
  ) {
    document.getElementById("navbar").style.position = "fixed";
  } else {
    document.getElementById("navbar").style.position = "relative";
  }
}

function openNav() {
  document.getElementById("mySidepanel").style.width = "260px";
  document.getElementById("mySidepanel").style.opacity = "1";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
  document.getElementById("mySidepanel").style.opacity = "0";
}
