!function(){"use strict";var e=[,function(e,t,n){n.r(t),n.d(t,{addClass:function(){return d},addToArray:function(){return u},addUp:function(){return o},createElement:function(){return s},days:function(){return g},listen:function(){return a},log:function(){return c},months:function(){return y},properCase:function(){return r},returnDate:function(){return p},sanitizeInput:function(){return m},select:function(){return l},tables:function(){return i}});const r=e=>`${e[0].toUpperCase()}${e.slice(1).toLowerCase()}`,o=e=>{e.reduce(((e,t)=>t+e),0)},u=(e,t)=>(e.push(t),e),c=e=>{console.log(e)},i=e=>{console.table(e)},l=(e,t)=>(t||document).querySelector(e),a=function(e,t,n){let r=arguments.length>3&&void 0!==arguments[3]&&arguments[3];e.addEventListener(t,n,!!r)},s=(e,t)=>{const n=document.createElement(e);return t&&n.classList.add(t),n},d=(e,t,n)=>{(n||document).querySelector(e).classList.add(t)},m=e=>{const t=document.createElement("div");return t.textContent=e,t.innerHTML};let y=["January","February","March","April","May","June","July","August","September","October","November","December"];const p=e=>{let t=new Date;return`${t.getDate()}/${t.getMonth()+1}/${t.getFullYear()}`},g=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]}],t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var u=t[r]={exports:{}};return e[r](u,u.exports,n),u.exports}n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var r={};!function(){n.r(r);n(1);const e=document.querySelector(".item-1"),t=document.querySelector(".item-2"),o=document.querySelector(".item-3"),u=document.querySelector(".item-4"),c=document.querySelector(".item-5"),i=document.querySelector(".item-6"),l=document.querySelector(".item-7"),a=document.querySelector(".item-8"),s=document.querySelector(".item-9"),d=document.querySelector(".item-10"),m=document.querySelector(".item-12");let y=document.getElementById("datey");const p=document.querySelector(".copy"),g=document.getElementById("header"),h=document.getElementById("cal-header"),f=document.querySelector(".color"),S="Home".link("http://weight/");e.innerHTML=S;const T="Calculator".link("http://weight/pages/prime2");t.innerHTML=T;const M="Plan".link("http://weight/pages/plan");o.innerHTML=M;const L="Cost".link("http://weight/pages/costs");u.innerHTML=L;const b="Purchases".link("http://weight/pages/purch");c.innerHTML=b;const w="Fiber".link("http://weight/pages/fiber");i.innerHTML=w;const k="Calendar".link("http://weight/mycal");l.innerHTML=k;const q="Fruit".link("http://weight/pages/fruit");a.innerHTML=q;const v="Vinegar".link("http://weight/pages/vin");s.innerHTML=v;const H="TimeLine".link("http://weight/pages/time");d.innerHTML=H;const C="Sources".link("http://weight/pages/source");m.innerHTML=C;const x=new Date,D=new Intl.DateTimeFormat("en-us",{dateStyle:"full"});y.innerText=D.format(x);let E=new Date;p.innerText=`©2019 - ${E.getFullYear()}`;for(let e=0;e<document.links.length;e++)document.links[e].href===document.URL&&(document.links[e].className="current");addEventListener("DOMContentLoaded",(()=>{let e=`hsl(${Math.floor(360*Math.random())}deg, 100%, 90%)`;(g||h)&&(g&&(g.style.backgroundColor=e),h&&(h.style.backgroundColor=e)),f&&(f.innerText=e)}));const F=document.querySelector(".locate");null!=F&&(F.innerHTML="Page location is "+location.href)}()}();
//# sourceMappingURL=script-dist.js.map