/** @format */
'use strict';
import { foods } from './foods.js';
const grocery = document.getElementById('grocery');
const display = document.querySelector('.display');
const cumulate = document.querySelector('.cumulate');
const test = document.getElementById('test');
const vegDisplay = document.querySelector('.vegDisplay');
const showCals = document.querySelector('.showCals');
const calc = document.querySelector('.calc');
const nutDisplay = document.querySelector('.nutDisplay');
const calo = document.querySelector('.calories');

const calories = document.querySelectorAll('.calories');
const fat = document.querySelectorAll('.fat');
const carb = document.querySelectorAll('.carb');
const protein = document.querySelectorAll('.protein');
const potash = document.querySelectorAll('.potash');
//console.log(test.firstChild);

function showMeat(value) {
	console.log(value);
	let meats = '';
	let meat;
	const meaty = foods.filter((food) => food.name === value);
	for (meat of meaty) {
		meats = `
	<tr>
	<td>${meat.name}</td>
	<td class="calories">${meat.Calories}</td>
	<td class="fat">${meat.fat}</td>
	<td class="carb">${meat.Carbs}</td>
	<td class="protein">${meat.Protein}</td>
	<td class="potash">${meat.Potassium}</td>
	</tr>
	`;
	}
	display.innerHTML = meats;
}

function showVegs(value) {
	let veg = '';
	let veggies;
	const vegetable = foods.filter((foo) => foo.name === value);
	for (veggies of vegetable) {
		veg = `
	<tr>
	<td>${veggies.name}</td>
	<td class="calories">${veggies.Calories}</td>
	<td class="fat">${veggies.fat}</td>
	<td class="carb">${veggies.Carbs}</td>
	<td class="protein">${veggies.Protein}</td>
	<td class="potash">${veggies.Potassium}</td>
	</tr>
	`;
	}
	vegDisplay.innerHTML = veg;
}

function showNuts(value) {
	let nut = '';
	let nuttes;
	const allNuts = foods.filter((foo) => foo.name === value);
	for (nuttes of allNuts) {
		nut = `
	<tr>
	<td>${nuttes.name}</td>
	<td class="calories">${nuttes.Calories}</td>
	<td class="fat">${nuttes.fat}</td>
	<td class="carb">${nuttes.Carbs}</td>
	<td class="protein">${nuttes.Protein}</td>
	<td class="potash">${nuttes.Potassium}</td>
	</tr>
	`;
	}
	nutDisplay.innerHTML = nut;
}
function caloryCount() {
	const cal = [];
	calories.forEach((stuff) => {
		const cals = stuff.firstChild.nodeValue;
		cal.push(cals);
	});
	const toNum = cal.map(Number);
	const calsIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showCals.innerHTML = calsIn;
}

grocery.addEventListener('submit', (e) => {
	e.preventDefault();
	const meatChoice = document.getElementById('meat-choice').value;
	const vegChoice = document.getElementById('veg-choice').value;
	const oil = document.getElementById('oil').value;
	const nuts = document.getElementById('nuts').value;
	showMeat(meatChoice);
	showVegs(vegChoice);
	showNuts(nuts);
});

calc.addEventListener('click', (e) => {
	e.preventDefault();
	caloryCount();
});
