const burgerMenu = document.querySelector('#burger-container');

burgerMenu.addEventListener('click', e => {
	const sidebar = document.querySelector('.nav-sidebar');
	burgerMenu.classList.toggle('active');
	const mainContent = document.querySelector('.main-outer');
	sidebar.classList.toggle('active');
	mainContent.classList.toggle('active');
});
