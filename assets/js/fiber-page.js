/** @format */
// @prepros-prepend fiberous.js
function display(veg) {
	return `
		<tr>
		<td>${veg.name}</td>
		<td>${veg.Size}</td>
		<td>${veg.Calories}</td>
		<td class="carby">${veg.Carbs}</td>
		<td class="fibery">${veg.SoluableFiber}</td>
		<td class="sugary">${veg.Sugars}</td>
	`;
}

document.querySelector('.showFiber').innerHTML = `
	${fibers.map(display).join('')}`;
