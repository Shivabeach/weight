/** @format */
const color = require('color');
const item1 = document.querySelector('.item-1');
const item2 = document.querySelector('.item-2');
const item3 = document.querySelector('.item-3');
const item4 = document.querySelector('.item-4');
let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');

// site links
const str = 'Home';
const item11 = str.link('http://weight/');
item1.innerHTML = item11;
const str2 = 'Calculator';
const item22 = str2.link('http://weight/pages/prime2');
item2.innerHTML = item22;
const str3 = 'page 3';
const item33 = str3.link('http://designs/prime/three');
item3.innerHTML = item33;
const str4 = 'Page 4';
const item44 = str4.link('http://designs/prime/four');
item4.innerHTML = item44;

function returnDate() {
	const date = new Date();
	const day = date.getDate();
	const month = date.getMonth() + 1;
	const year = date.getFullYear();
	datey.style.color = '#4b0082';
	datey.innerHTML = `Today is ${month} / ${day} / ${year}`;
}
returnDate();

let yer = new Date();
copyr.innerHTML = `\u00A92019 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
	// this highlights the current active link
	if (document.links[i].href === document.URL) {
		document.links[i].className = 'current';
	}
}

// const x = document.querySelector("a.external");
// addEventListener()click
