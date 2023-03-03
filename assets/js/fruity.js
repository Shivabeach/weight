/** @format */
import { fruit } from './fruit.js';
const showFruit = document.querySelector('.showFruit');
const potAverage = document.querySelector('.pot-average');
const calAverage = document.querySelector('.cal-average');
const sugarAverage = document.querySelector('.sugar-average');

const vitc = document.querySelectorAll('.vitc');
const calc = document.querySelector('.calc');
const vitamins = document.querySelector('.vitamins');
const potass = document.querySelector('.potass');
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
		<li class="margin-10">${cs.name} - ${cs.vitC}</li>
	`;
	}
}
function showPot(cs) {
	if (cs.potassium > 100) {
		return `
		<li class="margin-10">${cs.name} - ${cs.potassium}</li>
	`;
	}
}

//Display the table using function display
showFruit.innerHTML = `
	${fruit.map(display).join('')}`;

vitamins.innerHTML = `
	${fruit.map(showVits).join('')}`;

potass.innerHTML = `
	${fruit.map(showPot).join('')}`;

addEventListener('DOMContentLoaded', () => {
	averageSugar();
	averagePotassium();
	calories();
});
