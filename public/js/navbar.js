window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 85 || document.documentElement.scrollTop > 85) {
    document.getElementById("headers").style.paddingTop = "0.3rem";
    document.getElementById("headers").style.paddingBottom = "0.3rem";
    document.getElementById("page-title").style.fontSize = "25px";
  } else {
    document.getElementById("headers").style.paddingTop = "15px";
    document.getElementById("headers").style.paddingBottom = "15px";
    document.getElementById("page-title").style.fontSize = "28px";
  }
}
