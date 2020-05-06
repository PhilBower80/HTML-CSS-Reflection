"use strict";

// const burgerMenu = document.querySelectorAll('.burger-container');
// const mainContent = document.querySelector('.main-outer');
// const mask = document.querySelector('.mask');
// burgerMenu.forEach((menu) => {
// 	menu.addEventListener('click', () => {
// 		mask.classList.toggle('active');
// 		burgerMenu.forEach((menu) => {
// 			menu.classList.toggle('active');
// 		});
// 		mainContent.classList.toggle('active');
// 	});
// });
// mask.addEventListener('click', () => {
// 	mask.classList.toggle('active');
// 	burgerMenu.forEach((menu) => {
// 		menu.classList.toggle('active');
// 	});
// 	mainContent.classList.toggle('active');
// });
// This version works in IE
var burgerMenu = document.querySelectorAll('.burger-container');
var mainContent = document.querySelector('.main-outer');
var mask = document.querySelector('.mask');

for (var i = 0; i < burgerMenu.length; i++) {
  console.log(i);
  var menu = burgerMenu[i];
  console.log(menu);
  menu.addEventListener('click', function () {
    mask.classList.toggle('active');

    for (var _i = 0; _i < burgerMenu.length; _i++) {
      burgerMenu[_i].classList.toggle('active');
    }

    mainContent.classList.toggle('active');
  });
}

mask.addEventListener('click', function () {
  mask.classList.toggle('active');

  for (var _i2 = 0; _i2 < burgerMenu.length; _i2++) {
    burgerMenu[_i2].classList.toggle('active');
  } // burgerMenu.forEach((menu) => {
  // 	menu.classList.toggle('active');
  // });


  mainContent.classList.toggle('active');
});
