<?php
session_start();
?>

<form>

    <img src="<?php $_SESSION['user']['avatar']?>" width="200" alt="">
    <h2 style="margin: 10px 0"><?php $_SESSION['user']['full_name']?></h2>
    <a href="#"> <?php $_SESSION['user']['email'] ?></a>
</form>
