// window.onload = function() {
// 	document
// 		.getElementById('burger-container')
// 		.addEventListener('click', function() {
// 			this.classList.toggle('open');
// 		});
// };

const burgerMenu = document.querySelector('#burger-container');

burgerMenu.addEventListener('click', e => {
	const sidebar = document.querySelector('.nav-sidebar');
	burgerMenu.classList.toggle('active');
	const mainContent = document.querySelector('body');
	sidebar.classList.toggle('active');
	mainContent.classList.toggle('active');
});
