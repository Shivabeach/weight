/** @format */

import { vinegarList } from './vinegarList.js';
function display(veg) {
	return `
		<tr>
		<td class="id">${veg.ID}</td>
		<td class="contents">${veg.contents}</td>
		<td class="start">${veg.started}</td>
		<td class="end"> ${veg.finished} <span class="days"> </span></td>
		<td class="ph">${veg.ph}</td>
		<td class="comments">${veg.comments}</td>
	`;
}

document.querySelector('.showVinegar').innerHTML = `
	${vinegarList.map(display).join('')}`;

const id = document.querySelectorAll('.id');
const project = document.querySelector('.projects');

function projects() {
	const proj = [];
	id.forEach((jobs) => {
		const ids = jobs.textContent;
		proj.push(ids);
	});
	const toNum = proj.map(Number);
	project.innerHTML = `<p class="weights-8">${toNum.length}  Projects</p>`;
}

addEventListener('DOMContentLoaded', () => {
	projects();
});
// const ca = toNum.reduce((acc, cum) => acc + cum, null);
// calorieCount.innerText = `${ca}`;
