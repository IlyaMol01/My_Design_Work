<?php
include_once('base.php');
session_start();
$name = $_POST['name'];
$number = $_POST['number'];
$email =  $_POST['email'];
$message = $_POST['message'];
$valid = true;
$error_message = ''; 

if (empty($name) || empty($number) || empty($email)) {
    $valid = false;
    $error_message = "Введите данные!"; 
}
else {
    if(strlen($number) < 10 || $number[0] != '+') {
        echo '<p style="color: FireBrick; text-align: center;"><big>Номер телефона должен быть не менее 10 символов</big></p>';
        $valid = false;
        $error_message = "Некорректно оформлено поле Номер телефона!";
        $error_message = '"color: FireBrick; text-align: center;"(В начале должен стоять знак: +. Пример: +7 775 877 6120)';
    }
    if(strlen($email) < 12) {
        echo '<p style="color: FireBrick; text-align: center;"><big>Почта должна быть не менее 8 символов!</big></p>';
    }
    if (!strpos($email, '@gmail.com') && !strpos($email, '@mail.ru') && !strpos($email, '@vk.com') && !strpos($email, '@yandex.ru') && !strpos($email, '@ok.ru')) {
        echo '<p style="color: FireBrick; text-align: center;"><big>Некорректно оформлено поле Email!</big></p>';
        echo '<p style="color: FireBrick; text-align: center;">(Допустимые почтовые домены: @gmail.com, @mail.ru, @vk.com, @yandex.ru, @ok.ru)</p>';
    }
    else {
        $sql = ("INSERT INTO forms (name, number, email, message) VALUES ('$name', '$number', '$email', '$message');");
        mysqli_query($base,$sql);
        $result = mysqli_query($base,"SELECT id FROM forms ORDER BY id DESC LIMIT 1;");
        $id = $result-> fetch_array(MYSQLI_ASSOC);
        $id = $id['id'];
        $_SESSION['name'] = $name;
        $_SESSION['id'] = $id;
    }
}