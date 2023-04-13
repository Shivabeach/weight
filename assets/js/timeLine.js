/** @format */
import { timing } from './timeEvents.js';
const timeLine = document.querySelector('#time-main');

function display(time) {
	return `
		<div class="red">${time.date} <br> ${time.event}</div>
	`;
}

timeLine.innerHTML = `
	${timing.map(display).join('')}`;
