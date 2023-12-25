const hamburguer = document.querySelector('.hamburguer'); //seleccionamos una clase del index
const menu = document.querySelector('.menu-navegacion');

//console.log(menu);
//console.log(hamburguer); // compruebo que si esten declaradas las constantes

hamburguer.addEventListener('click', ()=>{
    menu.classList.toggle("spread");// le decimos que al hacer click 
});                                 // elimine esta clase asi nos aparece el menu


window.addEventListener('click', e => {
    if (menu.classList.contains('spread')
    
    && e.target !=menu  &&  e.target != hamburguer) {
        menu.classList.toggle("spread")
    } // si damos click por fuera de estos elemento la clase desaparce
  });