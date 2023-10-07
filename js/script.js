let calc=document.querySelector('.calc');
let calcmodal=document.querySelector('.calcmodal');
let overlay=document.querySelector('.overlay');
let integration=document.getElementById('integration');
calc.addEventListener('click',function(){
    event.preventDefault();
    calcmodal.style.display='block';
    overlay.style.display='block';
})