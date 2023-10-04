let calc=document.querySelector('.calc');
calc.addEventListener('click',function(){
    event.preventDefault();
    let answercalc=confirm('Вы хотите открыть калькулятор для расчета стоимости проекта?');
    if(answercalc){
        alert('Калькулятор пока не доведен до конца, но скоро появится :) Следите за новостями');
    }
})