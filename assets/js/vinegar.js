/** @format */

import { vinegarList } from './vinegarList.js';
function display(veg) {
	return `
		<tr>
		<td>${veg.ID}</td>
		<td>${veg.contents}</td>
		<td>${veg.started}</td>
		<td> ${veg.finished} </td>
		<td>${veg.ph}</td>
		<td>${veg.comments}</td>
	`;
}

document.querySelector('.showVinegar').innerHTML = `
	${vinegarList.map(display).join('')}`;
