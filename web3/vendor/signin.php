<?php

    session_start();
    require_once 'connect.php';

    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $password = md5(mysqli_real_escape_string($connect, $_POST['password']));

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location: ../profile1.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../profile.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
