const menu_icon = document.querySelector('header .menu-icon');
const mobile_menu_icon = document.querySelector('header ul');
const header = document.querySelector('header')
const submenu = document.querySelector('.submenu')

/*habilitar y deabilitar las barritas del menu (arriba y abajo)*/
menu_icon.addEventListener('click',() =>{
    menu_icon.classList.toggle('active');
    mobile_menu_icon.classList.toggle('active');
});

/*scrolling menu*/
document.addEventListener('scroll',()=>{
    var scroll_position = window.scrollY;
    if (scroll_position > 300){
        header.style.backgroundColor = '#29323c';
        submenu.style.backgroundColor = '#29323c';
    } 
    else{
        header.style.backgroundColor = 'transparent';
        submenu.style.backgroundColor = 'transparent';
    }
});