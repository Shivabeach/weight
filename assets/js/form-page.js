/** @format */

'use strict';
const date = document.getElementById('date2');
const title = document.getElementById('title');
const content = document.getElementById('content');
const tags = document.getElementById('tags');
const blogger = document.getElementById('blogger');
const elem = document.activeElement;
const form = document.getElementById('weight');
const prime = document.getElementById('primeKeys');
const error = document.getElementById('error');

blogger.addEventListener('click', (e) => {
	let messages = [];
	if (date.value === '' || date.value == null) {
		messages.push('Date cannot be empty');
		date.style.border = '1px solid #ff0000';
	}
	if (title.value <= 6) {
		messages.push('Fill out the title');
	}
	if (content.value <= 15) {
		messages.push('a total lack of content');
	}

	if (tags.value === '') {
		messages.push('Need a Positive or Negative');
	}
	if (prime.value <= 6) {
		messages.push('Need some encaouraging words');
	}

	// display messages / errors
	if (messages.length > 0) {
		e.preventDefault();
		error.innerText = messages.join(', ');
	}
});
