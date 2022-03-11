/** @format */
const date = document.getElementById('date');
const purchase = document.getElementById('purchase');
const cost = document.getElementById('cost');
// profile side
const quantity = document.querySelector('.quantity');
const costOrigin = document.querySelector('.cost-origin');
const total = document.querySelectorAll('.totals');
const overAll = document.querySelector('.over-all');
//Current side
const currentItems = document.querySelector('current-items');

function getStorage() {
	practice = JSON.parse(localStorage.getItem('page'));
	return practice;
}

function store(value) {
	const pusher = localStorage.setItem('page', JSON.stringify(value));
}
//works, totals the profile food costs
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

// addEventListener('DOMContentLoaded', () => {
// 	add();
// });
