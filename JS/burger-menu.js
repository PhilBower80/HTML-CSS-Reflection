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
const burgerMenu = document.querySelectorAll('.burger-container');
const sidebar = document.querySelector('.nav-sidebar');
const mask = document.querySelector('.mask');
const body2 = document.querySelector('body');

for (let i = 0; i < burgerMenu.length; i++) {
	console.log(i);
	let menu = burgerMenu[i];
	// console.log(menu);
	menu.addEventListener('click', () => {
		for (let i = 0; i < burgerMenu.length; i++) {
			burgerMenu[i].classList.toggle('active');
		}

		mask.classList.toggle('active');
		sidebar.classList.toggle('active');
		body2.classList.toggle('active');
	});
}

mask.addEventListener('click', () => {
	for (let i = 0; i < burgerMenu.length; i++) {
		burgerMenu[i].classList.toggle('active');
	}

	mask.classList.toggle('active');
	sidebar.classList.toggle('active');
	body2.classList.toggle('active');
});
