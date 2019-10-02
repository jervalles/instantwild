const modal = document.querySelector('.modal');
const trigger = document.querySelector('.buttonpostgif');
const closeBtn = document.querySelector('#closebuttonconteneur');
const goTopBtn = document.querySelector('.gotopbutton');



function toggleModal() {
    modal.classList.toggle("show_modal");
    
    if (modal.classList.contains('show_modal')){
        goTopBtn.style.display = 'none';
    }else{
        goTopBtn.style.display = 'block';
    }
};

trigger.addEventListener('click', toggleModal);
closeBtn.addEventListener('click', toggleModal);

document.addEventListener('click', event =>{
    if (event.target === modal) {
        toggleModal();
    }
});
