//Кнопка для расчета проектного внедрения
let btnCalcProject=document.getElementById('linkRateProjects');
//Кнопка для расчет пакетного внедрения
let btnCalcPackage=document.getElementById('linkRatePackage');
//Получаем модальное окно для расчет проектного внедрения
let calcProject=document.getElementById('calcProjectModal');
//Получаем модальное окно для расчета пакетного внедрения
let calcPackage=document.getElementById('calcPackageModal');
//Вешаем обработчики события для отрабажения модального окна
btnCalcPackage.addEventListener('click',function(){
    event.preventDefault();
<<<<<<< HEAD
    calcProject.style.display='block';
})
btnCalcProject.addEventListener('click',function(){
    event.preventDefault();
    calcProject.style.display='block';
})
btnCalcPackage.addEventListener('dblclick',function(){
    event.preventDefault();
    calcProject.style.display='none';
})
btnCalcProject.addEventListener('dblclick',function(){
    event.preventDefault();
    calcPackage.style.display='none';
})
//Фиксируем опции как переменные
let regUser=document.getElementById('regUser');
let setRoles=document.getElementById('setRoles');
let setViewLeads=document.getElementById('setViewLeads');
let setViewContacts=document.getElementById('setViewContacts');
let setViewCompanies=document.getElementById('setViewCompanies');
let setViewDeals=document.getElementById('setViewDeals');
let setleads=document.getElementById('setleads');
let setDeals=document.getElementById('setDeals');
let setFieldsLeads=document.getElementById('setFieldsLeads');
let setFieldsContacts=document.getElementById('setFieldsContacts');
let setFieldsCompanies=document.getElementById('setFieldsCompanies');
let setFieldsDeals=document.getElementById('setFieldsDeals');
let setSmart=document.getElementById('setSmart');
let setFieldsSmart=document.getElementById('setFieldsSmart');
let AutoLeads=document.getElementById('AutoLeads');
let AutoDeals=document.getElementById('AutoDeals');
let AutoSmart=document.getElementById('AutoSmart');
let setTemplates=document.getElementById('setTemplates');
let setAnalytics=document.getElementById('setAnalytics');
let setReports=document.getElementById('setReports');
let importLeadOtherCRM=document.getElementById('importLeadOtherCRM');
let importContactsOtherCRM=document.getElementById('importContactsOtherCRM');
let importCompaniesOtherCRM=document.getElementById('importCompaniesOtherCRM');
let importDealsOtherCRM=document.getElementById('importDealsOtherCRM');
let integroPhone=document.getElementById('integroPhone');
let integroMail=document.getElementById('integroMail');
let integroAvito=document.getElementById('integroAvito');
let integroViber=document.getElementById('integroViber');
let integroWhatsApp=document.getElementById('integroWhatsApp');
let integroVK=document.getElementById('integroVK');
let integroSitefc=document.getElementById('integroSitefc');
let integrook=document.getElementById('integrook');
let intergroTelegram=document.getElementById('intergroTelegram');
let integroFacebook=document.getElementById('integroFacebook');
let integroSite=document.getElementById('integroSite');
let integroOnlineChat=document.getElementById('integroOnlineChat');
let integroCRMForms=document.getElementById('integroCRMForms');
let integroEmailCallTracking=document.getElementById('integroEmailCallTracking');
let integroOther=document.getElementById('integroOther');
let lessonChat=document.getElementById('lessonChat');
let lessonNews=document.getElementById('lessonNews');
let lessonCalendar=document.getElementById('lessonCalendar');
let integroOtherCalendar=document.getElementById('integroOtherCalendar');
let lessonDisk=document.getElementById('lessonDisk');
let setBase=document.getElementById('setBase');
let setAccessBz=document.getElementById('setAccessBz');
let createWorkGroup=document.getElementById('createWorkGroup');
let lessonGroup=document.getElementById('lessonGroup');
let lessonCardEmployee=document.getElementById('lessonCardEmployee');
let lessonReportsManager=document.getElementById('lessonReportsManager');
let lessonTasks=document.getElementById('lessonTasks');
let lessonViewsTasks=document.getElementById('lessonViewsTasks');
let lessonFocusAttention=document.getElementById('lessonFocusAttention');
let lessonProject=document.getElementById('lessonProject');
let AccessTasks=document.getElementById('AccessTasks');
let lessonSetTasksEmail=document.getElementById('lessonSetTasksEmail');
let templateDocs=document.getElementById('templateDocs');
let SetAutoTasks=document.getElementById('SetAutoTasks');
let lessonEfficiency=document.getElementById('lessonEfficiency');
let lessonStartTasksAI=document.getElementById('lessonStartTasksAI');
let createSitesTemplate=document.getElementById('createSitesTemplate');
let integroOnlineChatSite=document.getElementById('integroOnlineChatSite');
let setCRMsite=document.getElementById('setCRMsite');
let designCorporateColor=document.getElementById('designCorporateColor');
let accessRolesSites=document.getElementById('accessRolesSites');
let createMagazineSite=document.getElementById('createMagazineSite');
let createGoodsMagazine=document.getElementById('createGoodsMagazine');
let integroSystemPay=document.getElementById('integroSystemPay');
let lessonVideocalls=document.getElementById('lessonVideocalls');
let lessonBg=document.getElementById('lessonBg');
let lessonDemo=document.getElementById('lessonDemo');
let lessonFuncTalk=document.getElementById('lessonFuncTalk');
let lessonRecordVideoCalls=document.getElementById('lessonRecordVideoCalls');
let lessonCalliOSAndroid=document.getElementById('lessonCalliOSAndroid');
//Блок с выводом итогового расчета
let sum=0;
let sumOptions=document.getElementById('sumOptions');
lessonCalliOSAndroid.addEventListener('change',func);
function func(){
if(lessonCalliOSAndroid.checked){
    sum+=3500;
    sumOptions.innerHTML+=sum;
}else{
    sum=0;
    sumOptions.innerHTML+=sum;
    sumOptions.innerHTML='0';
}}