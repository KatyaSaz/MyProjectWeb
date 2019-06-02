<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$message = urldecode($message);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);
$message = trim($message);


$mysqli = new mysqli('localhost', 'root', 'PinkFullOf87', 'register info');
if (mysqli_connect_errno()) 
{
   echo "Подключение невозможно: ".mysqli_connect_error();
}

$query = sprintf("SELECT name, email, telephone number=,%s%s%s",
    mysql_real_escape_string($fio),
    mysql_real_escape_string($email),
	mysql_real_escape_string($tel));

// Выполняем запрос
$result = mysql_query($query)
	or die("Invalid query: " . mysql_error());

 $mysqli->close();

//if (mail("ekaterina@sazonov-online.info", "Заявка с сайта", "Имя:".$fio.".\r\n E-mail: ".$email.".\r\n Телефон: ".$tel."".$message))
//} else //{ 
 //  echo "Error";

