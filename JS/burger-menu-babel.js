"use strict";

var burgerMenu = document.querySelector('#burger-container');
burgerMenu.addEventListener('click', function (e) {
  var sidebar = document.querySelector('.nav-sidebar');
  burgerMenu.classList.toggle('active');
  var mainContent = document.querySelector('.main-outer');
  sidebar.classList.toggle('active');
  mainContent.classList.toggle('active');
});
