
<?php
include_once('base.php');
session_start();
$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email =  $_POST['email'];
$number = $_POST['number'];
$city = $_POST['city'];

$error = false;

if (empty($name) || empty($surname) || empty($login) || empty($email) || empty($number) || empty($city) || empty($pass)) {
    echo '<p style="color: FireBrick; text-align: center;"><big>Введите все данные корректно!</big></p>';
    $error = true;
} else {
    if(strlen($login) < 5){
        echo '<p style="color: FireBrick; text-align: center;"><big>Логин должен быть не менее 5 символов!</big></p>';
        $error = true;
    }
    if (strlen($pass) < 6) { 
        echo '<p style="color: FireBrick; text-align: center;"><big>Пароль должен быть не менее 6 символов!</big></p>'; 
        $error = true; 
    } 
    if (!preg_match('/[!@#\$%№&]/', $pass)) { 
        echo '<p style="color: FireBrick; text-align: center;"><big>Некорректно оформлено поле Пароль!</big></p>'; 
        echo '<p style="color: FireBrick; text-align: center;">Пароль должен содержать один из данных символов: (!, @, #, №, $, %, &)</p>'; 
        $error = true; 
    } 
    if(strlen($email) < 12) {
        echo '<p style="color: FireBrick; text-align: center;"><big>Почта должна быть не менее 8 символов!</big></p>';
        $error = true;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<p style="color: FireBrick; text-align: center;"><big>Некорректно оформлено поле Email!</big></p>';
        echo '<p style="color: FireBrick; text-align: center;">(Допустимые почтовые домены: @gmail.com, @mail.ru, @vk.com, @yandex.ru, @ok.ru)</p>';
        $error = true;
    }
    if(strlen($number) < 11 || substr($number, 0, 1) !== '+'){
        echo '<p style="color: FireBrick; text-align: center;"><big>Номер телефона должен начинаться с + и содержать не менее 10 цифр!</big></p>';
        $error = true;
    }
    
    if($error) {
        echo '<script>
          setTimeout(() => {
            var alertBox = document.createElement("div");
            alertBox.style.position = "fixed";
            alertBox.style.left = "50px";
            alertBox.style.top = "15px";
            alertBox.style.padding = "20px";
            alertBox.style.background = "green";
            alertBox.style.color = "white";
            alertBox.style.borderRadius = "10px";
            alertBox.textContent = "Пожалуйста, исправьте ошибки!";
            document.body.appendChild(alertBox);
            
            setTimeout(() => {
              alertBox.style.display = "none";
              window.location.href = "register.html";
            }, 7000);
          }, 100);
        </script>';
      }
       else {
        $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
        $sql = "INSERT INTO users (name, surname, login, email, number, city, password) VALUES ('$name', '$surname', '$login', '$email', '$number', '$city', '$pass')";
        mysqli_query($base,$sql);
        $result = mysqli_query($base,"SELECT id FROM users ORDER BY id DESC LIMIT 1;");
        $id = $result->fetch_array(MYSQLI_ASSOC);
        $id = $id['id'];
        $_SESSION['login'] = $login;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        header('Location: index.php');
    }
}