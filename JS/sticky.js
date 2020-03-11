// const header = document.querySelector('header');
// const sticky = header.offsetTop;

// let lastScrollTop = 0;
// window.addEventListener(
// 	'scroll',
// 	e => {
// 		console.log(e);
// 		let currentScrollPos =
// 			window.pageYOffset || document.documentElement.scrollTop;
// 		if (currentScrollPos > lastScrollTop) {
// 			header.classList.remove('sticky');
// 		} else {
// 			header.classList.add('sticky');
// 		}
// 		lastScrollTop = currentScrollPos <= 0 ? 0 : currentScrollPos; // For Mobile or negative scrolling
// 	},
// 	false
// );

// const mainOuter = document.querySelector('.main-outer');
// const header = document.querySelector('header');
// const sticky = header.offsetTop;

// let lastScrollTop = 0;

// mainOuter.addEventListener(
// 	'scroll',
// 	e => {
// 		console.log(e);
// 		let currentScrollPos = mainOuter.scrollTop;
// 		if (currentScrollPos > lastScrollTop) {
// 			header.classList.remove('sticky');
// 			+console.log('remove');
// 		} else {
// 			header.classList.add('sticky');
// 			console.log('add');
// 		}
// 	},
// 	false
// );

const mainOuter = document.querySelector('.main-outer');
const mainInner = document.querySelector('.main-inner');
const header = document.querySelector('header');
let lastScrollTop = 0;

mainOuter.addEventListener(
	'scroll',
	e => {
		// console.log(e);
		let currentScrollPos = mainOuter.scrollTop;
		if (currentScrollPos > lastScrollTop) {
			header.classList.remove('sticky');
			+console.log('remove', mainOuter.scrollTop);
		} else {
			header.classList.add('sticky');
			console.log('add', mainOuter.scrollTop);
		}
		lastScrollTop = currentScrollPos <= 0 ? 0 : currentScrollPos; // For Mobile or negative scrolling
	},
	false
);
