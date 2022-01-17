/** @format */
'use strict';
import { foods } from './foods.js';
const grocery = document.getElementById('grocery');
const display = document.querySelector('.display');
const cumulate = document.querySelector('.cumulate');
const test = document.getElementById('test');
const vegDisplay = document.querySelector('.vegDisplay');
const showCals = document.querySelector('.showCals');
const showFat = document.querySelector('.showFat');
const showCarbs = document.querySelector('.showCarbs');
const showProtein = document.querySelector('.showProtein');
const showPotass = document.querySelector('.showPotass');
const calc = document.querySelector('.calc');
const nutDisplay = document.querySelector('.nutDisplay');
const calo = document.querySelector('.calories');
const testing = document.querySelector('.testing');
const oilDisplay = document.querySelector('.oilDisplay');

//console.log(test.firstChild.nodeValue);

function showMeat(value) {
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

function showOil(value) {
	let oil = '';
	let oils;
	const allOil = foods.filter((foo) => foo.name === value);
	for (oils of allOil) {
		oil = `
	<tr>
	<td>${oils.name}</td>
	<td class="calories">${oils.Calories}</td>
	<td class="fat">${oils.fat}</td>
	<td class="carb">${oils.Carbs}</td>
	<td class="protein">${oils.Protein}</td>
	<td class="potash">${oils.Potassium}</td>
	</tr>
	`;
	}
	oilDisplay.innerHTML = oil;
}

function caloryCount() {
	//console.log('clicked');
	const calories = document.querySelectorAll('.calories');
	const cal = [];
	calories.forEach((stuff) => {
		const cals = stuff.firstChild.nodeValue;
		cal.push(cals);
	});
	const toNum = cal.map(Number);
	const calsIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showCals.innerHTML = calsIn;
}
function fatCount() {
	const fat = document.querySelectorAll('.fat');
	const fat1 = [];
	fat.forEach((stuff) => {
		const fats = stuff.firstChild.nodeValue;
		fat1.push(fats);
	});
	const toNum = fat1.map(Number);
	const fatIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showFat.innerHTML = fatIn;
}

function carbCount() {
	const carb = document.querySelectorAll('.carb');
	const carb1 = [];
	carb.forEach((stuff) => {
		const carbs = stuff.firstChild.nodeValue;
		carb1.push(carbs);
	});
	const toNum = carb1.map(Number);
	const carbIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showCarbs.innerHTML = carbIn;
}

function proteinCount() {
	const protein = document.querySelectorAll('.protein');
	const pro = [];
	protein.forEach((stuff) => {
		const prot = stuff.firstChild.nodeValue;
		pro.push(prot);
	});
	const toNum = pro.map(Number);
	const proIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showProtein.innerHTML = proIn;
}

function potasCount() {
	const potash = document.querySelectorAll('.potash');
	const pot1 = [];
	potash.forEach((stuff) => {
		const pot = stuff.firstChild.nodeValue;
		pot1.push(pot);
	});
	const toNum = pot1.map(Number);
	const potIn = toNum.reduce((acc, cum) => acc + cum, 0);
	showPotass.innerHTML = potIn;
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
	showOil(oil);
	caloryCount();
	fatCount();
	carbCount();
	proteinCount();
	potasCount();
});

calc.addEventListener('click', (e) => {
	e.preventDefault();
});
