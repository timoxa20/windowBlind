

window.addEventListener("DOMContentLoaded", () => { 
    // modal
    const modalTrigger = document.querySelectorAll('[data-modal]'),
    modal = document.querySelector('.popup'),
    modalCloseBtn = document.querySelector('[data-cloce]');

    modalTrigger.forEach(btn => {
       btn.addEventListener('click',  () => {
        modal.classList.add('show');
        modal.classList.remove('hide');
    });
    });
    
    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hide');
        modal.classList.remove('show');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal){
        modal.classList.add('hide');
        modal.classList.remove('show');
        }
    });
    //Slider
    const slider = document.querySelectorAll('.box__img'),
        prev = document.querySelector('.offer__slider-prev'),
        next = document.querySelector('.offer__slider-next'),
        total = document.querySelector('#total'),
        curent = document.querySelector('#current');

    let sliderIndex = 1;

    showSlider(sliderIndex);

    if(slider.length < 10) {
        total.textContent = `0${slider.length}`;
    } else {
        total.textContent = slider.length;
    }

    function showSlider(n){
        if(n > slider.length) {
            sliderIndex = 1;
        }

        if (n < 1){
            sliderIndex = slider.length;
        }

        slider.forEach(item => item.style.display = 'none');

        slider[sliderIndex - 1].style.display = 'block';

        if(slider.length < 10) {
            curent.textContent = `0${sliderIndex}`;
        } else {
            curent.textContent = sliderIndex;
        }
    }

    function plusSlider(n){
        showSlider(sliderIndex += n);
    }

    prev.addEventListener('click', () =>{
        plusSlider(-1);
    });
    next.addEventListener('click', () =>{
        plusSlider(1);
    });

    $(function() {
    
        $('.menu__btn').on('click', function(){
        $('.mobile__menu').toggleClass('mobile__menu--active');
    });
    });
    
    $(function () {
    
        $('.questions__box').on('click', function (e) {
            e.preventDefault();
            $('.questions__box').removeAttr('questions__box--cloce');
            $(this).toggleClass('questions__box--cloce');
            $($(this).attr('href')).toggleClass('questions__box--cloce');
        });
    
    });
});







