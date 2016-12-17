var show = false;
var hide = true;

function ocNav() {
  if (hide) {
    openNav();
    show = true;
    hide = false;
  } else if (show) {
    closeNav();
    hide = true;
    show = false;
  }
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "20px";
}
