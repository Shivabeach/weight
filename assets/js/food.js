/** @format */
'use strict';
import { foods } from './foods.js';
const form = document.getElementById('grocery');
const sub = document.getElementById('submit');
const meatChoice = document.getElementById('meat-choice');
const vegChoice = document.getElementById('veg-choice');
const nuttyDisplay = document.querySelector('.nutty-display');
const oilDisplay = document.querySelector('.oilDisplay');
const list = document.querySelector('.list');
const display = document.querySelector('.display');
const vegDisplay = document.querySelector('.veg-display');
let meat;
let meats = '';
let potas;

//display
const names = foods.filter((foo) => foo.type == 'meat');
for (meat of names) {
	meats += `
	<tr>
	<td>${meat.name}</td>
	<td>${meat.Size}</td>
	<td>${meat.Calories}</td>
	<td>${meat.fat}</td>
	<td>${meat.Protein}</td>
	<td>${meat.Potassium}</td>
	</tr>
	`;
}
display.innerHTML = meats;

// Potassium above 600
const pot = foods.filter((foody) => foody.Potassium > 500);
let foodly = '';
for (potas of pot) {
	//console.log(potas.name);
	foodly += `
	<tr>
	<td>${potas.name}</td>
	<td>${potas.Size}</td>
	<td>${potas.Calories}</td>
	<td>${potas.Potassium}</td>
	<td>${potas.Protein}</td>
	</tr>
	`;
}
list.innerHTML = foodly;

const nut = foods.filter((foo) => foo.type == 'nuts');
let nuts;
let nutty = '';
for (nuts of nut) {
	nutty += `
	<tr>
	<td>${nuts.name}</td>
	<td>${nuts.Calories}</td>
	<td>${nuts.fat}</td>
	<td>${nuts.Protein}</td>
	<td>${nuts.Potassium}</td>
	</tr>
	`;
}
nuttyDisplay.innerHTML = nutty;

const veggy = foods.filter((foo) => foo.type == 'veggie');
let veg;
let vegtable = '';
for (veg of veggy) {
	vegtable += `
	<tr>
	<td>${veg.name}</td>
	<td>${veg.Size}</td>
	<td>${veg.Calories}</td>
	<td>${veg.Carbs}</td>
	<td>${veg.Potassium}</td>
	</tr>
	`;
}
vegDisplay.innerHTML = vegtable;

const oily = foods.filter((foo) => foo.type == 'oil');
let oil;
let oils = '';
for (oil of oily) {
	oils += `
	<tr>
	<td>${oil.name}</td>
	<td>${oil.Size}</td>
	<td>${oil.Calories}</td>
	<td>${oil.fat}</td>
	<td>${oil.Potassium}</td>
	</tr>
	`;
}
oilDisplay.innerHTML = oils;
