/** @format */
'use strict';
let display = document.getElementById('display');
let respond = document.getElementById('response');
let dater = document.getElementById('dater');
let sub = document.getElementById('submit');
let submit1 = document.getElementById('submit1');
let wrong = document.getElementById('wrong');
let rcontent = document.getElementById('rcontent');
let mess = document.getElementById('mess');
const head = document.getElementById('head');
head.style.boxShadow = '4px 4px 6px hsl(261, 88%, 57%)';
head.style.padding = '0px 20px';
head.style.borderRadius = '20px';

let num = parseInt(Math.random() * 150 + 1);
console.log(num);

function prints(left) {
  let printContents = document.getElementById('left').innerHTML;
  let originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}

if (sub !== null) {
  sub.addEventListener('click', (e) => {
    e.preventDefault();
    respond.innerHTML = 'RIGHT';
    rcontent.innerHTML = '';
  });
}
if (submit1 !== null) {
  sub.addEventListener('click', (e) => {
    e.preventDefault();
    respond.innerHTML = 'WRONG';
    wrong.innerHTML = '';
  });
}

if (dater !== null) {
  var d = new Date();
  //var n = d.toDateString();
  dater.innerHTML = d.toDateString();
}
if (mess !== null) {
  let randomNumber = Math.floor(Math.random() * 10) + 1;
  let message;
  message =
    randomNumber % 2 === 0
      ? (message = `The number ${randomNumber} is even`)
      : (message = `The number ${randomNumber} is odd`);
  mess.innerHTML = message;
}

//!example of using a map to change a color

// const mediaQuery = window.matchMedia( '( min-width: 768px )' )
// let backer = document.querySelector('.container--main')
// let myMap = new Map([['prime', '#363636'], ['secondary', '#4c6ef5'],
//    ['text', '#ffc078']]);
//  myMap.set('brown', '#4B3621');
//
let mapper = new Map();
mapper.set('prime', '#F0DAF5');
mapper.set('text', '#A9C7EF');
//console.log(mapper.get('prime'));

//  console.log(myMap.get('prime'));

// // Note the `matches` property
// if ( mediaQuery.matches ) {
//   backer.style.background = myMap.get("text");
//   }
//https://code.tutsplus.com/courses/javascript-fundamentals/lessons/maps
