var b=!1; window.addEventListener("load",function(){function c(a){if(""!=a.value&&void 0!==a.value&&" "!==a.value)return a.style.border="1px solid green",!0;a.style.border="1px solid red";return b}function d(a){c(a.target)}for(var j=document.getElementById("subscribe_form").getElementsByTagName("button")[0],n=document.getElementById("pseudo"),p=document.getElementById("nom"),q=document.getElementById("email"),e=document.getElementById("addpass"),k=document.getElementById("addpass2"),l=document.getElementById("verif"),g= document.getElementsByTagName("input"),m,h=document.createElement("p"),f=0;f<g.length;f++)"verifok"===g[f].getAttribute("name")&&(m=g[f].value);h.setAttribute("class","error");document.getElementById("subscribe_form").appendChild(h);j.addEventListener("click",function(a){if(l.value===m){var d=c(n),f=c(p),g=c(q),j=c(e),r=c(k),s=c(l);if(d&&f&&g&&j&&r&&s&&e.value===k.value){if(4>e.value.length||16<e.value.length)a.preventDefault(),h.innerHTML="Le mot de passe doit contenir 4 \u00e0 16 caract\u00e8res."}else a.preventDefault(), h.innerHTML="Champ(s) incomplet(s)."}else a.preventDefault(),h.innerHTML="R\u00e9sultat de v\u00e9rification incorrect."},b);n.addEventListener("blur",d,b);p.addEventListener("blur",d,b);q.addEventListener("blur",d,b);e.addEventListener("blur",d,b);k.addEventListener("blur",function(a){a.target.style.border=a.target.value===e.value?"1px solid green":"1px solid red"},b);l.addEventListener("blur",function(a){a.target.style.border=a.target.value===m?"1px solid green":"1px solid red"},b)},b);