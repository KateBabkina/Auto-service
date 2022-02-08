<?php

    session_start();
    require_once 'connect.php';

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($connect, $_POST['password_confirm']);

    if ($password === $password_confirm) {
		if (empty($login) || mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'"))>0){
		$_SESSION['message'] = 'Введите другой логин';
        header('Location: ../register.php');
		}
		else if (empty($password)){
		$_SESSION['message'] = 'Введите пароль';
        header('Location: ../register.php');
		}
		else{
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../profile.php');
		}

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
