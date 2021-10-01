<?php
session_start();
require 'vender/connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = mysqli_query($connect, "SELECT `login`, `password` FROM `users`");
$result_sql = mysqli_fetch_all($sql, MYSQLI_ASSOC);

$login_check = $result_sql[0]['login'];
$hash_password = $result_sql[0]['password'];

if ($password === $hash_password) {
    $_SESSION['message'] = 'Вход выполнен, пошел вон!';
    header('Location: ../Success.php');
}
else {
    $_SESSION['message'] = 'Вход не выполнен, несовпадение данных!';
    header('Location: ../index.php');
}
