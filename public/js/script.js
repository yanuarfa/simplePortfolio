
window.onscroll = function () {
    const header =document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fix-blur');
    } else {
        header.classList.remove('navbar-fix-blur');
    }
};


const hamburger = document.querySelector('#hamburgerMenu');
const navMenu = document.querySelector('#nav-menu');
const body = document.querySelector('body');



hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});
