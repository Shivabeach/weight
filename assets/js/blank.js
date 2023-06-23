/** @format */
//const fetch = require('node-fetch');
// Modal
butt.addEventListener('click', () => {
	dialog.showModal();
});
close.addEventListener('click', () => {
	dialog.close();
});

//random javascript functions
const generateNumber = (size, max) => {
	const rands = new Set();
	if (size > max) {
		throw new Error('Size must be <= max');
	}
	while (rands.size < size) {
		const r = Math.ceil(Math.random() * max);
		rands.add(r);
	}
	return [...rands];
};
//console.log(generateNumber(5, 16));

const randomNum = (count, max) => {
	const rands = [];
	while (rands.length < count) {
		const r = Math.ceil(Math.random() * max);
		if (rands.indexOf(r) === -1) {
			rands.push(r);
		}
	}
	return rands;
};
//console.log(randomNum(4, 16));
// console.log(randomNum(5, 19).join(''));
//join("") joins the array into one number

const colors = '#' + Math.floor(Math.random() * 16777215).toString(16);
//console.log(colors);

// returns 0 or 1
const rnnd = Math.floor(Math.random() * 2);
//console.log(rnnd);

const name = 5;
let names = name > 2 ? 'Yes it is' : 'No its not';
//console.log(names);

// const randomHex = () =>
// 	`#${Math.floor(Math.random() * 0xffffff)
// 		.toString(16)
// 		.padEnd(6, '0')}`;
// console.log(randomHex());
// Result: #92b008

// const validate = (email) => {
// 	const expression = /([-!#-'*+/-9=?A-Z^-~]+(\.[-!#-'*+/-9=?A-Z^-~]+)*|"([]!#-[^-~ \t]|(\\[\t -~]))+")@([-!#-'*+/-9=?A-Z^-~]+(\.[-!#-'*+/-9=?A-Z^-~]+)*|\[[\t -Z^-~]*])/i;

// 	return expression.test(String(email).toLowerCase());
// };
// console.log(validate('mrwilson1@comcast.net'));

// mobiles.forEach(mobile => {
//   for (let key in mobile) {
//     console.log(`${key}: ${mobile[key]}`)
//   }
// })
// ==========================================================================
//  Set values where jimmy and slave is, change keys to form data
// ==========================================================================
fetch('application/controllers/Form/entry', {
	method: 'POST',
	headers: {
		'Content-Type': 'application/json',
	},
	body: JSON.stringify({
		name: 'jummy',
		job: 'slave',
	}),
})
	.then((res) => {
		if (res.ok ? 'post good' : 'post bad');
		return res;
	})
	.then((res) => res.json())
	.then((data) => console.log(data))
	.catch((error) => console.log(error));

//
// Read a json file with fetch. Use countries.json file
//
fetch('http://weight/assets/js/countries.json')
	.then((response) => response.json())
	.then((data) => showInfo);

function showInfo() {
	console.table(data.countries);
}
