/**
 * For Forms page
 *
 * @format
 */

'use strict';
let keys = document.querySelector('.blog--keys');
if (keys !== null) {
	const splitter = keys.textContent.split(',');
	splitter.forEach(function(suc, i) {
		const html = `<p>${suc}</p>`;
		keys.insertAdjacentHTML('afterbegin', html);
	});
}

// let needs = document.querySelector('#needs');
// if (needs !== null) {
// 	const plans = needs.textContent.split(',');
// 	//console.log(typeof needs);
// 	plans.forEach(function(cess, i) {
// 		const html = `<p>${cess}</p>`;
// 		console.log(html);
// 		needs.insertAdjacentHTML('afterbegin', html);
// 	});
// }

//colors the positive/negative tags
const tags = document.querySelectorAll('.blog--tags');
tags.forEach(function(tag, i) {
	if (tag.textContent === 'Positive') {
		tag.style.backgroundColor = '#ffff00';
		tag.style.color = '#000';
	} else {
		tag.style.backgroundColor = '#ff0000';
		tag.style.color = '#fff';
	}
});

const tagg = document.querySelectorAll('.blogs--tags');
tagg.forEach(function(tag1, i) {
	if (tag1.textContent === 'Positive') {
		tag1.style.backgroundColor = '#ffff00';
		tag1.style.color = '#000';
	} else {
		tag1.style.backgroundColor = '#ff0000';
		tag1.style.color = '#fff';
	}
});

function printer(blog) {
	var printContents = document.querySelector('.blogs').innerHTML;
	var originalContents = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContents;
}
