/** @format */
// const Color = require('color');
import { log } from './utils.js';
('use strict');
// const color = Color('rgb(180, 255,180)');
// console.log(color.hsl().string());
const item1 = document.querySelector('.item-1');
const item2 = document.querySelector('.item-2');
const item3 = document.querySelector('.item-3');
const item4 = document.querySelector('.item-4');
const item5 = document.querySelector('.item-5');
const item6 = document.querySelector('.item-6');

let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');
const header = document.getElementById('header');
const calHeader = document.getElementById('cal-header');
const cals = [header, calHeader];
const theColor = document.querySelector('.color');

// site links
const str = 'Home';
const item11 = str.link('http://weight/');
item1.innerHTML = item11;
const str2 = 'Calculator';
const item22 = str2.link('http://weight/pages/prime2');
item2.innerHTML = item22;
const str3 = 'Plan';
const item33 = str3.link('http://weight/pages/plan');
item3.innerHTML = item33;
const str4 = 'Cost';
const item44 = str4.link('http://weight/pages/costs');
item4.innerHTML = item44;
const str5 = 'Purchases';
const item55 = str5.link('http://weight/pages/purch');
item5.innerHTML = item55;
const str6 = 'Calendar';
const item66 = str6.link('http://weight/mycal');
item6.innerHTML = item66;

function returnDate() {
	const date = new Date();
	const day = date.getDate();
	const month = date.getMonth() + 1;
	const year = date.getFullYear();
	//datey.style.color = '#4b0082';
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

addEventListener('DOMContentLoaded', () => {
	const h = Math.floor(Math.random() * 360);
	let col = `hsl(${h}deg, 100%, 90%)`;
	if (header || calHeader) {
		if (header) {
			header.style.backgroundColor = col;
		}
		if (calHeader) {
			calHeader.style.backgroundColor = col;
		}
	}
	if (theColor) {
		theColor.innerText = col;
	}
});

const locate = document.querySelector('.locate');
if (locate != null) {
	locate.innerHTML = 'Page location is ' + window.location.href;
}
