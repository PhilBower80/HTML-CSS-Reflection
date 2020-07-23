const mainOuter = document.querySelector('.main-outer');
const header = document.querySelector('#sticky-header');
let lastScrollTop = 0;

mainOuter.addEventListener(
	'scroll',
	(e) => {
		// console.log(e);
		let currentScrollPos = mainOuter.scrollTop;
		if (currentScrollPos >= 210) {
			if (currentScrollPos > lastScrollTop) {
				header.classList.remove('sticky');
			} else {
				header.classList.add('sticky');
			}
		}

		lastScrollTop = currentScrollPos <= 210 ? 0 : currentScrollPos; // For Mobile or negative scrolling
	},
	false
);

// const mainOuter = document.querySelector('.main-outer');
// const header = document.querySelector('#sticky-header');

// mainOuter.addEventListener('scroll', (e) => {
// 	if (window.pageYOffset >= 210) {
// 		header.classList.remove('sticky');
// 	} else {
// 		header.classList.add('sticky');
// 	}
// });
