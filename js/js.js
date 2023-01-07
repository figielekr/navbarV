
    const mobileNav = document.querySelector('.menu');
    const burgerButton = document.querySelector('.hamburger-menu');




    burgerButton.addEventListener('click', function(){
    mobileNav.classList.toggle('active');
    burgerButton.classList.toggle('active');
})


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


/*    divCreate('meme-id', 'article-container', 'box-center');
    divCreate('meme-id', 'article-container', 'box-center');
    divCreate('meme-id', 'article-container', 'box-center');*/




    function divCreate (newID, newClass, existingID){
        const appendContainer = document.getElementById(existingID);
        const newElement = document.createElement('div');
        newElement.classList.add(newClass);
        newElement.setAttribute('id', newID);
        appendContainer.appendChild(newElement);
    }
    function imgCreate (imgsrc, existingID, newClass){
        const createImg = document.createElement('img');
        createImg.src = './uploads/' + imgsrc;
        createImg.classList.add(newClass);
        const parentDiv = document.getElementById(existingID);
        parentDiv.appendChild(createImg);
    }

    function spanCreate (newID, newClass, existingID, textInsideSpan){
        const appendTitle = document.getElementById(existingID)
        const titleElement = document.createElement('span');
        titleElement.setAttribute('id', newID);
        titleElement.classList.add(newClass);
        titleElement.innerText = textInsideSpan;
        appendTitle.appendChild(titleElement);
    }


/*    divCreate('meme-id' + obj['articleID'], 'article-container', 'box-center');
    divCreate('article_header'+ obj['articleID'], 'article_header', 'meme-id' + obj['articleID']);
    divCreate('header_avatar' + obj['articleID'], 'user_avatar', 'article_header'+ obj['articleID']);
    imgCreate(obj['avatar_article_path'], 'header_avatar'+ obj['articleID'], 'avatar_img');
    divCreate('titleID_span' + obj['articleID'], 'header_avatar', 'article_header'+ obj['articleID']);
    spanCreate('titleID', 'titleClass',  'titleID_span' + obj['articleID'], obj['title']);
    divCreate('article_info' + obj['articleID'], 'article_info', 'article_header'+ obj['articleID']);
    spanCreate('article_info_span', 'something',  'article_info' + obj['articleID'], obj['author'] + ' • '+ obj['add_date']);
    divCreate('votes'+ obj['articleID'], 'votes', 'article_header' + obj['articleID']);
    spanCreate('votes_span'+ obj['articleID'], 'vote_count', 'votes'+ obj['articleID'], obj['likes'] - obj['dislikes'])*/


