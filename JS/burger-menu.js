window.onload = function() {
	document
		.getElementById('burger-container')
		.addEventListener('click', function() {
			this.classList.toggle('open');
		});
};
