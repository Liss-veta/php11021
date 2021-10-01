<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reg/Auto</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="body">
    <h1>Авторизация</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a></p>
        <?php
        if($_SESSION['message'])
        {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
<!--Форма авторизации-->


<div id="animation"></div>



<script src="assets/script.js"></script>
</body>
</html>