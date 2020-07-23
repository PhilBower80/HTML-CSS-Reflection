const body = document.body;
const scrollUp = 'scroll-up';
const scrollDown = 'scroll-down';
let lastScroll = 0;

window.addEventListener('scroll', () => {
	let currentScroll = window.pageYOffset;
	if (currentScroll > 250) {
		if (currentScroll == 0) {
			body.classList.remove(scrollUp);
			return;
		}

		if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
			// down
			body.classList.remove(scrollUp);
			body.classList.add(scrollDown);
			console.log(currentScroll);
		} else if (
			currentScroll < lastScroll &&
			body.classList.contains(scrollDown)
		) {
			// up
			body.classList.remove(scrollDown);
			body.classList.add(scrollUp);
			console.log(currentScroll);
		}
	}

	lastScroll = currentScroll;
});
