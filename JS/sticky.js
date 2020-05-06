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
				console.log('remove', mainOuter.scrollTop);
			} else {
				header.classList.add('sticky');
				console.log('add', mainOuter.scrollTop);
			}
		}

		lastScrollTop = currentScrollPos <= 0 ? 0 : currentScrollPos; // For Mobile or negative scrolling
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
