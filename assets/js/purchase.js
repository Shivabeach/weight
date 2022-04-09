/** @format */
'use strict';
const submit = document.getElementById('submit');
const pro = document.querySelectorAll('.pro');
const accc = document.querySelectorAll('.accc');
const veg = document.querySelectorAll('.veg');
const prof = document.querySelectorAll('.prof');
const showProtein = document.querySelector('.show-protein');
const showAcc = document.querySelector('.show-acc');
const showVeg = document.querySelector('.show-veg');
const showProfile = document.querySelector('.show-profile');
const added = document.querySelectorAll('.added');
const purchsed = document.querySelector('.purchased');

$(function() {
	'use strict';
	$('#bought').on('submit', function(e) {
		e.preventDefault();
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function(index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			data[name] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				$('#shows')
					.html(response)
					.fadeOut(7000);
			},
		});
		return false;
	});
});

/**
 *  Adds up the total protein expenses
 *  @return {string} [description]
 */
function prot() {
	const protein = [];
	const weekly = pro.forEach((wee) => {
		const totalUp = wee.firstChild.nodeValue;
		protein.push(totalUp);
		const toNum = protein.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
		showProtein.innerHTML = `  ${final}`;
	});
}
/**
 *  Accessory purchases
 *  @return {string}
 */
function acces() {
	const things = [];
	const weekly = accc.forEach((wee) => {
		const totalUp = wee.firstChild.nodeValue;
		things.push(totalUp);
		const toNum = things.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
		showAcc.innerHTML = `  ${final}`;
	});
}
/**
 *  Vegtable purchases totals
 *  @return {string}
 */
function vegt() {
	const vegg = [];
	const weekly = veg.forEach((wee) => {
		const totalUp = wee.firstChild.nodeValue;
		vegg.push(totalUp);
		const toNum = vegg.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
		showVeg.innerHTML = `  ${final}`;
	});
}
/**
 *  Adds up profile purchases
 *  @return {string} [total of profile purchases]
 */
function profile() {
	const profi = [];
	const weekly = prof.forEach((wee) => {
		const totalUp = wee.firstChild.nodeValue;
		profi.push(totalUp);
		const toNum = profi.map(Number);
		const final = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
		showProfile.innerHTML = `  ${final}`;
	});
}

function finalSum() {
	const finals = [];
	const monkey = added.forEach((add) => {
		const addedUp = add.textContent;
		finals.push(addedUp);
	});
	const toNum = finals.map(Number);
	const finalss = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
	const results = finalss.toLocaleString('en-US');
	purchsed.innerHTML = ` $${results}`;
}

submit.addEventListener('click', () => {
	prot();
	acces();
	vegt();
	profile();
});

addEventListener('DOMContentLoaded', () => {
	prot();
	acces();
	vegt();
	profile();
	finalSum();
});
