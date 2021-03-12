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

// if (form.focus) {
// 	console.log('contact');
// }
// if (form.blur) {
// 	console.log('lost contact');
// }

title.addEventListener(
	'focus',
	(e) => {
		e.target.style.background = '#514642';
		e.target.style.color = '#fff';
	},
	true
);

// title.addEventListener(
// 	'blur',
// 	(e) => {
// 		let title1 = document.getElementById('title').value;
// 		let title2 = title1.length;
// 		if (title2 > 5) {
// 			e.target.style.background = '#B8662E';
// 			e.target.style.color = '#000';
// 		} else {
// 			alert(`Title must be longer than 5 characters. You only used ${title2}`);
// 		}
// 	},
// 	true
// );
// form.addEventListener('focus', () => {
// 	if (title === 'focus') {
// 		console.log('Element has focus!');
// 	} else {
// 		console.log(`Element is not focused.`);
// 	}
// });
const password = document.querySelector('#password');
const text = document.getElementById('text');
password.addEventListener('focus', (event) => {
	event.target.style.background = '#C46C31';
});

password.addEventListener('blur', (event) => {
	if (password.value.length > 5) {
		event.target.style.background = 'green';
	} else {
		event.target.style.background = '#4c6ef5';
	}
});

// https://www.freecodecamp.org/news/form-validation-with-html5-and-javascript/

const submit = document.getElementById('blogger');
let valid = true;

function titles() {
	if (!title.value || title.value.length < 5) {
		const nameError = document.getElementById('nameError');
		nameError.classList.add('visible');
		title.classList.add('invalid');
		nameError.setAttribute('aria-hidden', false);
		nameError.setAttribute('aria-invalid', true);
	} else {
		return valid;
	}
}
function contents() {
	if (!content.value || content.value.length < 5) {
		const contentError = document.getElementById('contentError');
		contentError.classList.add('visible');
		content.classList.add('invalid');
		contentError.setAttribute('aria-hidden', false);
		contentError.setAttribute('aria-invalid', true);
	} else {
		return valid;
	}
}
function tagss() {
	if (!tags.value || tags.value.length < 5) {
		const tagsError = document.getElementById('tagsError');
		tagsError.classList.add('visible');
		tags.classList.add('invalid');
		tagsError.setAttribute('aria-hidden', false);
		tagsError.setAttribute('aria-invalid', true);
	} else {
		return valid;
	}
}
function primes() {
	if (!prime.value || prime.value.length < 5) {
		const primeError = document.getElementById('primeError');
		primeError.classList.add('visible');
		prime.classList.add('invalid');
		primeError.setAttribute('aria-hidden', false);
		primeError.setAttribute('aria-invalid', true);
	} else {
		return valid;
	}
}
submit.addEventListener('click', (e) => {
	e.preventDefault();
	titles();
	contents();
	tagss();
	primes();
});
