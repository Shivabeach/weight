!function(){"use strict";var t=[,function(t,e,r){r.r(e),r.d(e,{vinegarList:function(){return s}});const s=[{ID:1,contents:'<p class="redd">✿ Raisins *</p>',started:"3/6/2023",finished:"5/21/2023",ph:"3.53",comments:"Bottled 5/21/2023. Decent taste, not very sharp"},{ID:3,contents:'<p class="redd">❤ Strawberries, Blackberries, Raspberries *</p>',started:"3/18/2023",finished:"5/21/2023",ph:"3.18",comments:"Bottled 5/12. Good vinegar taste in back throat"},{ID:9,contents:'<p class="redd">✿ Blackberry, Strawberry, Apple * </p>',started:"5/1/2023",finished:"5/22/2023",ph:"3.50",comments:"Blackberry,Apple, Strawberry, Mint, Anise 3/4 cup of sugar<br>Strained tested 5/22"},{ID:10,contents:'<p class="redd">❤ Strawberry, Apple *</p>',started:"5/2/2023",finished:"3/21/2023",ph:"3.31",comments:"Apple, Strawberry, thyme 1/3 cup of sugar<br>Bottled 5/21. Decent vinegar taste"},{ID:11,contents:'<p class="redd">✿ Raisin, apple * </p>',started:"5/4/2023",finished:"5/22/2023",ph:"3.53",comments:"Apple, Raisin 1/4 cup of sugar<br> Decent taste, strained tested 5/22<br> Sealed up 6/26, started Kahlm yeast"},{ID:12,contents:'<p class="redd">❤ Pineapple, herbs *</p',started:"5/9/2023",finished:"6/9/2023",ph:"3.31",comments:"Pineapple, mint, anise, thyme, 1/4 cup of sugar<br>Strained out 5/25<br>Last test 5/30, Kalm yeast"},{ID:14,contents:'<p class="redd">✿ Pineapple * </p>',started:"5/23/2023",finished:"6/20/2023",ph:"3.74",comments:"Large Jar, Pineapple, Distilled Water, 5/8 cup of sugar<br>Slight bubbling on 5/25, <br>Added 1/2 tbsp sugar daily up to 5/30. Stopped bubbling 6/1<br>Bottled"},{ID:15,contents:' <p class="redd">❤ Strawberry * </p>',started:"5/30/2023",finished:"7/4/2023",ph:"3.26",comments:"Strawberry, Distilled Water, 1/3 cup of sugar<br> Started bubbling 6/1<br>Still bubbling 6/16<br>Strained & added more strawberries for 2nd ferment 6/18. <br>Bottled 7/4"},{ID:16,contents:"Raisins",started:"6/16/2023",finished:"7/5/2023",ph:"3.73",comments:"Raisin, 1/2 tbsp of sugar<br> 2 banana peel, 1 cherry<bt>Strained 6/26, <br> Tastes good but tested 7/5 3.73"},{ID:17,contents:'<p class="redd">❤Strawberry * </p>',started:"6/27/2023",finished:"7/11/2023",ph:"2.89",comments:"Large Jar, LOTS of strawberries, 1/2 cup of raw sugar<br>Bubbling starts 6/29<br>Strained/bottled 7/11, Weak taste"},{ID:18,contents:"Strawberry, Apple, Plum, Peach",started:"7/6/2023",finished:"",ph:"3.27",comments:"Large Jar, Purified water <br> strawberries, 1 plum, 1 apple, 1 peach, 1/2 cup of raw sugar<br>Bubbling starts 7/8<br>Strained 7/16, great vinegar smell"},{ID:19,contents:"Cantaulope",started:"7/8/2023",finished:"",ph:"3.50",comments:"Large Jar, Purified water <br> Cantaulope 1/4 cup sugar<br>Bubbling starts 7/10, tastes like vinegar"},{ID:20,contents:"Mango",started:"7/14/2023",finished:"",ph:"3.50",comments:"Purified water <br> 1 Mango 1/4 cup sugar<br>Bubbling starts"}]}],e={};function r(s){var n=e[s];if(void 0!==n)return n.exports;var a=e[s]={exports:{}};return t[s](a,a.exports,r),a.exports}r.d=function(t,e){for(var s in e)r.o(e,s)&&!r.o(t,s)&&Object.defineProperty(t,s,{enumerable:!0,get:e[s]})},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var s={};!function(){r.r(s);var t=r(1);document.querySelector(".showVinegar").innerHTML=`\n\t${t.vinegarList.map((function(t){return`\n\t\t<tr>\n\t\t<td class="id">${t.ID}</td>\n\t\t<td class="contents">${t.contents}</td>\n\t\t<td class="start">${t.started}</td>\n\t\t<td class="end"> ${t.finished} <span class="days"> </span></td>\n\t\t<td class="ph">${t.ph}</td>\n\t\t<td class="comments">${t.comments}</td>\n\t`})).join("")}`;const e=document.querySelectorAll(".id"),n=document.querySelector(".projects"),a=document.querySelector(".ave");addEventListener("DOMContentLoaded",(()=>{!function(){const t=[];e.forEach((e=>{const r=e.textContent;t.push(r)}));const r=t.map(Number);n.innerHTML=`<span class="weights-8">${r.length}  Projects</span>`}(),function(){const t=document.querySelectorAll(".ph"),e=[];t.forEach((t=>{const r=t.firstChild.nodeValue;e.push(r)}));const r=e.map(Number),s=(r.reduce(((t,e)=>t+e),0)/r.length).toFixed(2);a.innerHTML=`<span class="weights-8">${s} average Ph</span>`}()}))}()}();
//# sourceMappingURL=vinegar-dist.js.map