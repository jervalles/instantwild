
const randomBtnDesktop = document.querySelectorAll('.leftMenuSection ul li')[4];
const randomBtnMobile = document.querySelectorAll('#burger ul li')[4];


function displayRandomPost(){
    const articles = document.querySelectorAll('article');
    const h2Elts = document.querySelectorAll('h2');
    const hrElt = document.querySelector('hr');

    const random = setRandomNumbers(articles.length);

    h2Elts[1].style.display = 'none';
    h2Elts[0].textContent = 'A random post : '

    hrElt.style.display = 'none';

    for (let i=0; i < articles.length; i++){
        if (i !== random){
            articles[i].style.display = 'none';
        } else {
            articles[i].style.display = 'flex';
            articles[i].querySelector('img').style.width = 'unset';
            articles[i].querySelector('img').style.maxHeight ="60vh";
            
        }
    }
}

randomBtnDesktop.addEventListener('click', displayRandomPost);
randomBtnMobile.addEventListener('click', displayRandomPost);
