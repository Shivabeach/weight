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

const carby = document.querySelectorAll('.carby');

const fiberAverage = document.querySelector('.fiber-average');
const carbAverage = document.querySelector('.carb-average');
const sugarAverage = document.querySelector('.sugar-average');

function averageSugar() {
	const sugary = document.querySelectorAll('.sugary');
	const addSugarArray = [];
	sugary.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addSugarArray.push(sweets);
	});
	const toNum = addSugarArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	sugarAverage.innerHTML = `${teeth} grams`;
}

function averageFiber() {
	const fibery = document.querySelectorAll('.fibery');
	const addFibArray = [];
	fibery.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addFibArray.push(sweets);
	});
	const toNum = addFibArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	fiberAverage.innerHTML = `${teeth} grams`;
}

function averageCarbs() {
	const carby = document.querySelectorAll('.carby');
	const addFibArray = [];
	carby.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addFibArray.push(sweets);
	});
	const toNum = addFibArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	carbAverage.innerHTML = `${teeth} grams`;
}

addEventListener('DOMContentLoaded', () => {
	averageSugar();
	averageFiber();
	averageCarbs();
});
