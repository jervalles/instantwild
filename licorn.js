let checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
if(this.checked) {
    trans()
    document.body.setAttribute('data-theme', 'licorne');
    document.getElementsByTagName('nav')[0].setAttribute('data-theme', 'licorne');
    document.getElementById('logolink').setAttribute('data-theme', 'licorne');

} else {
    trans()         
    document.body.setAttribute('data-theme', 'licorneNone');
    document.getElementsByTagName('nav')[0].setAttribute('data-theme', 'licorneNone');
    document.getElementById('logolink').setAttribute('data-theme', 'licorneNone');
}
})

let trans = () => {
document.documentElement.classList.add('transition');
window.setTimeout(() => {
    document.documentElement.classList.remove('transition')
}, 1000)
}





