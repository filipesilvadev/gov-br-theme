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