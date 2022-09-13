/** @format */
//const fetch = require('node-fetch');

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
