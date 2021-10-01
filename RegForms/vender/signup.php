<?php
session_start();
require 'connect.php';


$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);

//$chek_user = mysqli_query($connect, "SELECT")
if(mysqli_num_rows($chek_user) > 0){
    $user = mysqli_fetch_assoc($chek_user);
    $_SESSION['user'] = [
        "id" => $user['id_user'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];
    header('Location: ../profile.php');
}

if($password === $password_confirm)
{
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path))
    {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: ../registr.php');
    }
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php');
    mysqli_query($connect, "INSERT INTO `users` (`id_user`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
}
else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registr.php');
}





