/*--------- dropdownMenu -----------*/

const icon = document.querySelector('.dropdown-icon');
const menu = document.querySelector('.mob-menu')
const hideMenu = document.querySelectorAll('.mob-menu')

icon.addEventListener('click', () => {
    if (menu.className === 'mob-menu') {
     menu.className = 'mob-menu visible';
     icon.innerHTML = `<div class="close">X</div>`;
    } else {
     menu.className = 'mob-menu';
     icon.innerHTML = `&#9776;`;
    }
});

/*------- close menu ----------*/

hideMenu.forEach(singleLi => singleLi.addEventListener('click', () => {
    menu.className = 'mob-menu';
    icon.innerHTML = `&#9776;`;
}));

/*--------- dropdown contact Menu -----------*/
const contDiv = document.getElementById('phone');
const contMenu = document.querySelector('.contact-form')

contDiv.addEventListener('click', () => {
    if (contMenu.className === 'contact-form') {
        contMenu.className = 'contact-form visible';
        contDiv.innerHTML = `<div class="x-icon">X</div>`;
       } else {
        contMenu.className = 'contact-form';
        contDiv.innerHTML = `<i class="icon-phone"></i>`;
       }
});

/*------------hide menu when scroll---------*/
const topNav = document.querySelector('header');

let prevScrollpos = window.pageYOffset;
window.onscroll = () => {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    topNav.style.top = "0";
  } else {
    topNav.style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

