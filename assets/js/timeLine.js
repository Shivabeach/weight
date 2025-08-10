/** @format */
import { timing } from './timeEvents.js';
const timeLine = document.querySelector('#time-main');

function display(time) {
	return `
		<div class="times">${time.date} <br> ${time.event}</div>
	`;
}

timeLine.innerHTML = `
	${timing.map(display).join('')}`;

document.addEventListener('DOMContentLoaded', () => {
	display();
});
