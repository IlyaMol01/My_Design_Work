<?php
session_start();
include_once('base.php');
if (!isset($_SESSION['id_user'])) {
  exit(); 
}
$id_user = $_SESSION['id_user'];
$id = $_POST['id'];

if (isset($_POST['plus'])) {
  $sql = "UPDATE cart SET quantity = quantity + 1 WHERE id = '$id' AND id_users = '$id_user';";
  mysqli_query($base, $sql);
} elseif (isset($_POST['munus'])) {
  $sql = "UPDATE cart SET quantity = quantity - 1 WHERE id = '$id' AND id_users = '$id_user';";
  mysqli_query($base, $sql);
  $result = mysqli_query($base, "SELECT quantity FROM cart WHERE id = '$id' AND id_users = '$id_user';");
  $row = $result->fetch_assoc();
  if ($row['quantity'] < 0) {
    $sql = "UPDATE cart SET quantity = 0 WHERE id = '$id' AND id_users = '$id_user';";
    mysqli_query($base, $sql);
  }
} elseif (isset($_POST['delete'])) {
  $sql = "DELETE FROM cart WHERE id = '$id' AND id_users = '$id_user';";
  mysqli_query($base, $sql);
}
$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");
exit();