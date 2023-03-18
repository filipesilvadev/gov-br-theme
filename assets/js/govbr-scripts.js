let gMenu = document.querySelector('.general-menu-wrapper');
let gMenuTrigger = document.querySelector('#menu-trigger');

gMenuTrigger.addEventListener('click', ()=>{
  gMenu.classList.toggle('active');
});


let sMenuTrigger = document.querySelectorAll('.sm-buttons-wrapper .see-more');

for (let i = 0; i < sMenuTrigger.length; i++) {

  const sMenuTriggerCurrent = sMenuTrigger[i];
  let sMenu = document.querySelector('.shortcuts-wrapper');

  sMenuTriggerCurrent.addEventListener('click', ()=>{
    sMenu.classList.toggle('active');
  });  

}

let topMenu = document.querySelector('.menu-menu-container');
const topTrigger = document.querySelector('.main-menu .trigger');

topTrigger.addEventListener('click', ()=>{
  topMenu.classList.toggle('active');
});


let searchContainer = document.querySelector('.col2-search');
let sTrigger = document.querySelector('.sTrigger');
let siteDescription = document.querySelector('a.description');

// gMenuTrigger

sTrigger.addEventListener('click', ()=>{
  searchContainer.classList.toggle('active');
  if(searchContainer.classList.contains('active')){
    siteDescription.style.opacity = '0';
  }else{
    siteDescription.style.opacity = '1';
  }
});


