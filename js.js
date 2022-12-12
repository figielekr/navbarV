
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

    //tworzenie elementow
    //strona do hejtowania
    divCreate('meme-id', 'meme-container', 'box-center');
    divCreate('meme-id', 'meme-container', 'box-center');
    divCreate('meme-id', 'meme-container', 'box-center');
    divCreate('meme-id', 'meme-container', 'box-center');
    divCreate('meme-id', 'meme-container', 'box-center');
    divCreate('meme-id', 'meme-container', 'box-center');

    function divCreate (newID, newClass, existingID){
        const appendContainer = document.getElementById(existingID);
        const newElement = document.createElement('div');
        newElement.classList.add(newClass);
        newElement.setAttribute('id', newID);
        appendContainer.appendChild(newElement);
    }
    /*const appendContainer = document.getElementById('box-center');
    const newElement = document.createElement('div');
    newElement.classList.add('meme-container');
    newElement.setAttribute('id', 'meme-id');
    appendContainer.appendChild(newElement);*/

    spanCreate('titleID', 'titleClass', 'meme-id', "Generator memów");

    function spanCreate (newID, newClass, existingID, textInsideSpan){
        const appendTitle = document.getElementById(existingID)
        const titleElement = document.createElement('span');
        titleElement.setAttribute('id', newID);
        titleElement.classList.add(newClass);
        titleElement.innerText = textInsideSpan;
        appendTitle.appendChild(titleElement);
    }
    /*const appendTitle = document.getElementById('meme-id')
    const titleElement = document.createElement('span');
    titleElement.setAttribute('id', 'titleID');
    titleElement.classList.add('titleClass');
    titleElement.innerText = "Generator memów";
    appendTitle.appendChild(titleElement);*/





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

