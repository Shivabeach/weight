!function(){const e=document.querySelector("#proteinCount"),n=document.querySelector("#calorieCount"),t=document.querySelector("#carbCount"),c=document.querySelector("#fiberCount"),o=document.querySelector(".addition"),r=(document.querySelectorAll(".name"),document.querySelectorAll(".calories")),u=document.querySelectorAll(".carbs"),a=document.querySelectorAll(".protein"),s=document.querySelectorAll(".fiber"),l=document.querySelector("#goals-container"),i=(document.querySelector(".calories"),document.querySelector(".submit"));o.addEventListener("click",(()=>{!function(){let e=document.createElement("div");e.classList.add("box-name"),e.innerHTML='<span>Name: </span><input type="text" class="name">',l.appendChild(e)}(),function(){let e=document.createElement("div");e.classList.add("box-calories"),e.innerHTML='<span>Calories: </span><input type="number" class="calories" >',l.appendChild(e)}(),function(){let e=document.createElement("div");e.classList.add("box-carbs"),e.innerHTML='<span>Carbs: </span><input type="number" class="carbs" >',l.appendChild(e)}(),function(){let e=document.createElement("div");e.classList.add("box-protein"),e.innerHTML='<span>Protein: </span><input type="number" class="protein" >',l.appendChild(e)}(),function(){let e=document.createElement("div");e.classList.add("box-fiber"),e.innerHTML='<span>Fiberourus: </span><input type="number" class="fiber" >',l.appendChild(e)}()})),i.addEventListener("click",(o=>{o.preventDefault(),function(){const e=[];r.forEach((n=>{const t=n.value;e.push(t)}));const t=e.map(Number).reduce(((e,n)=>e+n),null);n.innerText=`${t}`}(),function(){const e=[];u.forEach((n=>{const t=n.value;e.push(t)}));const n=e.map(Number).reduce(((e,n)=>e+n),0);t.innerText=`${n}`}(),function(){const n=[];a.forEach((e=>{const t=e.value;n.push(t)}));const t=n.map(Number).reduce(((e,n)=>e+n),0);e.innerText=`${t}`}(),function(){const e=[];s.forEach((n=>{const t=n.value;e.push(t)}));const n=e.map(Number).reduce(((e,n)=>e+n),0);c.innerText=`${n}`}()}))}();
//# sourceMappingURL=plan-dist.js.map