"use strict";

var cookie = document.querySelector('.cookie-outer');
var closeCookie = document.querySelector('.accept-cookie-btn');
var cookieCheck = localStorage.getItem('cookie');
closeCookie.addEventListener('click', function () {
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
