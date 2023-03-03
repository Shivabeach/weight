/** @format */
const proteinCount = document.querySelector('#proteinCount');
const calorieCount = document.querySelector('#calorieCount');
const carbCount = document.querySelector('#carbCount');
const fiberCount = document.querySelector('#fiberCount');
const addition = document.querySelector('.addition');
const name = document.querySelectorAll('.name');
const calories = document.querySelectorAll('.calories');
const carbs = document.querySelectorAll('.carbs');
const protein = document.querySelectorAll('.protein');
const fiber = document.querySelectorAll('.fiber');
const goalsContainer = document.querySelector('#goals-container');
const calorie = document.querySelector('.calories');
const submit = document.querySelector('.submit');

// ==========================================================================
//  adding new rows for additional foods
// ==========================================================================

function addBoxName() {
	let boxName = document.createElement('div');
	boxName.classList.add('box-name');
	boxName.innerHTML = '<span>Name: </span><input type="text" class="name">';
	goalsContainer.appendChild(boxName);
}
function addBoxCalories() {
	let boxCal = document.createElement('div');
	boxCal.classList.add('box-calories');
	boxCal.innerHTML =
		'<span>Calories: </span><input type="number" class="calories" >';
	goalsContainer.appendChild(boxCal);
}

function addBoxCarbs() {
	let boxCarb = document.createElement('div');
	boxCarb.classList.add('box-carbs');
	boxCarb.innerHTML =
		'<span>Carbs: </span><input type="number" class="carbs" >';
	goalsContainer.appendChild(boxCarb);
}

function addBoxProtein() {
	let boxProtein = document.createElement('div');
	boxProtein.classList.add('box-protein');
	boxProtein.innerHTML =
		'<span>Protein: </span><input type="number" class="protein" >';
	goalsContainer.appendChild(boxProtein);
}
function addBoxFiber() {
	let boxFiber = document.createElement('div');
	boxFiber.classList.add('box-fiber');
	boxFiber.innerHTML =
		'<span>Fiberourus: </span><input type="number" class="fiber" >';
	goalsContainer.appendChild(boxFiber);
}

// ==========================================================================
// Calculating values
// ==========================================================================
//
function allCalories() {
	const cals = [];
	calories.forEach((item) => {
		const calc = item.value;
		cals.push(calc);
	});
	const toNum = cals.map(Number);
	const ca = toNum.reduce((acc, cum) => acc + cum, null);
	calorieCount.innerText = `${ca}`;
}
function allCarbs() {
	const cals = [];
	carbs.forEach((item) => {
		const calc = item.value;
		cals.push(calc);
	});
	const toNum = cals.map(Number);
	const ca = toNum.reduce((acc, cum) => acc + cum, 0);
	carbCount.innerText = `${ca}`;
}

function allProteins() {
	const cals = [];
	protein.forEach((item) => {
		const calc = item.value;
		cals.push(calc);
	});
	const toNum = cals.map(Number);
	const ca = toNum.reduce((acc, cum) => acc + cum, 0);
	proteinCount.innerText = `${ca}`;
}

function allFiber() {
	const cals = [];
	fiber.forEach((item) => {
		const calc = item.value;
		cals.push(calc);
	});
	const toNum = cals.map(Number);
	const ca = toNum.reduce((acc, cum) => acc + cum, 0);
	fiberCount.innerText = `${ca}`;
}

addition.addEventListener('click', () => {
	addBoxName();
	addBoxCalories();
	addBoxCarbs();
	addBoxProtein();
	addBoxFiber();
});

submit.addEventListener('click', (e) => {
	e.preventDefault();
	allCalories();
	allCarbs();
	allProteins();
	allFiber();
});

// function allMiles() {
// 	const miler = [];
// 	mods.milesTotal.forEach((miles) => {
// 		const milesUp = miles.textContent;
// 		miler.push(milesUp);
// 	});
// 	const toNum = miler.map(Number);
// 	const mi = toNum.reduce((acc, cum) => acc + cum, 0);
// 	mods.milesAll.textContent = `${mi}`;
// }
