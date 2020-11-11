var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var wrapper = document.querySelector('.wrapper');
    var nav = document.querySelector('.navbar');
    var icon = document.querySelector('.menu-toggle i');

    wrapper.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
