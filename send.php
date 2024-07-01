<?php
//Принимаем почтовые данные
$name=&_POST['name'];
$phone=$__POST['phone'];
$what=&_POST['what'];
// Тут указываем на какой ящик посылать письмо
$to = "f_suprun@mail.ru";
// Далее идет тема и само сообщение
$subject = "Заявка с сайта SGG";
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочетЖ ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />;
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html";
charset=utf8\r\n";
mail ($to, $subject, $message, $headers);
header('location: thanks.html');
exit();
?>