const burgerMenu = document.querySelector('#burger-container');
const mainContent = document.querySelector('.main-outer');
const mask = document.querySelector('.mask');

burgerMenu.addEventListener('click', () => {
	mask.classList.toggle('active');
	burgerMenu.classList.toggle('active');
	mainContent.classList.toggle('active');
});

mask.addEventListener('click', () => {
	mask.classList.toggle('active');
	burgerMenu.classList.toggle('active');
	mainContent.classList.toggle('active');
});
