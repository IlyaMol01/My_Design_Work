<?php
include_once('base.php');
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.html');
    exit();
}

$login = $_SESSION['login'];
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);

$sql = "UPDATE users SET name='$name', surname='$surname', number='$number', city='$city' WHERE login='$login'";
mysqli_query($base, $sql);

header('Location: profile.php');