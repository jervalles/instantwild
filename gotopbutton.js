const goTopButtonConst = document.getElementsByClassName('gotopbutton');

window.onscroll = function() {scrollToTopFunction()};

function scrollToTopFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 500) {
    goTopButtonConst[0].style.display = "block";
    } else {
    goTopButtonConst[0].style.display = "none";
    }
}
