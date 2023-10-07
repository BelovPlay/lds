<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка данных интеграторам</title>
</head>
<body>
<?php 
// Данные с инпутов
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$id=$_POST['id'];
$NumTicket=$_POST['NumTicket'];
// Данные с чебоксов
if (!empty($_GET)) { // если форма была отправлена
    if (isset($_GET['articleBz'])) { // если флажок отмечен
        echo 'Требуется заполнение статей в базе знаний'.'<br>';
    } if(isset($_GET['importProduct'])){
        echo 'Требуется импорт каталога продуктов'.'<br>';
    }if(isset($_GET['importCompanies'])){
        echo 'Требуется импорт компаний'.'<br>';
    }if(isset($_GET['importContacts'])){
        echo 'Требуется импорт контактов'.'<br>';
    }if(isset($_GET['importLeads'])){
        echo 'Требуется импорт лидов'.'<br>';
    }if(isset($_GET['importDeals'])){
        echo 'Требуется импорт сделок'.'<br>';
    }if(isset($_GET['integrateCustomApp'])){
        echo 'Требуется интеграция с кастомными приложениями'.'<br>';
    }if(isset($_GET['integrateSignature'])){
        echo 'Требуется интеграция подписи в шаблоны документов'.'<br>';
    }if(isset($_GET['integrate1C'])){
        echo 'Требуется интеграция с 1С'.'<br>';
    }if(isset($_GET['importDataOtherCRM'])){
        echo 'Требуется миграция данных из других CRM'.'<br>';
    }if(isset($_GET['settingAnalitycs'])){
        echo 'Требуется настройка аналитики'.'<br>';
    }if(isset($_GET['settingBz'])){
        echo 'Требуется настройка базы знаний'.'<br>';
    }if(isset($_GET['settingBp'])){
        echo 'Требуется настройка отладка и корректировка бизнес процессов'.'<br>';
    }if(isset($_GET['settingViewCards'])){
        echo 'Требуется настройка видов карточек контакта/компании/лида/сделки'.'<br>';
    }if(isset($_GET['settingFunnel'])){
        echo 'Требуется настройка воронок'.'<br>';
    }if(isset($_GET['settingFunnelSP'])){
        echo 'Требуется настройка воронок смарт процессов'.'<br>';
    }if(isset($_GET['lessonsTasks'])){
        echo 'Требуется настройка и обучение работе с задачами и проектами'.'<br>';
    }if(isset($_GET['settingCards'])){
        echo 'Требуется настройка карточек контакта/компании/лида/сделки'.'<br>';
    }if(isset($_GET['settingCardsSP'])){
        echo 'Требуется настройка карточки смарт процесса'.'<br>';
    }if(isset($_GET['settingCustomReports'])){
        echo 'Требуется настройка кастомных отчетов'.'<br>';
    }if(isset($_GET['settingMailTemplates'])){
        echo 'Требуется настройка почтовых шаблонов'.'<br>';
    }if(isset($_GET['settingRoles'])){
        echo 'Требуется настройка прав доступа для разных сотрудников'.'<br>';
    }if(isset($_GET['settingTemplateDocs'])){
        echo 'Требуется настройка шаблонов документов'.'<br>';
    }if(isset($_GET['settingCrmForms'])){
        echo 'Требуется настройка CRM формы'.'<br>';
    }if(isset($_GET['lessonsCalendar'])){
        echo 'Обучение работы с календарем'.'<br>';
    }if(isset($_GET['lessonsCRM'])){
        echo 'Требуется обучение сотрудников работе в Б24'.'<br>';
    }if(isset($_GET['integrateAvito'])){
        echo 'Требуется подключение авито'.'<br>';
    }if(isset($_GET['integrateViber'])){
        echo 'Требуется подключение вайбера'.'<br>';
    }if(isset($_GET['integrateWhatsApp'])){
        echo 'Требуется подключение ватсапа'.'<br>';
    }if(isset($_GET['integrateVK'])){
        echo 'Требуется подключение Вконтакте'.'<br>';
    }if(isset($_GET['integrateInstagram'])){
        echo 'Требуется подключение инстаграм'.'<br>';
    }if(isset($_GET['integrateTransferSite1C'])){
        echo 'Требуется подключение обмена с 1с управление сайтом'.'<br>';
    }if(isset($_GET['integrateOk'])){
        echo 'Требуется подключение одноклассники'.'<br>';
    }if(isset($_GET['integrateOpenLines'])){
        echo 'Требуется подключение открытых линий'.'<br>';
    }if(isset($_GET['integrateMail'])){
        echo 'Требуется подключение почты'.'<br>';
    }if(isset($_GET['integrateTg"'])){
        echo 'Требуется подключение телеграмма'.'<br>';
    }if(isset($_GET['integratePhones'])){
        echo 'Требуется подключение телефонии'.'<br>';
    }if(isset($_GET['integrateFacebook'])){
        echo 'Требуется подключение фейсбук'.'<br>';
    }if(isset($_GET['integrateFormVk'])){
        echo 'Требуется подключение форм с группы вконтакте'.'<br>';
    }if(isset($_GET['invitingUsers'])){
        echo 'Требуется приглашение пользователей'.'<br>';
    }if(isset($_GET['settingRolesBz'])){
        echo 'Требуется распределение доступа к статьям в базе знаний'.'<br>';
    }if(isset($_GET['settingRolesGroupProjects'])){
        echo 'Требуется распределение доступов к группам и проектам'.'<br>';
    }if(isset($_GET['settingCompaniesOfRoles'])){
        echo 'Требуется распределение компаний по ролям (поставщики,контрагенты)'.'<br>';
    }if(isset($_GET['settingContactsOfRoles'])){
        echo 'Требуется распределение контактов по ролям (поставщики,контрагенты)'.'<br>';
    }if(isset($_GET['createGroups'])){
        echo 'Требуется создание групп'.'<br>';
    }if(isset($_GET['createPrjects'])){
        echo 'Требуется создание проектов'.'<br>';
    }
}
// Данные для БД
// $servername="localhost";
// $username="root";
// $password="";
// $dbname='clients';
// $conn=new mysqli($servername,$username,$password,$dbname);
// if($conn->connect__error){
//     echo 'Подключение не удалось';
//     die('Connection Failed:'.$conn->connect__error);
// }
// $sql="INSERT INTO users (Name,Email,Phone,NumTicket)
// VALUES ('$name','$mail','$phone','$NumTicket')";
// $sql="INSERT INTO users (Name,'',Phone,'');
// VALUES ('$name','$mail','$phone','$numticket')";
// if($conn->query($sql)===TRUE){
//     echo "Данные отправлены";
// }else{
//     echo "Error: " . $sql . '<br>' . $conn->$error;
//     echo 'Данные не отправлены';
// }
// $conn->close();
// ?>
</body>
</html>