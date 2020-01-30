// When the user scrolls the page, execute myFunction
window.onscroll = function() {
	myFunction();
};

// Get the header
var header = document.getElementById('myHeader');

//Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reachits scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add('sticky');
	} else {
		header.classList.remove('sticky');
	}
}
