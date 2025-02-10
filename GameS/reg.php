<?php
include_once('base.php');
session_start();

$errors = [];
$show_errors = false; 

if ($base->connect_error) {
    echo '<p style="color:red;">Connection failed: ' . $base->connect_error . '</p>';
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $nickname = $_POST["login"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $city = mysqli_real_escape_string($base, $_POST["city"]);
    $day = mysqli_real_escape_string($base, $_POST["day"]);
    $month = mysqli_real_escape_string($base, $_POST["month"]);
    $year = mysqli_real_escape_string($base, $_POST["year"]);

    if (empty($city)) {
        $errors['city'] = 'Выберите Страну';
    }
    if (empty($day)) {
        $errors['day'] = 'Выберите День';
    }
    if (empty($month)) {
        $errors['month'] = 'Выберите Месяц';
    }
    if (empty($year)) {
        $errors['year'] = 'Выберите Год';
    }
    if (empty($name)) {
        $errors['name'] = 'Напишите Имя';
    }
    if (empty($surname)) {
        $errors['surname'] = 'Напишите Фамилию';
    }
    if (empty($nickname)) {
        $errors['login'] = 'Напишите Никнейм';
    } elseif(strlen($nickname) < 5 || strlen($nickname) > 10){
        $errors['login'] = 'Ник должен содержать от 5 до 10 символов';
    } elseif (preg_match('/[а-яА-ЯЁё]/u', $nickname)) {
        $errors['login'] = 'Нельзя использовать Русские символы';
    }    
    if (empty($email)) {
        $errors['email'] = 'Напишите Электронную почту';
    } elseif(!preg_match('/@gmail.com$|@mail.ru$|@vk.com$|@ok.ru$|@yandex.ru$/', $email)){
        $errors['email'] = 'Вы ввели некорректно Email. Используйте формат: @gmail.com, @mail.ru, @vk.com, @ok.ru, @yandex.ru';
    }
    if(strlen($email) < 10){
        $errors['email'] = 'Email должен содержать не менее 10 символов';
    } elseif (preg_match('/[а-яА-ЯЁё]/u', $email)) {
        $errors['email'] = 'Нельзя использовать Русские символы';
    }   
    if (empty($pass)) {
        $errors['password'] = 'Напишите Пароль';
    } elseif(strlen($pass) < 6){
        $errors['password'] = 'Пароль должен содержать не менее 6 символов';
    } elseif (preg_match('/[а-яА-ЯЁё]/u', $pass)) {
        $errors['password'] = 'Нельзя использовать Русские символы';
    }

    if (count($errors) > 0) {
        $show_errors = true;
    } else {
        $sql = "INSERT INTO users (name, surname, login, email, password, city, day, month, year) 
        VALUES ('$name', '$surname', '$nickname', '$email', '$pass', '$city', '$day', '$month', '$year')";

        if ($base->query($sql) === TRUE) {
            $_SESSION['nickname'] = $nickname;
            $_SESSION['email'] = $email;
            header('Location: index.php');
            exit();
        } else {
            echo "<span style='color: red;'>Ошибка: " . $sql . "<br>" . $base->error . "</span>";
        }
    }
}

include('register.php');