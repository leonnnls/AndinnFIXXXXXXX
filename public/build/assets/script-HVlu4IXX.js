const p=document.querySelector("[data-preaload]");window.addEventListener("load",function(){p.classList.add("loaded"),document.body.classList.add("loaded")});const i=function(n,t,s){for(let r=0,h=n.length;r<h;r++)n[r].addEventListener(t,s)},b=document.querySelector("[data-navbar]"),q=document.querySelectorAll("[data-nav-toggler]"),x=document.querySelector("[data-overlay]"),E=function(){b.classList.toggle("active"),x.classList.toggle("active"),document.body.classList.toggle("nav-active")};i(q,"click",E);const d=document.querySelector("[data-header]"),m=document.querySelector("[data-back-top-btn]");let S=0;const I=function(){S<window.scrollY?d.classList.add("hide"):d.classList.remove("hide"),S=window.scrollY};window.addEventListener("scroll",function(){window.scrollY>=50?(d.classList.add("active"),m.classList.add("active"),I()):(d.classList.remove("active"),m.classList.remove("active"))});document.querySelector("[data-hero-slider]");const l=document.querySelectorAll("[data-hero-slider-item]"),u=document.querySelector("[data-prev-btn]"),v=document.querySelector("[data-next-btn]");let e=0,L=l[0];const f=function(){L.classList.remove("active"),l[e].classList.add("active"),L=l[e]},w=function(){e>=l.length-1?e=0:e++,f()};v.addEventListener("click",w);const k=function(){e<=0?e=l.length-1:e--,f()};u.addEventListener("click",k);let g;const y=function(){g=setInterval(function(){w()},7e3)};i([v,u],"mouseover",function(){clearInterval(g)});i([v,u],"mouseout",y);window.addEventListener("load",y);const c=document.querySelectorAll("[data-parallax-item]");let o,a;window.addEventListener("mousemove",function(n){o=n.clientX/window.innerWidth*10-5,a=n.clientY/window.innerHeight*10-5,o=o-o*2,a=a-a*2;for(let t=0,s=c.length;t<s;t++)o=o*Number(c[t].dataset.parallaxSpeed),a=a*Number(c[t].dataset.parallaxSpeed),c[t].style.transform=`translate3d(${o}px, ${a}px, 0px)`});