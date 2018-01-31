(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
window.onload = function() {
    console.log('Javascript Loaded');

    let html = document.querySelector("html").classList,
        body = document.querySelector("body").classList,
        slider = document.querySelector("#js-nav-slider").classList,        hbOuter = document.querySelector(".hamburger-outer"),
        hamburger = hbOuter.classList;

    hbOuter.addEventListener('click', function() {
        if (hamburger.contains('active')) {
            body.remove('lock');
            slider.remove('slide-in');
            hamburger.remove('active');
            slider.add('slide-out');
            setTimeout(function() {
                slider.add('hidden-mobile');
            }, 200);
        } else {
            slider.remove('slide-out');
            slider.remove('hidden-mobile');
            hamburger.add('active');
            body.add('lock');
            slider.add('slide-in');
        }
    });
};

},{}]},{},[1])