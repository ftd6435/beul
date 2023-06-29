import './bootstrap';

import 'bootstrap/dist/js/bootstrap.bundle'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


let arrows = document.querySelectorAll('.arrow');
      
arrows.forEach(arrow => {
arrow.addEventListener('click', (e)=>{
    let arrowParent = e.target.parentElement.parentElement;

    arrowParent.classList.toggle('showMenu');
})
});

let sidebar = document.querySelector('.sidebar');
let sidebarBtn = document.querySelector('.bx-menu-alt-left');
let homeSection = document.querySelector('.home-section');

sidebarBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle('close-pk');
    homeSection.classList.toggle('close-pk');
});


function queryFunction(query) {
    if (query.matches) { // If media query matches
        sidebar.classList.add('close-pk');
        homeSection.classList.add('close-pk');
    }else{
        sidebar.classList.remove('close-pk');
        homeSection.classList.remove('close-pk');
    }
}
  
  var query = window.matchMedia("(max-width: 1200px)");
  queryFunction(query); // Call listener function at run time
  query.addListener(queryFunction); // Attach listener function on state changes

