<?php
session_start();
session_unset();
session_destroy();
unset($_SESSION['nickname']);
header("Location: index.php");