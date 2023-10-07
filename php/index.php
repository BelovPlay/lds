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
// Данные для БД
$servername="localhost";
$username="root";
$password="";
$dbname='clients';
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect__error){
    echo 'Подключение не удалось';
    die('Connection Failed:'.$conn->connect__error);
}
$sql="INSERT INTO users (Name,Email,Phone,NumTicket)
VALUES ('$name','$mail','$phone','$NumTicket')";
$sql="INSERT INTO users (Name,'',Phone,'');
VALUES ('$name','$mail','$phone','$numticket')";
if($conn->query($sql)===TRUE){
    echo "Данные отправлены";
}else{
    echo "Error: " . $sql . '<br>' . $conn->$error;
    echo 'Данные не отправлены';
}
$conn->close();
?>
</body>
</html>