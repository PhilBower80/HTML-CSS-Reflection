"use strict";

var mainOuter = document.querySelector('.main-outer');
var mainInner = document.querySelector('.main-inner');
var header = document.querySelector('header');
var lastScrollTop = 0;
mainOuter.addEventListener('scroll', function (e) {
  // console.log(e);
  var currentScrollPos = mainOuter.scrollTop;

  if (currentScrollPos > lastScrollTop) {
    header.classList.remove('sticky');
    +console.log('remove', mainOuter.scrollTop);
  } else {
    header.classList.add('sticky');
    console.log('add', mainOuter.scrollTop);
  }

  lastScrollTop = currentScrollPos <= 0 ? 0 : currentScrollPos; // For Mobile or negative scrolling
}, false);
