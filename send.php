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
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $tel;
//echo "<br>";
//echo $people;
//echo "<br>";
//echo $date;
//echo "<br>";
//echo $message;
if (mail("ekaterina@sazonov-online.info", "Заявка с сайта", "Имя:".$fio.".\r\n E-mail: ".$email.".\r\n Телефон: ".$tel."".$message))
 { header("Location: /");
} else { 
   echo "Error";
}

