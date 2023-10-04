let calc=document.querySelector('.calc');
let calcmodal=document.querySelector('.calcmodal');
let overlay=document.querySelector('.overlay');
let integration=document.getElementById('integration');
calc.addEventListener('click',function(){
    event.preventDefault();
    let answercalc=confirm('Вы хотите открыть калькулятор для расчета стоимости проекта?');
    if(answercalc){
        alert('Калькулятор пока не доведен до конца, но скоро появится :) Следите за новостями');
    }else{
        // alert('Я показываю калькулятор');
        calcmodal.style.display='block';
        overlay.style.display='block';
    }
})
integration.addEventListener('click',function(){
    
})