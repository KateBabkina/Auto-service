<?php

    session_start();
    require_once 'connect.php';
	$id=$_SESSION['user'][id];
	$delete_user = mysqli_query($connect, "DELETE FROM `users` WHERE `id` = '$id'");
	unset($_SESSION['user']);
	header('Location: ../profile.php');
	?>