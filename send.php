<?php
//Принимаем почтовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
$question=$_POST['question'];
// Тут указываем на какой ящик посылать письмо
$to = "Zabory_lyx@mail.ru";
// Далее идет тема и само сообщение
$subject = "Заявка с сайта smart gard";
$message = "
Письмо отправлено из моей формы на сайте smart gard. <br>
Пользователь хочет: ".htmlspecialchars($what). "<br>
Имя: ".htmlspecialchars($name)."<br>
Телефон: ".htmlspecialchars($phone)."<br>
Вопрос: ".htmlspecialchars($question)."<br>";
$headers = "From: crimeaimplant.ru <info@crimeaimplant.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('location: thanks.html');
exit;
?>