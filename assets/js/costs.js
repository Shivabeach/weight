/** @format */
'use strict';
// profile side
const quantity = document.querySelector('.quantity');
const costOrigin = document.querySelector('.cost-origin');
const total = document.querySelectorAll('.totals');
const overAll = document.querySelector('.over-all');
//Current side
const currentItems = document.querySelector('.current-items');
const submit = document.getElementById('submit');
const date = document.getElementById('date');
const purchase = document.getElementById('purchase');
const cost = document.getElementById('cost');

let costrun = [];

let storedData = localStorage.getItem('foods');
if (storedData !== null) {
	costrun = JSON.parse(storedData);
}

/**
 *  totals the profile food costs
 *  @return {[number]} [adds up totals in dollars]
 */
function totals() {
	const week = [];
	const weekly = total.forEach((wee) => {
		const totalUp = wee.firstChild.nodeValue;
		week.push(totalUp);
		const toNum = week.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0);
		overAll.innerHTML = `$${final}`;
	});
}
totals();

/**
 *  Adds up purchases as they ar eentered in the form
 *  @return {[number]} reduces the array of purchase totals
 */
function purchaseCount() {
	const added = document.querySelectorAll('.added');
	const fooder = [];
	added.forEach((foodie) => {
		const totalUp = foodie.firstChild.nodeValue;
		fooder.push(totalUp);
		const toNum = fooder.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
		document.querySelector('.buying').innerText = `$${final}`;
	});
}
//Displays the purchases
function display() {
	const bought = JSON.parse(localStorage.getItem('foods'));
	bought.forEach((buy) => {
		const tr = document.createElement('tr');
		tr.innerHTML = `
			<td>${buy.date}</td>
			<td>${buy.purchase}</td>
			<td class="added">${buy.cost}</td>
		`;
		currentItems.append(tr);
	});
}
/**
 *  adds items from for into an array and localstorage
 *  @param  {date} 		date     [description]
 *  @param  {string} 	purchase [description]
 *  @param  {number} 	cost     [description]
 *  @return {array}   	       [description]
 */
function pusher(date, purchase, cost) {
	let bought = { date: date, purchase: purchase, cost: cost };
	costrun.push(bought);
	localStorage.setItem('foods', JSON.stringify(costrun));
	display();
	purchaseCount();
}

submit.addEventListener('click', (e) => {
	e.preventDefault();
	let date = document.getElementById('date').value;
	let purchase = document.getElementById('purchase').value;
	let cost = document.getElementById('cost').value;
	pusher(date, purchase, cost);
});

addEventListener('DOMContentLoaded', () => {
	display();
	purchaseCount();
});

// 1 submit form
// 2 Send to localstorage
// 3 display the result
// 4 add up cost
