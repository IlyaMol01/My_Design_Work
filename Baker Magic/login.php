<?php
session_start();
include_once('base.php');

$error = false;

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
}

$login = trim($_POST['login'] ?? '');
$password = trim($_POST['password'] ?? '');
if (empty($login) || empty($password)) {
    echo '<p style="color: FireBrick; text-align: center;"><big>Введите все поля</big></p>';
    $error = true;
}

$sql = ("SELECT * FROM users WHERE login = '{$login}'");
$result = mysqli_query($base, $sql);
if ($result->num_rows == 0) {
    echo '<p style="color: FireBrick; text-align: center;"><big>Пользователь не найден</big></p>';
    $error = true;
}

if ($user = $result->fetch_assoc()) {
if (!password_verify($password, $user ['password'])) {
    echo '<p style="color: FireBrick; text-align: center;"><big>Неверный пароль</big></p>';
    $error = true;
}
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
          window.location.href = "login.html";
        }, 7000);
      }, 100);
    </script>';
  }
