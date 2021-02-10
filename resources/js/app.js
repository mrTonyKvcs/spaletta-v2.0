require('./bootstrap');

require('alpinejs');

var myNav = document.getElementById("nav");

window.onscroll = function() {
    "use strict";
    //console.log(document.body.scrollTop, ' :body')
    //console.log(document.documentElement.scrollTop, ' :documentElement')
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
        myNav.classList.add("scroll");
    } else {
        myNav.classList.remove("scroll");
    }
};