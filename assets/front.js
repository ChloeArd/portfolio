import "./images/1.png";
import "./images/262202024_224353823037268_4300898622644850545_n.png";
import "./images/logo_animNord-removebg-preview.png";
import * as $ from "jquery";

const ratio = .1;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: .1
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target);
        }
    });
}

//document.documentElement.classList.add('reveal-loaded');

//window.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(handleIntersect, options);
    const targets = document.querySelectorAll('.reveal');
    targets.forEach(function (target) {
        observer.observe(targets);
    });
//});