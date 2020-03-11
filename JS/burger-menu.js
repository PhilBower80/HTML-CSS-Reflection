const burgerMenu = document.querySelector('#burger-container');

burgerMenu.addEventListener('click', e => {
	const sidebar = document.querySelector('.nav-sidebar');
	const mainContent = document.querySelector('.main-outer');

	burgerMenu.classList.toggle('active');
	sidebar.classList.toggle('active');
	mainContent.classList.toggle('active');
});
