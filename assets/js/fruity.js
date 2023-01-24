/** @format */
// @prepros-prepend fruit.js
const showFruit = document.querySelector('.showFruit');
const fiberAverage = document.querySelector('.fiber-average');
const carbaverage = document.querySelector('.carb-average');
const sugarAverage = document.querySelector('.sugar-average');
const sugar = document.querySelectorAll('.sugar');
const potas = document.querySelectorAll('.potas');
const vitc = document.querySelectorAll('.vitc');

function display(sweet) {
	return `
			<tr>
			<td>${sweet.name}</td>
			<td>${sweet.size}</td>
			<td class="calorie">${sweet.calories}</td>
			<td>${sweet.carbs}</td>
			<td class="sugar">${sweet.sugars}</td>
			<td class="potas">${sweet.potassium}</td>
			<td class="vitc">${sweet.vitC}</td>
			</tr>
		`;
}

// showFruit.innerHTML = teeth;

showFruit.innerHTML = `
	${fruit.map(display).join('')}`;

function sugar() {
	let sugarArray = [];
}
