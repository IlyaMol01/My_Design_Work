<?php
include_once('base.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nickname = $_POST["login"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE login='$nickname' AND password='$pass'";
    $result = $base->query($sql);

    if ($result->num_rows == 0) {
        echo "Неверный логин или пароль";
    } else {
        $_SESSION['visited'] = true;
        $_SESSION['nickname'] = $nickname;
        setcookie('login', $nickname, time() + 3600 * 24 * 30, '/');
        setcookie('password', $pass, time() + 3600 * 24 * 30, '/');
    }
}
