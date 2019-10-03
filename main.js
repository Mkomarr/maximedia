/*--------- dropdownMenu -----------*/

const icon = document.querySelector('.dropdown-icon');
const menu = document.querySelector('.mob-menu')
const hideMenu = document.querySelectorAll('.mob-menu')

icon.addEventListener('click', () => {
    if (menu.className === 'mob-menu') {
     menu.className = 'mob-menu visible';
     icon.textContent = "X";
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
       } else {
        contMenu.className = 'contact-form';
       }
});