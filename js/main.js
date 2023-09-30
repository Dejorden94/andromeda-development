AOS.init({
    duration: 1200,
});

const mobileMenu = document.getElementById("mobile-menu-button-js");
const menuList = document.getElementById("mobile-menu-list-js");

mobileMenu.onclick = () => {
    if (menuList.classList.contains('open')) {
        menuList.classList.remove('open');
        mobileMenu.classList.remove('cross');
    } else {
        menuList.classList.add('open');
        mobileMenu.classList.add('cross');
    }
}
