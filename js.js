
    const mobileNav = document.querySelector('.menu');
    const burgerButton = document.querySelector('.hamburger-menu');




    burgerButton.addEventListener('click', function(){
    mobileNav.classList.toggle('active');
    burgerButton.classList.toggle('active');
})
    /*dropdown_test.addEventListener('click', function (){
    pcSmallNavLink.classList.toggle('active');
})*/


    const nav_link = document.querySelectorAll(".nav-link");
    const dropdown_test = document.querySelectorAll(".dropdown-test");
    const deep_link = document.querySelectorAll(".deep-link");
    const submenu_link = document.querySelectorAll(".submenu-link");

    /*[].forEach.call(dropdown_test, el => {
    el.addEventListener('click',click_dropdown , false)
});

    function click_dropdown() {
    if(this === dropdown_test[0]) console.log(dropdown_test.length)
}*/
    [].forEach.call(deep_link, el => {      //dla kazdego elementu dropdown_test
    el.addEventListener('click', () => {
        el.closest('.submenu-link').classList.toggle('active');
        /*const index = [...child.parentElement.children].indexOf(child);*/
        /*console.log(index);*/
        /*submenu_link[index].classList.toggle('active');*/
    })

});

    [].forEach.call(dropdown_test, el => {      //dla kazdego elementu dropdown_test
    el.addEventListener('click', () => {
        const child = el.closest('.nav-link');
        const index = [...child.parentElement.children].indexOf(child);
/*        console.log(index);*/
        nav_link[index].classList.toggle('active');
    })

});
    function click_dropdown() {

}

    /*    nav_link[1].classList.toggle("active");*/
/*    console.log(nav_link.length);*/


    /*    [].forEach.call(nav_link, el => {
    el.addEventListener('click', btnClick, false)
});*/





    /*   function click_dropdown() {
    [].forEach.call(dropdown_test, el => {
        if (el !== this.nav_link) el.classList.remove("active");
    })
    this.classList.toggle('active');
}*/

    /*    function btnClick() {
    [].forEach.call(nav_link, el => {
        if (el !== this) el.classList.remove("active");
    });
    this.classList.toggle('active');
}*/

