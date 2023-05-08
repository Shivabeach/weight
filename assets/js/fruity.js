/** @format */
import { fruit } from './fruit.js';
const showFruit = document.querySelector('.showFruit');
const potAverage = document.querySelector('.pot-average');
const calAverage = document.querySelector('.cal-average');
const sugarAverage = document.querySelector('.sugar-average');
const file = document.querySelector('.lengthOfFile');

const vitc = document.querySelectorAll('.vitc');
const calc = document.querySelector('.calc');
const vitamins = document.querySelector('.vitamins');
const potass = document.querySelector('.potass');
const sugars = document.querySelector('.sugars10');
const vita = [];

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

//average sugars
function averageSugar() {
	const sugars = document.querySelectorAll('.sugar');
	const addSugarArray = [];
	sugars.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addSugarArray.push(sweets);
	});
	const toNum = addSugarArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	sugarAverage.innerHTML = `${teeth} grams`;
	file.innerHTML = addSugarArray.length;
}
//average Potassium
function averagePotassium() {
	const potas = document.querySelectorAll('.potas');
	const addPotArray = [];
	potas.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addPotArray.push(sweets);
	});
	const toNum = addPotArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	potAverage.innerHTML = `${teeth} grams`;
}
//average calories
function calories() {
	const calory = document.querySelectorAll('.calorie');
	const addCalArray = [];
	calory.forEach((sweet) => {
		const sweets = sweet.firstChild.nodeValue;
		addCalArray.push(sweets);
	});
	const toNum = addCalArray.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	const teeth = (totals / toNum.length).toFixed(2);
	calAverage.innerHTML = `${teeth} Calories`;
}

function showVits(cs) {
	if (cs.vitC > 100) {
		return `
		<li>${cs.name} - ${cs.vitC}</li>
	`;
	}
}
function showPot(cs) {
	if (cs.potassium > 250) {
		return `
		<li>${cs.name} - ${cs.potassium}</li>
	`;
	}
}
function sugar10(cs) {
	if (cs.sugars > 13) {
		return `
		<li>${cs.name} - ${cs.sugars}</li>
	`;
	}
}

// function showLength(all) {
// 	return `${all.length}`;
// }

//Display the table using function display
showFruit.innerHTML = `
	${fruit.map(display).join('')}`;

vitamins.innerHTML = `
	${fruit.map(showVits).join('')}`;

potass.innerHTML = `
	${fruit.map(showPot).join('')}`;

sugars.innerHTML = `
	${fruit.map(sugar10).join('')}`;

// file.innerHTML = `
// 	${fruit.map(showLength).join('')}`;

addEventListener('DOMContentLoaded', () => {
	averageSugar();
	averagePotassium();
	calories();
});
