<?php
$fio = $_POST['fio'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);

$mysqli = new mysqli('localhost', 'root', 'PinkFullOf87', 'register info');
$dsn="mysql:dbname=register info;host=127.0.0.1:3306";
$user="root";
$password="PinkFullOf87";
$db = new PDO($dsn,$user,$password);
if (mysqli_connect_errno()) 
{
   echo "Подключение невозможно: ".mysqli_connect_error();
}
$query="INSERT INTO `info about users` (`Name`, `Email`, `Number`) VALUES ('{$fio}', '{$email}','{$tel}');";
$result = $db->query($query);
 ?>
