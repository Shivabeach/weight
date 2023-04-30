/** @format */
import { sources } from './sourceList.js';
const timeLine = document.querySelector('#time-main');

function display(reading) {
	return `
		<div class="red">${reading.dateEntered} <br> ${reading.event}</div>
	`;
}

timeLine.innerHTML = `
	${sources.map(display).join('')}`;
