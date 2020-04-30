const cookie = document.querySelector('.cookie-outer');
const closeCookie = document.querySelector('.accept-cookie-btn');
const cookieCheck = localStorage.getItem('cookie');

closeCookie.addEventListener('click', () => {
	localStorage.setItem('cookie', 'true');
	cookie.style.display = 'none';
});

if (cookieCheck === 'true') {
	console.log('cookie = true');
	cookie.style.display = 'none';
} else {
	console.log('no cookie found');
	cookie.style.display = 'flex';
}
