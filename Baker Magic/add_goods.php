<?php
include_once('base.php');
session_start();
$id_user = $_SESSION['id'];
$id_goods = $_POST['goods_id'];
$sql = ("INSERT INTO cart (id_users, id_goods, quantity) VALUES ('$id_user', '$id_goods', '1');");
mysqli_query($base, $sql);
echo($id_user);
echo($id_goods);
